-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2023 lúc 12:41 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(5) NOT NULL,
  `tensp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaisp` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mauchudao` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatlieu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kichthuoc` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `congsuat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khonggian` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `hinhanh`, `loaisp`, `mauchudao`, `chatlieu`, `kichthuoc`, `congsuat`, `khonggian`, `gia`) VALUES
(1, 'Đèn pha lê treo trần – AP9862', 'AP9862.jpg', 'Đèn trần', 'Trắng', 'Hợp kim mạ + Pha lê + Thuỷ tinh', 'W800mm*H180mm', 'LED + G4 * 25w * 21sp', 'Phòng khách, Phòng ngủ, Phòng ăn', 4092000),
(2, 'Đèn thả pha lê hiện đại D880178', 'den-tha-d880178-800-180-ct1.jpg', 'Đèn thả', 'Trắng', 'Khung kim loại + Pha lê', 'L800*W180mm', 'E14 * 4 bóng', 'Phòng ăn, Phòng khách, Phòng sinh hoạt chung', 8228000),
(3, 'Đèn tường thuỷ tinh sang trọng – W8900', '23257150438_1164897607-700x700.jpg', 'Đèn tường', 'Vàng', 'Hợp kim + Thuỷ tinh', 'L150*W180*H420mm', 'E14 * 2 bóng', 'Phòng ăn, Phòng khách, Phòng làm việc, Phòng ngủ', 1380000),
(4, 'Đèn chùm hiện đại – 1095', '1095-ct2.jpg', 'Đèn chùm', 'Đen', 'Tay nhựa Acrylic, Thân kim loại mạ', 'D1100 * H650mm', 'Led 12*12W 3 chế độ ánh sáng', '', 4950000),
(5, 'Đèn chùm đồng đá sang trọng - 1253/15', 'den-chum-dong-da-sang-trong-1253-15.png', 'Đèn chùm', 'Vàng', 'Đồng', 'D860*H780mm', 'E14*15 bóng', 'Phòng khách, Phòng ăn, Phòng ngủ, Phòng đọc sách', 40073280),
(6, 'Đèn chùm thông tầng 6208', '6208-6-15-10-6.jpg', 'Đèn thả', 'Vàng', 'Hợp kim kẽm cao cấp + đá ngọc + pha lê K9', 'D1500 * H2400mm', 'E14 * 15 bóng', 'Vị trí thông tầng cầu thang, phòng khách, sảnh, nh', 102308000),
(7, 'Đèn cây tân cổ điển – AP70091/5', 'den-cay-70091-5-1l.jpg', 'Đèn cây', 'Vàng trắng', 'Thủy tinh Murano', 'D500mm*H1600mm', 'E14*5 bóng', 'Phòng ăn, phòng khách, phòng ngủ', 24092000),
(8, 'Đèn ốp panel nổi AP-09-12-T 12W-Tròn ASV', 'den-op-panel-noi-bln-09-12-t-12w-tron-asv-2.jpg', 'Đèn LED', 'Trắng', 'Nhôm', 'D170mm', '12W', '', 132000),
(9, 'Đèn tường ngoại thất cổ điển – APZY067', 'den-tuong-ngoai-that-co-dien-APzy06702.jpg', 'Đèn ngoại thất', 'Đen', 'Nhôm đúc + Thủy tinh', 'W180mm*H480mm', 'E27*25w*1 bóng', '', 1030000),
(10, 'Đèn chùm đồng đá ngọc phong cách Tây Ban Nha', 'den-chum-5534-ct5.jpg', 'Đèn chùm', 'Màu đồng', 'Đồng cao cấp, chao đá', 'D850 mm * H620 mm', 'E27/25W*9 bóng', 'Phòng khách, phòng ngủ, phòng ăn, văn phòng, showr', 32013600),
(11, 'Đèn tường hiện đại màu đồng chao thủy tinh', 'B002-ct1.jpg', 'Đèn tường', 'Vàng đồng', 'Hợp kim mạ + Thủy tinh', 'W250*250mm. Cầu thủy tinh 200mm', 'E27* 25w* 1 bóng', 'Phòng ăn, Phòng khách, Phòng ngủ', 803000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('quanly@gmail.com', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
