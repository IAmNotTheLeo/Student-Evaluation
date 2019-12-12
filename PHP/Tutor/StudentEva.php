<?php

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

$student       = $_POST['studentDisplay'];
$queryDetails  = "SELECT * FROM Evaluation WHERE EvaluationFrom = '$student'";
$resultDetails = $connect->query($queryDetails) or die("Fail");

$queryAvg = "SELECT EvaluationTo,Grade FROM Evaluation WHERE EvaluationTo = '$student'";
$resultAvg = $connect->query($queryAvg) or die("Fail");

$queryGroup = "SELECT UserID,UserGroup FROM UserTable WHERE NOT UserID = '$student' AND UserGroup = '$studentGroup'";
$resultGroup = $connect->query($queryGroup) or die("Fail");
$count = $resultGroup->num_rows;

while ($row = $resultAvg->fetch_array()){
		$add = $row['Grade'];
		$total += $add;
		$avg = $total/$count;
}

?>