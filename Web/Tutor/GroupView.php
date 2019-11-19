<?php  
session_start();
require '../../PHP/Tutor/TutorSession.php';
require '../../PHP/Tutor/ViewGroup.php';

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
  <img id="Logo" src="../../WebImage/Logo.png">
</div>
<div id="contentTutor">
<h1>Tutor</h1>
<form method="POST">
  <select name="ViewGroupStudent" style="width: 250px;">
      <option value="1">Group 1</option>
      <option value="2">Group 2</option>
      <option value="3">Group 3</option>
      <option value="4">Group 4</option>
      <option value="5">Group 5</option>
      <option value="6">Group 6</option>
      <option value="7">Group 7</option>
      <option value="8">Group 8</option>
      <option value="9">Group 9</option>
      <option value="10">Group 10</option>
    </select>
<br />
<br />
<br />
<button class="buttonDesign" type="submit" name="tuGroupView">View Student</button>
</form>
<br />
<button class="buttonDesign" type="button" onclick="window.location.href='SearchStudent.php'" name="tuSearchView">Search Student</button>  
</div>
  </body>
</html>
