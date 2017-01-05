	<br>
    <br>
    <br>
    <h1>LAPORAN DATA BARANG</h1>
    <br>
    <form method="post" action="page/report_barang_view.php">
  	<table>
  		<tr>
		  <td><input name="berdasar" type="radio" value="Semua Data" />
		    <strong>Semua Data</strong></td>
  		</tr>
  		<tr>
  			<td><input name="berdasar" type="radio" value="Berdasarkan" /><strong>Berdasarkan</strong></td>
  			<td><select name="field" id="field">
			<option>Pilih Field</option>
			  <option value="id_barang">Id Barang</option>
			  <option value="nama_barang">Nama Barang</option>
			  <option value="harga">Harga</option>
			  <option value="stok">Stok</option>
		 	 </select></td>
  			<td><input name="kata" type="text" id="kata" /></td>
  		</tr>
  		<tr>
  			<td><input type="submit" name="Submit" value="Tampilkan" /></td>
  		</tr>
  	</table>
  	<p>&nbsp;</p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
