<?php  

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";


	$studentGroup = $_POST['ViewGroupStudent'];
	$studentLevel = "Student";
	

	$queryViewGroup = "SELECT * FROM UserTable WHERE UserGroup = '$studentGroup' AND UserLevel ='$studentLevel'";

	$resultViewGroup = mysqli_query($connect, $queryViewGroup);

?>