<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>404 Page not found</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
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
</head>

<body class="hold-transition skin-blue sidebar-mini">


  <div id="content-wrapper" class="d-flex flex-column">
    <div class="content">
      <div class="container-fluid">
        <div class="text-center">
          <div style="font-size:120px;" class="error mx-auto" data-text="403">403</div>
          <p class="lead text-gray-800 mb-5">Access Forbidden</p>
          <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
          <a href="<?= is_logged_in(); ?>">&larr; Back to Dashboard</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Control Sidebar -->


  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?= base_url('asset/'); ?>bootstrap-4/js/bootstrap.min.js"></script>
  <script src="<?= base_url('asset/'); ?>bootstrap-4/js/jquery-3.3.1.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url('asset/'); ?>plugins/iCheck/icheck.min.js"></script>
</body>

</html>