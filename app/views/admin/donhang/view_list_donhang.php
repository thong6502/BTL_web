<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/controllers/Admin/donhangController/hienthi_donhang_controller.php');

  global $result;
?>

<link rel="stylesheet" href="/BTL_web/app/views/admin/donhang/view_list_donhang1.css">
<div class="container">
  <h2>Danh sách Đơn hàng</h2>
  <div class="table-container">
    <table>
      <thead>
          <td>ID</td>
          <td>Tên khách hàng</td>
          <td>Ngày bán</td>
          <td>Tổng tiền</td>
          <td colspan="2" style="text-align: center;">Tùy chọn</td>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "  <td>{$row['id_hd']}</td>";
            echo "  <td>{$row['hoten']}</td>";
            echo "  <td>{$row['ngay_ban']}</td>";
            $tongtien_dinh_dang = number_format($row['tongtien'], 0, '.', '.') . " VNĐ";
            echo "  <td>{$tongtien_dinh_dang}</td>";
            echo "  <td><a href='./?page=chitiet_donhang&id_hd={$row['id_hd']}'><button type='button'>Chi tiết</button></a></td>";
            echo "  <td><a href='/BTL_web/app/controllers/Admin/donhangController/xoa_donhang_controller.php?id_hd={$row['id_hd']}'><button type='button'>Xóa</button></a></td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</div>