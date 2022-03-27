<div class="card card-success">
    <div class="card-header">
        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= form_open_multipart('data_santri/edit_save/'. $data->id) ?>
        <div class="card-body">
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="<?= $data->nama ?>">
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tgl Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Masukkan tgl_lahir" value="<?= $data->tgl_lahir ?>">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="nama" placeholder="Masukkan alamat" value="<?= $data->alamat ?>">
            </div>

            <div class="form-group">
                <label for="kamar">Kamar</label>
                <select name="kamar" id="kamar" class="form-control">
                    <?php foreach ($data_kamar as $dk) { ?>
                        <option value="<?= $dk->id_kamar ?>" <?php if ($dk->id_kamar == $data->id_kamar) {
                                                                    echo 'selected';
                                                                } ?>><?= $dk->nama_kamar ?></option>
                    <?php } ?>
                </select>
            </div>
           
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="L" <?php if ($data->jenis_kelamin == 'L') {
                        echo 'selected';
                    }?>>Laki Laki</option>
                    <option value="P" <?php if ($data->jenis_kelamin == 'P') {
                        echo 'selected';
                    }?>>Perempuan</option>
                </select>
            </div>


            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas" class="form-control">
                    <?php foreach ($data_kelas as $dk) { ?>
                        <option value="<?= $dk->id_kelas ?>" <?php if ($dk->id_kelas == $data->id_kelas) {
                                                                    echo 'selected';
                                                                } ?>><?= $dk->nama_kelas ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor Handphone</label>
                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Handphone" value="<?= $data->no_hp ?>">
            </div>

            <div class="form-group">
                <label for="tgl_masuk">Tanggal Masuk Pondok</label>
                <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk" value="<?= $data->tgl_masuk ?>">
            </div>
            
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="hidden" name="foto_asli" id="foto_asli" value="<?= $data->foto ?>">
                <input type="file" class="form-control" name="foto" id="foto" value="<?= $data->foto ?>">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    <?= form_close();?>
</div>