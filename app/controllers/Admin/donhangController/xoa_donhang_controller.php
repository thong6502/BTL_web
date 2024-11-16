<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/donhang.php');
  $donhang = new data_donhang();
  $result = $donhang->xoa_donhang($_GET['id_hd']);
  if($result){
    echo '<script>alert("Xóa thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qldonhang";</script>';
  }else{
    echo '<script>alert("Xóa thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qldonhang";</script>';
  }
?>