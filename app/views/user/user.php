<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/BTL_web/public/imgs/favicon.ico" type="image/x-icon">
    <title>Phone Store</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./Footer/Footer.css">
    <link rel="stylesheet" href="./Header/Header.css">
    <link rel="stylesheet" href="./ListProduct/Listproduct.css">
</head>

<body>
    <?php
    include("./Header/Header.php")
    ?>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/config/dbconnect.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/models/chuchay.php");

    // Create an instance of the data_chuchay class
    $chuchay_data = new data_chuchay();
    $chuchay_result = $chuchay_data->hienthi_chuchay();

    // Combine all rows into one string for scrolling
    $scrolling_text = '';
    while ($row = mysqli_fetch_assoc($chuchay_result)) {
        $scrolling_text .= htmlspecialchars($row['noidung']) . ' | '; // Add text with a separator
    }
    $scrolling_text = rtrim($scrolling_text, ' | '); // Remove the trailing separator
    ?>
    <marquee style="font-size: 20px; font-weight: bold; color: orange;" class="slogan"><?php echo htmlspecialchars($scrolling_text); ?></marquee>
    <?php
    include("./Slider/Slider.php")
    ?>

    <div class="content" style="height: fit-content">
        <div class="container">
            <?php
            include("./Listproduct/Listproduct.php")
            ?>
        </div>
    </div>
    <div class="container my-5 section-reviews">
        <h2 class="text-center mb-4">⭐ Đánh giá từ khách hàng</h2>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card review-card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRZVLIFHeDD9DNYt1jXcnRwwKP5-dfARK3XA&s" alt="User" class="rounded-circle mr-3" width="60" height="60">
                            <div>
                                <h5 class="card-title mb-0">Nguyễn Văn A</h5>
                                <small class="text-muted">Đã mua iPhone 14 Pro</small>
                            </div>
                        </div>
                        <p class="card-text">
                            Dịch vụ tuyệt vời! Sản phẩm chính hãng và giao hàng rất nhanh. Chắc chắn sẽ quay lại.
                        </p>
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card review-card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://media.licdn.com/dms/image/v2/C5603AQGDJ1QzIZ2CBw/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1619791272416?e=2147483647&v=beta&t=sx7xNfs1v3oTSrUFOrOJnaU3LFOEAVXfcrE3a3qvlac" alt="User" class="rounded-circle mr-3" width="60" height="60">
                            <div>
                                <h5 class="card-title mb-0">Trần Thị B</h5>
                                <small class="text-muted">Đã mua Samsung Galaxy S23</small>
                            </div>
                        </div>
                        <p class="card-text">
                            Rất hài lòng với nhân viên tư vấn, sản phẩm đóng gói cẩn thận. Sẽ giới thiệu bạn bè.
                        </p>
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card review-card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSt8VdUbhhYw60Z0OJdL6X0K-IaaqQKwGHvFl0Ez_BBWDeFwqXBEABmAxqCgOxtOIwqb8&usqp=CAU" alt="User" class="rounded-circle mr-3" width="60" height="60">
                            <div>
                                <h5 class="card-title mb-0">Lê Văn C</h5>
                                <small class="text-muted">Đã mua Redmi Note 12</small>
                            </div>
                        </div>
                        <p class="card-text">
                            Giá cả hợp lý, sản phẩm tốt, sản phẩm đóng gói cẩn thận. Tuy nhiên, giao hàng hơi chậm hơn dự kiến.
                        </p>
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container_1">
    <h1>Sự kiện ra mắt siêu phẩm mới sắp diễn ra!</h1>
    <p class="description">Hãy sẵn sàng để trải nghiệm những công nghệ đột phá từ các dòng điện thoại hàng đầu.</p>

    <div class="countdown">
        <div class="time-box">
            <span id="days" class="time">00</span>
            <span class="label">Ngày</span>
        </div>
        <div class="time-box">
            <span id="hours" class="time">00</span>
            <span class="label">Giờ</span>
        </div>
        <div class="time-box">
            <span id="minutes" class="time">00</span>
            <span class="label">Phút</span>
        </div>
        <div class="time-box">
            <span id="seconds" class="time">00</span>
            <span class="label">Giây</span>
        </div>
    </div>

</div>


    <?php
    include("./Footer/Footer.php")
    ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.product-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 2, // Chuyển 4 sản phẩm một lần
                autoplay: true,
                autoplaySpeed: 2000, // Tăng thời gian hiển thị lên 4 giây
                dots: true,
                arrows: true,
                infinite: true,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false
                        }
                    }
                ]
            });
        });

        // Set the countdown date
        const countdownDate = new Date("Dec 12, 2024 00:00:00").getTime();

        // Update the countdown every 1 second
        const countdownTimer = setInterval(() => {
            const now = new Date().getTime();
            const timeLeft = countdownDate - now;

            // Time calculations
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            // Display the result
            document.getElementById("days").innerText = days;
            document.getElementById("hours").innerText = hours;
            document.getElementById("minutes").innerText = minutes;
            document.getElementById("seconds").innerText = seconds;

            // If countdown is finished
            if (timeLeft < 0) {
                clearInterval(countdownTimer);
                document.querySelector(".countdown").innerHTML = "<h2>We're Open!</h2>";
            }
        }, 1000);
    </script>

</body>

</html>


<style>
    .section-reviews {
        background-color: #f8f9fa;
        padding: 40px;
        border-radius: 10px;
    }

    .section-reviews h2 {
        font-size: 28px;
        font-weight: bold;
        color: #2c3e50;
    }

    .review-card {
        border: none;
        border-radius: 10px;
        background: #ffffff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .review-card .rating i {
        font-size: 18px;
        margin-right: 2px;
    }

    @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    /* * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        font-weight: 400;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: #e0f7fa;
        color: #333;
    } */

    .container_1 {
        text-align: center;
        /* max-width: 600px; */
        padding: 20px;
    }

    .logo img {
        max-width: 350px;
        margin-bottom: 20px;
        mix-blend-mode: darken;
    }

    h1 {
        font-size: 2em;
        color: #00796b;
        margin-bottom: 10px;
        font-family: "Lora", serif;
        font-weight: 600;
    }

    .description {
        font-size: 1.2em;
        color: #555;
        margin-bottom: 30px;
        font-family: "Poppins", sans-serif;
        font-weight: 400;
    }

    .countdown {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 30px;
    }

    .time-box {
        text-align: center;
    }

    .time {
        font-size: 2.5em;
        font-weight: bold;
        color: #00796b;
    }

    .label {
        display: block;
        font-size: 0.9em;
        color: #333;
    }

    .subscribe {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 20px;
    }

    .subscribe input {
        padding: 10px;
        font-size: 1em;
        border: 2px solid #00796b;
        border-radius: 5px;
        outline: none;
        width: 60%;
    }

    .subscribe button {
        padding: 10px 20px;
        font-size: 1em;
        color: white;
        background: #00796b;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .subscribe button:hover {
        background: #004d40;
    }
</style>