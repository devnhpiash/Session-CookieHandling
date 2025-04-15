<?php
session_start();
session_unset();
session_destroy();

setcookie("user_email", "", time() - 3600, "/"); // Expire cookie

header("Location: index.php");
exit;
