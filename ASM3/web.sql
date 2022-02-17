-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2021 lúc 10:17 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaybl` date DEFAULT NULL,
  `idkh` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idsanpham` int(11) DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `tenkhach` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idsanpham` int(11) DEFAULT NULL,
  `idkh` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `maloai`
--

CREATE TABLE `maloai` (
  `idmaloai` int(11) NOT NULL,
  `tenloai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `maloai`
--

INSERT INTO `maloai` (`idmaloai`, `tenloai`) VALUES
(4, 'Áo dài dáng xưa'),
(7, 'Áo dài Chân Son'),
(89, 'Áo dài dáng xưa XƯA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(11) NOT NULL,
  `magiamgia` int(10) DEFAULT NULL,
  `tensanpham` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giasanpham` float DEFAULT NULL,
  `soluong` int(10) DEFAULT NULL,
  `size` float DEFAULT NULL,
  `danhgia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idmaloai` int(11) DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `magiamgia`, `tensanpham`, `giasanpham`, `soluong`, `size`, `danhgia`, `hinhanh1`, `hinhanh2`, `hinhanh3`, `idmaloai`, `mota`) VALUES
(5, 424124, 'Nguyễn Lam Trường', 1232170000, 21, NULL, NULL, 'anh6.gif', NULL, NULL, 4, ' \r\n\r\n\"Dành cho em, hoa những khu vườn\r\nHoa huệ trắng hoa hồng thơm ngào ngạt\r\nMọi hương sắc của mùa hè ngây ngất\r\nAnh muốn mang phủ ngập cả mình em.\"\r\n\r\nMỗi màu áo dài dáng xưa lần này của chúng mình, đều được đặt cạnh một loài hoa nhỏ. Duyên dáng, hiền lành, yểu điệu, thanh thuần. Cũng là muốn dành cho mỗi nàng thơ đến với Sumire Store, một tà áo đẹp và thêm phần nổi bật hương sắc rất riêng của chính nàng.'),
(10, 2452234, 'Áo Dài nét xuân', 123213, 23, NULL, NULL, 'anh4.jpg', NULL, NULL, 89, '\"Dành cho em, hoa những khu vườn\r\nHoa huệ trắng hoa hồng thơm ngào ngạt\r\nMọi hương sắc của mùa hè ngây ngất\r\nAnh muốn mang phủ ngập cả mình em.\"\r\n\r\nMỗi màu áo dài dáng xưa lần này của chúng mình, đều được đặt cạnh một loài hoa nhỏ. Duyên dáng, hiền lành, yểu điệu, thanh thuần. Cũng là muốn dành cho mỗi nàng thơ đến với Sumire Store, một tà áo đẹp và thêm phần nổi bật hương sắc rất riêng của chính nàng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PhanQuyen` int(11) DEFAULT NULL,
  `idkh` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `binhluan` (`idkh`),
  ADD KEY `binhluan1` (`idsanpham`),
  ADD KEY `binhluan2` (`username`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`),
  ADD KEY `muahang` (`idsanpham`);

--
-- Chỉ mục cho bảng `maloai`
--
ALTER TABLE `maloai`
  ADD PRIMARY KEY (`idmaloai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`),
  ADD KEY `sanpham` (`idmaloai`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`username`),
  ADD KEY `sohuu` (`idkh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`idkh`),
  ADD CONSTRAINT `binhluan1` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`idsanpham`),
  ADD CONSTRAINT `binhluan2` FOREIGN KEY (`username`) REFERENCES `taikhoan` (`username`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `muahang` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`idsanpham`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham` FOREIGN KEY (`idmaloai`) REFERENCES `maloai` (`idmaloai`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `sohuu` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`idkh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
