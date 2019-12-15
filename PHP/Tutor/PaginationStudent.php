<?php
//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

if (isset($_POST['SearchNow'])) {

$search = $_POST['SelectOption'];
$inputSearch  = $_POST['SearchInput'];
$radioSelect = $_POST['radioFilter'];

if ($search == "EvaluationAll") {
	$queryData  = "SELECT * FROM Evaluation WHERE EvaluationFrom = '$inputSearch' OR EvaluationTo = '$inputSearch'";
	$resultData = $connect->query($queryData) or die("Fail");
} else {
	$queryData  = "SELECT * FROM Evaluation WHERE $search = '$inputSearch'";
	$resultData = $connect->query($queryData) or die("Fail");
}

if (empty($inputSearch)) {
		if ($radioSelect == "Low") { //Low
			$_SESSION['OrderBySelect'] = "ORDER BY";
			$_SESSION['OrderOption'] = "ASC";
		}
		else if ($radioSelect == "High"){ //High
			$_SESSION['OrderBySelect'] = "ORDER BY";
			$_SESSION['OrderOption'] = "DESC";
		} else { //Default
			$_SESSION['OrderBySelect'] = "";
			$_SESSION['OrderOption'] = "";
 		}

		$_SESSION['Search'] = $search;
		$_SESSION['InputSearch'] = mysqli_real_escape_string($connect, $inputSearch);
		header("Location: SearchStudent.php");
	} 
	else {
		if ($resultData->num_rows > 0) {		
			$_SESSION['Search'] = $search;
			$_SESSION['InputSearch'] = mysqli_real_escape_string($connect, $inputSearch);
			header("Location: SearchStudent.php");
		}
		else {
			$msg = "<script>Swal.fire({type: 'error',title: 'Input Data Does not Exist',text: 'Please Enter Valid Input Data',allowOutsideClick: false,confirmButtonText: 'Continue',})</script>";
		}
	}
}


?>
