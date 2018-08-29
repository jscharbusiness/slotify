<?php 

function sanitizeUsername($data) {
	$data = strip_tags($data);
	$data = str_replace(" ", "", $data);
	return $data;
}

function sanitizePassword($data) {
	$data = strip_tags($data);
	return $data;
}

function sanitizeString($data) {
	$data = strip_tags($data);
	$data = str_replace(" ", "", $data);
	$data = ucfirst(strtolower($data));
	return $data;
}

if(isset($_POST['registerButton'])) {
	
	$username = sanitizeUsername($_POST['username']);
	$firstName = sanitizeString($_POST['firstName']);
	$lastName = sanitizeString($_POST['lastName']);
	$email = sanitizeString($_POST['email']);
	$email2 = sanitizeString($_POST['email2']);
	$password = sanitizePassword($_POST['password']);
	$password2 = sanitizePassword($_POST['password2']);

	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2); 
	
	if ($wasSuccessful == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}
}

 ?>