-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2023 lúc 03:52 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau2023`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(78, 'bánh kem rất tuyệt, tôi rất thích nó', 16, 41, '2023-10-21'),
(79, 'sản phẩm tuyệt', 15, 41, '2023-10-22'),
(80, 'sản phẩm đẹp', 15, 32, '2023-10-22'),
(81, 'bánh rất chất lượng và tôi rất thích nó', 19, 41, '2023-10-22'),
(82, 'cảm giác thật tuyệt vời khi thưởng thức bánh này', 20, 41, '2023-10-22'),
(83, 'tuyệt', 20, 42, '2023-10-22'),
(84, 'sản phẩm có mẫu mã đẹp', 20, 32, '2023-10-22'),
(85, 'sản phẩm đẹp', 19, 37, '2023-10-22'),
(86, 'sản phẩm đẹp', 19, 37, '2023-10-22'),
(87, 'sản phẩm đẹp', 19, 37, '2023-10-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(7, 'bánh kem'),
(8, 'túi xách'),
(9, 'điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `discount`, `image`, `mota`, `luotxem`, `id_dm`) VALUES
(31, 'túi xách nâu', 9000000, 20, '1697884554_Thiết kế chưa có tên (1).png', 'Cam kết sản phẩm đúng chất lượng miêu tả trên website.', 6, 8),
(32, 'túi xách vàng', 8000000, 15, '1697884619_Thiết kế chưa có tên (8).png', 'Được kiểm tra hàng trước khi nhận & thanh toán, không ưng ý không mua không phải trả bất cứ khoản phí nào.', 18, 8),
(33, 'túi xách xanh', 4000000, 40, '1697884662_Thiết kế chưa có tên (9).png', '– Sản xuất: Trung Quốc (theo tiêu chuẩn chất lượng của thương hiệu ELLY).\r\n– Màu sắc: Đen, nâu.\r\n– Kích thước: 38 x 29 x 8 cm (Chiều ngang x chiều dọc x độ dày).', 7, 8),
(34, 'túi xách đỏ', 9000000, 30, '1697884706_Thiết kế chưa có tên (10).png', '– Chất liệu: Da thật cao cấp nhập khẩu.\r\n– Kiểu dáng: Túi đeo chéo.\r\n– Bảo hành: 06 tháng (với lỗi do sản xuất)', 7, 8),
(35, 'cặp nâu', 6000000, 10, '1697884766_Thiết kế chưa có tên (12).png', '– Chất liệu: Da thật cao cấp nhập khẩu.\r\n– Kiểu dáng: Túi đeo chéo.\r\n– Bảo hành: 06 tháng (với lỗi do sản xuất)', 5, 8),
(36, 'cặp vàng nâu', 6000000, 40, '1697884802_Thiết kế chưa có tên (11).png', '– Màu sắc: Đen, nâu.\r\n– Kích thước: 38 x 29 x 8 cm (Chiều ngang x chiều dọc x độ dày).\r\n– Chất liệu: Da thật cao cấp nhập khẩu.', 0, 8),
(37, 'điện thoại đen double', 9000000, 12, '1697884911_Thiết kế chưa có tên (2).png', 'Hư gì đổi nấy 12 tháng tại 3353 siêu thị toàn quốc (miễn phí tháng đầu', 31, 9),
(38, 'điện thoại vàng tím', 7000000, 20, '1697885009_Thiết kế chưa có tên (5).png', 'Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng Xem địa chỉ bảo hành', 0, 9),
(39, 'điện thoại trắng đen', 9800000, 30, '1697885050_Thiết kế chưa có tên (3).png', 'Bộ sản phẩm gồm: Hộp, Sách hướng dẫn, Cây lấy sim, Cáp Type C', 0, 9),
(40, 'điện thoại trên gường', 6000000, 30, '1697885110_Thiết kế chưa có tên (4).png', 'Hư gì đổi nấy 12 tháng tại 3353 siêu thị toàn quốc (miễn phí tháng đầu)', 0, 9),
(41, 'bánh kem trắng', 100000, 30, '1697885188_Thiết kế chưa có tên (15).png', 'bánh kem là tinh hoa nghệ thuật có thẩm mĩ cao , thường dùng trong các tiệc', 26, 7),
(42, 'bánh kem trái tim', 200000, 20, '1697885244_Thiết kế chưa có tên (14).png', 'bánh kem trái tim thể hiện tình yêu, nên tặng cho người yêu', 5, 7),
(43, 'bánh kem thập cẩm hoa quả', 150000, 20, '1697885316_Thiết kế chưa có tên (16).png', 'bánh kem có nhiều vị chất chứa bao nguyên liệu từ tự nhiên ', 3, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(6, 'liem', '123', 'liemntph36778@fpt.edu.vn', 'số 1 , Trịnh Văn Bô', '0376278382', 1),
(14, 'trongliem', '123', 'ngotrongliem2004@gmail.com', 'thon giao lac xa thai tho huyen thai thuy tinh thai binh', '0376278382', 0),
(15, 'Ngô Trọng Liêm', '123', 'ngotrongliem2004th@gmail.com', 'Giáo Lạc', '0376278382', 0),
(16, 'tong lim', '123', '0376278382@gmail.com', 'hà nội', '0376278382', 0),
(19, 'user1', '123', 'user1@gamil.com', '123', '123', 0),
(20, 'user2', '123', 'user2@gmail.com', '123', '123', 0),
(21, 'user3', '123', 'user3@gmail.com', '111', '111', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`id_dm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
