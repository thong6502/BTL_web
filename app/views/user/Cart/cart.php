<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/models/sanpham.php');
$get_data = new data_sanpham();

// Kiểm tra nếu giỏ hàng có sản phẩm
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total_price = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="shortcut icon" href="/BTL_web/public/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Footer/Footer.css">
    <link rel="stylesheet" href="../Header/Header.css">
</head>

<body>
    <?php
    include("../Header/Header.php")
    ?>
    <main role="main" class="container mb-5">
        <h2 class="mt-5">🛒 Giỏ hàng của bạn</h2>
        <a href="/BTL_web/app/views/user/user.php" class="btn btn-secondary mt-3">🔙 Quay về</a>
        <?php if (!empty($cart_items)) { ?>
            <table class="table mt-4 ">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng cộng</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart_items as $item) {
                        $product = $get_data->lay_sanpham_theo_id($item['id_sp']);
                        if ($product) {
                            $total = $product['giaban'] * $item['quantity'];
                            $total_price += $total;
                    ?>
                            <tr>

                                <td><?php echo htmlspecialchars($product['tensp']); ?></td>
                                <td><?php echo number_format($product['giaban'], 0, ',', '.'); ?> VND</td>
                                <td>
                                    <form method="POST" action="update_cart.php">
                                        <input type="hidden" name="id_sp" value="<?php echo htmlspecialchars($item['id_sp']); ?>">
                                        <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1" class="form-control w-50">
                                        <!-- <button type="submit" class="btn btn-primary btn-sm mt-2">Cập nhật</button> -->
                                    </form>
                                </td>
                                <td><?php echo number_format($total, 0, ',', '.'); ?> VND</td>
                                <td>
                                    <form method="POST" action="remove_from_cart.php">
                                        <input type="hidden" name="id_sp" value="<?php echo htmlspecialchars($item['id_sp']); ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
            <h4 class="text-right">Tổng tiền: <?php echo number_format($total_price, 0, ',', '.'); ?> VND</h4>
            <form method="POST" action="/BTL_web/app/views/user/confirm_order/confirm_order.php" style="display: inline;">
                <button type="submit" class="btn btn-danger mt-3 ml-2">💳 Thanh toán</button>
            </form>


        <?php } else { ?>
            <p>Giỏ hàng của bạn đang trống.</p>
        <?php } ?>

    </main>
    <?php
    include("../Footer/Footer.php")
    ?>
</body>

</html>