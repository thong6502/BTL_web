-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 10:41 AM
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
(2, 'admin2', 'password2');

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
(10, 'khachhang10', 'password10', 'Phan Thị J', '107 Đường J, Quận K, Hải Phòng', '0944455667');

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
  `chitiet` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `id_hsx`, `tensp`, `giaban`, `img_path`, `chitiet`) VALUES
(1, 1, 'Iphone XSM', 45000, '/BTL_web/public/imgs/ip1.jpg', 'Bộ sản phẩm bao gồm: \r\n•        iPhone sử dụng iOS 18\r\n•        Cáp Sạc USB‑C (1m)\r\n•        Tài liệu\r\nThông tin bảo hành:\r\nBảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.\r\n\r\n\r\n\r\nKích hoạt bảo hành tại: https://checkcoverage.apple.com/vn/en/\r\nHướng dẫn kiểm tra địa điểm bảo hành gần nhất:\r\nBước 1: Truy cập vào đường link https://getsupport.apple.com/?caller=grl&locale=en_VN \r\nBước 2: Chọn sản phẩm.\r\nBước 3: Điền Apple ID, nhập mật khẩu.\r\nSau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.\r\nTại Việt Nam, về chính sách bảo hành và đổi trả của Apple, \"sẽ được áp dụng chung\" theo các điều khoản được liệt kê dưới đây:\r\n1) Chính sách chung: https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\r\n2) Chính sách cho phụ kiện: https://www.apple.com/legal/warranty/products/a\r\n\r\ncc\r\n\r\nessory-warranty-vietnam.html\r\n3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN\r\n\r\n\r\n\r\nQúy khách vui l'),
(2, 1, 'Iphone 7', 200000, '/BTL_web/public/imgs/ip2.jpg', 'Thiết kế tinh tế, nhỏ gọn: iPhone 7 sở hữu thiết kế kim loại nguyên khối sang trọng, kích thước nhỏ gọn dễ cầm nắm và thuận tiện khi bỏ túi. Các màu sắc đa dạng như đen, bạc, vàng và hồng vàng tạo nên phong cách thời trang và lịch lãm cho người sử dụng.\r\n\r\nHiệu năng ổn định: Được trang bị chip Apple A10 Fusion mạnh mẽ, iPhone 7 đáp ứng mượt mà các tác vụ hằng ngày từ lướt web, xem phim đến chơi game. Hệ điều hành iOS tối ưu giúp thiết bị vận hành ổn định và bảo mật cao.\r\n\r\nCamera chất lượng cao: Camera sau 12MP chụp ảnh sắc nét với khả năng lấy nét nhanh, màu sắc tự nhiên, phù hợp cho cả điều kiện ánh sáng yếu. Camera trước 7MP hỗ trợ chụp selfie rõ nét và các cuộc gọi video chất lượng cao.\r\n\r\nÂm thanh sống động: iPhone 7 là một trong những dòng đầu tiên được trang bị loa kép cho âm thanh stereo sống động, nâng cao trải nghiệm nghe nhạc, xem phim và chơi game.\r\n\r\nKhả năng chống nước, chống bụi: Được thiết kế với chuẩn IP67, iPhone 7 có khả năng chống nước và bụi bẩn, giúp bạn yên tâm s'),
(11, 1, 'Iphone 12 Promax', 50000, '/BTL_web/public/imgs/ip3.jpg', 'Bộ sản phẩm bao gồm: \r\n•        iPhone sử dụng iOS 18\r\n•        Cáp Sạc USB‑C (1m)\r\n•        Tài liệu\r\nThông tin bảo hành:\r\nBảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.\r\n\r\n\r\n\r\nKích hoạt bảo hành tại: https://checkcoverage.apple.com/vn/en/\r\nHướng dẫn kiểm tra địa điểm bảo hành gần nhất:\r\nBước 1: Truy cập vào đường link https://getsupport.apple.com/?caller=grl&locale=en_VN \r\nBước 2: Chọn sản phẩm.\r\nBước 3: Điền Apple ID, nhập mật khẩu.\r\nSau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.\r\nTại Việt Nam, về chính sách bảo hành và đổi trả của Apple, \"sẽ được áp dụng chung\" theo các điều khoản được liệt kê dưới đây:\r\n1) Chính sách chung: https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\r\n2) Chính sách cho phụ kiện: https://www.apple.com/legal/warranty/products/a\r\n\r\ncc\r\n\r\nessory-warranty-vietnam.html\r\n3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN\r\n\r\n\r\n\r\nQúy khách vui l'),
(12, 1, 'Iphone 14 ', 140000, '/BTL_web/public/imgs/ip4.jpg', 'Bộ sản phẩm bao gồm: \r\n•        iPhone sử dụng iOS 18\r\n•        Cáp Sạc USB‑C (1m)\r\n•        Tài liệu\r\nThông tin bảo hành:\r\nBảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.\r\n\r\n\r\n\r\nKích hoạt bảo hành tại: https://checkcoverage.apple.com/vn/en/\r\nHướng dẫn kiểm tra địa điểm bảo hành gần nhất:\r\nBước 1: Truy cập vào đường link https://getsupport.apple.com/?caller=grl&locale=en_VN \r\nBước 2: Chọn sản phẩm.\r\nBước 3: Điền Apple ID, nhập mật khẩu.\r\nSau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.\r\nTại Việt Nam, về chính sách bảo hành và đổi trả của Apple, \"sẽ được áp dụng chung\" theo các điều khoản được liệt kê dưới đây:\r\n1) Chính sách chung: https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\r\n2) Chính sách cho phụ kiện: https://www.apple.com/legal/warranty/products/a\r\n\r\ncc\r\n\r\nessory-warranty-vietnam.html\r\n3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN\r\n\r\n\r\n\r\nQúy khách vui l'),
(13, 1, ' Ịphone 12 Pro', 500000, '/BTL_web/public/imgs/ip5.jpg', 'Bộ sản phẩm bao gồm: \r\n•        iPhone sử dụng iOS 18\r\n•        Cáp Sạc USB‑C (1m)\r\n•        Tài liệu\r\nThông tin bảo hành:\r\nBảo hành: 12 tháng kể từ ngày kích hoạt sản phẩm.\r\n\r\n\r\n\r\nKích hoạt bảo hành tại: https://checkcoverage.apple.com/vn/en/\r\nHướng dẫn kiểm tra địa điểm bảo hành gần nhất:\r\nBước 1: Truy cập vào đường link https://getsupport.apple.com/?caller=grl&locale=en_VN \r\nBước 2: Chọn sản phẩm.\r\nBước 3: Điền Apple ID, nhập mật khẩu.\r\nSau khi hoàn tất, hệ thống sẽ gợi ý những trung tâm bảo hành gần nhất.\r\nTại Việt Nam, về chính sách bảo hành và đổi trả của Apple, \"sẽ được áp dụng chung\" theo các điều khoản được liệt kê dưới đây:\r\n1) Chính sách chung: https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\r\n2) Chính sách cho phụ kiện: https://www.apple.com/legal/warranty/products/a\r\n\r\ncc\r\n\r\nessory-warranty-vietnam.html\r\n3) Các trung tâm bảo hành Apple ủy quyền tại Việt Nam: https://getsupport.apple.com/repair-locations?locale=vi_VN\r\n\r\n\r\n\r\nQúy khách vui l'),
(14, 2, 'SamSung Galaxy S24', 400000, '/BTL_web/public/imgs/ss1.jpg', ' Samsung cho ra mắt Samsung S24 Ultra – Flagship dẫn đầu xu hướng với công nghệ AI tích hợp cùng nhiều tính năng và ưu điểm vượt trội khác. Các tính năng AI nổi bật trên điện thoại Samsung mới nhất bao gồm:\r\n\r\n- Galaxy AI với các tính năng Khoanh tròn để tìm kiếm, Photo Assist, Live Translate, Note Assist.\r\n\r\n- Khung viền bằng titan cứng cáp, giúp thiết bị bền bỉ theo thời gian.\r\n\r\n- Các phiên bản màu lấy cảm hứng từ chất liệu đá tự nhiên, mang đến vẻ đẹp sang trọng và hiện đại.\r\n\r\n- Camera tích hợp công nghệ AI tuyệt đỉnh, nâng tầm chất lượng và khả năng xử lý hình ảnh.\r\n\r\n- Hiệu năng cực đỉnh với chip Snapdragon 8 Gen3 for Galaxy, chiến game mượt mà.\r\n\r\n- Pin khoẻ 5000mAh, kéo dài thời gian sử dụng cả ngày dài, để không bỏ lỡ khoảnh khắc quan trọng.\r\n\r\n- Màn hình Dynamic AMOLED 2X với độ sáng lên đến 2600 nit, chìm đắm trong thế giới hình ảnh rực rỡ đầy màu sắc.'),
(15, 2, 'SAMSUNG Galaxy S23', 80000, '/BTL_web/public/imgs/ss2.jpg', 'Samsung Galaxy S23 Ultra 12GB 512GB tạo nên đột phá mạnh mẽ về mặt hiệu năng khi được trang bị vi xử lý Snapdragon 8 Gen 2 vượt trội cùng 12GB bộ nhớ RAM. Chất lượng hiển thị siêu sắc nét trên S23 Ultra tới từ tầm nền Dynamic AMOLED 2X 120Hz thế hệ mới. Bên cạnh đó, smartphone này còn sở hữu cụm camera cao cấp với độ rõ nét đạt tới 200MP. Viên pin 5000mAh cùng sạc nhanh 45W giúp nâng cao thời lượng sử dụng lên một tầm cao mới. \r\n\r\nSamsung Galaxy S23 Ultra 12GB 512GB - Hiển thị sắc nét, cấu hình đỉnh cao\r\nSmartphone cao cấp nhất của tập đoàn Samsung trong năm 2023 được nhiều người bình chọn là phân khúc Samsung Galaxy S23 Ultra. Bứt phá mọi giới hạn hiệu năng với vi xử lý Snapdragon 8 Gen 2 đỉnh cao cùng khả năng hiển thị hình ảnh sắc nét trong từng chi tiết điểm ảnh, Galaxy S23 Ultra mang tới trải nghiệm sử dụng siêu mượt mà, dễ dàng làm hài lòng những người dùng khó tính nhất\r\n\r\nCụm camera 200MP cực khủng giúp nâng tầm trải nghiệm quay chụp\r\nTrong phiên bản nâng cấp lần này, khả năng '),
(16, 2, 'SamSung Galaxy M55', 600000, '/BTL_web/public/imgs/ss3.jpg', 'Thiết kế hiện đại, tinh tế: Samsung sở hữu thiết kế màn hình tràn viền, mặt lưng bóng bẩy và sang trọng.\r\n\r\nHiệu năng mạnh mẽ: Chip xử lý cao cấp, RAM lớn, đáp ứng mượt mà mọi tác vụ từ công việc đến giải trí.\r\n\r\nCamera chụp ảnh chuyên nghiệp: Hệ thống camera đa dạng, chụp sắc nét cả ngày lẫn đêm, hỗ trợ quay video chất lượng cao.\r\n\r\nPin \"trâu\", sạc nhanh tiện lợi: Thời lượng pin dài, sạc nhanh giúp bạn luôn sẵn sàng sử dụng.\r\n\r\nMàn hình sắc nét, màu sắc sống động: Màn hình Super AMOLED hiển thị chân thực, phù hợp để xem phim, chơi game.\r\n\r\n👉 Sở hữu ngay Samsung chính hãng với nhiều ưu đãi hấp dẫn tại cửa hàng chúng tôi!'),
(17, 2, 'Samsung Galaxy A55', 60000, '/BTL_web/public/imgs/ss4.jpg', 'Thiết kế hiện đại, tinh tế: Samsung sở hữu thiết kế màn hình tràn viền, mặt lưng bóng bẩy và sang trọng.\r\n\r\nHiệu năng mạnh mẽ: Chip xử lý cao cấp, RAM lớn, đáp ứng mượt mà mọi tác vụ từ công việc đến giải trí.\r\n\r\nCamera chụp ảnh chuyên nghiệp: Hệ thống camera đa dạng, chụp sắc nét cả ngày lẫn đêm, hỗ trợ quay video chất lượng cao.\r\n\r\nPin \"trâu\", sạc nhanh tiện lợi: Thời lượng pin dài, sạc nhanh giúp bạn luôn sẵn sàng sử dụng.\r\n\r\nMàn hình sắc nét, màu sắc sống động: Màn hình Super AMOLED hiển thị chân thực, phù hợp để xem phim, chơi game.\r\n\r\n👉 Sở hữu ngay Samsung chính hãng với nhiều ưu đãi hấp dẫn tại cửa hàng chúng tôi!'),
(18, 2, 'SamSung  Galaxy A15', 80000, '/BTL_web/public/imgs/ss5.jpg', 'Thiết kế hiện đại, tinh tế: Samsung sở hữu thiết kế màn hình tràn viền, mặt lưng bóng bẩy và sang trọng.\r\n\r\nHiệu năng mạnh mẽ: Chip xử lý cao cấp, RAM lớn, đáp ứng mượt mà mọi tác vụ từ công việc đến giải trí.\r\n\r\nCamera chụp ảnh chuyên nghiệp: Hệ thống camera đa dạng, chụp sắc nét cả ngày lẫn đêm, hỗ trợ quay video chất lượng cao.\r\n\r\nPin \"trâu\", sạc nhanh tiện lợi: Thời lượng pin dài, sạc nhanh giúp bạn luôn sẵn sàng sử dụng.\r\n\r\nMàn hình sắc nét, màu sắc sống động: Màn hình Super AMOLED hiển thị chân thực, phù hợp để xem phim, chơi game.\r\n\r\n👉 Sở hữu ngay Samsung chính hãng với nhiều ưu đãi hấp dẫn tại cửa hàng chúng tôi!'),
(19, 3, 'Redmi Note Series', 600000, '/BTL_web/public/imgs/re1.jpg', 'Hiệu năng vượt trội, giá cả hợp lý: Redmi Note là dòng điện thoại nổi bật về hiệu năng với mức giá tầm trung. Được trang bị vi xử lý mạnh mẽ và RAM lớn, dòng này dễ dàng đáp ứng mọi nhu cầu từ chơi game đến xử lý công việc.\r\n\r\nCamera sắc nét, chụp đêm cực đỉnh: Redmi Note sở hữu hệ thống camera đa dạng, chụp ảnh sắc nét cả ngày lẫn đêm, tích hợp nhiều tính năng AI, phù hợp cho người dùng yêu thích nhiếp ảnh di động.\r\n\r\nMàn hình lớn, pin \"trâu\": Với màn hình lớn Full HD+, trải nghiệm xem phim và giải trí của Redmi Note sống động và chi tiết. Pin dung lượng cao đảm bảo thời gian sử dụng dài mà không lo ngại sạc thường xuyên.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  ADD PRIMARY KEY (`id_chitiethoadon`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_hd` (`id_hd`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  MODIFY `id_chitiethoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id_kh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
