<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/chuchay.php');
  $chuchay = new data_chuchay();
  $result = $chuchay->sua_chuchay($_POST['id_textchay'], $_POST['noidung']);
  if($result){
    echo '<script>alert("Thay đổi thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlchuchay";</script>';
  }else{
    echo '<script>alert("Thay đổi thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qlchuchay";</script>';
  }

?>