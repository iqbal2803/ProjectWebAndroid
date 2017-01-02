<?php
ini_set("display_errors",0);
include("page/koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysql_query("select * from user where username = '$username'");
$i=1;
while ($data = mysql_fetch_array($sql)){
$user = $data['username'];
$pass = $data['password'];
$hak_akses = $data['hak_akses'];
$i++;
}
if($username == ""){
echo "<script>
	  alert('Login Gagal');
	  window.location = 'index.php?login';
	  </script>
	  ";
}

if (($username == $user ) && ($password == $pass )){
session_start();
	$_SESSION['username']=$username;
	$_SESSION['hak_akses'] = $hak_akses;
	
echo "<script>
	  alert('Login sukses');
	  window.location = 'index.php?page=home';
	  </script>
	  ";
}else{
echo "<script>
	  alert('Login Gagal');
	  window.location = 'index.php?page=login';
	  </script>
	  ";
}
?>