<?php 

function testUsername($data) {
	$data = strip_tags($data);
	$data = str_replace(" ", "", $data);
	return $data;
}

function testPassword($data) {
	$data = strip_tags($data);
	return $data;
}

function testString($data) {
	$data = strip_tags($data);
	$data = str_replace(" ", "", $data);
	$data = ucfirst(strtolower($data));
	return $data;
}

if(isset($_POST['registerButton'])) {
	
	$username = testUsername($_POST['username']);
	$firstName = testString($_POST['firstName']);
	$lastName = testString($_POST['lastNames']);
	$email = testString($_POST['email']);
	$email2 = testString($_POST['email2']);
	$password = testPassword($_POST['password']);
	$password2 = testPassword($_POST['password2']);

	$account->register(username, firstName, lastName, email, email2, password, password2);
	
}



 ?>