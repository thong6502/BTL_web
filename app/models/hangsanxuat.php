<?php
  include("../../config/dbconnect.php");
  class data_hangsanxuat
  {
    public function hienthi_hangsanxuat(){
      global $conn;
      $sql = "SELECT * FROM tbl_hangsanxuat";
      $result = mysqli_query($conn, $sql);
      return $result;
    }
    public function search_id_hsx_by_name($tenhsx){
      global $conn;
      $sql = "SELECT id_hsx FROM tbl_hangsanxuat WHERE tenhsx LIKE '%$tenhsx%'";
      $result = mysqli_query($conn, $sql);
      return $result;
    }
  }
?>