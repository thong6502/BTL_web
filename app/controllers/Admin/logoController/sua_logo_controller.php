<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/logo.php');
  $logo = new data_logo();
  $result = $logo->sua_logo($_POST['id_logo'], $_POST['img_path']);
  if($result){
    echo '<script>alert("Thay đổi thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qllogo";</script>';
  }else{
    echo '<script>alert("Thay đổi thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qllogo";</script>';
  }

?>