<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/donhang.php');
  $donhang = new data_donhang();
  $result = $donhang->chitiet_donhang($_GET["id_hd"]);
?>


<link rel="stylesheet" href="/BTL_web/app/views/admin/donhang/view_chitiet_donhang1.css">

<div class="container">
  <h2>ID hóa đơn : <?php echo $_GET["id_hd"]; ?></h2>
  <div class="table-container">
    <table>
      <thead>
          <td colspan="2">Tên sản phẩm</td>
          <td>Giá bán</td>
          
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "  <td><img src='{$row['img_path']}'></td>";
            echo "  <td>{$row['tensp']}</td>";
            $giaban_dinh_dang = number_format($row['giaban'], 0, '.', '.') . " VNĐ";
            echo "  <td>{$giaban_dinh_dang}</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
  <a href="./?page=qldonhang"><button>Quay lại</button></button></a>
</div>