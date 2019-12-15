<?php
session_start();
require '../../PHP/Tutor/StudentsViewEmail.php';
require '../../PHP/Tutor/EmailGroup.php';
require '../../PHP/Tutor/TutorSession.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.7"> 
      <title>Email</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <link rel="stylesheet" href="../../CSS/sweetalert2.min.css"> 
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/sweetalert2.min.js"></script>
      <script src="../../JavaScript/script.js"></script>
      <script src="../../JavaScript/jquery-3.4.1.min.js"></script>
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
         <input type="checkbox" name="incomplete">  Incomplete Group
         <br/>
         <br/>
         <?php
         if (isset($_POST['sendEmail'])) {
            echo $msg;
            echo "<script>
            $(document).ready(function(){
               $('#disableButton').click(function(){
                $('#disableButton').hide();
               });
                  });
                  </script>";  
         }
         ?>
         <button id="disableButton" class="buttonDesign" type="submit" name="sendEmail">Send Email</button>
         <br />
         <br />
      </form>
   </div>
   </body>
</html>