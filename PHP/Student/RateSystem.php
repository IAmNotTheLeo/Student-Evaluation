<?php

if (isset($_POST['stuRate'])) {
    $stuToStudent   = $_POST['groupMembersDropDown'];
    $stuFromStudent = $_SESSION['UserIDLogin'];
    
    $queryDoneEva  = "SELECT * FROM Evaluation WHERE EvaluationTo = '$stuToStudent' AND EvaluationFrom = '$stuFromStudent'";
    $resultDoneEva = $connect->query($queryDoneEva);
    
    if ($resultDoneEva->num_rows === 1) {
        $msg = "<script>Swal.fire({type: 'error',title: 'Already Evaluated Student',text: 'Please Select Another Student to Evaluate',allowOutsideClick: false,confirmButtonText: 'OK'})</script>";
    } else {
        $_SESSION['ToStudent'] = $_POST['groupMembersDropDown'];
        header("location: Evaluation.php");
    }
}

?>