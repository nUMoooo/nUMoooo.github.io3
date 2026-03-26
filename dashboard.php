<?php
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard Z.C°RNER</title>
</head>
<body>
    <h2 align="center">Selamat Datang!</h2>
    
    <p align="center">Halo <b><?php echo $_SESSION['nama_pengguna']; ?></b>, kamu berhasil masuk ke sistem.</p>
    
    <div align="center">
        <a href="logout.php">
            <button>Logout</button>
        </a>
    </div>
</body>
</html>