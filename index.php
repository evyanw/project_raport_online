<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI RAPORT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>APLIKASI RAPORT SMKN 2 DEPOK</h1>
 <center>
	<?php 
	 if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username atau password yang anda masukkan salah";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda berhasil logout";
        }else if($_GET['pesan'] == "belum login") {
            echo "Anda harus login untuk mengakses halaman";
        }
    }
	?>
 </center>
	<div class="kotak_login">
		<p class="tulisan_login">LOG IN HERE</p>
 
		<form action="proses-login.php" method="post">
			<label>Username</label>
			<input type="text" name="nama" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

			<label>Level</label>
            <select name="level" class="form_login">
                <option value="" >     -- PILIH --   </option>
                <option value="Administrator"> Administrator </option>
                <option value="Siswa"> Siswa </option>
                <option value="Guru"> Guru </option>
            </select>
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<p>Belum Punya Akun? &nbsp; <a class="link" href="register.php">REGISTER MANIEZ</a></p>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>