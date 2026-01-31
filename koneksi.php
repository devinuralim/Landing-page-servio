<?php
// Konfigurasi Database
// Gunakan setelan ini untuk pindah-pindah antara Lokal dan Hosting

$is_hosting = false; // Ubah ke true jika sudah di upload ke InfinityFree

if (!$is_hosting) {
    // SETINGAN LOKAL (XAMPP)
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "landing_page"; 
} else {
    // SETINGAN HOSTING (INFINITYFREE)
    // Data di bawah ini didapat dari Client Area / Control Panel InfinityFree
    $host = "sql305.infinityfree.com"; 
    $user = "if0_41023245";            
    $pass = "Devinuralim19"; 
    $db   = "if0_41023245_landing_page";    
}

$kon = mysqli_connect($host, $user, $pass, $db);

// Cek Koneksi
if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>