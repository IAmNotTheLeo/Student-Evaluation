<?php
require '/home/lc8884l/include/connection.php';
//require "../../PHP/connection.php"; 

if (isset($_POST['sendEmail'])) {

	$emailFrom = $_SESSION['UserTuEmail'];

	$queryEmailGroup = "SELECT * From UserTable WHERE UserGroup = '$studentGroup'";
	$resultEmailGroup = $connect->query($queryEmailGroup);

	$queryGroupGrade = "SELECT * FROM Evaluation WHERE GroupEva = '$studentGroup'";
	$resultGroupGrade = $connect->query($queryGroupGrade);


	if (isset($_POST['incomplete'])) {
	
		if ($resultEmailGroup->num_rows != 3) {
			$msg = "<script>Swal.fire({type: 'error',title: 'Group Not Full',text: 'To Send Email, Group ". $studentGroup ." needs 3 Members in Total',allowOutsideClick: false,confirmButtonText: 'Try Again'})</script>";
		} else {
		while ($row = $resultEmailGroup->fetch_array()){
			$to = $row['UserEmail'];
			$subject = $_POST['subjectEmail'];
			$txt = $_POST['messageEmail'];
			$headers = "From:". $emailFrom . "\r\n";
			mail($to, $subject, $txt, $headers);
		}
		$msg = "<script>Swal.fire({type: 'success',title: 'Email Sent',text: 'Email Has Been Sent to Incomplete Group ". $studentGroup ."',allowOutsideClick: false,confirmButtonText: 'Continue',}).then((result) => {if (result.value) {location.href = 'GroupView.php';}})</script>";
		}
	} else {

	if ($resultGroupGrade->num_rows != 6) {
		$msg = "<script>Swal.fire({type: 'error',title: 'Group\' Evaluation Incompelete',text: 'Group ". $studentGroup ." has Incompleted Evaluation',allowOutsideClick: false,confirmButtonText: 'Continue',})</script>";
	} else {
		while ($row = $resultGroupGrade->fetch_array()){
		$add = $row['Grade'];
		$total += $add;
		} 
		while ($row = $resultEmailGroup->fetch_array()){
		$to = $row['UserEmail'];
		$subject = $_POST['subjectEmail'];
		$txt = "Group ". $studentGroup .": \r\n". $row['UserID']." - Grade ". $row['OverallGrade'] ."\r\n" . $_POST['messageEmail'] . "<br/>";
		$headers = "From:". $emailFrom . "\r\n";
		mail($to, $subject, $txt, $headers);
		}
		$msg = "<script>Swal.fire({type: 'success',title: 'Email Sent',text: 'Email Has Been Sent to Group ". $studentGroup ."',allowOutsideClick: false,confirmButtonText: 'Continue',}).then((result) => {if (result.value) {location.href = 'GroupView.php';}})</script>";
		}
	}
}
?> 