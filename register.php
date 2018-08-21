<?php 
	include('includes/classes/Account.php');
	include('includes/classes/Constants.php');

	$account = new Account();

	include('includes/handlers/register-handler.php');
	include('includes/handlers/login-handler.php'); 

	function getInputValues($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
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
				<?php echo $account->getError(Constants::usernameCharacters); ?>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" placeholder="JohnSmith" value="<?php getInputValues("username") ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::firstNameCharacters); ?>
				<label for="firstName">First Name</label>
				<input type="text" id="firstName" name="firstName" placeholder="John" value="<?php getInputValues("firstName") ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::lastNameCharacters); ?>
				<label for="lastName">Last Name</label>
				<input type="text" id="lastName" name="lastName" placeholder="Smith" value="<?php getInputValues("lastName") ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::emailInvalid); ?>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" placeholder="john@smith.com" value="<?php getInputValues("email") ?>" required>
			</p>
			<p>
				<label for="email2">Confirm Email</label>
				<input type="email2" id="email2" name="email2" placeholder="john@smith.com" value="<?php getInputValues("email2") ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::passwordsDoNotMatch); ?>
				<?php echo $account->getError(Constants::passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::passwordCharacters); ?>
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