<?php
session_start();
require '../../PHP/Tutor/PaginationStudent.php';
require '../../PHP/Tutor/TutorSession.php';


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.64"> 
      <title>Tutor</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <link rel="stylesheet" href="../../CSS/sweetalert2.min.css"> 
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/sweetalert2.min.js"></script>
      <script src="../../JavaScript/script.js"></script>
      <script src="../../JavaScript/jquery-3.4.1.min.js"></script>
      <script src="../../JavaScript/disableRadioButtons.js"></script>
   </head>
   <body>
      <div id="second-header">
         <div id="nav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
               <a href="GroupView.php">Homepage</a>
               <a href="Logout.php">Logout</a>
            </div>
         </div>
         <span id="navigationButton" onclick="openNav()">☰</span>
         <img id="Logo" src="../../Images/Logo.png">
      </div>
      <div id="contentTutor">
         <h1>Search</h1>
         <form method="POST">
            <input type="text" name="SearchInput" maxlength="9">
            <select name="SelectOption" id="selectedSearch">
               <option value="Grade">Grade</option>
               <option value="EvaluationAll">Evaluation (From & To)</option>
               <option value="EvaluationFrom">Evaluation From</option>
               <option value="EvaluationTo">Evaluation To</option>
            </select>
            <br />
            <br />
             <input type="radio" name="radioFilter" value="Default" checked> Default 
             <input type="radio" name="radioFilter" class="disableRadio" value="High" >Order By High 
             <input type="radio" name="radioFilter" class="disableRadio" value="Low"> Order By Low
            <br />
            <br />
            <?php
            if (isset($_POST['SearchNow'])) {
               echo $msg;
            }
            ?>
            <button type="submit" class="buttonDesign" name="SearchNow">Search</button>
         </form>
   </body>
</html>