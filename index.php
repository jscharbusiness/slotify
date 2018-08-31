<?php 
include('includes/config.php');

// session_destroy();

if (isset($_SESSION['userLoggedIn'])) {
	$username = $_SESSION['userLoggedIn'];
} else {
	header('Location: register.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Slotify</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div id="mainContainer">

		<div id="topContainer">
			<?php include('includes/navBarContainer.php'); ?>
		</div>

		<?php include('includes/nowPlayingBar.php'); ?>
	</div>



</body>
</html>