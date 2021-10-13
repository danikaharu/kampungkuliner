<?php
include 'app/controller/lapak/function.php';

if (isset($_POST["simpan_lapak"])) {
    $nama_lapak = $_POST['nama_lapak'];
    $deskripsi = $_POST['deskripsi_lapak'];
    $gambar = $_POST['gambar'];
    $no_telp = $_POST['no_telp'];
    $no_wa = $_POST['no_wa'];
}
