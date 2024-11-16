<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
  class data_donhang
  {
    public function hienthi_donhang(){
      global $conn;
      $sql = "SELECT hd.id_hd, kh.hoten, hd.ngay_ban, hd.tongtien
              FROM tbl_khachhang kh
              JOIN tbl_hoadon hd ON kh.id_kh = hd.id_kh
              JOIN tbl_chitiethoadon cthd ON hd.id_hd = cthd.id_hd
              JOIN tbl_sanpham sp ON cthd.id_sp = sp.id_sp";
      $result = mysqli_query($conn, $sql);
      return $result;
    }
    public function chitiet_donhang($id_hd){
    global $conn;
    $sql = "SELECT sp.tensp, sp.giaban, sp.img_path, cthd.soluong
            FROM tbl_khachhang kh
            JOIN tbl_hoadon hd ON kh.id_kh = hd.id_kh
            JOIN tbl_chitiethoadon cthd ON hd.id_hd = cthd.id_hd
            JOIN tbl_sanpham sp ON cthd.id_sp = sp.id_sp
            WHERE hd.id_hd = $id_hd";
    $result = mysqli_query($conn, $sql);
    return $result;
    }
    public function xoa_donhang($id_hd){
      global $conn;
      mysqli_begin_transaction($conn);
      try {
        // Xóa chi tiết hóa đơn trước
        $sql_xoa_cthd = "DELETE FROM tbl_chitiethoadon WHERE id_hd = $id_hd";
        $result_xoa_cthd = mysqli_query($conn, $sql_xoa_cthd);

        if (!$result_xoa_cthd) {
            throw new Exception("Lỗi xóa chi tiết hóa đơn: " . mysqli_error($conn));
        }
        // Xóa hóa đơn
        $sql_xoa_hd = "DELETE FROM tbl_hoadon WHERE id_hd = $id_hd";
        $result_xoa_hd = mysqli_query($conn, $sql_xoa_hd);
        if (!$result_xoa_hd) {
            throw new Exception("Lỗi xóa hóa đơn: " . mysqli_error($conn));
        }
        mysqli_commit($conn);
        return true; 
      } 
      catch (Exception $e) {
        mysqli_rollback($conn);
        error_log("Lỗi xóa đơn hàng: " . $e->getMessage());
        return false; 
        }
      }
    }
?>