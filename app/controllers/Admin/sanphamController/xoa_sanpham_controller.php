<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/models/sanpham.php");
  $sanpham = new data_sanpham();
  $result = $sanpham->xoa_san_pham($_GET["id_sp"]);
  echo '<script>alert("Xóa thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlsanpham";</script>';

?>