<link rel="stylesheet" href="/BTL_web/app/views/admin/hang/view_them_hang.css">
<div class="container">
  <h2>Thêm hãng </h2>
  <form action="/BTL_web/app/controllers/Admin/hangsanxuatController/them_hangsanxuat_controller.php" method="post">
    
      <table>
      <tbody>
        <tr>
          <td>Tên hãng</td>
          <td><input type="text" name="tenhsx" require></td>
        </tr>
      </tbody>
    </table>
    <button type="submit">Thêm</button>
  </form>
</div>