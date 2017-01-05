<?php
ini_set("display_errors",0);
$user = $_SESSION['username'];
	if  ($user ==""){
	echo "<script>
		window.location = '../index.php';
		</script>";
	}	
?>
<form method="POST" action="">
	<center><h2>Data Pelanggan</h2></center>
	
	<p><a href="index.php?page=pelanggan">Beranda</a> / <a href="index.php?page=tambah-pelanggan">Tambah Data</a></p>
	
	<h3>Data Pelanggan</h3>
	<p>Pencarian Berdasarkan
      <select name="kategori">
        <option value="id_pelanggan">ID</option>
        <option value="nama_pelanggan">Nama Pelanggan</option>
        <option value="alamat_pelanggan">Alamat</option>
        <option value="no_telp">NO.Telp</option>
      </select>
    <input name="tcari" type="text" id="txt_cari">
    <input name="bcari" type="submit" value="Cari">
	</p>
	<div style="overflow-x: auto;">
	<table cellpadding="5" cellspacing="0" border="1">
	  <tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>ID</th>
			<th>Nama Pelanggan</th>
			<th>Alamat</th>
			<th>No.Telp</th>
            <th>Opsi</th>
		</tr>  
<?php
       	if (isset($_POST['bcari'])) { 
		$tcari = $_POST['tcari'];
		$kategori=$_POST['kategori'];
		
		$query = mysql_query("SELECT * from pelanggan
				 where $kategori LIKE '%$tcari%'
				 ORDER BY id_pelanggan") or die(mysql_error());
		}else{
		$query = mysql_query("SELECT * from pelanggan
				 ORDER BY id_pelanggan") or die(mysql_error());
        }
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data di database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['id_pelanggan'].'</td>';	//menampilkan data id dari database
					echo '<td>'.$data['nama_pelanggan'].'</td>';	//menampilkan data nama pelanggan dari database
					echo '<td>'.$data['alamat_pelanggan'].'</td>';	//menampilkan data alamat dari database
					echo '<td>'.$data['no_telp'].'</td>';	//menampilkan data no telp dari database
                    echo '<td><a href="?page=edit-pelanggan&id='.$data['id_pelanggan'].'">Edit</a> / <a href="?page=hapuspelanggan&id='.$data['id_pelanggan'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=id_pelanggan
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
	</div>