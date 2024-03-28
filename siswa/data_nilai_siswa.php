<?php
include 'header.php';
?>

<html>
    <head>
        <title>DATA SISWA</title>
        <link rel="stylesheet" href="css/datasiswa.css">
        </link>
    </head>
    <body>

    <div class="details">
    <div class="recentOrders">

    <h1>DAFTAR NILAI SISWA</h3>
       
&nbsp;
<center>
        <table>
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
                // if (isset($_GET['id_siswa'])) {
                //     $id_siswa=trim($_GET['id_siswa']);
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

                      <td>                        
                        <a href="data_nilai.php?id_siswa=<?php echo $d['id_siswa'] ?>"><button>HASIL BELAJAR</button></a> 
                        
                      </td>
                    </tr>
                    <?php 
                  }
                // }
                  ?>
              </tbody>
            
        </table>
                </center>
                </div>
        </div>
    </body>
</html>