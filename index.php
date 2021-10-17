<?php
error_reporting(0);
include 'app/env.php';
include 'base_url.php';


include 'views/layout_user/header.php';
include 'views/layout_user/navbar.php';

if(isset($_GET['t_user']) && $_GET['t_user'] == 'profil_desa_ombulo'){
    include 'views/pages/user/profil_desa_ombulo.php';
} else if(isset($_GET['t_user']) && $_GET['t_user'] == 'profil_desa_yoso'){
    include 'views/pages/user/profil_desa_yoso.php';
} else if(isset($_GET['t_user']) && $_GET['t_user'] == 'profil_kampung_kuliner'){
    include 'views/pages/user/profil_kampung.php';
} else if(isset($_GET['t_user']) && $_GET['t_user'] == 'daftar_lapak'){
    include 'views/pages/user/lapak.php';
}
else{
    include 'views/pages/user/beranda.php';
}

include 'views/layout_user/footer.php';
