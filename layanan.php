<?php
session_start();
include "../config.php";

/* proteksi admin */
if(!isset($_SESSION['role'])){
header("Location:../login.php");
exit;
}

if($_SESSION['role']!="admin"){
header("Location:../dashboard.php");
exit;
}

/* ambil data */
$data=mysqli_query($conn,"SELECT * FROM layanan");
?>

<!DOCTYPE html>
<html>
<head>
<title>CRUD Layanan</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
font-family:Arial;
background:#eef2ff;
}

/* sidebar */
.sidebar{
position:fixed;
left:0;
top:0;
width:260px;
height:100%;
background:linear-gradient(180deg,#667eea,#764ba2);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:28px;
font-weight:bold;
text-align:center;
margin-bottom:40px;
}

.menu a{
display:block;
padding:15px;
margin-bottom:15px;
text-decoration:none;
background:rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
}

.menu a:hover{
background:white;
color:#6a5acd;
}

/* main */
.main{
margin-left:280px;
padding:40px;
}

.card-box{
background:white;
padding:25px;
border-radius:25px;
box-shadow:0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">

<div class="logo">ADMIN SIJAWEB</div>

<div class="menu">

<a href="dashboard_admin.php">🏠 Dashboard</a>
<a href="data_pesanan.php">📦 Kelola Pesanan</a>
<a href="#">🛠️ CRUD Layanan</a>
<a href="konfirmasi_pembayaran.php">💳 Pembayaran</a>
<a href="logout.php">🚪 Logout</a>

</div>

</div>

<!-- MAIN -->
<div class="main">

<div class="card-box">

<div class="d-flex justify-content-between align-items-center">
<h3>Data Layanan</h3>

<a href="tambah_layanan.php"
class="btn btn-primary">
+ Tambah Layanan
</a>
</div>

<hr>

<table class="table table-bordered table-hover">

<tr>
<th>ID</th>
<th>Nama Jasa</th>
<th>Harga</th>
<th>Aksi</th>
</tr>

<?php while($d=mysqli_fetch_array($data)){ ?>

<tr>

<td><?= $d['id'];?></td>

<td><?= $d['nama_jasa'];?></td>

<td>Rp <?= $d['harga'];?></td>

<td>

<a href="edit_layanan.php?id=<?= $d['id'];?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapus_layanan.php?id=<?= $d['id'];?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus data?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>