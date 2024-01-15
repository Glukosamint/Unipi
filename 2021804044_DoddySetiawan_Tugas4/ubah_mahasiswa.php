<!DOCTYPE html>
<html>
<head>
<title>DATA MAHASISWA</title>
</head>
<body>
<h2>DATA MAHASISWA</h2>
<br/>
<a href="index_mahasiswa.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA MAHASISWA</h3>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tb_mahasiswa where npm='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="proses_update.php">
<table>
<tr>
<td>NPM</td>
<td>
<input type="text" name="npm" value="<?php echo

$d['npm']; ?>"> </td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value="<?php echo

$d['nama']; ?>"></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>
<input type="radio" name="jekel" value="L" <?php

if($d['jns_kelamin']=='L') echo 'checked'?>>Laki-laki
<input type="radio" name="jekel" value="P" <?php

if($d['jns_kelamin']=='P') echo 'checked'?>>Perempuan

</td>
</tr>
<tr>
<td>Jurusan</td>
<td>
<Select name=jurusan>
<option value="SI" <?php if($d['jurusan']=="SI") echo

'selected="selected"'; ?> >SI</option>

<option value="TI" <?php if($d['jurusan']=="TI") echo

'selected="selected"'; ?> >TI</option>

<option value="SIA" <?php if($d['jurusan']=="SIA") echo

'selected="selected"'; ?> >SIA</option>

</select>
</td>
</tr>
<tr>
<td>Kelas</td>
<td><input type="text" name="kelas" value="<?php echo

$d['kelas']; ?>"></td>
</tr>
<tr>
<td>Alamat</td>
<td><textarea name="alamat"></textarea> <?php echo

$d['alamat']; ?></td>
</tr>
<tr>
<td></td>
<td>
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