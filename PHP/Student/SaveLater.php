<?php

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

if (isset($_POST['stuSaveLater'])) {
		$saveStuFrom = $_SESSION['UserIDLogin'];
		$saveStuTo = $_SESSION['ToStudent'];
		$stuSavedComment = $_POST['StuComment'];

		$msg = "<script>Swal.fire({type: 'success',title: 'Evaluation Saved',text: 'Evaluation Will be Available the Next Time Visited',allowOutsideClick: false,confirmButtonText: 'OK'}).then((result) => {if (result.value) {location.href = 'RateStudent.php';}})</script>";

		$queryCheck = "SELECT SaveComment FROM SaveComment WHERE EvaluationFrom ='$saveStuFrom' AND EvaluationTo ='$saveStuTo'";
		$resultCheck = $connect->query($queryCheck);

		if ($resultCheck->num_rows === 0){
			$queryEvaSaved = "INSERT INTO SaveComment (EvaluationTo, EvaluationFrom, SaveComment) VALUES ('$saveStuTo','$saveStuFrom', '$stuSavedComment')";
		$connect->query($queryEvaSaved);
		$msg;

		} else {
			$queryUpdateSavedEva = "UPDATE SaveComment SET SaveComment = '$stuSavedComment' WHERE EvaluationFrom ='$saveStuFrom' AND EvaluationTo ='$saveStuTo'";
			$connect->query($queryUpdateSavedEva);
			$msg;
		}
	}

?>