<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/models/sanpham.php");
  $sanpham = new data_sanpham();
  $result = $sanpham->sua_san_pham($_POST["id_sp"], $_POST["id_hsx"], $_POST["tensanpham"], $_POST["giaban"], $_POST["img_path"],$_POST["mota"] ,$_POST["chitiet"]);
  if($success){
    echo '<script>alert("Sửa thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlsanpham";</script>';
  }else{
    echo '<script>alert("Sửa thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qlsanpham";</script>';
  }
?>