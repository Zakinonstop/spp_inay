<!-- Default box -->
<div class="card card-secondary">
    <div class="card-header">
        Tagihan
    </div>
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
                        <!-- <a href="<?= base_url('data_tagihan/add') ?>" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a> -->
                    </div>
                </div>

            </div>
            <br>
            <div class="row d-flex">
                <div class="col-9">

                </div>

                <div class="col-3">

                    <!-- <div class="dataTables_length float-right" id="example1_length">
                        <a href="<?= base_url('data_tagihan/add') ?>" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a>
                    </div>

                    <form action="" method="post">
                        <div class="input-group input-group-md">
                            <input type="text" class="form-control" placeholder="Cari data tagihan.." name="keyword">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Cari">Cari</button>
                            </span>
                        </div>
                    </form> -->
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
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Tahun</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Bulan</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Tagihan Santri</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Tagihan Ustadz</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="3" aria-label="Nama: activate to sort column ascending">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // var_dump($data_tagihan);
                            $no = 0;
                            foreach ($data_tagihan as $ds) {

                                $no++ ?>

                                <tr role="row" class="odd">
                                    <!-- <td class="sorting_1"></td> -->
                                    <td width="50"><?= ++$start ?></td>
                                    <td><?= $ds->nama_tahun; ?></td>
                                    <td><?= $ds->nama_bulan; ?></td>
                                    <td><?= $ds->nominal; ?></td>
                                    <td><?= $ds->tagihan_ustadz; ?></td>
                                    <td width="50">
                                        <a class="text-primary" data-toggle="tooltip" data-placement="top" title="Detail" href="<?= base_url('data_tagihan/detail/') ?><?= $ds->id ?>"><i class="fa fa-eye"></i></a>
                                    </td>
                                    <td width="50">
                                        <a class="text-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?= base_url('data_tagihan/edit/') ?><?= $ds->id ?>"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <!-- <td width="50">
                                        <a onclick="confirm('Anda Yakin ?')" class="text-danger" data-toggle="tooltip" data-placement="top" title="Hapus" href="<?= base_url('data_tagihan/hapus/') ?><?= $ds->id ?>"><i class="fa fa-trash"></i></a>
                                    </td> -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php
                    if (empty($data_tagihan)) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data tagihan Tidak Di Temukan.
                    </div>';
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing <?= $no; ?> of <?= $jumlah_data; ?> entries</div>
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