<?php
//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

if (isset($_POST['SearchIDorGrade'])) {

$search = $_POST['SelectOption'];
$inputSearch  = $_POST['SearchInput'];
$radioSelect = $_POST['radioFilter'];


	$queryData  = "SELECT * FROM UserTable WHERE $search = '$inputSearch'";
	$resultData = $connect->query($queryData) or die("Fail");

if (empty($inputSearch)) {
		if ($radioSelect == "Low") { //Low
			$_SESSION['QueryOperator'] = "";
			$_SESSION['OrderBySelect'] = "ORDER BY";
			$_SESSION['OrderOption'] = "ASC";
		}
		else if ($radioSelect == "High"){ //High
			$_SESSION['QueryOperator'] = "";
			$_SESSION['OrderBySelect'] = "ORDER BY";
			$_SESSION['OrderOption'] = "DESC";
		} else { //Default
			$_SESSION['QueryOperator'] = "OR";
			$_SESSION['OrderBySelect'] = "";
			$_SESSION['OrderOption'] = "";
 		}

		$_SESSION['Search'] = $search;
		$_SESSION['InputSearch'] = mysqli_real_escape_string($connect, $inputSearch);
		header("Location: IDandGrade.php");
	} 
	else {
		if ($resultData->num_rows > 0) {

			if ($inputSearch == '000000000'){
			$msg = "<script>Swal.fire({type: 'error',title: 'Input Data Does not Exist',text: 'Please Enter Valid Input Data',allowOutsideClick: false,confirmButtonText: 'Continue',})</script>";

			} else {		
			$_SESSION['Search'] = $search;
			$_SESSION['InputSearch'] = mysqli_real_escape_string($connect, $inputSearch);
			header("Location: IDandGrade.php");
		}
		}
		else {
			$msg = "<script>Swal.fire({type: 'error',title: 'Input Data Does not Exist',text: 'Please Enter Valid Input Data',allowOutsideClick: false,confirmButtonText: 'Continue',})</script>";
		}
	}
}


?>
