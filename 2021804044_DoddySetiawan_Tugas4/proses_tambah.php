<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$jekel = $_POST['jekel'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
// menginput data ke database
mysqli_query($koneksi,"insert into
tb_mahasiswa(npm,nama,jns_kelamin,jurusan,kelas,alamat)
values('$npm','$nama','$jekel','$jurusan','$kelas','$alamat')");
// mengalihkan kembali ke halaman index.php
header("location:index.php");
?>