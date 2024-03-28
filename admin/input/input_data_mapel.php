<html>
    <head>
        <title>PERPUSTAKAAN | INPUT ANGGOTA</title>
<link rel="stylesheet" type="text/css" href="../css/datainput1.css">
    </head>
<div class="judul">
<h2>INPUT MATA PELAJARAN</h2>
</div>
<div class="content">
<form method="POST" action="../proses_input_data_mapel.php">
    <table>
        <tr>
            <td>Nama Mapel</td>
            <td><input type="text" name="nm_mapel"></td>
        </tr>
        <select name="id_ekskul">
                        <?php
                        $namaekstra=mysqli_query($koneksi, "SELECT id_ekstra FROM ekstra");
                        while ($eks = mysqli_fetch_array($namaekstra)) {
                        ?>
                        <option value='<?php echo $eks['id_ekstra'];?>'>
                        <?php echo $eks['id_ekstra'];?>
                        </option>
                        <?php
                        }
                        ?>
                </select>

                <select name="id_siswa">
                        <?php
                        // include "../koneksi.php";
                        
                        $query = mysqli_query($koneksi, "SELECT id_siswa FROM data_siswa ");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <option value=<?php $data['id_siswa'];?>><?php echo $data['id_siswa'];?></option>
                        <!-- <option value=></option> -->
                        <?php
                        }
                        ?>
                    </select>
        <!-- <tr>
            <td>Kategori mapel</td>
            <td>

        <tr> -->
            <td><input class="submit" type="submit" value="submit"></td>
        </tr>
</table>
</form>
</div>
</html>