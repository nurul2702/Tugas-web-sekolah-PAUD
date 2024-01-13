<!--Process login.php-->
<?php
//proses.php
if (isset($_POST['submit'])) {
    //Ambil data dari formulir
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $jenis_kelamin = $_POST['Jenis_kelamin'];xamp
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    //Proses penyimpanan data (contoh sederhana, Anda mungkin ingin menyimpannya ke database)
    //Simpan data ke file, sebagai contoh
    $file ='data_siswa.txt';
    $data ='$nama, $usia, Jenis_kelamin, $alamat, $no_telp,\n';
    file_put_content($file, $data, FILE_APPEND);

    //Tampilkan pesan sukses atau alihkan ke halaman sukses
    echo "Pendaftaran berhasil !";

    //Anda juga bisa mengalihkannke halaman sukses dengan header("Location: sukses.php");

} else {
    //Jika formulir tidak disubmit, alihkan ke halaman pendaftaran
    header("Location: index.html");
}
?>
