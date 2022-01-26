<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head><body>
    <h3 align='center'>LAPORAN PEMBAYARAN SPP BULANAN</h3>
    <h3 align='center'>PONDOK PESANTREN INAYATULLAH</h3>
    <hr>
 
        <h4>Tahun : 2022 </h4>
        <h4>Kamar : Umar 2 </h4>
        <!-- <h4>Tahun : <?= $lp->nama_tahun ;?> </h4> -->
        <!-- <h4>Kamar : <?= $lp->nama_kamar ;?> </h4> -->
        <!-- <h4>Kamar : Umar 3</h4> -->

        <table border="1" class="table table-striped">
            <thead>
                <tr style="background-color: #32CD32;">
                    <td>No</td>
                    <td>Nama</td>
                    <td>Bulan</td>
                    <td>Besar Tagihan</td>
                    <td>Jumlah Bayar</td>
                    <td>Tanggal Bayar</td>
                    <td>Keterangan</td>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                $no = 1;
                foreach ($data as $key => $dsantri) { ?>

                    <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $dsantri->nama ;?></td>
                    
                    <td><?= $dsantri->nama_bulan ;?></td>
                    <td><?= $dsantri->nominal ;?></td>
                    <td><?= $dsantri->jumlah_bayar ;?></td>
                    <td><?= $dsantri->tanggal_bayar ;?></td>

                    <?php
                                        if ($dsantri->keterangan == 1) { ?>
                                            <td>Lunas</td>
                                            <?php } elseif ($dsantri->keterangan != 1) { ?>
                                                <td>Belum</td>
                                        <?php } ?>
                    <!-- <td><?= $dsantri->keterangan ;?></td> -->
                </tr>
                <?php }?>

            </tbody>
        </table>

    
        <br><br>
        <h4 align='right' style="margin-right: 40px;">Ttd. Bendahara</h4><br><br>
        <h4 align='right' style="margin-right: 10px;">Zaki Nafi Andaristida</h4>

      
</body></html>

 

