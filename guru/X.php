<?php
    include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Raport | Halaman Guru</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/guru.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>

    <div class="container">
	<h1>ANDA LOGIN SEBAGAI GURU KELAS X?</h1>

	&nbsp;
 
	<center>
            <div class="cardBox">
                <a class="card" href="data_siswa.php">
                    <div>
                        <div class="numbers">BAHASA INDONESIA</div>
                        <!-- <div class="cardName">Kelas X</div> -->
						<!-- <a class="btn" href="bindo.php"></a> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="binggris.php">
                    <div>
                        <div class="numbers">BAHASA INGGRIS</div>
                        <!-- <div class="cardName">Kelas XI</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="documents-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="pai.php">  
                    <div>
                        <!-- <a href="data_siswa.php"></a> -->
                        <div class="numbers">PENDIDIKAN AGAMA ISLAM</div>
                        <!-- <div class="cardName">Kelas X</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="pakatolik.php">
                    <div>
                        <div class="numbers">PENDIDIKAN AGAMA KATOLIK</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="pakristen.php">
                    <div>
                        <div class="numbers">PENDIDIKAN AGAMA KRISTEN</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="ipas.php">
                    <div>
                        <div class="numbers">IPAS</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="inf.php">
                    <div>
                        <div class="numbers">INFORMATIKA</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="pjok.php">
                    <div>
                        <div class="numbers">PJOK</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="mtk.php">
                    <div>
                        <div class="numbers">MATEMATIKA</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="sejarah.php">
                    <div>
                        <div class="numbers">SEJARAH</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="senbud.php">
                    <div>
                        <div class="numbers">SENI BUDAYA</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="jurusan.php">
                    <div>
                        <div class="numbers">JURUSAN</div>
                        <!-- <div class="cardName">SMKN 2 DEPOK</div> -->
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>
            </div>
</center>
</div>
</body>
</html>