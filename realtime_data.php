<?php
include 'config.php';
header('Content-Type: application/json');

$result = $conn->query("SELECT waktu, nilai FROM data_realtime ORDER BY id DESC LIMIT 10");
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode(array_reverse($data));
?>