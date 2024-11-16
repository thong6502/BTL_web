<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/hangsanxuat.php');
  $hangsanxuat = new data_hangsanxuat();
  $result = $hangsanxuat->them_hang_san_xuat($_POST['tenhsx']);
  if($result){
    echo '<script>alert("Thêm thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlhang";</script>';
  }else{
    echo '<script>alert("Thêm thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qlhang";</script>';
  }
?>