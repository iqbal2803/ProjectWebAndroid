<form method="POST" action="">
	<center><h2>Data Barang</h2></center>
	
	<p><a href="?page=barang">Beranda</a> / <a href="?page=tambah">Tambah Data</a></p>
	
	<h3>Data Barang</h3>
	<p>Pencarian Berdasarkan
      <select name="kategori">
        <option value="id_barang">ID</option>
        <option value="nama_barang">Nama Barang</option>
        <option value="harga">Harga</option>
        <option value="stok">Stok</option>
        <option value="gambar">Gambar</option>
      </select>
    <input name="tcari" type="text" id="txt_cari">
    <input name="bcari" type="submit" value="Cari">
	</p>
	<table cellpadding="5" cellspacing="0" border="1">
	  <tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>ID</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Gambar</th>
            <th>Opsi</th>
		</tr> 
<?php
       	if (isset($_POST['bcari'])) { 
		$tcari = $_POST['tcari'];
		$kategori=$_POST['kategori'];
		
		$query = mysql_query("SELECT * from barang
				 where $kategori LIKE '%$tcari%'
				 ORDER BY id_barang") or die(mysql_error());
		}else{
		$query = mysql_query("SELECT * from barang
				 ORDER BY id_barang") or die(mysql_error());
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
					echo '<td>'.$data['id_barang'].'</td>';	//menampilkan data id dari database
					echo '<td>'.$data['nama_barang'].'</td>';	//menampilkan data nama barang dari database
					echo '<td>'.$data['harga'].'</td>';	//menampilkan data harga dari database
					echo '<td>'.$data['stok'].'</td>';	//menampilkan data stok dari database
					echo '<td>'.$data['gambar'].'</td>';
                    echo '<td><a href="?page=edit&id='.$data['id_barang'].'">Edit</a> / <a href="?page=hapus&id='.$data['id_barang'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=id_barang
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>