<?php 
include '../koneksi.php';
$id = $_GET['id_siswa'];
$idd = $_GET['kelas_id'];

mysqli_query($koneksi, "DELETE FROM data_siswa WHERE id_siswa='$id'");
mysqli_query($koneksi, "DELETE FROM data_akademik WHERE id_siswa='$id'");
mysqli_query($koneksi, "DELETE FROM ekstrakulikuler WHERE id_siswa='$id'");
mysqli_query($koneksi, "DELETE FROM presensi WHERE id_siswa='$id'");
mysqli_query($koneksi, "DELETE FROM prestasi WHERE id_siswa='$id'");
echo $idd;

header("location:data_siswa.php?kelas_id=$idd");

?>


