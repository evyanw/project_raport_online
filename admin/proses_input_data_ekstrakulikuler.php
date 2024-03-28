<?php
include '../koneksi.php';



$pred=$_POST['predikat'];
$des=$_POST['deskripsi'];
$siswa=$_POST['id_siswa'];
$nm_ekstra=$_POST['nama_ekstra'];


mysqli_query($koneksi, "INSERT INTO ekstrakulikuler VALUES (NULL,'$pred', '$des', $siswa, '$nm_ekstra')");

header("location:data_siswa.php");