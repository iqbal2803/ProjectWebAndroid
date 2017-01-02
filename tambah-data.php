<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
</head>
<body>
    <h2>Data Karyawan</h2>
	
	<p><a href="?page=home">Beranda</a>
	
	<h3>Tambah Data Karyawan</h3>
	
	<form action="?page=tambah-proses" method="post">
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
					$query = mysql_query("SELECT * FROM status") or die(mysql_error());
					echo '<select name="status" required>';
					echo '<option value="">Pilih Hak Akses</option>';
						$no = 1;	//membuat variabel $no untuk membuat nomor urut
						while($data = mysql_fetch_assoc($query)){
					echo '<option value="'.$data['id_hak_akses'].'">'.$data['hak_akses'].'</option>';
						$no++;
						}
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