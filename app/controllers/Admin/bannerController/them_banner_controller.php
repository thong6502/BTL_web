<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/banner.php');
  $banner = new data_banner();
  $result = $banner->them_banner($_POST['img_path']);
  if($result){
    echo '<script>alert("Thêm thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlbanner";</script>';
  }else{
    echo '<script>alert("Thêm thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qlbanner";</script>';
  }
?>