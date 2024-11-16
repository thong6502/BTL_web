<?php
    session_start();
    if (!$_SESSION['check_login_admin']) {
        header("Location: /BTL_web/app/views/admin/Auths/Login.php");
        exit();
    }
?>


<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/app/controllers/Admin/logoController/hienthi_logo_controller.php');
    $row_logo = mysqli_fetch_assoc($result);
?>
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
                <img src="<?php echo $row_logo['img_path']; ?>" width="100px" alt="Logo">
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
                    <li><a href="?page=qlhang">Quản lý hãng</a></li>
                    <li><a href="?page=qlsanpham">Quản lý sản phẩm</a></li>
                </ul>
            </li>
            <li >
                <a href="?page=qldonhang">
                    <i class="fas fa-shopping-cart"></i> <span>Quản lý đơn hàng</span>
                </a>
            </li>
            <li>
                <a href="?page=qlkhachhang">
                    <i class="fas fa-users"></i> <span>Quản lý khách hàng</span>
                </a>
            </li>

            <li class="menu">
                <a href="#">
                    <i class="fa-solid fa-gear"></i> <span>Quản lý chung</span>
                    <i class="fas fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="?page=qlbanner">Quản lý banner</a></li>
                    <li><a href="?page=qlfooter">Quản lý footer</a></li>
                </ul>
            </li>
            <li class="menu">
                <a href="#">
                    <i class="fas fa-palette"></i> <span>Quản lý thiết kế</span>
                    <i class="fas fa-chevron-down dropdown-icon"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="?page=qlchuchay">Quản lý chữ chạy</a></li>
                    <li><a href="?page=qllogo">Quản lý logo</a></li>
                </ul>
            </li>
            <li>
                <a href="/BTL_web/app/views/admin/Auths/logout.php">
                    <i class="fa-solid fa-circle-left"></i> <span>Đăng xuất</span>
                </a>
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
            else if(isset($_GET['page']) && $_GET['page'] == 'sua_sanpham') {
                include("./sanpham/view_sua_sanpham.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'them_hang') {
                include("./hang/view_them_hang.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'sua_hang') {
                include("./hang/view_sua_hang.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'qlhang') {
                include("./hang/view_list_hang.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'qldonhang') {
                include("./donhang/view_list_donhang.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'chitiet_donhang') {
                include("./donhang/view_chitiet_donhang.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'qlkhachhang') {
                include("./khachhang/view_list_khachhang.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'qlchuchay') {
                include("./chuchay/view_chuchay.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'qlfooter') {
                include("./footer/view_footer.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'qllogo') {
                include("./logo/view_logo.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'qlbanner') {
                include("./banner/view_banner.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'sua_banner') {
                include("./banner/view_sua_banner.php");
            }
            else if(isset($_GET['page']) && $_GET['page'] == 'them_banner') {
                include("./banner/view_them_banner.php");
            }
            else{
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