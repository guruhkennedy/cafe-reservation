<?php 
// koneksi database
require_once("config.php");
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conf,"delete from tb_reservasi where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>