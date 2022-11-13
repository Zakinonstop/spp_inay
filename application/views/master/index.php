<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= base_url('') ?>assets/foto/logo_pondok.png">
    <title>Inayatullah
        <?php if (isset($title)) {
            echo ' | ' . $title;
        }  ?>

    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('') ?>template/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('') ?>template/AdminLTE/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/style.css">
</head>
<style>
    ::-webkit-scrollbar {
        width: 3px;
    }

    ::-webkit-scrollbar-track {
        background-color: transparent;
        /* border-radius: 30px; */
    }

    ::-webkit-scrollbar-thumb {
        background-color: grey;
        border-radius: 10px;
    }

    .content-wrapper {
        background-color: #E9E9E9;
    }

    .info-box {
        box-shadow: 0 0 1px rgb(0 0 0 / 0%), 0 0px 1px rgb(0 0 0 / 10%);
    }

    .card {
        box-shadow: 0 0 1px rgb(0 0 0 / 0%), 0 0px 1px rgb(0 0 0 / 10%);
    }
</style>

<!-- <body class="hold-transition sidebar-mini layout-fixed os-dragging" onload="zoom()"> -->

<body class="hold-transition sidebar-mini layout-fixed os-dragging">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-success navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a type="button" href="<?= base_url('login/logout') ?>" class="btn btn-block btn-danger btn-sm"><b>LOGOUT</b></a>
                </li>

            </ul>


            <!-- Right navbar links -->


        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-succes">
            <!-- Brand Logo -->
            <a href="#" class="brand-link navbar-success">
                <img src="<?= base_url('') ?>assets/foto/logo_pondok.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">INAYATULLAH</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="card-body box-profile flex-column">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url('') ?>assets/foto/logo_pondok.png" alt="User profile picture">
                    </div>

                    <h3 style="color : white;" class="profile-username text-center"><?= $this->session->userdata['username'] ?></h3>

                    <p style="color : white;" class="text-muted text-center"><?= $this->session->userdata['email'] ?></p>


                    <a href="<?= base_url('admin/edit/') ?><?= $this->session->userdata['id_admin'] ?>" class="btn btn-warning btn-block btn-sm"><b style="color: black;">Edit Profile</b></a>
                </div>
                <!-- Sidebar user (optional) -->
                <div class="user-panel pb-3 mb-3 d-flex">

                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <!-- <i class="nav-icon far fa-image"></i> -->
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>data_santri" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    Data Santri
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>data_kamar" class="nav-link">
                                <i class="nav-icon fas fa-igloo"></i>
                                <p>
                                    Data Kamar
                                </p>
                            </a>
                        </li>
                        <hr>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>data_tahun" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Data Tahun
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>data_tagihan" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>
                                    Data Tagihan
                                </p>
                            </a>
                        </li>
                        <hr>
                        <!-- <li class="nav-item">
                            <a href="<?= base_url('') ?>data_transaksi" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Data Transaksi
                                </p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>history_transaksi" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    History Transaksi
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>grafik" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Grafik </p>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a href="<?= base_url('jurnal_umum') ?>" class="nav-link">
                                <i class="fas fa-edit nav-icon"></i>
                                <p>Jurnal Umum </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('laporan') ?>" class="nav-link">
                                <i class="fas fa-receipt nav-icon"></i>
                                <p>Laporan Keuangan</p>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a href="<?= base_url('admin') ?>" class="nav-link">
                                <i class="fas fa-user-cog nav-icon"></i>
                                <p>Administrator<p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside><!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><?php if (isset($title)) {
                                    echo ($title);
                                }  ?></h5>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li><span class="float-right text-sm text-danger"><i class="fas fa-tachometer-alt"></i></span> &nbsp; </li>
                                <li class="breadcrumb-item "><a href="#"></a></li>
                                <li class="breadcrumb-item "><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">
                                    <?php if (isset($title)) {
                                        echo $title;
                                    }  ?></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid ">
                    <!-- isikonten -->
                    <?php
                    if ($isi) {
                        $this->load->view($isi);
                    }
                    ?>
                </div>
                <!-- <footer class="man-footer text-center">
                    <strong>2022 &copy PONPES INAYATULLAH.</strong>
                </footer> -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- <footer class="man-footer text-center">
            <strong>2022 &copy PONPES INAYATULLAH.</strong>
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script type="application/javascript">
        /** After windod Load */
        $(window).bind("load", function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 4000);
        });
    </script>

    <!-- jQuery -->
    <script src="<?= base_url('') ?>template/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('') ?>template/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('') ?>template/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('') ?>template/AdminLTE/dist/js/demo.js"></script>


    <script>
        // setTimeout(function() {
        $.ajax({
            url: "<?= base_url('') ?>data_santri/hilangflasdata",
        });
        // }, 1000);
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <!-- <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "90%" 
        }
    </script> -->

    <!-- <body onload="zoom()"> -->

</body>

</html>