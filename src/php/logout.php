<?php
session_start(); // Pastikan session telah dimulai

// Hapus semua data session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
header("Location: ./login.php"); // Ganti 'login.php' dengan halaman login Anda
exit();
?>
