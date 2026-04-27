<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    die("User belum login");
}

$username = $_SESSION['username'];

// 🔥 validasi POST
if (!isset($_POST['layanan']) || !isset($_POST['total'])) {
    die("Data tidak lengkap!");
}

$layanan = $_POST['layanan'];
$total   = $_POST['total'];
$tanggal = date('Y-m-d');

mysqli_query($conn, "INSERT INTO pembayaran 
(username, layanan, tanggal, total, status)
VALUES 
('$username','$layanan','$tanggal','$total','Lunas')");

header("Location: sukses.php");
?>