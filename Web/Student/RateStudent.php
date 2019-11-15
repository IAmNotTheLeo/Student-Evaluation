<?php 
session_start();

require '../../PHP/Student/ShowGroupMembers.php';
require '../../PHP/UserSession.php';
require '../../PHP/Student/RateSystem.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
    <script src="../../JavaScript/navigation.js"></script>
    <script src="../../JavaScript/script.js"></script>
    <script src="../../JavaScript/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../../CSS/sweetalert2.min.css">
    <script>
    </script>
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
<div id="contentStudent">
<h1>Student 
  <br />
  <font size="5" color="#3D3B41"><?php echo $_SESSION['UserIDLogin']; ?></font>
  <h1>
<h3><?php echo "Group " . $_SESSION['UserGroupNum']; ?></h3>
Group Members
<br />
<br />
<form method="POST">
<select name="groupMembersDropDown" style="width: 150px;" required="">
<?php while ($row = $resultGroup->fetch_array()) { ?>
<option><?php echo $row['UserID']; ?></option>
<?php } ?>
</select>
<br />
<br />
<br />
<?php  
if (isset($_POST['stuRate'])) {
  echo $msg;
}
?>
<button class="buttonDesign" type="submit" name="stuRate">Rate Student</button>
</form>
</div>
  </body>
</html>
