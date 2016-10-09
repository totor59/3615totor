<?php
// Set password
$password = 'totor';
$userPassword = htmlspecialchars($_POST['password']);
// Verify password
if($password != $userPassword) {
	header('location: index.php?type=passerror');
	exit;
}
if($password === $userPassword) {
	header('location: home.php');
	exit;
}
