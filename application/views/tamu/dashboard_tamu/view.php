<!-- Default box -->
<div class="card card-secondary">
    <div class="card-header">
        History Transaksi
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row d-flex">
                <div class="col-6">
                    <?php
                    foreach ($nama as $key => $value) {
                        $nama = $value->nama;
                        echo '<b>' . $nama . '</b>';
                    }
                    ?>
                </div>

                <div class="col-6 text-right">
                    <?php
                    foreach ($tahun_tagihan as $key => $value) {
                        $tahun = $value->nama_tahun;
                        echo '<b>' . $tahun . '</b>';
                    }
                    ?>
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
                    <table id="example1" class="table table-bordered table-striped " role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="start: activate to sort column descending">No</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kamar: activate to sort column ascending">Bulan Tagihan</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Besar Tagihan</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Jumlah Bayar</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Sisa / Kurang</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Keterangan</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Waktu Bayar</th>
                                <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Created By</th> -->
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // $start = 0;
                            $urut = 0;
                            $urut2 = 0;
                            foreach ($input_transaksi as $ds) {

                                // $start++ ;
                                ?>

                                <tr role="row" class="odd">
                                    <!-- <td class="sorting_1"></td> -->
                                    <td><?= ++$start ?></td>
                                    <td><?= $ds->nama_bulan; ?></td>
                                    <td><?= $ds->nominal; ?></td>
                                    <td>
                                        <?php
                                            $cek_keterangan = $ds->keterangan;
                                            if ($ds->jumlah_bayar != null) {
                                                echo $ds->jumlah_bayar;
                                            } else if ($urut == 0) { ?>
                                            <?php $urut++; ?>
                                            -
                                        <?php } else { ?>
                                            -
                                        <?php } ?>

                                    </td>
                                    <td>
                                        <?php if ($ds->sisa > 0) { ?>
                                            <?php $urut--; ?>
                                            <?php $ambil_id_trans = $ds->id_data_transaksi ?>
                                            <?php $ambil_id_santri = $ds->id_data_santri ?>

                                            <a type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" "><?= $ds->sisa; ?></a>

                                            <!-- ambil bulan transaksi -->
                                            
                                            
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
                                            <h6><span class=" badge badge-pill badge-success">LUNAS</span></h6>
                                            <?php } elseif ($ds->keterangan == '0') { ?>
                                                <h6><span class="badge badge-pill badge-warning">BELUM LUNAS</span></h6>
                                            <?php } ?>
                                    </td>


                                    <td>

                                        <?php
                                            if ($ds->tanggal_bayar != '') { ?>
                                            <?= date('d F Y H:i:s ', strtotime($ds->tanggal_bayar));  ?>
                                        <?php } ?>

                                    </td>
                                    <!-- <td><?= $ds->created_by; ?></td> -->

                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                    <?php
                    if (empty($input_transaksi)) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data transaksi Tidak Di Temukan.
                    </div>';
                    }
                    ?>
                </div>
                </di <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div>
                        <a type="button" class="btn btn-warning" href="<?= base_url('dashboard_tamu') ?>">Kembali</a>
                    </div>
                    <!-- <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing <?= $start; ?> of <?= $jumlah_data; ?> entries</div> -->
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