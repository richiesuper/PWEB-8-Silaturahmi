<?php
session_start();
include "config.php";

if (isset($_POST['content'])) {
	$sql = "INSERT INTO Balasan (user_id, pesan_id, content) VALUES ({$_SESSION['user_id']}, {$_POST['pesan_id']}, '{$_POST['content']}');";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location: daftar-ucapan.php?bstatus=success");
	} else {
		header("Location: daftar-ucapan.php?bstatus=failed");
	}
}
