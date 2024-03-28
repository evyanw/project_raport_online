<?php include 'header1.php'; ?>
    <html>
        <head>
            <title>RAPLINE| EDIT DATA SISWA</title>
              <link rel="stylesheet" type="text/css" href="css/input.css">
        </head>
      <div class="content">
        <div class="judul">
          <h2>EDIT DATA SISWA</h2>
        </div>
          <div class="box-body">
            <form action="update_data_siswa.php" method="post">
              <?php 
                include "../koneksi.php";
                $id_siswa = $_GET['id_siswa'];
                $siswa = mysqli_query($koneksi,"SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'");
                while($s=mysqli_fetch_array($siswa)){
              ?>
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" name="nm_siswa" required="required" placeholder="Masukkan Nama Siswa .." value="<?php echo $s['nm_siswa'] ?>">
                </div>
                <div class="form-group">
                  <label>NIS Siswa</label>
                  <input type="text" class="form-control" name="id_siswa" required="required" placeholder="Masukkan NIS Siswa.." value="<?php echo $s['id_siswa'] ?>">
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                    <select name="kelas_id">
                      <?php
                          include "../../koneksi.php";                      
                          $query = mysqli_query($koneksi, "SELECT*FROM kelas ");
                          while ($data = mysqli_fetch_array($query)) {
                      ?>
                        <option value='<?php echo $data['id_kelas'];?>'><?php echo $data['id_kelas'];?></option>
                      <?php
                        }
                      ?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Fase</label>
                    <select name="fase_id">
                      <?php
                          include "../../koneksi.php";                      
                          $query = mysqli_query($koneksi, "SELECT*FROM fase ");
                          while ($data = mysqli_fetch_array($query)) {
                      ?>
                          <option <?php if($data['id_fase']){echo "selected='selected'";} ?> value="E">E</option>
                          <option <?php if($data['id_fase']) {echo "selected='selected'";} ?> value="F">F</option>
                          <option <?php if($data['id_fase']) {echo "selected='selected'";} ?> value="G">G</option>
                      <?php
                        }
                      ?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Tahun Ajaran</label>
                    <select name="tahun_pelajaran">
                      <?php
                        include "../../koneksi.php";                        
                        $query = mysqli_query($koneksi, "SELECT*FROM tahun ");
                        while ($data = mysqli_fetch_array($query)) {
                      ?>
                        <option value='<?php echo $data['id_tahun'];?>'><?php echo $data['id_tahun'];?></option>
                      <?php
                        }
                      ?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                    <select name="jurusan_id">
                      <?php
                        include "../../koneksi.php";                       
                        $query = mysqli_query($koneksi, "SELECT*FROM jurusan ");
                        while ($data = mysqli_fetch_array($query)) {
                      ?>
                        <option value='<?php echo $data['id_jurusan'];?>'><?php echo $data['id_jurusan'];?></option>
                      <?php
                        }
                      ?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Semester</label>
                    <select name="semester_id">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select> 
                </div>

                <div class="form-group">
                  <input class="submit" type="submit" class="btn btn-sm btn-primary" value="Simpan">
                </div>
                  <?php 
                    }
                  ?>
            </form>
          </div>
      </div>
</html>
