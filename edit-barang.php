<?php
	include "koneksi.php";
	
	$id=$_GET['id'];
	$sql=mysql_query("SELECT * FROM barang where id_barang='$id'");
	$baris=mysql_fetch_array($sql);

?>

<center><h2>Edit Data Barang</h2></center>
<form name="barang" method="post">
    <table cellpadding="3" cellspacing="0">
    <tr>
    	<td>Id Barang</td>
    	<td>:</td>
		<td><input type="text" name="id_barang" value="<?php echo $baris['id_barang']; ?>" readonly></td>
	</tr>
    <tr>
    	<td>Nama Barang</td>
    	<td>:</td>
    	<td><input type="text" name="nama_barang" value="<?php echo $baris['nama_barang']; ?>" required></td>
    </tr>
    <tr>
    	<td>Harga</td>
    	<td>:</td>
    	<td><input type="text" name="harga" value="<?php echo $baris['harga']; ?>" required></td>
    </tr>
    <tr>
    	<td>Stok</td>
    	<td>:</td>
    	<td><input type="text" name="stok" value="<?php echo $baris['stok']; ?>" required></td>
	</tr>
    <tr>
    	<td>Gambar</td>
    	<td>:</td>
    	<td><input type="file" name="gambar" value="<?php echo $baris['gambar']; ?>"></td>
    </tr>
    </table>
    <input type="submit" name="edit" value="Edit Data">
</form>

<?php

	if(isset($_REQUEST['edit'])){
		if(empty($_POST['gambar'])){
			$gambar=$baris['gambar'];
		}else{
			$gambar=$_POST[gambar];
		}
		if(empty($_POST['id_barang']) or empty($_POST['nama_barang']) or empty($_POST['harga']) or empty($_POST['stok'])){
			echo "<script>
				alert('Data Harus Di Isi!!!');
				document.location.href='index.php?page=edit-barang';
			</script>";	
		}else{
		$qEdit=mysql_query("UPDATE barang set id_barang='$_POST[id_barang]',nama_barang='$_POST[nama_barang]',harga='$_POST[harga]',stok='$_POST[stok]',gambar='$gambar' where id_barang='$id'");
		if($qEdit){
			echo "<script>
				alert('Data Berhasil Di Edit!!!');
				document.location.href='index.php?page=barang';
			</script>";
		}
		}
	}

?>

