<?php
include '../header.php';
?>

<html>
    <head>
        <title>RAPLINE | INPUT ANGGOTA</title>
        <link rel="stylesheet" type="text/css" href="../css/input.css">
    </head>
    <div class="content">
        <div class="judul">
            <h2>INPUT DATA PRESENSI</h2>
        </div>
    <form method="POST" action="../proses_input_data_presensi.php">
    <table>
        <tr>
            <td><label>NAMA SISWA </label></td>
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
            <td><label>SAKIT</label></td>
            <td><input type="number" name="sakit"></td>
        </tr>
        <tr>
            <td><label>IZIN </label></td>
            <td><input type="number" name="izin"></td>
        </tr>
        <tr>
            <td><label>TANPA KETERANGAN </label></td>
            <td><input type="number" name="alfa"></td>
        </tr>      
            <td><input class="submit" type="submit" value="submit"></td>
        </tr>
    </table>
    </form>
    </div>
</html>