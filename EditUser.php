<?php

	include "koneksi.php";
	
	$id=$_GET['id'];
	$sql=mysql_query("SELECT * FROM user where Id_user='$id'");
	$baris=mysql_fetch_array($sql);

?>

<h2>Update Data Karyawan</h2>
<form name="kyw" method="post">
    Id Karyawan :<BR>
    <input type="text" name="id_user" value="<?php echo $baris['Id_user']; ?>"><br>
    Username :<BR>
    <input type="text" name="username" value="<?php echo $baris['Username']; ?>"><br>
    Password :<BR>
    <input type="text" name="password" value="<?php echo $baris['Password']; ?>"><br>
    Status:<BR>
    <input type="text" name="hak_akses" value="<?php echo $baris['hak_akses']; ?>"><br>
    
    <input type="submit" name="edit" value="EDIT DATA">
</form>

<?php

	if(isset($_REQUEST['edit'])){
		if(empty($_POST['id_user']) or empty($_POST['username']) or empty($_POST['password']) or empty($_POST['hak_akses'])){
			echo "<script>
				alert('DATA HARUS DI ISI!!!');
				document.location.href='index.php?page=edituser';
			</script>";	
		}else{
		$qEdit=mysql_query("UPDATE user set username='$_POST[username]',password='$_POST[password]',hak_akses='$_POST[hak_akses]' where Id_user='$id'");
		if($qEdit){
			echo "<script>
				alert('DATA BERHASIL Di EDIT!!!');
				document.location.href='index.php?page=edituser';
			</script>";
		}
		}
	}

?>

