<div class="card card-success">
    <div class="card-header">

        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= form_open_multipart('data_santri/add_save') ?>

        <div class="card-body">
            <?php if ($this->session->flashdata('message')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php endif; ?>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="alamat" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
            </div>
            <div class="form-group">
                <label for="kamar">Kamar</label>
                <select name="kamar" id="kamar" class="form-control">
                    <?php foreach ($data_kamar as $dk) { ?>
                        <option value="<?= $dk->id_kamar ?>"><?= $dk->nama_kamar ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas" class="form-control">
                    <?php foreach ($data_kelas as $dk) { ?>
                        <option value="<?= $dk->id_kelas ?>"><?= $dk->nama_kelas ?></option>
                        <?php } ?>
                    </select>
                </div>
                
            <div class="form-group">
                <label for="no_hp">Nomor Handphone</label>
                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Hp">
            </div>

            <div class="form-group">
                <label for="tgl_masuk">Tanggal Masuk Pondok</label>
                <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk" >
            </div>
            
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto" >
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success" value="upload">Submit</button>
        </div>
    <?= form_close();?>
</div>