<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <?= $this->session->flashdata('status'); ?>
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h5>Jumlah penduduk</h5>
              <h4 class="font-weight-bold"><?= $dataPenduduk; ?></h4>
            </div>
            <!-- <div class="icon">
              <i class="ion ion-bag"></i>
            </div> -->
            <a href="<?= base_url('DataPendudukController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h5>Kartu keluarga</h5>

              <h4 class="font-weight-bold"><?= $dataPenduduk; ?></h4>
            </div>
            <!-- <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div> -->
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h5>Laki-laki</h5>

              <h4 class="font-weight-bold"><?= $dataLakilaki; ?></h4>
            </div>
            <!-- <div class="icon">
              <i class="ion ion-person-add"></i>
            </div> -->
            <a href="<?= base_url('DataPendudukController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h5>Perempuan</h5>

              <h4 class="font-weight-bold"><?= $dataPerempuan; ?></h4>
            </div>
            <!-- <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div> -->
            <a href="<?= base_url('DataPendudukController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h5>Lahir</h5>

              <h4 class="font-weight-bold">94</h4>
            </div>

            <!-- <div class="icon">
              <i class="ion ion-bag"></i>
            </div> -->

            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h5>Meniggal</h5>

              <h4 class="font-weight-bold">91</h4>
            </div>

            <!-- <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div> -->

            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h5>Pendatang</h5>

              <h4 class="font-weight-bold">90</h4>
            </div>

            <!-- <div class="icon">
              <i class="ion ion-person-add"></i>
            </div> -->

            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h5>Pindah</h5>

              <h4 class="font-weight-bold">39</h4>
            </div>

            <!-- <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div> -->

            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header ">
              <h3 class="card-title font-weight-bold">Data penduduk</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="text-center">
                  <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>No Kk</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Desa</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>17077493747</td>
                    <td>17077493747</td>
                    <td>Widodo</td>
                    <td>Desa Tl Bunut Dusun 3</td>
                    <td>Desa Tl Bunut</td>
                    <td class="text-center">
                      <a href="http://" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>17077493747</td>
                    <td>17077493747</td>
                    <td>surmayem</td>
                    <td>Desa Tl Bunut Dusun 5</td>
                    <td>DesaTl Bunut</td>
                    <td class="text-center">
                      <a href="http://" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>17077493747</td>
                    <td>17077493747</td>
                    <td>melati</td>
                    <td>Desa Tl Bunut Dusun 3</td>
                    <td>Desa Tl Bunut</td>
                    <td class="text-center">
                      <a href="http://" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>17077493747</td>
                    <td>17077493747</td>
                    <td>melati</td>
                    <td>Desa Tl Bunut Dusun 1</td>
                    <td>Desa Tl Bunut</td>
                    <td class="text-center">
                      <a href="http://" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>