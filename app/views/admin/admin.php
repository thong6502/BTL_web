<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <nav>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="loadContent('tbl_khachhang.php')">Danh sách khách hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="loadContent('tbl_admin.php')">Danh sách admin</a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="table__data">
                <div id="table-container"></div>
            </div>
        </div>
    </div>

    <script>
        function loadContent(page) {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", `./Main/${page}`, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById("table-container").innerHTML = xhr.responseText;
                } else {
                    document.getElementById("table-container").innerHTML = "Không thể tải nội dung.";
                }
            };
            xhr.send();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
