<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/controllers/Admin/khachhangController/hienthi_khachhang_controller.php');
  global $result;
?>

<link rel="stylesheet" href="/BTL_web/app/views/admin/khachhang/view_list_khachhang.css">
<div class="container">
  <h2>Danh sách khách hàng</h2>
  <div class="table-container">
    <table>
      <thead>
          <td>ID</td>
          <td>Tài khoản</td>
          <td>Mật khẩu</td>
          <td>Họ tên</td>
          <td>Địa chỉ</td>
          <td>SĐT</td>
          <td>Tùy chọn</td>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "  <td>{$row['id_kh']}</td>";
            echo "  <td>{$row['user']}</td>";
            echo "  <td>{$row['password']}</td>";
            echo "  <td>{$row['hoten']}</td>";
            echo "  <td>{$row['diachi']}</td>";
            echo "  <td>{$row['sdt']}</td>";
            echo "  <td><a href='/BTL_web/app/controllers/Admin/khachhangController/xoa_khachhang_controller.php?id_kh={$row['id_kh']}'><button type='button'>Xóa</button></a></td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</div>