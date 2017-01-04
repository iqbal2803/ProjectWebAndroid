<form method="post" action="prosesupdate.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update Barang </strong>
    </td>

  <tr>
  	<td width="25%"> No </td>
    <td width="2%">:</td>
    <td width="70%"> <input type="text" name="Id Barang" disabled='disable' value="<?php echo $data['no']; ?>"> </td>
  </tr>

  <tr>
  	<td>Name</td>
    <td>:</td>
    <td> <input type="text" name="Nama Barang" value="<?php echo $data['name']; ?>"> </td>
  </tr>

  <tr>
  	<td>Address</td>
    <td>:</td>
    <td> <textarea name="Harga"><?php echo $data['Harga']; ?></textarea></td>
  </tr>

  <tr>
  	<td>Name</td>
    <td>:</td>
    <td> <input type="text" name="Stok" value="<?php echo $data['name']; ?>"> </td>
  </tr>

  <tr>
  	<td>Name</td>
    <td>:</td>
    <td> <input type="text" name="Gambar" value="<?php echo $data['name']; ?>"> </td>
  </tr>
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>