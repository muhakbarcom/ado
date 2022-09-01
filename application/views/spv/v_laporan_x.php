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


  <!-- /.content-wrapper -->