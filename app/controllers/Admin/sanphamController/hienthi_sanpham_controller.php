<?php
  include("../../../models/sanpham.php");
  $sanpham = new data_sanpham();
  $result = $sanpham->hien_thi_sanpham();
?>