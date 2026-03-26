<?php

session_start();

$pesan_error = "";

if (isset($_POST['tombol_login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        
        $_SESSION['sudah_login'] = true;
        $_SESSION['nama_pengguna'] = $username;
        
        header("Location: dashboard.php");
        exit();
    } else {
        
        $pesan_error = "username atau passwordnya salah. Coba lagi!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
</head>
<body>
    <h2 align="center">Login</h2>

    <?php if ($pesan_error != "") { ?>
        <p align="center" style="color: red;"> <?php echo $pesan_error; ?> </p>
    <?php } ?>

    <form action="" method="POST">
        <table border="1" align="center" cellpadding="8" cellspacing="0">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Masukkan username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Masukkan password" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tombol_login" value="Login">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>