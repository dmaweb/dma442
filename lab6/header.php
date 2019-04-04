<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>
		Lab 6 :
		<?php
		echo $pageTitle;
		?>
	</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<nav>
		<!-- add a "current" class to the page the user is currently visiting -->
		<a href="index.php" <?php
		   if($pageTitle=="Home") {
		   echo 'class="current"';
		   }
		   
		   ?>>Home Page</a>
		<a href="password.php" <?php
		   if($pageTitle=="PIN") {
		   echo 'class="current"';
		   }
		   
		   ?>>Password</a>
	</nav>
