<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php'); // Kết nối cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Kiểm tra xem tên đăng nhập đã tồn tại hay chưa
    $sql_check = "SELECT * FROM tbl_khachhang WHERE user = '$username'";
    $result_check = mysqli_query($conn, $sql_check);
    
    if (mysqli_num_rows($result_check) > 0) {
        $error_message = "Tên đăng nhập đã tồn tại.";
    } else {
        // Nếu tên đăng nhập chưa tồn tại, thực hiện đăng ký
        $sql_insert = "INSERT INTO tbl_khachhang (user, password, hoten, diachi, sdt) 
                        VALUES ('$username', '$password', '$fullname', '$address', '$phone')";
        if (mysqli_query($conn, $sql_insert)) {
            $success_message = "Đăng ký thành công. Bạn có thể đăng nhập ngay bây giờ.";
        } else {
            $error_message = "Có lỗi xảy ra khi đăng ký: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 450px;
        }
        h2 {
            color: #333;
            font-weight: 500;
        }
        .alert {
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .form-group label {
            font-weight: 500;
        }
        .form-control {
            border-radius: 5px;
            padding: 10px;
            border: 1px solid #ddd;
            transition: border 0.3s ease;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .text-center a {
            color: #007bff;
            text-decoration: none;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Đăng ký tài khoản</h2>

        <?php if (isset($error_message)) { ?>
            <div class="alert alert-danger">
                <?php echo $error_message; ?>
            </div>
        <?php } ?>

        <?php if (isset($success_message)) { ?>
            <div class="alert alert-success">
                <?php echo $success_message; ?>
            </div>
        <?php } ?>

        <form method="POST" action="register.php">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="fullname">Họ và tên:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </form>
        <p class="mt-3 text-center">Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
