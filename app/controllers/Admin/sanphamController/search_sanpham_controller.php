<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/models/sanpham.php");
  $sanpham = new data_sanpham();
  $result = $sanpham->search_sanpham($_POST["id_hsx"], $_POST["tensp"]);
  
?>