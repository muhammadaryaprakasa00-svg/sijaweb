<?php
session_start();
include 'config.php';

$pengirim = $_SESSION['username'];
$isi = $_POST['isi'];

mysqli_query($conn, "INSERT INTO pesan (pengirim, isi) 
VALUES ('$pengirim', '$isi')");

header("Location: dashboard.php");
