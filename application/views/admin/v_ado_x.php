                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Daerah Operasi</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <a href="<?= base_url('admin/daop/tambah_data') ?>" class="btn btn-primary mb-3"> Tambah Data</a>
                </div>
                    <?= $this->session->flashdata('pesan'); ?>
                    <table class="table  table-striped table-hover table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Alamat</th> 
                            <th>No.Telepon</th>
                            <th>Jenis Daerah Operasi</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                        <?php 
                            $no = 1;
                            foreach ($daop as $dp) :?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <img width="50px" src="<?= base_url().'/upload/'.$dp->foto_ado ?>" alt="">
                                        </td>
                                    <td><?= $dp->nama_ado ?></td>
                                    <td><?= $dp->alamat_ado ?></td>
                                    <td><?= $dp->telepon_ado ?></td>
                                    <td><?= $dp->jenis_ado ?></td>
                                    <td><?= $dp->keterangan_ado ?></td>
                                    <td>
                                        <div class="row">
                                        <a href="<?= base_url('admin/daop/update_data/'.$dp->id_ado) ?>" class="btn btn-sm btn-primary mr-2"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('admin/daop/delete_ado/'.$dp->id_ado) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>  
                                        </div>
                                    </td>
                                </tr>

                        <?php endforeach; ?>
                         
                    </table>