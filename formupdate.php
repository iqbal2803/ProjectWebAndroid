<?php
include 'connect.php';
$no = $_GET['no']; //get the no which will updated
$query = "SELECT * FROM tb_student WHERE no = $no"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>
<form method="post" action="prosesupdate.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update</strong>
    </td>

  <tr>
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="no" disabled='disable' value="<?php echo $data['no']; ?>"> </td>
  </tr>

  <tr>
  	<td>Name</td>
    <td>:</td>
    <td> <input type="text" name="name" value="<?php echo $data['name']; ?>"> </td>
  </tr>

  <tr>
  	<td>Address</td>
    <td>:</td>
    <td> <textarea name="address"><?php echo $data['address']; ?></textarea></td>
  </tr>
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>