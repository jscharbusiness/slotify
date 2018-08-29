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
</head>
<body>
	<h1>Hello World</h1>
</body>
</html>