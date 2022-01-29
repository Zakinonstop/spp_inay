<!-- Default box -->
<div class="card">

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
                        <!-- <a href="<?= base_url('input_transaksi/add') ?>" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a> -->
                    </div>
                </div>

            </div>
            <br>
            <div class="row  ">
                <div class="col-9">
                    <a type="button" class="btn btn-success" href="<?= base_url('input_transaksi/print_pdf')?>" target="_blank">Print</a>
                    <a type="button" class="btn btn-success" href="<?= base_url('input_transaksi/print_per_santri/')?><?= $idnya_santri ;?>" target="_blank">Print Per Santri</a>
                    <!-- <a type="button" class="btn btn-success" href="<?= base_url('input_transaksi/print_pdf')?>">Print</a> -->
                </div>

                <div class="col-3">

                    <div class="dataTables_length float-right" id="example1_length">
                        <!-- <a href="<?= base_url('input_transaksi/add') ?>" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</a> -->
                    </div>

                    <form action="" method="post">
                        <div class="input-group input-group-md">
                            <input type="text" class="form-control" placeholder="Cari data transaksi.." name="keyword">
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
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="start: activate to sort column descending">start</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Nama</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Alamat: activate to sort column ascending">Tahun Bayar</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kamar: activate to sort column ascending">Bulan Bayar</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Besar Tagihan</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Jumlah Bayar</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Sisa / Kurang</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Keterangan</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Waktu Bayar</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kelas: activate to sort column ascending">Created By</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="3" aria-label="Kelas: activate to sort column ascending">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // $start = 0;
                            $urut = 0;
                            foreach ($input_transaksi as $ds) {

                                // $start++ ;
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
                                        if ($ds->jumlah_bayar) {
                                            echo $ds->jumlah_bayar;
                                        } else if ($urut == 0) { ?>
                                            <?php $urut++; ?>
                                            <a type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Input Transaksi" href="<?= base_url('input_transaksi/add/') ?><?= $ds->id_data_transaksi ?>">Input Transaksi</a>
                                        <?php } else { ?>
                                            <a type="button" aria-disabled="true" class="btn btn-sm btn-primary disabled" data-toggle="tooltip" data-placement="top" title="Input Transaksi" href="<?= base_url('input_transaksi/add/') ?><?= $ds->id_data_transaksi ?>">Input Transaksi</a>
                                        <?php } ?>

                                    </td>
                                    <td>
                                        <?php if ($ds->sisa > 0) { ?>
                                            <?php $urut--; ?>
                                            <!-- <a type="button" class="btn btn-sm btn-primary" onclick="return confirm('Uang sisa digunakan untuk spp bulan selanjutnya ?')" data-toggle="tooltip" data-placement="top" title="Untuk bulan Selanjutnya" href="<?= base_url('input_transaksi/next/') ?><?= $ds->id_data_transaksi ?>">next</a> -->
                                            <?php $ambil_id_trans = $ds->id_data_transaksi ?>
                                            <?php $ambil_id_santri = $ds->id_data_santri ?>

                                            <a type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" "><?= $ds->sisa; ?></a>

                                            <!-- ambil bulan transaksi -->
                                            <?php 
                                            if ($ds->nama_bulan != 'Desember') { ?>
                                                
                                                <button type="button" class="btn btn-default btn-success btn-sm" data-toggle="modal" data-target="#modal-default">
                                                    Next
                                                </button>
                                            <?php }
                                            ?>
                                            

                                            <button type="button" class="btn btn-default btn-success btn-sm" data-toggle="modal" data-target="#modal-kembalian">
                                                Kembalian
                                            </button>
                                            
                                        <?php } else if ($ds->sisa < 0) { ?>
                                            <?php $urut--; ?>
                                            <p><?= $ds->sisa; ?> | <a type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Update Transaksi" href="<?= base_url('input_transaksi/update/') ?><?= $ds->id_data_transaksi ?>">update transaksi</a></p>
                                        <?php } else { ?>
                                            <?= $ds->sisa; ?>
                                        <?php } ?>


                                    </td>

                                    <td>
                                        <?php
                                        if ($ds->keterangan == 1) { ?>
                                            <a type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Lunas" href="#">Lunas</a>
                                        <?php } elseif ($ds->keterangan == '0') { ?>
                                            <a type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Belum Lunas" href="#">Belum Lunas</a>
                                        <?php } ?>
                                        <!-- <?= $ds->keterangan; ?> -->
                                    </td>


                                    <td>
                                        
                                    <?php 
                                    if ($ds->tanggal_bayar != '') { ?>
                                        <?=date('d F Y h:i:s ', strtotime($ds->tanggal_bayar));  ?>
                                    <?php }?>
 
                                    <!-- <?=date('d F Y h:i:s ', strtotime($ds->tanggal_bayar));  ?> -->
                                
                                    </td>
                                    <td><?= $ds->created_by; ?></td>
                                    <!-- <td><?= $ds->tanggal_bayar; ?></td> -->
                                    <!-- <td><?= date_format(date_create($ds->tanggal_bayar), 'd-m-Y'); ?></td> -->
                                    <td width="50">
                                        <a class="text-primary" data-toggle="tooltip" data-placement="top" title="Detail" href="<?= base_url('input_transaksi/detail/') ?><?= $ds->id_data_transaksi ?>"><i class="fa fa-eye"></i></a>
                                    </td>
                                    <td width="50">
                                        <a class="text-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?= base_url('input_transaksi/edit/') ?><?= $ds->id_data_transaksi ?>"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <!-- <td width="50">
                                        <a onclick="return confirm('Anda Yakin ?')" class="text-danger" data-toggle="tooltip" data-placement="top" title="Hapus" href="<?= base_url('input_transaksi/hapus/') ?><?= $ds->id_data_transaksi ?>"><i class="fa fa-trash"></i></a>
                                    </td> -->
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
            </di
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing <?= $start; ?> of <?= $jumlah_data; ?> entries</div>
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
                
                <form action="<?= base_url('input_transaksi/next/') ?><?= $ambil_id_trans ?>" method="post">
                    <input hidden type="text" name="id_data_santri" value="<?= $ambil_id_santri ?>">
                   

                    <div class="modal-body">
                        <p>Untuk Bulan Depan ?</p>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-kembalian">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                
                <form action="<?= base_url('input_transaksi/kembalian/') ?><?= $ambil_id_trans ?>" method="post">
                    <input hidden type="text" name="id_data_santri" value="<?= $ambil_id_santri ?>">
                   

                    <div class="modal-body">
                        <p>Untuk Kembalian ?</p>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- /.content -->