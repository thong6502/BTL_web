<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/khachhang.php');
  $khachhang = new data_khachhang();
  $success = $khachhang->xoa_khachhang($_GET["id_kh"]);
  echo '<script>alert("Xóa thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlkhachhang";</script>';

?>
