<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-receipt"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pemasukan SPP</span>
                <span class="info-box-number">
                    <?= "Rp. " . number_format($total_pemasukan->jumlah_bayar, 0, ',', '.') ?>
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
                    <?= "Rp. " . number_format($jumlah_pemasukan, 0, ',', '.') ?>
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
                    <?= "Rp. " . number_format($jumlah_pengeluaran, 0, ',', '.') ?>
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
                    <?php $saldo = $total_pemasukan->jumlah_bayar + $jumlah_pemasukan  - $jumlah_pengeluaran ?>
                    <?= "Rp. " . number_format($saldo, 0, ',', '.') ?>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>

<div class="card card-secondary">
    <div class="card-header">
        Grafik
    </div>
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-4">
            <div class="mt-4 ml-4 mb-4">
                <canvas id="myChart" style="width: 200px;"></canvas>
            </div>
        </div>

        <div class="col-lg-4">
            <ul class="nav nav-pills flex-column mt-4 mr-4">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Pemasukan
                        <span class="float-right text-danger">
                            <?= $total_pemasukan->jumlah_bayar + $jumlah_pemasukan; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Pengeluaran
                        <span class="float-right text-success">
                            <?= $jumlah_pengeluaran; ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Saldo
                        <span class="float-right text-bold">
                            <?= $total_pemasukan->jumlah_bayar + $jumlah_pemasukan - $jumlah_pengeluaran; ?>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = [
            'Pemasukan',
            'Pengeluaran',
        ];

        const data = {
            labels: [
                'Pemasukan',
                'Pengeluaran',
            ],

            datasets: [{
                label: 'My First Dataset',
                data: [
                    <?= $total_pemasukan->jumlah_bayar + $jumlah_pemasukan; ?>,
                    <?= $jumlah_pengeluaran; ?>
                ],
                backgroundColor: [
                    'rgb(54, 162, 235)',
                    'rgb(255, 99, 132)',
                ],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {}
        };
    </script>

    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>