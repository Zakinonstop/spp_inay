<div class="card card-success">
    <div class="card-header">
        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->

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
                <label for="Nama">Nama : </label>
                <label for="Nama"><?= $data_tr_santri->nama ?></label>
            </div>


            <div class="form-group">
                <label for="Nama">Bulan : </label>
                <label for="Nama"><?= $data_tr_santri->nama_bulan ?></label>
            </div>

            <div class="form-group">
                <label for="Nama">Tahun : </label>
                <label for="Nama"><?= $data_tr_santri->nama_tahun ?></label>
            </div>

            <div class="form-group">
                <label for="Nama">Besar Tagihan : </label>
                <label for="Nama"><?= $data_tr_santri->nominal ?></label>
            </div>

            <div class="form-group">
                <label for="Nama">Sudah Bayar : </label>
                <label for="Nama"><?= $data_tr_santri->jumlah_bayar ?></label>
            </div>

            <div class="form-group">
                <label for="Nama">Keterangan : </label>
                <label for="Nama">
                <?php
                if ($data_tr_santri->keterangan == 1 ) {
                    echo 'Lunas';
                }else {
                    echo 'Belum Lunas';
                }
                ?>
                </label>
            </div>

        </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a type="button" class="btn btn-success" href="<?= base_url('input_transaksi/view/') ?><?= $data->id_data_santri ?>">Kembali</a>
    </div>

</div>