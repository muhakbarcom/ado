<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="rounded h-100 p-4">
                    <h6 class="h4 mb-4">Form Masuk Analisis Daerah Operasi</h6>
                    <?php echo $this->session->flashdata('pesan') ?>

                    <form method="post" action="<?= base_url('admin/analisis/analisis_aksi') ?>">
                        <div class="form-group mb-3">
                            <label> Jenis Daerah Operasi </label>
                            <!-- <input type="text" name="jenis_ado" placeholder="Jenis Daerah Operasi" class="form-control"> -->
                            <select class="form-control" name="jenis_ado" id="">
                                <?php foreach ($jenis_ado as $value) : ?>
                                    <option value="<?= $value->jenis_ado ?>"><?= $value->jenis_ado ?></option>
                                <?php endforeach ?>
                            </select>
                            <?= form_error('jenis_ado', '<div class="text-danger small ml-2">', '</div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary mr-3">Proses</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>