<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI RAPORT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>APLIKASI RAPORT SMKN 2 DEPOK</h1>

	<div class="kotak_login">
		<p class="tulisan_login">REGISTER</p>
 
		<form action="proses_register.php" method="post">
			<label>Nama Anda</label>
			<input type="text" name="nm_user" class="form_login" placeholder="nama .." required="required">

			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

         <label>Level</label>
         <select name="level" class="form_login">
            <option value="" >     -- PILIH--   </option>
            <option value="Administrator"> Administrator </option>
            <option value="Siswa"> Siswa </option>
            <option value="Guru"> Guru </option>
        </select>

			<input type="submit" class="tombol_login" value="REGISTER">
 
			<br/>
			<br/>
			<center>
				<p>Sudah Punya Akun? &nbsp; <a class="link" href="index.php">LANGSUNG LOGIN MANIEZ</a></p>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>