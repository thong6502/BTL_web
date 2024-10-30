<?php
  include("../../../models/sanpham.php");
  $sanpham = new data_sanpham();
  $result = $sanpham->sua_san_pham($_POST["id_sp"], $_POST["id_hsx"], $_POST["tensanpham"], $_POST["giaban"], $_POST["img_path"], $_POST["chitiet"]);
  if($result){
    //////////
    echo "Sửa thành công";
  }else{
    echo '<script>alert("Sửa thất bại");</script>;'
  }
?>
?>