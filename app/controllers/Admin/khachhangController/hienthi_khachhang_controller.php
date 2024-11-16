<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/khachhang.php');
  $khachhang = new data_khachhang();
  $result = $khachhang->hien_thi_khachhang();
?>