<?php

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

$savedStuFrom = $_SESSION['UserIDLogin'];
$savedStuTo   = $_SESSION['ToStudent'];


$querySaved  = "SELECT SaveComment, SaveGrade FROM SaveComment WHERE EvaluationFrom ='$savedStuFrom' AND EvaluationTo ='$savedStuTo'";
$resultSaved = $connect->query($querySaved) or die("Fail");
while ($row = mysqli_fetch_array($resultSaved)){
	$comment = $row['SaveComment'];
	$grade = $row['SaveGrade'];
}

?>