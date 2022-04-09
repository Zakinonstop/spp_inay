<div class="card card-success">
    <div class="card-header">

        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="<?= base_url('input_transaksi/add_save/' . $data_tr_santri->id_data_santri) ?>" method="POST">
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
                <label for="Nama">Status : </label>
                <label for="Nama">
                    <?php 
                                if ($data_tr_santri->status == 1) {
                                    echo 'Santri Aktif';
                                }elseif ($data_tr_santri->status == 2) {
                                    echo 'Pengurus';
                                }elseif ($data_tr_santri->status == 3) {
                                    echo 'Ustadz / Ustadzah';
                                }elseif ($data_tr_santri->status == 4) {
                                    echo 'Alumni';
                                }
                            ?>
                </label>
                
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
                <label for="Nama">Potongan : </label>
                <label for="Nama">
                    <?php
                    if ($data_tr_santri->status == 2) {
                        echo 20000;
                    }elseif ($data_tr_santri->status == 3) {
                        echo $data_tr_santri->nominal * 50/100 ;
                    }else {
                        echo 0;
                    }
                   ?>
                </label>
            </div>

            <div class="form-group">
                <label for="Nama">Jumlah Bayar : </label>
                <input type="number" class="form-control" name="jumlah_bayar" id="jumlah_bayar" value="<?= $data_tr_santri->nominal ?>">
                <input hidden type="text" class="form-control" name="id_transaksi" id="id_transaksi" value="<?= $data_tr_santri->id_data_transaksi ?>">
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>