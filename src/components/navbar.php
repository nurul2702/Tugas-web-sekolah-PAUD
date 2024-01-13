<?php
session_start();
$main_url = "http://localhost/Tugas-web-sekolah-PAUD/";
?>
<nav>
  <ul>
      <li><a href="<?= $main_url ?>index.php">Beranda</a></li>
      <li><a href="<?= $main_url ?>src/pages/galeri.php">Galeri</a></li>
      <li><a href="<?= $main_url ?>src/pages/fasilitas.php">fasilitas</a></li>
      <li><a href="<?= $main_url ?>src/pages/kontak.php">Kontak</a></li>
      <li><a href="<?= $main_url ?>src/pages/pendaftaran.php">Daftar Siswa</a></li>
  </ul>
  <h4><?= $_SESSION['user_name'] ?></h4>
  <div>
    <?php
    if (isset($_SESSION['user_name'])) {
      echo "<a class='login-btn' href='./src/php/logout.php'>Logout</a>";
    } else {
      echo "<a class='login-btn' href='./src/php/login.php'>Login</a>";
    }
    ?>
  </div>
</nav>