<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_barang	    = $_POST['id_barang'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama_barang	= $_POST['nama_barang'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$harga	        = $_POST['harga'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$stok	        = $_POST['stok'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO barang VALUES('$id_barang', '$nama_barang', '$harga', '$stok')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<p><a href="?page=tampildatabarang">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<p><a href="?page=tampildatabarang">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
    }
?>