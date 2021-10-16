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
                <a href="edit_lapak/<?= $d['id_lapak']; ?>"><i class="fas fa-edit"></i></a>
                <a href="hapus_lapak/<?= $d['id_lapak']; ?>" <?php echo $d['id_lapak']; ?>" onclick="return confirm('Anda Yakin?')"><i class="fas fa-trash"></i></a>
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
                    <div class="mb-4">
                        <label for="">Nomor Telepon</label>
                        <input type="number" class="form-control" id="no_telp" name="no_telp">
                    </div>
                    <div class="mb-4">
                        <label for="">Nomor WhatsApp</label>
                        <input type="number" class="form-control" id="no_wa" name="no_wa">
                    </div>
                    <button type="submit" name="simpan_lapak" class="btn btn-primary">Simpan</button>
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
        <form action="lapak.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
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
                    <input type="file" class="custom-file-input" id="customFile" name="gambar">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="mb-4">
                <label for="">Nomor Telepon</label>
                <input type="number" class="form-control" id="no_telp" name="no_telp" value="<?= $d['no_telp']; ?>">
            </div>
            <div class="mb-4">
                <label for="">Nomor WhatsApp</label>
                <input type="number" class="form-control" id="no_wa" name="no_wa" value="<?= $d['no_wa']; ?>">
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
<?php
    }
}

?>