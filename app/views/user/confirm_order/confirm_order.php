<?php
session_start();

// Bao gồm các tệp cần thiết với đường dẫn tuyệt đối
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/global.php');
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/sanpham.php'); // Bao gồm lớp sanpham
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/giohang.php'); // Bao gồm lớp sanpham

// Khởi tạo đối tượng $get_data
$get_data = new data_sanpham();

// Kiểm tra giỏ hàng
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
if (empty($cart_items)) {
    echo "Giỏ hàng trống. Không thể tiến hành thanh toán.";
    exit;
}

// Kiểm tra người dùng đã đăng nhập chưa
$id_kh = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
if (!$id_kh) {
    echo "Vui lòng đăng nhập để tiến hành thanh toán.";
    exit;
}

// Tính tổng tiền của giỏ hàng
$total_price = 0;
foreach ($cart_items as $item) {
    $product = $get_data->lay_sanpham_theo_id($item['id_sp']);
    if ($product) {
        $total_price += $item['quantity'] * $product['giaban'];
    }
}

// Tạo hóa đơn mới
$sql_create_order = "INSERT INTO tbl_hoadon (id_kh, ngay_ban, tongtien) VALUES ($id_kh, NOW(), $total_price)";
if (mysqli_query($conn, $sql_create_order)) {
    $id_hd = mysqli_insert_id($conn); // Lấy id_hd của hóa đơn vừa tạo
} else {
    echo "Lỗi khi tạo hóa đơn: " . mysqli_error($conn);
    exit;
}

// Thêm sản phẩm vào chi tiết hóa đơn
foreach ($cart_items as $item) {
    $id_sp = $item['id_sp'];
    $quantity = $item['quantity'];
    $sql_add_to_order_details = "INSERT INTO tbl_chitiethoadon (id_hd, id_sp, soluong) VALUES ($id_hd, $id_sp, $quantity)";
    if (!mysqli_query($conn, $sql_add_to_order_details)) {
        echo "Lỗi khi thêm sản phẩm vào chi tiết hóa đơn: " . mysqli_error($conn) . "<br>";
        exit;
    }
}

// Xóa giỏ hàng sau khi thanh toán thành công
unset($_SESSION['cart']); // Giỏ hàng đã được thanh toán, xóa nó đi

// Hiển thị thông báo thanh toán thành công
echo "<div class='container mt-5'>";
echo "<div class='alert alert-success'>Thanh toán thành công! Cảm ơn bạn đã mua hàng.</div>";
echo "<a href='/BTL_web/app/views/user/user.php' class='btn btn-primary'>🔙 Quay về trang chủ</a>";
echo "</div>";
?>
