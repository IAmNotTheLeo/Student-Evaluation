<?php
   session_start();
   require '../../PHP/Main/LoginSystem.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <script src="../../JavaScript/slide.js"></script>
      <script src="../../JavaScript/script.js"></script>
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/sweetalert2.min.js"></script>
      <link rel="stylesheet" href="../../CSS/sweetalert2.min.css">
   </head>
   <body>
      <div id="second-header">
         <div id="nav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
               <a href="Register.php">Register</a>
            </div>
         </div>
         <span id="navigationButton" onclick="openNav()">☰</span>
         <img id="Logo" src="../../Images/Logo.png">
      </div>
      <div id="contentLogin">
         <h2>Login</h2>
         <form method="POST" action="Login.php">
            <br />
            <input class="Input" type="text" placeholder="ID" maxlength="9" onkeypress="return onlyNumber(event)" name="IDLogin" value="<?php if (isset($_COOKIE['IDLogin'])) { echo $_COOKIE['IDLogin']; } if (isset($_POST['IDLogin'])){ echo $_POST['IDLogin']; } else { echo ''; }?>" required>
            <br />
            <br />
            <input class="Input" type="password" placeholder="Password" name="PasswordLogin" required>
            <br />
            <br />
            <a class="linkWeb" href="Register.php">Haven't Registered?</a>
            <br />
            <br />
            <input type="checkbox" name="rememberMeUser">  Remember Me
            <br />
            <br />
            <?php
               if (isset($_POST['Logsubmit'])) {
                 echo $msg;
               }
               ?>
            <button class="buttonDesign" type="submit" name="Logsubmit">Login</button>
         </form>
      </div>
   </body>
</html>