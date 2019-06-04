<!DOCTYPE html>
<html>
<head>
	<title>Статья 1</title>
	<meta charset="utf-8">
</head>
<body>
	<?php include 'db.php' ?>
	<?php  $index = $_GET['index']?>

	<h3><?php echo $database[$index]['header'];?></h3>
	<h2><?php echo $database[$index]['header2'];?></h2>
	<p><?php echo $database[$index]['long_txt'];?></p>
	<?php echo'<img src="'.$database[$index]['img'].'">';?>
	<?php echo 'lol'; ?>
</body>
</html>