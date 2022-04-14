
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?= base_url('') ?>assets/foto/logo_pondok.png">
  <title>LOGIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('') ?>template/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('') ?>template/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('') ?>template/AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Login Via</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"></p>
      <a href="<?= base_url('login')?>" type="button" class="btn btn-block bg-gradient-warning btn-lg">ADMIN</a>
      <a href="<?= base_url('login_santri')?>" type="button" class="btn btn-block bg-gradient-success btn-lg">SANTRI</a>
      <a href="<?= base_url('login_tamu')?>" type="button" class="btn btn-block bg-gradient-info btn-lg">GUEST</a>
      <div class="social-auth-links text-center mb-3">
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src="<?= base_url('') ?>template/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('') ?>template/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('') ?>template/AdminLTE/dist/js/adminlte.min.js"></script>

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
