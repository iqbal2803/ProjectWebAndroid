
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr valign="top">
    <td width="55%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?php
	  include("admin/koneksi.php");
    $query = mysql_query ("select * from barang");
    while ($rs = mysql_fetch_array ($query)) {
          
    ?>
      <tr>&nbsp;&nbsp;
       <td width="106"></td> <td width="287" align="center" valign="top"> <img src="<?php echo 'assets/img/produk/' . $rs['gambar']; ?>" width="287" height="175"></td>&nbsp;
       <td width="603"><font > <p>&nbsp;&nbsp;<?php echo $rs['nama_barang']; ?></p></font>
        	<font>  <p>&nbsp; Harga : Rp. <?php echo number_format($rs['harga']); ?></p></font></td>
      
        
          
      <?php
    }
    ?>
				     
</table>