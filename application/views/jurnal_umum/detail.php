<div class="card card-success">
    <div class="card-header">
        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <div class="card-body">
        <div class="form-group">
            <label for="Nama">Nama : </label>
            <label for="Nama"><?= $data->nama ?></label>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat : </label>
            <label for="alamat"><?= $data->alamat ?></label>
        </div>
        <div class="form-group">
            <label for="kamar">Kamar : </label>
            <label for="kamar"><?= $data->nama_kamar ?></label>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas : </label>
            <label for="kelas"><?= $data->nama_kelas ?></label>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a type="button" class="btn btn-success" href="<?= base_url('data_santri') ?>">Kembali</a>
    </div>

</div>