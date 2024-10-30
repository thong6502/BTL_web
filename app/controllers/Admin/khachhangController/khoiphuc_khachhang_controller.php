<?php
  include("../../../models/khachhang.php");
  $khachhang = new data_khachhang();
  $result = $khachhang->khoi_phuc_khach_hang($_POST["id_kh"]);
  if($success){
    echo "Khôi phục thành công";
  }else{
    echo '<script>alert("Khôi phục thất bại");</script>;'
  }
?>