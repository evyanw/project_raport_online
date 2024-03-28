<?php
include 'header1.php';
?>

<html>
    <head>
        <title>DATA SISWA</title>
        <link rel="stylesheet" href="css/data.css">
        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </link>
    </head>
    <body>

    <div class="container">
    <h1>DAFTAR DATA SISWA</h3>

        <div class="search">
            <form action="cari.php" method="GET">
              <label>
                <input type="search" placeholder="Search here" name="cari" >
                <ion-icon name="search-outline"></ion-icon>
              </label>
            </form>
          </div>

       

        
        <table border="1" cellpadding="2">
        <thead>
          <tr>
              <th width="1%">NO</th>
              <th>NAMA SISWA</th>
              <th>NIS</th>
              <th>JURUSAN</th>
              <th>KELAS</th>
              <th>FASE</th>
              <th>TAHUN AJARAN</th>
              <th>HASIL BELAJAR</th>
              <th>LAINNYA</th>
          </tr>    
        </thead>
            <tbody>
                <?php 
                 include '../koneksi.php';
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
                      
                      <td>                        
                        <a href="data_nilai.php?id_siswa=<?php echo $d['id_siswa'] ?>"><button>HASIL BELAJAR</button></a> 
                      </td>
                      <td>                        
                        <a class="btn btn-warning btn-sm" href="edit_data_siswa.php?id_siswa=<?php echo $d['id_siswa'] ?>"><i class="fa fa-cog"></i></a>
                        <?php if($d['id_siswa'] != 1){ ?>
                          <a class="btn btn-danger btn-sm" href="hapus_data_siswa.php?id_siswa=<?php echo $d['id_siswa'] ?>"><i class="fa fa-trash"></i></a>
                        <?php } ?>
                      </td>
                    </tr>
                    <?php 
                  }
                // }
                  ?>
              </tbody>
            
        </table>
        </div>
    </body>
</html>