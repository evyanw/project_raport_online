<?php
include '../header.php';
?>

<html>
    <head>
        <title>RAPLINE | INPUT EKSTRAKULIKULER</title>
        <link rel="stylesheet" type="text/css" href="../css/input.css">
    </head>
    <body>
    <div class="content">
        <div class="judul">
            <h2>INPUT DATA EKSTRAKULIKULER</h2>
        </div>
<form method="POST" action="../proses_input_data_ekstrakulikuler.php">
    <table>
        <tr>
            <td><label>NIS</label> </td>
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
            <td><label>EKSTRAKULIKULER </label> </td>
            <td>
            <select name="nama_ekstra">
            <option value=""> -- PILIH --</option>
                    <?php
                        include "../../koneksi.php"; 
                        $query = mysqli_query($koneksi, "SELECT*FROM ekstra ");
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <option value='<?php echo $data['id_ekstra'];?>'><?php echo $data['id_ekstra'];?></option>
                    <?php
                        }
                    ?>
            </select>
            <td>
        </tr>
        <tr>
            <td><label>PREDIKAT </label></td>
            <td><input type="text" name="predikat" ></td>
        </tr>
        <tr>
            <td><label>DESKRIPSI </label> </td>
            <td><input type="text" name="deskripsi" ></td>
        </tr>       
            <td><input class="submit" type="submit" value="submit"></td>
        </tr>
    </table>
</form>
    </body>
    </div>
</html>