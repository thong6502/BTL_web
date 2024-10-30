<?php
  include("../../../models/sanpham.php");
  $sanpham = new data_sanpham();
  $result = $sanpham->khoi_phuc_san_pham($_POST["id_sp"]);
  if($result){
    echo "Khôi phục thành công";
  }else{
    echo '<script>alert("Khôi phục thất bại");</script>;'
  }
?> 