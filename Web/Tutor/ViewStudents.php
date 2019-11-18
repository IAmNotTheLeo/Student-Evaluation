<?php 
session_start();
require '../../PHP/Tutor/StudentsViews.php';
require '../../PHP/Tutor/TutorSession.php';
require '../../PHP/Tutor/StudentEva.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tutor</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
    <script src="../../JavaScript/navigation.js"></script>
    <script src="../../JavaScript/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../../CSS/pagination.css">
  </head>
  <body>
    <div id="second-header">
<div id="nav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
             <div class="overlay-content">
              <a href="GroupView.php">Groups</a>
              <a href="Logout.php">Logout</a>
             </div>
</div>
  <span id="navigationButton" onclick="openNav()">☰</span>
    <img id="Logo" src="../../WebImage/Logo.png">
</div>
<div id="contentTutorEva">
<h2> <?php echo "Group " . $studentGroup ?></h2>
<form method="POST">
  <select name="studentDisplay">
  <?php while ($row = $resultViewGroup->fetch_array()) { ?>
      <option><?php echo $row['UserID']; ?></option>
  <?php } ?>
  </select>
  <br />
  <br />
    <input class="buttonDesign" type="submit" name="showSelectStudent" value="Show Evaluation">
</form>
<br />
<?php echo "<b>From: " . $student . "</b>" ?>
<br />
<br />
<div id="StudentEva">
<?php

if (isset($_POST['showSelectStudent'])) {
  while ($row = $resultDetails->fetch_array()) {
  echo "<b>To: </b>" . $row['EvaluationTo'] . "<br /> <br />";
  echo "<b>Grade: </b>" . $row['Grade'] . "<br />" . "<br />";
  echo "<b>Evaluation</b>" . "<br />" . $row['EComment'] . "<br />" . "<br />";
  if (empty($row['StudentImage'])) {
  echo "<img style='display:block;margin:auto;' width='100' height='100' src='../../Images/Alternative/NoImage.png' />";
  }
  else {
  echo "<b><u>Student's Image</u></b>";
  echo "<br/>";
  echo "<img style='display:block;margin:auto;' width='100' height='100' src='../../Images/".$row['StudentImage']."' />";
  }
  echo "<br /><br />";
  echo "<hr />";
  }
}
else {
  echo "<div style='text-align: center; vertical-align: middle; line-height: 175px; '>Select Student to Details</div>";
}

?>
</div>
<br />
</div>
</div>
  </body>
</html>
