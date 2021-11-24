<?php
include "koneksi.php"; //melakukan koneksi / menghubungkan file inputan_use.php dengan koneksi.php

// digunakan untuk mendapatkan data yang telah dikirim dari inputan form_user dengan method POST
$id_user = $_POST['id_user'];   
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = md5($_POST['password']);

//digunakan untuk memasukan data kedalam database akademik tabel users
$sql = "INSERT INTO users(id_user,password, nama_lengkap, email) VALUES ('$id_user', '$pass', '$nama','$email')"; 
$query=mysqli_query($con, $sql); mysqli_close($con);

//untuk berpindah ke halaman tampil_user.php
header('location:tampil_user.php');
?>
