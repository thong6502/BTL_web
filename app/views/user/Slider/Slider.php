<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/config/dbconnect.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/models/banner.php");

// Create an instance of the data_banner class
$banner_data = new data_banner();
$banners = $banner_data->hienthi_banner();
?>

<div class="slider">
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $isActive = true; // To set the first item as active
            while ($row = mysqli_fetch_assoc($banners)) {
                $img_path = $row['img_path'];
                ?>
                <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>" data-interval="3000">
                    <img src="<?php echo htmlspecialchars($img_path); ?>" class="d-block w-100" alt="Banner">
                </div>
                <?php
                $isActive = false; // Only the first item should have the 'active' class
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>