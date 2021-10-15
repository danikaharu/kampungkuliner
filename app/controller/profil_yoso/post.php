<?php 
include 'app/controller/profil_yoso/function.php';
include 'app/flash_message.php';


if(isset($_POST['simpan_yoso'])){
   $konten = $_POST['konten'];
   $query = $mysqli->query("INSERT INTO profil (konten,desa) VALUES('$konten','2')");
   flash("msg_simpan_yoso","Profil Desa Yosonegoro Telah Disimpan");
}


if(isset($_POST['edit_yoso'])){
    $id = $_POST['id'];
    $konten = $_POST['konten'];
    $query = $mysqli->query("UPDATE profil SET konten = '$konten' WHERE id_profil = '$id'");
    flash("msg_edit_yoso","Profil Desa Yosonegoro Berhasil Diubah");
}

?>