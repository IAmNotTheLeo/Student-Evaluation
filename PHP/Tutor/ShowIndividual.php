<?php
require '/home/lc8884l/include/connection.php';
//require "../../PHP/connection.php";

$idStudent = $_SESSION['IDstu'];

$queryIdv = "SELECT UserID, UserEmail, UserGroup, OverallGrade FROM UserTable WHERE UserID = '" .$idStudent. "'";
$resultIdv = $connect->query($queryIdv);


?>