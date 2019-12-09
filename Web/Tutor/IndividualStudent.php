<?php 
   session_start();
   require '../../PHP/Tutor/TutorSession.php';
   require '../../PHP/Tutor/ShowIndividual.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=0.7">
      <title>Search</title>
      <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/navigationLayout.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/buttonAnimation.css">
      <link rel="stylesheet" type="text/css" href="../../CSS/paginationStyle.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
      <script src="../../JavaScript/navigation.js"></script>
      <script src="../../JavaScript/script.js"></script>
   </head>
   <body>
      <div id="contentIndividual">
      	<?php 
      	while ($row = $resultIdv->fetch_array()){
      		echo "<h3>Student ID:</h3>" . $row['UserID'];
      		echo "<h3>Email: </h3>" . $row['UserEmail'];
      		echo "<h3>Overall Grade:</h3>" . $row['OverallGrade'];
      		echo "<h3>Group:</h3>" . $row['UserGroup'] ;
      	}
      	?>
      	<br />
      	<br />
      	<button class="buttonDesign" onclick="window.location.href='<?php echo $_SESSION['stuPage']; ?>'"  >Return</button>
      </div> 
   </body>
</html>