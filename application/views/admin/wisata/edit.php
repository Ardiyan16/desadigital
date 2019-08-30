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
                                <h3><?= $this->session->flashdata('success'); ?></h3>
                                <h3 class="box-title" style="margin-bottom: 20px;">Edit Wisata
                                    <small>Edit Wisata Desa</small>
                                </h3>
                                <div class="box-body">
                                    <form action="<?= site_url('admin/Wisata/editan'); ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_wisata" value="<?php echo $wisata->id_wisata ?>" />
                                        <div class="form-group">
                                            Kategori
                                            <select class="form-control" name="id_kategori">
                                                <option value="1">Wisata</option>
                                                <option value="2">Kuliner</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            Nama Wisata<input type="text" class="form-control" value="<?php echo $wisata->id_wisata ?>" name="nama_wisata" placeholder="Nama Wisata...">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <div class="box-body pad">
                                                <textarea id="editor1" rows="10" cols="150" name="deskripsi"> <?php echo $wisata->deskripsi ?></textarea>
                                            </div>
                                        </div>
                                        <!-- <div>
                                            isi event<textarea id="editor1" name="isi_event" rows="10" cols="80" placeholder="Isi Berita..."></textarea>
                                        </div> -->
                                        <br />
                                        <div class="form-group">
                                            Foto<input type="file" name="foto" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            Lokasi<input type="text" value="<?php echo $wisata->lokasi ?>" class="form-control" name="lokasi" placeholder="Subject">
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