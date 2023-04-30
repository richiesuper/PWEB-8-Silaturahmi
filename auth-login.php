<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Silaturahmi Online Bareng Cak Eri</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<?php

	include "navbar.php";

	if (isset($_GET['rstatus']) && $_GET['rstatus'] === "success") {
		echo "<h1>Registration successful. Please login into the new account.</h1>";
	}

	echo '
		<form action="login.php" method="POST">
			<label for="email">Email</label>
			<input id="email" name="email" type="text" placeholder="Email">
			<label for="password">Password</label>
			<input id="password" name="password" type="password" placeholder="Password">
			<button name="login" value="login">Login</button>
		</form>
		<p>Don\'t have an account? <a href="auth-register.php">Register!</a></p>
	';

	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>