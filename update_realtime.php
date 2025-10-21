<?php
include "config.php";

// Ambil data terbaru dari statistik_kost
$sql = "SELECT kamar_standar, kamar_deluxe, kamar_premium FROM statistik_kost ORDER BY wakstu_update DESC LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total = $row['kamar_standar'] + $row['kamar_deluxe'] + $row['kamar_premium'];

    // Simpan ke tabel data_realtime
    $stmt = $conn->prepare("INSERT INTO data_realtime (tanggal, kamar_tersedia) VALUES (CURDATE(), ?)");
    $stmt->bind_param("i", $total);
    $stmt->execute();

    echo "Data realtime berhasil direkam.";
} else {
    echo "Belum ada data di tabel statistik_kost.";
}