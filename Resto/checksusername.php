<?php
	require_once 'Controllers/salesmancontroller.php';
	$username = $_GET["username"];
	$user = checkUsername($username);
	if($user){
		echo "invalid";
	}
	else echo "valid";
?>