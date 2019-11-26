<?php 
   session_start();
   require '../../PHP/Tutor/TutorSession.php';
   require '../../PHP/Tutor/PaginationStudent.php';
   
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Search</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/script.js"></script>
      <link rel="stylesheet" type="text/css" href="../../CSS/pagination.css">
      <script src="../../JavaScript/jquery-3.4.1.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
      <script>
         $(document).ready(function(){
           $('#example').DataTable({
             "iDisplayLength": 3,
             "aLengthMenu": [[3, 4, 5, -1], [3 + " Per Page", 4 + " Per Page", 5 + " Per Page",  "All Evaluations"]],
             "bInfo" : false,
             "oLanguage": {
             "sLengthMenu": "Show _MENU_",
           }
           });
         });
      </script>
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
         <div style="overflow: auto; height: 480px; border: 1px solid black; border-radius: 10px; padding: 25px;">
            <table id="example" class="display" cellspacing="0">
               <thead>
                  <tr>
                     <td>Group</td>
                     <td>Evaluation From</td>
                     <td>Evaluation To</td>
                     <td>Grade</td>
                     <td>Comment</td>
                     <td>Student Image</td>
                  </tr>
               </thead>
               <?php 
                  while ($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                  echo "<td>" . $row['GroupEva'] . "</td>";
                  echo "<td>" . $row['EvaluationFrom'] . "</td>";
                  echo "<td>" . $row['EvaluationTo'] . "</td>";
                  echo "<td>" . $row['Grade'] . "</td>";
                      echo "<td><textarea readonly style='height:100px;resize: none;'> " . $row['EComment'] ." </textarea></td>";
                    if (empty($row['StudentImage'])) {
                      echo "<td><img style='display:block;margin:auto;' width='100' height='100' src='../../Images/NoImage.png' /></td>";
                      } else {
                        echo '<td><img style="display:block;margin:auto;"" width="100" height="100" src="data:'.$row['ImageType'].';base64,'.base64_encode($row['StudentImage']).'"/></td>';
                    }
                  echo "</tr>";
                    
                  }
                  ?>
            </table>
         </div>
         <br />
      </div>
   </body>
</html>