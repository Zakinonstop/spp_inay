<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
</head>

<!-- <body class="hold-transition sidebar-mini layout-fixed os-dragging" onload="zoom()"> -->
<body class="hold-transition sidebar-mini layout-fixed os-dragging" >
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

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
               
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <p><?= $this->session->userdata['username'];?></p>
                        <!-- <i class="far fa-bell"></i> -->
                        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div> -->
                        <!-- <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a> -->
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('login/logout')?>" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> Logout
                            <!-- <span class="float-right text-muted text-sm">2 days</span> -->
                        </a>
                        <!-- <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
                    </div>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-succes elevation-2">
            <!-- Brand Logo -->
            <a href="#" class="brand-link navbar-success">
                <img src="<?= base_url('') ?>assets/foto/logo_pondok.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">INAYATULLAH</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('') ?>template/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $this->session->userdata['username']?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="http://localhost/spp_inay/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <!-- <i class="nav-icon far fa-image"></i> -->
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/spp_inay/data_santri" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    Data Santri
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/spp_inay/data_kamar" class="nav-link">
                            <i class="nav-icon fas fa-igloo"></i>
                                <p>
                                    Data Kamar
                                </p>
                            </a>
                        </li>
                        <hr>
                        
                        <li class="nav-item">
                            <a href="http://localhost/spp_inay/data_tahun" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Data Tahun
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/spp_inay/data_tagihan" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>
                                    Data Tagihan
                                </p>
                            </a>
                        </li>
                        <hr>
                        <!-- <li class="nav-item">
                            <a href="http://localhost/spp_inay/data_transaksi" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Data Transaksi
                                </p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="http://localhost/spp_inay/history_transaksi" class="nav-link">
                            <i class="nav-icon fas fa-history"></i>
                                <p>
                                    History Transaksi
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/spp_inay/grafik" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Grafik                                 </p>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                                <a href="<?= base_url('jurnal_umum')?>" class="nav-link">
                                <i class="fas fa-edit nav-icon"></i>
                                <p>Jurnal Umum </p>
                                </a>
                        </li>
                        <li class="nav-item">
                                <a href="<?= base_url('laporan')?>" class="nav-link">
                                <i class="fas fa-receipt nav-icon"></i>
                                <p>Laporan Keuangan</p>
                                </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                                <a href="<?= base_url('admin')?>" class="nav-link">
                                <i class="fas fa-user-cog nav-icon"></i>
                                <p>Administrator<p>
                                </a>
                        </li>
                        <!-- <li class="nav-item">
                                <a href="<?= base_url('user_profile')?>" class="nav-link">
                                <i class="fas fa-edit nav-icon"></i>
                                <p>User Profile<p>
                                </a>
                        </li> -->
        
<!-- 
                        <li class="nav-item">
                            <a href="http://localhost/spp_inay/input_transaksi" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Input transaksi
                                </p>
                            </a>
                        </li> -->

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
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?php if (isset($title)) {
                                    echo $title;
                                }  ?></h1>
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
                <div class="container-fluid">

                <!-- isikonten -->
                <?php
                if ($isi) {
                    $this->load->view($isi);
                }
                ?>

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Beta</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2021-2022 |</strong> PONDOK PESANTREN INAYATULLAH.
        </footer>

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
            url: "http://localhost/spp_inay/data_santri/hilangflasdata",
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