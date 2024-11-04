-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 07:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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

--
-- Dumping data for table `tbl_chitiethoadon`
--

INSERT INTO `tbl_chitiethoadon` (`id_chitiethoadon`, `id_hd`, `id_sp`, `soluong`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 2, 3, 1),
(4, 3, 4, 2),
(5, 4, 5, 1),
(6, 5, 6, 1),
(7, 6, 9, 1),
(8, 7, 10, 2),
(9, 8, 7, 1),
(10, 9, 8, 1),
(11, 10, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_dm` int(10) NOT NULL,
  `tendm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_dm`, `tendm`) VALUES
(1, 'Điện thoại'),
(2, 'Máy tính bảng'),
(3, 'Laptop'),
(4, 'Phụ kiện điện thoại'),
(5, 'Đồng hồ thông minh'),
(6, 'Máy ảnh'),
(7, 'Loa bluetooth'),
(8, 'Tivi'),
(9, 'Tai nghe'),
(10, 'Máy chiếu');

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
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Dell'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Xiaomi'),
(7, 'Huawei'),
(8, 'Asus'),
(9, 'HP'),
(10, 'Lenovo');

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
  `id_dm` int(10) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `giaban` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `chitiet` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `id_hsx`, `id_dm`, `tensp`, `giaban`, `img_path`, `chitiet`) VALUES
(1, 1, 1, 'iPhone 13', 20000000, 'iphone13.jpg', 'Điện thoại Apple iPhone 13 chính hãng'),
(2, 2, 1, 'Samsung Galaxy S21', 18000000, 'galaxys21.jpg', 'Điện thoại Samsung Galaxy S21 chính hãng'),
(3, 3, 3, 'Dell XPS 13', 30000000, 'dellxps13.jpg', 'Laptop Dell XPS 13 cao cấp'),
(4, 4, 4, 'Sony WF-1000XM4', 5000000, 'sony_wf.jpg', 'Tai nghe chống ồn Sony WF-1000XM4'),
(5, 5, 2, 'iPad Pro 11', 25000000, 'ipadpro.jpg', 'Máy tính bảng iPad Pro 11 inch chính hãng'),
(6, 6, 3, 'Asus ROG Strix', 35000000, 'asusrog.jpg', 'Laptop gaming Asus ROG Strix'),
(7, 7, 1, 'Xiaomi Redmi Note 10', 7000000, 'redmi10.jpg', 'Điện thoại Xiaomi Redmi Note 10 chính hãng'),
(8, 8, 5, 'Apple Watch Series 6', 12000000, 'applewatch6.jpg', 'Đồng hồ thông minh Apple Watch Series 6'),
(9, 9, 6, 'Canon EOS R5', 85000000, 'canonr5.jpg', 'Máy ảnh Canon EOS R5 chuyên nghiệp'),
(10, 10, 7, 'JBL Flip 5', 3000000, 'jblflip5.jpg', 'Loa bluetooth JBL Flip 5');

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
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_dm`);

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
  ADD KEY `id_hsx` (`id_hsx`),
  ADD KEY `id_dm` (`id_dm`);

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
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_dm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `tbl_danhmuc` (`id_dm`),
  ADD CONSTRAINT `tbl_sanpham_ibfk_2` FOREIGN KEY (`id_hsx`) REFERENCES `tbl_hangsanxuat` (`id_hsx`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CNNECTION */;
