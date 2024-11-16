<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/banner.php');
  $banner = new data_banner();
  $result = $banner->hienthi_banner();

?>