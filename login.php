<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
    $user = mysqli_fetch_assoc($data);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
    } else {
        $error = "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* background animasi ringan */
body {
    background: linear-gradient(-45deg, #141e30, #243b55, #141e30, #0f2027);
    background-size: 400% 400%;
    animation: bgMove 10s ease infinite;
}

/* animasi background */
@keyframes bgMove {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
}

/* card animasi masuk */
.card {
    animation: fadeSlide 0.8s ease-in-out;
    border-radius: 15px;
    transition: 0.3s;
}

/* efek masuk */
@keyframes fadeSlide {
    from {
        opacity: 0;
        transform: translateY(-40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* hover card */
.card:hover {
    transform: scale(1.02);
    box-shadow: 0 0 25px rgba(0,0,0,0.3);
}

/* input animasi */
.form-control {
    transition: 0.3s;
}

.form-control:focus {
    transform: scale(1.03);
    box-shadow: 0 0 10px rgba(13,110,253,0.5);
}

/* tombol animasi */
.btn-primary {
    transition: 0.3s;
}

.btn-primary:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(13,110,253,0.6);
}
</style>

</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width: 350px;">
    <h3 class="text-center mb-3">Login</h3>

    <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <form method="POST">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button name="login" class="btn btn-primary w-100">Login</button>
    </form>

    <p class="text-center mt-2">Belum punya akun? <a href="register.php">Daftar</a></p>
</div>

</body>
</html>