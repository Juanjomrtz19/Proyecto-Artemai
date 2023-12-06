<?php
    require_once("conexion.php");
    
    #This function check if the user exits into the database
    function checkUser($name, $conn){
        $check = TRUE;
        
        $sql = "SELECT * FROM usuario WHERE name = :nombre";
        
        $statement = $conn->prepare($sql);
        $statement->bindParam(":nombre", $name);
        $statement->execute();

        if($statement->rowCount() == 0){
            $check = FALSE;
        }

        $array = [];
        $array["boolean"] = $check;
        $array["db"] = $statement;
        return $array;
    }

    #Check the password
    function checkPassword($password1, $statement){
        $check = FALSE;
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $password = $row["password"]; 
        
        if(password_verify($password1, $password)){
            $check = TRUE;
        }

        $array = [];
        $array["boolean"] = $check;
        $array["userDates"] = $row;
        return $array;

    }

    //Insert a new user into the database
    function insertUser($name, $password, $conn){
        $sql = "INSERT INTO usuario VALUES(:name, :password)";
        $statement = $conn->prepare($sql);
        $statement->bindParam(":name", $name);
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $statement->bindParam(":password", $hashed_password);
        
        if($statement->execute()){
            echo "Succefull insert";
        }

        else{
            echo "Failed insert";
        }
    }

    //Check if there is a session
    function checkSession(){
        if(!isset($_SESSION["usuario"])){
            header("Location: index.php");
        }
    }
?>