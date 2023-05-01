<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "silaturahmi";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
	die("Failed to connect to database: " . mysqli_connect_error());
}
