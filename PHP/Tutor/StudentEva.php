<?php


//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

	$student = $_POST['studentDisplay'];
	$queryDetails = "SELECT * FROM Evaluation WHERE EvaluationFrom = '$student'";
	$resultDetails = $connect->query($queryDetails);


if (isset($_POST['showSelectStudent'])) {
	while ($row = $resultDetails->fetch_array()) {
  echo "<i>From: </i>" . $row['EvaluationFrom'] . "<br />" . "<i>To: </i>" . $row['EvaluationTo'] . "<br /> <br />";
  echo "<b>Grade: </b>" . $row['Grade'] . "<br />" . "<br />";
  echo "<b>Evaluation: </b>" . "<br />" . $row['EComment'] . "<br />" . "<br />";
  if (empty($row['StudentImage'])) {
  echo "<img width='125' height='125' src='../../Images/Alternative/NoImage.png' />";
  }
  else {
  echo "<img width='125' height='125' src='../../Images/".$row['StudentImage']."' />";
  }
  echo "<br /><br />";
  echo "<hr />";
  }
} 
else {
  echo "<div style='text-align: center; vertical-align: middle; line-height: 175px; '>Select Student to Details</div>";
}


?>