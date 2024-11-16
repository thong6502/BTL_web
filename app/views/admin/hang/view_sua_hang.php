<link rel="stylesheet" href="/BTL_web/app/views/admin/hang/view_sua_hang.css">
<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/hangsanxuat.php');
  $hangsanxuat = new data_hangsanxuat();
  $result = $hangsanxuat->search_hang_san_xuat_by_id($_GET['id_hsx']);
  $row = mysqli_fetch_assoc($result);
?>
<div class="container">
  <h2>Sửa hãng </h2>
  <form action="/BTL_web/app/controllers/Admin/hangsanxuatController/sua_hangsanxuat_controller.php" method="post">
      <input type="hidden" name="id_hsx" value="<?php echo $row['id_hsx'] ?>">
      <table>
      <tbody>
        <tr>
          <td>Tên hãng</td>
          <td><input type="text" name="tenhsx" value="<?php echo $row['tenhsx'] ?>" required></td>
        </tr>
      </tbody>
    </table>
    <button type="submit">Sửa</button>
  </form>
</div>
