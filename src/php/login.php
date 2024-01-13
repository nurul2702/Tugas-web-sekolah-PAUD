<?php
session_start(); // Pastikan session telah dimulai

@include '../db/koneksi.php';

if (isset($_POST['submit'])) {
    // Ambil data dari formulir
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Proses penyimpanan data (contoh sederhana, Anda mungkin ingin menyimpannya ke database)
    $select = "SELECT * FROM data_login WHERE email = '$email'";
    $result = mysqli_query($koneksi, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $hashedPassword = $row['password'];

        if ($password === $hashedPassword) {
            $_SESSION['user_name'] = $row['email'];
            // Simpan email ke dalam session
            // Login Berhasil
            header("Location: ../../index.php");
            exit();
        } else {
            // Login Gagal
            // header("Location: login.php");
            var_dump("Login Gagal");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran PAUD MUTIARA</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <div class="login-page">
        <div class="container">
            <!--Form Login-->
            <form method="post">
                <h2>Login</h2>
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" required>

            <label for="password">Password:</label>
            <input id="password" type="password" name="password" required>

            <button type="submit" name="submit">Login</button>
        </form>
        
    </div>
</div>
</body>
</html>
