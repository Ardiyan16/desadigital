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
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3><?= $this->session->flashdata('error'); ?></h3>
                                <h3 class="box-title" style="margin-bottom: 20px;">Tambah Event
                                    <small>Tambahkan Event Desa</small>
                                </h3>
                                <div class="box-body">
                                    <form action="<?= site_url('admin/Event/addevent'); ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            judul event<input type="text" class="form-control" name="judul_event" placeholder="Judul Event...">
                                        </div>
                                        <div>
                                            isi event<textarea id="editor1" name="isi_berita" rows="10" cols="80" placeholder="Isi Berita..."></textarea>
                                        </div>
                                        <br />
                                        <div class="form-group">
                                            foto<input type="file" name="foto" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            tanggal mulai<input type="date" class="form-control" name="tanggal_mulai" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            tanggal selesai<input type="date" class="form-control" name="tanggal_selesai" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            Dusun
                                            <select class="form-control" name="id_dusun">
                                                <option value="1">Dusun Jenisari</option>
                                                <option value="2">Dusun Kopen</option>
                                                <option value="3">Dusun Krajan</option>
                                                <option value="4">Dusun Maron</option>
                                                <option value="5">Dusun Sawahan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            RT
                                            <select class="form-control" name="id_rt">
                                                <option value="1">RT 01</option>
                                                <option value="2">RT 02</option>
                                                <option value="3">RT 03</option>
                                                <option value="4">RT 04</option>
                                                <option value="5">RT 05</option>
                                                <option value="6">RT 06</option>
                                                <option value="7">RT 07</option>
                                                <option value="8">RT 08</option>
                                                <option value="9">RT 09</option>
                                                <option value="10">RT 10</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            RW
                                            <select class="form-control" name="id_rw">
                                                <option value="1">RW 01</option>
                                                <option value="2">RW 02</option>
                                                <option value="3">RW 03</option>
                                                <option value="4">RW 04</option>
                                                <option value="5">RW 05</option>
                                                <option value="6">RW 06</option>
                                                <option value="7">RW 07</option>
                                                <option value="8">RW 08</option>
                                                <option value="9">RW 09</option>
                                                <option value="10">RW 10</option>
                                            </select>
                                        </div>
                                        <button type="submit" value="save" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php $this->load->view("admin/_partials/footer/footer.php"); ?>
    </div>

    <?php $this->load->view("admin/_partials/footer/js.php"); ?>