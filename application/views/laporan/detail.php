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
                        <td>Username</td>
                        <td>:</td>
                        <td><?= $data->username ?></td>
                        <!-- <td rowspan="8"></td> -->
                        <!-- <td rowspan="8"><td><img width="100 %" src="<?= base_url('assets/foto/')?><?= $data->foto?>" alt=""></td></td> -->
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><?= $data->password ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?= $data->email ?></td>
                    </tr>
                   
                </table>
            </div>
           
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