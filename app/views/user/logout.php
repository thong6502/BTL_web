<?php
session_start();

// Xóa session và đăng xuất người dùng
session_unset();
session_destroy();

// Chuyển hướng người dùng trở lại trang đăng nhập
header("Location: /BTL_web/app/views/user/login.php");
exit();
?>
