<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Method tidak valid");
}

$nama = $_POST['nama'] ?? '';
$komentar = $_POST['komentar'] ?? '';

if (empty($nama) || empty($komentar)) {
    die("Data tidak lengkap");
}

$sql = "INSERT INTO testimoni (nama, komentar) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare gagal: " . $conn->error);
}

$stmt->bind_param("ss", $nama, $komentar);

if ($stmt->execute()) {
    echo "ok";
} else {
    echo "Gagal simpan: " . $stmt->error;
}

$stmt->close();
$conn->close();
