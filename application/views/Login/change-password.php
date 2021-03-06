<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?= base_url('asset/img/monitor1.png'); ?>">
  <title>Administrator | Log In</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('asset/'); ?>bootstrap-4/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('asset/'); ?>Admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
  <link href="<?= base_url('asset/'); ?>Admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('asset/'); ?>Admin/assets/libs/css/style.css">
  <link rel="stylesheet" href="<?= base_url('asset/'); ?>Admin/assets/vendor/fonts/simple-line-icons/css/simple-line-icons.css">


  <link rel="stylesheet" href="<?= base_url('asset/'); ?>Template library/Swift-Alert/dist/sweetalert2.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .login-page {
      background: url('<?= base_url('asset/'); ?>img/background.jpg');
      background-repeat: inherit;
      background-size: 100%;
      background-position: fixed;
    }
  </style>
</head>

<body class="login-page">
  <div class="splash-container mt-5">
    <div class="card mt-5">
      <div class="card-header text-center">
        <a class="style1" href="<?= base_url('Login'); ?>"><i class="fas fa-fw fa-sm fa-desktop"></i><br><b>Administrator</b></a>

      </div>
      <!-- /.login-logo -->
      <div class="card-body">
        <h5 class="login-box-msg text-center mt-2"><?= $title; ?> start your session for
          <span class="text-s font-16 mdi-text-shadow"><b><i><?= $this->session->userdata('reset_email'); ?></i></b></span></h5>
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('Login/changepassword') ?>" method="post">
          <div class="form-group has-feedback">
            <input type="password" name="password1" class="form-control" placeholder="Enter new password..." id="password1" required>

            <?= form_error('password1', '<small class="alert alert-danger" role="alert">', '</small>'); ?>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password2" class="form-control" placeholder="Repeat password..." id="password2" required>
            <?= form_error('password2', '<small class="alert alert-danger" role="alert">', '</small>'); ?>
          </div>
          <div class="row justify-content-end">

            <div class="col-sm-7">
              <button type="submit" name="log_in" class="btn btn-primary btn-block btn-flat"><span class="fas fa-key" aria-hidden="true"></span> Change Password </button>
            </div>

          </div>
        </form>

      </div>
    </div>
    <br><br>

  </div>
  <footer class=" text-center">
    <strong>Copyright &copy; <?= date('Y'); ?> <a href="https://bayualexandria.blogspot.com">by b@yu4lex@ndr!4</a></strong>
  </footer>

  <script src="<?= base_url('asset/'); ?>bootstrap-4/js/bootstrap.min.js"></script>
  <script src="<?= base_url('asset/'); ?>bootstrap-4/js/jquery-3.3.1.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url('asset/'); ?>plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

</html>