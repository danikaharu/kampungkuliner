<?php

include 'app/env.php';
include 'base_url.php';


if(isset($_GET['t_admin']) && $_GET['t_admin'] == 'beranda_admin'){
    $title = 'Beranda';
    $icon = 'fas fa-tv';
}else if(isset($_GET['t_admin']) && $_GET['t_admin'] == 'profil_ombulo'){
    $title = 'Profil Desa Ombulo';
    $icon = 'fas fa-tv';
}


include 'views/layout/header.php';
include 'views/layout/sidebar.php';
include 'views/layout/navbar.php';


if(isset($_GET['t_admin']) && $_GET['t_admin'] == 'beranda_admin'){
    include 'views/pages/admin/beranda.php';
}else if(isset($_GET['t_admin']) && $_GET['t_admin'] == 'profil_ombulo'){
    include 'views/pages/admin/profil_ombulo.php';
}else{
    include 'views/pages/admin/beranda.php';
}


include 'views/layout/footer.php';

?>