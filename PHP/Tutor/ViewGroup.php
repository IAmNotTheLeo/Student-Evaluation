<?php
if (isset($_POST['tuGroupView'])) {
    $_SESSION['viewStu'] = $_POST['ViewGroupStudent'];
    header("location: ViewStudents.php");
}
if (isset($_POST['tuSendEmail'])) {
	$_SESSION['tuEmailSendG'] = $_POST['ViewGroupStudent'];
	header("location: SendEmail.php");
}

?>