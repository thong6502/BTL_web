<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="./Header/Header.css">
    <link rel="stylesheet" href="./Sidebar/Sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <?php
    include("./Header/Header.php")
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
                include("./Sidebar/Sidebar.php");
            ?>
            <div class="table__data">
                <button onclick="display_khachhang()" class="btn">Hiển thị khách hàng</button>
                <button onclick="display_admin()" class="btn">Hiển thị admin</button>
                <div id="table-container"></div>
            </div>
        </div>
    </div>

    <script>
        function display_khachhang() {
            document.getElementById('table-container').innerHTML = `
                <?php include("./Main/tbl_khachhang.php"); ?>
            `;
        }
        function display_admin() {
            document.getElementById('table-container').innerHTML = `
                <?php include("./Main/tbl_admin.php"); ?>
            `;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>