<?php
    require_once("./generalFiles/functions.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        
            $check = checkUser($_POST["name"], $conn);

            $dates = checkPassword($_POST["password"], $check["db"]);
            
            if(!$check["boolean"]){
                echo "usuario no existe";
            }


            elseif($dates["boolean"]){
                "contraseña y usuario correcto";
                $_SESSION["usuario"] = $dates["userDates"];
                
                header("Location: index.php");
                
            }

            else{
                echo "Contraseña";
            }
         
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <?php if(isset($_SESSION["usuario"])  && is_array($_SESSION["usuario"])):?>
        <section class="username">
            <p>Bienvenido <?php echo $_SESSION["usuario"]["name"] ?></p>
        </section>
    <?php endif;?> 
        <form action="mamaypapa.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Ingrese su nombre">
            <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>