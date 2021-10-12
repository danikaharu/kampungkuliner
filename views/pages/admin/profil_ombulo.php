<?php include 'app/controller/profil_ombulo/post.php'; ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Kampung Kuliner</a></li>
            <li class="breadcrumb-item active">Profil Desa Ombulo</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?= $title ?></h3>
        <!-- <div class="card-tools">
          <ul class="nav nav-pills ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#sales-chart" data-toggle="tab">Tambah Data</a>
            </li>
          </ul>
        </div> -->
      </div>
      <div class="card-body">
        <?php tampil_profil($mysqli); ?>
      </div>
    </div>
  </section>
</div>