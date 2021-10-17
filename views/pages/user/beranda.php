<?php
include 'app/controller/user/function.php';
?>
<section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 mb-5 align-self-center">
            <div class="headline"></div>
            <p class="text-head">Kampung Wisata Kuliner !</p>
            <p class="text-main">Rasakan <span class="text-submain">‘Nasi Bulu’</span>
              Yang Autentik Hanya di
              Kampung Wisata Kuliner
              <span class="text-submain">OmYoso</span> !!!
            </p>
            <div class="sub-headline">
              <p class="sub-headline_text"> Rasa Nasi Bulu yang khas, kemudian di padu dengan
                dodol dan sate Gorontalo akan membawa anda merasa
                nostalgia !</p>
            </div>
            <div class="call-to-action">
              <a href="daftar_lapak" class="btn btn-custom my-2">Lapak</a>
              <a href="profil_kampung_kuliner" class="btn btn-custom my-2">Selengkapnya</a>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-5 pt-5 align-self-center">
            <img class="img-fluid d-none d-lg-block d-md-block" src="<?= $base_url ?>public/assets_user/image/gambar1.png" alt="gambar">
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

  </section>
  <!-- End Section CTA -->

  <!-- Section Etnic Food -->
  <section class="etnic-food">
    <h3 class="etnic-text__head pt-5">Makanan Khas Kampung Wisata Kuliner OmYoso</h3>
    <div class="container py-5">
      <div class="row text-center">
        <div class="col-md-4">
          <img src="<?= $base_url ?>public/assets_user/image/nasi buluu.png" alt="nasi bulu" class="img-fluid">
          <div id="shadow"></div>
          <p class="etnic-text__description">Nasi Bulu</p>
        </div>
        <div class="col-md-4">
          <img src="<?= $base_url ?>public/assets_user/image/dodolll.png" alt="dodol" class="img-fluid">
          <div id="shadow"></div>
          <p class="etnic-text__description">Dodol Gorontalo</p>
        </div>
        <div class="col-md-4">
          <img src="<?= $base_url ?>public/assets_user/image/sateee.png" alt="sate" class="img-fluid">
          <div id="shadow"></div>
          <p class="etnic-text__description">Sate Gorontalo</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Etnic Food -->

  <!-- Section Sejarah -->
  <section class="sejarah">
    <div class="container">
      <div class="shape2">
        <img src="<?= $base_url ?>public/assets_user/image/shape2.svg" alt="">
      </div>
      <div class="row pt-5">
        <div class="col-md-7 my-5">
          <img src="<?= $base_url ?>public/assets_user/image/gambar3.png" alt="gambar" class="img-fluid">
        </div>
        <div class="col-md-5 my-5 py-2">
          <div class="sejarah-headline">
            <h2>Sejarah Kampung Wisata Kuliner Om Yoso</h2>
          </div>
          <div class="sejarah-description">
            <p>Kampung Wisata Kuliner OmYoso terdiri dari 2 Desa yang ada di Limboto Barat yang saling bekerja sama,
              yaitu Desa Ombulo dan Desa Yosonegoro. Jalan [Apa depe nama?] menjadi penghubung dari ke dua desa
              tersebut. Jalan [Apa depe nama?] ini merupakkan pusat masyarakat penjual Nasi Bulu berjualan, melihat hal
              ini maka Mahasiswa HMJ Bastaria UNG menjadi penghubung Desa Ombulo dan Yosonegoro untuk merintis Kampung
              Wisata Kuliner guna meningkatkan ekonomi masyarakat juga (perbaiki dpe narasi dong wkwkwkwk) </p>
          </div>
          <div class="sejarah-button">
            <a href="profil_kampung_kuliner" class="btn btn-custom">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Sejarah -->

  <!-- Section Menu -->
  <section class="menu">
    <div class="container">
      <div class="shape3">
        <img src="<?= $base_url ?>public/assets_user/image/shape3.svg" alt="">
      </div>
      <div class="row">
       <?php tampil_lapak_beranda($base_url,$mysqli) ?>
      </div>
      <div class="text-center">
        <a href="daftar_lapak" id="read-more" class="btn btn-custom">Lihat Lebih Banyak</a>
      </div>
    </div>
  </section>
  <!-- End Section Menu -->