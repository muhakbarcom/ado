<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Daerah Operasi</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <form method="POST" action="<?= base_url('admin/daop/tambah_ado_aksi') ?>" enctype="multipart/form-data">
                       
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama_ado" class="form-control">
                            <?= form_error('nama_ado','<span class="text-small text-danger">','</span>')?>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat_ado" class="form-control">
                            <?= form_error('alamat_ado','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telepon</label>
                            <input type="text" name="telepon_ado" class="form-control">
                            <?= form_error('telepon_ado','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Ado</label>
                            <select class="form-control" name="jenis_ado" id="">
                                <option>--Pilih Jenis Ado--</option>
                                <option value="Kecamatan">Kecamatan</option>
                                <option value="Sekolah/Universitas">Sekolah/Universitas</option>
                                <option value="Perusahaan">Perusahaan</option>
                                <option value="Pasar">Pasar</option>
                                <option value="Bank">Bank</option>
                                <option value="Asuransi">Asuransi</option>
                                <option value="Non-Bank">Non-Bank</option>
                            </select>
                            <?= form_error('jenis_ado','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <div class="form-group">
                            <label for="">Foto Ado</label>
                            <input type="file" name="foto_ado" class="form-control">
                            <?= form_error('foto_ado','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan_ado" class="form-control">
                            <?= form_error('keterangan_ado','<span class="text-small text-danger">','</span>')?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    </form>