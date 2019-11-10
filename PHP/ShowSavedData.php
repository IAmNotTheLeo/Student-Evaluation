<?php  

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

	$savedStuFrom = $_SESSION['UserIDLogin'];
	$savedStuTo = $_SESSION['ToStudent']; 


	$querySaved = "SELECT SaveComment FROM SaveComment WHERE EvaluationFrom ='$savedStuFrom' AND EvaluationTo ='$savedStuTo'";
	$resultSaved = $connect->query($querySaved);

?>