<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <marquee style="font-size: 20px;font-weight: bold;color: orange;" class="slogan">Vui Halloween, gạt bỏ tự ti, tự tin tỏa sáng</marquee>
    <?php
            include("./Slider/Slider.php")
    ?>
    <div class="section_six mt-5">
    <div class="container p-5">
        <h2 class="inner_title text-center p-3" style="font-weight: bold!important;">
            CÁC SẢN PHẨM BÁN CHẠY
        </h2>
        <div class="product-slider">
            <div class="slider-item">
                <div class="box-product card border-0">
                    <img src="./img/section_6-1.png" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title box-title">RD-0900TS1.E</h5>
                        <a href="" class="btn btn-dark btn_product">Xem thêm <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="box-product card border-0">
                    <img src="./img/section_6-2.png" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title box-title">RD-0900TS1.S</h5>
                        <a href="" class="btn btn-dark btn_product">Xem thêm <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="box-product card border-0">
                    <img src="./img/section_6-3.png" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title box-title">RD-1300 TS2.E</h5>
                        <a href="" class="btn btn-dark btn_product">Xem thêm <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="box-product card border-0">
                    <img src="./img/section_6-4.png" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title box-title">RD-0540N1.E</h5>
                        <a href="" class="btn btn-dark btn_product">Xem thêm <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="box-product card border-0">
                    <img src="./img/section_6-1.png" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title box-title">RD-0900TS2.E</h5>
                        <a href="" class="btn btn-dark btn_product">Xem thêm <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="box-product card border-0">
                    <img src="./img/section_6-2.png" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title box-title">RD-0900TS2.S</h5>
                        <a href="" class="btn btn-dark btn_product">Xem thêm <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="box-product card border-0">
                    <img src="./img/section_6-3.png" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title box-title">RD-1300 TS3.E</h5>
                        <a href="" class="btn btn-dark btn_product">Xem thêm <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="box-product card border-0">
                    <img src="./img/section_6-4.png" class="card-img-top" alt="Product">
                    <div class="card-body text-center">
                        <h5 class="card-title box-title">RD-0540N2.E</h5>
                        <a href="" class="btn btn-dark btn_product">Xem thêm <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="content" style="height: fit-content">
        <div class="container">
            <?php
            include("./Listproduct/Listproduct.php")
            ?>
        </div>
    </div>

    <?php
    include("./Footer/Footer.php")
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
$(document).ready(function(){
    $('.product-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 2, // Chuyển 4 sản phẩm một lần
        autoplay: true,
        autoplaySpeed: 2000, // Tăng thời gian hiển thị lên 4 giây
        dots: true,
        arrows: true,
        infinite: true,
        responsive: [
            {
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
</script>

</body>
</html>



<style>
.product-slider {
    padding: 20px;
    margin: 0 -15px;
}

.slider-item {
    padding: 0 15px;
}

.box-product {
    transition: all 0.3s ease;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1) !important;
    border-radius: 30px;
}

.box-product:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1) !important;
}

.box-title {
    font-size: 1.1rem;
    margin-bottom: 1rem;
}

.slick-prev, 
.slick-next {
    width: 40px;
    height: 40px;
    background: #9e9e9e;
    border-radius: 50%;
    z-index: 1;
    transition: all 0.3s ease;
}

.slick-prev {
    left: -10px;
}

.slick-next {
    right: -10px;
}

.slick-prev:before,
.slick-next:before {
    font-size: 20px;
    opacity: 1;
}

.slick-prev:hover,
.slick-next:hover {
    background: #adadad;
}

.slick-dots {
    bottom: -40px;
}

.slick-dots li button:before {
    font-size: 10px;
}

.slick-dots li.slick-active button:before {
    color: #000;
}

.btn_product {
    padding: 8px 20px;
    transition: all 0.3s ease;
    background-color: #A2E5BB;
    color: #0E7F40;
}

.btn_product:hover {
    color: rgb(215, 215, 215);
    background-color: #0E7F40;
    transform: translateY(-2px);
}

.slick-dots li button:before {
    font-size: 12px;
    color: #ccc;
}

.slick-dots li.slick-active button:before {
    color: #000;
}

@media (max-width: 767px) {
    .product-slider {
        padding: 10px;
    }
    
    .box-title {
        font-size: 1rem;
    }
    
    .btn-dark {
        padding: 6px 15px;
        font-size: 14px;
    }
}
</style>