<?php
  include("../../../models/admin.php");
  $user = new data_admin();
  $success = $user->admin_login($_POST[user], $_POST[pass]);
  if($success){
    // ****** ///
    echo "Đăng nhập thành công";
  }else{
    echo "<script>alert('Sai tên tài khoản hoặc mật khẩu!!');</script>";
  }
?>