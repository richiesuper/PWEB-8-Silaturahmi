<?php

include "config.php";

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM User WHERE email = '$email' AND password = '$password';";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		if (mysqli_fetch_array($result)) {
			$_SESSION['email'] = $email;
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

?>