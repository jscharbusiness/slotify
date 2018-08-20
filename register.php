<?php 
	include('includes/classes/Account.php');

	$account = new Account();

	include('includes/handlers/register-handler.php');
	include('includes/handlers/login-handler.php'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Slotify</title>
</head>
<body>
	<div class="inputContainer">
		<form action="register.php" method="POST" id="loginForm">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input type="text" id="loginUsername" name="loginUsername" placeholder="JohnSmith" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input type="password" id="loginPassword" name="loginPassword" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
		</form>

		<form action="register.php" method="POST" id="registerForm">
			<h2>Login to your account</h2>
			<p>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" placeholder="JohnSmith" required>
			</p>
			<p>
				<label for="firstName">First Name</label>
				<input type="text" id="firstName" name="firstName" placeholder="John" required>
			</p>
			<p>
				<label for="lastName">Last Name</label>
				<input type="text" id="lastName" name="lastName" placeholder="Smith" required>
			</p>
			<p>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" placeholder="john@smith.com" required>
			</p>
			<p>
				<label for="email2">Confirm Email</label>
				<input type="email2" id="email2" name="email2" placeholder="john@smith.com" required>
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" required>
			</p>
			<p>
				<label for="password2">Password</label>
				<input type="password" id="password2" name="password2" required>
			</p>

			<button type="submit" name="registerButton">SIGN UP</button>
		</form>

	</div>
</body>
</html>