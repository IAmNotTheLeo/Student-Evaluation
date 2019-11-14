<?php
//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";
	$studentImage = $_POST['studentDisplay'];
	$queryImage = "SELECT StudentImage,ImageType FROM Evaluation WHERE EvaluationFrom = '$studentImage'";
	$resultImage = mysqli_query($connect, $queryImage);
	$row = mysqli_fetch_array($resultImage);
	header("Content-type: " . $row['ImageType']);
	echo $row['StudentImage'];

?>