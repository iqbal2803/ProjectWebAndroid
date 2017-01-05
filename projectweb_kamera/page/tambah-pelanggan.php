<?php
ini_set("display_errors",0);
$user = $_SESSION['username'];
	if  ($user ==""){
	echo "<script>
		window.location = '../index.php';
		</script>";
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
</head>
<body>
    <center><h2>Data Pelanggan</h2></center>
	
	<p><a href="index.php?page=pelanggan">Beranda</a> / <a href="index.php?page=tambah-pelanggan">Tambah Data</a></p>
	
	<h3>Tambah Data Pelanggan</h3>
	
	<form action="index.php?page=tambah-pelanggan-proses" method="post">
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
				<td><input type="text" name="no_telp" size="30" maxlength="13" required></td>
			</tr>
			
			<tr>
				<td colspan="3"><hr>
				<input type="submit" name="tambah" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>