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
                <h3 class="box-title">View Tabel Data Permohonan Surat</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Alamat</th>
                      <th>Text</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($surat as $surat) : ?>
                      <tr>
                        <th><?= $surat->nama ?></th>
                        <th><?= $surat->nik ?></th>
                        <th><?= $surat->alamat ?></th>
                        <th><?= $surat->text ?></th>


                        <th>
                          <a href="<?php echo site_url('user/Surat/surat/' . $surat->id_surat) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Print</a>
                          <a onclick="deleteConfirm" href="<?php echo site_url('user/surat/delete/' . $surat->id_surat) ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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