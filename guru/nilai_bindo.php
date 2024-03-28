<?php
include 'header.php';
?>

<html>
    <head>
        <title>RAPLINE | INPUT NILAI SISWA</title>
<link rel="stylesheet" type="text/css" href="../admin/css/input.css">
    </head>
    <div class="content">
<div class="judul">
<h2>INPUT DATA NILAI SISWA</h2>
</div>

<form method="POST" action="../admin/proses_input_data_nilai.php">
    <table>
        <tr>
        <td><label>NIS</label></td>
        <td>
        <select name="id_siswa">
                        <?php
                        include "../koneksi.php";
                        
                        $id_siswa = $_GET['id_siswa'];
                        $query = mysqli_query($koneksi, "SELECT*FROM data_siswa WHERE id_siswa='$id_siswa'");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <option value='<?php echo $data['id_siswa'];?>'><?php echo $data['id_siswa'];?></option>
                        <option value=></option>
                        <?php
                        }
                        ?>
            </select>
            <!-- <input type="text" name="id_siswa"> -->
        </td>
        </tr>

        <tr>
            <td><label>MATA PELAJARAN  </label></td>
            <td>
            <select name="mapel_id">
            <option value="BAHASA INDONESIA">BAHASA INDONESIA</option>

        </select>
        <!-- <input type="text" name="mapel_id"> -->
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