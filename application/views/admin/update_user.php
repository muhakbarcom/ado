                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Ubah Data User</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <?php foreach ($user as $us) : ?>

                        <form method="POST" action="<?= base_url('admin/user/update_user_aksi') ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> Nama </label>
                                <input type="hidden" name="id_user" value="<?= $us->id_user ?>">
                                <input type="text" name="nama_user" class="form-control" value="<?= $us->nama_user ?>">
                                <?= form_error('nama_user', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Alamat </label>
                                <input type="text" name="alamat_user" class="form-control" value="<?= $us->alamat_user ?>">
                                <?= form_error('alamat_user', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Nomor Telepon </label>
                                <input type="text" name="telpon_user" class="form-control" value="<?= $us->telpon_user ?>">
                                <?= form_error('telpon_user', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Jabatan </label>
                                <select class="form-control" name="jabatan" id="">
                                    <option value="<?= $us->jabatan ?>"><?= $us->jabatan ?></option>
                                    <option value="Admin">Admin</option>
                                    <option value="SPV">SPV</option>
                                    <option value="Executive Manager">Executive Manager</option>
                                </select>
                                <?= form_error('jabatan', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="foto_user" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="username" class="form-control" value="<?= $us->username ?>">
                                <?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Password </label>
                                <input type="password" name="password" class="form-control" value="<?= $us->password ?>">
                                <?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </form>
                    <?php endforeach; ?>