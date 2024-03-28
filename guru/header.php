	
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../index.php?pesan=gagal");
	}
 
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

<header>
      <a href="#" class="logo">RAPORT ONLINE</a>
      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item"><a href="../guru/dashboard_guru.php">Kelas</a></li>
          <li class="menu-item">
            <a class="sub-btn" href="#">Data Nilai<i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="../input/input_data_siswa.php">Nilai Bahasa Indonesia</a></li>
              <li class="sub-item"><a href="../input/input_data_nilai.php">Nilai PAI</a></li>
              <li class="sub-item"><a href="../input/input_data_ekstrakulikuler.php">Nilai Matematika</a></li>
              <li class="sub-item"><a href="../input/input_data_prestasi.php">Nilai Bahasa Inggriss</a></li>
              <li class="sub-item"><a href="../input/input_data_presensi.php">Nilai Seni Budaya</a></li>
              <li class="sub-item"><a href="#">Input Keputusan</a></li>
              <li class="sub-item"><a href="../input/input_data_mapel.php">Input Data Mata Pelajaran</a></li>
            </ul>
          </li>
          <!-- <li class="menu-item">
            <a class="sub-btn" href="#">With Sub-dropdown <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="#">Sub Item 01</a></li>
              <li class="sub-item"><a href="#">Sub Item 02</a></li>
              <li class="sub-item"><a href="#">Sub Item 03</a></li>
              <li class="sub-item"><a href="#">Sub Item 04</a></li>
              <li class="sub-item more">
                <a class="more-btn" href="#">More Items <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="#">More Item 01</a></li>
                  <li class="more-item"><a href="#">More Item 02</a></li>
                </ul>
              </li>
            </ul>
          </li> -->
          <li class="menu-item"><a href="../data_siswa.php">Data Siswa</a></li>
          <li class="menu-item"><a href="#">About</a></li>
          <li class="menu-item"><a href="../logout.php">Log Out</a></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>

   
  </body>
</html>

<script type="text/javascript">
    //jquery for toggle dropdown menus
    $(document).ready(function(){
      //toggle sub-menus
      $(".sub-btn").click(function(){
        $(this).next(".sub-menu").slideToggle();
      });

      //toggle more-menus
      $(".more-btn").click(function(){
        $(this).next(".more-menu").slideToggle();
      });
    });

    //javascript for the responsive navigation menu
    var menu = document.querySelector(".menu");
    var menuBtn = document.querySelector(".menu-btn");
    var closeBtn = document.querySelector(".close-btn");

    menuBtn.addEventListener("click", () => {
      menu.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove("active");
    });

    //javascript for the navigation bar effects on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
    </script>

	<!-- <div class="container">

	<h1>ANDA LOGIN SEBAGAI GURU?</h1>

	&nbsp;
 
	<center>
            <div class="cardBox">
                <a class="card" href="X.php">
                    <div>
                        <div class="numbers">KELAS X</div>
                        <div class="cardName">Kelas X</div>
						<a class="btn" href="bindo.php"></a>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="XI.php">
                    <div>
                        <div class="numbers">KELAS XI</div>
                        <div class="cardName">Kelas XI</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="documents-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="XII.php">  
                    <div>
                        <a href="data_siswa.php"></a>
                        <div class="numbers">KELAS XII</div>
                        <div class="cardName">Kelas X</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
				</a>

                <a class="card" href="XIII.php">
                    <div>
                        <div class="numbers">KELAS XIII</div>
                        <div class="cardName">SMKN 2 DEPOK</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
				</a>
            </div>
</center>
</div> -->
</body>
</html>