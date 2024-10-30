<?php
  include("../../../models/sanpham.php");
  $sanpham = new data_sanpham();
  $result = $sanpham->xoa_san_pham($_POST["id_sp"]);
  if($result){
    echo "Xóa thành công";
  }else{
    echo '<script>alert("Xóa thất bại");</script>;'
  }
?>