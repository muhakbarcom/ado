                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Laporan Daerah Operasi</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    
                </div>
                    <?= $this->session->flashdata('pesan'); ?>
                    <table class="table  table-striped table-hover table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Jenis Daerah Operasi</th>
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
                                    <td><?= $dp->jenis_ado ?></td>
                                    <td><div class="row">
                                        <a href="<?= base_url('manager/daop/detail/'.$dp->id_ado) ?>" class="btn btn-sm btn-primary mr-2 ml-2"><i class="fas fa-eye"></i></a>
                                        <a href="<?= base_url('manager/daop/print_id/'.$dp->id_ado) ?>" class="btn btn-sm btn-danger"><i class="fas fa-print"></i></a>  
                                        </div>
                                    </td>
                                   
                                </tr>

                        <?php endforeach; ?>
                         
                    </table>
                    <a href="<?= base_url('manager/daop/print_data') ?>" class="btn btn-info mb-3 ml-3"> Print Data</a>