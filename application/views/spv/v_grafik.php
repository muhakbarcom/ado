  <form method="POST" action="<?= base_url('spv/laporan/')?>">
        
        <div class="form-group">
            <div class="col-md-3">
            <label> Dari Tanggal</label>
            <div class="form-group input-group">
            
            <input type="date" name="dari" class="form-control">
            <?= form_error('dari','<span class="text-small text-danger">','</span>') ?>
            </div>
        </div>
        </div>
        <div class="form-group mb-3">
            <div class="col-md-3">
            <label> Sampai Tanggal</label>
            <div class="form-group input-group">
            
            <input type="date" name="sampai" class="form-control">
            <?= form_error('sampai','<span class="text-small text-danger">','</span>') ?>
            </div>
        </div>
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</button>    
          </div>
    </form>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
<script src="<?php echo base_url();?>assets/new/jquery.js"></script>
<script src="<?php echo base_url();?>assets/new/highcharts.js"></script>
<script src="<?php echo base_url() ?>assets/new/jquery-1.9.1.min.js"></script>
<!-- end load library -->
 
<?php
foreach ($data as $data) {
    $jenis_ado[] = $data->jenis_ado;
    $estimasi[] = $data->total;
}
?>
<div class="chart-container" style="position: relative; height:20vh; width:60vw">
    <canvas id="myChart"></canvas>
</div>
<script src="<?php echo base_url(); ?>assets/new/chart.min.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        data: {
            labels:<?php echo json_encode($jenis_ado) ?>,
            datasets: [{
                    label: "Grafik Timeline",
                    backgroundColor: 'rgb(0, 177, 228)',
                    borderColor: 'rgb(0, 177, 228   )',
                    data:<?php echo json_encode($estimasi) ?>,
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
    </section>

    
  </div>

  <!-- /.content-wrapper -->