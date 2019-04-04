<!-- create a password variable $correctPassword -->

<!-- check if a password was submitted by the user. If true, store it in a variable called $submittedPassword -->

<!-- add a pageTitle variable -->
<!-- include header.php -->
	<h1>PIN number</h1>
<!-- Check if submittedPassword was set; i.e., the user has submitted a password If true, compare $submittedPassword with $correctPassword -->

<!-- If $submittedPassowrd and $correctPassword are the same, show the PIN -->
<h2>Your PIN is 55555</h2>
<!-- If they are not the same, tell the user to try again -->
<h2>Sorry, wrong password. Try again.</h2>
<!-- Show the form if the user hasn't entered a password yet, OR if the password was incorrect -->
<form action="">
	<label for="password">Password:</label>
	<input type="password" name="password">
	<input type="submit">
	</form>
<!-- include footer.php -->
<!-- discuss POST vs. GET methods -->