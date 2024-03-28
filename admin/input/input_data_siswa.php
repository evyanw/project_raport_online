<?php
include '../header.php';
?>

<html>
    <head>
        <title>RAPLINE| INPUT SISWA</title>
<link rel="stylesheet" type="text/css" href="../css/input.css">
    </head>
    <div class="content">
<div class="judul">
<h2>INPUT DATA SISWA</h2>
</div>

<form method="POST" action="../proses_input_data_siswa.php">
    <table>
        <tr>
            <td><label>NAMA SISWA</label></td>
            <td><input type="text" name="nm_siswa"></td>
        </tr>

        <tr>
            <td><label>NIS</label></td>
            <td><input type="text" name="id_siswa"></td>
        </tr>
        
        <tr>
        <td><label>KELAS</label></td>
        <td>
            <select name="kelas_id">
            <option value=""> -- PILIH --</option>

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

        </td>
        </tr>

        <tr>
            <td><label>FASE</label></td>
                <td>
                <select name="fase_id">
                    <option value="">     -- PILIH--   </option>
                    <option value="E"> E </option>
                    <option value="F"> F </option>
                    <option value="G"> G </option>
                </select>
            </td>
        </tr>

        <tr>
            <td><label>TAHUN AJARAN</label></td>
            <td>

            <select name="tahun_pelajaran">
                <option value="">-- PILIH --</option>
                <option value="2021 / 2022">2021 / 2022</option>
                <option value="2022 / 2023">2022 / 2023</option>
                <option value="2023 / 2024">2023 / 2024</option>
                <option value="2024 / 2025">2024 / 2025</option>
            </select>

            </td>
        </tr>

        <tr>
            <td><label>JURUSAN<label></td>
            <td>
            <select name="jurusan_id">
            <option value=""> -- PILIH --</option>

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
            </td>
        </tr>

        <tr>
            <td><label>SEMESETER</label></td>
            <td>
            <select name="semester_id">
            <option value="">     -- PILIH --   </option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select> 
        </td>
        </tr>

        <tr>
            <td><input class="submit" type="submit" value="submit"></td>
        </tr>
</table>
</form>
</div>
</html>