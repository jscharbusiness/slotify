<?php 
	include('includes/config.php');
	include('includes/classes/Account.php');
	include('includes/classes/Constants.php');

	$account = new Account($conn);

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
	<link rel="stylesheet" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="assets/js/register.js"></script>
</head>
<body>

	<?php 
		if (isset($_POST['registerButton'])) {
			echo "<script>
				$(document).ready(function(){
					$('#loginForm').hide();
					$('#registerForm').show();
				});		
			</script>";
		} else {
			echo "<script>
				$(document).ready(function(){
					$('#loginForm').show();
					$('#registerForm').hide();
				});		
			</script>";
		}
	 ?>

	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<form action="register.php" method="POST" id="loginForm">
					<h2>Login to your account</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input type="text" id="loginUsername" name="loginUsername" placeholder="JohnSmith" required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input type="password" id="loginPassword" name="loginPassword" placeholder='Your password' required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Signup here.</span>
					</div>
				</form>

				<form action="register.php" method="POST" id="registerForm">
					<h2>Create your free account</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
						<label for="username">Username</label>
						<input type="text" id="username" name="username" placeholder="JohnSmith" value="<?php getInputValues("username") ?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">First Name</label>
						<input type="text" id="firstName" name="firstName" placeholder="John" value="<?php getInputValues("firstName") ?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Last Name</label>
						<input type="text" id="lastName" name="lastName" placeholder="Smith" value="<?php getInputValues("lastName") ?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input type="email" id="email" name="email" placeholder="john@smith.com" value="<?php getInputValues("email") ?>" required>
					</p>
					<p>
						<label for="email2">Confirm Email</label>
						<input type="email" id="email2" name="email2" placeholder="john@smith.com" value="<?php getInputValues("email2") ?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="password">Password</label>
						<input type="password" id="password" name="password" required>
					</p>
					<p>
						<label for="password2">Password</label>
						<input type="password" id="password2" name="password2" required>
					</p>

					<button type="submit" name="registerButton">SIGN UP</button>

					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Login here.</span>
					</div>
				</form>

			</div>
			<div id="loginText">
				<h1>Get great music, right now</h1>
				<h2>Listen to loads of songs for free.</h2>
			</div>
		</div>
	</div>
</body>
</html>