<!-- create a password variable $correctPassword -->
<?php
$correctPassword = "pickles";
?>
<!-- check if a password was submitted by the user. If true, store it in a variable called $submittedPassword -->
<?php
if(isset($_POST['password'])) {
	$submittedPassword = $_POST['password'];
}
?>
<!-- add a pageTitle variable -->
<?php
$pageTitle = "PIN";
?>
<!-- include header.php -->
<?php
include("header.php");
?>
<h1>PIN number</h1>
<!-- Check if submittedPassword was set; i.e., the user has submitted a password If true, compare $submittedPassword with $correctPassword -->
<?php
if(isset($submittedPassword)) {
	if($submittedPassword == $correctPassword) {
		?>
<h2>Your PIN is 55555</h2>
<?php }
	else {
		?>
<h2>Sorry, wrong password. Try again.</h2>
<?php }
	}

?>
<?php if((!isset($submittedPassword)) || ($submittedPassword != $correctPassword)) {
	?>
<form action="" method="post">
	<label for="password">Password:</label>
	<input type="password" name="password">
	<input type="submit">
</form>
<?php	
}
?>

<!-- include footer.php -->
<?php
include("footer.php");
?>
<!-- discuss POST vs. GET methods -->
