<?php
session_start();
include 'config.php';

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesanan Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

<h4>Pesanan Saya</h4>

<table class="table">
<tr>
    <th>Layanan</th>
    <th>Tanggal</th>
    <th>Status</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM pesan WHERE pengirim='$username'");

while($row = mysqli_fetch_assoc($data)){
    echo "
    <tr>
        <td>{$row['layanan']}</td>
        <td>{$row['tanggal_pesan']}</td>
        <td>{$row['status']}</td>
    </tr>
    ";
}
?>

</table>

</body>
</html>