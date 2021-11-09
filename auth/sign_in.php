<?php
session_start();
include '../system/core/classes/database.php';

$_username = $_POST['username'];
$_password = $_POST['password'];

$db = new database();

$username = $db->clean($_username);
$password = $_password;

$user_data = $db->select("tbl_users", "*", "username = '$username'");
if (isset($user_data['user_id'])) {
    if (password_verify($password, $user_data['password'])) {

        $_SESSION['system']['user_id']  = $user_data['user_id'];
        $_SESSION['system']['username'] = $user_data['username'];

        header("location:../system");
    } else {
        $_SESSION['error'] = '<div class="alert alert-danger" role="alert"><span class="fa fa-exclamation-circle"></span> Incorrect password .Please try again!</div>';

        header("location:index.php");
    }
} else {
    $_SESSION['error'] = '<div class="alert alert-danger" role="alert"><span class="fa fa-exclamation-circle"></span> Incorrect username or password .Please try again!</div>';
    header("location:index.php");
}

// $user = new user();

// echo json_encode($user->authenticate($username, $password));
