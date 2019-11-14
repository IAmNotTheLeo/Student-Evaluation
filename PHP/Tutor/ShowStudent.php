<?php

//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

if (isset($_POST['showSelectStudent'])) {
	$student = $_POST['studentDisplay'];

	$queryDetails = "SELECT * FROM Evaluation WHERE EvaluationFrom = '$student'";
	$resultDetails = $connect->query($queryDetails);


while ($row = $resultDetails->fetch_array()) {
  echo "<i>From: </i>" . $row['EvaluationFrom'] . "<br />" . "<i>To: </i>" . $row['EvaluationTo'] . "<br /> <br />";
  echo "<b>Grade: </b>" . $row['Grade'] . "<br />" . "<br />";
  echo "<b>Evaluation: </b>" . "<br />" . $row['EComment'] . "<br />" . "<br />";
  echo "<img width='100' height='100' src='data:" . $row['ImageType'] . ";base64,".base64_encode($row['StudentImage'])."' />";
  echo "<img width='100' height='100' src='ShowImage.php?EvaluationFrom=" .($row['EvaluationFrom']). "' />";
  echo "<br /><br />";
  echo "<hr />";
  }
}
else {
  echo "<div style='text-align: center; vertical-align: middle; line-height: 175px; '>Select Student to Details</div>";
}
?>