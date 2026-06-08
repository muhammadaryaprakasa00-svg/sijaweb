<?php
include "../config.php";

$id=$_GET['id'];

mysqli_query($conn,"
UPDATE pesanan
SET pembayaran='Lunas'
WHERE id_pesan='$id'
");

header("Location:konfirmasi_pembayaran.php");
?>