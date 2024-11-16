<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/controllers/Admin/hangsanxuatController/hienthi_hangsanxuat_controller.php');
  global $result;
?>

<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/sanpham.php');
  $sanpham = new data_sanpham();
  $result_sp = $sanpham->search_sanpham_by_id($_GET['id_sp']);
  $row = mysqli_fetch_assoc($result_sp);
?>

<link rel="stylesheet" href="/BTL_web/app/views/admin/sanpham/view_sua_sanpham.css">
<div class="container">
  <h2>Sửa sản phẩm</h2>
  <form action="/BTL_web/app/controllers/Admin/sanphamController/sua_sanpham_controller.php" method="post">
    <input type="hidden" name="id_sp" value="<?php echo $row['id_sp']?>">
    <input required type="hidden" name="img_path" id="img_path" value="<?php echo $row['img_path']?>"> 
    <table>
      <tr>
        <td>Tên sản phẩm</td>
        <td><input required type="text" name="tensp" value="<?php echo $row['tensp']?>"></td>
      </tr>
      <tr>
        <td>Hãng sản xuất</td>
        <td>
          <select name="id_hsx">
            <?php
              while($row_h = mysqli_fetch_assoc($result)){
                $selected = ($row_h['id_hsx'] == $row['id_hsx']) ? 'selected' : '';
                echo "<option {$selected}  value='{$row_h['id_hsx']}'>{$row_h['tenhsx']}</option>";
              }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Giá bán</td>
        <td><input required type="number" name="giaban" value="<?php echo $row['giaban'] ?>"></td>
      </tr>
      <tr class="image-upload-row">
        <td>
          <label class="image-upload-label" for="img">Chọn ảnh</label>
          <input required type="file" name="image" id="img" accept="image/*">
        </td>
        <td >
          <div class="image-preview-cell"><img id="previewImage" src="<?php echo $row['img_path'] ?>" width="200"></div>
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><input required type="text" name="mota" id="" value="<?php echo $row['mota'] ?>"></td>
      </tr>
      <tr>
        <td>Chi tiết</td>
        <td><textarea rows="4" name="chitiet" id=""><?php echo $row['chitiet'] ?></textarea></td>
      </tr>
    </table>
    <button type="submit">Sửa sản phẩm</button>
  </form>
</div>

<script>
  document.getElementById('img').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const previewImage = document.getElementById('previewImage');
    if (file) {
      const reader = new FileReader();

      reader.onload = function(e) {
        previewImage.src = e.target.result;
      }

      reader.readAsDataURL(file);
    } else {
      previewImage.src = '#';
    }

    let fileName = file.name;
    document.getElementById('img_path').value = "/BTL_web/public/imgs/"+fileName;
  });
</script>