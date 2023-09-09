<?php

$servername = "localhost";
$database = "artemaidelapiedra";
$username = "artemai";
$password = "artemai";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
} catch(PDOException $e){
    die("PDO Conection Error: " . $e->getMessage());
}

?>