<div class="card card-success">
    <div class="card-header">

        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="<?= base_url('data_tagihan/edit_save/' . $data->id) ?>" method="POST">
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
                <label for="tahun">Tahun</label>
                <select name="tahun" id="tahun" class="form-control">
                    <?php foreach ($data_tahun as $dk) { ?>
                        <option value="<?= $dk->id_tahun ?>" <?php if ($dk->id_tahun == $data->id_tahun) {
                                                                    echo 'selected';
                                                                } ?>><?= $dk->nama_tahun ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="bulan">Bulan</label>
                <select name="bulan" id="bulan" class="form-control">
                    <?php foreach ($data_bulan as $dk) { ?>
                        <option value="<?= $dk->id_bulan ?>" <?php if ($dk->id_bulan == $data->id_bulan) {
                                                                    echo 'selected';
                                                                } ?>><?= $dk->nama_bulan ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nominal">Nominal</label>
                <input type="text" class="form-control" name="nominal" placeholder="Masukkan nominal" value="<?= $data->nominal ?>">
            </div>

        </div>
        <!-- /.card-body -->

        <div class=" card-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>