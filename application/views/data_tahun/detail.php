<div class="card card-success">
    <div class="card-header">
        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <div class="card-body">
        <div class="form-group">
            <label for="Nama">Nama Tahun : </label>
            <label for="Nama"><?= $data->nama_tahun ?></label>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a type="button" class="btn btn-success" href="<?= base_url('data_tahun') ?>">Kembali</a>
    </div>

</div>