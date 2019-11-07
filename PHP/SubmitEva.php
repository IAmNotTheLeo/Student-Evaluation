<?php 


//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

if (isset($_POST['stuUpload'])) {
	$stuFromStudent = $_SESSION['UserIDLogin'];
	$stuToStudent = $_SESSION['ToStudent'];
	$stuEvaGrade = $_POST['StuGrade'];
	$stuEvaComment = $_POST['StuCommnet'];
	$stuEvaImage = $_FILES['uploadImage']['tmp_name'];

	$queryEva = "INSERT INTO Evaluation (Grade, EComment, Image, EvaluationTo, EvaluationFrom) VALUES ('$stuEvaGrade', '$stuEvaComment', '$stuEvaImage', '$stuToStudent', '$stuFromStudent')";
	mysqli_query($connect, $queryEva);
	header("location: RateStudent.php");

}

?>