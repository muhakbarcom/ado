                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Ubah Data Daerah Operasi</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <?php foreach($daop as $dp) : ?>
                    
                    <form method="POST" action="<?= base_url('spv/daop/update_ado_aksi') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> Nama </label>
                            <input type="hidden" name="id_ado" value="<?= $dp->id_ado ?>">
                            <input type="text" name="nama_ado" class="form-control" value="<?= $dp->nama_ado ?>">
                            <?= form_error('nama_ado','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group">
                            <label> Alamat </label>
                            <input type="text" name="alamat_ado" class="form-control" value="<?= $dp->alamat_ado ?>">
                            <?= form_error('alamat_ado','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group">
                            <label> Nomor Telepon </label>
                            <input type="text" name="telepon_ado" class="form-control" value="<?= $dp->telepon_ado ?>">
                            <?= form_error('telepon_ado','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group">
                                        <label>Jenis Ado</label>
                                        <select name="jenis_ado" class="form-control">
                                            <option value="<?= $dp->jenis_ado ?>"><?= $dp->jenis_ado ?></option>
                                            <?php foreach ($jenis as $js) :?>
                                                <option value="<?= $js->jenis_ado ?>">
                                                <?= $js->jenis_ado?>
                                                </option>
                                            <?php endforeach;?>
                                        </select>
                                        <?= form_error('jenis_ado','<div class="text-small text-danger">','</div>') ?>
                                    </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="foto_ado" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Keterangan </label>
                            <input type="text" name="keterangan_ado" class="form-control" value="<?= $dp->keterangan_ado ?>">
                            <?= form_error('keterangan_ado','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group">
                            <label> Status </label>
                            <select class="form-control" name="status" id="">
                                <option value="<?= $dp->status ?>"><?= $dp->status ?></option>
                                <option value="Belum Prospek">Belum Prospek</option>
                                <option value="Sudah Prospek">Sudah Prospek</option>
                            </select>
                            <?= form_error('status','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>
                    </form>
                <?php endforeach; ?>