<?php 
	include 'koneksi.php';
	 
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$email	= $_POST['email'];
 
	mysqli_query($koneksi,"UPDATE users SET id='$id', nama='$nama', username='$username', password='$password', email='$email' WHERE id='$id'");
		 
	header("location:index.php");
		 
?>