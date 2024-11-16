<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/chuchay.php');
  $chuchay = new data_chuchay();
  $result = $chuchay->hienthi_chuchay();
?>