<?php
ini_set("display_errors",0);
$user = $_SESSION['username'];
	if  ($user ==""){
	echo "<script>
		window.location = '../index.php';
		</script>";
	}	
?>
<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_pelanggan	= $_POST['id_pelanggan'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama_pelanggan	= $_POST['nama_pelanggan'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$alamat_pelanggan	= $_POST['alamat_pelanggan'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$no_telp	    = $_POST['no_telp'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO pelanggan VALUES('$id_pelanggan', '$nama_pelanggan', '$alamat_pelanggan', '$no_telp')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<p><a href="index.php?page=pelanggan">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<p><a href="index.php?page=pelanggan">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>