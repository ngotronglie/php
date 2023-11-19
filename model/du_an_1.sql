-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2023 lúc 01:47 PM
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
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `banner_ngaydang` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Công nghệ thông tin'),
(2, 'thiết kế đồ họa'),
(3, 'marketing'),
(4, 'Tự động hóa'),
(5, 'Tiếng anh');

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
(2, 'lớp');

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
(1, '7h15p -> 9h15p - Thứ 2/4/6 hàng tuần'),
(2, '9h25p -> 11h25p - thứ 2/4/6 hàng tuần'),
(3, '12h -> 14h - thứ 2/4/6 hàng tuần'),
(4, '14h10p -> 16h10p - Thứ 2/4/6 hàng tuần'),
(5, '16h20p -> 18h20p - Thứ 2/4/6 hàng tuần'),
(8, '18h30p -> 20h30p - Thứ 2/4/6 hàng tuần');

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
  `percent` int(10) NOT NULL COMMENT 'phần trăm ',
  `code` varchar(255) NOT NULL COMMENT 'code',
  `ghichu` varchar(255) NOT NULL COMMENT 'ghi chú'
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
  `role` int(10) NOT NULL DEFAULT 0,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `id_thongbao` int(11) NOT NULL COMMENT 'id thông báo',
  `img_thongbao` varchar(255) NOT NULL COMMENT 'ảnh thông báo',
  `title` varchar(255) NOT NULL COMMENT 'tiêu đề thông báo',
  `noidung_thongbao` varchar(255) NOT NULL COMMENT 'nội dung thông báo',
  `ngaythongbao` varchar(255) NOT NULL COMMENT 'ngày đăng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

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
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `iddm_khoahoc` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id danh mục khóa hoc', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmuc_trangthai`
--
ALTER TABLE `danhmuc_trangthai`
  MODIFY `iddm_trangthai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id danh mục trạng thái', AUTO_INCREMENT=3;

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
  MODIFY `id_giohoc` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id giờ học', AUTO_INCREMENT=9;

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
  MODIFY `id_phonghoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id_thongbao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id thông báo';

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_trangthai` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
