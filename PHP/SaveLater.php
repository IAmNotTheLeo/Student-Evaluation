<?php

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

if (isset($_POST['stuSaveLater'])) {
		$saveStuFrom = $_SESSION['UserIDLogin'];
		$saveStuTo = $_SESSION['ToStudent'];
		$stuSavedComment = $_POST['StuComment'];

		$queryCheck = "SELECT SaveComment FROM SaveComment WHERE EvaluationFrom ='$saveStuFrom' AND EvaluationTo ='$saveStuTo'";

		$resultCheck = mysqli_query($connect, $queryCheck);

		if (mysqli_num_rows($resultCheck) === 0){
			$queryEvaSaved = "INSERT INTO SaveComment (EvaluationTo, EvaluationFrom, SaveComment) VALUES ('$saveStuTo','$saveStuFrom', '$stuSavedComment')";

		mysqli_query($connect, $queryEvaSaved);
		header("location: RateStudent.php");
		} else {
			$data = mysqli_fetch_row($resultCheck);
			$EvaComment = $data[0];

			$queryUpdateSavedEva = "UPDATE SaveComment SET SaveComment = '$stuSavedComment'";
			mysqli_query($connect, $queryUpdateSavedEva);
			header("location: RateStudent.php");
		}
	}

?>