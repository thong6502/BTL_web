<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/admin.php');
  $admin = new data_admin();
  $result = $admin->register($_POST['user'], $_POST['password']);
  if($result){
    echo '<script>alert("Đăng ký thành công");window.location.href = "/BTL_web/app/views/admin/Auths/Login.php";</script>';
  }else{
    echo '<script>alert("Đăng ký thất bại"); window.location.href = "/BTL_web/app/views/admin/Auths/register.php";</script>';
  }
?>