<!-- <div class="card">
    <img src="<?= base_url('assets/foto/')?><?= $data->foto?>" alt="">
</div> -->

<div class="row">
    <div class="col-md-12">
        
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Informasi Santri</h3>
    </div>
    <!-- /.card-header -->

    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-striped table-sm">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $data->nama ?></td>
                        <!-- <td rowspan="8"></td> -->
                        <!-- <td rowspan="8"><td><img width="100 %" src="<?= base_url('assets/foto/')?><?= $data->foto?>" alt=""></td></td> -->
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><?= $data->nis ?></td>
                    </tr>
                    <tr>
                        <td>Tgl Lahir</td>
                        <td>:</td>
                        <td><?= $data->tgl_lahir ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $data->alamat ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php
                        if ($data->jenis_kelamin == "L") {
                           echo 'Laki - Laki';
                        }else {
                            echo "Perempuan";
                        }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kamar</td>
                        <td>:</td>
                        <td><?= $data->nama_kamar ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?= $data->nama_kelas ?></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td><?= $data->no_hp ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Masuk Pondok</td>
                        <td>:</td>
                        <td><?= $data->tgl_masuk ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="row">

                    <div class="card" style="padding: 7px;">
                        <?php 
                        if ($data->foto != "") { ?>
                        <!-- <img src="<?= base_url('assets/foto/')?><?= $data->foto?>" alt="..." class="img-thumbnail"> -->
                           <img width="450px" src="<?= base_url('assets/foto/')?><?= $data->foto?>" alt="">
                        <?php }else { ?>
                           <img width="450px" src="<?= base_url('assets/foto/foto_santri.png')?>" alt="">
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
            </div>
          
        </div>


      

    </div>
    <!-- /.card-body -->
    <!-- /.card-body -->

    <div class="card-footer">
        <a type="button" class="btn btn-warning" href="<?= base_url('data_santri') ?>">Kembali</a>
        <a type="button" class="btn btn-success" target="_blank" href="<?= base_url('data_santri/send_wa/') ?><?= $data->id ?>">Send WA</a>
    </div>

</div>
    </div>

   
</div>
