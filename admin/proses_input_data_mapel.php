<?php
include '../koneksi.php';

$nama=$_POST['nm_mapel'];

mysqli_query($koneksi, "INSERT INTO mapel VALUES (NULL, '$nama')");

header("location:../admin/input/input_data_mapel.php");

?>