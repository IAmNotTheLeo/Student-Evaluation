<?php 
session_start();
require '../../PHP/Tutor/StudentsViews.php';
require '../../PHP/UserSession.php';

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
              <a href="Logout.php">Logout</a>
             </div>
</div>
  <span id="navigationButton" onclick="openNav()">☰</span>
    <img id="Logo" src="../../Images/Logo.png">
</div>
<div id="contentTutor">
<h1>Students</h1>
<h3><?php echo "Group " . $studentGroup ?></h3>
<form method="POST">
  <select name="studentDisplay">
  <?php while ($row = $resultViewGroup->fetch_array()) { ?>
      <option><?php echo $row['UserID']; ?></option>
  <?php } ?>
  </select>
  <br />
  <br />
    <input type="submit" name="showSelectStudent" value="Show Student">
</form>
<br />
<br />
<div id="StudentEva">
  <?php require '../../PHP/Tutor/ShowStudent.php'; ?>
</div>
</div>
</div>
  </body>
</html>
