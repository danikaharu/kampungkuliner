<?php


function tampil_lapak_beranda($base_url, $mysqli)
{
  $i = 0;
  $query = $mysqli->query("SELECT * FROM lapak LIMIT 3");
  while ($d = $query->fetch_assoc()) {
?>
    <?php $i++ ?>
    <div class="col-md-4">
      <div class="menu-table" <?php if ($i == '2') {
                                echo 'id = "trend"';
                              } ?>>
        <img width="310" height="200" src="<?= $base_url ?>public/assets/image/<?= $d['gambar'] ?>" alt="" class="menu-image">
        <p class="menu-name"><?= $d['nama'] ?></p>

        <div class="menu-button">
          <a target="_blank" href="https://wa.me/<?= $d['no_wa'] ?>" class="btn menu-button__buy">
            <img src="<?= $base_url ?>public/assets_user/image/whatsapp.svg" alt="" class="menu-button__buy-icon">
            Beli
          </a>
          <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg<?= $d['id_lapak'] ?>" class="btn menu-button__detail">
            <img src="<?= $base_url ?>public/assets_user/image/info.svg" alt="" class="menu-button__detail-icon">
            Detail
          </button>
        </div>
      </div>
    </div>



    <div class="modal fade bd-example-modal-lg<?= $d['id_lapak'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #fbb62b;">
            <div class="modal-title text-white">Detail Lapak</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <img class="rounded" src="<?= $base_url ?>public/assets/image/<?= $d['gambar'] ?>" width="100%" alt="">
              </div>
              <div class="col-6">
                <h4><?= $d['nama'] ?></h4>
                <div class="f-12"><i class="fas fa-phone-square"></i> Telepon : <?= $d['no_telp'] ?></div>
                <div class="f-12"><i class="fas fa-phone"></i> Whatsapp : <?= $d['no_wa'] ?></div>
              </div>
              <div class="col-12">
                <p><?= $d['deskripsi']; ?></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


  <?php
  }
}

function tampil_daftar_lapak($base_url,$mysqli)
{
?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script> 
<div class="row">
<?php
  $query = $mysqli->query("SELECT * FROM lapak");
  $jumlah_data = 9;
  $total_data = mysqli_num_rows($query);
  $jumlahPagination = ceil($total_data / $jumlah_data);
  if (isset($_POST['halaman'])) {
    // $nomorHalaman = $_GET['nomorHalaman'];
    $halamanAktif = $_POST['halaman'];
  } else {
    $halamanAktif = 1;
  }

  $dataAwal = ($halamanAktif * $jumlah_data) - $jumlah_data;

  $jumlahLink = 3;
  if ($halamanAktif > $jumlahLink) {
    $startNumber = $halamanAktif - $jumlahLink;
  } else {
    $startNumber = 1;
  }

  if ($halamanAktif < ($jumlahPagination - $jumlahLink)) {
    $endNumber = $halamanAktif + $jumlahLink;
  } else {
    $endNumber = $jumlahPagination;
  }
  // end konfigurasi pagination
  $ambilData_perhalaman = $mysqli->query("SELECT * FROM lapak LIMIT $dataAwal,$jumlah_data");
  while ($tampil = $ambilData_perhalaman->fetch_assoc()) {

  ?>
    <div class="col-md-4 mt-4">
      <div class="menu-table">
        <img width="310" height="200" src="<?= $base_url ?>public/assets/image/<?= $tampil['gambar'] ?>" alt="" class="menu-image">
        <p class="menu-name"><?= $tampil['nama'] ?></p>

        <div class="menu-button">
          <a target="_blank" href="https://wa.me/<?= $tampil['no_wa'] ?>" class="btn menu-button__buy">
            <img src="<?= $base_url ?>public/assets_user/image/whatsapp.svg" alt="" class="menu-button__buy-icon">
            Beli
          </a>
          <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg<?= $tampil['id_lapak'] ?>" class="btn menu-button__detail">
            <img src="<?= $base_url ?>public/assets_user/image/info.svg" alt="" class="menu-button__detail-icon">
            Detail
          </button>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-lg<?= $tampil['id_lapak'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #fbb62b;">
            <div class="modal-title text-white">Detail Lapak</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <img class="rounded" src="<?= $base_url ?>public/assets/image/<?= $tampil['gambar'] ?>" width="100%" alt="">
              </div>
              <div class="col-6">
                <h4><?= $tampil['nama'] ?></h4>
                <div class="f-12"><i class="fas fa-phone-square"></i> Telepon : <?= $tampil['no_telp'] ?></div>
                <div class="f-12"><i class="fas fa-phone"></i> Whatsapp : <?= $tampil['no_wa'] ?></div>
              </div>
              <div class="col-12">
                <p><?= $tampil['deskripsi']; ?></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
<?php
  }
  ?>
</div>
<div class="lapak-pagination">
<ul class="pagination justify-content-center">
      <?php if ($halamanAktif > 1) : ?>
        <li class="page-item">
          <form action="" method="POST">
            <button type="submit" name="halaman" value="<?= $halamanAktif - 1; ?>" class="page-link">&laquo;</button>
          </form>
          <!-- <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a> -->
        </li>
      <?php endif; ?>
      <?php
      for ($i = $startNumber; $i <= $endNumber; $i++) {
        if ($halamanAktif == $i) {
      ?>
          <li class="page-item active">
            <form action="" method="POST">
              <button type="submit" name="halaman" value="<?= $i; ?>" class="page-link"><?= $i; ?> <span class="sr-only">(current)</span></button>
            </form>
          </li>
        <?php
        } else {
        ?>
          <li class="page-item">
            <form action="" method="POST">
              <button type="submit" name="halaman" value="<?= $i; ?>" class="page-link"><?= $i; ?> </button>
            </form>
          </li>

      <?php
        }
      }
      ?>
      <?php if ($halamanAktif < $jumlahPagination) : ?>
        <li class="page-item">
          <form action="" method="POST">
            <button type="submit" name="halaman" value="<?= $halamanAktif + 1; ?>" class="page-link">&raquo;</button>
          </form>
          <!-- <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a> -->
        </li>
      <?php endif; ?>
    </ul>
</div>

  <?php
}
?>