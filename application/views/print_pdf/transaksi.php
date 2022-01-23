<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><body>
    <h3 align='center'>Laporan Pembayaran Spp Bulanan</h3>
    <hr>
    

        <h4>Tahun : 2022 </h4>
        <h4>Kamar : Umar 2 </h4>
        <!-- <h4>Tahun : <?= $lp->nama_tahun ;?> </h4>
        <h4>Kamar : <?= $lp->nama_kamar ;?> </h4> -->
        <!-- <h4>Kamar : Umar 3</h4> -->
        <!-- <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Januari</td>
                    <td>Februari</td>
                    <td>Maret</td>
                    <td>April</td>
                    <td>Mei</td>
                    <td>Juni</td>
                    <td>Juli</td>
                    <td>Agustus</td>
                    <td>September</td>
                    <td>Oktober</td>
                    <td>November</td>
                    <td>Desember</td>
                    <td>Keterangan</td>
                </tr>
            </thead>
            <tbody>
                <tr>

                <td>1</td>
                <td>zaki</td>
                <td>2020</td>
                <td>2020</td>
                <td>2020</td>
                <td>2020</td>
                
                </tr>

                <tr>
                    <td>2</td>
                    <td>nafi</td>
                    <td>2012</td>
                    <td>2012</td>
                    <td>2012</td>
                    <td>2012</td>
                </tr>


                <!-- <?php 
                // $no = 1;
                foreach($get_data_santri as $lp) : ?>
                    <td>1</td>
                    <td><?= $lp->nama;?></td>
                    <td>2022 29 00</td>
                    
                <?php endforeach; ?> -->

                <!-- <?php 
                    foreach($get_januari as $lp) : ?>
                    <td>2022</td>
                                    
                <?php endforeach; ?> -->

                
                    
                
            </tbody>
        <!-- </table> -->

        <table border="1">
            <thead>
            <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Januari</td>
                    <td>Februari</td>
                    <td>Maret</td>
                    <td>April</td>
                    <td>Mei</td>
                    <td>Juni</td>
                    <td>Juli</td>
                    <td>Agustus</td>
                    <td>September</td>
                    <td>Oktober</td>
                    <td>November</td>
                    <td>Desember</td>
                    <td>Keterangan</td>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nafi</td>
                    <?php foreach ($data as $key => $dsantri) { ?>
                        <td><?php echo $dsantri->tanggal_bayar; ?></td>
                        
                    <?php }?>
                        
                    <td>Belum Lunas</td>
                </tr>

                <tr>
                <td>2</td>
                    <td>Zaki</td>
                    <?php foreach ($data as $key => $dsantri) { ?>
                        <td><?php echo $dsantri->tanggal_bayar; ?></td>
                        
                    <?php }?>
                        
                    <td>Belum Lunas</td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <h4 align='right'>Bendahara</h4><br><br>
        <h4 align='right'>Zaki Nafi</h4>

        <!-- <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <?php 
                        foreach($data_bulan as $bulan) : ?>
                        <td><?= $bulan->nama_bulan;?></td>
                    <?php endforeach ;?>
                    <td>Keterangan</td>
                </tr>
            </thead>
                <?php 
                $no = 1;
                foreach($get_data_santri as $dp) : ?>
                    <tbody>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $dp->nama;?></td>

                            <?php foreach($get_transaksi_bulan as $dbulan) :?>
                                <td><?= $dbulan->tanggal_bayar;?></td>
                            <?php endforeach;?>

                            <td>Lunas</td>
                        </tr>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
        </table> -->
</body></html>

 

