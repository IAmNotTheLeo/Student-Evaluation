<?php

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

$studentGroup    = $_SESSION['viewStu'];
$studentLevel    = "Student";
$queryViewGroup  = "SELECT * FROM UserTable WHERE UserGroup = '$studentGroup' AND UserLevel ='$studentLevel'";
$resultViewGroup = $connect->query($queryViewGroup);

?>