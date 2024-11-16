<link rel="stylesheet" href="./hang/view_list_hang.css">
<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/controllers/Admin/hangsanxuatController/hienthi_hangsanxuat_controller.php');
  global $result;
?>

<div class="container">
  <h2>Danh sách hãng sản phẩm</h2>
  <div class="table-container">
    <table>
      <thead>
        <td>ID</td>
        <td>Tên hãng</td>
        <td colspan="2" style="text-align: center; width: 200px;">Tùy chọn</td>
      </thead>
            <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "  <td>{$row['id_hsx']}</td>";
            echo "  <td>{$row['tenhsx']}</td>";
            echo "  <td><a href='./?id_hsx={$row['id_hsx']}&page=sua_hang'><button type='button'>Sửa</button></a></td>";
            echo "  <td><a href='/BTL_web/app/controllers/Admin/hangsanxuatController/xoa_hangsanxuat_controller.php?id_hsx={$row['id_hsx']}'><button>Xóa</button></a></td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
  <a href="./?page=them_hang"><button>Thêm</button></button></a>
</div>