<?php

	include "koneksi.php";
	
	$id=$_GET['id'];
	$sql=mysql_query("SELECT * FROM user where Id_user='$id'");
	$baris=mysql_fetch_array($sql);

?>

<h2>Update Data Barang</h2>
<form name="kyw" method="post">
    Id Barang :<BR>
    <input type="text" name="id_barang" value="<?php echo $baris['Id_barang']; ?>"><br>
    Nama Barang :<BR>
    <input type="text" name="nama_barang" value="<?php echo $baris['nama_barang']; ?>"><br>
    Harga :<BR>
    <input type="text" name="harga" value="<?php echo $baris['harga']; ?>"><br>
    Stok:<BR>
    <input type="text" name="stok" value="<?php echo $baris['stok']; ?>"><br>
    Gambar:<BR>
    <input type="text" name="gambar" value="<?php echo $baris['gambar']; ?>"><br>
    
    <input type="submit" name="edit" value="EDIT DATA">
</form>

<?php

	if(isset($_REQUEST['edit'])){
		if(empty($_POST['id_barang']) or empty($_POST['nama_barang']) or empty($_POST['harga']) or empty($_POST['stok']) or empty($_POST['gambar'])){
			echo "<script>
				alert('DATA HARUS DI ISI!!!');
				document.location.href='index.php?page=edituser';
			</script>";	
		}else{
		$qEdit=mysql_query("UPDATE barang set id_barang='$_POST[id_barang]',nama_barang='$_POST[nama_barang]',hak_akses='$_POST[hak_akses]' where Id_user='$id'");
		if($qEdit){
			echo "<script>
				alert('DATA BERHASIL Di EDIT!!!');
				document.location.href='index.php?page=edituser';
			</script>";
		}
		}
	}

?>

