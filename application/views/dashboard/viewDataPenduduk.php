<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Penduduk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
            <li class="breadcrumb-item active">Data Penduduk</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Table Data Penduduk</h3>
              <div class="status mt-5">
                <?= $this->session->flashdata('status'); ?>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      <a href="#" data-toggle="modal" data-target="#exampleModalDataPenduduk" class="btn btn-primary"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                      <table id="example1" class="table text-center table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nik</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          foreach ($penduduk as $data) : ?>
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $data['nama']; ?></td>
                              <td><?= $data['alamat']; ?></td>
                              <td><?= $data['nik']; ?></td>
                              <td><?= $data['status']; ?></td>
                              <td>
                                <a href="#" data-toggle="modal" data-target="#modalUbahDataPenduduk<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

                                <a type="submit" href="<?= base_url('DataPendudukController/hapusDataPenduduk/') . $data['id'] ?>" onclick=" return confirm('Yakin Ingin Menghapus.?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                                <a href="#" data-toggle="modal" data-target="#staticBackdrop<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-plus-square"></i></a>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
</div>


<!-- Modal untuk tambah data penduduk -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data penduduk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <form action="<?= base_url('DataPendudukController/tambahDataPenduduk') ?>" method="POST">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="nama_desa">Nama Desa</label>
                    <input type="text" name="nama_desa" class="form-control" id="nama_desa" placeholder="Masukan Nama Desa">
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Masukan Jenis Kelamin">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="nik">Nik</label>
                    <input type="text" name="nik" class="form-control" id="nik" placeholder="Masukan Nik">
                  </div>
                  <div class="form-group">
                    <label for="no_kk">No Kk</label>
                    <input type="text" name="no_kk" class="form-control" id="no_kk" placeholder="Masukan No Kk">
                  </div>
                  <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary mt-2">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Untuk ubah data penduduk -->
<?php foreach ($penduduk as $data) : ?>
  <div class="modal fade" id="modalUbahDataPenduduk<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ubah Data Penduduk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <form action="<?= base_url('DataPendudukController/ubahDataPenduduk/') . $data['id'] ?>" method="POST">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" class="form-control" id="nama" disabled value="<?= $data['nama'] ?>" autofocus>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $data['alamat'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="nama_desa">Nama Desa</label>
                      <input type="text" name="nama_desa" class="form-control" id="nama_desa" value="<?= $data['nama_desa'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" disabled value="<?= $data['jenis_kelamin'] ?>">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="nik">Nik</label>
                      <input type="text" name="nik" class="form-control" id="nik" value="<?= $data['nik'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="no_kk">No Kk</label>
                      <input type="text" name="no_kk" class="form-control" id="no_kk" value="<?= $data['no_kk'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?= $data['pekerjaan'] ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                <div class="modal-footer">
                  <button type="resset" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>


<!-- Modal Unutk Detail data Penduduk -->
<?php foreach ($penduduk as $data) : ?>
  <div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Detail Data Penduduk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col text-center mb-4">
                <img src="<?= base_url('assets') ?>/dist/img/default.jpg" width="120px" alt="">
              </div>
            </div>
            <dl class="row justify-content-center">
              <dt class="col-sm-6">Nama</dt>
              <dd class="col-sm-6">: <?= $data['nama']; ?></dd>
              <dt class="col-sm-6">Alamat</dt>
              <dd class="col-sm-6">: <?= $data['alamat']; ?></dd>
              <dt class="col-sm-6">Nama Desa</dt>
              <dd class="col-sm-6">: <?= $data['nama_desa']; ?></dd>
              <dt class="col-sm-6">Jenis Kelamin</dt>
              <dd class="col-sm-6">: <?= $data['jenis_kelamin']; ?></dd>
              <dt class="col-sm-6">No Nik</dt>
              <dd class="col-sm-6">: <?= $data['nik']; ?></dd>
              <dt class="col-sm-6">No Kk</dt>
              <dd class="col-sm-6">: <?= $data['alamat']; ?></dd>
              <dt class="col-sm-6">Pekerjaan</dt>
              <dd class="col-sm-6">: <?= $data['pekerjaan']; ?></dd>
              <dt class="col-sm-6">Data Masuk</dt>
              <dd class="col-sm-6">: <?= $data['tgl_masuk']; ?></dd>
            </dl>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>