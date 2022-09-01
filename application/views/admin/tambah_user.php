<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data User</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <form method="POST" action="<?= base_url('admin/user/tambah_user_aksi') ?>" enctype="multipart/form-data">
                       
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama_user" class="form-control">
                            <?= form_error('nama_user','<span class="text-small text-danger">','</span>')?>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat_user" class="form-control">
                            <?= form_error('alamat_user','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telepon</label>
                            <input type="text" name="telpon_user" class="form-control">
                            <?= form_error('telpon_user','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <select class="form-control" name="jabatan" id="">
                                <option>--Pilih Jabatan--</option>
                                <option value="Admin">Admin</option>
                                <option value="SPV">SPV</option>
                                <option value="Executive Manager">Executive Manager</option>
                            </select>
                            <?= form_error('jabatan','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <div class="form-group">
                            <label for="">Foto User</label>
                            <input type="file" name="foto_user" class="form-control">
                            <?= form_error('foto_user','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control">
                            <?= form_error('username','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                            <?= form_error('password','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    </form>