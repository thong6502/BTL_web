<?php
session_start();

// Kiểm tra nếu có `id_sp` trong POST
if (isset($_POST['id_sp'])) {
    $id_sp = $_POST['id_sp'];
    
    // Khởi tạo giỏ hàng trong session nếu chưa có
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    // Kiểm tra nếu sản phẩm đã có trong giỏ
    if (isset($_SESSION['cart'][$id_sp])) {
        $_SESSION['cart'][$id_sp]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$id_sp] = [
            'id_sp' => $id_sp,
            'quantity' => 1,
        ];
    }

    // Thêm thông báo vào session
    $_SESSION['success_message'] = "Sản phẩm đã được thêm vào giỏ hàng thành công!";

    // Chuyển hướng trở lại trang chi tiết sản phẩm
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    echo "ID sản phẩm không hợp lệ.";
}
?>
