<div class="card card-success">
    <div class="card-header">

        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="<?= base_url('input_transaksi/edit_save/' . $data_tr_santri->id_data_santri) ?>" method="POST">
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
                <input type="hidden" name="sudah_bayar" value="<?= $data_tr_santri->jumlah_bayar ?>">
            </div>

            <div class="form-group">
                <label for="Nama">Kurangan : </label>
                <label for="Nama"><?= $data_tr_santri->nominal - $data_tr_santri->jumlah_bayar  ?></label>
            </div>

            <div class="form-group">
                <label for="Nama">Jumlah Bayar : </label>

                <input type="number" class="form-control" name="jumlah_bayar" id="jumlah_bayar" value="<?= $data_tr_santri->nominal - $data_tr_santri->jumlah_bayar  ?>">
                <input hidden type="text" class="form-control" name="id_transaksi" id="id_transaksi" value="<?= $data_tr_santri->id_data_transaksi ?>">

            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>