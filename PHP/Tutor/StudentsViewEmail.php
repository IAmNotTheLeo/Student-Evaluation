<?php

require '/home/lc8884l/include/connection.php';
//require "../../PHP/connection.php";

$studentGroup    = $_SESSION['tuEmailSendG'];
$studentLevel    = "Student";
$queryViewGroup  = "SELECT * FROM UserTable WHERE UserGroup = '$studentGroup' AND UserLevel ='$studentLevel'";
$resultViewGroup = $connect->query($queryViewGroup) or die("Fail");

?>