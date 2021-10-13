  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <div class="sidebar-head">
    <a href="<?= $base_url ?>beranda_admin" class="brand-link">
      <img src="<?= $base_url ?>public/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text text-white">KampungKuliner</span>
    </a>
  </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $base_url ?>public/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= $base_url ?>beranda_admin" class="nav-link">
            <i class="nav-icon fas fa-tv"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Profil Desa
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $base_url ?>profil_ombulo" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Desa Ombulo</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../charts/flot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Desa Yosonegoro</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>lapak" class="nav-link">
            <i class="nav-icon fas fa-store"></i>
            <p>
              Lapak
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
