<?php
session_start();
//pemeriksaan session
if (isset($_SESSION['login'])) { //jika sudah login
//menampilkan isi session
echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah login</h2>";
echo "<h2>Klik <a href='logout.php'>di sini untuk LOGOUT</a> </h2>";
} else {
//session belum ada artinya belum login
die ("Anda belum login! <h2>Anda tidak berhak masuk ke halaman
ini.</h2>Silahkan login <a href='login.php'>di sini</a>");
}
?>