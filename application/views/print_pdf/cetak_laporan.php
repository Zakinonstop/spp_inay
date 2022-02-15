<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}
  
.row {
  margin-left:-5px;
  margin-right:-5px;
  
}
  
.container {
  /* align:center; */
  /* text-align: center; */
  /* margin-left: 400px; */
  width: 297mm;
  height: 210mm;
  padding: 2px;
}
  
.column {
  float: left;
  /* width: 50%; */
  padding: 0px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
  
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 0.1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 4px;
  width: 50px;
  height: 30px;
}


tr{
  height: 30px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Tata letak responsif - membuat dua kolom bertumpuk, bukan bersebelahan pada layar yang lebih kecil dari 600 piksel */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }

  
}

@media print {
    .container{
      width: 297mm;
      height: 210mm;
      padding: 2px;
    }

    th, td {
      text-align: center;
      padding: 4px;
      width: 50px;
      height: 30px;
    }

    #printPageButton {
    display: none;
  }
} 
</style>
</head>
<body onload="myFunction()">

<div class="container" >
<h2 align="center">Laporan Pembayaran SPP </h2>

<hr>
<div class="row">
  <div class="column">
    
    <h4>Tahun : 
      <?php foreach ($data_tahun as $dt ) { ?>
      <?= $dt->nama_tahun;?> 
      <?php }?> </h4>
  </div>

  <div style="margin-left: 917px;" class="column">
    <h4>Kamar : <?= $data_kamar->nama_kamar?> </h4>
  </div>
</div>

<div class="row">
  <div class="column">
    <table>
      <tr>
        <th>No</th>
      </tr>

      <?php
      $no = 1;
      foreach ($data_santri as $ns) { ?>
        
        <tr>
          <td><?= $no++?></td>
        </tr>

        <?php }?>
      
    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Nama</th>
      </tr>

      <?php
      $no = 1;
      foreach ($data_santri as $ns) { ?>
        
        <tr>
          <td style="width: 300px;"><?= $ns->nama?></td>
        </tr>

        <?php }?>
      
    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Januari</th>
      </tr>

      <?php
      foreach ($data_januari as $jan) { ?>
        
        
        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
            echo 'style="background-color: red;"';
            }?>
          >
                                        
                                    <?php 
                                    if ($jan->tanggal_bayar != '') { ?>
                                        <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
                                        <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
                                    <?php }?>
 
                                    </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">  
    <table>
      <tr>
        <th>Februari</th>
      </tr>

      <?php
      foreach ($data_februari as $jan) { ?>

        <tr>
        <td 
            <?php if ($jan->tanggal_bayar == '') {
            echo 'style="background-color: red;"';
            }?>
          >
                                        
                                    <?php 
                                    if ($jan->tanggal_bayar != '') { ?>
                                        <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
                                        <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
                                    <?php }?>
 
                                    </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Maret</th>
      </tr>

      <?php
      foreach ($data_maret as $jan) { ?>

        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
              echo 'style="background-color: red; width: 50px;"';
            }else {
              echo 'width: 50px;"';
            }?>
          >
                                        
          <?php 
          if ($jan->tanggal_bayar != '') { ?>
              <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
              <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
          <?php }?>

          </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>April</th>
      </tr>

      <?php
      foreach ($data_april as $jan) { ?>

        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
              echo 'style="background-color: red; width: 50px;"';
            }else {
              echo 'width: 50px;"';
            }?>
          >
                                        
          <?php 
          if ($jan->tanggal_bayar != '') { ?>
              <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
              <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
          <?php }?>

          </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Mei</th>
      </tr>

      <?php
      foreach ($data_mei as $jan) { ?>

        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
            echo 'style="background-color: red; width: 50px;"';
            }else {
              echo 'width: 50px;"';
            }?>
          >
                                        
          <?php 
          if ($jan->tanggal_bayar != '') { ?>
              <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
              <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
          <?php }?>

          </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Juni</th>
      </tr>

      <?php
      foreach ($data_juni as $jan) { ?>

        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
              echo 'style="background-color: red;  width: 50px;"';
            }else {
              echo 'width: 50px;"';
            }?>
          >
                                        
          <?php 
          if ($jan->tanggal_bayar != '') { ?>
              <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
              <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
          <?php }?>

          </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Juli</th>
      </tr>

      <?php
      foreach ($data_juli as $jan) { ?>

        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
              echo 'style="background-color: red; width: 50px;"';
            }else {
              echo 'width: 50px;"';
            }?>
          >
                                        
          <?php 
          if ($jan->tanggal_bayar != '') { ?>
              <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
              <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
          <?php }?>

          </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Agustus</th>
      </tr>

      <?php
      foreach ($data_agustus as $jan) { ?>

        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
            echo 'style="background-color: red;"';
            }?>
          >
                                        
          <?php 
          if ($jan->tanggal_bayar != '') { ?>
              <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
              <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
          <?php }?>

          </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>September</th>
      </tr>

      <?php
      foreach ($data_september as $jan) { ?>

        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
            echo 'style="background-color: red;"';
            }?>
          >
                                        
          <?php 
          if ($jan->tanggal_bayar != '') { ?>
              <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
              <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
          <?php }?>

          </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Oktober</th>
      </tr>

      <?php
      foreach ($data_oktober as $jan) { ?>

        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
            echo 'style="background-color: red;"';
            }?>
          >
                                        
          <?php 
          if ($jan->tanggal_bayar != '') { ?>
              <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
              <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
          <?php }?>

          </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>November</th>
      </tr>

      <?php
      foreach ($data_november as $jan) { ?>

        <tr>
          <td 
            <?php if ($jan->tanggal_bayar == '') {
            echo 'style="background-color: red;"';
            }?>
          >
                                        
                                    <?php 
                                    if ($jan->tanggal_bayar != '') { ?>
                                        <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
                                        <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
                                    <?php }?>
 
                                    </td>
        </tr>

        <?php }?>

    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Desember</th>
      </tr>

      <?php
      foreach ($data_desember as $jan) { ?>

        <tr>
        <td 
            <?php if ($jan->tanggal_bayar == '') {
            echo 'style="background-color: red;"';
            }?>
          >
                                        
          <?php 
          if ($jan->tanggal_bayar != '') { ?>
              <!-- <?=date('d-m-Y ', strtotime($jan->tanggal_bayar));  ?> -->
                <span style="font-family: wingdings; font-size: 120%;">&#252;</span>
          <?php }?>

          </td>
        </tr>

        <?php }?>

    </table>
  </div>
</div>

<h4>NB : Silakan kepada santri - santri yang belum melunasi pembayaran untuk segera melunasinya.</h4><br><br>

<!-- <button id="printPageButton" onclick="window.print()">Print this page</button> -->
</div>
</body>
<script>
function myFunction() {
  window.print()
}
</script>
</html>
