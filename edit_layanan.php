<?php
include "../config.php";

$id=$_GET['id'];

$data=mysqli_fetch_array(
mysqli_query($conn,"
SELECT * FROM layanan
WHERE id='$id'
")
);

if(isset($_POST['update'])){

$jasa=$_POST['nama_jasa'];
$harga=$_POST['harga'];

mysqli_query($conn,"
UPDATE layanan
SET
nama_jasa='$jasa',
harga='$harga'
WHERE id='$id'
");

header("Location:layanan.php");
}
?>

<h2>Edit Layanan</h2>

<form method="post">

Nama Jasa
<br><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html><?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:login.php");
exit;
}

$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width,initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
"
rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

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
background:
linear-gradient(
180deg,
#4facfe,
#00c6ff
);
padding:30px 20px;
box-shadow:4px 0 20px rgba(0,0,0,.1);
}

.logo{
color:white;
font-size:30px;
font-weight:bold;
margin-bottom:50px;
text-align:center;
}

.menu a{
display:block;
padding:16px 20px;
margin-bottom:15px;
text-decoration:none;
background:
rgba(255,255,255,.2);
color:white;
border-radius:15px;
font-weight:bold;
transition:.3s;
}

.menu a:hover{
background:white;
color:#2196f3;
}

/* content */

.main{
margin-left:280px;
padding:40px;
}

.top-card{
background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:35px;
border-radius:30px;
color:white;
box-shadow:
0 8px 25px rgba(0,0,0,.1);
}

.stat-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:
0 5px 15px rgba(0,0,0,.08);
}

</style>

</head>
<body>


<div class="sidebar">

<div class="logo">
SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="pesanan.php">
📦 Buat Pesanan
</a>

<a href="riwayat.php">
🧾 Riwayat Pesanan
</a>

<a href="pembayaran.php">
💳 Pembayaran
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>



<div class="main">

<div class="top-card">

<h2>
Halo,
<?php echo $username;?>
👋
</h2>

<p>
Selamat datang di Sistem Informasi
Pelayanan Jasa
</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="stat-box">
<h4>Total Pesanan</h4>
<h1>12</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Diproses</h4>
<h1>5</h1>
</div>

</div>


<div class="col-md-4">

<div class="stat-box">
<h4>Pesanan Selesai</h4>
<h1>7</h1>
</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="stat-box">

<h4>Aktivitas Terbaru</h4>
<hr>

<p>
✔ Pesanan servis laptop diproses
</p>

<p>
✔ Pembayaran terkonfirmasi
</p>

<p>
✔ Pesanan laundry selesai
</p>

</div>

</div>


<div class="col-md-4">

<div class="stat-box">

<h4>Quick Menu</h4>

<a
href="pesanan.php"
class="btn btn-primary w-100 mb-3">
Pesan Sekarang
</a>

<a
href="riwayat.php"
class="btn btn-success w-100">
Lihat Riwayat
</a>

</div>

</div>

</div>


</div>

</body>
</html>

<input
name="nama_jasa"
value="<?= $data['nama_jasa'];?>">

<br><br>

Harga
<br>

<input
name="harga"
value="<?= $data['harga'];?>">

<br><br>

<button name="update">
Update
</button>

</form>