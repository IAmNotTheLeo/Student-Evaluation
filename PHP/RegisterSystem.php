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
  $resultExist = mysqli_query($connect, $queryExist);

  $queryLimit = "SELECT * FROM UserTable WHERE UserGroup = '$studentGroup'";
  $resultLimit = mysqli_query($connect, $queryLimit);


  if (mysqli_num_rows($resultExist)) {
   header("Location: AccountExist.php");
 }

 else if (mysqli_num_rows($resultLimit) === 3) {
   header("location: GroupLimit.php");
 }
 
else {
        $queryRegister = "INSERT INTO UserTable (UserID, UserEmail, UserPassword, UserGroup, UserLevel) VALUES ('$studentID','$studentEmail','$studentPassword','$studentGroup','$studentLevel')";
        mysqli_query($connect, $queryRegister);
        header("Location: AccountCreated.php");
  }
}


?>
