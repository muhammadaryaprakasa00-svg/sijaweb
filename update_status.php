<?php
include 'config.php';

$id = $_POST['id'];
$status = $_POST['status'];

mysqli_query($conn, "UPDATE pesan SET status='$status' WHERE id='$id'");

header("Location: admin.php");