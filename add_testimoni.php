<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$user = "root";
$pass = "";
$db   = "landing_page";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo "Koneksi gagal";
    exit;
}

$nama = $_POST['nama'] ?? '';
$komentar = $_POST['komentar'] ?? '';

if ($nama == '' || $komentar == '') {
    echo "Data tidak lengkap";
    exit;
}

$sql = "INSERT INTO testimoni (nama, komentar) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nama, $komentar);
$stmt->execute();

echo "ok";
$conn->close();
