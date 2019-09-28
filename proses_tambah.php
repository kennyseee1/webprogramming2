<?php

include("koneksi.php");
	if(isset($_POST['submit'])){
	$id 		= $_POST['id'];
	$nama		= $_POST['nama'];
	$username	= $_POST['username'];			
	$password	= md5($_POST['password']);			
	$email		= $_POST['email'];
	$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'") or die(mysqli_error($koneksi));
	if(mysqli_num_rows($cek) == 0){
		$sql = mysqli_query($koneksi, "INSERT INTO users VALUES('' ,'$nama', '$username', '$password', '$email')") or die(mysqli_error($koneksi));
		if($sql){
			echo '<script>alert("Berhasil menambahkan data."); document.location="index.php";</script>';
		}else{
			echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	}else{
		echo '<div class="alert alert-warning">Gagal, Username sudah terdaftar.</div>';
	}
}	
?>