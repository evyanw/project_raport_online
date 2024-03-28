<?php include 'header1.php'; ?>
<html>
    <head>
        <title>DATA SISWA</title>
        <link rel="stylesheet" href="css/data.css">
            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </link>
    </head>


    <div class="container">
    <h1>DAFTAR DATA SISWA</h1>

    <div class="search">
        <form action="cari.php" method="GET">
            <label>
                <input type="search" placeholder="Search here" name="cari" >
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </form>
    </div>
&nbsp;
        <center><h3>PENCARIAN DATA DAN NILAI SISWA</h3></center>
            <table border="1" cellpadding="2">
                <thead>
                    <tr>
                    <th width="1%">NO</th>
                    <th>NAMA SISWA</th>
                    <th>NIS</th>
                    <th>JURUSAN</th>
                    <th>KELAS</th>
                    <th>HASIL BELAJAR</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include_once '../koneksi.php'; //memanggil file koneksi ke database
                        $cari = htmlentities($_GET['cari']); //menangkap variabel input pada form prncarian
                        $query = mysqli_query($koneksi, "select * from data_siswa where nm_siswa LIKE '%$cari%'"); 
                        $hasil = mysqli_num_rows($query);
                        if ($hasil > 0) {
                    ?>
                    <?php
                        $no=1;
                        while($data = mysqli_fetch_assoc($query)){
                    ?>
                        <tr>
                            <td><?php echo $no++; ?> </td> 
                            <td><?php echo $data['nm_siswa']; ?> </td>
                            <td><?php echo $data['id_siswa']; ?> </td>
                            <td><?php echo $data['jurusan_id']; ?></td>
                            <td><?php echo $data['kelas_id']; ?></td>
                            <td>                        
                                <a href="data_nilai.php?id_siswa=<?php echo $data['id_siswa'] ?>"><button>HASIL BELAJAR</button></a> 
                            </td>
                    <?php
                }
                    }else{
    
                }
                ?>
                        </tr>
                    
                </tbody>
            </table>
    </div>
    </div>

