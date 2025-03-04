<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/head.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
        <rel></rel>
    </link>
    <title>RAPORT ONLINE</title>
</head>
<body>
<header>
      <a href="#" class="logo">RAPORT ONLINE</a>
      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item"><a href="../dashboard.php">Home</a></li>
          <li class="menu-item">
            <a class="sub-btn" href="#">Input Data <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="../input/input_data_siswa.php">Input Data Siswa</a></li>
              <li class="sub-item"><a href="../input/input_data_nilai.php">Input Nilai Siswa</a></li>
              <li class="sub-item"><a href="../input/input_data_ekstrakulikuler.php">Input Ekstrakulikuler Siswa</a></li>
              <li class="sub-item"><a href="../input/input_data_prestasi.php">Input Prestasi Siswa</a></li>
              <li class="sub-item"><a href="../input/input_data_presensi.php">Input Presesnsi Siswa</a></li>
              <li class="sub-item"><a href="#">Input Keputusan</a></li>
            </ul>
          </li>
          <li class="menu-item"><a href="../data_siswa.php">Data Nilai</a></li>
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
      
</body>
</html>