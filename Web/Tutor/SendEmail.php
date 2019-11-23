<?php
session_start();
require '../../PHP/Tutor/StudentsViewEmail.php';
require '../../PHP/Tutor/EmailGroup.php';

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
      <div id="contentEmail">
         <h2>Email</h2>
         <div id="emailLayout">
            <b>To</b>: <?php echo "Group " . $studentGroup . " Members"?>
            <br />
            <b>Subject</b>: <input class="Input" type="text" name="subjectEmail">
            <br />
            <br />
            <textarea id="messageText" name="messageEmail"></textarea>
         </div>
         <br/>
         <button class="buttonDesign" type="submit" name="sendEmail">Send</button>
      </div>
      </div>
   </body>
</html>