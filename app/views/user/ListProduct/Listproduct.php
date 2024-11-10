<main role="main" class="container">
    <div class="listproduct mt-5">
        <?php
        include('./../../models/sanpham.php');
        $get_data = new data_sanpham();

        // Số sản phẩm trên mỗi trang
        $products_per_page = 8;

        // Lấy trang hiện tại từ URL, nếu không có thì mặc định là trang 1
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Tính toán offset
        $offset = ($page - 1) * $products_per_page;

        // Lấy danh sách sản phẩm theo trang
        $select = $get_data->hien_thi_sanpham($products_per_page, $offset);

        // Lấy tổng số sản phẩm để tính số trang
        $total_products = $get_data->get_total_sanpham();
        $total_pages = ceil($total_products / $products_per_page);
        ?>
        
        <!-- Hiển thị thông báo thành công nếu có -->
        <?php if (isset($_SESSION['success_message'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['success_message']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php unset($_SESSION['success_message']); // Xóa thông báo sau khi hiển thị ?>
        <?php } ?>

        <div class="row justify-content-start">
            <?php if (mysqli_num_rows($select) > 0) { ?>
                <?php while ($pr = mysqli_fetch_assoc($select)) { ?>
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

        <!-- Phân trang -->
        <nav>
            <ul class="pagination justify-content-center">
                <!-- Trang trước -->
                <?php if ($page > 1) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Trước</a></li>
                <?php } ?>

                <!-- Các số trang -->
                <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                    <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php } ?>

                <!-- Trang sau -->
                <?php if ($page < $total_pages) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Sau</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</main>
