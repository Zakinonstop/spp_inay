<div class="card card-success">
    <div class="card-header">
        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <div class="card-body">
        <div class="form-group">
            <label for="Tahun">Tahun : </label>
            <label for="Tahun"><?= $data->nama_tahun ?></label>
        </div>
        <div class="form-group">
            <label for="bulan">Bulan : </label>
            <label for="bulan"><?= $data->nama_bulan ?></label>
        </div>
        <div class="form-group">
            <label for="nominal">nominal : </label>
            <label for="nominal"><?= $data->nominal ?></label>
        </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a type="button" class="btn btn-success" href="<?= base_url('data_santri') ?>">Kembali</a>
    </div>

</div>