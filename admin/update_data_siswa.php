<?php 
include '../koneksi.php';

$nis = $_POST['id_siswa'];
$nama = $_POST['nm_siswa'];
$kelas = $_POST['kelas_id'];
$fase = $_POST['fase_id'];
$thn = $_POST['tahun_pelajaran'];
$semester = $_POST['semester_id'];
$jurusan = $_POST['jurusan_id'];

mysqli_query($koneksi, "UPDATE data_siswa SET nm_siswa='$nama', kelas_id='$kelas', fase_id='$fase', tahun_pelajaran='$thn', semester_id='$semester', jurusan_id='$jurusan' WHERE id_siswa='$nis'");

header("location:data_siswa.php");
