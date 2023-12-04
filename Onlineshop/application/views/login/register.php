<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sora">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/css_navbar.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>REGISTER</title>
    <style>
        .container {
            margin-top: 80px;
        }

        .btn {
            background-color: #16C79A;
            color: #fff;
            margin-top: 35px;
            width: 150px;
            border-radius: 10px;
        }

        .login {
            margin-top: 40px;
        }

        .frm {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar fixed-top navbar-dark navbar-expand-lg navbar-template navbar-custom">
        <a class="navbar-brand" href="<?=base_url()?>">
            <img src="<?php echo base_url();?>assets/logo.png" width="50" height="50" alt="logo">
        </a>
    </nav>

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="login text-center">
                    <h1 href="" class="h4 font-weight-bold">Registrasi</h1>
                </div>
                <div class="card o-hidden border-0 shadow-lg my-4">
                    <div class="modal-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <form class="user" action="<?= base_url('register/postRegister')?>" method="POST">
                                        <div class="form-group">
                                            <label class="control-label">Username</label>
                                            <input type="text" name="username" class="frm form-control bg-light" placeholder="Masukkan Username" required>
                                            <small class="text-danger"><?php echo validation_errors(); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <input type="password" name="password" class="frm form-control bg-light" placeholder="Masukkan Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="text" name="email" class="frm form-control bg-light" placeholder="Masukkan Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" name="nama" class="frm form-control bg-light" placeholder="Masukkan Nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <input type="text" name="alamat" class="frm form-control bg-light" placeholder="Masukkan Alamat" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">No. Telephone</label>
                                            <input type="number" name="nomor" class="frm form-control bg-light" placeholder="Masukkan No. Telephone" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success">REGISTER</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <img src="<?php echo base_url();?>assets/logo.png" width="125" height="125" alt="logo">

        <div class="text-center p-3">
            <a class="footer-link" href=" ">About Us</a>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>

</html>