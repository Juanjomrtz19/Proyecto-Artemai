<?php

$servername = "localhost";
$database = "artemaidelapiedra";
$username = "artemai";
$password = "artemai";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>