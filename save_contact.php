<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');
    if ($nama && $email && $pesan) {
        $stmt = $conn->prepare("INSERT INTO pesan_kontak (nama, email, pesan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $pesan);
        $stmt->execute();
        $stmt->close();
        header("Location: thanks.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
}
header("Location: index.php");
exit();
?>
