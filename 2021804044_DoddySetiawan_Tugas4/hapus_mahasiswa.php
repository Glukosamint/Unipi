<?php
if(isset($_GET['id'])){
include('koneksi.php');
$npm=$_GET['id'];
$del=mysqli_query($koneksi,"DELETE FROM tb_mahasiswa WHERE
npm='$npm'");
if($del){
echo'Data mahasiswa berhasil dihapus! ';
echo'<a href="index.php">Kembali</a>';
}else{
echo'Gagal menghapus data! ';
echo'<a href="index.php">Kembali</a>';
}
}
?>