<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Jurnal Umum</title>
</head>
<body>
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
                        <?= $total_pemasukan->jumlah_bayar + $jumlah_pemasukan;?>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Pengeluaran
                      <span class="float-right text-success">
                        <?= $jumlah_pengeluaran;?>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Saldo
                      <span class="float-right text-bold">
                        <?= $total_pemasukan->jumlah_bayar + $jumlah_pemasukan - $jumlah_pengeluaran;?>
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
        <?= $total_pemasukan->jumlah_bayar + $jumlah_pemasukan;?>
        ,
        <?= $jumlah_pengeluaran;?>
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

</body>
</html>
