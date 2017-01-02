 <?php
       	if (isset($_POST['bcari'])) { 
		$tcari = $_POST['tcari'];
		$kategori=$_POST['kategori'];
		
		$query = mysql_query("SELECT * from user
				 where $kategori LIKE '%$tcari%'
				 ORDER BY id_user") or die(mysql_error());
		}else{
		$query = mysql_query("SELECT * from user
				 ORDER BY id_user") or die(mysql_error());
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
					echo '<td>'.$data['id_user'].'</td>';	//menampilkan data id dari database
					echo '<td>'.$data['username'].'</td>';	//menampilkan data username dari database
					echo '<td>'.$data['password'].'</td>';	//menampilkan data password dari database
					echo '<td>'.$data['hak_akses'].'</td>';	//menampilkan data hak akses dari database
                    echo '<td><a href="?page=edit&id='.$data['id_user'].'">Edit</a> / <a href="?page=hapus&id='.$data['id_user'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=id_user
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>