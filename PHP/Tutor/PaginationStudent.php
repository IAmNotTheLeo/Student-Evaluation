<?php
require '/home/lc8884l/include/connection.php';
//require "../../PHP/connection.php";


if (isset($_POST['SearchNow'])) {	

$search = $_POST['SelectOption'];
$inputSearch  = $_POST['SearchInput'];

if (empty($inputSearch)) {
		$_SESSION['Search'] = $search;
		$_SESSION['InputSearch'] = mysqli_real_escape_string($connect, $inputSearch);
		header("Location: SearchStudent.php");
	} 
	else {
		$_SESSION['Search'] = $search;
		$_SESSION['InputSearch'] = mysqli_real_escape_string($connect, $inputSearch);
		header("Location: SearchStudent.php");
	}
}


?>
