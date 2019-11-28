<?php
session_start();
 require '../../PHP/Tutor/PaginationStudent.php';

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
         <img id="Logo" src="../../Images/Logo.png">
      </div>
      <div id="contentTutor">
         <h1>Search</h1>
         <form method="POST">
            <input type="text" name="SearchInput">
            <select name="SelectOption">
               <option value="Grade">Grade</option>
               <option value="EvaluationAll">Evaluation (From & To)</option>
               <option value="EvaluationFrom">Evaluation From</option>
               <option value="EvaluationTo">Evaluation To</option>
            </select>
            <br />
            <br />
            <button type="submit" class="buttonDesign" name="SearchNow">Search</button>
         </form>
   </body>
</html>