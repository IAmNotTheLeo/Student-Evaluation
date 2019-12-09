<?php 
   session_start();
   require '../../PHP/Tutor/TutorSession.php';

   if (isset($_POST['SelectedStudent'])) {
     if (!isset($_POST['selectedID'])) {
       $msg = "<font color='#c72828'><i>Please Select Student<i></font><p />";
     } else {
      $_SESSION['IDstu'] = $_POST['selectedID'];
      $_SESSION['stuPage'] = $_SERVER['REQUEST_URI']; 
      header("Location: IndividualStudent.php");
     }
   }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.7">
      <title>Search</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/paginationStyle.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/script.js"></script>
   </head>
   <body>
      <div id="second-header">
         <div id="nav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
               <a href="SearchIDorGrade.php">Search</a>
               <a href="Logout.php">Logout</a>
            </div>
         </div>
         <span id="navigationButton" onclick="openNav()">☰</span>
         <img id="Logo" src="../../Images/Logo.png">
      </div>
      <div id="contentSearch">
         <h3>Search</h3>
         <?php require '../../PHP/Tutor/DisplayPaginationIDGrade.php'; ?>
         <br/>
         <div class="TableContainer" style="overflow: auto; height: 150px; border: 1px solid black; border-radius: 12px; padding: 30px;">
            <table style="table-layout: auto;">
              <tr>
               <th>Student ID</th>
               <th>Grade</th>
             </tr>
             <tr>
               <?php
               while ($row = $resultPage->fetch_array()) {
                 echo "<td><form method='POST'><input type='radio' value='". $row['UserID'] ."' name='selectedID'/> ". $row['UserID'] ."</td>";
                 echo "<td>". $row['OverallGrade'] ."</td>";
             ?>
           </tr>
             <?php } ?>
            </table>
         </div>
         <br />
         <?php echo $msg; ?>
         <button class="buttonDesign" type="submit" name='SelectedStudent'>View Student</button>
       </form>
         <br />
         <br />
         <button class="buttonDesign" onclick="window.location.href='SearchIDorGrade.php';"> Return</button>
      </div>
   </body>
</html>