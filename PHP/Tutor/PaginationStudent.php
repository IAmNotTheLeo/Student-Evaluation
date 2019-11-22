<?php
require '/home/lc8884l/include/connection.php';
//require "../../PHP/connection.php";

$query  = "SELECT * FROM Evaluation";
$result = mysqli_query($connect, $query) or die("Fail");

?>
