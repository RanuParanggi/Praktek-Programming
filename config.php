<?php
$host = "localhost";
$user = "user20236038";
$pass = "dm6pPV";
$db   = "user20236038";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>

