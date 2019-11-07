<?php  

if (isset($_POST['stuRate'])) {
  $stuToStudent = $_POST['groupMembersDropDown'];
  $queryDoneEva = "SELECT * FROM Evaluation WHERE EvaluationTo = '$stuToStudent'";
  $resultDoneEva = mysqli_query($connect, $queryDoneEva);


  if (mysqli_num_rows($resultDoneEva) === 1) {
    header("location: EvaluationDone.php");
  }
else if (isset($_POST['groupMembersDropDown'])) {
    $_SESSION['ToStudent'] = $_POST['groupMembersDropDown'];
    header("location: Evaluation.php");
  }
}

?>