<!DOCTYPE html>
<html>
<head>
<title>Tambah data</title>
</head>
<body>
<h1>Tambah Data Barang</h1>
<br/>
<a href="index.php">Data Barang</a>
<br/><br/>
<form action="prosestambah.php" method="post" enctype="multipart/form-data">
<table width="400" >
<tr>
<td>ID BARANG</td>
<td><input type="text" name="idbarang"></td>
</tr>
<tr>
<td>NAMA BARANG</td>
<td><input type="text" name="namabarang" requied></td>
</tr>
<tr>
<td>KATEGORI</td>
<td>
<input type="radio" value=A name="kategori">Kaleng
<input type="radio" value=B name="kategori">Tutup
</td>
</tr>
<tr>
<<td>SATUAN</td>
<td><input type="text" name="satuan"></td>
</tr>
<tr>
<td>HARGA MODAL</td>
<td><input type="text" name="harga_modal"></td>
</tr>
<tr>
<td>HARGA JUAL</td>
<td><input type="text" name="harga_jual"></td>
</tr>
<tr>
<td>Photo</td>
<td><input type="file" name="file"></td>
</tr>
<tr>
<td></td>
<td>
    <br/><br/>
    <input name="save" type="submit" value="SIMPAN">
    <input name="BtnBatal" type="reset" value="BATAL" />
    </td>
    </tr>
    </table>
    </form>
    </body>
    </html>