<?php
include "koneksi.php"; //melakukan koneksi dengan database melalui file koneksi.php
$sql="delete from users where id_user= '$_GET[id]'";  //melakukan penghapusan data user berdasarkan id data

//menghubungkan fungsi syntak hapus user dengan database
mysqli_query($con, $sql); 
mysqli_close($con);

//melakukan perpindahan lokasi halaman ke halaman tampil_user.php
header('location:tampil_user.php');
?>
