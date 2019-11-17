<?php
//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

$search = $_POST['listSearch'];
$inputSearch = $_POST['searchInput'];

if (empty($inputSearch)) {
	$queryPage = "SELECT * FROM Evaluation LIMIT 3";
	$resultPage = $connect->query($queryPage);

} else {
	$queryPage = "SELECT * FROM Evaluation WHERE $search = $inputSearch LIMIT 3";
	$resultPage = $connect->query($queryPage);
}

?>