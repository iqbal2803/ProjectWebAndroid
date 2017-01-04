<?php

	include "koneksi.php";
	
	$nim=$_GET['nim'];
	$sql=mysql_query("SELECT * FROM biodata where NIM='$nim'");
	$baris=mysql_fetch_array($sql);

?>

<h2>Update Data Karyawan</h2>
<form name="kyw" method="post">
    Id Karyawan :<BR>
    <input type="text" name="nm" value="<?php echo $baris['idkyw']; ?>"><br>
    Username :<BR>
    <input type="text" name="nm" value="<?php echo $baris['nmkyw']; ?>"><br>
    Password :<BR>
    <input type="text" name="nm" value="<?php echo $baris['psswdkyw']; ?>"><br>
    Status:<BR>
    <input type="text" name="nm" value="<?php echo $baris['statuskyw']; ?>"><br>
    
    <input type="submit" name="edit" value="EDIT DATA">
</form>

<?php

	if(isset($_REQUEST['edit'])){
		if(empty($_POST['nm']) or empty($_POST['alamat']) or empty($_POST['no'])){
			echo "<script>
				alert('DATA HARUS DI ISI!!!');
				document.location.href='edit-data.php';
			</script>";	
		}else{
		$qEdit=mysql_query("UPDATE biodata set nmMhs='$_POST[nm]',alamat='$_POST[alamat]',noTelp='$_POST[no]' where NIM='$nim'");
		if($qEdit){
			echo "<script>
				alert('DATA BERHASIL Di EDIT!!!');
				document.location.href='simpan-data.php';
			</script>";
		}
		}
	}

?>

