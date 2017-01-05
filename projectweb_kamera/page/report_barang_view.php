<?php
ini_set("display_errors",0);
$user = $_SESSION['username'];
	if  ($user ==""){
	echo "<script>
		window.location = '../index.php';
		</script>";
	}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Data Barang</title>
<link rel='shortcut icon' href='iqbal-Images/icon.png' />
<style type="text/css">
#logo {
 width: 300px;
 height: 200px;	
 float:left;
}
#judul {
 margin-left : 205px;
 width:900px;
 height: 200px;	
 text-align:center;
}

</style>
</head>
<?php
ini_set("display_errors",0);
include("koneksi.php");
session_start();
?>
<body>
<center>JEMBER KAMERA <br></center>
<center>JL. LETJEN SUTOYO No. 26-28 (089) 95326331<br></center>
<center>FAX. (0356) 211000 JEMBER - JAWA TIMUR<br></center>
<center>Email : focusnusantara@yahoo.com Website : www.focusnusantara.com <br></center>


<hr size="4" color="#000000" />    
   <center> <h2>LAPORAN DATA BARANG</h2>
	<h3>
Berdasarkan: <?php echo $_POST['berdasar'] ?></h3>
	<?php
if($_POST['berdasar'] == "Semua Data"){
	//modus delete Semua Data
	$sql = "select * from barang";
}
	else if($_POST['berdasar'] == "Berdasarkan"){
	//modus berdasarkan kata
	$field = $_POST['field'];
	$kata = $_POST['kata'];
	$sql = "select * from barang where $field like '%$kata%'";
  	
	}
$query = mysql_query($sql);
?></center>
<center>
<table border="0" bgcolor="#000000" width="700">
      <tr bgcolor="#FFFFFF" height="40">
        <center><td width="50">No</td></center>
        <center><td width="50">Id Barang</td></center>
        <center><td width="50">Nama Barang</td></center>
        <center><td width="50">Harga</td></center>
        <center><td width="50">Stok</td></center>
      </tr>
      <?php
			   $i=1;
			  while ($data = mysql_fetch_array($query)){
			echo "<tr bgcolor=white>
              <td>$i</td>
              <td>$data[id_barang]</td>
              <td>$data[nama_barang]</td>
              <td>Rp.$data[harga]</td>
              <td>$data[stok]</td>
			  </td>
            </tr>";
			$i++;
			}
			?>
    </table></center>
    <center>
    	<input type="submit" name="button" id="button" value="Kembali" onclick="index.php?page=report_barang" />
		<input type="submit" name="button" id="button" value="Print" onclick="print()" />
	</center>
</body>
</html>

