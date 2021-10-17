<?php
include 'app/controller/lapak/post.php'
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Master Lapak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $base_url ?>beranda_admin">Kampung Kuliner</a></li>
                        <li class="breadcrumb-item active">Lapak</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5>Data Lapak</h5>
                        <a href="<?= $base_url ?>tambah_lapak" class="btn btn-info mb-1 ml-auto"><i class="fas fa-plus fa-sm"></i> Tambah Data</a>
                    </div>
                    <div class="p-2">
                    <?php
                    if (isset($_SESSION['msg_tambah_lapak'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_tambah_lapak'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['msg_edit_lapak'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_edit_lapak'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['msg_hapus_lapak'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_hapus_lapak'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                  
                    <div class="table-responsive p-3">
                        <table class="table align-items-center" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lapak</th>
                                    <th>No Telp</th>
                                    <th>No WhatsApp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                tampil_lapak($mysqli);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>