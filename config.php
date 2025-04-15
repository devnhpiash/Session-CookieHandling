<?php
session_start();

if (!isset($_SESSION['user']) && isset($_COOKIE['user_email'])) {
    $_SESSION['user'] = $_COOKIE['user_email']; // Auto-login from cookie
}
?>
