<?php 

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";


	$studentOnly = "Student";
	$groupNumber = $_SESSION['UserGroupNum'];
	$dropDown = $_SESSION['UserIDLogin'];

	$queryGroupM = "SELECT * FROM UserTable WHERE NOT UserID ='$dropDown' AND UserLevel ='$studentOnly' AND UserGroup ='$groupNumber'";
	$resultGroup = mysqli_query($connect, $queryGroupM);


 ?>