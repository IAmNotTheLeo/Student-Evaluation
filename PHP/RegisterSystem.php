<?php

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";


if (isset($_POST['regSubmit'])) {

  $studentID = $_POST['stuID'];
  $studentEmail = $_POST['stuEmail'];
  $studentPassword = md5($_POST['stuPassoword']);
  $studentGroup = $_POST['groupDropDown'];
  $studentLevel = "Student";

  $queryExist = "SELECT UserID, UserEmail FROM UserTable WHERE UserID = '$studentID' OR UserEmail = '$studentEmail'";
  $resultExist = $connect->query($queryExist);


  $queryLimit = "SELECT * FROM UserTable WHERE UserGroup = '$studentGroup'";
  $resultLimit = $connect->query($queryLimit);


  if ($resultExist->num_rows > 0) {
    $msg = "<script>Swal.fire({type: 'error',title: 'Student ID or Email Already Exists',text: 'Please Enter An Nonexistent Account',allowOutsideClick: false,confirmButtonText: 'OK'})</script>";
  }

  else if ($resultLimit->num_rows === 3) {
    $msg = "<script>Swal.fire({type: 'error',title: 'Group Full',text: 'Please Select Another Group that is Available',allowOutsideClick: false,confirmButtonText: 'OK'})</script>";
  }

  else {
        $queryRegister = "INSERT INTO UserTable (UserID, UserEmail, UserPassword, UserGroup, UserLevel) VALUES ('$studentID','$studentEmail','$studentPassword','$studentGroup','$studentLevel')";
        $connect->query($queryRegister);
        $msg = "<script>Swal.fire({type: 'success',title: 'Acccount Created',allowOutsideClick: false,confirmButtonText: 'OK',}).then((result) => {if (result.value) {location.href = 'Login.php';}})</script>";
  }
}
?>
