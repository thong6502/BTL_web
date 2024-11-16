<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/sanpham.php');

$get_data = new data_sanpham();

// Lấy ID khách hàng từ session
$id_kh = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if (!$id_kh) {
    die("Vui lòng đăng nhập để tiếp tục.");
}

// Kiểm tra giỏ hàng
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
if (empty($cart_items)) {
    die("Giỏ hàng của bạn đang trống!");
}

// Tính tổng tiền
$total_price = 0;
foreach ($cart_items as $item) {
    $product = $get_data->lay_sanpham_theo_id($item['id_sp']);
    if ($product) {
        $total_price += $product['giaban'] * $item['quantity'];
    }
}

// Bắt đầu giao dịch
$conn->begin_transaction();

try {
    // Tạo hóa đơn
    $sql_order = "INSERT INTO tbl_hoadon (id_kh, ngay_ban, tongtien) VALUES (?, NOW(), ?)";
    $stmt_order = $conn->prepare($sql_order);
    $stmt_order->bind_param("id", $id_kh, $total_price);
    $stmt_order->execute();
    $order_id = $stmt_order->insert_id;
    $stmt_order->close();

    // Thêm chi tiết hóa đơn
    $sql_item = "INSERT INTO tbl_chitiethoadon (id_hd, id_sp, soluong) VALUES (?, ?, ?)";
    $stmt_item = $conn->prepare($sql_item);
    foreach ($cart_items as $item) {
        $stmt_item->bind_param("iii", $order_id, $item['id_sp'], $item['quantity']);
        $stmt_item->execute();
    }
    $stmt_item->close();



    // Xóa giỏ hàng
    unset($_SESSION['cart']);

    // Hoàn tất giao dịch
    $conn->commit();

    // Điều hướng đến trang cảm ơn
    header("Location: /BTL_web/app/views/user/confirm_order/thank_you.php");
    exit();
} catch (Exception $e) {
    $conn->rollback();
    die("Lỗi khi thanh toán: " . $e->getMessage());
}
