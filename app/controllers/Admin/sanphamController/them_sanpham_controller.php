<?php
  include("../../../models/sanpham.php");
  $sanpham = new data_sanpham();
  $success = $sanpham->them_san_pham($_POST["id_hsx"], $_POST["id_dm"], $_POST["tensanpham"], $_POST["giaban"], $_POST["img_path"], $_POST["chitiet"]);
  if($success){
    //  **********
    echo "Thêm thành công";
  }else{
    echo '<script>alert("Thêm thất bại");</script>;'
  }
?>