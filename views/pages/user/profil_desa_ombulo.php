<section class="profil-desa">
    <h2>Profil Desa Ombulo</h2>
    <img src="<?= $base_url ?>public/assets/dist/img/ombulo.jpeg" alt="">
    <?php
        $query = $mysqli->query("SELECT * FROM profil WHERE desa = '1'");
        $d = $query->fetch_assoc();
        echo $d['konten'];
    ?>
</section>