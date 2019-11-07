<?php 

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

if (isset($_POST['Logsubmit'])) {
  $ID_L = $_POST['IDLogin'];
  $Password_L = md5($_POST['PasswordLogin']);

  $queryLogin = "SELECT * FROM UserTable WHERE UserID = '$ID_L' AND UserPassword = '$Password_L' LIMIT 1";
  $resultLogin = mysqli_query($connect, $queryLogin);
 
  if (mysqli_num_rows($resultLogin) > 0) {

    while ($row = mysqli_fetch_assoc($resultLogin)) {

      if($row['UserLevel'] == "Tutor") {
        $_SESSION['UserSession'] = $row['UserLevel'];
        header("location: ../Tutor/GroupView.php");
      }
      else {
        $_SESSION['UserSession'] = $row['UserLevel'];
        $_SESSION['UserIDLogin'] = $row['UserID'];
        $_SESSION['UserGroupNum'] = $row['UserGroup'];
        header("location: ../Student/RateStudent.php");
      }
    }
  }
  else {
  		header("location: AccountDExist.php");
  }
}

 ?>