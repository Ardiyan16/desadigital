<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_partials/head.php"); ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <?php $this->load->view("admin/_partials/topbar/topbar.php") ?>
  <div class="wrapper">
    <?php $this->load->view('admin/_partials/sidebar/sidebar.php'); ?>

    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="link" style="margin-top: 20px; margin-left: 12px; margin-bottom: 10px;">
            <a href="<?= site_url('admin/Kerajinan/add'); ?>" class="btn btn-primary">Tambah Kerajinan Desa</a>
          </div>
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3><?= $this->session->flashdata('success'); ?></h3>
                <h3 class="box-title">View Tabel Data Kerajina Desa</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nama Kerajina Desa</th>
                      <th>Tempat Pembuatan</th>
                      <th>Harga</th>
                      <th>Foto</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($kerajinan as $kerajinan) : ?>
                      <tr>
                        <th><?= $kerajinan->nama_kerajinan ?></th>
                        <th><?= $kerajinan->lokasi_pembuatan ?></th>
                        <th><?= $kerajinan->harga ?></th>

                        <td>
                          <img src="<?php echo base_url('assets/img/foto_kerajinan/' . $kerajinan->foto) ?>" width="64" />
                        </td>
                        <th>
                          <a href="<?php echo site_url('admin/kerajinan/edit/' . $kerajinan->id) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                          <a onclick="deleteConfirm" href="<?php echo site_url('admin/kerajinan/delete/' . $kerajinan->id) ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                        </th>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </section>
    </div>




    <?php $this->load->view("admin/_partials/footer/footer.php"); ?>
  </div>

  <?php $this->load->view("admin/_partials/footer/js.php"); ?>