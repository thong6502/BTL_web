<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/BTL_web/public/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/BTL_web/app/views/admin/Auths/Login.css">
    <title>Adin login</title>
</head>
<body>
    <div class="container">
<!--ring div starts here-->
    <form action="/BTL_web/app/controllers/Admin/login/login.php" method="post">
        <div class="ring">
        <i style="--clr:#00ff0a;"></i>
        <i style="--clr:#ff0057;"></i>
        <i style="--clr:#fffd44;"></i>
        <div class="login">
            <h2>Đăng nhập</h2>
            <div class="inputBx">
                <input required type="text" name="user" placeholder="Username">
            </div>
            <div class="inputBx">
                <input required type="password" name="password" placeholder="Password">
            </div>
            <div class="inputBx">
                <input required type="submit" value="Đăng nhập">
            </div>
            <div class="links">
            <small>Chưa có tài khoản?</small>
            <a href="./register.php">Đăng ký</a>
            </div>
        </div>
        </div>
    </form>

    </div>
</body>
</html>