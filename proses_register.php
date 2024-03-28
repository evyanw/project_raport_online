<?php
include 'koneksi.php';

$nama=$_POST['nm_user'];
$user=$_POST['username'];
$pass=$_POST['password'];
$lev=$_POST['level'];


mysqli_query($koneksi, "INSERT INTO user VALUES (NULL, '$nama', '$user', '$pass', '$lev')");

header("location:index.php");

?>