<?php
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengaturan</title>
</head>
<body class="p-4">

<h4>Pengaturan</h4>
<p>Username: <?php echo $username; ?></p>

</body>
</html>