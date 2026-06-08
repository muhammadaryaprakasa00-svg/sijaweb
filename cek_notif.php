<?php
include "../config.php";

/* hitung pesanan pending */
$q=mysqli_fetch_assoc(
mysqli_query($conn,"
SELECT COUNT(*) as total
FROM pesanan
WHERE status='Pending'
")
);

echo $q['total'];
?>