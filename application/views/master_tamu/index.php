<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="<?= base_url('') ?>assets/foto/logo_pondok.png">

    <title>Inayatullah
        <?php if (isset($title)) {
            echo ' | ' . $title;
        }  ?>

    </title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('') ?>template/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('') ?>template/AdminLTE/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/style.css">
    <style>
        .navbar {
            /* height: 200px; */
            position: fixed;
            width: 100%;
            margin-bottom: 20px;
        }

        .content {
            margin-top: 50px;
            overflow: hidden;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-green">
            <div class="container">
                <a href="<?= base_url('dashboard_tamu') ?>" class="navbar-brand">
                    <img src="<?= base_url('') ?>assets/foto/logo_pondok.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <a href="#" class="nav-link" style=" color: white; ">SISTEM PEMBAYARAN SPP </a>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!-- <a href="<?= base_url('santri_spp/view/') ?><?= $this->session->userdata['id'] ?>" class="nav-link">SPP</a> -->
                        </li>

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a type="button" href="<?= base_url('login_tamu/logout') ?>" class="btn btn-block btn-danger btn-sm"><b>KELUAR</b></a>
                        </li>

                    </ul>

                </div>

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h5 class="m-0 text-dark text-center">
                                <marquee>Inay Aplication Sistem || Sistem ini dibuat untuk memudahkan teman - teman santri dalam hal informasi
                                    pembayaran biaya bulanan atau SPP atau Syahriah Semoga bermanfaat.
                                </marquee>
                            </h5>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <!-- isikonten -->
                    <?php
                    if ($isi) {
                        $this->load->view($isi);
                    }
                    ?>

                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                <b>Versi</b> 1.0.0
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021-2022 |</strong> PONDOK PESANTREN INAYATULLAH.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

<<<<<<< HEAD
    <!-- Main content -->
    <div class="content">
      <div class="container">
          <!-- isikonten --> 
          
          <?php
                if ($isi) {
                    $this->load->view($isi);
                }
                ?>
=======
    <!-- jQuery -->
    <script src="<?= base_url('') ?>template/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('') ?>template/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('') ?>template/AdminLTE/dist/js/adminlte.min.js"></script>
>>>>>>> d3a57a23491d9fa9ba6551fb071bfcc3ba032aa4

    <script>
        // setTimeout(function() {
        $.ajax({
            url: "http://localhost/spp_inay/data_santri/hilangflasdata",
        });
        // }, 1000);
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>