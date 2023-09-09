<?php
    require_once("functions.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        insertUser($_POST["name"], $_POST["password"], $conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert users</title>
</head>
<body>
    <form action="insertacioñjuanjo.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Ingrese su nombre">
        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
        <input type="submit" value="Registrar">
    </form>
</body>
</html>