<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/models/sanpham.php");
  $sanpham = new data_sanpham();
  $result = $sanpham->hien_thi_sanpham_admin();
?>