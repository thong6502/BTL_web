<link rel="stylesheet" href="./sanpham/view_list_sanpham.css">
<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/controllers/Admin/sanphamController/hienthi_sanpham_controller.php');
  global $result;
?>
<div class="container">
  <h2>Thông tin sản phẩm</h2>
  <div class="table-container">
    <table>
      <thead>
        <td colspan="2" style="text-align: center;">Tên sản phẩm</td>
        <td>Giá bán</td>
        <td>Chi tiết</td>
        <td colspan="2" style="text-align: center;">Tùy chọn</td>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "  <td><img style='width:120px; height:50px;' src='{$row['img_path']}' alt=''></td>";
            echo "  <td>{$row['tensp']}</td>";
            echo "  <td>{$row['giaban']}</td>";
            echo "  <td class = 'multi-line-text'>{$row['chitiet']}</td>";
            echo "  <td><a href='#'><button>Sửa</button></a></td>";
            echo "  <td><a href='#'><button>Xóa</button></a></td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
  <a href="./?page=them_sanpham"><button>Thêm sản phẩm</button></a>
</div>