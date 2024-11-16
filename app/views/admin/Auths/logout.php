<?php
session_start();
$_SESSION['check_login_admin'] = false;
header("Location: /BTL_web/app/views/admin/Auths/Login.php");
?>