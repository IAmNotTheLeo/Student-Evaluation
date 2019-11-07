<?php  

if(!isset($_SESSION['UserSession'])) {
	header("location: ../Main/Login.php");
  exit;
}

?>