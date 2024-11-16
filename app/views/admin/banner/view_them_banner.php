<link rel="stylesheet" href="/BTL_web/app/views/admin/banner/view_them_banner.css">
<div class="container">
  <h2>Thêm banner</h2>
  <form action="/BTL_web/app/controllers/Admin/bannerController/them_banner_controller.php" method="post">
    <input type="hidden" name="id_banner">
    <input required type="hidden" name="img_path" id="img_path" >
    <table>
      <tr class="image-upload-row">
        <td>
          <label class="image-upload-label" for="img">Chọn ảnh</label>
          <input required type="file" name="image" id="img" accept="image/*">
        </td>
        <td >
          <div class="image-preview-cell"><img id="previewImage" src="" alt="" width="200"></div>
        </td>
      </tr>
    </table>
    <button type="submit">Thêm mới</button>
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