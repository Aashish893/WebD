<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "wdl";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
   
    echo die("Error". mysqli_connect_error());
}
?>