<footer class="main-footer">

  <strong>Copyright &copy; <?= date('Y') ?> </strong> - <i class="fas fa-code"></i> With <i class="fas fa-coffee"></i> & <i class="fas fa-heart"></i> By <a target="_blank" href="https://www.instagram.com/kknmbkm.ombulo2021/">KKN Desa Ombulo Teknik Informatika</a>
</footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= $base_url ?>public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= $base_url ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $base_url ?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $base_url ?>public/assets/dist/js/demo.js"></script>
<!-- SummerNote js -->
<script src="<?= $base_url ?>public/assets/plugins/summernote/summernote.min.js"></script>
<script>
  $(document).ready(function() {
    $('#deskripsi_lapak').summernote();
  });
</script>
</body>

</html>