<?php  

if (isset($_POST['stuRate'])) {
  $stuToStudent = $_POST['groupMembersDropDown'];
  $comment = "";

  $queryDoneEva = "SELECT * FROM Evaluation WHERE EvaluationTo = '$stuToStudent'";
  $resultDoneEva = $connect->query($queryDoneEva);

  if ($resultDoneEva->num_rows === 1) {
    $msg = "<script>Swal.fire({type: 'error',title: 'Already Evaluated Student',text: 'Please Select Another Student to Evaluate',allowOutsideClick: false,confirmButtonText: 'OK'})</script>";
  	} 

 	else if (isset($_POST['groupMembersDropDown'])) {
    $_SESSION['ToStudent'] = $_POST['groupMembersDropDown'];
    header("location: Evaluation.php");
  }
}

?>