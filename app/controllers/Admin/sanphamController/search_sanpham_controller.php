<?php
  include("../../../models/sanpham.php");
  $sanpham = new data_sanpham();
  $result = $sanpham->search_sanpham($_POST["id_hsx"], $_POST["tensp"]);
  
?>