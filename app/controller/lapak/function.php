<?php

function tampil_lapak($mysqli)
{
    $i = 1;
    $dataLapak = mysqli_query($mysqli, "SELECT * FROM lapak");
    while ($d = mysqli_fetch_array($dataLapak)) {
?>
        <tr>
            <td class="border-0"><?= $i++ ?></td>
            <td class="border-0 fw-bold">
                <?= $d['nama']; ?>
            </td>
            <td class="border-0">
                <?= $d['no_telp']; ?>
            </td>
            <td class="border-0">
                <?= $d['no_wa']; ?>
            </td>
            <td class="border-0">

                <form action="" method="post">
                    <input type="text" name="id_lapak" value="<?= $d['id_lapak'] ?>" hidden>
                    <input type="text" name="gambar" value="<?= $d['gambar'] ?>" hidden>
                    <a class="btn btn-success btn-xs" href="edit_lapak/<?= $d['id_lapak']; ?>"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-danger btn-xs" type="submit" name="hapus_lapak" onclick="return confirm('Anda Yakin?')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    <?php
    }
}

function input_lapak()
{
    ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary">Form Tambah Lapak</h5>
            </div>
            <div class="card-body">
                <form action="lapak" method="post" enctype="multipart/form-data">
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

                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                            <input type="number" id="no_telp" name="no_telp" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">No wa</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                            <input type="number" id="no_wa" name="no_wa" class="form-control">
                        </div>
                    </div>
                    
                    <button type="submit" name="simpan_lapak" class="btn btn-info"><i class="fas fa-save"></i> Simpan</button>
                    <a href="lapak" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <?php
}

function edit_lapak($base_url, $mysqli, $id)
{
    $id_lapak = $id;
    $dataLapak = mysqli_query($mysqli, "SELECT * FROM lapak WHERE id_lapak='$id_lapak'");
    while ($d = mysqli_fetch_array($dataLapak)) {
    ?>
        <form action="<?= $base_url ?>lapak" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" id="id_lapak" aria-describedby="id_lapak" name="id_lapak" value="<?= $d['id_lapak']; ?>" hidden>
                <label for="judul">Nama Lapak</label>
                <input type="text" class="form-control" id="nama_lapak" aria-describedby="nama_lapak" name="nama_lapak" value="<?= $d['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="isi">Deskripsi</label>
                <textarea type="text" class="form-control" id="deskripsi_lapak" placeholder="" rows="5" name="deskripsi_lapak"><?= $d['deskripsi']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">File Gambar</label><br>
                <img class="mb-3 mt-2" width="200" src="<?= $base_url ?>public/assets/image/<?= $d['gambar'] ?>" alt="">
                <div class="custom-file">
                    <input type="text" value="<?= $d['gambar'] ?>" name="gambar_sebelumnya">
                    <input type="file" class="custom-file-input" id="customFile" name="gambar">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                        <label for="">No Telepon</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                            <input type="number" class="form-control" id="no_telp" name="no_telp" value="<?= $d['no_telp']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">No wa</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                            <input type="number" class="form-control" id="no_wa" name="no_wa" value="<?= $d['no_wa']; ?>">
                        </div>
                    </div>
            
            <button type="submit" name="edit_lapak" class="btn btn-info"><i class="fas fa-save"></i> SimpanGIT</button>
            <a href="<?= $base_url ?>lapak" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
        </form>
<?php
    }
}

?>