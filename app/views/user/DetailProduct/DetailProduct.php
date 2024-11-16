<?php
// Include tệp kết nối và lớp sản phẩm
include($_SERVER['DOCUMENT_ROOT'].'/BTL_web/app/models/sanpham.php');
session_start(); // Bắt đầu session để lấy thông báo

// Kiểm tra xem có 'id' trong URL hay không
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Khởi tạo đối tượng sản phẩm và lấy thông tin chi tiết sản phẩm
    $get_data = new data_sanpham();
    $product = $get_data->lay_sanpham_theo_id($id);

    // Kiểm tra xem sản phẩm có tồn tại không
    if ($product) {
?>
        <!DOCTYPE html>
        <html lang="vi">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Chi tiết sản phẩm</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <link rel="stylesheet" href="path/to/bootstrap.css"> <!-- Link CSS -->
            <link rel="stylesheet" href="../Header/Header.css">
            <link rel="stylesheet" href="../Footer/Footer.css">
        </head>

        <body>
            <?php 
                include("../Header/Header.php");
            ?>

            <main role="main" class="container mt-5">

                <!-- Thông báo thành công -->
                <?php if (isset($_SESSION['success_message'])) { ?>
                    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['success_message']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php unset($_SESSION['success_message']); // Xóa thông báo sau khi hiển thị ?>
                <?php } ?>

                <div class="product-detail">
                    <div class="row">
                        <div class="col-md-6">
                            <img style="width: 100%; border-radius: 10px;" src="<?php echo htmlspecialchars($product['img_path']); ?>" alt="<?php echo htmlspecialchars($product['tensp']); ?>">
                        </div>
                        <div class="col-md-6">
                            <h1 class="product-title"><?php echo htmlspecialchars($product['tensp']); ?></h1>
                            <h2 class="product-price" style="color: #ff4500;"><?php echo number_format(htmlspecialchars($product['giaban']), 0, ',', '.'); ?> VND</h2>
                            <p class="product-description"><?php echo htmlspecialchars($product['chitiet']); ?></p>

                            <!-- Nút "Thêm vào giỏ hàng" với form gửi POST -->
                            <form method="POST" action="/BTL_web/app/views/user/Cart/add_to_cart.php" style="display: inline;">
                                <input type="hidden" name="id_sp" value="<?php echo htmlspecialchars($product['id_sp']); ?>">
                                <button type="submit" class="btn btn-primary mt-3">🛒 Thêm vào giỏ hàng</button>
                            </form>

                            <!-- Nút "Mua ngay" chuyển hướng đến trang thanh toán -->
                            <form method="POST" action="/BTL_web/app/views/user/confirm_order/confirm_order.php" style="display: inline;">
                                <input type="hidden" name="id_sp" value="<?php echo htmlspecialchars($product['id_sp']); ?>">
                                <button type="submit" class="btn btn-danger mt-3 ml-2">💳 Mua ngay</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
            
            <!-- Script để tự động ẩn thông báo sau 5 giây -->
            <script>
                $(document).ready(function() {
                    // Sau 5 giây (5000 milliseconds), ẩn thông báo
                    setTimeout(function() {
                        $('#success-alert').alert('close');
                    }, 2000);
                });
            </script>

            <?php 
                include("../Footer/Footer.php");
            ?>
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
