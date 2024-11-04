<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/config/dbconnect.php");//dẫn tuyệt đối
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/global.php");  

  class data_khachhang
  {
    public function hien_thi_khachhang(){
      global $conn;
      $sql = "SELECT * FROM tbl_khachhang";
      $result = mysqli_query($conn, $sql);
      return $result;
    }

    public function dang_ky($user, $pass){
      global $conn;
      $sql = "INSERT INTO tbl_khachhang(user, pass) VALUES($user, $pass)";
      $result = mysqli_query($conn, $sql);
      if($result){
        return true;
      }else{
        return false;
      }
    }

    public function dang_nhap($user, $pass){
      global $conn;
      global $id_kh;
      $sql = "SELECT * FROM tbl_khachhang WHERE user = '$user' AND pass = '$pass'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        $id_kh = mysqli_fetch_array($result, 0)['id_kh'];
        return true;
      }else{
        return false;
      }
    }


    public function sua_khach_hang($hoten, $sdt, $diachi){
      global $conn;
      global $id_kh;
      $sql = "UPDATE tbl_khachhang SET hoten = '$hoten', sdt = '$sdt', diachi = '$diachi' WHERE id_kh = '$id_kh'";
      $result = mysqli_query($conn, $sql);    
      if($result){
        return true;
      }else{
        return false;
      }
  }

  public function xoa_khach_hang($id_kh){
    global $conn;
    $sql = "UPDATE tbl_khachhang SET is_xoa = 1 WHERE id_kh = '$id_kh'";
    $result = mysqli_query($conn,$sql);
    if($result){
      return true;
    }else{
      return false;
    }
  }

  public function khoi_phuc_khach_hang($id_kh){
    global $conn;
    $sql = "UPDATE tbl_khachhang SET is_xoa = 0 WHERE id_kh = '$id_kh'";
    $result = mysqli_query($conn,$sql);
    if($result){
      return true;
    }else{
      return false;
    }
  }

  public function search_khach_hang_by_ten($hoten){
    global $conn;
    $sql = "SELECT * FROM tbl_khachhang WHERE hoten LIKE '%$hoten%'";
    $result = mysqli_query($conn, $sql);
    return $result;
  }
  
  public function get_khach_hang_by_id($id_kh) {
    global $conn;
    $sql = "SELECT * FROM tbl_khachhang WHERE id_kh = '$id_kh'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}


}

?>