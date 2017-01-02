<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
</head>
<body>
    <h2>Data Karyawan</h2>
	
	<p><a href="index.php?page=user">Beranda</a> / <a href="index.php?page=tambah-user">Tambah Data</a></p>
	
	<h3>Data User</h3>
	<h3>Tambah Data Karyawan</h3>
	
	<form action="index.php?page=tambah-user-proses" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>ID USER</td>
				<td>:</td>
				<td><input type="text" name="id_user" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" size="30" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password" size="30" required></td>
			</tr>
			<tr>
				<td>Hak Akses</td>
				<td>:</td>
				<td>
					<?php
					include('koneksi.php');
					$query = mysql_query("SELECT * FROM user") or die(mysql_error());
					echo '<select name="hak_akses" required>';
					echo '<option value="">Pilih Hak Akses</option>';
					echo '<option value="Admin" >Admin</option>';
					echo '<option value="Karyawan" >Karyawan</option>';
					echo '</select>';
					?>
					
				</td>
			</tr>
			
			<tr>
				<td colspan="3"><hr>
				<input type="submit" name="tambah" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>