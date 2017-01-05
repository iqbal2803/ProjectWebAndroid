<?php

	include "koneksi.php";
	
	$id=$_GET['id'];
	$sql=mysql_query("SELECT * FROM user where id_user='$id'");
	$baris=mysql_fetch_array($sql);

?>

<center><h2>Edit Data User</h2></center>
<form name="user" method="post">
    <table cellpadding="3" cellspacing="0">
    <tr>
    	<td>Id User</td>
    	<td>:</td>
		<td><input type="text" name="id_user" value="<?php echo $baris['id_user']; ?>" readonly></tr>
	</tr>
    <tr>
    	<td>Username</td>
    	<td>:</td>
    	<td><input type="text" name="username" value="<?php echo $baris['username']; ?>" required></td>
    </tr>
    <tr>
    	<td>Password</td>
    	<td>:</td>
    	<td><input type="text" name="password" value="<?php echo $baris['password']; ?>" required></td>	
    </tr>
    <tr>
    	<td>Hak Akses</td>
    	<td>:</td>
    	<td>
			<select name="hak_akses" required>';
		<option value="">Pilih Hak Akses</option>';
		<?php
			  $query_akses = mysql_query("select hak_akses from user group by hak_akses");
			  while($data = mysql_fetch_array($query_akses)){
				if($baris['hak_akses']==$data['hak_akses']){
					echo "<option value=$data[hak_akses] selected>$data[hak_akses]</option>";
					}else{
						echo"<option value=$data[hak_akses]>$data[hak_akses]</option>";
					}
			  }
		?>
			</select>

    	</td>
    </tr>
    </table>
    <br>
  <input type="submit" name="edit" value="Edit Data">
</form>

<?php

	if(isset($_REQUEST['edit'])){
		if(empty($_POST['id_user']) or empty($_POST['username']) or empty($_POST['password']) or empty($_POST['hak_akses'])){
			echo "<script>
				alert('Data Haus Di Isi!!!');
				document.location.href='index.php?page=edit-user';
			</script>";	
		}else{
		$qEdit=mysql_query("UPDATE user set username='$_POST[username]',password='$_POST[password]',hak_akses='$_POST[hak_akses]' where Id_user='$id'");
		if($qEdit){
			echo "<script>
				alert('Data Berhasil Di Edit!!!');
				document.location.href='index.php?page=user';
			</script>";
		}
		}
	}

?>

