<?php

require '/home/lc8884l/include/connection.php';
//require "../../PHP/connection.php";

if (isset($_POST['Logsubmit'])) {
    $ID_L       = mysqli_real_escape_string($connect,$_POST['IDLogin']);
    $Password_L = mysqli_real_escape_string($connect, md5($_POST['PasswordLogin']));
    
    $queryLogin  = "SELECT * FROM UserTable WHERE UserID = '$ID_L' AND UserPassword = '$Password_L' LIMIT 1";
    $resultLogin = $connect->query($queryLogin) or die("Fail");
    
    if ($resultLogin->num_rows > 0) {
        
        while ($row = $resultLogin->fetch_assoc()) {
            
            if ($row['UserLevel'] == "Tutor") {
                $_SESSION['TutorSession'] = $row['UserLevel'];
                header("location: ../Tutor/GroupView.php");
            } else {
                $_SESSION['StudentSession'] = $row['UserLevel'];
                $_SESSION['UserIDLogin']    = $row['UserID'];
                $_SESSION['UserGroupNum']   = $row['UserGroup'];
                header("location: ../Student/RateStudent.php");
            }
            
            if (isset($_POST['rememberMeUser'])) {
                setcookie("IDLogin", $ID_L, time() + 86400); // a Day
            }
        }
    } else {
        $msg = "<script>Swal.fire({type: 'error',title: 'User ID or Password is Wrong',text: 'Please Enter Valid Data',allowOutsideClick: false,confirmButtonText: 'Try Again'})</script>";
    }
}

?>