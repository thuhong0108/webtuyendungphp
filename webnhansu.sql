-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2022 lúc 11:07 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webnhansu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cacnganhnghe`
--

CREATE TABLE `cacnganhnghe` (
  `manganh` int(11) NOT NULL,
  `tennganh` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(11) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NamSinh` datetime DEFAULT NULL,
  `GioiTinh` int(11) NOT NULL COMMENT '1:Nam\r\n2:Nữ\r\n3:Khác',
  `DiaChi` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `SoDienThoai` char(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `LoaiNguoiDung` int(11) NOT NULL COMMENT '1:Admin\r\n2:Người Dùng',
  `AnhDaiDien` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtintimviec`
--

CREATE TABLE `thongtintimviec` (
  `MaNguoiDung` int(11) NOT NULL,
  `MaNganh` int(11) NOT NULL,
  `KinhNghiemCaNhan` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TrinhDo` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MucLuong(Min)` float NOT NULL,
  `MucLuong(Max)` float NOT NULL,
  `ChucVu` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GioiThieu` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayTao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
