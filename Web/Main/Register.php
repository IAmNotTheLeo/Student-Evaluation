<?php
   session_start();
   require '../../PHP/Main/RegisterSystem.php';
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.7"> 
      <title>Register</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <link href='https://fonts.googleapis.com/css?family=Fascinate Inline' rel='stylesheet'>
      <link rel="stylesheet" href="../../CSS/sweetalert2.min.css">
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/script.js"></script>
      <script src="../../JavaScript/sweetalert2.min.js"></script>
      <script type="text/javascript" id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js" data-close-text="I Agree" data-font-size="15px" data-divlinkbg="#033657" data-divlink="white"></script>
   </head>
   <body onload="generateCaptcha()">
      <div id="second-header">
         <div id="nav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
               <a href="Login.php">Login</a>
            </div>
         </div>
         <span id="navigationButton" onclick="openNav()">☰</span>
         <img id="Logo" src="../../Images/Logo.png">
      </div>
      <div id="contentRegister">
         <form method="POST" onsubmit="return validateForm()">
            <h2>Register</h2>
            <input value="<?php if (isset($_POST['stuID'])){ echo $_POST['stuID']; } else { echo ''; } ?>" title="Please Enter ID Number" id="firstInput" class="Input" placeholder="ID" type="text" name="stuID" maxlength="9" onkeypress="return onlyNumber(event)" onpaste="return false;" required>
            <br />
            <br />
            <input value="<?php if (isset($_POST['stuEmail'])){ echo $_POST['stuEmail']; } else { echo ''; } ?>" title="Please Enter University Email - example@gre.ac.uk" id="secondInput" class="Input" placeholder="Email" type="email" name="stuEmail" required>
            <br/>
            <br/>
            <input value="<?php if (isset($_POST['stuPassoword'])){ echo $_POST['stuPassoword']; } else { echo ''; } ?>" title="Please Enter Password" id="passwordID" class="Input" placeholder="Password" type="password" name="stuPassoword" required>
            <br />
            <br />
            <input value="<?php if (isset($_POST['stuConfirmPassword'])){ echo $_POST['stuConfirmPassword']; } else { echo ''; } ?>" title="Please Confirm Password" id="confirmPassword" class="Input" placeholder="Re-Enter Password" type="password" name="stuConfirmPassword" required>
            <br />
            <br />
            <div id="generateCAPTCHA" unselectable="on"></div>
            <br />
            <input style="text-align: center;" title="Please Enter CAPTCHA" id="answer" class="Input" placeholder="Type Answer" type="text" name="stuCAPTCHA" required>
            <br />
            <br />
            <input type="checkbox" onclick="showPassword();"> Show Password
            <br />
            <br />
            <select name="groupDropDown" style="width: 250px;">
               <option value="1" <?php if ($_POST['groupDropDown'] == '1') echo 'selected="selected"'; ?>>Group 1</option>
               <option value="2" <?php if ($_POST['groupDropDown'] == '2') echo 'selected="selected"'; ?>>Group 2</option>
               <option value="3" <?php if ($_POST['groupDropDown'] == '3') echo 'selected="selected"'; ?>>Group 3</option>
               <option value="4" <?php if ($_POST['groupDropDown'] == '4') echo 'selected="selected"'; ?>>Group 4</option>
               <option value="5" <?php if ($_POST['groupDropDown'] == '5') echo 'selected="selected"'; ?>>Group 5</option>
               <option value="6" <?php if ($_POST['groupDropDown'] == '6') echo 'selected="selected"'; ?>>Group 6</option>
               <option value="7" <?php if ($_POST['groupDropDown'] == '7') echo 'selected="selected"'; ?>>Group 7</option>
               <option value="8" <?php if ($_POST['groupDropDown'] == '8') echo 'selected="selected"'; ?>>Group 8</option>
               <option value="9" <?php if ($_POST['groupDropDown'] == '9') echo 'selected="selected"'; ?>>Group 9</option>
               <option value="10"<?php if ($_POST['groupDropDown'] == '10') echo 'selected="selected"'; ?>>Group 10</option>
            </select>
            <br />
            <br />
            <?php
               if (isset($_POST['regSubmit'])) {
                 echo $msg;
               }
               ?>
            <button class="buttonDesign" type="submit" value="Create Account" name="regSubmit">Create Account</button>
         </form>
      </div>
   </body>
</html>