<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/footer.php');
  $footer = new data_footer();
  $result = $footer->sua_footer($_POST['id_footer'], $_POST['diachi'], $_POST['lienhe'], $_POST['email']);
  if($result){
    echo '<script>alert("Thay đổi thành công"); window.location.href = "/BTL_web/app/views/admin/?page=qlfooter";</script>';
  }else{
    echo '<script>alert("Thay đổi thất bại"); window.location.href = "/BTL_web/app/views/admin/?page=qlfooter";</script>';
  }

?>