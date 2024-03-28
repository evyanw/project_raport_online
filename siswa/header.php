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
                        <input type="search" placeholder="Search here"  name="cari" >
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                    </form>
                </div>

                <div class="user">
                    <img src="../image/rapline.png" alt="">
                </div>
            </div>

    <!-- =========== Scripts =========  -->
    <script src="../JS/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>