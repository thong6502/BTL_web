<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/controllers/Admin/hangsanxuatController/hienthi_hangsanxuat_controller.php');
  global $result;

?>

<link rel="stylesheet" href="./sanpham/view_them_sanpham1.css">
<div class="container">
  <h2>Thêm sản phẩm</h2>
  <form action="/BTL_web/app/controllers/Admin/sanphamController/them_sanpham_controller.php" method="post">
    <input required type="hidden" name="img_path" id="img_path"> 
    <table>
      <tr>
        <td>Tên sản phẩm</td>
        <td><input required type="text" name="tensp"></td>
      </tr>
      <tr>
        <td>Hãng sản xuất</td>
        <td>
          <select name="id_hsx">
            <?php
              while($row = mysqli_fetch_assoc($result)){
                echo "<option value='{$row['id_hsx']}'>{$row['tenhsx']}</option>";
              }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Giá bán</td>
        <td><input required type="number" name="giaban"></td>
      </tr>
      <tr class="image-upload-row">
        <td>
          <label class="image-upload-label" for="img">Chọn ảnh</label>
          <input required type="file" name="image" id="img" accept="image/*">
        </td>
        <td >
          <div class="image-preview-cell"><img id="previewImage" src="#" alt="" width="200"></div>
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><input required type="text" name="mota" id=""></td>
      </tr>
      <tr>
        <td>Chi tiết</td>
        <td><textarea rows="4" name="chitiet" id=""></textarea></td>
      </tr>
    </table>
    <button type="submit">Thêm sản phẩm</button>
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