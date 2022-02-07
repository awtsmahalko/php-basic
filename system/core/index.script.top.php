<!-- Font Awesome -->
<link rel="stylesheet" href="<?= BASE_PATH ?>assets/plugins/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

<!-- DataTables -->
<link type="text/css" rel="stylesheet" href="<?= BASE_PATH ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link type="text/css" rel="stylesheet" href="<?= BASE_PATH ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link type="text/css" rel="stylesheet" href="<?= BASE_PATH ?>assets/plugins/datatables/fixedColumns.dataTables.min.css">

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

<!-- DataTables -->
<script type="text/javascript" src="<?= BASE_PATH ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?= BASE_PATH ?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="<?= BASE_PATH ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= BASE_PATH ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- overlayScrollbars -->
<script src="<?= BASE_PATH ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASE_PATH ?>assets/template/js/adminlte.js"></script>

<style type="text/css">
    thead th {
        padding: 5px !important;
        /* background: #dc3545e3; */
        background: #666f80;
        color: #ffff;
    }

    thead td {
        padding: 5px !important;
        /* background: #dc3545e3; */
        background: #666f80;
        color: #ffff;
    }

    tbody td {
        padding: 1px 5px !important;
        white-space: nowrap;
    }

    .select2-container .select2-selection--single {
        height: 40px;
    }

    table.dataTable.stripe tbody tr.odd.selected,
    table.dataTable.display tbody tr.odd.selected {
        background-color: #abb9d3;
    }

    table.dataTable.stripe tbody tr.even.selected,
    table.dataTable.display tbody tr.even.selected {
        background-color: #abb9d3;
    }

    .dt-body-right {
        text-align: right;
    }

    .dt-body-center {
        text-align: center;
    }

    .clockdate-wrapper {
        /* background-color: #333; */
        padding: 2px;
        width: 100%;
        text-align: center;
        border-radius: 5px;
        margin: 0 auto;
    }

    #clock {
        /* background-color:#333; */
        font-family: sans-serif;
        font-size: 30px;
        text-shadow: 0px 0px 1px #fff;
        color: #fff;
    }

    #clock span {
        color: #888;
        text-shadow: 0px 0px 1px #333;
        font-size: 15px;
        position: relative;
        top: -20px;
        left: -5px;
    }

    #date {
        letter-spacing: 5px;
        font-size: 10px;
        font-family: arial, sans-serif;
        color: #fff;
    }
</style>