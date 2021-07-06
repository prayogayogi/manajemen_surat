<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('/assets/assetGambar/administrator/') . $userLogin['foto'] ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block text-uppercase"><?= $userLogin['nama']; ?></a>
        <?php if ($userLogin['roles'] == 1) { ?>
          <a class="text-primary">Admin</a>
        <?php } else if ($userLogin['roles'] == 2) { ?>
          <a class="text-primary">Camat</a>
        <?php } else if ($userLogin['roles'] == 3) { ?>
          <a class="text-primary">Petugas</a>
        <?php } ?>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="<?= base_url('dashboardController') ?>" class="nav-link  <?= (current_url() == base_url('dashboardController')) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview ">
          <a href="<?= base_url('DataPendudukController') ?>" class="nav-link <?= (current_url() == base_url('DataPendudukController')) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Data Penduduk
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= base_url('DataKkController') ?>" class="nav-link <?= (current_url() == base_url('DataKkController')) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-book-medical"></i>
            <p>
              Data Kartu Keluarga
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview <?= (current_url() == base_url('Sirkulasi/SirkulasiController')) || (current_url() == base_url('Sirkulasi/SirkulasiController/dataMeninggal')) || (current_url() == base_url('Sirkulasi/SirkulasiController/dataPendatang')) || (current_url() == base_url('Sirkulasi/SirkulasiController/dataPindah'))  ? 'menu-open ' : '' ?> ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Sirkulasi Penduduk
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('Sirkulasi/SirkulasiController') ?>" class="nav-link <?= (current_url() == base_url('Sirkulasi/SirkulasiController')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Lahir</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Sirkulasi/SirkulasiController/dataMeninggal') ?>" class="nav-link <?= (current_url() == base_url('Sirkulasi/SirkulasiController/dataMeninggal')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Meninggal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Sirkulasi/SirkulasiController/dataPendatang') ?>" class="nav-link <?= (current_url() == base_url('Sirkulasi/SirkulasiController/dataPendatang')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pendatang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Sirkulasi/SirkulasiController/dataPindah') ?>" class="nav-link <?= (current_url() == base_url('Sirkulasi/SirkulasiController/dataPindah')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pindah</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview <?= (current_url() == base_url('Laporan/LaporanController')) || (current_url() == base_url('Laporan/LaporanController/dataKk')) || (current_url() == base_url('Laporan/LaporanController/dataLahir')) || (current_url() == base_url('Laporan/LaporanController/dataMeningal')) || (current_url() == base_url('Laporan/LaporanController/dataPendatang')) || (current_url() == base_url('Laporan/LaporanController/dataPindah')) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Kelola Laporan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('Laporan/LaporanController') ?>" class="nav-link <?= (current_url() == base_url('Laporan/LaporanController')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Penduduk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Laporan/LaporanController/dataKk') ?>" class="nav-link <?= (current_url() == base_url('Laporan/LaporanController/dataKk')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Kartu Keluarga</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Laporan/LaporanController/dataLahir') ?>" class="nav-link <?= (current_url() == base_url('Laporan/LaporanController/dataLahir')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Lahir</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Laporan/LaporanController/dataMeningal') ?>" class="nav-link <?= (current_url() == base_url('Laporan/LaporanController/dataMeningal')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Meninggal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Laporan/LaporanController/dataPendatang') ?>" class="nav-link <?= (current_url() == base_url('Laporan/LaporanController/dataPendatang')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pendatang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Laporan/LaporanController/dataPindah') ?>" class="nav-link <?= (current_url() == base_url('Laporan/LaporanController/dataPindah')) ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pindah</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">Administrator</li>
        <li class="nav-item">
          <a href="<?= base_url('AdministratorController') ?>" class="nav-link <?= (current_url() == base_url('AdministratorController')) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
              Administrator
            </p>
          </a>
        </li>
        <li class="nav-item" style="display: none;">
          <a href=" <?= base_url('AdministratorController/camat') ?>" class="nav-link <?= (current_url() == base_url('AdministratorController/camat')) ? 'active' : '' ?>">
            <i class=" nav-icon fas fa-users-cog"></i>
            <p>
              Camat
            </p>
          </a>
        </li>
        <li class="nav-item" style="display: none;">
          <a href="<?= base_url('AdministratorController/petugas') ?>" class="nav-link">
            <i class=" nav-icon fas fa-users-cog"></i>
            <p>
              Petugas
            </p>
          </a>
        </li>

        <li class="nav-header">Action</li>
        <li class="nav-item">
          <a href="#" class="nav-link" data-toggle="modal" data-target="#ubahPassword">
            <i class="nav-icon fas fa-unlock-alt"></i>
            <p>
              Ubah Password
            </p>
          </a>
        </li>
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



<!-- Modal Ubah Password -->
<div class="modal fade" id="ubahPassword" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ubah Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('AuthController/ubahPassword/') . $userLogin['id'] ?>" method="post">
          <div class="row mb-3">
            <div class="col">
              <div class="form-group">
                <label for="nama">Password Lama</label>
                <input type="password" name="passwordLama" class="form-control" autocomplete="off" id="password" placeholder="Masukan Password Lama" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="nama">Password Baru</label>
                <input type="password" name="passwordBaru" class="form-control" autocomplete="off" id="password" placeholder="Masukan Password Baru" autocomplete="off">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="resset" class="btn btn-dark px-4 ml-2" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- akhir modal ubah password -->