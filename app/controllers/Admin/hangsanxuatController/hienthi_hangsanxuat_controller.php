<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/hangsanxuat.php');
  $hangsanxuat = new data_hangsanxuat();
  $result = $hangsanxuat->hienthi_hangsanxuat();
?>