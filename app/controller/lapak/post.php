<?php
include 'app/controller/lapak/function.php';
include 'app/upload_gambar_lapak.php';
include 'app/flash_message.php';

if (isset($_POST["simpan_lapak"])) {
    $nama_lapak = $_POST['nama_lapak'];
    $deskripsi = $_POST['deskripsi_lapak'];
    $no_telp = $_POST['no_telp'];
    $no_wa = $_POST['no_wa'];
    $gambar = upload_gambar();

    if (!$gambar) {
        return false;
    }
    $query = $mysqli->query("INSERT INTO lapak VALUES (NULL,'$nama_lapak','$deskripsi','$gambar','$no_telp','$no_wa')");
    flash("msg_tambah_lapak", "Lapak Berhasil Ditambah");
}
