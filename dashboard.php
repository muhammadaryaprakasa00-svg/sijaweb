<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard SIJA WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background:#f4f6f9; }
        .sidebar {
            height:100vh; width:230px; position:fixed;
            background:#0d1b2a; color:white; padding:20px;
        }
        .sidebar a {
            color:#ccc; display:block; padding:10px;
            text-decoration:none; border-radius:8px;
        }
        .sidebar a:hover {
            background:#1b263b; color:white;
        }
        .content { margin-left:250px; padding:20px; }
        .card-box { border-radius:15px; }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4>Sija<span style="color:#00b4d8;">Web</span></h4>
    <hr>

    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="pesanan.php">📦 Pesanan Saya</a>
    <a href="pembayaran.php">💳 Pembayaran</a>
    <a href="promo.php">🎁 Promo</a>
    <a href="pengaturan.php">⚙️ Pengaturan</a>

    <hr>
    <a href="logout.php">🚪 Keluar</a>
</div>

<!-- CONTENT -->
<div class="content">

    <!-- TOP -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Halo, <?php echo $username; ?> 👋</h4>

        <?php if (strtolower($username) == 'admin') { ?>
            <a href="admin.php" class="btn btn-warning btn-sm">Admin Panel</a>
        <?php } ?>
    </div>

    <!-- CARD -->
    <div class="row mb-4">

        <div class="col-md-3">
            <div class="card p-3 shadow card-box">
                <h6>Total Pesanan</h6>
                <h3>
                <?php
                $q = mysqli_query($conn,"SELECT COUNT(*) as jml FROM pesan WHERE pengirim='$username'");
                echo mysqli_fetch_assoc($q)['jml'];
                ?>
                </h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow card-box">
                <h6>Saldo</h6>
                <h3>Rp 250.000</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow card-box">
                <h6>Poin</h6>
                <h3>1.450</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow card-box">
                <h6>Status</h6>
                <h5>Layanan Diproses</h5>
            </div>
        </div>

    </div>

    <!-- PESANAN -->
    <div class="card shadow p-3">
        <div class="d-flex justify-content-between">
            <h5>Pesanan Terbaru</h5>

            <a href="detail_order.php" class="btn btn-success btn-sm">
                ➕ Buat Pesanan
            </a>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Layanan</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
            <?php
            $data = mysqli_query($conn, "SELECT * FROM pesan WHERE pengirim='$username' ORDER BY id DESC");

            while ($row = mysqli_fetch_assoc($data)) {

                $warna = 'secondary';
                if ($row['status'] == 'Pending') $warna = 'warning';
                if ($row['status'] == 'Diproses') $warna = 'primary';
                if ($row['status'] == 'Selesai') $warna = 'success';

                echo "
                <tr>
                    <td>{$row['layanan']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['tanggal_pesan']}</td>
                    <td><span class='badge bg-$warna'>{$row['status']}</span></td>
                </tr>
                ";
            }
            ?>
            </tbody>
        </table>

        <!-- 🔥 TOMBOL HISTORY PEMBAYARAN -->
        <div class="mt-3">
            <a href="history_pembayaran.php" class="btn btn-primary">
                📜 History Pembayaran
            </a>
        </div>

    </div>

</div>

</body>
</html>