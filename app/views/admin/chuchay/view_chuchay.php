<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/controllers/Admin/chuchayController/hienthi_chuchay_controller.php');
  global $result;
  $row = mysqli_fetch_assoc($result);
?>

<link rel="stylesheet" href="/BTL_web/app/views/admin/chuchay/view_chuchay.css">

<div class="container">
<h2>Chỉnh sửa chữ chạy</h2>
<form action="/BTL_web/app/controllers/Admin/chuchayController/sua_chuchaycontroller.php" method="post">
  <input type="hidden" name="id_textchay" value="<?php echo $row['id_textchay']; ?>">
    <table>
    <tbody>
        <tr>
        <td>Dòng chữ chạy</td>
        <td><input type="text" name="noidung" value="<?php echo $row['noidung']; ?>" required></td>
        </tr>
    </tbody>
    </table>
    <button type="submit">Thay đổi</button>
</form>
</div>
