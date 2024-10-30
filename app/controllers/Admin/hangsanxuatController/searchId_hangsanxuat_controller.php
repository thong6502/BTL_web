<?php
  include("../../../models/hangsanxuat.php");
  $hangsanxuat = new data_hangsanxuat();
  $result = $hangsanxuat->search_id_hsx_by_name($_POST['tenhsx']);
?>