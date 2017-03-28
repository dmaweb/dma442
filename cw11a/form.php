<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>PHP forms</title>
</head>
<body>
<h1>PHP is great for forms.</h1>
<?php

if(isset($_POST['full_name'])) { 
// Did the user already submit the form? If so, say hello!

?>
<h2>Hello, <?php echo $_POST['full_name']; ?>!</h2>
	<?php } 
	else { 
// show an html form where they can type in a name
?>
<form action="" method="post">
		<label for="full_name">Full name:</label>
		<br>
		<input type="text" name="full_name" /><br>
		<input type="submit">
</form>
<?php } ?>
</body>
</html>