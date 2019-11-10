<?php  

if (isset($_POST['stuRate'])) {
  $stuToStudent = $_POST['groupMembersDropDown'];
  $comment = "";

  $queryDoneEva = "SELECT * FROM Evaluation WHERE EvaluationTo = '$stuToStudent'";
  $resultDoneEva = mysqli_query($connect, $queryDoneEva);

  $querySavedEva = "SELECT * FROM SaveComment WHERE EvaluationTo = '$stuToStudent'";
  $resultSavedEva = mysqli_query($connect, $querySavedEva);


  if (mysqli_num_rows($resultSavedEva) === 0) {
  	$_SESSION['ToStudent'] = $_POST['groupMembersDropDown'];
    header("location: Evaluation.php");
  }

	else if (mysqli_num_rows($resultDoneEva) === 1) {
    $msg = "<script>Swal.fire({type: 'error',title: 'Already Evaluated Student',text: 'Please Select Another Student to Evaluate',allowOutsideClick: false,confirmButtonText: 'OK'})</script>";
  	} 

 	else if (isset($_POST['groupMembersDropDown'])) {
    $_SESSION['ToStudent'] = $_POST['groupMembersDropDown'];
    header("location: Evaluation.php");
  }
}

?>