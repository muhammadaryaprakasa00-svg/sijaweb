<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="card shadow p-5 text-center">

        <!-- ICON -->
        <h1 style="font-size:70px;">✅</h1>

        <!-- TEXT -->
        <h3 class="text-success">Pembayaran Berhasil!</h3>
        <p class="text-muted">Terima kasih, pembayaran kamu sudah diterima.</p>

        <hr>

        <!-- DETAIL -->
        <p><strong>Status:</strong> 
            <span class="badge bg-success">Lunas</span>
        </p>

        <p><strong>Tanggal:</strong> <?= date('d-m-Y'); ?></p>

        <hr>

        <!-- BUTTON -->
        <a href="dashboard.php" class="btn btn-primary">
            ⬅ Kembali ke Dashboard
        </a>

        <a href="history_pembayaran.php" class="btn btn-success">
            📜 Lihat History
        </a>

    </div>

</div>

</body>
</html>