<?php
include '../koneksi.php';


$skt=$_POST['sakit'];
$izn=$_POST['izin'];
$alf=$_POST['alfa'];
$siswa=$_POST['id_siswa'];


mysqli_query($koneksi, "INSERT INTO presensi VALUES (NULL, $skt, $izn, $alf, '$siswa')");

header("location:../admin/input/input_data_prestasi.php");