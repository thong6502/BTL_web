<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/donhang.php');
  $donhang = new data_donhang();
  $result = $donhang->hienthi_donhang();
?>