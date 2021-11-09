<?php
include '../system/core/config.php';
if (isset($_SESSION['system']['user_id'])) {
    echo "<script>window.location='../system';</script>";
}
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
$_SESSION['error'] = '';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sincere | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/template/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <style>
        .trans {
            background: transparent !important;
        }

        .bl {
            color: black;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-header">
                <h1><?= SYSTEM_NAME ?></h1>
            </div>
            <div class="card-body">
                <p style="color:black;font-weight:bolder;text-align:center;font-size:20px;"><span class="fas fa-lock"></span> Sign in to start your session</p>

                <form action="sign_in.php" method="post">
                    <div class="input-group mb-3 bl">
                        <input autocomplete="off" type="text" name="username" class="form-control" style="opacity: .6;color: black;border: 1px solid black;" placeholder="Username" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text trans bl" style='border: 1px solid black;'>
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input autocomplete="off" type="password" name="password" class="form-control" style="opacity: .6;color: black;border: 1px solid black;" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text trans bl" style='border: 1px solid black;'>
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <p class="mb-1 bl text-center">All Rights Reserved &copy; 2019</p>
                    <p class="mb-1 bl text-center">zechSolutions &trade;</p>
                    <p class="mb-1 bl">
                        <span style="color: red"><?= $error ?></span>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/template/js/adminlte.min.js"></script>

</body>

</html>