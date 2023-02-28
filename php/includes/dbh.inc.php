<?php 

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "user_db";

$conn = mysqli_connect($servername, $user, $password, $dbname);

if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());

?>