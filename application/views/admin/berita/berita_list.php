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
                <h3 class="box-title">View Tabel Data Berita</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Judul Berita</th>
                      <th>Tanggal</th>
                      <th>Lokasi</th>
                      <th>Isi Berita</th>
                      <th>Penulis</th>
                      <th>ID Dusun</th>
                      <th>ID RW</th>
                      <th>ID RT</th>
                      <th>Foto</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($berita as $berita) : ?>
                    <tr>
                      <th><?= $berita->judul_berita ?></th>
                      <th><?= $berita->tanggal ?></th>
                      <th><?= $berita->lokasi ?></th>
                      <th><?= $berita->isi_berita ?></th>
                      <th><?= $berita->penulis ?></th>
                      <th><?= $berita->id_dusun ?></th>
                      <th><?= $berita->id_rw ?></th>
                      <th><?= $berita->id_rt ?></th>
                      <td>
                        <img src="<?php echo base_url('assets/img/foto_berita/' . $berita->foto) ?>" width="64" />
                      </td>
                      <th>
                        <a href="<?php echo site_url('admin/berita/edit/' . $berita->id_berita) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                        <a onclick="deleteConfirm" href="<?php echo site_url('admin/berita/delete/' . $berita->id_berita) ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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