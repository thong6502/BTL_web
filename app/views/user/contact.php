<?php 
    session_start();  
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Footer/Footer.css">
    <link rel="stylesheet" href="./Header/Header.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        main {
            margin: 100px 0;
            text-align: center;
        }
        h2 {
            color: #333;
            font-weight: 500;
            margin-bottom: 40px;
        }
        .contact-buttons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }
        .contact-button {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 500;
            border-radius: 30px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .contact-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 300%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transform: skewX(-30deg);
            transition: all 0.5s ease;
        }
        .contact-button:hover::before {
            left: 100%;
        }
        .contact-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.5);
        }
        .contact-button i {
            font-size: 1.3rem;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <?php
        include("./Header/Header.php")
    ?>

    <main class="container">
        <h2>Liên hệ với chúng tôi</h2>
        <div class="contact-buttons">
            <!-- Information Button -->
            <a href="/BTL_web/app/views/user/About.php" class="contact-button">
                <i class="fas fa-info-circle"></i> Thông tin
            </a>
            <!-- Call Button -->
            <a href="tel:+84123456789" class="contact-button">
                <i class="fas fa-phone-alt"></i> Gọi điện
            </a>
        </div>
    </main>

    <!-- Footer -->
    <?php
        include("./Footer/Footer.php")
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
