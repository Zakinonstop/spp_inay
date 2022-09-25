<div class="row">
    <div class="col-lg-12">
        <div class="card card-info card-outline">
            <div class="card-body">
                <h4 class="card-title"><b>Data Santri</b></h4>
                <p class="card-text">
                    Ini adalah halaman dimana para orang tua dapat melihat riwayat pembayaran spp putra-putrinya.
                </p>
            </div>
        </div><!-- /.card -->
    </div>
    <!-- /.col-md-6 -->

</div>

<!-- Default box -->
<div class="card card-secondary">
    <!-- <div class="card-header">
        Data Santri
    </div> -->

    <!-- /.card-header -->
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row d-flex">
                <div class="col-6">
                    <!-- <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div> -->

                </div>

                <div class="col-6">

                    <div class="dataTables_length float-right" id="example1_length">
                        <!-- <a href="<?= base_url('dashboard_tamu/add') ?>" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a> -->
                    </div>
                </div>

            </div>
            <br>
            <div class="row d-flex">
                <div class="col-sm-8">
                </div>
                <div class="col-sm-4">
                    <div class="dataTables_length float-right" id="example1_length">
                        <!-- <a href="<?= base_url('dashboard_tamu/add') ?>" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a> -->
                    </div>
                    <form action="" method="post">
                        <div class="input-group input-group-md">
                            <input type="text" class="form-control" placeholder="Cari data santri.." name="keyword" autocomplete="off">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Cari">Cari</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div>
                <?php if ($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data <strong>Berhasil</strong> <?= $this->session->flashdata('message'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>

            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-sm dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Nama</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Kelas</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Alamat: activate to sort column ascending">Alamat</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="3" aria-label="Kelas: activate to sort column ascending">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($data_santri as $ds) {
                                $no++ ?>
                                <tr role="row" class="odd">
                                    <td class="text-center"><?= ++$start ?></td>
                                    <td><?= $ds->nama; ?></td>
                                    <td><?= $ds->nama_kelas; ?></td>
                                    <td><?= $ds->alamat; ?></td>
                                    <td style="padding: 5px;" width="50">
                                        <a type="button" class="btn btn-sm btn-info" href="<?= base_url('dashboard_tamu/view/') ?><?= $ds->id ?>">Lihat</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php
                    if (empty($data_santri)) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data Santri Tidak Di Temukan.
                    </div>';
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Menampilkan <?= $no; ?> dari <?= $jumlah_data; ?> data</div>
                </div>
                <div class="col-sm-12 col-md-7 float-right">
                    <div class="dataTables_paginate paging_simple_numbers float-right" id="example1_paginate">
                        <?= $pagination; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->