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

if (isset($_POST["edit_lapak"])) {
    $nama_lapak = $_POST['nama_lapak'];
    $deskripsi = $_POST['deskripsi_lapak'];
    $no_telp = $_POST['no_telp'];
    $no_wa = $_POST['no_wa'];
    $gambar_sblm = $_POST['gambar_sebelumnya'];
    $id_lapak = $_POST['id_lapak'];


    if ($_FILES['gambar']['error'] === 4) {
        $gambar_baru = $gambar_sblm;
    } else {
        $gambar_baru = upload_gambar();
        unlink("public/assets/image/$gambar_sblm");
    }

    $query = $mysqli->query("UPDATE lapak SET nama ='$nama_lapak', deskripsi ='$deskripsi', gambar = '$gambar_baru', no_telp = '$no_telp', no_wa ='$no_wa' WHERE id_lapak= '$id_lapak'");
    flash("msg_edit_lapak", "Lapak Berhasil Diedit");
}

if (isset($_POST["hapus_lapak"])) {
    $id_lapak = $_POST['id_lapak'];
    $gambar = $_POST['gambar'];

    $query = $mysqli->query("DELETE FROM lapak WHERE id_lapak= '$id_lapak'");
    flash("msg_hapus_lapak", "Lapak Berhasil Dihapus");
    unlink("public/assets/image/$gambar");
}
