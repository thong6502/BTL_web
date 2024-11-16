<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/logo.php');
  $logo = new data_logo();
  $result = $logo->hienthi_logo();
?>