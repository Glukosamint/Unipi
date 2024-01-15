<!DOCTYPE html>
<html>
<head>
<title>DATA MAHASISWA</title>
</head>
<body>
<h2>DATA MAHASISWA</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA MAHASISWA</h3>
<form method="post" action="proses_tambah.php">
<table width="400" >
<tr>
<td>NPM</td>
<td><input type="text" name="npm"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>
<input type="radio" value=L name="jekel">Laki-laki
<input type="radio" value=P name="jekel">Perempuan
</td>
</tr>
<tr>
<td>Jurusan</td>
<td>
<Select name=jurusan>
<option value=SI Informasi>SI</option>
<option value=TI Informatika>TI</option>
<option value=SIA Informatika>SIA</option>
</select>
</td>
</tr>
<tr>
<td>Kelas</td>
<td><input type="text" name="kelas"></td>
</tr>
<tr>
<td>Alamat</td>
<td><textarea name="alamat"></textarea></td>
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
</body>
</html>