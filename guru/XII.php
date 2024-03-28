<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Raport | Halaman Guru</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>ANDA LOGIN SEBAGAI GURU?</h1>

	&nbsp;
 
	<center>
            <div class="cardBox">
                <a class="card" href="X.php">
                    <div>
                        <div class="numbers">KELAS X</div>
                        <!-- <div class="cardName">Kelas X</div> -->
						<!-- <a class="btn" href="bindo.php"></a> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="XI.php">
                    <div>
                        <div class="numbers">KELAS XI</div>
                        <!-- <div class="cardName">Kelas XI</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="documents-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="XII.php">  
                    <div>
                        <!-- <a href="data_siswa.php"></a> -->
                        <div class="numbers">KELAS XII</div>
                        <!-- <div class="cardName">Kelas X</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="XIII.php">
                    <div>
                        <div class="numbers">KELAS XIII</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>
            </div>
</center>
</body>
</html>