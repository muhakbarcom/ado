<?php foreach ($detail as $dt ) : ?>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col md-5"><img src="<?= base_url().'/upload/'.$dt->foto_ado?>" alt="" width="100px">
                                    </div>
                                    
                                    <table class="table">
                                        <tr>
                                            <td>Nama Ado</td>
                                            <td>
                                                <?php echo $dt->nama_ado ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>
                                                <?php echo $dt->alamat_ado ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Telepon</td>
                                            <td>
                                                <?php echo $dt->telepon_ado ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Jenis Ado</td>
                                            <td>
                                                <?php echo $dt->jenis_ado ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Keterangan</td>
                                            <td>
                                                <?php echo $dt->keterangan_ado ?>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    
                                    <a class="btn btn-sm btn-primary" href="<?= base_url('admin/laporan') ?>">Kembali</a>

                                    
                                    
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>