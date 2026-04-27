<?php
session_start();

// 🔥 ambil id dari URL
$id = $_GET['id'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #0d1b2a, #1b263b, #415a77);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-bayar {
            width: 420px;
            padding: 25px;
            border-radius: 15px;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .metode {
            border: 1px solid rgba(255,255,255,0.3);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .metode:hover {
            background: rgba(255,255,255,0.2);
        }
    </style>
</head>

<body>

<div class="card-bayar">

    <h4 class="text-center mb-3">💳 Pembayaran</h4>

    <form method="POST" action="proses_bayar.php">

        <!-- 🔥 HIDDEN ID PESAN -->
        <input type="hidden" name="id_pesan" value="<?php echo $id; ?>">

        <label>Nama</label>
        <input type="text" name="nama" class="form-control mb-2" required>

        <label>Total Bayar</label>
        <input type="number" name="total" class="form-control mb-3" placeholder="Masukkan jumlah" required>

        <label>Pilih Metode Pembayaran</label>

        <div class="metode">
            <input type="radio" name="metode" value="DANA" required> 
            DANA - 0812xxxxxxx
        </div>

        <div class="metode">
            <input type="radio" name="metode" value="GOPAY"> 
            GoPay - 0812xxxxxxx
        </div>

        <div class="metode">
            <input type="radio" name="metode" value="CASH"> 
            Cash (Bayar di tempat)
        </div>

        <button class="btn btn-success w-100 mt-3">Bayar Sekarang</button>

        <a href="dashboard.php" class="btn btn-light w-100 mt-2">⬅ Kembali</a>
    </form>

</div>

</body>
</html>
<form method="POST" action="proses_bayar.php">
    <input type="hidden" name="layanan" value="Laundry">
    <input type="hidden" name="total" value="50000">

    <button type="submit" class="btn btn-success">
        💳 Bayar Sekarang
    </button>
</form>