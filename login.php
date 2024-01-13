<?php
if (isset($_POST['register'])) {
    //Ambil data dari formulir
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //enkripsi password

    //proses penyimpanan data
    //simpan data ke file
    $file = 'data_siswa.txt';
    $data = "$username, $email, $password\n";
    file_put_contents($file, $data, FILE_APPEND);

    //Tampilkan pesan sukses atau alihkan ke halaman sukses
    echo "login berhasil, next isi data diri siswa !";
} else {
    //Jika formulir tidak disubmit, alihkan ke halaman pendaftaran
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran PAUD MUTIARA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>PAUD MUTIARA</h1>
        <p>Pendidikan Anak Usia Dini</p>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="galeri.html">Galeri</a></li>
            <li><a href="fasilitas.html">fasilitas</a></li>
            <li><a href="kontak.html">Kontak</a></li>
        </ul>
    </nav>
    
    <div class="container">
        <!--Form Login-->
        <form action="login.php" method="post">
            <h2>Login</h2>
            <Label for="email">Email:</Label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>

    </div>

    <main>
        
    </main>
    <footer>
        <p>&copy; 2023 Sekolah PAUD MUTIARA<br>
         Jam: <br>
            Tutup ⋅ Buka Senin-Sabtu pukul 08.00-selesai<br></p>
    </footer>
</body>
</html>
