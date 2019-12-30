<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/admin_/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin_/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="py-5 bg-primary">

  <div class="container">

      <div class="text-center mt-3">
          <img src="<?= site_url('assets/taoktindok/img/logo.png') ?>" width="150px">
      </div>
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registrasi Member</h1>
              </div>
              <form action="<?= base_url('register')?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama"value="<?= set_value('nama');?>" placeholder="Nama Lengkap">
                  <?= form_error('nama', '<small class="text-danger" >','</small>');  ?>
                </div>
                
                <div class="form-group">
                  <textarea class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat"><?= set_value('alamat');?></textarea>
                  <?= form_error('alamat', '<small class="text-danger" >','</small>');  ?>
                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="kota" value="<?= set_value('kota');?>" name="kota" placeholder="Kota">
                  <?= form_error('kota', '<small class="text-danger" >','</small>');  ?>
                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" value="<?= set_value('email');?>" name="email" placeholder="Email">
                  <?= form_error('email', '<small class="text-danger" >','</small>');  ?>
                </div>
                
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="nomor_handphone" value="<?= set_value('nomor_handphone');?>" name="nomor_handphone" placeholder="Nomor Handphone">
                  <?= form_error('nomor_handphone', '<small class="text-danger" >','</small>');  ?>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                        <?= form_error('password', '<small class="text-danger" >','</small>');  ?>
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Kata Sandi">
                        <?= form_error('confirm_password', '<small class="text-danger" >','</small>');  ?>
                    </div>
                  </div>
                  <button  type="submit" class="btn btn-primary btn-user btn-block">
                        Daftar
                      </button>
                  <hr>
              </form>
            
              
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('login')?>">Sudah mempunyai akun? Masuk!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</html>
