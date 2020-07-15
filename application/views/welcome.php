<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <title>Welcome Page</title>
</head>
<body class="col-lg-6 d-none d-lg-block bg-login-image">
  <h1 class="text-blue-900 mb">Hello, <?php echo $this->session->userdata('nama'); ?></h1>
  <h4 class="text-blue-900 mb">Anda berhasil login ke dalam aplikasi.</h4>
</br>
<a href="<?php echo base_url('index.php/siswa/index') ?>">Lihat Data Siswa</a> |
<a href="<?php echo base_url('index.php/auth/logout') ?>">Logout</a>
</body>
</html>