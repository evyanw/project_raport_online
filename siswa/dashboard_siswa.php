<?php 
    session_start();
	if($_SESSION['level']==""){
		header("location:../index.php?pesan=gagal");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Raport | Halaman Siswa</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/siswa.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="book"></ion-icon>
                        </span>
                        <span class="title">HALAMAN SISWA</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard_siswa.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="data_siswa.php">
                        <span class="icon">
                            <ion-icon name="people"></ion-icon>
                        </span>
                        <span class="title">Data Siswa</span>
                    </a>
                </li>

                <li>
                    <a href="data_nilai_siswa.php">
                        <span class="icon">
                            <ion-icon name="documents"></ion-icon>
                        </span>
                        <span class="title">Data Nilai</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>


                <li>
                    <a href="../logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <form action="cari.php" method="GET">
                    <label>
                        <input type="search" placeholder="Search here" name="cari" >
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                    </form>
                </div>

                <div class="user">
                    <img src="../image/rapline.png" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <center>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">DATA SISWA</div>
                        <div class="cardName">SMKN 2 DEPOK</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">DATA NILAI</div>
                        <div class="cardName">SMKN 2 DEPOK</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="documents-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">  
                    <div>
                        <a href="data_siswa.php"></a>
                        <div class="numbers">DATA JURUSAN</div>
                        <div class="cardName">SMKN 2 DEPOK</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">INFORMASI</div>
                        <div class="cardName">SMKN 2 DEPOK</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </div>
                </div>
            </div>
</center>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>DATA SISWA</h2>
                        <a href="data_siswa.php" class="btn">View All</a>
                    </div>

               
                    <center>
                    <table>
        <thead>
          <tr>
              <th width="1%">NO</th>
              <th>NAMA SISWA</th>
              <th>NIS</th>
              <th>JURUSAN</th>
              <th>KELAS</th>
              <th>FASE</th>
              <th>TAHUN AJARAN</th>

          </tr>    
        </thead>

            <tbody>
                <?php 
                // if (isset($_GET['id_siswa'])) {
                //     $id_siswa=trim($_GET['id_siswa']);
                    include "../koneksi.php";
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM data_siswa");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['nm_siswa']; ?></td>
                      <td><?php echo $d['id_siswa']; ?></td>
                      <td><?php echo $d['jurusan_id']; ?></td>
                      <td><?php echo $d['kelas_id']; ?></td>
                      <td><?php echo $d['fase_id']; ?></td>
                      <td><?php echo $d['tahun_pelajaran']; ?></td>
                    </tr>
                    <?php 
                  }
                // }
                  ?>
              </tbody>
        </table>
        </center>

                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>DATA JURUSAN</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>SIJA <br> <span>Sistem Informasi Jaringan dan Aplikasi</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>TFLM <br> <span>Teknik Fibrikasi Logam dan Manufraktur</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>DPIB <br> <span>Desain Pemodelan dan Informasi Bangunan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>KGSP <br> <span>Konstruksi Gedung Sanitasi dan Perawatan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>KA <br> <span>Kimia Analisis</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>KI <br> <span>Kimia Industri</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>GP <br> <span>Geologi Pertambangan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>TEDK <br> <span>Teknik Elektronika Daya dan Komunikasi</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>TKR <br> <span>Teknik Kendaraan Ringan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>TOI <br> <span>Teknik Otomosi Industri</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>TBO <br> <span>Teknik Bodi Otomotif</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>TITL <br> <span>Teknik Instalasi Tenaga Listrik</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../JS/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>