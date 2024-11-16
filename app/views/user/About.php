<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
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
            margin: 80px 0;
        }
        h2 {
            text-align: center;
            color: #333;
            font-weight: 500;
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 500;
            color: #333;
            margin-top: 30px;
        }

        .about-content p {
            line-height: 1.8;
            color: #555;
        }

        .team-member {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .team-member img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            margin-right: 20px;
        }

        .team-member h5 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 1rem;
            color: #777;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
            padding: 10px 30px;
            margin-top: 40px;
            display: block;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .mission-section {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <?php
        include("./Header/Header.php")
    ?>

    <main class="container">
        <h2>Giới thiệu về chúng tôi</h2>

        <!-- About Section -->
        <div class="about-content">
            <div class="section-title">Về chúng tôi</div>
            <p>Chúng tôi là một công ty chuyên cung cấp các sản phẩm và dịch vụ chất lượng cao, với mục tiêu mang đến giá trị cho khách hàng thông qua các giải pháp sáng tạo và hiệu quả. Chúng tôi luôn cam kết đem đến sự hài lòng tuyệt đối cho khách hàng.</p>

            <div class="section-title">Tầm nhìn và Sứ mệnh</div>
            <p>Tầm nhìn của chúng tôi là trở thành một trong những công ty dẫn đầu trong lĩnh vực cung cấp sản phẩm công nghệ tại Việt Nam. Sứ mệnh của chúng tôi là mang đến cho khách hàng những sản phẩm chất lượng, dịch vụ tốt nhất và tạo dựng niềm tin với cộng đồng.</p>

            <div class="section-title">Giá trị cốt lõi</div>
            <p>Chúng tôi đặt khách hàng lên hàng đầu, luôn giữ vững sự minh bạch trong công việc và duy trì môi trường làm việc sáng tạo, năng động. Chúng tôi tin rằng sự thành công của công ty gắn liền với sự phát triển của đội ngũ nhân viên và sự hài lòng của khách hàng.</p>
        </div>

        <!-- Mission Section -->
        <div class="mission-section">
            <div class="section-title">Sứ mệnh của chúng tôi</div>
            <p>Chúng tôi cam kết cung cấp các sản phẩm và dịch vụ có giá trị cao, giúp cải thiện chất lượng cuộc sống và công việc của khách hàng. Mỗi sản phẩm đều được nghiên cứu và phát triển với mục tiêu mang đến những giải pháp sáng tạo, tiện ích và bền vững.</p>
        </div>

        <!-- Our Team Section -->
        <div class="section-title text-center">Đội ngũ của chúng tôi</div>
        <div class="row">
            <div class="col-md-3 col-sm-6 team-member">
                <img src="https://via.placeholder.com/80" alt="Team Member 1">
                <div>
                    <h5>Trần Hoàng Sơn</h5>
                    <p>Giám đốc điều hành</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 team-member">
                <img src="https://via.placeholder.com/80" alt="Team Member 2">
                <div>
                    <h5>Quỳnh Kendy</h5>
                    <p>Quản lý sản phẩm</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 team-member">
                <img src="https://via.placeholder.com/80" alt="Team Member 3">
                <div>
                    <h5>Lê Văn Thông</h5>
                    <p>Chuyên viên kỹ thuật</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 team-member">
                <img src="https://via.placeholder.com/80" alt="Team Member 4">
                <div>
                    <h5>Ánh Tuyết</h5>
                    <p>Chuyên viên kỹ thuật</p>
                </div>
            </div>
        </div>

        <!-- Contact Button -->
        <a href="contact.php" class="btn btn-primary text-center">Liên hệ với chúng tôi</a>
    </main>

    <!-- Footer -->
    <?php
        include("./Footer/Footer.php")
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
