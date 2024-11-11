-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 08:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user`, `password`) VALUES
(1, 'admin1', 'password1'),
(2, 'admin2', 'password2'),
(3, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL,
  `img_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `img_path`) VALUES
(1, '/BTL_web/public/imgs/banner-1.jpg'),
(2, '/BTL_web/public/imgs/banner-2.jpg'),
(3, '/BTL_web/public/imgs/banner-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitiethoadon`
--

CREATE TABLE `tbl_chitiethoadon` (
  `id_chitiethoadon` int(10) NOT NULL,
  `id_hd` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_chitiethoadon`
--

INSERT INTO `tbl_chitiethoadon` (`id_chitiethoadon`, `id_hd`, `id_sp`, `soluong`) VALUES
(12, 3, 11, 1),
(13, 1, 17, 2),
(14, 2, 27, 1),
(15, 3, 23, 1),
(16, 9, 24, 1),
(17, 10, 16, 1),
(18, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chuchay`
--

CREATE TABLE `tbl_chuchay` (
  `id_textchay` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_chuchay`
--

INSERT INTO `tbl_chuchay` (`id_textchay`, `text`) VALUES
(1, 'Vui Halloween, gạt bỏ tự ti, tự tin tỏa sáng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id_footer` int(11) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `lienhe` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id_footer`, `diachi`, `lienhe`, `email`) VALUES
(1, '123 Đường ABC, Thành phố XYZ', '(+84)49458457', 'shopdienthoai@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hangsanxuat`
--

CREATE TABLE `tbl_hangsanxuat` (
  `id_hsx` int(10) NOT NULL,
  `tenhsx` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hangsanxuat`
--

INSERT INTO `tbl_hangsanxuat` (`id_hsx`, `tenhsx`) VALUES
(1, 'Iphone'),
(2, 'Samsung'),
(3, 'Redmi'),
(4, 'Oppo'),
(5, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `id_hd` int(10) NOT NULL,
  `id_kh` int(10) NOT NULL,
  `ngay_ban` date NOT NULL,
  `tongtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`id_hd`, `id_kh`, `ngay_ban`, `tongtien`) VALUES
(1, 1, '2023-01-10', 38000000),
(2, 2, '2023-02-15', 20000000),
(3, 3, '2023-03-20', 12000000),
(4, 4, '2023-04-25', 7000000),
(5, 5, '2023-05-30', 25000000),
(6, 6, '2023-06-10', 85000000),
(7, 7, '2023-07-15', 3000000),
(8, 8, '2023-08-20', 15000000),
(9, 9, '2023-09-25', 5000000),
(10, 10, '2023-10-30', 18000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id_kh` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sdt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id_kh`, `user`, `password`, `hoten`, `diachi`, `sdt`) VALUES
(1, 'khachhang1', 'password1', 'Nguyễn Văn hậu', '123 Đường A, Quận B, TP.HCM', '0123456789'),
(2, 'khachhang2', 'password2', 'Trần Thị B', '456 Đường B, Quận C, Hà Nội', '0987654321'),
(3, 'khachhang3', 'password3', 'Lê Văn C', '789 Đường C, Quận D, Đà Nẵng', '0932123456'),
(4, 'khachhang4', 'password4', 'Phạm Thị D', '101 Đường D, Quận E, TP.HCM', '0912345678'),
(5, 'khachhang5', 'password5', 'Hoàng Văn E', '102 Đường E, Quận F, Hà Nội', '0976543210'),
(6, 'khachhang6', 'password6', 'Đinh Thị F', '103 Đường F, Quận G, Đà Nẵng', '0901122334'),
(7, 'khachhang7', 'password7', 'Bùi Văn G', '104 Đường G, Quận H, Cần Thơ', '0922334455'),
(8, 'khachhang8', 'password8', 'Đoàn Thị H', '105 Đường H, Quận I, Hà Nội', '0966778899'),
(9, 'khachhang9', 'password9', 'Ngô Văn I', '106 Đường I, Quận J, TP.HCM', '0955566778'),
(10, 'khachhang10', 'password10', 'Phan Thị J', '107 Đường J, Quận K, Hải Phòng', '0944455667'),
(11, 'user', '123456', 'Trần Hoàng Sơn', 'Hiệp Hòa Bắc Giang', '0929748364');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id_logo` int(11) NOT NULL,
  `img_path_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(10) NOT NULL,
  `id_hsx` int(10) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `giaban` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `mota` varchar(100) NOT NULL,
  `chitiet` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `id_hsx`, `tensp`, `giaban`, `img_path`, `mota`, `chitiet`) VALUES
(1, 1, 'Iphone XSM', 4500000, '/BTL_web/public/imgs/ip1.jpg', 'Màn hình 6.5 inch OLED, chip A12 Bionic, camera kép 12MP, pin 3.174 mAh. Có Face ID, chống nước IP68', 'Bộ sản phẩm bao gồm: \r\n•        iPhone sử dụng iOS 18\r\n•        Cáp Sạc USB‑C (1m)\r\n•        Tài liệu\r\nThông tin bảo hành:\r\nBảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.\r\n\r\n\r\n\r\nKích hoạt bảo hành tại: https://checkcoverage.apple.com/vn/en/\r\nHướng dẫn kiểm tra địa điểm bảo hành gần nhất:\r\nBước 1: Truy cập vào đường link https://getsupport.apple.com/?caller=grl&locale=en_VN \r\nBước 2: Chọn sản phẩm.\r\nBước 3: Điền Apple ID, nhập mật khẩu.\r\nSau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.\r\nTại Việt Nam, về chính sách bảo hành và đổi trả của Apple, \"sẽ được áp dụng chung\" theo các điều khoản được liệt kê dưới đây:\r\n1) Chính sách chung: https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\r\n2) Chính sách cho phụ kiện: https://www.apple.com/legal/warranty/products/a\r\n\r\ncc\r\n\r\nessory-warranty-vietnam.html\r\n3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN\r\n\r\n\r\n\r\nQúy khách vui l'),
(2, 1, 'Iphone 7', 2000000, '/BTL_web/public/imgs/ip2.jpg', 'Màn hình 4.7 inch LCD, chip A10 Fusion, camera đơn 12MP, pin 1.960 mAh. Chống nước IP67, bỏ jack tai', 'Thiết kế tinh tế, nhỏ gọn: iPhone 7 sở hữu thiết kế kim loại nguyên khối sang trọng, kích thước nhỏ gọn dễ cầm nắm và thuận tiện khi bỏ túi. Các màu sắc đa dạng như đen, bạc, vàng và hồng vàng tạo nên phong cách thời trang và lịch lãm cho người sử dụng.\r\n\r\nHiệu năng ổn định: Được trang bị chip Apple A10 Fusion mạnh mẽ, iPhone 7 đáp ứng mượt mà các tác vụ hằng ngày từ lướt web, xem phim đến chơi game. Hệ điều hành iOS tối ưu giúp thiết bị vận hành ổn định và bảo mật cao.\r\n\r\nCamera chất lượng cao: Camera sau 12MP chụp ảnh sắc nét với khả năng lấy nét nhanh, màu sắc tự nhiên, phù hợp cho cả điều kiện ánh sáng yếu. Camera trước 7MP hỗ trợ chụp selfie rõ nét và các cuộc gọi video chất lượng cao.\r\n\r\nÂm thanh sống động: iPhone 7 là một trong những dòng đầu tiên được trang bị loa kép cho âm thanh stereo sống động, nâng cao trải nghiệm nghe nhạc, xem phim và chơi game.\r\n\r\nKhả năng chống nước, chống bụi: Được thiết kế với chuẩn IP67, iPhone 7 có khả năng chống nước và bụi bẩn, giúp bạn yên tâm s'),
(11, 1, 'Iphone 12 Promax', 5000000, '/BTL_web/public/imgs/ip3.jpg', 'Màn hình 6.7 inch OLED, chip A14 Bionic, camera ba 12MP, pin 3.687 mAh. Có 5G, cảm biến LiDAR, chống', 'Bộ sản phẩm bao gồm: \r\n•        iPhone sử dụng iOS 18\r\n•        Cáp Sạc USB‑C (1m)\r\n•        Tài liệu\r\nThông tin bảo hành:\r\nBảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.\r\n\r\n\r\n\r\nKích hoạt bảo hành tại: https://checkcoverage.apple.com/vn/en/\r\nHướng dẫn kiểm tra địa điểm bảo hành gần nhất:\r\nBước 1: Truy cập vào đường link https://getsupport.apple.com/?caller=grl&locale=en_VN \r\nBước 2: Chọn sản phẩm.\r\nBước 3: Điền Apple ID, nhập mật khẩu.\r\nSau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.\r\nTại Việt Nam, về chính sách bảo hành và đổi trả của Apple, \"sẽ được áp dụng chung\" theo các điều khoản được liệt kê dưới đây:\r\n1) Chính sách chung: https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\r\n2) Chính sách cho phụ kiện: https://www.apple.com/legal/warranty/products/a\r\n\r\ncc\r\n\r\nessory-warranty-vietnam.html\r\n3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN\r\n\r\n\r\n\r\nQúy khách vui l'),
(12, 1, 'Iphone 14 ', 14000000, '/BTL_web/public/imgs/ip4.jpg', 'Màn hình 6.1 inch OLED, chip A15/A16, camera kép 12MP. Hỗ trợ \"Crash Detection\", kết nối vệ tinh, ch', 'Bộ sản phẩm bao gồm: \r\n•        iPhone sử dụng iOS 18\r\n•        Cáp Sạc USB‑C (1m)\r\n•        Tài liệu\r\nThông tin bảo hành:\r\nBảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.\r\n\r\n\r\n\r\nKích hoạt bảo hành tại: https://checkcoverage.apple.com/vn/en/\r\nHướng dẫn kiểm tra địa điểm bảo hành gần nhất:\r\nBước 1: Truy cập vào đường link https://getsupport.apple.com/?caller=grl&locale=en_VN \r\nBước 2: Chọn sản phẩm.\r\nBước 3: Điền Apple ID, nhập mật khẩu.\r\nSau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.\r\nTại Việt Nam, về chính sách bảo hành và đổi trả của Apple, \"sẽ được áp dụng chung\" theo các điều khoản được liệt kê dưới đây:\r\n1) Chính sách chung: https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\r\n2) Chính sách cho phụ kiện: https://www.apple.com/legal/warranty/products/a\r\n\r\ncc\r\n\r\nessory-warranty-vietnam.html\r\n3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN\r\n\r\n\r\n\r\nQúy khách vui l'),
(13, 1, ' Ịphone 12 Pro', 15000000, '/BTL_web/public/imgs/ip5.jpg', 'Màn hình 6.1 inch OLED, chip A14 Bionic, camera ba 12MP, pin 2.815 mAh. Có cảm biến LiDAR, viền thép', 'Bộ sản phẩm bao gồm: \r\n•        iPhone sử dụng iOS 18\r\n•        Cáp Sạc USB‑C (1m)\r\n•        Tài liệu\r\nThông tin bảo hành:\r\nBảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.\r\n\r\n\r\n\r\nKích hoạt bảo hành tại: https://checkcoverage.apple.com/vn/en/\r\nHướng dẫn kiểm tra địa điểm bảo hành gần nhất:\r\nBước 1: Truy cập vào đường link https://getsupport.apple.com/?caller=grl&locale=en_VN \r\nBước 2: Chọn sản phẩm.\r\nBước 3: Điền Apple ID, nhập mật khẩu.\r\nSau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.\r\nTại Việt Nam, về chính sách bảo hành và đổi trả của Apple, \"sẽ được áp dụng chung\" theo các điều khoản được liệt kê dưới đây:\r\n1) Chính sách chung: https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\r\n2) Chính sách cho phụ kiện: https://www.apple.com/legal/warranty/products/a\r\n\r\ncc\r\n\r\nessory-warranty-vietnam.html\r\n3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN\r\n\r\n\r\n\r\nQúy khách vui l'),
(14, 2, 'SamSung Galaxy S24', 4000000, '/BTL_web/public/imgs/ss1.jpg', 'Màn hình AMOLED, chip Snapdragon 8 Gen 3/Exynos 2400, camera ba ống kính, pin 4.000-5.000 mAh.', ' Samsung cho ra mắt Samsung S24 Ultra – Flagship dẫn đầu xu hướng với công nghệ AI tích hợp cùng nhiều tính năng và ưu điểm vượt trội khác. Các tính năng AI nổi bật trên điện thoại Samsung mới nhất bao gồm:\r\n\r\n- Galaxy AI với các tính năng Khoanh tròn để tìm kiếm, Photo Assist, Live Translate, Note Assist.\r\n\r\n- Khung viền bằng titan cứng cáp, giúp thiết bị bền bỉ theo thời gian.\r\n\r\n- Các phiên bản màu lấy cảm hứng từ chất liệu đá tự nhiên, mang đến vẻ đẹp sang trọng và hiện đại.\r\n\r\n- Camera tích hợp công nghệ AI tuyệt đỉnh, nâng tầm chất lượng và khả năng xử lý hình ảnh.\r\n\r\n- Hiệu năng cực đỉnh với chip Snapdragon 8 Gen3 for Galaxy, chiến game mượt mà.\r\n\r\n- Pin khoẻ 5000mAh, kéo dài thời gian sử dụng cả ngày dài, để không bỏ lỡ khoảnh khắc quan trọng.\r\n\r\n- Màn hình Dynamic AMOLED 2X với độ sáng lên đến 2600 nit, chìm đắm trong thế giới hình ảnh rực rỡ đầy màu sắc.'),
(15, 2, 'SAMSUNG Galaxy S23', 8000000, '/BTL_web/public/imgs/ss2.jpg', 'Màn hình AMOLED, chip Snapdragon 8 Gen 2, camera ba ống kính, pin 3.900-5.000 mAh.', 'Samsung Galaxy S23 Ultra 12GB 512GB tạo nên đột phá mạnh mẽ về mặt hiệu năng khi được trang bị vi xử lý Snapdragon 8 Gen 2 vượt trội cùng 12GB bộ nhớ RAM. Chất lượng hiển thị siêu sắc nét trên S23 Ultra tới từ tầm nền Dynamic AMOLED 2X 120Hz thế hệ mới. Bên cạnh đó, smartphone này còn sở hữu cụm camera cao cấp với độ rõ nét đạt tới 200MP. Viên pin 5000mAh cùng sạc nhanh 45W giúp nâng cao thời lượng sử dụng lên một tầm cao mới. \r\n\r\nSamsung Galaxy S23 Ultra 12GB 512GB - Hiển thị sắc nét, cấu hình đỉnh cao\r\nSmartphone cao cấp nhất của tập đoàn Samsung trong năm 2023 được nhiều người bình chọn là phân khúc Samsung Galaxy S23 Ultra. Bứt phá mọi giới hạn hiệu năng với vi xử lý Snapdragon 8 Gen 2 đỉnh cao cùng khả năng hiển thị hình ảnh sắc nét trong từng chi tiết điểm ảnh, Galaxy S23 Ultra mang tới trải nghiệm sử dụng siêu mượt mà, dễ dàng làm hài lòng những người dùng khó tính nhất\r\n\r\nCụm camera 200MP cực khủng giúp nâng tầm trải nghiệm quay chụp\r\nTrong phiên bản nâng cấp lần này, khả năng '),
(16, 2, 'SamSung Galaxy M55', 6000000, '/BTL_web/public/imgs/ss3.jpg', 'Màn hình LCD/AMOLED, chip tầm trung, camera đa ống kính, pin lớn, hỗ trợ sạc nhanh.', 'Thiết kế hiện đại, tinh tế: Samsung sở hữu thiết kế màn hình tràn viền, mặt lưng bóng bẩy và sang trọng.\r\n\r\nHiệu năng mạnh mẽ: Chip xử lý cao cấp, RAM lớn, đáp ứng mượt mà mọi tác vụ từ công việc đến giải trí.\r\n\r\nCamera chụp ảnh chuyên nghiệp: Hệ thống camera đa dạng, chụp sắc nét cả ngày lẫn đêm, hỗ trợ quay video chất lượng cao.\r\n\r\nPin \"trâu\", sạc nhanh tiện lợi: Thời lượng pin dài, sạc nhanh giúp bạn luôn sẵn sàng sử dụng.\r\n\r\nMàn hình sắc nét, màu sắc sống động: Màn hình Super AMOLED hiển thị chân thực, phù hợp để xem phim, chơi game.\r\n\r\n👉 Sở hữu ngay Samsung chính hãng với nhiều ưu đãi hấp dẫn tại cửa hàng chúng tôi!'),
(17, 2, 'Samsung Galaxy A55', 6000000, '/BTL_web/public/imgs/ss4.jpg', 'Màn hình AMOLED, chip Exynos tầm trung, camera chính 50MP, pin 5.000 mAh.', 'Thiết kế hiện đại, tinh tế: Samsung sở hữu thiết kế màn hình tràn viền, mặt lưng bóng bẩy và sang trọng.\r\n\r\nHiệu năng mạnh mẽ: Chip xử lý cao cấp, RAM lớn, đáp ứng mượt mà mọi tác vụ từ công việc đến giải trí.\r\n\r\nCamera chụp ảnh chuyên nghiệp: Hệ thống camera đa dạng, chụp sắc nét cả ngày lẫn đêm, hỗ trợ quay video chất lượng cao.\r\n\r\nPin \"trâu\", sạc nhanh tiện lợi: Thời lượng pin dài, sạc nhanh giúp bạn luôn sẵn sàng sử dụng.\r\n\r\nMàn hình sắc nét, màu sắc sống động: Màn hình Super AMOLED hiển thị chân thực, phù hợp để xem phim, chơi game.\r\n\r\n👉 Sở hữu ngay Samsung chính hãng với nhiều ưu đãi hấp dẫn tại cửa hàng chúng tôi!'),
(18, 2, 'SamSung  Galaxy A15', 1800000, '/BTL_web/public/imgs/ss5.jpg', 'Màn hình LCD, chip cơ bản, camera kép, pin khoảng 5.000 mAh, giá rẻ.', 'Thiết kế hiện đại, tinh tế: Samsung sở hữu thiết kế màn hình tràn viền, mặt lưng bóng bẩy và sang trọng.\r\n\r\nHiệu năng mạnh mẽ: Chip xử lý cao cấp, RAM lớn, đáp ứng mượt mà mọi tác vụ từ công việc đến giải trí.\r\n\r\nCamera chụp ảnh chuyên nghiệp: Hệ thống camera đa dạng, chụp sắc nét cả ngày lẫn đêm, hỗ trợ quay video chất lượng cao.\r\n\r\nPin \"trâu\", sạc nhanh tiện lợi: Thời lượng pin dài, sạc nhanh giúp bạn luôn sẵn sàng sử dụng.\r\n\r\nMàn hình sắc nét, màu sắc sống động: Màn hình Super AMOLED hiển thị chân thực, phù hợp để xem phim, chơi game.\r\n\r\n👉 Sở hữu ngay Samsung chính hãng với nhiều ưu đãi hấp dẫn tại cửa hàng chúng tôi!'),
(19, 3, 'Redmi Note Series', 6000000, '/BTL_web/public/imgs/re1.jpg', 'Dòng tầm trung, màn hình LCD/AMOLED, camera đa ống kính, pin lớn, giá phải chăng.', 'Hiệu năng vượt trội, giá cả hợp lý: Redmi Note là dòng điện thoại nổi bật về hiệu năng với mức giá tầm trung. Được trang bị vi xử lý mạnh mẽ và RAM lớn, dòng này dễ dàng đáp ứng mọi nhu cầu từ chơi game đến xử lý công việc.\r\n\r\nCamera sắc nét, chụp đêm cực đỉnh: Redmi Note sở hữu hệ thống camera đa dạng, chụp ảnh sắc nét cả ngày lẫn đêm, tích hợp nhiều tính năng AI, phù hợp cho người dùng yêu thích nhiếp ảnh di động.\r\n\r\nMàn hình lớn, pin \"trâu\": Với màn hình lớn Full HD+, trải nghiệm xem phim và giải trí của Redmi Note sống động và chi tiết. Pin dung lượng cao đảm bảo thời gian sử dụng dài mà không lo ngại sạc thường xuyên.'),
(20, 3, 'Redmi Note 11 ', 4500000, '/BTL_web/public/imgs/re2.jpg', 'Màn hình AMOLED, chip Snapdragon 680, camera 50MP, pin 5.000 mAh.', '-Các phiên bản màu sắc: Xám khói (Graphite Gray), Xanh sao băng (Star Blue), Trắng ngọc trai (Pearl White).\r\n-Đặc điểm nổi bật của Redmi Note 11 tiêu chuẩn:\r\n\r\nThiết kế: Khung viền vuông vức, vát phẳng, 4 góc bo tròn, mặt lưng nhựa.\r\nMàn hình: AMOLED DotDisplay 6.43inch FHD+ tràn viền, tần số quét 90Hz, điểm sáng tối đa 1000nits, độ bao phủ màu DCI-P3 hiển thị hình ảnh sắc nét, cân bằng độ tương phản dưới ánh sáng mặt trời.\r\nHiệu năng: Chip Qualcomm Snapdragon 680 4 nhân, RAM 4GB/6GB, bộ nhớ trong 64GB/128GB.\r\nCamera: Camera chính góc rộng 50MP khẩu độ f/1.8. Camera trước 16MP.\r\nDung lượng pin: 5.000 mAh, chế độ sạc nhanh 33W.'),
(21, 3, 'Redmi Note 10 series', 4500000, '/BTL_web/public/imgs/re3.jpg', 'Màn hình AMOLED, chip Snapdragon/MediaTek, camera đa ống kính, pin 5.000 mAh.', 'Đặc điểm nổi bật của Redmi Note 10 tiêu chuẩn:\r\n\r\nThiết kế: Khung vỏ hoàn toàn bằng nhựa, kính cường lực Gorilla Glass 3 bảo vệ màn hình, khả năng chống nước IP53.\r\nMàn hình: AMOLED 6.43 inch Full HD+ \r\nHiệu năng: Chip Qualcomm Snapdragon 678, RAM 4GB/6GB, bộ nhớ trong 128GB.\r\nCamera: Camera chính  Sony IMX582 góc rộng 48MP khẩu độ f/1.8. Camera trước 13MP.\r\nDung lượng pin: 5000mAh, chế độ sạc nhanh 33 W\r\nChi tiết về thiết kế của Redmi Note 10 tiêu chuẩn.\r\n\r\nRedmi Note 10 bản tiêu chuẩn có giá rẻ, cùng cấu hình vượt trội so với tầm giá, thiết kế cân đối, khá cao cấp. Redmi Note 10 phù hợp với đông đảo người dùng chỉ thực hiện tác vụ thường ngày, giải trí đơn giản như xem phim, chơi game nhẹ, lướt mạng xã hội,… Chiếc máy này vẫn phục vụ tốt người dùng sử dụng với mục đích học tập, làm việc.'),
(22, 3, 'Redmi Note 10S 5G', 5000000, '/BTL_web/public/imgs/re4.jpg', 'Màn hình AMOLED, chip MediaTek Dimensity 5G, camera 48MP, pin 5.000 mAh, hỗ trợ 5G.', 'Các phiên bản màu sắc: Xám mã não (Onyx Grey), Trắng đá cuội (Pebble White) và Xanh đại dương (Ocean Blue).\r\nĐặc điểm nổi bật của Redmi Note 10S 5G:\r\n\r\nThiết kế: Vỏ và khung hoàn toàn bằng nhựa, viền mỏng, bo tròn nhẹ nhàng.\r\nMàn hình: AMOLED DotDisplay 6.5 inch Full HD+, tần số quét 120Hz\r\nHiệu năng: Chip MediaTek Helio G95, kết nối 5G, RAM 6GB/8GB, bộ nhớ trong 64B/128GB.\r\nCamera: Camera chính góc rộng 64MP khẩu độ f/1.8. Camera trước 13MP. \r\nDung lượng pin: 5.000mAh, chế độ sạc nhanh 33W.\r\nRedmi Note 10S 5G là mẫu điện thoại giá rẻ mang trên mình nhiều cải tiến về cả thiết kế và hiệu năng, đáp ứng tốt nhu cầu sử dụng cơ bản như xem phim, chơi game, chụp ảnh, gọi thoại video,… Viên pin 5.000mAh chắc chắn giúp bạn thỏa mái dùng để làm việc, học tập hay giải trí cả ngày.'),
(23, 3, ' Redmi 10C', 4400000, '/BTL_web/public/imgs/re5.jpg', 'Màn hình LCD, chip Snapdragon 680, camera 50MP, pin 5.000 mAh.', '-Các phiên bản màu sắc:  Xám, Xanh lục và Xanh lam.\r\nĐặc điểm nổi bật của Redmi 10C:\r\n\r\nThiết kế: Vỏ máy bằng nhựa, bo viền, với thiết kế mặt lưng xước phay. Cụm 3 camera đặt trong khung hình vuông bo góc mềm mại, bổ sung nút cảm biến vân tay.\r\nMàn hình: IPS LCD DotDrop 6.71 inch Full HD+ 720x1600px, tần số quét \r\nHiệu năng: Chip Qualcomm Snapdragon 680 6nm, RAM 4GB, bộ nhớ trong 64GB/128GB.\r\nCamera: Camera chính góc rộng 50MP khẩu độ f/1.8. Camera trước 5MP.\r\nDung lượng pin:  5.000 mAh, chế độ sạc nhanh 18W.\r\nRedmi 10C sẽ phù hợp với người dùng muốn được sử dụng con chip Snapdragon 680 nâng cao hiệu năng khi mức giá lại vô cùng rẻ. Với thiết kế và chất lượng camera không có nhiều thay đổi so với Redmi 9C và Redmi Note 11, nhưng Redmi 10C mang tới trải nghiệm mượt hơn để xem phim, chiến game, họp online, học tập online,…'),
(24, 4, 'Oppo Reno Series', 4500000, '/BTL_web/public/imgs/op1.jpg', 'Dòng tầm trung, thiết kế thời trang, camera tốt, màn hình AMOLED.', 'Dòng máy này thường được Oppo phát triển với sự chú trọng vào thiết kế và hiệu suất chụp ảnh, đặc biệt là các tính năng camera.\r\n\r\nOppo Reno 10 Pro+ 5G:\r\nMàn hình: 6.74-inch AMOLED, độ phân giải Full HD+\r\nChipset: Qualcomm Snapdragon 8 Gen 1\r\nCamera: Camera chính 50 MP, camera telephoto 64 MP, camera siêu rộng 8 MP\r\nPin: 4700 mAh, hỗ trợ sạc nhanh 100W\r\nTính năng nổi bật: 5G, màn hình cong, camera selfie 32 MP'),
(25, 4, 'Oppo Find X Series', 2000000, '/BTL_web/public/imgs/op2.jpg', 'Dòng cao cấp, màn hình đẹp, hiệu năng mạnh, camera cao cấp.', 'Dòng Find X hướng đến những người dùng cao cấp với thiết kế cao cấp, màn hình lớn, và các tính năng tiên tiến.\r\n\r\nOppo Find X6 Pro:\r\nMàn hình: 6.82-inch AMOLED, độ phân giải 2K\r\nChipset: Qualcomm Snapdragon 8 Gen 2\r\nCamera: 50 MP chính, 50 MP telephoto, 50 MP siêu rộng\r\nPin: 5000 mAh, hỗ trợ sạc nhanh 100W, sạc không dây 50W\r\nTính năng nổi bật: Hệ thống camera cao cấp, thiết kế sang trọng, hiệu suất mạnh mẽ'),
(26, 4, 'Oppo A Series', 5200000, '/BTL_web/public/imgs/op3.jpg', 'Dòng giá rẻ, cấu hình cơ bản, pin lớn, phù hợp nhu cầu cơ bản.', 'Dòng máy này dành cho phân khúc tầm trung, với nhiều lựa chọn giá rẻ nhưng vẫn có tính năng mạnh mẽ.\r\n\r\nOppo A78 5G:\r\nMàn hình: 6.56-inch LCD, độ phân giải HD+\r\nChipset: MediaTek Dimensity 700\r\nCamera: 50 MP chính, camera phụ 2 MP\r\nPin: 5000 mAh, hỗ trợ sạc nhanh 33W\r\nTính năng nổi bật: Mạng 5G, pin lớn, hiệu suất ổn định cho người dùng tầm trung'),
(27, 4, 'Oppo F Series', 1400000, '/BTL_web/public/imgs/op4.jpg', 'Dòng tầm trung, camera selfie tốt, thiết kế thời trang.', 'Dòng Oppo F tập trung vào camera selfie và thiết kế trẻ trung.\r\n\r\nOppo F23 5G:\r\nMàn hình: 6.72-inch IPS LCD, độ phân giải Full HD+\r\nChipset: Qualcomm Snapdragon 695\r\nCamera: Camera chính 64 MP, camera phụ 2 MP\r\nPin: 5000 mAh, hỗ trợ sạc nhanh 67W\r\nTính năng nổi bật: Camera selfie 32 MP, pin mạnh mẽ, sạc nhanh 67W'),
(28, 4, 'Oppo Find X6 Pro', 5000000, '/BTL_web/public/imgs/op5.jpg', 'Màn hình AMOLED, chip Snapdragon 8 Gen 2, camera cao cấp, pin lớn.', 'Màn hình: 6.82-inch AMOLED, độ phân giải 2K, tần số quét 120Hz\r\nChipset: Qualcomm Snapdragon 8 Gen 2\r\nRAM: 12GB / 16GB\r\nBộ nhớ trong: 256GB / 512GB\r\nCamera:\r\nCamera chính 50 MP, khẩu độ f/1.8\r\nCamera telephoto 50 MP, zoom 2x\r\nCamera siêu rộng 50 MP\r\nCamera selfie: 32 MP\r\nPin: 5000 mAh, hỗ trợ sạc nhanh 100W, sạc không dây 50W\r\nTính năng nổi bật: Hệ thống camera cải tiến, hiệu suất mạnh mẽ, thiết kế cao cấp, sạc nhanh cực kỳ mạnh mẽ.'),
(29, 5, 'Vertu Signature', 340000000, '/BTL_web/public/imgs/dk1.jpg', 'Điện thoại siêu sang, thiết kế thủ công, vật liệu cao cấp, không có tính năng smartphone.', 'Chất liệu: Vỏ máy thường được làm từ vật liệu cao cấp như titan, thép không gỉ, hoặc vàng. Các phiên bản đặc biệt có thể được đính kim cương hoặc da thủ công.\r\nMàn hình: Được bảo vệ bởi lớp kính sapphire, giúp chống trầy xước và tăng độ bền.\r\nBàn phím: Bàn phím được chế tác thủ công, các phím có đèn nền và cảm giác bấm đặc biệt để mang lại trải nghiệm đẳng cấp.\r\nDịch vụ hỗ trợ đặc biệt: Một số mẫu Vertu Signature đi kèm với dịch vụ trợ lý cá nhân 24/7, giúp người dùng dễ dàng sắp xếp các cuộc hẹn, đặt vé máy bay, khách sạn, và nhiều tiện ích khác.\r\nHệ điều hành: Vertu Signature thường là dòng máy điện thoại cơ bản với tính năng gọi, nhắn tin, và không có hệ điều hành thông minh như smartphone hiện đại.'),
(30, 5, 'Nokia 8800', 17000000, '/BTL_web/public/imgs/dk2.jpg', 'Điện thoại cổ điển, thiết kế sang trọng, vỏ kim loại, tính năng cơ bản.', 'Chất liệu:\r\nHình thức vỏ đẹp đến 98%\r\nVỏ được chế tác từ thép không gỉ, chống oxy hóa, chống bào mòn mạ Vàng Hồng\r\nMặt kính 2 lớp tráng Sapphire siêu bền, siêu chống xước\r\nMàn hình zin nguyên bản được phủ lớp dầu chống lóa\r\nNút home hay viền máy được đính kim cương'),
(31, 5, 'Điện thoại XOR', 130000000, '/BTL_web/public/imgs/dk3.jpg', 'Điện thoại cao cấp, bảo mật cao, thiết kế thủ công, chức năng cơ bản.', 'XOR VIỆT NAM, XOR CHÍNH HÃNG,\r\nXOR Titanium X2 Marine \r\n\r\nTình Trạng: New 2024 Full Box\r\nChất Liệu: Titanium, Gốm Ceramic, Kính Sapphire\r\nPhụ Kiện: Full box đầy đủ phụ kiện\r\nBảo Hành: Chính hãng toàn cầu 2 năm\r\nGiá Rẻ Nhất Thị Trường đã bao gồm VAT\r\nXuất hóa đơn VAT theo yêu cầu\r\nHoàng Luxury - Đại Lý Ủy Quyền Của XOR'),
(32, 5, 'Vertu Signature S Yellow Gold Ceramic', 25000000, '/BTL_web/public/imgs/dk4.jpg', 'Điện thoại siêu sang, chất liệu vàng và ceramic, thiết kế tinh xảo.', 'Khung máy là vàng nguyên khối chính hãng, tán ốc vàng nguyên khối.\r\n\r\nKính phím vàng nguyên khối, lưng gốm Ceramic siêu cứng, màu đen bóng sang trọng và đẳng cấp.\r\n\r\nMàn hình Sapphire nguyên khối siêu chống xước, bao da zin hãng khoá vàng khối.\r\n\r\nVertu Signature S Yellow Gold Ceramic được chế tác hoàn toàn thủ công, nghệ nhân trình độ cao lắp ráp, hoàn thiện với độ trau chuốt và tỉ mỉ đến từng chi tiết.'),
(33, 5, 'Điện thoại IP WiFi Fanvil W611W', 5000000, '/BTL_web/public/imgs/dk6.jpg', 'Điện thoại IP, hỗ trợ WiFi, dùng cho liên lạc nội bộ và văn phòng.', '- Màn hình màu 2,4\" 240 x 320 với giao diện người dùng trực quan\r\n\r\n- Mức độ bảo vệ cao IP67\r\n\r\n- Wi-Fi băng tần kép 802.11 a/b/g/n/ac/ax Wi-Fi (Wi-Fi 6, 2.4GHz & 5GHz)\r\n\r\n- Chuyển vùng IEEE802.11k/v/r\r\n\r\n- Mã hóa WPA/WPA2-PSK và 802.1X EAP để đảm bảo an ninh truyền thông\r\n\r\n- Nút bấm để nói (PTT) để quay số nhanh\r\n\r\n- Thời gian đàm thoại lên tới 9 giờ và thời gian chờ lên tới 200 giờ\r\n\r\n \r\n\r\nĐược trang bị pin sạc 1900mAh, W611W sẵn sàng cho thời gian đàm thoại 9 giờ hoặc thời gian chờ 200 giờ. W611W được sử dụng rộng rãi trong nhiều trường hợp khác nhau như doanh nghiệp, trung tâm mua sắm, khu dân cư, khách sạn và nhà kho, mang đến cho người dùng trải nghiệm liên lạc di động chất lượng cao'),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  ADD PRIMARY KEY (`id_chitiethoadon`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_hd` (`id_hd`);

--
-- Indexes for table `tbl_chuchay`
--
ALTER TABLE `tbl_chuchay`
  ADD PRIMARY KEY (`id_textchay`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `tbl_hangsanxuat`
--
ALTER TABLE `tbl_hangsanxuat`
  ADD PRIMARY KEY (`id_hsx`);

--
-- Indexes for table `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Indexes for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id_logo`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_hsx` (`id_hsx`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  MODIFY `id_chitiethoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_chuchay`
--
ALTER TABLE `tbl_chuchay`
  MODIFY `id_textchay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hangsanxuat`
--
ALTER TABLE `tbl_hangsanxuat`
  MODIFY `id_hsx` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `id_hd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id_kh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id_logo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  ADD CONSTRAINT `tbl_chitiethoadon_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `tbl_sanpham` (`id_sp`),
  ADD CONSTRAINT `tbl_chitiethoadon_ibfk_2` FOREIGN KEY (`id_hd`) REFERENCES `tbl_hoadon` (`id_hd`);

--
-- Constraints for table `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD CONSTRAINT `tbl_hoadon_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `tbl_khachhang` (`id_kh`);

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_2` FOREIGN KEY (`id_hsx`) REFERENCES `tbl_hangsanxuat` (`id_hsx`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
