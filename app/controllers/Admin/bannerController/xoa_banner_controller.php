<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/banner.php');
  $banner = new data_banner();
  $result = $banner->xoa_banner($_GET['id_banner']);
  if($result){
    echo '<script>alert("Xóa thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlbanner";</script>';
  }else{
    echo '<script>alert("Xóa thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qlbanner";</script>';
  }

?>