<?php
  include("../../../models/khachhang.php");
  $khachhang = new data_khachhang();
  $result = $khachhang->dang_nhap($_POST['user'], $_POST['pass']);
  if($result){
    echo "Đăng nhập thành công";
  }else{
    echo '<script>alert("Đăng nhập thất bại")</script>';
  }
?>