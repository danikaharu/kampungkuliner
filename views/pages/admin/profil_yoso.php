<?php include 'app/controller/profil_yoso/post.php'; ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= $base_url ?>beranda_admin">Kampung Kuliner</a></li>
            <li class="breadcrumb-item active">Profil Desa Yosonegoro</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?= $title ?></h3>
      </div>
      <div class="card-body">
        <?php
        if (isset($_SESSION['msg_simpan_yoso'])) {
        ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_simpan_yoso'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
        }
        ?>
         <?php
        if (isset($_SESSION['msg_edit_yoso'])) {
        ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_edit_yoso'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
        }
        ?>
        <?php tampil_profil($mysqli); ?>
      </div>
    </div>
  </section>
</div>