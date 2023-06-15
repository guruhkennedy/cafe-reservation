<?php
require_once('koneksi.php');
if($_POST){
    try {
       $sql = "INSERT INTO tb_reservasi (nama,email,telp,tanggal) VALUES ('".$_POST['nama']."','".$_POST['email']."','".$_POST['telp']."','".$_POST['tgl']."')";
       if(!$koneksi->query($sql)){
          echo $koneksi->error;
          die();
        }
    } catch (Exception $e) {
      echo $e;
      die();
    }
    echo "<script>
         window.location.href='index.php';
         </script>";
}
?>