<?php
include '../header.php';
?>

<html>
    <head>
        <title>RAPLINE | INPUT PRESTASI</title>
        <link rel="stylesheet" type="text/css" href="../css/input.css">
    </head>
    <div class="content">
        <div class="judul">
            <h2>INPUT DATA PRESTASI</h2>
        </div>
    <form method="POST" action="../proses_input_data_prestasi.php">
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
            <td><label>NAMA LOMBA </label></td>
            <td><input type="text" name="nm_lomba"></td>
        </tr>
        <tr>
            <td><label>TINGKAT </label></td>
            <td><input type="text" name="tingkat"></td>
        </tr>
        <tr>
            <td><label>JUARA </label></td>
            <td><input type="text" name="juara"></td>
        </tr>
        <tr>
            <td><label>KETERANGAN </label></td>
            <td><input type="text" name="keterangan"></td>
        </tr>     
            <td><input class="submit" type="submit" value="submit"></td>
        </tr>
    </table>
    </form>
    </div>
</html>