<div class="card card-success">
    <div class="card-header">
        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="<?= base_url('data_tahun/edit_save/' . $data->id_tahun) ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="Nama">Nama Tahun</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= $data->nama_tahun ?>">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>