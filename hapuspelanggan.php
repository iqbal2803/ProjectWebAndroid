<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT Id_pelanggan FROM pelanggan WHERE Id_pelanggan='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM pelanggan WHERE Id_pelanggan='$id'");
		if($del){
			echo 'Data berhasil di hapus! ';
			echo '<a href="datapelanggan.php">Kembali</a>';
		}else{
			
			echo 'Gagal menghapus data! ';		 
			echo '<a href="datapelanggan.php">Kembali</a>';
		}
	}
}else{
	echo '<script>window.history.back()</script>';
	
}
?>