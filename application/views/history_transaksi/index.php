<!-- Default box -->
<div class="card card-secondary">

    <div class="card-header">
        History 
    </div>
    <!-- /.card-header -->
    <div class="card-body card-outline">
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

                    <!-- <div class="dataTables_length float-right" id="example1_length">
                        <a href="<?= base_url('history_transaksi/add') ?>" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a>
                    </div> -->
                </div>

            </div>
            <br>
            <div class="row d-flex">
                <div class="col-9">
                    
                </div>

                <div class="col-3">

                    <div class="dataTables_length float-right" id="example1_length">
                        <!-- <a href="<?= base_url('history_transaksi/add') ?>" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a> -->
                    </div>

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
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Nama</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Alamat: activate to sort column ascending">Tahun Bayar</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kamar: activate to sort column ascending">Bulan Bayar</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Besar Tagihan</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Jumlah Bayar</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Sisa / Kurang</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Keterangan</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Created By</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Waktu Bayar</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 0;
                            $urut = 0;
                            foreach ($history_transaksi as $ds) {

                                $no++
                            ?>

                                <tr role="row" class="odd">
                                    <!-- <td class="sorting_1"></td> -->
                                    <td><?= ++$start ?></td>
                                    <td><?= $ds->nama; ?></td>
                                    <td><?= $ds->nama_tahun; ?></td>
                                    <td><?= $ds->nama_bulan; ?></td>
                                    <td><?= $ds->nominal; ?></td>
                                    <!-- <td><?= $ds->jumlah_bayar; ?></td> -->
                                    <td>
                                        <?php
                                        $cek_keterangan = $ds->keterangan;
                                        if ($ds->jumlah_bayar >= 0) {
                                            echo $ds->jumlah_bayar;
                                        } else if ($urut == 0) { ?>
                                            <?php $urut++; ?>
                                            <a type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Input Transaksi" href="<?= base_url('history_transaksi/add/') ?><?= $ds->id_data_transaksi ?>">Input Transaksi</a>
                                            <?php } else { ?>
                                                <a type="button" aria-disabled="true" class="btn btn-sm btn-primary disabled" data-toggle="tooltip" data-placement="top" title="Input Transaksi" href="<?= base_url('history_transaksi/add/') ?><?= $ds->id_data_transaksi ?>">Input Transaksi</a>
                                        <?php } ?>

                                    </td>
                                    <td>
                                        <?php if ($ds->sisa > 0) { ?>
                                            <?php $urut--; ?>
                                            <a href=""><?= $ds->sisa; ?></a>
                                            <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                                <?= $ds->sisa; ?>
                                            </button> -->
                                            <!-- <a type="button" class="btn btn-sm btn-primary" onclick="confirm('Uang sisa digunakan untuk spp bulan selanjutnya ?')" data-toggle="tooltip" data-placement="top" title="Untuk bulan Selanjutnya" href="<?= base_url('history_transaksi/next/') ?><?= $ds->id_data_transaksi ?>">next</a> -->
                                            <!-- <a type="button" class="btn btn-sm btn-primary" onclick="confirm('Untuk Kembalian ?')" data-toggle="tooltip" data-placement="top" title="Untuk bulan Selanjutnya" href="<?= base_url('history_transaksi/kembalian/') ?><?= $ds->id_data_transaksi ?>">Kembalian</a> -->
                                            <?php } else if ($ds->sisa < 0) { ?>
                                                <?php $urut--; ?>
                                                <p><?= $ds->sisa; ?></p>
                                                <?php } else { ?>
                                                    <?= $ds->sisa; ?>
                                                    <?php } ?>
                                                    
                                                    
                                                </td>
                                                
                                                <td>
                                            <?php
                                            if ($ds->keterangan == 1) { ?>
                                            <h6><span class="badge badge-pill badge-success">LUNAS</span></h6>
                                            <!-- <a type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Lunas" href="#">Lunas</a> -->
                                            <?php } elseif ($ds->keterangan == '0') { ?>
                                                <h6><span class="badge badge-pill badge-success">BELUM LUNAS</span></h6>
                                                <!-- <a type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Belum Lunas" href="#">Belum Lunas</a> -->
                                                <?php } ?>
                                                <!-- <?= $ds->keterangan; ?> -->
                                            </td>
                                            
                                            <td><?= $ds->created_by; ?></td>
                                            <td><?= $ds->tanggal_bayar; ?></td>
                                        </tr>
                                        <?php
                            } ?>
                        </tbody>
                    </table>
                    <?php
                    if (empty($history_transaksi)) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data transaksi Tidak Di Temukan.
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Untuk Bulan Depan</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- /.content -->