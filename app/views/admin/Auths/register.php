<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/BTL_web/public/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/BTL_web/app/views/admin/Auths/register.css">
    <title>Adin login</title>
</head>
<body>
    <div class="container">

    <form action="/BTL_web/app/controllers/Admin/login/registry.php" method = "post">
        <div class="ring">
        <i style="--clr:#00ff0a;"></i>
        <i style="--clr:#ff0057;"></i>
        <i style="--clr:#fffd44;"></i>
        <div class="login">
            <h2>Đăng ký</h2>
            <div class="inputBx">
                <input required type="text" name="user" placeholder="Username">
            </div>
            <div class="inputBx">
                <input required type="password" name="password" placeholder="Password">
            </div>
            <div class="inputBx">
                <input required type="password" name= "re_password" placeholder="Repeat password">
            </div>
            <div class="inputBx">
                <input required type="submit" value="Đăng ký">
            </div>
            <div class="links">
            <small>Đã có tài khoản?</small>
            <a href="./login.php">Đăng nhập</a>
            </div>
        </div>
        </div>
    </form>
    <script>
        // Get the form element
        const form = document.querySelector('form');

        // Add a submit event listener to the form
        form.addEventListener('submit', function(event) {
            // Get the password and repeat password fields
            const password = document.querySelector('input[name="password"]');
            const rePassword = document.querySelector('input[name="re_password"]');

            // Check if the passwords match
            if (password.value !== rePassword.value) {
                // Prevent form submission
                event.preventDefault();

                // Display an error message (you can customize this)
                alert("Mật khẩu không khớp. Vui lòng thử lại.");  // Or use a more elegant method like displaying an inline error message next to the field

                // Optionally, focus on the repeat password field
                rePassword.focus();
                return false; // Add this line to prevent further execution
            }

            // If passwords match, allow form submission
            return true;
        });

    </script>
    </div>
</body>
</html>