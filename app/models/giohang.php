<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/global.php');


class data_gio_hang
{
  public function them_mot_sp_gio_hang($id_sp)
  {
    global $id_hd;
    global $id_kh;
    global $conn;
    if ($id_hd) {
      // Nếu id hóa đơn tồn tại thì thêm vào "chi tiết hóa đơn"
      $sql_tbl_chitiethoadon = "INSERT INTO tbl_chitiethoadon(id_hd, id_sp, soluong) VALUES($id_hd, $id_sp, 1)";
      mysqli_query($conn, $sql_tbl_chitiethoadon);
    } else {
      // Nếu chưa có id hóa đơn thì thêm vào "hóa đơn" và "chi tiết hóa đơn"
      $sql_tbl_hoadon = "INSERT INTO  tbl_hoadon(tongtien) values (0)";
      mysqli_query($conn, $sql_tbl_hoadon);

      // Lấy id_hd vừa thêm
      $sql_select_id = "SELECT id_hd FROM tbl_hoadon where id_kh = $id_kh ORDER BY id_hd DESC LIMIT 1";
      $result = mysqli_query($conn, $sql_select_id);
      $id_hd = mysqli_fetch_array($result, 0)['id_hd'];

      // Thêm vào chi tiết hóa đơn
      $sql_tbl_chitiethoadon = "INSERT INTO tbl_chitiethoadon(id_hd, id_sp, soluong) VALUES($id_hd, $id_sp, 1)";
      mysqli_query($conn, $sql_tbl_chitiethoadon);
    }
  }
  public function xoa_mot_sp_gio_hang($id_sp)
  {
    global $id_hd;
    global $conn;
    $sql = "DELETE FROM tbl_chitiethoadon WHERE id_hd = $id_hd AND id_sp = $id_sp";
    mysqli_query($conn, $sql);
  }
  
}
