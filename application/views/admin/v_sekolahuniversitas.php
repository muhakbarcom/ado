                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Daerah Operasi sekolah universitas</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <a href="<?= base_url('admin/sekolahuniversitas/tambah_data') ?>" class="btn btn-primary mb-3"> Tambah Data</a>

                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->session->flashdata('pesan'); ?>
                            <table class="table table-responsive  table-striped table-hover table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No.Telepon</th>
                                    <th>Jenis Daerah Operasi</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($sekolahuniversitas as $sekolahuniversitas) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td>
                                            <img width="50px" src="<?= base_url() . '/upload/' . $sekolahuniversitas->foto_ado ?>" alt="">
                                        </td>
                                        <td><?= $sekolahuniversitas->nama_ado ?></td>
                                        <td><?= $sekolahuniversitas->alamat_ado ?></td>
                                        <td><?= $sekolahuniversitas->telepon_ado ?></td>
                                        <td><?= $sekolahuniversitas->jenis_ado ?></td>
                                        <td><?= $sekolahuniversitas->keterangan_ado ?></td>
                                        <td><?= $sekolahuniversitas->status ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/sekolahuniversitas/update_data/' . $sekolahuniversitas->id_ado) ?>" class="btn btn-sm btn-primary mr-2"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('admin/sekolahuniversitas/delete_sekolahuniversitas/' . $sekolahuniversitas->id_ado) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            </table>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= base_url('admin/daop') ?>" class="btn btn-danger mb-3">Kembali</a>
                    </div>
                </div>