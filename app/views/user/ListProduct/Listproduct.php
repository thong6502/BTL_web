<main role="main" class="container">
    <div class="listproduct mt-5">
        <?php
        include('./../../models/sanpham.php');
        $get_data = new data_sanpham();
        $select = $get_data->hien_thi_sanpham();
        ?>
        <div class="row justify-content-between">
        <?php
        if (!empty($select)) {
            foreach ($select as $pr) {
        ?>
        <div style="width: 30%;border-radius: 20px;" class="product__item p-3 mb-4">
            <img src="<?php echo htmlspecialchars($pr['img_path']); ?>" alt=""><br>
            <b style="font-size: 18px;" class="price"><?php echo htmlspecialchars($pr['giaban']); ?> VND</b><br>
            <b style="font-size: 22px;" class="title"><?php echo htmlspecialchars($pr['tensp']); ?></b>
            <div class="desc"><?php echo htmlspecialchars($pr['chitiet']); ?></div>
        </div>
        <?php
            }
        } else {
            echo "<tr><td colspan='5'>Không có dữ liệu</td></tr>";
        }
        ?>
        </div>
    </div>
</main>
