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