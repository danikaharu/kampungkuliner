<?php

include 'app/env.php';
include 'base_url.php';


if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'beranda_admin') {
    $title = 'Beranda';
    $icon = 'fas fa-tv';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'profil_ombulo') {
    $title = 'Profil Desa Ombulo';
    $icon = 'fas fa-tv';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'lapak') {
    $title = 'Lapak';
    $icon = 'fas fa-store';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'tambah_lapak') {
    $title = 'Tambah Lapak';
    $icon = 'fas fa-store';
}


include 'views/layout/header.php';
include 'views/layout/sidebar.php';
include 'views/layout/navbar.php';


if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'beranda_admin') {
    include 'views/pages/admin/beranda.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'profil_ombulo') {
    include 'views/pages/admin/profil_ombulo.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'lapak') {
    include 'views/pages/admin/lapak.php';
} else if (isset($_GET['t_admin']) && $_GET['t_admin'] == 'tambah_lapak') {
    include 'views/pages/admin/tambah_lapak.php';
} else {
    include 'views/pages/admin/beranda.php';
}


include 'views/layout/footer.php';
