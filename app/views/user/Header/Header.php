<?php
// Kiểm tra xem session đã được khởi tạo chưa
if (session_status() == PHP_SESSION_NONE) {
    session_start();  // Khởi tạo session nếu chưa có
}
?>

<header class="header p-4">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-md-2 logo">
                <a href="/BTL_web/app/views/user/user.php">
                    <img src="logo.png" alt="Logo Shop" class="img-fluid">
                </a>
            </div>

            <!-- Menu Chính -->
            <div class="col-md-8">
                <ul class="inner-menu d-flex justify-content-center">
                    <li><a href="#home">Trang chủ</a></li>
                    <li class="dropdown">
                        <a href="#products" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">iPhone</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Tablet</a></li>
                            <li><a href="#">Smartwatch</a></li>
                        </ul>
                    </li>
                    <li><a href="/BTL_web/app/views/user/About.php">Giới thiệu</a></li>
                    <li><a href="/BTL_web/app/views/user/contact.php">Liên hệ</a></li>
                </ul>
            </div>

            <!-- Icons & Dropdown (Giỏ hàng, Tìm kiếm, Tài khoản) -->
            <div class="col-md-2">
                <div class="header-icons d-flex justify-content-between">
                    <!-- Icon Tìm kiếm -->
                    <a href="#search"><i class="fas fa-search"></i></a>

                    <!-- Icon Giỏ hàng -->
                    <a href="/BTL_web/app/views/user/Cart/cart.php"><i class="fas fa-shopping-cart"></i></a>

                    <!-- Dropdown Tài khoản -->
                    <div class="dropdown">
                        <a class="btn dropdown p-0" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu">
                            <?php if (isset($_SESSION['user_id'])) { ?>
                                <a class="dropdown-item" href="/BTL_web/app/views/user/logout.php">Logout</a>
                            <?php } else { ?>
                                <a class="dropdown-item" href="/BTL_web/app/views/user/login.php">Login</a>
                                <a class="dropdown-item" href="/BTL_web/app/views/user/register.php">Register</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>