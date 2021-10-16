<?php
include 'app/controller/lapak/post.php';
$id = $_GET['id'];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $base_url ?>beranda_admin">Kampung Kuliner</a></li>
                        <li class="breadcrumb-item active">Edit Lapak</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Form Edit Lapak</h5>
                </div>
                <div class="card-body">
                    <?php
                    edit_lapak($base_url, $mysqli, $id);
                    ?>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>