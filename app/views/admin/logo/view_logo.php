<link rel="stylesheet" href="/BTL_web/app/views/admin/logo/view_logo.css">
<div class="container">
  <h2>Thay đổi logo</h2>
  <form action="/BTL_web/app/controllers/Admin/logoController/sua_logo_controller.php" method="post">
    <input type="hidden" name="id_logo" value="<?php echo $row_logo['id_logo']; ?>">
    <input required type="hidden" name="img_path" id="img_path" value="<?php echo $row_logo['img_path'];?>" >
    <table>
      <tr class="image-upload-row">
        <td>
          <label class="image-upload-label" for="img">Chọn ảnh</label>
          <input required type="file" name="image" id="img" accept="image/*">
        </td>
        <td >
          <div class="image-preview-cell"><img id="previewImage" src="<?php echo $row_logo['img_path'] ?>" alt="" width="200"></div>
        </td>
      </tr>
    </table>
    <button type="submit">Thay đổi</button>
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