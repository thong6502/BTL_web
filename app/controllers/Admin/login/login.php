<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/admin.php');
  $admin = new data_admin();
  $result = $admin->login($_POST['user'], $_POST['password']);
  if($result){
    echo '<script>window.location.href = "/BTL_web/app/views/admin/";</script>';
  }else{
    echo '<script>alert("Sai tên tài khoản hoặc mật khẩu"); window.location.href = "/BTL_web/app/views/admin/Auths/Login.php";</script>';
  }
?>
