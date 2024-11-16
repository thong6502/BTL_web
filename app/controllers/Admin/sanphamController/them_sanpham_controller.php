<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/models/sanpham.php");
  $sanpham = new data_sanpham();
  $success = $sanpham->them_san_pham($_POST["id_hsx"],$_POST["tensp"], $_POST["giaban"], $_POST["img_path"], $_POST["mota"],$_POST["chitiet"]);
  if($success){
    echo '<script>alert("Thêm mới thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlsanpham";</script>';
  }else{
    echo '<script>alert("Thêm thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qlsanpham";</script>';
  }
?>