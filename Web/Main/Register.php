<?php
   session_start();
   require '../../PHP/Main/RegisterSystem.php';
   //https://codingcyber.org/simple-captcha-script-php-5765/
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Register</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <link href='https://fonts.googleapis.com/css?family=Fascinate Inline' rel='stylesheet'>
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/script.js"></script>
      <script src="../../JavaScript/sweetalert2.min.js"></script>
      <link rel="stylesheet" href="../../CSS/sweetalert2.min.css">
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
         <img id="Logo" src="../../WebImage/Logo.png">
      </div>
      <div id="contentRegister">
         <form id="myForm" action="Register.php" method="POST" onsubmit="return !!(checkCaptcha() & checkPassword() & iDLimit())" name="form">
            <h2>Register</h2>
            <input title="Please Enter ID Number" id="firstInput" class="Input" placeholder="ID" type="text" name="stuID" maxlength="9" onkeypress="return onlyNumber(event)"  required>
            <br />
            <br />
            <input title="Please Enter University Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="Input" placeholder="Email" type="email" name="stuEmail" required>
            <br/>
            <br/>
            <input title="Please Enter Password" id="passwordID" class="Input" placeholder="Password" type="password" name="stuPassoword" required>
            <br />
            <br />
            <input title="Please Confirm Password" id="confirmPassword" class="Input" placeholder="Re-Enter Password" type="password" name="stuConfirmPassword" required>
            <br />
            <br />
            <input style="font-size: 20px; " id="generateCAPTCHA" title="CAPTCHA" type="text" disabled="" readonly="">
            <br />
            <br />
            <input style="text-align: center;" title="Please Enter CAPTCHA" id="answer" class="Input" placeholder="Type Answer" type="text" name="stuCAPTCHA" required>
            <br />
            <br />
            <input type="checkbox" onclick="showPassword();"> Show Password
            <br />
            <br />
            <select name="groupDropDown" style="width: 250px;">
               <option value="1">Group 1</option>
               <option value="2">Group 2</option>
               <option value="3">Group 3</option>
               <option value="4">Group 4</option>
               <option value="5">Group 5</option>
               <option value="6">Group 6</option>
               <option value="7">Group 7</option>
               <option value="8">Group 8</option>
               <option value="9">Group 9</option>
               <option value="10">Group 10</option>
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