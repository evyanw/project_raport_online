<?php
include '../koneksi.php';

$capaian = $_POST['capaian'];
$mapel = $_POST['mapel_id'];
$siswa = $_POST['id_siswa'];
$nilai = $_POST['nilai'];

mysqli_query($koneksi, "INSERT INTO data_akademik VALUES (NULL, '$capaian', '$mapel', $siswa, '$nilai')");

header("location:data_siswa.php");

?>