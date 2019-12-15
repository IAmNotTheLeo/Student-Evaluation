<?php 

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

if (isset($_POST['stuDelete'])) {
    $saveStuFromDelete  = $_SESSION['UserIDLogin'];
    $saveStuToDelete	= $_SESSION['ToStudent'];

    $queryDoneEva  = "SELECT * FROM Evaluation WHERE EvaluationTo = '$saveStuToDelete' AND EvaluationFrom = '$saveStuFromDelete'";
    $resultDoneEva = $connect->query($queryDoneEva) or die("Fail");
    

    if ($resultDoneEva->num_rows === 1) {
    	$msg = "<script>Swal.fire({type: 'error',title: 'Already Evaluated Student',allowOutsideClick: false,confirmButtonText: 'OK',}).then((result) => {if (result.value) {location.href = 'RateStudent.php';}})</script>";
    	
    } else {

        $queryDeleteSave = "DELETE FROM SaveComment WHERE EvaluationFrom ='$saveStuFromDelete' AND EvaluationTo ='$saveStuToDelete'";
        $connect->query($queryDeleteSave);
        $msg = "<script>Swal.fire({type: 'success', title: 'Saved Evaluation Deleted', allowOutsideClick: false, confirmButtonText: 'Ok'}).then((result) => {if (result.value) {location.href = 'RateStudent.php'; }})</script>";
    	}
    }

?>