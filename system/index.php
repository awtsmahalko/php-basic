<?php
include 'core/config.php';
include 'core/session_checker.php';
include 'core/routes.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= SYSTEM_NAME ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'core/index.script.top.php'; ?>
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
            <?php include file_exists($views_file) ? $views_file : $error_file; ?>
        </div>
        <?php include 'template/footer.php'; ?>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
</body>

</html>