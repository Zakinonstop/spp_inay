<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-receipt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pemasukan SPP</span>
                <span class="info-box-number">
                <?= "Rp. " . number_format($total_pemasukan->jumlah_bayar,0,',','.')?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-receipt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pemasukan Non SPP</span>
                <span class="info-box-number">
                  <?= "Rp. " . number_format($jumlah_pemasukan,0,',','.')?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-receipt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pengeluaran</span>
                <span class="info-box-number">
                <?= "Rp. " . number_format($jumlah_pengeluaran,0,',','.')?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-invoice-dollar"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Saldo</span>
                <span class="info-box-number">
                  <?php $saldo = $total_pemasukan->jumlah_bayar + $jumlah_pemasukan  - $jumlah_pengeluaran?>
                <?= "Rp. " . number_format($saldo,0,',','.')?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>       
       
       <!-- Default box -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">SISTEM PEMBAYARAN SPP PONPES INAYATULLAH</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                Ini adalah aplikasi berbasis website yang digunakan untuk mengelola pembayaran SPP pada <b>PONDOK PESANTREN INAYATULLAH</b>.
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Semoga Bermanfaat.
                <!-- oke  -->
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->