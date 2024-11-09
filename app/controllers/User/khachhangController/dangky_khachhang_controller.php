<?php
  include("../../../models/khachhang.php");
  $khachhang = new data_khachhang();
  $result = $khachhang->dang_ky($_POST['user'], $_POST['pass']);
  if($result){
    echo "Đăng ký thành công";
  }else{
    echo '<script>alert("Đăng ký thất bại")</script>';
  }
?>