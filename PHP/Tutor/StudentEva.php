<?php

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

$student       = $_POST['studentDisplay'];
$queryDetails  = "SELECT * FROM Evaluation WHERE EvaluationFrom = '$student'";
$resultDetails = $connect->query($queryDetails) or die("Fail");
?>