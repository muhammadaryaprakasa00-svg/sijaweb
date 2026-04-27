<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

$username = $_SESSION['username'];

// batasi hanya admin
if ($username != 'admin') {
    echo "Akses ditolak!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">ADMIN PANEL</span>
    <div>
        <a href="dashboard.php" class="btn btn-primary btn-sm">User</a>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container mt-4">

    <h4>Data Pesanan</h4>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Layanan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Detail</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM pesan ORDER BY id DESC");

        while ($row = mysqli_fetch_assoc($data)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['layanan']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['tanggal_pesan']; ?></td>
                <td><?= $row['isi']; ?></td>
                <td>
                    <form method="POST" action="update_status.php">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                            <option <?= $row['status']=='Pending'?'selected':''; ?>>Pending</option>
                            <option <?= $row['status']=='Diproses'?'selected':''; ?>>Diproses</option>
                            <option <?= $row['status']=='Selesai'?'selected':''; ?>>Selesai</option>
                        </select>
                    </form>
                </td>
                <td>
                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

</div>

</body>
</html>