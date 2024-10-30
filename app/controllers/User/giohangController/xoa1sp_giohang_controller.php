<?php
  include("../../../models/giohang.php");
  $giohang = new data_gio_hang();
  $giohang->xoa_mot_sp_gio_hang($_POST['id_sp']);
?>