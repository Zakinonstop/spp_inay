<div class="card card-secondary">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="card-title"><?= $data->nama_kamar ?></h3>
                  </div>
                  <div class="col-md-6">
                    <h3 class="card-title"><?= $jumlah_anggota ?> Santri</h3>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                    foreach 
                    ($nama_anggota as $key => $na) { ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $na->nama?></td>
                            <!-- <td style="padding: 5px;" width="70">
                              <a type="button" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Input Transaksi" href="<?= base_url('input_transaksi/view/') ?><?= $na->id ?>">Input Transaksi</a>
                            </td> -->
                        </tr>
                    <?php } ?>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              
            </div>
            
            <div class="card-footer">
                <a type="button" class="btn btn-warning" href="<?= base_url('data_kamar') ?>">Kembali</a>
            </div>
            
            </div>
    </div>

   
</div>


