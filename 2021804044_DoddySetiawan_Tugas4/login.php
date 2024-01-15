<?php
include 'koneksi.php';
session_start();
if (isset ($_POST['Login'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];
//periksa login
if ($user == "admin" && $pass = "admin") {
//menciptakan session
$_SESSION['login'] = $user;
echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='menu.php'>di sini </a> untuk menuju ke halaman utama dengan pemeriksaan session";
}
else{
echo "<h1>Login Gagal</h1>";
}
} else {
?>
<html>
<head>
<title>Login here...</title>
</head>
<body>
<form action="" method="post">
<h1>Login Here...</h1>
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="Login" value="Log In">
</form>
</body>
</html>
<?php
}
?>