<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/controllers/Admin/bannerController/hienthi_banner_controller.php');
  global $result;
?>
<link rel="stylesheet" href="/BTL_web/app/views/admin/banner/view_banner1.css">

<div class="container">
  <h2>Thông tin banner</h2>
  <div class="table-container">
    <table>
      <thead>
        <td>Banner</td>
        <td colspan="2" style="text-align: center;">Tùy chọn</td>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "  <td><img object-fit: contain; style='width:230px; height:120px;' src='{$row['img_path']}' alt=''></td>";
            echo "  <td><a href='./?id_banner={$row['id_banner']}&page=sua_banner'><button type='button'>Thay đổi</button></a></td>";
            echo "  <td><a href='/BTL_web/app/controllers/Admin/bannerController/xoa_banner_controller.php?id_banner={$row['id_banner']}'><button type='button'>Xóa</button></a></td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
  <a href="./?page=them_banner"><button>Thêm</button></button></a>
</div>
