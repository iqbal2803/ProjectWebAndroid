<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
</head>
<body>
    <h2>Data Barang</h2>
	
	<p><a href="?page=tampildatabarang">Data Barang</a>
	
	<h3>Tambah Barang</h3>
	
	<form action="?page=tmbbarang-proses" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Id Barang</td>
				<td>:</td>
				<td><input type="text" name="id_barang" required></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" size="30" required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" size="30" required></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" name="stok" size="30" required></td>
			</tr>
			
			<tr>
				<td colspan="3"><hr>
				<input type="submit" name="tambah" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>