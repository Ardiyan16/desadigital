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
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3><?= $this->session->flashdata('success'); ?></h3>
                <h3 class="box-title">View Tabel Data Wisata</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID Kategori</th>
                      <th>Nama Wisata</th>
                      <th>Deskripsi</th>
                      <th>Lokasi</th>
                      <th>ID Dusun</th>
                      <th>Foto</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($wisata as $wisata) : ?>
                      <tr>
                        <th><?= $wisata->id_kategori ?></th>
                        <th><?= $wisata->nama_wisata ?></th>
                        <th><?= substr($wisata->deskripsi, 0, 200); ?></th>
                        <th><?= $wisata->lokasi ?></th>
                        <th><?= $wisata->id_dusun ?></th>
                        <td>
                          <img src="<?php echo base_url('assets/img/foto_wisata/' . $wisata->foto) ?>" width="64" />
                        </td>
                        <th>
                          <a href="<?php echo site_url('admin/wisata/edit/' . $wisata->id_wisata) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                          <a onclick="deleteConfirm" href="<?php echo site_url('admin/wisata/delete/' . $wisata->id_wisata) ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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