<?php
include '../koneksi.php';

$nis = $_POST['id_siswa'];
$nama = $_POST['nm_siswa'];
$kelas = $_POST['kelas_id'];
$fase = $_POST['fase_id'];
$thn = $_POST['tahun_pelajaran'];
$semester = $_POST['semester_id'];
$jurusan = $_POST['jurusan_id'];

mysqli_query($koneksi, "INSERT INTO data_siswa VALUES ($nis, '$nama', '$kelas', '$fase', '$thn', '$semester', '$jurusan' )");

header("location:../admin/input/input_data_presensi.php");

?>