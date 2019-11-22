<?php 
session_start();
$to = "ma5151z@gre.ac.uk";
$subject = "Test 1";
$txt = "You can't have your phone";
$headers = "From: lc8884l@gre.ac.uk\r\n";

mail($to, $subject, $txt, $headers);

?> 