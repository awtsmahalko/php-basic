<?php
include 'core/config.php';
include 'core/session_checker.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= SYSTEM_NAME ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

    <!-- DataTables -->


    <!-- iCheck -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>assets/template/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- jQuery -->
    <script src="<?= BASE_PATH ?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="<?= BASE_PATH ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Bootstrap 4 -->
    <script src="<?= BASE_PATH ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- overlayScrollbars -->
    <script src="<?= BASE_PATH ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= BASE_PATH ?>assets/template/js/adminlte.js"></script>
</head>

<body class="text-sm hold-transition layout-fixed sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include 'template/header.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <?php include 'template/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="content-wrapper">
            <input type="hidden" id="top_date_today" value="<?= date('Y-m-d') ?>">
            <input type="hidden" id="top_date_tom" value="<?= date('Y-m-d', strtotime("+1 days")) ?>">
            sdfsdfs
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-<?= date('Y') ?> <a href="http://awtscodeigniter.tech">zechSolutions &trade; </a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block" onclick="viewRelease()">
                <b>Version</b> 1.00
            </div>
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
</body>

</html>