<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>History Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

<h4>Riwayat Pembayaran</h4>

<table class="table table-bordered">
<tr>
    <th>Nama</th>
    <th>Total</th>
    <th>Metode</th>
    <th>Layanan</th>
</tr>

<?php
$data = mysqli_query($conn, "
SELECT pembayaran.*, pesan.layanan 
FROM pembayaran 
JOIN pesan ON pembayaran.id_pesan = pesan.id
");

while($row = mysqli_fetch_assoc($data)){
    echo "
    <tr>
        <td>{$row['nama']}</td>
        <td>Rp {$row['total']}</td>
        <td>{$row['metode']}</td>
        <td>{$row['layanan']}</td>
    </tr>
    ";
}
?>

</table>

<a href="dashboard.php" class="btn btn-primary">Kembali</a>

</body>
</html>