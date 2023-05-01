<?php
session_start();
include "config.php";

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM User WHERE email = '$email' AND password = '$password';";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$row = mysqli_fetch_array($result);
		if ($row) {
			$_SESSION['email'] = $email;
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['type'] = $row['type'];
			header("Location: index.php?lstatus=success");
		} else {
			header("Location: auth-login.php?lstatus=failed");
		}
	} else {
		header("Location: auth-login.php?lstatus=failed");
	}
} else {
	echo "<h1>Access Forbidden!</h1>";
}
