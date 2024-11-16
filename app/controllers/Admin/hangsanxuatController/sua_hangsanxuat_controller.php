<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/hangsanxuat.php');
  $hangsanxuat = new data_hangsanxuat();
  $result = $hangsanxuat->sua_hang_san_xuat($_POST['id_hsx'], $_POST['tenhsx']);
  if($result){
    echo '<script>alert("Sửa thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlhang";</script>';
  }else{
    echo '<script>alert("Sửa thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qlhang";</script>';
  }
?>