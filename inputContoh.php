<?php
require_once('koneksi.php');
$rand = rand(1231, 7879);
$kode = 'JASKFF' . $rand;
if ($_POST) {
    try {
        $sql = "INSERT INTO tb_reservasi (kode,nama,email,telp,tanggal,jam_mulai,jam_selesai) VALUES ('" . $kode . "','" . $_POST['nama'] . "','" . $_POST['email'] . "','" . $_POST['telp'] . "','" . $_POST['tgl'] . "','" . $_POST['jam_mulai'] . "','" . $_POST['jam_selesai'] . "')";
        if (!$koneksi->query($sql)) {
            echo $koneksi->error;
            die();
        } else {
            echo "<script>
            window.location.href='sukses.php?id=" . $koneksi->insert_id . "';
            </script>";
        }
    } catch (Exception $e) {
        echo $e;
        die();
    }
    echo "<script>
    window.location.href='index.php';
    </script>";
}
