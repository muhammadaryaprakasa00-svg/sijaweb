<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buat Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #0d1b2a, #1b263b, #415a77);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-form {
            width: 400px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.1);
            color: white;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        input, select, textarea {
            border-radius: 10px !important;
        }

        label {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="card-form">

    <h4 class="text-center mb-3">🛒 Buat Pesanan</h4>

    <form method="POST" action="proses_order.php">

        <label>Layanan</label>
        <select name="layanan" class="form-control mb-2" required>
            <option value="">-- Pilih Layanan --</option>
            <option>Laundry</option>
            <option>Steam Mobil & Motor</option>
            <option>Bersihin Halaman</option>
            <option>Supir Pribadi</option>
        </select>

        <label>Nama</label>
        <input type="text" name="nama" class="form-control mb-2" required>

        <label>Alamat</label>
        <textarea name="alamat" class="form-control mb-2" required></textarea>

        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control mb-3" required>

        <button class="btn btn-success w-100">Pesan Sekarang</button>

        <a href="dashboard.php" class="btn btn-light w-100 mt-2">⬅ Kembali</a>
    </form>

</div>

</body>
</html>