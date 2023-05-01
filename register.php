<?php

include "config.php";

if (isset($_POST['register'])) {
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$type = $_POST['type'];
	$sql = "INSERT INTO User (email, username, password, type) values ('$email', '$username', '$password', '$type');";
	if (mysqli_query($conn, $sql)) {
		header("Location: auth-login.php?rstatus=success");
	} else {
		header("Location: auth-register.php?rstatus=failed");
	}
} else {
	echo "<h1>Access Forbidden!</h1>";
}
