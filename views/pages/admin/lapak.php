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
                        <li class="breadcrumb-item"><a href="<?= $base_url ?>beranda_admin">Beranda</a></li>
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
                        <h5 class="m-0 font-weight-bold text-primary">Data Lapak</h5>
                        <a href="<?= $base_url ?>tambah_lapak" class="btn btn-outline-primary mb-1 ml-auto"><i class="fas fa-plus fa-sm"></i></a>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>ID Lapak</th>
                                    <th>Nama Lapak</th>
                                    <th>No Telp</th>
                                    <th>No WhatsApp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php
                                        include '../koneksi/koneksi.php';
                                        $i = 1;
                                        $dataBerita = mysqli_query($koneksi, "SELECT * FROM berita");
                                        while ($d = mysqli_fetch_array($dataBerita)) {
                                        ?>
                                    <tr>
                                        <td class="border-0"><?= $i++ ?></td>
                                        <td class="border-0"><?= $d['id_berita']; ?></td>
                                        <td class="border-0 fw-bold">
                                            <?= $d['judul']; ?>
                                        </td>
                                        <td class="border-0">
                                            <?= $d['isi']; ?>
                                        </td>
                                        <td class="border-0">
                                            <?= $d['caption_gambar']; ?>
                                        </td>
                                        <td>
                                            <?= date('Y-m-d', strtotime($d['tanggal'])) ?>
                                        </td>
                                        <td class="border-0">
                                            <a href="edit_berita.php?id=<?php echo $d['id_berita']; ?>"><i class="fas fa-edit"></i></a>
                                            <a href="aksi/hapus_berita.php?id=<?php echo $d['id_berita']; ?>" onclick="return confirm('Anda Yakin?')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                        }
                                ?> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>