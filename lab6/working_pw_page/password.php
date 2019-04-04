<!-- create a password variable $correctPassword -->
<?php $correctPassword = "pickles"; ?>
<!-- check if a password was submitted by the user. If true, store it in a variable called $submittedPassword -->
<?php if(isset($_GET['password'])) {
	$submittedPassword = $_GET['password'];
} ?>


<!-- add a pageTitle variable -->
<?php 
$pageTitle = "Password page";
?>
<!-- include header.php -->
<?php include("header.php"); ?>
	<h1>PIN number</h1>
<!-- Check if submittedPassword was set; i.e., the user has submitted a password -->

<!-- If true, compare $submittedPassword with $correctPassword -->

<?php if(isset($submittedPassword)) {
	if($submittedPassword == $correctPassword) {
		?>
		<!-- If true, show the PIN -->
		<h2>Your PIN is 55555</h2>
		<?php 
		}
	else { ?>
		<!-- If false, tell the user to try again -->
		<h2>Sorry, wrong password. Try again.</h2>
		<?php
		}
		}
	?>


<!-- Show the form if the user hasn't entered a password yet, or if the password was incorrect -->
<?php 
if((!isset($submittedPassword))||($submittedPassword != $correctPassword)) {
?>
<form action="">
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