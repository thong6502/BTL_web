<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/hangsanxuat.php');
  $hangsanxuat = new data_hangsanxuat();
  $result = $hangsanxuat->xoa_hang_san_xuat($_GET['id_hsx']);
  if($result){
    echo '<script>alert("Xóa thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlhang";</script>';
  }else{
    echo '<script>alert("Xóa thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qlhang";</script>';
  }
?>