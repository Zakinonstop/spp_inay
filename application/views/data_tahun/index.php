<!-- Default box -->
<div class="card card-success">
    <div class="card-header">
        <a href="<?= base_url('data_tahun/add') ?>" type="button" class="btn btn-sm float-right btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
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
                    <table id="example1" class="table table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row" class="text-center">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Nama tahun</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Nominal Tagihan</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Tagihan Ustadz</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="3" aria-label="Nama: activate to sort column ascending">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($data_tahun as $ds) {
                                $no++ ?>
                                <tr role="row" class="odd text-center">
                                    <td width="50"><?= ++$start ?></td>
                                    <td><?= $ds->nama_tahun; ?></td>
                                    <td><?= $ds->nominal_tagihan; ?></td>
                                    <td><?= $ds->nominal_ustadz; ?></td>
                                    <td width="50">
                                        <a class="text-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?= base_url('data_tahun/edit/') ?><?= $ds->id_tahun ?>"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td width="50">
                                        <a onclick="confirm('Anda Yakin ?')" class="text-danger" data-toggle="tooltip" data-placement="top" title="Hapus" href="<?= base_url('data_tahun/hapus/') ?><?= $ds->id_tahun ?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php
                    if (empty($data_tahun)) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data tahun Tidak Di Temukan.
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
                        <!-- <?= $pagination; ?> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->