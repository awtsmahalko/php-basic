<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['system']['user_id']) || empty($_SESSION['system']['user_id'])) {
    header("location: ../auth");
}
