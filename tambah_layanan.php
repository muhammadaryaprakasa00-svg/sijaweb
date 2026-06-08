<?php
include "../config.php";

if(isset($_POST['simpan'])){

$jasa=$_POST['nama_jasa'];
$harga=$_POST['harga'];

mysqli_query($conn,"
INSERT INTO layanan VALUES(
NULL,
'$jasa',
'$harga'
)
");

header("Location:layanan.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Layanan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card p-4">

<h3>Tambah Layanan</h3>

<form method="post">

<div class="mb-3">
<input name="nama_jasa" class="form-control" placeholder="Nama Jasa">
</div>

<div class="mb-3">
<input name="harga" class="form-control" placeholder="Harga">
</div>

<button name="simpan" class="btn btn-success">
Simpan
</button>

<a href="layanan.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</body>
</html>