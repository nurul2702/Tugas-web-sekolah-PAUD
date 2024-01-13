<?php 
@include '../db/koneksi.php';

if (isset($_POST['submit'])) {
    //Ambil data dari formulir
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    //Proses penyimpanan data (contoh sederhana, Anda mungkin ingin menyimpannya ke database)
    $insert = "INSERT INTO data_pendaftaran (nama, usia, jeniskelamin, alamat, no_telp) VALUES ('$nama', '$usia', '$jeniskelamin', '$alamat', '$no_telp')";
    $result = mysqli_query($koneksi, $insert);

    if ($result) {
        //Pendaftaran Berhasil
        var_dump("Pendaftaran Berhasil");
        // header("Location: ../../index.php");
    } else {
        var_dump("Pendaftaran Gagal");
        //Pendaftaran Gagal
        // header("Location: pendaftaran.php");
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
    <header>
        <h1>PAUD MUTIARA</h1>
        <p>Pendidikan Anak Usia Dini</p>
    </header>
    <?php include('../components/navbar.php');?>
    
    <div class="container">
        <!--Form Pendaftaran-->
        <form method="post">
            <h2> Formulir Pendaftaran Siswa PAUD</h2>
            <label for="nama">Nama:</label>
            <input id="nama" type="text" name="nama" placeholder="Masukkan nama lengkap" required>

            <label for="usia">Usia:</label>
            <input id="usia" type="number" name="usia" placeholder="Masukkan usia anak" 
            required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <input id="jeniskelamin" type="text" name="jeniskelamin" placeholder="Masukkan jenis kelamin anak" required>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" required></textarea>

            <label for="no_telp">No Telp</label>
            <input id="no_telp" type="tel" name="no_telp" pattern="[0-9]{10,15}" placeholder="Masukkan nomor telepon"  required>

            <button type="submit" name="submit">Daftar</button>
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
