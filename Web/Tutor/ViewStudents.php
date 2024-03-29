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
      <meta name="viewport" content="width=device-width, initial-scale=0.7">       
      <title>View Students</title>
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
               <a href="GroupView.php">Homepage</a>
               <a href="Logout.php">Logout</a>
            </div>
         </div>
         <span id="navigationButton" onclick="openNav()">☰</span>
         <img id="Logo" src="../../Images/Logo.png">
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
         <?php echo "<b>From:</b> ". $student ." <br /><br />" ?>
         <?php echo "<b>Average Grade </b>- " . $avg . "/10"; ?>
         <br />
         <br />
         <div id="StudentEva">
            <?php
               if (isset($_POST['showSelectStudent'])) {
                 while ($row = $resultDetails->fetch_array()) {
                 echo "<b>To: </b>" . $row['EvaluationTo'] . "<br /> <br />";
                 echo "<b>Grade: </b>" . $row['Grade'] . "/10 <br /><br />";
                 echo "<b>Evaluation</b>" . "<br />" . $row['EComment'] . "<br /><br />" ;
                 if (empty($row['StudentImage'])) {
                 echo "<img style='display:block;margin:auto;' width='100' height='100' src='../../Images/NoImage.png' />";
                 }
                 else {
                 echo "<b><u>Student's Image</u></b><br/>";
                 echo '<img style="display:block;margin:auto;"" width="100" height="100" src="data:'.$row['ImageType'].';base64,'.base64_encode($row['StudentImage']).'"/>';
                 }
                 echo "<br /><br /><hr />";
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