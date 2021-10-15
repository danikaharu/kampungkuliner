<?php

function tampil_profil($mysqli)
{

    $query = $mysqli->query("SELECT * FROM profil WHERE desa = '1'");
    $d = $query->fetch_assoc();

    if (!isset($d['id_profil'])) {
?>

        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="form-group">
                        <textarea name="konten" id="summernote1" cols="30" rows="100"></textarea>
                    </div>
                    <div class="form-group">
                        <button name="simpan_ombulo" class="btn btn-block btn-info" type="submit"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    <?php
    } else {
    ?>
        <div id="noedit">
            <button id="show" type="button" class="btn btn-info" name="hapus"><i class="fas fa-edit"></i> Edit Profil</button>
            <div class="mt-4"><?= $d['konten'] ?></div>
        </div>
        <div id="edit">
            <button type="button" id="hide" class="btn btn-danger"><i class="fas fa-times"></i> Batal</button>
            <form action="" class="mt-2" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $d['id_profil'] ?>">
                    <textarea name="konten" id="summernote2" cols="30" rows="100">
                        <?= $d['konten'] ?>
                    </textarea>
                </div>
                <div class="form-group">
                <button type="submit" name="edit_ombulo" class="btn btn-block btn-info"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
            
        </div>


<?php
    }
}

?>