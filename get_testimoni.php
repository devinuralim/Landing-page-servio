<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'koneksi.php';

header("Content-Type: application/json");

$host = "sql305.infinityfree.com"; 
    $user = "if0_41023245";            
    $pass = "Devinuralim19"; 
    $db   = "if0_41023245_landing_page";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo json_encode(["error" => $conn->connect_error]);
    exit;
}

$sql = "SELECT nama, komentar FROM testimoni ORDER BY tanggal DESC";
$result = $conn->query($sql);

$data = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();
