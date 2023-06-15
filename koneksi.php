<?php
$koneksi = new mysqli('localhost', 'admin111', 'admin111', 'reservasi');
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
