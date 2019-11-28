<?php 
   session_start();
   require '../../PHP/Tutor/TutorSession.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Search</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/paginationStyle.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/script.js"></script>
      <script src="../../JavaScript/jquery-3.4.1.min.js"></script>
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
      <div id="contentSearch">
         <h3>Search</h3>
         <?php require '../../PHP/Tutor/DisplayPagination.php'; ?>
         <br/>
         <div class="TableContainer" style="overflow: auto; height: 480px; border: 1px solid black; border-radius: 12px; padding: 10px;">
            <table style="table-layout: auto;">
              <tr>
               <th>Group</th>
               <th>Evaluation From</th>
               <th>Evaluation To</th>
               <th>Grade</th>
               <th>Comment</th>
               <th>Student Image</th>
               <th>Time</th>
             </tr>
             <tr>
               <?php
               while ($row = $resultPage->fetch_array()) {
                 echo "<td>". $row['GroupEva'] ."</td>";
                 echo "<td>". $row['EvaluationFrom'] ."</td>";
                 echo "<td>". $row['EvaluationTo'] ."</td>";
                 echo "<td>". $row['Grade'] ."</td>";
                 echo "<td><textarea readonly style='display:block;margin:auto;height:100px;outline:0;resize:none;'>". $row['EComment'] ."</textarea></td>";
                 if (empty($row['StudentImage'])) {
                    echo "<td><img style='display:block;margin:auto;' width='100' height='100' src='../../Images/NoImage.png'></td>";
                 } else {
                    echo "<td><img style='display:block;margin:auto;' width='100' height='100' src='data:". $row['ImageType'] .";base64,". base64_encode($row['StudentImage']) ."' /></td>";
                 }
                 echo "<td>". $row['UploadTime'] ."</td>"; 
               

             ?>
           </tr>
             <?php } ?>
            </table>
         </div>
         <br />
      </div>
   </body>
</html>