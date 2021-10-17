<section class="profil-desa">
    <h2>Profil Desa Yoso</h2>
    <img src="<?= $base_url ?>public/assets/dist/img/yoso.jpeg" alt="">
    <?php
        $query = $mysqli->query("SELECT * FROM profil WHERE desa = '2'");
        $d = $query->fetch_assoc();
        echo $d['konten'];
    ?>
</section>