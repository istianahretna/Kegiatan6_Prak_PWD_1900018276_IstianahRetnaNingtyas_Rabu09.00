<?php
//fungsi untuk menampilkan data yang telah di inputkan oleh user dan tersimpan di database
echo "<h2>User</h2>
<form method=POST action=form_user.php>
<input type=submit value='Tambah User'>
</form>
<table width='80%' border=1 cellspacing='0'>
<tr>
    <th>No</th>
    <th>Username</th>
    <th>NamaLengkap</th>
    <th>Email</th>
    <th>Aksi</th>
</tr>";
    include "koneksi.php"; //melakukan koneksi dengan database melalui syntak penghubung database di file koneksi.php
    $sql="SELECT * FROM users order by id_user";//menujuk dan menyeleksi data yang telah terinput dan tersimpan di database
    //menghubungkan suntak php dengan database untuk menampilkan data
    $tampil = mysqli_query($con,$sql); 
    if (mysqli_num_rows($tampil) > 0) {
    $no=1;
    while ($r = mysqli_fetch_array($tampil)){
    //menampilkan data dengan syntak php yang telah diambil di database dan tertampil di dalam tabel
    echo "<tr>
        <td>$no</td>
        <td>$r[id_user]</td>
        <td>$r[nama_lengkap]</td>
        <td>$r[email]</td>
        <td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
        </tr>";
    $no++;
    }
    echo "</table>";
    } else {
    echo "0 results";
    }
mysqli_close($con);
?>
