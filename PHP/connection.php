<?php

$servername = "localhost";
$username = "root";
$password = "password";
$db = "COMP1687";


$connect = new mysqli($servername, $username, $password, $db);

if ($connect->connect_error) {
	die("Connection failed: " . $connect->connect_error);
} 

?>
