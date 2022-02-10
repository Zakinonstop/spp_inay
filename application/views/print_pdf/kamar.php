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
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
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
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Tata letak responsif - membuat dua kolom bertumpuk, bukan bersebelahan pada layar yang lebih kecil dari 600 piksel */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }

  @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
      }
}
</style>
</head>
<body>

<h2 align="center">Laporan Pembayaran SPP </h2>

<hr>
<h4>Tahun : 2022 </h4>
        <h4>Kamar : Umar 2 </h4>
<div class="row">
  <div class="column">
    <table>
      <tr>
        <th>Nama</th>
        <th>Usia</th>
      </tr>
      <tr>
        <td>Belly</td>
        <td>56</td>
      </tr>
      <tr>
        <td>Eva</td>
        <td>15</td>
      </tr>
      <tr>
        <td>Diena</td>
        <td>40</td>
      </tr>
    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
      </tr>
      <tr>
        <td>Sapri</td>
        <td>Smith</td>
      </tr>
      <tr>
        <td>Tony</td>
        <td>Stark</td>
      </tr>
      <tr>
        <td>Paul</td>
        <td>Pogba</td>
      </tr>
    </table>
  </div>
</div>

<button onclick="window.print()">Print this page</button>

</body>
</html>
