<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('/assets/assetGambar/administrator/') . $userLogin['foto'] ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block text-uppercase"><?= $userLogin['nama']; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="<?= base_url('dashboardController') ?>" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview ">
          <a href="<?= base_url('DataPendudukController') ?>" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Data Penduduk
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= base_url('DataKkController') ?>" class="nav-link">
            <i class="nav-icon fas fa-book-medical"></i>
            <p>
              Data Kartu Keluarga
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Sirkulasi Penduduk
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Lahir</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Meninggal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pendatang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pindah</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">Administrator</li>
        <li class="nav-item">
          <a href="<?= base_url('AdministratorController') ?>" class="nav-link">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
              Administrator
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('AdministratorController/camat') ?>" class="nav-link">
            <i class=" nav-icon fas fa-users-cog"></i>
            <p>
              Camat
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('AdministratorController/petugas') ?>" class="nav-link">
            <i class=" nav-icon fas fa-users-cog"></i>
            <p>
              Petugas
            </p>
          </a>
        </li>

        <li class="nav-header">Action</li>
        <li class="nav-item">
          <a href="<?= base_url('AuthController/logout') ?>" onclick="return confirm('Apakah Anda Inggin Keluar.??')" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Log Out
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>