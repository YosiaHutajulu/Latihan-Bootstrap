<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "root", "", "kejuaraan");
if ($conn->connect_error) {
    die(json_encode(["error" => "Koneksi gagal: " . $conn->connect_error]));
}

$sql = "SELECT nama, jumlah FROM kejuaraan.podium";
$result = $conn->query($sql);

$labels = [];
$data = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $labels[] = $row["nama"];
        $data[] = $row["jumlah"];
    }
}

echo json_encode([
    "labels" => $labels,
    "data" => $data
]);

$conn->close();
