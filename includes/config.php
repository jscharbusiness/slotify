<?php 
	ob_start();
	session_start();

	$timezone = date_default_timezone_get();

	$SERVER = 'localhost';
	$USERNAME = 'root';
	$PASSWORD = 'password';
	$DATABASE = 'slotify';

	$conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

	if (mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}




 ?>