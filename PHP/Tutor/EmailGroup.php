<?php
//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php"; 

if (isset($_POST['sendEmail'])) {

	$emailFrom = $_SESSION['UserTuEmail'];

	$queryEmailGroup = "SELECT * From UserTable WHERE UserGroup = '$studentGroup'";
	$resultEmailGroup = $connect->query($queryEmailGroup);

	$queryGroupGrade = "SELECT * FROM Evaluation WHERE GroupEva = '$studentGroup'";
	$resultGroupGrade = $connect->query($queryGroupGrade);


	if (isset($_POST['incomplete'])) {
		while ($row = $resultEmailGroup->fetch_array()){
			$to = $row['UserEmail'];
			$subject = $_POST['subjectEmail'];
			$txt = $_POST['messageEmail'];
			$headers = "From:". $emailFrom . "\r\n";
			mail($to, $subject, $txt, $headers);
		}
		$msg = "<script>Swal.fire({type: 'success',title: 'Email Sent',text: 'Email Has Been Sent to Incomplete Group ". $studentGroup ."',allowOutsideClick: false,confirmButtonText: 'Continue',}).then((result) => {if (result.value) {location.href = 'GroupView.php';}})</script>";
	} else {

		while ($row = $resultGroupGrade->fetch_array()){
		$add = $row['Grade'];
		$total += $add;
		} 
		while ($row = $resultEmailGroup->fetch_array()){
		$to = $row['UserEmail'];
		$subject = $_POST['subjectEmail'];
		$txt = "Group ". $studentGroup .": Grade - " . $total . "/60\r\n" . $_POST['messageEmail'];
		$headers = "From:". $emailFrom . "\r\n";
		mail($to, $subject, $txt, $headers);
		}
		$msg = "<script>Swal.fire({type: 'success',title: 'Email Sent',text: 'Email Has Been Sent to Group ". $studentGroup ."',allowOutsideClick: false,confirmButtonText: 'Continue',}).then((result) => {if (result.value) {location.href = 'GroupView.php';}})</script>";
	}
}

if (isset($_POST['showGroupEva'])) {

	$queryCheckGroup = "SELECT * FROM Evaluation WHERE GroupEva = '$studentGroup'";
	$resultCheckGroup = $connect->query($queryCheckGroup);

	if ($resultCheckGroup->num_rows === 6) {
		$msg = "<script>Swal.fire({type: 'success',title: 'Groups\' Evaluation Complete',text: 'Group ". $studentGroup ." has Completed Evaluation',allowOutsideClick: false,confirmButtonText: 'Continue',})</script>";
	} else {
		$msg = "<script>Swal.fire({type: 'error',title: 'Group\' Evaluation Incompelete',text: 'Group ". $studentGroup ." has Incompleted Evaluation',allowOutsideClick: false,confirmButtonText: 'Continue',})</script>";
	}
}

?> 