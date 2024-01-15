<!DOCTYPE html>
<html>
<head>
<title>DATA BARANG</title>
</head>
<body>
<h2>DATA BARANG</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA BARANG</h3>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from databarang where
idbarang='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="proses_update.php">
<table>
<tr>
<td>ID BARANG</td>
<td>
<input type="text" name="idbarang" value="<?php echo
$d['idbarang']; ?>">
</td>
</tr>
<tr>
<td>NAMA BARANG</td>
<td><input type="text" name="namabarang" value="<?php echo
$d['namabarang']; ?>"></td>
</tr>
<tr>
<td>KATEGORI</td>
<td>
<input type="radio" name="kategori" value="A" <?php
if($d['kategori']=='A') echo 'checked'?>>Kaleng
<input type="radio" name="kategori" value="B" <?php
if($d['kategori']=='B') echo 'checked'?>>Tutup
</td>
</tr>
<tr>
<tr>
<td>SATUAN</td>
<td><input type="text" name="satuan" value="<?php echo
$d['satuan']; ?>"></td>
</tr>
<tr>
<td>HARGA MODAL</td>
<td><input type="text" name="harga_modal" value="<?php echo
$d['harga_modal']; ?>"></td>
</tr>
<tr>
<td>HARGA JUAL</td>
<td><input type="text" name="harga_jual" value="<?php echo
$d['harga_jual']; ?>"></td>
</tr>
<tr>
<td>Photo</td>
<td><input type="file" name="file"> <img src="file/<?php echo
$d['photo']; ?>" style="width: 100px;float: left;margin-bottom: 5px;">
<br/><i style="float: left;font-size: 11px;color:
red">Abaikan jika tidak merubah photo</i>
</td>
</tr>
<tr>
<td></td>
<td>
<br/><br/>
<input name="BtnSimpan" type="submit" value="SIMPAN">
<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>