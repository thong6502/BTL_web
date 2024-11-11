
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Store</title>
    <link rel="shortcut icon" href="/BTL_web/public/imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/BTL_web/public/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <div class="sidebar">
        <div class = "div_logo">
            <a href="./" class="logo">
                <img src="/BTL_web/public/imgs/logo.png" alt="Logo">
                <h3>PHONE STORE</h3>
            </a>
        </div>
        <ul>
            <li class="menu">
                <a href="">
                    <i class="fas fa-box"></i> <span>Sản phẩm</span>
                    <i class="fas fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="?page=qlhang">Quản lý Hãng</a></li>
                    <li><a href="?page=qlsanpham">Quản lý sản phẩm</a></li>
                </ul>
            </li>
            <li >
                <a href="#">
                    <i class="fas fa-shopping-cart"></i> <span>Quản lý đơn hàng</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-users"></i> <span>Quản lý khách hàng</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user-circle"></i> <span>Quản lý tài khoản</span>
                </a>
            </li>
            <li class="menu">
                <a href="#">
                    <i class="fas fa-palette"></i> <span>Quản lý thiết kế</span>
                    <i class="fas fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Quản lý chữ chạy</a></li>
                    <li><a href="#">Quản lý banner</a></li>
                </ul>
            </li>
        </ul>
        <div class="div_img">
            <img src="/BTL_web/public/imgs/admin_div_sidebar.png" alt="">
        </div>
    </div>
    <div class="main">
        <?php
            if(isset($_GET['page']) && $_GET['page'] == 'qlsanpham') {
                include("./sanpham/view_list_sanpham.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'them_sanpham') {
                include("./sanpham/view_them_sanpham.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'qlhang') {
                include("./hang/view_list_hang.php");
            }else{
                $gif_file_paths = [];

                for ($i = 1; $i < 36; $i++) {
                    $gif_file_paths[] = "/BTL_web/public/gif/{$i}.gif";
                }
                shuffle($gif_file_paths);
                $index_random = rand(5,10) + rand(10,15);
                $random_file_path = $gif_file_paths[$index_random];
                echo "<img style='width: 50%; height: 60vh; object-fit: contain;' src='{$random_file_path}'>";
            }
        ?>
    </div>
</body>
</html>