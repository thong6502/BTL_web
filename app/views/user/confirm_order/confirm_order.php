<?php
// Kiểm tra nếu có `id_sp` trong POST
if (isset($_POST['id_sp'])) {
    $id_sp = $_POST['id_sp'];

    // Lấy thông tin sản phẩm từ cơ sở dữ liệu
    include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/sanpham.php');
    $get_data = new data_sanpham();
    $product = $get_data->lay_sanpham_theo_id($id_sp);

    // Kiểm tra xem sản phẩm có tồn tại không
    if ($product) {
?>
        <!DOCTYPE html>
        <html lang="vi">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Thanh toán</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        </head>

        <body>
            <div class="container mt-5">
                <h2 class="mb-4">Thông tin thanh toán</h2>

                <!-- Thông tin sản phẩm -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['tensp']); ?></h5>
                        <p class="card-text">Giá: <?php echo number_format(htmlspecialchars($product['giaban']), 0, ',', '.'); ?> VND</p>
                        <input type="hidden" name="id_sp" value="<?php echo htmlspecialchars($product['id_sp']); ?>">
                    </div>
                </div>

                <!-- Form thông tin khách hàng -->
                <form action="confirm_order.php" method="POST">
                    <input type="hidden" name="id_sp" value="<?php echo htmlspecialchars($product['id_sp']); ?>">

                    <div class="form-group">
                        <label for="user">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="hoten">Họ và tên</label>
                        <input type="text" class="form-control" id="hoten" name="hoten" required>
                    </div>

                    <div class="form-group">
                        <label for="diachi">Địa chỉ</label>
                        <input type="text" class="form-control" id="diachi" name="diachi" required>
                    </div>

                    <div class="form-group">
                        <label for="sdt">Số điện thoại</label>
                        <input type="text" class="form-control" id="sdt" name="sdt" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email (Tùy chọn)</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <h5 class="mt-4">Tổng tiền: <?php echo number_format(htmlspecialchars($product['giaban']), 0, ',', '.'); ?> VND</h5>

                    <button type="submit" class="btn btn-success mt-3">Xác nhận đặt hàng</button>

                    <a href="/BTL_web/app/views/user/user.php" class="btn btn-secondary mt-3">🔙 Quay về</a>

                </form>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        </body>

        </html>
<?php
    } else {
        echo "Không tìm thấy sản phẩm.";
    }
} else {
    echo "ID sản phẩm không hợp lệ.";
}
?>