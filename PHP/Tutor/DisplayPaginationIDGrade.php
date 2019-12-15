<?php
//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

$searchP = $_SESSION['Search'];
$inputSearchP =  $_SESSION['InputSearch'];
$checkRadio =  $_SESSION['OrderBySelect'];
$checkLow = $_SESSION['OrderOption'];
$radioS = $_SESSION['QueryOperator'];

if (empty($inputSearchP)) {
$perPage = 3;
$queryPage = "SELECT UserID,OverallGrade FROM UserTable WHERE NOT UserLevel ='Tutor' $radioS $checkRadio $searchP $checkLow";
$resultPage = $connect->query($queryPage);
$countRow = $resultPage->num_rows;
$numberPages = ceil($countRow/$perPage);
if (!isset($_GET['pageNumber'])) {
  $getPage = 1;
} else {
  $getPage = $_GET['pageNumber'];
}
$firstPage = ($getPage - 1) * $perPage;
$queryPage = "SELECT UserID,OverallGrade FROM UserTable WHERE NOT UserLevel ='Tutor' $radioS $checkRadio $searchP $checkLow LIMIT $firstPage,$perPage";
$resultPage = mysqli_query($connect, $queryPage);
for ($i = 1; $i <= $numberPages; $i++) { 
	if ($getPage == $i) {
		$select = "active";
	}
	else{
		$select = "";
	}
	echo "<div class='pagination'>";
    echo "<a class='$select' href='IDandGrade.php?pageNumber=$i'>$i</a>";
    echo "</div>";
	}
}
else {
	$perPage = 3;
	$queryPage = "SELECT UserID,OverallGrade FROM UserTable WHERE NOT UserLevel ='Tutor' AND $searchP = '$inputSearchP'";
	$resultPage = $connect->query($queryPage);
	$countRow = $resultPage->num_rows;
	$numberPages = ceil($countRow/$perPage);
	if (!isset($_GET['pageNumber'])) {
  	$getPage = 1;
	} else {
  	$getPage = $_GET['pageNumber'];
	}
	$firstPage = ($getPage - 1) * $perPage;
	$queryPage = "SELECT UserID,OverallGrade FROM UserTable WHERE NOT UserLevel ='Tutor' AND $searchP = '$inputSearchP' LIMIT $firstPage,$perPage";
	$resultPage = mysqli_query($connect, $queryPage);
	for ($i = 1; $i <= $numberPages; $i++) { 
	if ($getPage == $i) {
		$select = "active";
	}
	else{
		$select = "";
	}
	echo "<div class='pagination'>";
    echo "<a class='$select' href='IDandGrade.php?pageNumber=$i'>$i</a>";
    echo "</div>";
	}
}


?>
