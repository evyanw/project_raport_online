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

    <h1>DAFTAR DATA SISWA</h3>
        <div class="select_data_one">
            <tr>
                <td>
       
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <p>pilih jurusan:</p>
            <select name="jurusan_id" style="width:160px;">
                <?php
                include "../koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($koneksi, "SELECT jurusan_id FROM data_siswa GROUP BY jurusan_id ORDER BY jurusan_id");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['jurusan_id'];?>"><?php echo $data['jurusan_id'];?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Pilih">
        </form>
            </td>
<div>
    &nbsp;
    &nbsp;
    <div class="select_data_two">
            <td>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <p>pilih Nama Siswa:</p>
            <select name="id_siswa" style="width:160px;">
                <?php
                include "../koneksi.php";
                // query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($koneksi, "SELECT * FROM data_siswa GROUP BY id_siswa ORDER BY id_siswa");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['id_siswa'];?>"><?php echo $data['id_siswa'];?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Pilih">
        </form>
            </td>

            </tr>
        <div>
        &nbsp;

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

          </tr>    
        </thead>
            <tbody>
                <?php 

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
                  ?>
              </tbody>
            
        </table>
                </div>
        </div>
    </body>
</html>