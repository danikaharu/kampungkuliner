<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-custom">
      <div class="container">
        <a class="navbar-brand mx-auto" href="#">
          <img src="<?= $base_url ?>public/assets_user/image/logo.png" alt="logo" class="d-md-none d-lg-none">
          <img src="<?= $base_url ?>public/assets_user/image/logo1.png" class="d-none d-md-inline d-lg-inline">
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= $base_url ?>">Beranda</a>
            </li>
            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle text-brown" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">Profil</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="profil_kampung_kuliner">Kampung Kuliner</a>
                <a class="dropdown-item" href="profil_desa_ombulo">Desa Ombulo</a>
                <a class="dropdown-item" href="profil_desa_yoso">Desa Yosonegoro</a>

              </div>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar_lapak">Lapak</a>
            </li>
            <button href="/login" class="btn btn-custom my-2 my-sm-0">Masuk</button>
          </ul>
        </div>
      </div>
      <div class="shape1">
        <img src="<?= $base_url ?>public/assets_user/image/shape1.svg" alt="">
      </div>
    </nav>