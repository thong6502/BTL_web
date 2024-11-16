<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/sanpham.php');
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/khachhang.php');

$get_data = new data_sanpham();
$get_customer = new data_khachhang();

// Lấy ID khách hàng từ session
$id_kh = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if (!$id_kh) {
    echo "<div class='alert alert-danger'>Vui lòng đăng nhập để tiến hành thanh toán.</div>";
    exit;
}

// Lấy thông tin khách hàng
$customer = $get_customer->get_khach_hang_by_id($id_kh);

// Kiểm tra giỏ hàng
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
if (empty($cart_items)) {
    echo "<div class='alert alert-danger'>Giỏ hàng của bạn đang trống! <a href='/BTL_web/app/views/user/user.php'>Quay lại mua sắm</a></div>";
    exit;
}

// Tính tổng tiền
$total_price = 0;
foreach ($cart_items as $item) {
    $product = $get_data->lay_sanpham_theo_id($item['id_sp']);
    if ($product) {
        $total_price += $item['quantity'] * $product['giaban'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Xác nhận Thanh Toán</h2>
        <hr>

        <!-- Hiển thị giỏ hàng -->
        <h4>🛒 Thông tin giỏ hàng</h4>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng cộng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart_items as $item): ?>
                    <?php
                    $product = $get_data->lay_sanpham_theo_id($item['id_sp']);
                    if ($product):
                        $subtotal = $product['giaban'] * $item['quantity'];
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($product['tensp']); ?></td>
                            <td><?php echo number_format($product['giaban'], 0, ',', '.'); ?> VND</td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td><?php echo number_format($subtotal, 0, ',', '.'); ?> VND</td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4 class="text-right">Tổng tiền: <span class="text-danger"><?php echo number_format($total_price, 0, ',', '.'); ?> VND</span></h4>
        <hr>

        <!-- Biểu mẫu xác nhận thanh toán -->
        <h4>Thông tin khách hàng</h4>
        <form action="/BTL_web/app/views/user/confirm_order/process_payment.php" method="POST">
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" class="form-control" id="name" name="customer_name" value="<?php echo htmlspecialchars($customer['hoten']); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" class="form-control" id="phone" name="customer_phone" value="<?php echo htmlspecialchars($customer['sdt']); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ giao hàng:</label>
                <textarea class="form-control" id="address" name="customer_address" rows="3" required><?php echo htmlspecialchars($customer['diachi']); ?></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-danger">💳 Xác nhận Thanh Toán</button>
            </div>
        </form>

    </div>
</body>

</html>