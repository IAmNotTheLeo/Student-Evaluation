<?php

if(!isset($_SESSION['TutorSession'])) {
	header("location: ../Main/Login.php");
  exit;
}

?>