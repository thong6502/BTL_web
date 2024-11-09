<?php
session_start();

// Include the database configuration
// include('./config/dbconnect.php'); 
include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/config/dbconnect.php");//dẫn tuyệt đối

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM admin WHERE user = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching record is found
    if ($result->num_rows > 0) {
        $_SESSION['user'] = $name;
        header("Location: ../Sidebar/Sidebar.php");
        exit();
    } else {
        $error_message = "Tên đăng nhập hoặc mật khẩu không chính xác!";
    }

    // Close the connection (not strictly necessary, since it's included in config.php)
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Login/Login.css">
    <link rel="website icon" type="png" href="../img/logo.png">
    <title>Đăng Nhập</title>
</head>
<body>
    <div class="container">
        <a href="#" class="back-arrow">&#8592;</a>
        <img src="../img/logo.png" alt="Logo">
        <h2>Đăng nhập</h2>

        <!-- Display error message if login fails -->
        <?php if (isset($error_message)): ?>
            <div class="error-message">
                <p><?php echo $error_message; ?></p>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="form-field">
                <input type="text" placeholder="Nhập họ và tên" id="name" name="name" required>
            </div>
            <div class="form-field">
                <input type="password" placeholder="Nhập mật khẩu" id="password" name="password" required>
                <small> Mật khẩu tối thiểu 6 ký tự</small>
            </div>
            <button type="submit" class="submit-btn">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
