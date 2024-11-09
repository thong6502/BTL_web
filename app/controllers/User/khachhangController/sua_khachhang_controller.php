<?php
  include("../../../models/khachhang.php");
  global $id_kh;
  $khachhang = new data_khachhang();
  $result = $khachhang->sua_khach_hang($_POST['hoten'], $_POST['sdt'], $_POST['diachi']);
  if($result){
    echo "Sửa thành công";
  }else{
    echo '<script>alert("Sửa thất bại")</script>';
  }
?>