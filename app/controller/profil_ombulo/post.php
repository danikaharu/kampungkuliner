<?php 
include 'app/controller/profil_ombulo/function.php';
include 'app/flash_message.php';

if(isset($_POST['simpan_ombulo'])){
   $konten = $_POST['konten'];
   $query = $mysqli->query("INSERT INTO profil (konten,desa) VALUES('$konten','1')");
   flash("msg_simpan_ombulo","Profil Desa Ombulo Telah Disimpan");
}

if(isset($_POST['edit_ombulo'])){
    $id = $_POST['id'];
    $konten = $_POST['konten'];
    $query = $mysqli->query("UPDATE profil SET konten = '$konten' WHERE id_profil = '$id'");
    flash("msg_edit_ombulo","Profil Desa Ombulo Berhasil Diubah");
}

?>