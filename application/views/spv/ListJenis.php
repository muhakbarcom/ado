<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="container-fluid pt-4 px-4">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="h4 mb-4">Data Analisis Daerah Operasi</h6>
                    <?php echo $this->session->flashdata('pesan') ?>

                    <form method="post" action="<?= base_url('spv/analisis/analisis_aksi') ?>">
                        <div class="form-group mb-3">
                            <label> Jenis Daerah Operasi </label>
                            <!-- <input type="text" name="jenis_ado" placeholder="Jenis Daerah Operasi" class="form-control"> -->
                            <select class="form-control" name="jenis_ado" id="">
                                <option>-- Pilih Jenis --</option>
                                <?php foreach ($jenis_ado_select as $value) : ?>
                                    <option value="<?= $value->jenis_ado ?>"><?= $value->jenis_ado ?></option>
                                <?php endforeach ?>
                            </select>
                            <?= form_error('jenis_ado', '<div class="text-danger small ml-2">', '</div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary mr-3">Proses</button>
                    </form>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="rounded h-100 p-1">


                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Potensi</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($data as $jns) :
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $jns->nama_ado ?></td>
                                        <td><?= $jns->alamat_ado ?></td>
                                        <td><?= $jns->estimasi ?> / hari</td>
                                        <td>
                                            <a href="<?= base_url("spv/analisis/edit/") . $jns->id_ado  ?>" class="btn btn-primary btn-sm">Analisis</a> |
                                            <?php if ($jns->status == 'Sudah Prospek') : ?>
                                                <a href="<?= base_url("spv/analisis/un_validasi/$jns->id_ado/$jns->jenis_ado")  ?>" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                            <?php else : ?>
                                                <a href="<?= base_url("spv/analisis/validasi/$jns->id_ado/$jns->jenis_ado")  ?>" class="btn btn-secondary btn-sm"><i class="fa fa-check"></i></a>
                                            <?php endif ?>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <?php
                    $jenis_ado = array();
                    $estimasi = array();
                    foreach ($jenis_data as $data) {
                        $jenis_ado[] = $data->nama_ado;
                        $estimasi[] = $data->estimasi;
                    }
                    ?>
                    <div class="chart-container" style="height:20vh; width:40vw">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<script src="<?php echo base_url(); ?>assets/new/chart.min.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        data: {
            labels: <?php echo json_encode($jenis_ado) ?>,
            datasets: [{
                label: "Grafik Timeline",
                backgroundColor: 'rgb(0, 177, 228)',
                borderColor: 'rgb(0, 177, 228   )',
                data: <?php echo json_encode($estimasi) ?>,
            }]

        },
        options: {
            layout: {
                padding: {
                    left: 150,
                    right: 150,
                    top: 0,
                    bottom: 0
                }
            }


        }

        // Configuration options go here
    });
</script>