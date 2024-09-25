<div class="card card-success">
    <div class="card-header">

        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="<?= base_url('data_tahun/add_save') ?>" method="POST">
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
                <label for="Nama">Nama tahun</label>
                <input type="text" class="form-control" autocomplete="off" name="nama" placeholder="1445 H">
            </div>

            <div class="form-group">
                <label for="Nama">Tagihan Santri</label>
                <input type="text" class="form-control" autocomplete="off" name="nominal" placeholder="175000">
            </div>

            <div class="form-group">
                <label for="Nama">Tagihan Ustadz</label>
                <input type="text" class="form-control" autocomplete="off" name="nominal_ustadz" placeholder="100000">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>