<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/config/dbconnect.php");

  class data_sanpham
  {
    public function hien_thi_sanpham(){
      global $conn;
      $sql = "SELECT * FROM tbl_sanpham";
      $result = mysqli_query($conn, $sql);
      return $result;
    }

    public function sua_san_pham($id_sp, $id_hsx, $id_dm, $tensanpham, $giaban, $img_path, $chitiet){
      global $conn;
      $sql = "UPDATE tbl_sanpham SET id_hsx = $id_hsx, = , tensanpham = $tensanpham, giaban = $giaban, img_path = $img_path, chitiet = $chitiet WHERE id_sp = $id_sp";
      $result = mysqli_query($conn, $sql);
      if($result){
        return true;
      }else{
        return false;
      }
    }

    public function them_san_pham($id_hsx, $id_dm, $tensanpham, $giaban, $img_path, $chitiet){
      global $conn;
      $sql = "INSERT INTO tbl_sanpham (id_hsx,, tensanpham, giaban, img_path, chitiet) VALUES ($id_hsx, , $tensanpham, $giaban, $img_path, $chitiet)";
      $result = mysqli_query($conn, $sql);
      if($result){
        return true;
      }else{
        return false;
      }
    }

    public function xoa_san_pham($id_sp){
      global $conn;
      $sql = "DELETE FROM tbl_sanpham WHERE id_sp = $id_sp";
      $result = mysqli_query($conn, $sql);
      return $result;
    }

    public function search_sanpham($id_hsx, $tensp){
      global $conn;
      $sql = "SELECT * FROM tbl_sanpham WHERE id_hsx LIKE '%$id_hsx%' AND tensp LIKE '%$tensp%'";
      $result = mysqli_query($conn, $sql);
      return $result;
    }

  }
?>