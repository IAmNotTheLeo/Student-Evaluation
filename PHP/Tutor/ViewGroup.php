<?php
if (isset($_POST['tuGroupView'])) {
    $_SESSION['viewStu'] = $_POST['ViewGroupStudent'];
    header("location: ViewStudents.php");
}
?>