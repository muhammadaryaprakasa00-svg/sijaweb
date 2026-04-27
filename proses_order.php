<?php
session_start();
include 'config.php';

$pengirim = $_SESSION['username'];
$layanan  = $_POST['layanan'];
$nama     = $_POST['nama'];
$alamat   = $_POST['alamat'];
$tanggal  = $_POST['tanggal'];

mysqli_query($conn, "INSERT INTO pesan 
(pengirim, layanan, nama, alamat, tanggal_pesan, status) 
VALUES 
('$pengirim','$layanan','$nama','$alamat','$tanggal','Pending')");

header("Location: dashboard.php");
?>