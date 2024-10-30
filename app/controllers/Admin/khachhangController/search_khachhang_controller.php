<?php
  include("../../../models/khachhang.php");
  $khachhang = new data_khachhang();
  $result = $khachhang->search_khach_hang_by_ten($_POST["hoten"]);
  if($result){
    echo "Tìm kiếm thành công";
  }else{
    echo '<script>alert("Tìm kiếm thất bại");</script>;'
  }
?>