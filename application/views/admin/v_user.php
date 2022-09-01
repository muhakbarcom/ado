                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data User</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <a href="<?= base_url('admin/user/tambah_data') ?>" class="btn btn-primary mb-3"> Tambah Data</a>
                </div>
                    <?= $this->session->flashdata('pesan'); ?>
                    <table class="table  table-striped table-hover table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Alamat</th> 
                            <th>No.Telepon</th>
                            <th>Jabatan</th>
                            <th>Username</th>
                            <th>Aksi</th>
                        </tr>
                        <?php 
                            $no = 1;
                            foreach ($user as $us) :?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <img width="50px" src="<?= base_url().'/upload/'.$us->foto_user ?>" alt="">
                                        </td>
                                    <td><?= $us->nama_user ?></td>
                                    <td><?= $us->alamat_user ?></td>
                                    <td><?= $us->telpon_user ?></td>
                                    <td><?= $us->jabatan ?></td>
                                    <td><?= $us->username ?></td>
                                    <td>
                                        <div class="row">
                                        <a href="<?= base_url('admin/user/update_user/'.$us->id_user) ?>" class="btn btn-sm btn-primary mr-2"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('admin/user/delete_user/'.$us->id_user) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>  
                                        </div>
                                    </td>
                                </tr>

                        <?php endforeach; ?>
                         
                    </table>