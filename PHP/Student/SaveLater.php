<?php

require '/home/lc8884l/include/connection.php';
//require "../../PHP/connection.php";

if (isset($_POST['stuSaveLater'])) {
    $saveStuFrom     = $_SESSION['UserIDLogin'];
    $saveStuTo       = $_SESSION['ToStudent'];
    $stuSavedComment = mysqli_real_escape_string($connect, $_POST['StuComment']);
    $saveGrade       = $_POST['StuGrade'];

    $msg = "
        <script>
        Swal.fire({type: 'info', title: 'Only Evaluation Comment & Grade Saved', text: 'Image would not be Saved', allowOutsideClick: false, confirmButtonText: 'Ok'}).then((result) => {if (result.value) { Swal.fire({type: 'success',title: 'Evaluation Saved',text: 'Evaluation Will be Available the Next Time Visited',allowOutsideClick: false,confirmButtonText: 'Continue'}).then((result) => {if (result.value) {location.href = 'RateStudent.php';}}) }})
        </script>";

    $queryDoneEva  = "SELECT * FROM Evaluation WHERE EvaluationTo = '$saveStuTo' AND EvaluationFrom = '$saveStuFrom'";
    $resultDoneEva = $connect->query($queryDoneEva) or die("Fail");
    
    $queryCheck  = "SELECT SaveComment FROM SaveComment WHERE EvaluationFrom ='$saveStuFrom' AND EvaluationTo ='$saveStuTo'";
    $resultCheck = $connect->query($queryCheck) or die("Fail");
    
    if ($resultCheck->num_rows === 0) {

        if ($resultDoneEva->num_rows === 1) {
        $msg = "<script>Swal.fire({type: 'error',title: 'Already Evaluated Student',allowOutsideClick: false,confirmButtonText: 'OK',}).then((result) => {if (result.value) {location.href = 'RateStudent.php';}})</script>";
        } else {
        $queryEvaSaved = "INSERT INTO SaveComment (EvaluationTo, EvaluationFrom, SaveComment, SaveGrade) VALUES ('". $saveStuTo ."','". $saveStuFrom ."', '". $stuSavedComment ."', '". $saveGrade ."')";
        $connect->query($queryEvaSaved);
        $msg;
    }
        
    } else {
        $queryUpdateSavedEva = "UPDATE SaveComment SET SaveComment = '$stuSavedComment', SaveGrade = '$saveGrade' WHERE EvaluationFrom ='$saveStuFrom' AND EvaluationTo ='$saveStuTo'";
        $connect->query($queryUpdateSavedEva);
        $msg;
    }
}

?>