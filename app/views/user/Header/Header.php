<header class="header p-4">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-6 col-md-6 col-lg-2 logo">
                <a class="d-flex align-items-center" href="/BTL_web/app/views/user/user.php">
                    <img width="55" height="55" src="/BTL_web/public/imgs/logo.png" alt="Logo Shop" class="img-fluid"><span><b>&nbsp;Phone Store</b></span>
                </a>
            </div>

            <!-- Menu Chính -->
            <div class="menu col-8">
                <ul class="inner-menu d-flex justify-content-center">
                    <li><a href="/BTL_web/app/views/user/user.php">Trang chủ</a></li>
                    <li class="dropdown">
                        <a href="#products" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                        <ul class="dropdown-menu">
                            <li><a href="/BTL_web/app/views/user/user.php?hangsx=all">Tất cả</a></li>
                            <li><a href="/BTL_web/app/views/user/user.php?hangsx=Iphone">iPhone</a></li>
                            <li><a href="/BTL_web/app/views/user/user.php?hangsx=Samsung">Samsung</a></li>
                            <li><a href="/BTL_web/app/views/user/user.php?hangsx=Redmi">Redmi</a></li>
                            <li><a href="/BTL_web/app/views/user/user.php?hangsx=Oppo">Oppo</a></li>
                            <li><a href="/BTL_web/app/views/user/user.php?hangsx=Khac">Khác</a></li>
                        </ul>
                    </li>
                    <li><a href="/BTL_web/app/views/user/About.php">Giới thiệu</a></li>
                    <li><a href="/BTL_web/app/views/user/contact.php">Liên hệ</a></li>
                </ul>
            </div>

            <!-- Icons & Dropdown (Giỏ hàng, Tìm kiếm, Tài khoản) -->
            <div class="col-6 col-md-6 col-lg-2 ">
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