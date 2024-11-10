<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php'); // Kết nối cơ sở dữ liệu

// Kiểm tra nếu người dùng đã đăng nhập, chuyển hướng họ đến trang chính
if (isset($_SESSION['user_id'])) {
    header("Location: /BTL_web/app/views/user/user.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form đăng nhập
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Truy vấn kiểm tra người dùng trong cơ sở dữ liệu
    $sql = "SELECT * FROM tbl_khachhang WHERE user = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra nếu tìm thấy người dùng
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id_kh']; // Lưu id_kh vào session
        $_SESSION['user_name'] = $user['user']; // Lưu tên người dùng vào session

        // Chuyển hướng đến trang chính của người dùng
        header("Location: /BTL_web/app/views/user/user.php");
        exit();
    } else {
        $error_message = "Tên đăng nhập hoặc mật khẩu không chính xác.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Icon -->
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            width: 100%;
            border-radius: 25px;
            padding: 10px;
            font-size: 16px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .form-control {
            border-radius: 25px;
        }
        .alert {
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .register-link {
            text-align: center;
            margin-top: 15px;
        }
        .register-link a {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <h2>Đăng Nhập</h2>

        <?php if (isset($error_message)) { ?>
            <div class="alert alert-danger">
                <?php echo $error_message; ?>
            </div>
        <?php } ?>
        
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-custom">Đăng nhập</button>
        </form>

        <p class="register-link">Chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
