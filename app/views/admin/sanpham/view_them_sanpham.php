

<div class="container">
  <h2>Thêm sản phẩm</h2>
  <form action="./" method="post">
    <input type="hidden" name="img_path" id="img_path"> 
    <table>
      <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tensp"></td>
      </tr>
      <tr>
        <td>Hãng sản xuất</td>
        <td>
          <select name="id_hsx">
          </select>
        </td>
      </tr>
      <tr>
        <td>Giá bán</td>
        <td><input type="number" name="giaban"></td>
      </tr>
      <tr>
        <td><img id="previewImage" src="#" alt="" width="200"></td>
        <td><input type="file" name="image" id="img" accept="image/*"></td>
      </tr>
    </table>
    <button type="submit">Thêm</button>
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