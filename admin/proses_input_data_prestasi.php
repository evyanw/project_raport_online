<?php
include '../koneksi.php';

$lomba=$_POST['nm_lomba'];
$tingkat=$_POST['tingkat'];
$juara=$_POST['juara'];
$ket=$_POST['keterangan'];
$siswa=$_POST['id_siswa'];


mysqli_query($koneksi, "INSERT INTO prestasi VALUES (NULL, '$lomba', '$tingkat', '$juara', '$ket', '$siswa')");

header("location:../admin/input/input_data_ekstrakulikuler.php");

?>