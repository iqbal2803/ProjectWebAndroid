<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
</head>
<body>
    <h2>Data Pelanggan</h2>
	
	<p><a href="?page=tampildatapelanggan">Daftar Pelanggan</a>
	
	<h3>Tambah Data Pelanggan</h3>
	
	<form action="?page=tmbpelanggan-proses" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>ID Pelanggan</td>
				<td>:</td>
				<td><input type="text" name="id_pelanggan" required></td>
			</tr>
			<tr>
				<td>Nama Pelanggan</td>
				<td>:</td>
				<td><input type="text" name="nama_pelanggan" size="30" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat_pelanggan" size="30" required></td>
			</tr>
			<tr>
				<td>No. Telp</td>
				<td>:</td>
				<td><input type="text" name="no_telp" size="30" required></td>
			</tr>
			
			<tr>
				<td colspan="3"><hr>
				<input type="submit" name="tambah" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>