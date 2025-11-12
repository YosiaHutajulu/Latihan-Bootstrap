<?php
header('Content-Type: application/json');

$conn = new mysqli("localhost", "root", "", "kejuaraan");
if ($conn->connect_error) {
    die(json_encode(["error" => "Koneksi gagal: " . $conn->connect_error]));
}

$sql = "SELECT tanggal, seri, tempat, kompetisi FROM kejuaraan.jadwal ORDER BY tanggal";
$result = $conn->query($sql);

$jadwal = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $jadwal[] = $row;
    }
}

echo json_encode($jadwal);
$conn->close();
?>
