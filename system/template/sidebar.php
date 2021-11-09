<aside class="main-sidebar elevation-4 sidebar-dark-maroon">
    <!-- Brand Logo -->
    <a href="#" class="brand-link navbar-danger text-center">
        <span class="brand-text font-weight-bold"><?= SYSTEM_NAME ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">
                <img src="<?= BASE_PATH
                            ?>assets/img/profile/default_user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= BASE_PATH . APP_FOLDER ?>profile" class="d-block"><?= $_SESSION['system']['username'] ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent text-sm" data-widget="treeview" role="menu" data-accordion="false">

                <li class='nav-item'>
                    <a href='http://192.168.64.2/zech-php-basic/system/' class='nav-link'>
                        <i class='nav-icon fa fa-home'></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class='nav-item'>
                    <a href='http://192.168.64.2/zech-php-basic/system/user' class='nav-link'>
                        <i class='nav-icon fa fa-users'></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>