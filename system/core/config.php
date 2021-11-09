<?php
// error_reporting(0);
define("SYSTEM_NAME", "ZECH BASIC PHP TEMPLATE");
define("BASE_PATH", "http://192.168.64.2/zech-php-basic/");
define("APP_FOLDER", "system/");
define("VIEWS_FOLDER", "views/");

// START THE SESSION
session_start();

// THIS WILL LOAD ONLY THE NEEDED CLASS
spl_autoload_register(function ($class) {
    switch ($class) {
        case 'user':
            require_once 'core/classes/user.php';
            break;
        case 'database':
            require_once 'core/classes/database.php';
            break;
        default:
            break;
    }
});
