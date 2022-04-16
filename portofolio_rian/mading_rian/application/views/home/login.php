<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">
           
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                       
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">  <img src="<?= base_url('gambar/111.png') ?>" widt="1000">
                                        <H2 class="h4 text-gray-900 mb-4">LOGIN</H2>
                                    </div>
                                    
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password"name="passsword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="<?php echo base_url('blog');?>" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <a href="<?php echo base_url('blog1');?>" class="btn btn-danger btn-user btn-block">
                                            kembali
                                        </a>
                                       
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="Login/registration">Create an Account!</a>
                                    </div>
                                    <nav>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/');?>js/sb-admin-2.min.js"></script>

</body>

</html>