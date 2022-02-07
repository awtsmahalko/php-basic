<?php
$uri    = $_SERVER['REQUEST_URI'];
$routes = str_replace(SYS_PATH . "/" . APP_FOLDER, "", $uri);

$error_file = VIEWS_FOLDER . 'error.php';
$routes = trim($routes, "/");

if ($routes == '') {
    $views_file = VIEWS_FOLDER . 'home.php';
    $active_li = "home";
    $title_top = "Home";
} else if ($routes == 'users') {
    $folder_file = $routes;
    $views_file = VIEWS_FOLDER . $folder_file . '/users.view.php';
    $js_file = VIEWS_FOLDER . $folder_file . '/users.js.php';
    $modal_file = VIEWS_FOLDER . $folder_file . '/users.modal.php';
    $title_top = "Users";
} else {
    $views_file = $error_file;
    $title_top = "Error";
}
