 <?php
       	if (isset($_POST['bcari'])) { 
		$tcari = $_POST['tcari'];
		$kategori=$_POST['kategori'];
		
		$query = mysql_query("SELECT * from barang
				 where $kategori LIKE '%$tcari%'
				 ORDER BY mhs_id") or die(mysql_error());
		}else{
		$query = mysql_query("SELECT * from barang
				 ORDER BY mhs_id") or die(mysql_error());
        }
		