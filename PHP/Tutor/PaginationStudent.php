<?php
//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

$search = $_POST['listSearch'];
$inputSearch = $_POST['searchInput'];

if (empty($inputSearch)) {
$perPage = 4;
$queryPage = "SELECT * FROM Evaluation";
$resultPage = $connect->query($queryPage);
$countRow = $resultPage->num_rows;
$numberPages = ceil($countRow/$perPage);

if (!isset($_GET['pageNumber'])) {
  $getPage = 1;
} else {
  $getPage = $_GET['pageNumber'];
}

$firstPage = ($getPage - 1) * $perPage;
$queryPage = "SELECT * FROM Evaluation LIMIT $firstPage,$perPage";
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
	
	$queryPage = "SELECT * FROM Evaluation WHERE $search = $inputSearch";
	$resultPage = $connect->query($queryPage);
}

?>



