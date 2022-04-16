<div class="card card-success">
    <div class="card-header">
        <!-- <h3 class="card-title">Quick Example</h3> -->
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-sm">
                    <tr>
                        <td>Tahun</td>
                        <td>:</td>
                        <td><?= $data->nama_tahun ?></td>
                        <!-- <td rowspan="8"></td> -->
                        <!-- <td rowspan="8"><td><img width="100 %" src="<?= base_url('assets/foto/')?><?= $data->foto?>" alt=""></td></td> -->
                    </tr>
                    <tr>
                        <td>Bulan</td>
                        <td>:</td>
                        <td><?= $data->nama_bulan ?></td>
                    </tr>
                    <tr>
                        <td>Nominal</td>
                        <td>:</td>
                        <td><?= $data->nominal ?></td>
                    </tr>
                   
                </table>
            </div>
           
        </div>
        
        </div>
            </div>
          
            <div class="card-footer">
                <a type="button" class="btn btn-success" href="<?= base_url('data_tagihan') ?>">Kembali</a>
            </div>
        </div>


      

    </div>


</div>