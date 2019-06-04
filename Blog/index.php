<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php include 'db.php' ?>
	
<?php for($i =0; $i < count($database);  $i++) {

?>
<div>
<?php 
	echo '<h2>' . $database[$i]['header'] . '<h2>';
	echo '<p>' . $database[$i]['short_txt'] . '<p>';
	echo '<img src="'.$database[$i]['img'].'">';
	echo '<a href="page.php?index='. $i .'">Next</a>';
	echo '<hr></hr>';
 ?>
 </div>
 <?php  }?>
</body>
</html>