<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../Sidebar/Sidebar.css">
    <script>
    function loadContent(page) {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", page, true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById("content-container").innerHTML = xhr.responseText;
            } else {
                document.getElementById("content-container").innerHTML = "<p>Không thể tải nội dung.</p>";
            }
        };
        xhr.send();
    }
</script>

</head>

<body>
    <aside class="sidebar">
        <img src="../img/logo.png" alt="Logo">
        <nav>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Admin</a>
                    <ul class="submenu">
                        <li><a href="#">Danh sách admin</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Xóa/Sửa Admin</a></li>
                    </ul> -->
                    <a class="nav-link" href="#" onclick="loadContent('../Main/tbl_admin.php')">Admin</a>
                <ul class="submenu">
                    <li><a href="#" onclick="loadContent('../Main/tbl_admin.php')">Danh sách admin</a></li>
                    <li><a href="#">Xóa/Sửa Admin</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản lý sản phẩm</a>
                    <ul class="submenu">
                        <li><a  href="#">Danh sách sản phẩm</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Thêm sản phẩm mới</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Hãng sản phẩm</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Thêm hãng sản phẩm mới</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Loại sản phẩm</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="#">Thêm loại sản phẩm mới</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Quản lý khách hàng</a>
                    <ul class="submenu">
                        <li><a href="../admin.php">Danh sách khách hàng</a></li>
                        <li><a href="#">Kích hoạt/Tạm dừng tài khoản</a></li>
                    </ul> -->
                    <a class="nav-link" href="#" onclick="loadContent('../Main/tbl_khachhang.php')">Quản lý khách hàng</a>
                <ul class="submenu">
                    <li><a href="#" onclick="loadContent('../Main/tbl_khachhang.php')">Danh sách khách hàng</a></li>
                    <li><a href="#">Kích hoạt/Tạm dừng tài khoản</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản bình chọn</a>
                    <ul class="submenu">
                        <li><a href="#">Danh sách bình chọn</a></li>
                        <li><a href="#">Thêm bình chọn</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản lý thiết kế</a>
                    <ul class="submenu">
                        <li><a href="#">Quản Lý Chữ Chạy</a></li>
                        <li><a href="#">Quản Lý Banner</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">
        <header class="header">
            <div class="header-top">
                <div class="title">
                    <h1>Dashboard</h1>
                </div>
                <input type="text" placeholder="Search here">
                <button class="user-button">John Doe</button>
            </div>
        </header>


        <!-- Main Content -->
        <section id="content-container" class="content">
            

            <!-- <div class="new-customers">
                <h2>New Customers</h2>
                
            </div> -->
        </section>
    </main>
</body>

</html>