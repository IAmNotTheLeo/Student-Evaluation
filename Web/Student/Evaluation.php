<?php  
   session_start();
   require '../../PHP/Student/SubmitEva.php';
   require '../../PHP/Student/StudentSession.php';
   require '../../PHP/Student/SaveLater.php';
   require '../../PHP/Student/ShowSavedData.php';
   require '../../PHP/Student/DeleteSavedEva.php';
   
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.70">       
      <title>Evaluation</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <link rel="stylesheet" href="../../CSS/sweetalert2.min.css">
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/script.js"></script>
      <script src="../../JavaScript/sweetalert2.min.js"></script>
   </head>
   <body>
      <div id="second-header">
         <div id="nav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
               <a href="RateStudent.php">Rate Student</a>
               <a href="Logout.php">Logout</a>
            </div>
         </div>
         <span id="navigationButton" onclick="openNav()">☰</span>
         <img id="Logo" src="../../Images/Logo.png">
      </div>
      <div id="contentStudentEva">
         <form method="POST" action="Evaluation.php" enctype="multipart/form-data">
            Evaluating: <b><?php echo $_SESSION['ToStudent']; ?></b>
            <br />
            <br />
            Grade:
            <br />
            <br />
            <select style="width: 110px;" name="StuGrade">                  
               <option value="1" <?php if ($_POST['StuGrade'] == '1') echo 'selected="selected"'; if ($grade == '1') echo 'selected="selected"'; ?>>1</option>
               <option value="2" <?php if ($_POST['StuGrade'] == '2') echo 'selected="selected"'; if ($grade == '2') echo 'selected="selected"'; ?>>2</option>
               <option value="3" <?php if ($_POST['StuGrade'] == '3') echo 'selected="selected"'; if ($grade == '3') echo 'selected="selected"'; ?>>3</option>
               <option value="4" <?php if ($_POST['StuGrade'] == '4') echo 'selected="selected"'; if ($grade == '4') echo 'selected="selected"'; ?>>4</option>
               <option value="5" <?php if ($_POST['StuGrade'] == '5') echo 'selected="selected"'; if ($grade == '5') echo 'selected="selected"'; ?>>5</option>
               <option value="6" <?php if ($_POST['StuGrade'] == '6') echo 'selected="selected"'; if ($grade == '6') echo 'selected="selected"'; ?>>6</option>
               <option value="7" <?php if ($_POST['StuGrade'] == '7') echo 'selected="selected"'; if ($grade == '7') echo 'selected="selected"'; ?>>7</option>
               <option value="8" <?php if ($_POST['StuGrade'] == '8') echo 'selected="selected"'; if ($grade == '8') echo 'selected="selected"'; ?>>8</option>
               <option value="9" <?php if ($_POST['StuGrade'] == '9') echo 'selected="selected"'; if ($grade == '9') echo 'selected="selected"'; ?>>9</option>
               <option value="10" <?php if ($_POST['StuGrade'] == '10') echo 'selected="selected"'; if ($grade == '10') echo 'selected="selected"'; ?>>10</option>
            </select>
            <br />
            <br />
            Evaluation:
            <br />
            <br />
            <textarea cols="30" rows="10" id="eva" name="StuComment" placeholder="Evaluation" <?php if (isset($_POST['stuSaveLater']) || isset($_POST['stuDelete'])){ echo "style='color:white;'"; } ?> required><?php echo $comment; ?><?php if (isset($_POST['StuComment'])){ echo $_POST['StuComment']; } else { echo ''; } ?></textarea>
            <br/>
            <br />
            <input style="margin-left: 60px;" type="file" name="uploadImage" accept="image/*" />
            <br />
            <?php 
               if (isset($_POST['stuUpload']) || isset($_POST['stuSaveLater']) || isset($_POST['stuDelete'])) {
                 echo $msg;
               }
               ?>
            <br />
            <button class="buttonDelete" type="submit" name="stuDelete">Delete Saved</button>
            <br />
            <br />
            <button class="buttonSaveLater" type="submit" name="stuSaveLater">Save for Later</button>
            <br />
            <br />
            <button class="buttonDesign" style="font-size: 11px; padding: 6px;" type="submit" name="stuUpload">Finalise</button>
         </form>
      </div>
   </body>
</html>