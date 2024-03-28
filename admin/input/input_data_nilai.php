<?php
include '../header.php';
?>

<html>
    <head>
        <title>RAPLINE | INPUT NILAI SISWA</title>
        <link rel="stylesheet" type="text/css" href="../css/input.css">
    </head>
    <div class="content">
        <div class="judul">
            <h2>INPUT DATA NILAI SISWA</h2>
        </div>
    <form method="POST" action="../proses_input_data_nilai.php">
    <table>
        <tr>
        <td><label>NAMA SISWA  </label></td>
        <td>
        <select name="id_siswa">
        <option value=""> -- PILIH --</option>
            <?php
                include "../../koneksi.php";                     
                $query = mysqli_query($koneksi, "SELECT*FROM data_siswa ");
                while ($data = mysqli_fetch_array($query)) {
            ?>
                <option value='<?php echo $data['id_siswa'];?>'><?php echo $data['id_siswa'];?></option>
            <?php
                }
            ?>
        </select>
        </td>
        </tr>

        <tr>
        <td><label>MATA PELAJARAN  </label></td>
        <td>
        <select name="mapel_id">
        <option value=""> -- PILIH --</option>
            <?php
                include "../../koneksi.php";                     
                $query = mysqli_query($koneksi, "SELECT*FROM mapel ");
                while ($data = mysqli_fetch_array($query)) {
            ?>
                <option value='<?php echo $data['id_mapel'];?>'><?php echo $data['id_mapel'];?></option>
            <?php
                }
            ?>
        </select>
        </td>
        </tr>
        <tr>
            <td><label>NILAI </label> </td>
            <td><input type="number" name="nilai"></td>
        </tr>
        <tr>
            <td><label>CAPAIAN </label> </td>
            <td><input type="text" name="capaian"></td>
        </tr>       
            <td><input class="submit" type="submit" value="submit"></td>
        </tr>
    </table>
    </form>
    </div>
</html>