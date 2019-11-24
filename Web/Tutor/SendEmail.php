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
      <script src="../../JavaScript/sweetalert2.min.js"></script>
      <script src="../../JavaScript/script.js"></script>
      <link rel="stylesheet" href="../../CSS/sweetalert2.min.css">
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
         <img id="Logo" src="../../Images/Logo.png">
      </div>
      <div id="contentEmail">
         <h2>Email</h2>
         <form method="POST">
         <div id="emailLayout">
            <b>To</b>: <?php echo "Group " . $studentGroup . " Members"?>
            <br />
            <b>Subject</b>: <input class="Input" type="text" name="subjectEmail" required>
            <br />
            <br />
            <textarea id="messageText" name="messageEmail" required></textarea>
         </div>
         <br />

<div id="id01" class="w3-modal w3-animate-opacity">

</div>

         

         <img src="../../Images/Info.png" width="25" height="25" style="cursor: pointer;" onclick="document.getElementById('id01').style.display='block'">







         <br />
         <br />
         <input type="checkbox" name="incomplete">  Incomplete Group
         <br/>
         <br/>
         <?php
         if (isset($_POST['sendEmail'])) {
            echo $msg;
         }
         ?>
         <button class="buttonDesign" type="submit" name="sendEmail">Send Email</button>
         <br />
         <br />
      </form>
      <form method="POST">
         <?php
         if (isset($_POST['showGroupEva'])) {
            echo $msg;
         }
         ?>
      <button class="buttonDesign" name="showGroupEva" title="Check Group">Group Evaluation</button>
      </form>
   </div>

   </body>
</html>