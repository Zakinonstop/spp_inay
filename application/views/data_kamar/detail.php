<div class="card card-success ">
    <div class="card-header">
        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-striped table-sm">
                    <tr>
                        <td>Nama Kamar</td>
                        <td>:</td>
                        <td><?= $data->nama_kamar ?></td>
                        <!-- <td rowspan="8"></td> -->
                        <!-- <td rowspan="8"><td><img width="100 %" src="<?= base_url('assets/foto/')?><?= $data->foto?>" alt=""></td></td> -->
                    </tr>
                    <tr>
                        <td>Jumlah Anggota</td>
                        <td>:</td>
                        <td><?= $jumlah_anggota ?></td>
                    </tr>
                  
                </table>
            </div>
            <div class="col-lg-4">
                
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nama Anggota</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
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
                        </tr>
                    <?php } ?>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
           
            
        </div>
        
        </div>
            </div>
          
        </div>


      

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a type="button" class="btn btn-success" href="<?= base_url('data_kamar') ?>">Kembali</a>
    </div>

</div>