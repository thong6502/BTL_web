<main role="main" class="container">
    <div class="listproduct mt-5">
        <?php
        include('./../../models/sanpham.php');
        $get_data = new data_sanpham();
        $select = $get_data->hien_thi_sanpham();
        ?>
        <div class="row justify-content-start">
            <?php if (!empty($select)) { ?>
                <?php foreach ($select as $pr) { ?>
                    <div class="product__item col-md-4 col-sm-6 col-lg-3 mb-4">
                        <div class="box__item border p-3">
                            <a href="./DetailProduct/DetailProduct.php?id=<?php echo htmlspecialchars($pr['id_sp']); ?>" class="product__link text-decoration-none">
                                <img width="100%" src="<?php echo htmlspecialchars($pr['img_path']); ?>" alt="<?php echo htmlspecialchars($pr['tensp']); ?>" class="product__image rounded">
                                <div class="product__info mt-3 text-center">
                                    <b class="product__price text-danger"><?php echo number_format(htmlspecialchars($pr['giaban']), 0, ',', '.'); ?> VND</b><br>
                                    <b class="product__title text-dark">
                                        <?php
                                        $short_title = mb_strimwidth($pr['tensp'], 0, 15, "...");
                                        echo htmlspecialchars($short_title);
                                        ?>
                                    </b>
                                </div>
                            </a>
                            <!-- Nút "Thêm vào giỏ hàng" -->
                            <form method="POST" action="/BTL_web/app/views/user/Cart/add_to_cart.php" class="text-center mt-2">
                                <input type="hidden" name="id_sp" value="<?php echo htmlspecialchars($pr['id_sp']); ?>">
                                <button type="submit" class="btn btn-primary btn-sm">🛒 Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p>Không có sản phẩm nào.</p>
            <?php } ?>
        </div>
    </div>
</main>
