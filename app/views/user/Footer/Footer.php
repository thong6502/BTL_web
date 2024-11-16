<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/models/footer.php");

// Create an instance of the data_footer class
$footer_data = new data_footer();
$footer_result = $footer_data->hienthi_footer();

// Fetch the footer content
$footer_info = mysqli_fetch_assoc($footer_result);
$diachi = $footer_info['diachi'] ?? 'Địa chỉ chưa được cập nhật';
$lienhe = $footer_info['lienhe'] ?? 'Liên hệ chưa được cập nhật';
$email = $footer_info['email'] ?? 'Email chưa được cập nhật';
?>

<div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 footer-section">
                    <h3>Liên Hệ</h3>
                    <p>Địa chỉ: <?php echo htmlspecialchars($diachi); ?></p>
                    <p>Điện thoại: <?php echo htmlspecialchars($lienhe); ?></p>
                    <p>Email: <?php echo htmlspecialchars($email); ?></p>
                </div>
                <div class="col-xl-4 footer-section">
                    <h3>Về Chúng Tôi</h3>
                    <ul class="p-0">
                        <li><a href="#policy">Chính Sách Bảo Mật</a></li>
                        <li><a href="#terms">Điều Khoản Sử Dụng</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 footer-section">
                    <h3>Kết Nối Với Chúng Tôi</h3>
                    <div class="social-icons">
                        <a href="#facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#twitter" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        <p>&copy; 2024 Điện Thoại Shop. Tất cả các quyền được bảo lưu.</p>
    </div>
</div>
