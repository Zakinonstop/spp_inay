<div class="card card-success">
    <div class="card-header">

        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="<?= base_url('jurnal_umum/edit_save/') ?><?= $data_jurnal_umum->id_jurnal_umum?>" method="POST">
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
                <label for="Nama">Nominal Penerimaan</label>
                <input type="text" class="form-control" name="pemasukan" placeholder="-" value="<?= $data_jurnal_umum->pemasukan?>"
                <?php if (!$data_jurnal_umum->pemasukan) {
                   echo 'disabled';
                }?>
                >
            </div>

            <div class="form-group">
                <label for="Nama">Nominal Pengeluaran</label>
                <input type="text" class="form-control" name="pengeluaran" placeholder="-" value="<?= $data_jurnal_umum->pengeluaran?>" 
                <?php if (!$data_jurnal_umum->pengeluaran) {
                   echo 'disabled';
                }?>
                >
            </div>

            <div class="form-group">
                <label for="Nama">Tanggal </label>
                <input type="date" class="form-control" name="tgl_jurnal" value="<?= $data_jurnal_umum->tgl_jurnal?>">
            </div>

            <div class="form-group">
                <label for="Nama">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" placeholder="cth : jariah bendahara" value="<?= $data_jurnal_umum->keterangan?>">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>