<?php

if(!isset($_SESSION['StudentSession'])) {
	header("location: ../Main/Login.php");
  exit;
}

?>