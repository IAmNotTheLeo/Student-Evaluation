<?php
//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

$searchP = $_SESSION['Search'];
$inputSearchP =  $_SESSION['InputSearch'];
$checkRadio =  $_SESSION['OrderBySelect'];
$checkLow = $_SESSION['OrderOption'];

if (empty($inputSearchP)) {
$perPage = 3;
$queryPage = "SELECT * FROM Evaluation $checkRadio $searchP $checkLow";
$resultPage = $connect->query($queryPage);
$countRow = $resultPage->num_rows;
$numberPages = ceil($countRow/$perPage);
if (!isset($_GET['pageNumber'])) {
  $getPage = 1;
} else {
  $getPage = $_GET['pageNumber'];
}
$firstPage = ($getPage - 1) * $perPage;
$queryPage = "SELECT * FROM Evaluation $checkRadio $searchP $checkLow LIMIT $firstPage,$perPage";
$resultPage = mysqli_query($connect, $queryPage);
for ($i = 1; $i <= $numberPages; $i++) { 
	if ($getPage == $i) {
		$select = "active";
	}
	else{
		$select = "";
	}
	echo "<div class='pagination'>";
    echo "<a class='$select' href='SearchStudent.php?pageNumber=$i'>$i</a>";
    echo "</div>";
	}
}
else {
	if ($searchP == "EvaluationAll") {
	$perPage = 3;
	$queryPage = "SELECT * FROM Evaluation WHERE EvaluationTo = '$inputSearchP' OR EvaluationFrom = '$inputSearchP'";;
	$resultPage = $connect->query($queryPage);
	$countRow = $resultPage->num_rows;
	$numberPages = ceil($countRow/$perPage);
	if (!isset($_GET['pageNumber'])) {
  	$getPage = 1;
	} else {
  	$getPage = $_GET['pageNumber'];
	}
	$firstPage = ($getPage - 1) * $perPage;
	$queryPage = "SELECT * FROM Evaluation WHERE EvaluationTo = '$inputSearchP' OR EvaluationFrom = '$inputSearchP' LIMIT $firstPage,$perPage";
	$resultPage = mysqli_query($connect, $queryPage);
	for ($i = 1; $i <= $numberPages; $i++) { 
	if ($getPage == $i) {
		$select = "active";
	}
	else{
		$select = "";
	}
	echo "<div class='pagination'>";
    echo "<a class='$select' href='SearchStudent.php?pageNumber=$i'>$i</a>";
    echo "</div>";
	}
	}
	else {
	$perPage = 3;
	$queryPage = "SELECT * FROM Evaluation WHERE $searchP = '$inputSearchP'";
	$resultPage = $connect->query($queryPage);
	$countRow = $resultPage->num_rows;
	$numberPages = ceil($countRow/$perPage);
	if (!isset($_GET['pageNumber'])) {
  	$getPage = 1;
	} else {
  	$getPage = $_GET['pageNumber'];
	}
	$firstPage = ($getPage - 1) * $perPage;
	$queryPage = "SELECT * FROM Evaluation WHERE $searchP = '$inputSearchP' LIMIT $firstPage,$perPage";
	$resultPage = mysqli_query($connect, $queryPage);
	for ($i = 1; $i <= $numberPages; $i++) { 
	if ($getPage == $i) {
		$select = "active";
	}
	else{
		$select = "";
	}
	echo "<div class='pagination'>";
    echo "<a class='$select' href='SearchStudent.php?pageNumber=$i'>$i</a>";
    echo "</div>";
	}
	}
}


?>
