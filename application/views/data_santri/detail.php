<!-- <div class="card">
    <img src="<?= base_url('assets/foto/')?><?= $data->foto?>" alt="">
</div> -->

<div class="row">
    <div class="col-md-8">
        
<div class="card card-success">
    <div class="card-header">
        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
            <div class="form-group">
            <label for="Nama">Nama : </label>
            <label for="Nama"><?= $data->nama ?></label>
        </div>
        <div class="form-group">
            <label for="alamat">NIS : </label>
            <label for="alamat"><?= $data->nis ?></label>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat : </label>
            <label for="alamat"><?= $data->alamat ?></label>
        </div>
        <div class="form-group">
            <label for="jenis kelamin">Jenis Kelamin : </label>
            <label for="jenis kelamin"><?= $data->jenis_kelamin ?></label>
        </div>
        <div class="form-group">
            <label for="kamar">Kamar : </label>
            <label for="kamar"><?= $data->nama_kamar ?></label>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas : </label>
            <label for="kelas"><?= $data->nama_kelas ?></label>
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor Handphone : </label>
            <label for="no_hp"><?= $data->no_hp ?></label>
        </div>
        <div class="form-group">
            <label for="tgl_masuk">Tanggal Masuk Pondok : </label>
            <label for="tgl_masuk"><?= $data->tgl_masuk ?></label>
        </div>
            </div>
            <div class="col-md-4">
                <div class="card card-success">
                <img src="<?= base_url('assets/foto/')?><?= $data->foto?>" alt="">
                </div>
            </div>
        </div>


      

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a type="button" class="btn btn-success" href="<?= base_url('data_santri') ?>">Kembali</a>
    </div>

</div>
    </div>

   
</div>
