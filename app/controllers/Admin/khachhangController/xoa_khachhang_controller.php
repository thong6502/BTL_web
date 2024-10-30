<?php
  include("../../../models/khachhang.php");
  $khachhang = new data_khachhang();
  $success = $khachhang->xoa_khach_hang($_POST["id_kh"]);
  if($success){
    echo "Xóa thành công";
  }else{
    echo '<script>alert("Xóa thất bại");</script>;'
  }
?>
