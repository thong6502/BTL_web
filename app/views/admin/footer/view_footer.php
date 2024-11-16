<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '//BTL_web/app/controllers/Admin/footerController/hienthi_footer_controller.php');
  global $result;
  $row = mysqli_fetch_assoc($result);
?>

<link rel="stylesheet" href="/BTL_web/app/views/admin/footer/view_footer.css">
<div class="container">
<h2>Thay đổi nội dung footer</h2>
<form action="/BTL_web/app/controllers/Admin/footerController/sua_footer_controller.php" method="post">
  <input type="hidden" name="id_footer" value="<?php echo $row['id_footer']; ?>">
    <table>
    <tbody>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="diachi" value="<?php echo $row['diachi']; ?>" required></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="text" name="lienhe" value="<?php echo $row['lienhe']; ?>" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $row['email']; ?>" required></td>
        </tr>
    </tbody>
    </table>
    <button type="submit">Thay đổi</button>
</form>
</div>