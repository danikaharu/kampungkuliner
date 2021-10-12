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
                        <li class="breadcrumb-item active">Tambah Lapak</li>
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
                    <h5 class="m-0 font-weight-bold text-primary">Form Tambah Lapak</h5>
                </div>
                <div class="card-body">
                    <form action="aksi/tambah_berita.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Nama Lapak</label>
                            <input type="text" class="form-control" id="nama_lapak" aria-describedby="nama_lapak" name="nama_lapak">
                        </div>
                        <div class="form-group">
                            <label for="isi">Deskripsi</label>
                            <textarea type="text" class="form-control" id="deskripsi_lapak" placeholder="" rows="5" name="deskripsi_lapak"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">File Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="gambar">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="">Nomor Telepon</label>
                            <input type="number" class="form-control" id="no_telp" name="no_telp">
                        </div>
                        <div class="mb-4">
                            <label for="">Nomor WhatsApp</label>
                            <input type="number" class="form-control" id="no_wa" name="no_wa">
                        </div>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>