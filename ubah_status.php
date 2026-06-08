<?php
include "../config.php";

$id=$_GET['id'];
$status=$_GET['status'];

mysqli_query($conn,"
UPDATE pesanan
SET status='$status'
WHERE id_pesan='$id'
");

header(
"Location:data_pesanan.php"
);
?>