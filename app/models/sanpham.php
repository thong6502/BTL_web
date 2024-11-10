<?php
  include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/config/dbconnect.php");

class data_sanpham
{
    // Phương thức để hiển thị sản phẩm với phân trang
    public function hien_thi_sanpham($limit, $offset)
    {
        global $conn;
        // Câu lệnh SQL sử dụng LIMIT và OFFSET để phân trang
        $sql = "SELECT * FROM tbl_sanpham LIMIT $limit OFFSET $offset";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    // Phương thức lấy tổng số sản phẩm
    public function get_total_sanpham()
    {
        global $conn;
        // Lấy tổng số sản phẩm (để tính tổng số trang)
        $sql = "SELECT COUNT(*) as total FROM tbl_sanpham";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $data = mysqli_fetch_assoc($result);
            return $data['total']; // Trả về tổng số sản phẩm
        } else {
            return 0;
        }
    }

    // Các phương thức khác (sửa, thêm, xóa, tìm kiếm, v.v.)
    public function sua_san_pham($id_sp, $id_hsx, $id_dm, $tensanpham, $giaban, $img_path, $chitiet)
    {
        global $conn;
        $sql = "UPDATE tbl_sanpham SET id_hsx = $id_hsx, tensanpham = '$tensanpham', giaban = $giaban, img_path = '$img_path', chitiet = '$chitiet' WHERE id_sp = $id_sp";
        $result = mysqli_query($conn, $sql);
        return $result ? true : false;
    }

    public function them_san_pham($id_hsx, $id_dm, $tensanpham, $giaban, $img_path, $chitiet)
    {
        global $conn;
        $sql = "INSERT INTO tbl_sanpham (id_hsx, id_dm, tensanpham, giaban, img_path, chitiet) VALUES ($id_hsx, $id_dm, '$tensanpham', $giaban, '$img_path', '$chitiet')";
        $result = mysqli_query($conn, $sql);
        return $result ? true : false;
    }

    public function xoa_san_pham($id_sp){
      global $conn;
      $sql = "UPDATE tbl_sanpham SET is_xoa = 0 WHERE id_sp = $id_sp";
      $result = mysqli_query($conn, $sql);
      if($result){
        return true;
      }else{
        return false;
      }
    }

    public function khoi_phuc_san_pham($id_sp){
      global $conn;
      $sql = "UPDATE tbl_sanpham SET is_xoa = 1 WHERE id_sp = $id_sp";
      $result = mysqli_query($conn, $sql);
      if($result){
        return true;
      }else{
        return false;
      }
    }

    public function search_sanpham($id_hsx, $tensp)
    {
        global $conn;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_hsx LIKE '%$id_hsx%' AND tensp LIKE '%$tensp%'";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    public function lay_sanpham_theo_id($id)
    {
        global $conn;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sp = $id"; // Chỉ lấy sản phẩm chưa bị xóa
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result); // Trả về dữ liệu sản phẩm dưới dạng mảng
        } else {
            return null; // Trả về null nếu không tìm thấy sản phẩm
        }
    }
}
?>
