<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
  class data_hangsanxuat
  {
    public function hienthi_hangsanxuat(){
      global $conn;
      $sql = "SELECT * FROM tbl_hangsanxuat";
      $result = mysqli_query($conn, $sql);
      return $result;
    }
    public function them_hang_san_xuat($tenhsx){
      global $conn;
      $sql = "INSERT INTO tbl_hangsanxuat (tenhsx) VALUES ('$tenhsx')";
      $result = mysqli_query($conn, $sql);
      return $result;
    }
    public function sua_hang_san_xuat($id_hsx, $tenhsx){
      global $conn;
      $sql = "UPDATE tbl_hangsanxuat SET tenhsx = '$tenhsx' WHERE id_hsx = $id_hsx";
      $result = mysqli_query($conn, $sql);
      return $result;
    }
    public function xoa_hang_san_xuat($id_hsx){
      global $conn;
      $sql = "DELETE FROM tbl_hangsanxuat WHERE id_hsx = $id_hsx";
      $result = mysqli_query($conn, $sql);
      return $result;
    }
    public function search_hang_san_xuat_by_id($id_hsx){
      global $conn;
      $sql = "SELECT * FROM tbl_hangsanxuat WHERE id_hsx = $id_hsx";
      $result = mysqli_query($conn, $sql);
      return $result;
    }
  }
?>