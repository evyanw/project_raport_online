<html>
    <head>
        <title>DATA NILAI SISWA</title>
        <link rel="stylesheet" href="css/data_nilai.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="float-left">
			<a href="data_nilai_siswa.php" target="_blank" class="btn btn-danger"><i class="fa fa-arrow-circle-left" ></i> &nbsp KEMBALI</a>
			<br>
			<br>
	</div>
        <div class="container">

    <center><h1>LAPORAN HASIL BELAJAR</h1></center>
&nbsp;
    <?php
        include "../koneksi.php";
        if(isset($_GET['id_siswa'])){
        $id_siswa = $_GET['id_siswa'];
        }    
        global $id_siswa;   
        $data = mysqli_query($koneksi, "SELECT * FROM data_siswa where id_siswa='$id_siswa'");
        $d = mysqli_fetch_array($data);
    ?>

<table class="table_1">
    <tr>
        <td size="90">NAMA</td>
        <td>:<?php echo $d['nm_siswa'] ?></td>
    </tr>       
    <tr>
        <td size="90">NIS</td>
        <td>:<?php echo $d['id_siswa']?></td>
    </tr>
    <tr>
        <td size="90">KELAS</td>
        <td>:<?php echo $d['kelas_id']?></td>
    </tr>
    <tr>
        <td size="90">JURUSAN</td>
        <td>:<?php echo $d['jurusan_id']?></td>
    </tr>  
    <tr>
        <td size="90">FASE</td>
        <td>:<?php echo $d['fase_id']?></td>
    </tr>
    <tr>
        <td size="90">SEMESTER</td>
        <td>:<?php echo $d['semester_id']?></td>
    </tr>
    <tr>
        <td size="90">TAHUN AJARAN</td>
        <td>:<?php echo $d['tahun_pelajaran']?></td>
    </tr>   
</table>

 &nbsp; 
 &nbsp; 

    <h5>A. AKADEMIK</h5>

        <table border="1" cellpadding="2">
        <thead>          
          <tr>
              <th width="1%">NO</th>            
              <th>MATA PELAJARAN</th>
              <th>NILAI</th>
              <th>CAPAIAN</th>            
          </tr>            
        </thead>
            <tbody>

            <?php
                $no=1;
                $id_siswa = $_GET['id_siswa'];
                $nilai = mysqli_query($koneksi,"SELECT * FROM data_akademik WHERE id_siswa='$id_siswa'");
                while($d=mysqli_fetch_array($nilai)){
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['mapel_id']; ?></td>
                    <td><?php echo $d['nilai']; ?></td>
                    <td><?php echo $d['capaian']; ?></td>
                </tr>
            <?php
                  }
            ?>
              </tbody>          
        </table>
        &nbsp;

        <h5>B. EKSTRAKULIKULER</h5>
        <table border="1" cellpadding="2">
        <thead>          
          <tr>
              <th width="1%">NO</th>    
              <th>EKSTRAKULIKULER</th>
              <th>PREDIKAT</th>
              <th>DESKRIPSI</th>             
          </tr>            
        </thead>
            <tbody>

            <?php
                $no=1;
                $id_siswa = $_GET['id_siswa'];
                $ekskul = mysqli_query($koneksi,"SELECT * FROM ekstrakulikuler WHERE id_siswa='$id_siswa'");
                while($d=mysqli_fetch_array($ekskul)){
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_ekstra']; ?></td>
                    <td><?php echo $d['predikat']; ?></td>
                    <td><?php echo $d['deskripsi']; ?></td>
                </tr>
            <?php
                    }
            ?>
              </tbody>            
        </table>

        &nbsp;

        <h5>C. PRESTASI</h5>
        <table border="1" cellpadding="2">
        <thead>            
          <tr>
              <th width="1%">NO</th>              
              <th>NAMA LOMBA</th>
              <th>TINGKAT</th>
              <th>JUARA</th>
              <th>KETERANGAN</th>             
          </tr>             
        </thead>
            <tbody>

            <?php
                $no=1;
                $id_siswa = $_GET['id_siswa'];
                $ekskul = mysqli_query($koneksi,"SELECT * FROM prestasi WHERE id_siswa='$id_siswa'");
                while($d=mysqli_fetch_array($ekskul)){
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nm_lomba']; ?></td>
                    <td><?php echo $d['tingkat']; ?></td>
                    <td><?php echo $d['juara']; ?></td>
                    <td><?php echo $d['keterangan']; ?></td>
                </tr>
            <?php
                  }
            ?>
              </tbody> 
        </table>
        &nbsp;

        <?php
            include "../koneksi.php";
            if(isset($_GET['id_siswa'])){
            $id_siswa = $_GET['id_siswa'];
            }   
            $data = mysqli_query($koneksi, "SELECT * FROM presensi where id_siswa='$id_siswa'");
            $d = mysqli_fetch_array($data);
        ?>

<h5>E. PRESENSI</h5>
<table border="1" cellpadding="2">
    <tr>
        <td size="90">KETIDAKHADIRAN</td>      
    </tr>      
    <tr>
        <td size="90">SAKIT</td>
        <td>:&nbsp;<?php echo $d['sakit']?></td>
    </tr>
    <tr>
        <td size="90">IZIN</td>
        <td>:&nbsp;<?php echo $d['izin']?></td>
    </tr>
    <tr>
        <td size="90">TANPA KETERANGAN</td>
        <td>:&nbsp;<?php echo $d['alfa']?></td>
    </tr>
</table>
&nbsp;

<h5>F. KEPUTUSAN KENAIKAN KELAS</h5>
<table >
<thead>
    
  <tr>
      <!-- <th width="1%">NO</th>
      
      <th>NAMA LOMBA</th>
      <th>TINGKAT</th> -->
      <td>Berdasarkan hasil yang dicapai pada semester 1 dan 2, peserta didik ditetapkan : </td>
      <!-- <th>KETERANGAN</th> -->
      
  </tr>   
  
</thead>
    <tbody>

    <?php
// $no=1;
$id_siswa = $_GET['id_siswa'];
$ekskul = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
while($d=mysqli_fetch_array($ekskul)){

            ?>
            <tr>
              
              <td><b>Naik ke kelas 11 <?php echo $d['jurusan_id']; ?></b></td>

            </tr>
            <?php
          }
          ?>
      </tbody>
      
    
</table>

        </div>
    </body>
</html>
