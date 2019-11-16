<?php
//require '/home/lc8884l/include/connection.php';
require "../../PHP/connection.php";

$queryPage = "SELECT * FROM Evaluation LIMIT 2";
$resultPage = $connect->query($queryPage);



?>