<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Mahakam Grande</title>
    <!-- Icons-->
    <link href="<?php echo base_url('assets/admin/');?>node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/');?>node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/');?>node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/');?>node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url('assets/admin/');?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/');?>vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card-group">
            <div class="card p-4">
              <form action="<?php echo base_url('admin/login')?>" method="post">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" name="username" autofocus required>
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="submit" class="btn btn-primary px-4">Login</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap and necessary plugins-->
    <script src="<?php echo base_url('assets/admin/');?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/pace-progress/pace.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
  </body>
</html>