<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Pimpinan</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>theme/dist/img/avatar5.png">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/bower_components/Ionicons/css/ionicons.min.css">
  <!-- <?php echo base_url(); ?>Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/dist/css/AdminLTE.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/bower_components/select2/dist/css/select2.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>theme/izi/dist/css/iziToast.min.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>theme/izi/dist/js/iziToast.min.js"></script>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
</head>
<?php ?>
<body style="/*background:url(imgstatis/back1.jpg)
no-repeat center center fixed; background-size: cover;
 -webkit-background-size: cover; 
 -moz-background-size: cover; -o-background-size: cover;*/background-color:#333;">
 <div class="row">
<div class="login-box">
  <div class="login-logo">
    <h3 style="color:#fff;">APLIKASI PEMINJAMAN RUANGAN<br></h3>
    <?php //$this->session->set_userdata('nama','rino'); echo $this->session->userdata('nama'); ?>
  </div>
  <?php //$this->session->set_flashdata('pesan','aas'); echo $this->session->flashdata('pesan'); ?>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg" style="font-size:100%;">Masukkan Username dan Password</p> 
    <form action="<?php echo base_url('pimpinan/login'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required="" autocomplete="" autofocus="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required="" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block btn-flat" style="font-size: 15px;">Login Pimpinan <i class="glyphicon glyphicon-log-in"></i></button>
    </form>
    <br>
    <p class="text-center"><a href="<?php echo base_url(); ?>">Halaman Utama</a></p>
  </div>
  <!-- /.login-box-body -->
</div>
</div>
<?php if($this->session->flashdata('pesan')=='gagal'){ ?>
<script type="text/javascript">
  iziToast.show({timeout:5000,color:'red',title: 'Username Atau Password Salah',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>theme/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>theme/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>theme/plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>
</body>
</html>