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



