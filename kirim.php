<?php
session_start();
include "config.php";

if (isset($_POST['pesan'])) {
  $value1 = $_SESSION['user_id'];
  $value2 = $_POST['pesan'];

  $stmt = $conn->prepare("INSERT INTO Pesan (user_id, content) VALUES (?, ?)");
  $stmt->bind_param("is", $value1, $value2);

  if ($stmt->execute()) {
    header("Location: daftar-ucapan.php");
  } else {
    die("Error: " . $stmt->error);
  }

  $stmt->close();
  $conn->close();
}
