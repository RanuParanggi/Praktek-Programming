<?php
include "config.php";

$sql = "SELECT kamar_standar, kamar_deluxe, kamar_premium, waktu_update 
        FROM statistik_kost 
        ORDER BY waktu_update DESC 
        LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  echo json_encode($result->fetch_assoc());
} else {
  echo json_encode([
    "kamar_standar" => 0,
    "kamar_deluxe" => 0,
    "kamar_premium" => 0,
    "waktu_update" => null
  ]);
}

$conn->close();
?>
