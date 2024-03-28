

<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['nama'];
$password = $_POST['password'];
$level = $_POST['level'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'and level='$level'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="Administrator"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Administrator";
		// alihkan ke halaman dashboard admin
		header("location:admin/dashboard.php");
 
	// cek jika user login sebagai guru
	}else if($data['level']=="Guru"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Guru";
		// alihkan ke halaman dashboard guru
		header("location:guru/dashboard_guru.php");
 
	// cek jika user login sebagai siswa
	}else if($data['level']=="Siswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Siswa";
		// alihkan ke halaman dashboard siswa
		header("location:siswa/dashboard_siswa.php");
 
	}else{
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>