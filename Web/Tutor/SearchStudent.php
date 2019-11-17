<?php 
session_start();
require '../../PHP/Tutor/TutorSession.php';
require '../../PHP/Tutor/Pagination.php';

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
<div id="contentSearch">
  
<table style="table-layout: auto;">
    
<tr>
    <th>From Student</th>
    <th>To Student</th>
    <th>Grade</th>
    <th>Evaluation</th>
    <th>Student Image</th>
  </tr>
<tr>
    <?php
    if (isset($_POST['searchList'])) {
      while ($row = $resultPage->fetch_assoc()) {
        echo "<td>" . $row['EvaluationFrom'] . "</td>";
        echo "<td>" . $row['EvaluationTo'] . "</td>";
        echo "<td>" . $row['Grade'] . "</td>";
        echo "<td><textarea readonly style='display:block;margin:auto;height:100px;outline: 0;resize: none;'> " . $row['EComment'] ." </textarea></td>";
        if (empty($row['StudentImage'])) {
        echo "<td><img style='display:block;margin:auto;' width='100' height='100' src='../../Images/Alternative/NoImage.png' /></td>";
        } else {
        echo "<td><img style='display:block;margin:auto;' width='100' height='100' src='../../Images/".$row['StudentImage']."' /></td>";
      }
    ?>
  </tr>

<?php } } ?>
  </table>
  <br />
  <form method="POST">
  <div class="pagination">
  <a href="">1</a>
  <a href="">2</a>
  <a href="">3</a>
  <a href="">4</a>
</div>
<br/>
  <select name="listSearch">
    <option value="EvaluationFrom">Student's Evaluation</option>
    <option value="Grade">Grade</option>
  </select>
  <input type="text" name="searchInput" maxlength="9">
  <br />
  <br />
  <button type="submit" name="searchList" class="buttonDesign">Search</button>
</form>
</div>
  </body>
</html>
