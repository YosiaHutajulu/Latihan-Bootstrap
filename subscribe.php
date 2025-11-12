<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kejuaraan";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];

// Simpan ke database
$sql = "INSERT INTO subscribe (nama, email) VALUES ('$nama', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Terima kasih telah berlangganan!'); window.location.href='index.php#SUBSCRIBE';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
