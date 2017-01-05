<?php
ini_set("display_errors",0);
$user = $_SESSION['username'];
	if  ($user ==""){
	echo "<script>
		window.location = '../index.php';
		</script>";
	}	
?>
<?php
	include "koneksi.php";
	
	$id=$_GET['id'];
	$sql=mysql_query("SELECT * FROM pelanggan where id_pelanggan='$id'");
	$baris=mysql_fetch_array($sql);

?>

<center>
  <h2>Edit Data Pelanggan</h2></center>
<form name="barang" method="post">
    <table cellpadding="3" cellspacing="0">
    <tr>
    	<td>Id Pelanggan</td>
    	<td>:</td>
		<td><input type="text" name="id_pelanggan" value="<?php echo $baris['id_pelanggan']; ?>" readonly></td>
	</tr>
    <tr>
    	<td>Nama Pelanggan</td>
    	<td>:</td>
    	<td><input type="text" name="nama_pelanggan" value="<?php echo $baris['nama_pelanggan']; ?>" required></td>
    </tr>
    <tr>
    	<td>Alamat Pelanggan</td>
    	<td>:</td>
    	<td><input type="text" name="alamat_pelanggan" value="<?php echo $baris['alamat_pelanggan']; ?>" required></td>
    </tr>
    <tr>
    	<td>No Telpon</td>
    	<td>:</td>
    	<td><input type="text" name="no_telp" value="<?php echo $baris['no_telp']; ?>" maxlength="13" required></td>
	</tr>
    </table>
    <input type="submit" name="edit" value="Edit Data">
</form>

<?php

	if(isset($_REQUEST['edit'])){
		if(empty($_POST['id_pelanggan']) or empty($_POST['nama_pelanggan']) or empty($_POST['alamat_pelanggan']) or empty($_POST['no_telp'])){
			echo "<script>
				alert('Data Harus Di Isi!!!');
				document.location.href='index.php?page=edit-pelanggan';
			</script>";	
		}else{
		$qEdit=mysql_query("UPDATE pelanggan set id_pelanggan='$_POST[id_pelanggan]',nama_pelanggan='$_POST[nama_pelanggan]',alamat_pelanggan='$_POST[alamat_pelanggan]',no_telp='$_POST[no_telp]' where id_pelanggan='$id'");
		if($qEdit){
			echo "<script>
				alert('Data Berhasil Di Edit!!!');
				document.location.href='index.php?page=pelanggan';
			</script>";
		}
		}
	}

?>

