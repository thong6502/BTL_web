<?php
  include("../../../models/khachhang.php");
  $khachhang = new data_khachhang();
  $result = $khachhang->hien_thi_khachhang();
?>