<?php  
session_start();
require '../../PHP/Student/SubmitEva.php';
require '../../PHP/UserSession.php';
require '../../PHP/Student/SaveLater.php';
require '../../PHP/Student/ShowSavedData.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Evaluation</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
    <script src="../../JavaScript/navigation.js"></script>
    <script src="../../JavaScript/script.js"></script>
      <script src="../../JavaScript/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../../CSS/sweetalert2.min.css">
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
<div id="contentStudent">
<form method="POST" action="Evaluation.php" enctype="multipart/form-data">
  Evaluating: <b><?php echo $_SESSION['ToStudent']; ?></b>
  <br />
  <br />
  Grade:
  <br />
  <br />
  <select style="width: 100px;" name="StuGrade">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
  <br />
  <br />
  Evaluation:
  <br />
  <br />
  <textarea cols="30" rows="10" name="StuComment" placeholder="Evaluation" required><?php while ($rows = mysqli_fetch_array($resultSaved)){echo($rows['SaveComment']);}?>
</textarea>
  <br />
  <br />
  <input type="file" name="uploadImage" id="buttonFileUpload" class="btnChoose" accept="image/*"/ placeholder="Upload Image">
  <label for="buttonFileUpload" class="btnLabel">Upload Image</label>
<br />
<?php 
if (isset($_POST['stuUpload']) || isset($_POST['stuSaveLater'])) {
  echo $msg;
}
?>
<br />
<button class="buttonSaveLater" type="submit" name="stuSaveLater">Save for Later</button>
<br />
<br />
<button class="buttonUpload" type="submit" name="stuUpload">Submit</button>
</form>
</div>
  </body>
</html>