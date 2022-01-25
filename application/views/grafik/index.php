<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Jurnal Umum</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-4">
            <div>
            <canvas id="myChart" style="width: 200px;"></canvas>
            </div>  
        </div>
    </div>

  <div class="row">
    <div class="col-lg-4">
      <br>
           <h3 >Saldo : <?= $jumlah_pemasukan - $jumlah_pengeluaran;?></h3> 
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
        <?= $jumlah_pemasukan;?>
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
