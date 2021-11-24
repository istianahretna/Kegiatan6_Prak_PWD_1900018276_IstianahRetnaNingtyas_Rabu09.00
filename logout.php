<?php
session_start();  //memulai fungsi session
session_destroy(); //menghapus session, sehingga dapat membuat fungsi logout / keluar dali halaman, dari adanya fungsi ini
echo "Anda telah sukses keluar sistem <b>LOGOUT</b>";  //menampilkan informasi terkait dengan keberhasilan logout dari halaman website 
?>
