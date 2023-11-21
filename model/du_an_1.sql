-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 01:26 AM
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
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `id_khoahoc` int(11) NOT NULL,
  `noidung_binhluan` varchar(255) NOT NULL,
  `ngaybinhluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangki_khoahoc`
--

CREATE TABLE `dangki_khoahoc` (
  `id_dkkhoahoc` int(11) NOT NULL,
  `id_khoahoc` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id_danhgia` int(11) NOT NULL COMMENT 'id đánh giá',
  `name_danhgia` varchar(255) NOT NULL COMMENT 'tên đánh giá'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`id_danhgia`, `name_danhgia`) VALUES
(1, 'Xuất sắc'),
(2, 'Tốt'),
(3, 'Bình thường'),
(4, 'không bình thường'),
(5, 'Chuyên nghiệp'),
(6, 'không chuyên nghiệp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_khoahoc`
--

CREATE TABLE `danhmuc_khoahoc` (
  `iddm_khoahoc` int(11) NOT NULL COMMENT 'id danh mục khóa hoc',
  `namedm_khoahoc` varchar(255) NOT NULL COMMENT 'tên danh mục khóa học'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_khoahoc`
--

INSERT INTO `danhmuc_khoahoc` (`iddm_khoahoc`, `namedm_khoahoc`) VALUES
(10, 'Quan hệ công chúng'),
(12, 'Tự động hóa'),
(31, 'thiết kế đồ họa'),
(33, 'phát triển cá nhân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_trangthai`
--

CREATE TABLE `danhmuc_trangthai` (
  `iddm_trangthai` int(11) NOT NULL COMMENT 'id danh mục trạng thái',
  `namedm_trangthai` varchar(255) NOT NULL COMMENT 'tên danh mục trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_trangthai`
--

INSERT INTO `danhmuc_trangthai` (`iddm_trangthai`, `namedm_trangthai`) VALUES
(1, 'sinh viên'),
(2, 'lớp học  ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemtongket`
--

CREATE TABLE `diemtongket` (
  `id_tongket` int(11) NOT NULL,
  `id_khoahoc` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `nhanxet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_khoahoc` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `traloi_sinhvien` varchar(255) DEFAULT NULL,
  `id_danhgia` int(11) NOT NULL,
  `id_name_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hoc`
--

CREATE TABLE `gio_hoc` (
  `id_giohoc` int(11) NOT NULL COMMENT 'id giờ học',
  `name_giohoc` varchar(255) NOT NULL COMMENT 'tên giờ học'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hoc`
--

INSERT INTO `gio_hoc` (`id_giohoc`, `name_giohoc`) VALUES
(1, '14h10p -> 16h10p - Thứ 2/4/6 hàng tuần'),
(2, '16h20p -> 18h20p - Thứ 2/4/6 hàng tuần'),
(3, '18h30p -> 20h30p - Thứ 2/4/6 hàng tuần');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `id_khoahoc` int(11) NOT NULL,
  `ngaymua` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id_khoahoc` int(11) NOT NULL,
  `iddm_khoahoc` int(11) NOT NULL,
  `img_khoahoc` varchar(255) NOT NULL,
  `name_khoahoc` varchar(255) NOT NULL,
  `noidung_khoahoc` text NOT NULL,
  `price_khoahoc` float NOT NULL,
  `luot_xem` int(10) NOT NULL DEFAULT 0,
  `luot_dangki` int(10) NOT NULL DEFAULT 0,
  `id_taikhoan` int(11) NOT NULL,
  `id_khuyenmai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_khuyenmai` int(11) NOT NULL COMMENT 'id khuyến mãi',
  `percent` int(10) NOT NULL COMMENT 'phần trăm '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `id_lophoc` int(11) NOT NULL,
  `id_phonghoc` int(11) NOT NULL,
  `id_khoahoc` int(11) NOT NULL,
  `ngaykhaigiang` varchar(255) NOT NULL,
  `ngaybegiang` varchar(255) NOT NULL,
  `nhomzalo` varchar(255) DEFAULT NULL,
  `id_trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `name_question`
--

CREATE TABLE `name_question` (
  `id_name_question` int(11) NOT NULL COMMENT 'id câu hỏi',
  `name_question` varchar(255) NOT NULL COMMENT 'tên câu hỏi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `name_question`
--

INSERT INTO `name_question` (`id_name_question`, `name_question`) VALUES
(1, 'Bạn có dễ tiếp thu kiến thức không?'),
(2, 'Bạn Thấy giảng viên của mình thế nào'),
(3, 'Bạn có gì khúc mắc không?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phonghoc`
--

CREATE TABLE `phonghoc` (
  `id_phonghoc` int(11) NOT NULL,
  `name_phong` varchar(255) NOT NULL,
  `mota_lophoc` text NOT NULL,
  `slot` int(10) NOT NULL,
  `id_giohoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phonghoc`
--

INSERT INTO `phonghoc` (`id_phonghoc`, `name_phong`, `mota_lophoc`, `slot`, `id_giohoc`) VALUES
(1, 'F304', 'tòa f tầng 3 phòng 04', 40, 1),
(2, 'F506', 'tòa f tầng 5 phòng 06', 38, 2),
(3, 'F106', 'tòa f tầng 1 phòng 06', 38, 3),
(4, 'F206', 'tòa f tầng 2 phòng 06', 41, 3),
(5, 'P506', 'tòa P tầng 5 phòng 06', 35, 1),
(6, 'P206', 'tòa P tầng 2 phòng 06', 38, 2),
(7, 'F101', 'tòa F tầng 101', 12, 2),
(8, 'F102', 'tòa F tầng 1 phòng 02', 36, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `riengtu`
--

CREATE TABLE `riengtu` (
  `id_riengtu` int(11) NOT NULL,
  `email_riengtu` varchar(255) NOT NULL,
  `sdt_riengtu` varchar(255) NOT NULL,
  `noidung` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `user`, `pass`, `email`, `address`, `tel`, `mota`, `role`) VALUES
(1, 'user1', '123', 'user1@gmail.com', 'Thái Bình', '0376278382', 'đẹp trai', 0),
(2, 'admin', '123', 'admin@gmail.com', 'Thai Binh', '0376278382', 'tôi rất thích chơi bóng bàn', 1),
(3, 'nhanvien', '123', 'nhanvien@gmail.com.com', 'Hà Nội ', '0376278382', '3:26 tôi đẩy cái này lên', 2),
(6, 'gv1', '123', 'gv1@gmail.com', 'hà nội', '0345345345', 'Tôi là người mới', 3),
(7, 'user2', '123', 'user2@gmail.com', 'hà nội', '123123123', 'Tôi là người mới', 0),
(16, 'gv3', '123', 'gv3@gmail.com', 'Hà nội', '123123123', '21313sdgdgdgdg dsfgsdgfdgd g gfgfdgdgdfgg dgdf dfgggsd gsdfg sfgsfgsdgs gsdgs gsdfgsdg sdgdsg dsgggdgsg fsfgsgsdg sdgsfg sdg sfgsfdg sfgsdg sdfg sdfg s', 3),
(17, 'gv4', '123', 'gv4@gmail.com', 'Thái Bình', '123123123', '21313sdgdgdgdg dsfgsdgfdgd g gfgfdgdgdfgg dgdf dfgggsd gsdfg sfgsfgsdgs gsdgs gsdfgsdg sdgdsg dsgggdgsg fsfgsgsdg sdgsfg sdg sfgsfdg sfgsdg sdfg sdfg s', 3),
(18, 'gv5', '123', 'gv5@gmail.com', 'Ninh Bình', '123123123', '21313sdgdgdgdg dsfgsdgfdgd g gfgfdgdgdfgg dgdf dfgggsd gsdfg sfgsfgsdgs gsdgs gsdfgsdg sdgdsg dsgggdgsg fsfgsgsdg sdgsfg sdg sfgsfdg sfgsdg sdfg sdfg s', 3),
(19, 'gv6', '123', 'gv6@gmail.com', 'Phú Thọ', '123123123', '21313sdgdgdgdg dsfgsdgfdgd g gfgfdgdgdfgg dgdf dfgggsd gsdfg sfgsfgsdgs gsdgs gsdfgsdg sdgdsg dsgggdgsg fsfgsgsdg sdgsfg sdg sfgsfdg sfgsdg sdfg sdfg s', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `id_thongbao` int(11) NOT NULL COMMENT 'id thông báo',
  `img_thongbao` varchar(255) NOT NULL COMMENT 'ảnh thông báo',
  `title` varchar(255) NOT NULL COMMENT 'tiêu đề thông báo',
  `noidung_thongbao` text NOT NULL COMMENT 'nội dung thông báo',
  `ngaythongbao` varchar(255) NOT NULL COMMENT 'ngày đăng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`id_thongbao`, `img_thongbao`, `title`, `noidung_thongbao`, `ngaythongbao`) VALUES
(2, '1700472922__hihi.jpg', 'Chào tháng 12 đầy năng lượng', 'Chào tháng 12 đầy năng lượng Chào tháng 12 đầy năng lượng Chào tháng 12 đầy năng lượng Chào tháng 12 đầy năng lượngChào tháng 12 đầy năng lượng Chào tháng 12 đầy năng lượngChào tháng 12 đầy năng lượng', '20/11/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id_trangthai` int(11) NOT NULL,
  `name_trangthai` varchar(255) NOT NULL,
  `iddm_trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id_trangthai`, `name_trangthai`, `iddm_trangthai`) VALUES
(1, 'sql là nhất', 1),
(2, 'bỏ học', 1),
(3, 'đang hoạt động', 2),
(4, 'sắp Hoạt động', 2),
(5, 'dừng hoạt động', 2),
(6, 'hello', 1),
(7, 'hello 123', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `dangki_khoahoc`
--
ALTER TABLE `dangki_khoahoc`
  ADD PRIMARY KEY (`id_dkkhoahoc`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id_danhgia`);

--
-- Chỉ mục cho bảng `danhmuc_khoahoc`
--
ALTER TABLE `danhmuc_khoahoc`
  ADD PRIMARY KEY (`iddm_khoahoc`);

--
-- Chỉ mục cho bảng `danhmuc_trangthai`
--
ALTER TABLE `danhmuc_trangthai`
  ADD PRIMARY KEY (`iddm_trangthai`);

--
-- Chỉ mục cho bảng `diemtongket`
--
ALTER TABLE `diemtongket`
  ADD PRIMARY KEY (`id_tongket`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Chỉ mục cho bảng `gio_hoc`
--
ALTER TABLE `gio_hoc`
  ADD PRIMARY KEY (`id_giohoc`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`id_khoahoc`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_khuyenmai`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`id_lophoc`);

--
-- Chỉ mục cho bảng `name_question`
--
ALTER TABLE `name_question`
  ADD PRIMARY KEY (`id_name_question`);

--
-- Chỉ mục cho bảng `phonghoc`
--
ALTER TABLE `phonghoc`
  ADD PRIMARY KEY (`id_phonghoc`);

--
-- Chỉ mục cho bảng `riengtu`
--
ALTER TABLE `riengtu`
  ADD PRIMARY KEY (`id_riengtu`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id_thongbao`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dangki_khoahoc`
--
ALTER TABLE `dangki_khoahoc`
  MODIFY `id_dkkhoahoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id_danhgia` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id đánh giá', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `danhmuc_khoahoc`
--
ALTER TABLE `danhmuc_khoahoc`
  MODIFY `iddm_khoahoc` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id danh mục khóa hoc', AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `danhmuc_trangthai`
--
ALTER TABLE `danhmuc_trangthai`
  MODIFY `iddm_trangthai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id danh mục trạng thái', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `diemtongket`
--
ALTER TABLE `diemtongket`
  MODIFY `id_tongket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gio_hoc`
--
ALTER TABLE `gio_hoc`
  MODIFY `id_giohoc` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id giờ học', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `id_khoahoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_khuyenmai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id khuyến mãi';

--
-- AUTO_INCREMENT cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `id_lophoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `name_question`
--
ALTER TABLE `name_question`
  MODIFY `id_name_question` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id câu hỏi', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phonghoc`
--
ALTER TABLE `phonghoc`
  MODIFY `id_phonghoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `riengtu`
--
ALTER TABLE `riengtu`
  MODIFY `id_riengtu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id_thongbao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id thông báo', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_trangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
