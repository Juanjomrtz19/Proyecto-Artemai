<?php
session_start();
require_once("./generalFiles/functions.php");
checkSession();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $filename = $_FILES["image"]["name"];
    $filetype = $_FILES["image"]["type"];
    $filesize = $_FILES["image"]["size"];
    $tmpfile = $_FILES["image"]["tmp_name"];

    $carpeta_destino = "./img/img_landing/materiales/";

    if (substr($filetype, 0, 5) === "image" && $filesize > 0) {
        $uniquename = uniqid() . "_" . $filename;
        $ruta_destino = $carpeta_destino . $uniquename;
        move_uploaded_file($tmpfile, $ruta_destino);

        
        $sql = "INSERT INTO material(name, url) VALUES(:materialname, :url)";
        $statement = $conn->prepare($sql);
        $statement->bindParam(":materialname", $_POST["materialname"]);
        $statement->bindParam(":url", $uniquename);   
        $statement->execute(); 


}   else{
        echo "it is not an image";
    }   
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir material</title>
</head>
<body>
    <form action="addmaterial.php" method="POST" enctype="multipart/form-data"> 
        <input type="file" name="image" id="image">
        <input type="text" name="materialname">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>