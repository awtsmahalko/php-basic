<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <img src="<?= BASE_PATH ?>assets/img/profile/default_user.png" class="img-circle elevation-2" alt="User Image" width="30px"> <?= $_SESSION['system']['username'] ?>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                <?= $_SESSION['system']['username'] ?>
                                <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Bacolod City</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Owner</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item dropdown-footer">
                    <button type="button" class="btn btn-outline-danger" onclick='logOut()'><i class='nav-icon fa fa-sign-out'></i> LOG OUT</button>
                </div>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
    </ul>
</nav>