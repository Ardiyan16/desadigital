<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">View Tabel Data Admin</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No Telepon</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Foto</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($admin as $admin) : ?>
                                <tr>
                                    <th><?= $admin->nama_lengkap ?></th>
                                    <th><?= $admin->tempat_lahir ?></th>
                                    <th><?= $admin->tanggal_lahir ?></th>
                                    <th><?= $admin->no_telepon ?></th>
                                    <th><?= $admin->alamat ?></th>
                                    <th><?= $admin->jenis_kelamin ?></th>
                                    <th><?= $admin->status ?></th>
                                    <th><?= $admin->email ?></th>
                                    <td>
                                        <img src="<?php echo base_url('assets/img/foto_profil/' . $admin->foto) ?>" width="64" />
                                    </td>
                                    <th>
                                        <a onclick="deleteConfirm" href="<?php echo site_url('admin/register/delete/' . $admin->id_pengguna) ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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