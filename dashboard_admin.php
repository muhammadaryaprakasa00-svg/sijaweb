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

/* statistik */
$user=mysqli_fetch_assoc(
mysqli_query($conn,"
SELECT COUNT(*) jml
FROM users
WHERE role='user'
")
);

$order=mysqli_fetch_assoc(
mysqli_query($conn,"
SELECT COUNT(*) jml
FROM pesanan
")
);

$pending=mysqli_fetch_assoc(
mysqli_query($conn,"
SELECT COUNT(*) jml
FROM pesanan
WHERE status='Pending'
")
);

$selesai=mysqli_fetch_assoc(
mysqli_query($conn,"
SELECT COUNT(*) jml
FROM pesanan
WHERE status='Selesai'
")
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard SIJAWEB</title>

<meta name="viewport"
content="width=device-width, initial-scale=1">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
" rel="stylesheet">

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
background:
linear-gradient(180deg,#667eea,#764ba2);
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
transition:.3s;
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

/* cards */
.card-box{
background:white;
padding:30px;
border-radius:25px;
box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.top-card{
background:
linear-gradient(135deg,#4facfe,#00f2fe);
padding:35px;
border-radius:30px;
color:white;
margin-bottom:20px;
}

</style>

</head>
<script>

let lastCount = 0;

setInterval(function(){

fetch('cek_notif.php')
.then(res => res.text())
.then(total => {

if(total > lastCount){

/* tampilkan notif */
alert("🔔 Ada pesanan baru bro!");

/* optional sound */
let audio = new Audio('notif.mp3');
audio.play();

}

lastCount = total;

});

},5000); // cek tiap 5 detik

</script>
<body>

<!-- SIDEBAR -->
<div class="sidebar">

<div class="logo">
ADMIN SIJAWEB
</div>

<div class="menu">

<a href="#">
🏠 Dashboard
</a>

<a href="data_pesanan.php">
📦 Kelola Pesanan
</a>

<a href="layanan.php">
🛠️ CRUD Layanan
</a>

<a href="konfirmasi_pembayaran.php">
💳 Konfirmasi Pembayaran
</a>

<a href="#">
👥 Data Pengguna
</a>

<a href="logout.php">
🚪 Logout
</a>

</div>

</div>

<!-- MAIN -->
<div class="main">

<div class="top-card">

<h2>
Halo Admin,
<?php echo $_SESSION['username'];?> 👋
</h2>

<p>
Kelola sistem SIJAWEB dengan mudah dan cepat
</p>

</div>


<div class="row">

<div class="col-md-3">
<div class="card-box">
<h5>Total User</h5>
<h2><?= $user['jml'];?></h2>
</div>
</div>

<div class="col-md-3">
<div class="card-box">
<h5>Total Pesanan</h5>
<h2><?= $order['jml'];?></h2>
</div>
</div>

<div class="col-md-3">
<div class="card-box">
<h5>Pending</h5>
<h2><?= $pending['jml'];?></h2>
</div>
</div>

<div class="col-md-3">
<div class="card-box">
<h5>Selesai</h5>
<h2><?= $selesai['jml'];?></h2>
</div>
</div>

</div>


<div class="row mt-4">

<div class="col-md-8">

<div class="card-box">

<h4>Aktivitas Sistem</h4>
<hr>

<p>✔ Banyak pesanan masuk hari ini</p>
<p>✔ Pembayaran sedang menunggu konfirmasi</p>
<p>✔ Sistem berjalan normal</p>

</div>

</div>


<div class="col-md-4">

<div class="card-box">

<h4>Quick Menu</h4>

<a href="data_pesanan.php"
class="btn btn-primary w-100 mb-3">
Kelola Pesanan
</a>

<a href="layanan.php"
class="btn btn-success w-100 mb-3">
Kelola Layanan
</a>

<a href="konfirmasi_pembayaran.php"
class="btn btn-warning w-100">
Pembayaran
</a>

</div>

</div>

</div>

</div>

</body>
</html>