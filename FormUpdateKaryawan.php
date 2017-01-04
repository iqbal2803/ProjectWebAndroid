<form method="post" action="prosesupdate.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update Karyawan </strong>
    </td>

  <tr>
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="Id Karyawan" disabled='disable' value="<?php echo $data['no']; ?>"> </td>
  </tr>

  <tr>
  	<td>Name</td>
    <td>:</td>
    <td> <input type="text" name="Nama" value="<?php echo $data['name']; ?>"> </td>
  </tr>

  <tr>
  	<td>Address</td>
    <td>:</td>
    <td> <textarea name="Password"><?php echo $data['Harga']; ?></textarea></td>
  </tr>

  <tr>
  	<td>Name</td>
    <td>:</td>
    <td> <input type="text" name="Status" value="<?php echo $data['name']; ?>"> </td>
  </tr>

<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>