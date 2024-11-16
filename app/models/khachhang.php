<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/config/dbconnect.php");

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

public function xoa_khachhang($id_kh){
    global $conn;

    mysqli_begin_transaction($conn);

    try {
        $sql_lay_id_hd = "SELECT id_hd FROM tbl_hoadon WHERE id_kh = $id_kh";
        $result_id_hd = mysqli_query($conn, $sql_lay_id_hd);

        if (!$result_id_hd) {
            throw new Exception("Lỗi lấy danh sách hóa đơn: " . mysqli_error($conn));
        }

        while ($row_hd = mysqli_fetch_assoc($result_id_hd)) {
            $id_hd = $row_hd['id_hd'];
            $sql_xoa_cthd = "DELETE FROM tbl_chitiethoadon WHERE id_hd = $id_hd";
            $result_xoa_cthd = mysqli_query($conn, $sql_xoa_cthd);
            if (!$result_xoa_cthd) {
                throw new Exception("Lỗi xóa chi tiết hóa đơn: " . mysqli_error($conn));
            }
        }


        // Xóa hóa đơn liên quan
        $sql_xoa_hd = "DELETE FROM tbl_hoadon WHERE id_kh = $id_kh";
        $result_xoa_hd = mysqli_query($conn, $sql_xoa_hd);

        if (!$result_xoa_hd) {
            throw new Exception("Lỗi xóa hóa đơn: " . mysqli_error($conn));
        }

        // Xóa khách hàng
        $sql_xoa_kh = "DELETE FROM tbl_khachhang WHERE id_kh = $id_kh";
        $result_xoa_kh = mysqli_query($conn, $sql_xoa_kh);

        if (!$result_xoa_kh) {
            throw new Exception("Lỗi xóa khách hàng: " . mysqli_error($conn));
        }

        // Commit transaction nếu tất cả thành công
        mysqli_commit($conn);
        return true;

    } catch (Exception $e) {
        // Rollback nếu có lỗi
        mysqli_rollback($conn);
        error_log("Lỗi xóa khách hàng: " . $e->getMessage());
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