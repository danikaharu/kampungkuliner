<?php
error_reporting(0);
include 'app/env.php';
include 'base_url.php';


include 'views/layout_user/header.php';
include 'views/layout_user/navbar.php';

if($_GET['t_user'] == 'profil_desa_ombulo'){
    include 'views/pages/user/profil_desa_ombulo.php';
} else if($_GET['t_user'] == 'detail_dataset'){
    include 'views/pages/user/detail_dataset.php';
}
else{
    include 'views/pages/user/beranda.php';
}

include 'views/layout_user/footer.php';

?>