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
                        <a href="<?= site_url('admin/Wisata'); ?>" class="btn btn-primary">View Wisata</a>
                    </div>
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3><?= $this->session->flashdata('error'); ?></h3>
                                <h3><?= $this->session->flashdata('success'); ?></h3>
                                <h3 class="box-title" style="margin-bottom: 20px;">Tambah Wisata
                                    <small>Tambahkan Wisata Desa</small>
                                </h3>
                                <div class="box-body">
                                    <form action="<?= site_url('admin/Wisata/add'); ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            Kategori
                                            <select class="form-control" name="id_kategori">
                                                <option value="1">Wisata</option>
                                                <option value="2">Kuliner</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            Nama Wisata<input type="text" class="form-control" name="nama_wisata" placeholder="Nama Wisata...">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <div class="box-body pad">
                                                <textarea id="editor1" rows="10" cols="150" name="deskripsi"></textarea>
                                            </div>
                                        </div>
                                        <!-- <div>
                                            isi event<textarea id="editor1" name="isi_event" rows="10" cols="80" placeholder="Isi Berita..."></textarea>
                                        </div> -->
                                        <br />
                                        <div class="form-group">
                                            foto<input type="file" name="foto" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            lokasi<input type="text" class="form-control" id="pac-input" name="lokasi" placeholder="Lokasi">
                                            <input type="text" name="longlat" id="latlong" hidden="">
                                            <div id="map"></div>
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