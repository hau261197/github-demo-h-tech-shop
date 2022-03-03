-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th2 27, 2022 lúc 04:31 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `new_phone_onl_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat_box`
--

DROP TABLE IF EXISTS `chat_box`;
CREATE TABLE IF NOT EXISTS `chat_box` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `statut` tinyint(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL,
  `rep` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=244 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chat_box`
--

INSERT INTO `chat_box` (`id`, `statut`, `id_user`, `content`, `time`, `rep`) VALUES
(242, 1, 22, 'hello', '2022-02-25 23:12:48', 1),
(241, 1, 22, 'ok', '2022-02-24 06:06:47', 1),
(238, 0, 22, 'hi', '2022-02-24 05:40:26', 1),
(237, 0, 22, 'hello', '2022-02-24 05:40:23', 1),
(234, 0, 22, 'hi', '2022-02-24 05:36:03', 1),
(225, 0, 22, 'sssss', '2022-02-24 02:33:08', 1),
(226, 0, 22, 's', '2022-02-24 02:35:18', 1),
(227, 0, 22, 'a', '2022-02-24 02:35:44', 1),
(228, 1, 22, 's', '2022-02-24 02:35:49', 1),
(229, 1, 22, 'aa', '2022-02-24 02:37:36', 1),
(230, 0, 22, 'alo', '2022-02-24 02:37:42', 1),
(231, 1, 22, 'hi', '2022-02-24 05:31:43', 1),
(232, 0, 22, 'hello', '2022-02-24 05:32:31', 1),
(233, 0, 22, 'chào bạn', '2022-02-24 05:33:52', 1),
(216, 0, 22, 'alo', '2022-02-24 02:23:21', 1),
(217, 0, 22, 'alo', '2022-02-24 02:23:31', 1),
(218, 0, 22, 'chào', '2022-02-24 02:23:36', 1),
(219, 0, 22, 'chào', '2022-02-24 02:31:04', 1),
(220, 0, 22, 'chào', '2022-02-24 02:31:04', 1),
(221, 0, 22, 'sssss', '2022-02-24 02:32:03', 1),
(222, 0, 22, 'sssss', '2022-02-24 02:32:03', 1),
(223, 1, 22, 'ádasdasd', '2022-02-24 02:32:10', 1),
(208, 0, 22, 'd', '2022-02-24 02:20:34', 1),
(209, 0, 22, 'd', '2022-02-24 02:20:39', 1),
(210, 0, 22, 'q', '2022-02-24 02:21:24', 1),
(211, 1, 22, 'hi', '2022-02-24 02:21:32', 1),
(212, 0, 22, 'alo', '2022-02-24 02:22:04', 1),
(213, 0, 22, 'alo', '2022-02-24 02:22:09', 1),
(214, 0, 22, 'a', '2022-02-24 02:22:45', 1),
(215, 0, 22, 'a', '2022-02-24 02:22:59', 1),
(198, 0, 22, 'a', '2022-02-24 02:13:41', 1),
(199, 1, 22, 's', '2022-02-24 02:13:47', 1),
(200, 1, 22, 's', '2022-02-24 02:14:16', 1),
(201, 0, 22, 'a', '2022-02-24 02:14:28', 1),
(202, 0, 22, 'a', '2022-02-24 02:17:58', 1),
(203, 0, 22, 'a', '2022-02-24 02:18:24', 1),
(204, 1, 22, 'ác', '2022-02-24 02:18:37', 1),
(205, 0, 22, 'abc', '2022-02-24 02:19:10', 1),
(206, 0, 22, 'a', '2022-02-24 02:20:05', 1),
(207, 0, 22, 'a', '2022-02-24 02:20:16', 1),
(197, 1, 22, 'ư', '2022-02-24 02:11:13', 1),
(196, 0, 22, 'a', '2022-02-24 02:11:09', 1),
(194, 0, 22, 'g', '2022-02-24 02:09:56', 1),
(193, 0, 22, 'g', '2022-02-24 02:07:01', 1),
(192, 1, 22, 'h', '2022-02-24 02:06:50', 1),
(191, 1, 22, 'hau', '2022-02-24 02:05:05', 1),
(189, 0, 22, 'hi', '2022-02-24 02:04:09', 1),
(188, 0, 18, 'chào', '2022-02-24 02:03:36', 1),
(186, 0, 18, 'chào', '2022-02-24 02:02:42', 1),
(185, 0, 18, 'chào', '2022-02-24 02:02:40', 1),
(184, 1, 18, 'chào', '2022-02-24 02:02:14', 1),
(183, 1, 22, 'a', '2022-02-24 01:50:20', 1),
(182, 0, 22, 'ccccccc', '2022-02-24 01:14:06', 1),
(181, 0, 22, 'bbbbbbbb', '2022-02-24 01:14:02', 1),
(180, 0, 22, 'aaaaa', '2022-02-24 01:14:00', 1),
(179, 1, 22, 'hau', '2022-02-24 01:13:50', 1),
(178, 0, 22, 'hello', '2022-02-24 01:12:51', 1),
(177, 1, 22, 'abc', '2022-02-24 01:12:46', 1),
(176, 0, 22, 'Chào bạn!', '2022-02-24 01:12:34', 1),
(175, 1, 22, 'Xin chào!', '2022-02-24 01:12:18', 1),
(174, 0, 22, 'hi', '2022-02-24 01:07:11', 1),
(173, 1, 22, 'ok', '2022-02-23 08:47:54', 1),
(172, 0, 22, 'alo', '2022-02-23 08:45:39', 1),
(171, 0, 22, 'alo', '2022-02-23 08:44:19', 1),
(170, 0, 22, 'v', '2022-02-23 08:42:44', 1),
(167, 0, 22, 'Vâng!', '2022-02-23 08:34:28', 1),
(168, 1, 22, 'chào', '2022-02-23 08:41:33', 1),
(243, 0, 22, 'hi', '2022-02-25 23:13:00', 1),
(240, 0, 22, 'alo', '2022-02-24 06:06:43', 1),
(239, 1, 22, 'hello', '2022-02-24 05:41:08', 1),
(236, 0, 22, 'chào', '2022-02-24 05:36:35', 1),
(235, 0, 22, 'heloo', '2022-02-24 05:36:11', 1),
(224, 0, 22, 'sssss', '2022-02-24 02:32:32', 1),
(195, 1, 22, 'a', '2022-02-24 02:10:02', 1),
(190, 0, 22, 'hi', '2022-02-24 02:04:50', 1),
(187, 0, 18, 'chào', '2022-02-24 02:03:33', 1),
(169, 0, 22, 'alo', '2022-02-23 08:42:32', 1),
(166, 1, 22, 'Xin hãy cho tôi biết chương trình ưu đãi bên bạn', '2022-02-23 08:34:18', 1),
(165, 1, 22, 'tôi muốn mua 1 laptop Dell tầm 20 triệu', '2022-02-23 08:33:37', 1),
(164, 0, 22, 'chào', '2022-02-23 08:33:13', 1),
(163, 1, 22, 'hi', '2022-02-23 08:32:59', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia_sp`
--

DROP TABLE IF EXISTS `danh_gia_sp`;
CREATE TABLE IF NOT EXISTS `danh_gia_sp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_san_pham` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sao` int(11) NOT NULL,
  `noi_dung_danh_gia` text COLLATE utf8_unicode_ci,
  `hinh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_gia_sp`
--

INSERT INTO `danh_gia_sp` (`id`, `ma_san_pham`, `id_user`, `sao`, `noi_dung_danh_gia`, `hinh`, `time`) VALUES
(1, 0, 22, 5, 'Hàng đẹp, giao hàng nhanh', '0000000014-khung-vong-tron-trang-tri-co-bong-hoa-png.png', '2022-02-26'),
(2, 40, 22, 5, 'Hàng đẹp', '0000000014-khung-vong-tron-trang-tri-co-bong-hoa-png.png', '2022-02-26'),
(3, 40, 22, 5, 'ok', '0000000014-khung-vong-tron-trang-tri-co-bong-hoa-png.png', '2022-02-26'),
(4, 40, 22, 5, 'ok', '0000000014-khung-vong-tron-trang-tri-co-bong-hoa-png.png', '2022-02-26'),
(5, 40, 22, 5, 'đẹp', '0000000014-khung-vong-tron-trang-tri-co-bong-hoa-png.png', '2022-02-26'),
(6, 40, 22, 4, 'Giao hàng nhanh', '0000000014-khung-vong-tron-trang-tri-co-bong-hoa-png.png', '2022-02-26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE IF NOT EXISTS `hoa_don` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ngay_hoa_don` date NOT NULL,
  `id_ma_kh` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `mau_san_pham` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_gia` double NOT NULL,
  `giam_gia` double NOT NULL,
  `tinh_trang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hoa_don_id_ma_kh_foreign` (`id_ma_kh`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ngay_hoa_don`, `id_ma_kh`, `ma_san_pham`, `so_luong`, `mau_san_pham`, `don_gia`, `giam_gia`, `tinh_trang`, `created_at`, `updated_at`) VALUES
(61, '2021-07-28', 12, 2, 1, 'Black', 15890000, 0, 'Hủy', '2021-07-28 00:07:20', '2021-07-28 00:07:20'),
(60, '2021-07-28', 12, 46, 2, 'Black', 21090000, 0, 'Tiếp nhận', '2021-07-27 23:07:46', '2021-07-27 23:07:46'),
(59, '2021-07-28', 12, 43, 1, 'Black', 29790000, 0, 'Tiếp nhận', '2021-07-27 23:07:43', '2021-07-27 23:07:43'),
(58, '2021-07-28', 12, 40, 1, 'Black', 31690000, 0, 'Tiếp nhận', '2021-07-27 23:07:40', '2021-07-27 23:07:40'),
(57, '2021-07-28', 12, 35, 1, 'Black', 16690000, 0, 'Đang vận chuyển', '2021-07-27 23:07:38', '2021-07-27 23:07:38'),
(56, '2021-07-28', 12, 12, 1, 'Black', 26990000, 0, 'Đang vận chuyển', '2021-07-27 23:07:35', '2021-07-27 23:07:35'),
(53, '2021-07-28', 12, 6, 1, 'Black', 18990000, 0, 'Đang vận chuyển', '2021-07-27 23:07:25', '2021-07-27 23:07:25'),
(54, '2021-07-28', 12, 4, 1, 'Black', 25190000, 0, 'Đang vận chuyển', '2021-07-27 23:07:28', '2021-07-27 23:07:28'),
(50, '2022-02-13', 12, 33, 2, 'Black', 17090000, 0.2, 'Hoàn tất', '2021-07-27 22:07:11', '2021-07-27 22:07:11'),
(51, '2022-02-15', 12, 39, 1, 'Black', 14290000, 0.2, 'Hoàn tất', '2021-07-27 22:07:13', '2021-07-27 22:07:13'),
(49, '2022-02-14', 12, 40, 1, 'Black', 31690000, 0.2, 'Hoàn tất', '2021-07-27 22:07:08', '2021-07-27 22:07:08'),
(128, '2022-02-19', 22, 8, 1, 'Black', 22290000, 0, 'Hủy', NULL, NULL),
(127, '2022-02-19', 22, 30, 1, 'Black', 19650000, 0, 'Tiếp nhận', NULL, NULL),
(129, '2022-02-26', 22, 42, 1, 'Black', 52490000, 600000, 'Tiếp nhận', NULL, NULL),
(126, '2022-02-19', 22, 28, 1, 'Black', 3300000, 1500000, 'Hủy', NULL, NULL),
(125, '2022-02-19', 22, 60, 1, 'Black', 1990000, 1500000, 'Hủy', NULL, NULL),
(123, '2022-02-19', 22, 16, 1, 'Black', 3490000, 0, 'Hủy', NULL, NULL),
(122, '2022-02-19', 22, 18, 1, 'Black', 9790000, 1500000, 'Hủy', NULL, NULL),
(124, '2022-02-19', 22, 30, 1, 'Black', 19650000, 0, 'Tiếp nhận', NULL, NULL),
(121, '2022-02-19', 22, 16, 1, 'Black', 3490000, 0, 'Hủy', NULL, NULL),
(120, '2022-02-19', 22, 18, 1, 'Black', 9790000, 1500000, 'Hủy', NULL, NULL),
(119, '2022-02-19', 22, 16, 1, 'Black', 3490000, 0, 'Hủy', NULL, NULL),
(118, '2022-02-19', 22, 18, 1, 'Black', 9790000, 1500000, 'Hủy', NULL, NULL),
(117, '2022-02-19', 22, 11, 1, 'Black', 9990000, 0, 'Tiếp nhận', NULL, NULL),
(116, '2022-02-19', 22, 8, 1, 'Black', 22290000, 1500000, 'Hủy', NULL, NULL),
(115, '2022-02-19', 22, 8, 1, 'Black', 22290000, 1500000, 'Hủy', NULL, NULL),
(114, '2022-02-19', 22, 8, 1, 'Black', 22290000, 0, 'Tiếp nhận', NULL, NULL),
(113, '2022-02-19', 22, 27, 1, 'Black', 6290000, 1500000, 'Hủy', NULL, NULL),
(112, '2022-02-19', 22, 8, 1, 'Red', 22290000, 1000000, 'Hủy', NULL, NULL),
(111, '2022-02-19', 22, 6, 1, 'Black', 18990000, 0, 'Tiếp nhận', NULL, NULL),
(110, '2022-02-12', 22, 40, 1, 'Black', 31690000, 0, 'Tiếp nhận', NULL, NULL),
(109, '2022-02-12', 22, 4, 1, 'Black', 25190000, 0, 'Hoàn tất', NULL, NULL),
(108, '2022-02-12', 22, 8, 1, 'Black', 22290000, 0, 'Đang vận chuyển', NULL, NULL),
(107, '2022-02-16', 22, 40, 1, 'Black', 31690000, 0, 'Hoàn tất', NULL, NULL),
(106, '2022-02-12', 22, 4, 1, 'Black', 25190000, 0, 'Hoàn tất', NULL, NULL),
(105, '2022-02-12', 22, 64, 1, 'Black', 15890000, 0, 'Hủy', NULL, NULL),
(104, '2022-02-12', 22, 37, 1, 'Black', 29490000, 0, 'Hủy', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

DROP TABLE IF EXISTS `khach_hang`;
CREATE TABLE IF NOT EXISTS `khach_hang` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_kh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dien_thoai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verifield_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanh_vien` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ten_kh`, `dia_chi`, `dien_thoai`, `email`, `email_verifield_at`, `password`, `thanh_vien`, `created_at`, `updated_at`) VALUES
(15, 'hau', '86/163 trch', '123456', 'hau@gmail.com', NULL, '123456', 1, '2021-07-17 07:07:12', '2021-07-17 07:07:12'),
(14, 'hau', '86/163 trch', '12345678', 'trunghaubt97@gmail.com', NULL, 'hau123', 1, '2021-07-17 06:07:37', '2021-07-17 06:07:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

DROP TABLE IF EXISTS `loai_san_pham`;
CREATE TABLE IF NOT EXISTS `loai_san_pham` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_loai` int(11) DEFAULT NULL,
  `hinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`id`, `ten_loai`, `ma_loai`, `hinh`, `icon`, `ghi_chu`, `trang_thai`, `created_at`, `updated_at`) VALUES
(23, 'PHỤ KIỆN', 2203, 'lsp_phu_kien', 'icon-head-phone.png', 'PHỤ KIỆN', 1, NULL, NULL),
(22, 'TABLET', 2201, 'lsp_may_tinh_ban_tablet', 'icon-tablet.png', 'Máy tính bảng Tablet', 1, NULL, NULL),
(21, 'LAPTOP', 2204, 'lsp_may_tinh_xach_tay_laptop', 'icon-laptop.png', 'Máy tính xách tay Laptop', 1, NULL, NULL),
(24, 'MÁY TÍNH BÀN', 2202, 'lsp_may_tinh_ban', 'icon-computer.png', 'Máy tính bàn', 1, NULL, NULL),
(2, 'ĐIỆN THOẠI', 2205, NULL, 'icon-phone.png', 'Điện thoại 123', 1, NULL, NULL),
(40, 'test1', 2206, NULL, 'icons8-sale-60(2).png', 'test thêm loại', 0, NULL, NULL),
(41, 'test2', 12345, NULL, 'hot-icon (2).png', '1234', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ma_giam_gia`
--

DROP TABLE IF EXISTS `ma_giam_gia`;
CREATE TABLE IF NOT EXISTS `ma_giam_gia` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khach_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_tri` double NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `ngay_bat_dau` date NOT NULL DEFAULT '2022-01-01',
  `ket_thuc` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `san_pham_giam_gia_ma_san_pham_foreign` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ma_giam_gia`
--

INSERT INTO `ma_giam_gia` (`id`, `code`, `khach_hang`, `gia_tri`, `trang_thai`, `ngay_bat_dau`, `ket_thuc`, `created_at`, `updated_at`) VALUES
(4, 'GIAM01TRMB', 'Customer', 1000000, 1, '2022-01-01', '2022-08-29', NULL, NULL),
(6, 'GIAM500KMB', 'Member', 500000, 1, '2022-01-01', '2022-08-29', NULL, NULL),
(7, 'GIAM01TRVI', 'Customer', 1000000, 1, '2022-01-01', '2022-01-29', NULL, NULL),
(19, 'GIAM200KCS', 'Customer', 200000, 1, '2022-01-01', '2022-08-29', NULL, NULL),
(20, 'GIAM500KCS', 'Customer', 500000, 0, '2022-01-01', '2022-02-02', NULL, NULL),
(21, 'GIAM100KVI', 'VIP', 100000, 1, '2022-01-01', '2022-02-01', NULL, NULL),
(22, 'GIAM600KVI', 'VIP', 600000, 1, '2022-01-01', '2022-05-31', NULL, NULL),
(23, 'GIAM100KCS', 'Customer', 100000, 1, '2022-01-01', '2022-08-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mgg_check`
--

DROP TABLE IF EXISTS `mgg_check`;
CREATE TABLE IF NOT EXISTS `mgg_check` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_khach_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mgg_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_don_hang` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mgg_check`
--

INSERT INTO `mgg_check` (`id`, `ma_khach_hang`, `mgg_code`, `id_don_hang`) VALUES
(3, '9', 'AAAABBBBCC', 44),
(4, '12', 'AAAABBBBCC', 52),
(5, '18', 'AAAABBBBCC', 63),
(6, '18', 'AAAABBBBCC', 64),
(7, '18', 'AAAABBBBCC', 65),
(8, '18', 'AAAABBBBCC', 66),
(12, '22', 'AAAABBBBCC', 84),
(13, '22', 'AAAABBBBCC', 87),
(22, '22', 'AAAAAAAAAB', 126),
(23, '22', 'GIAM600KVI', 129);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_12_11_063933_create_loai_san_pham_table', 1),
(13, '2018_12_11_064455_create_san_pham_table', 1),
(14, '2018_12_11_070044_create_san_pham_giam_gia_table', 1),
(15, '2018_12_11_071618_create_thong_tin_cong_ty_table', 1),
(16, '2018_12_11_071645_create_lien_he_table', 1),
(17, '2018_12_11_071706_create_su_kien_table', 1),
(18, '2018_12_11_071743_create_dich_vu_tai_cua_hang_table', 1),
(19, '2018_12_27_130647_create_slider_table', 2),
(20, '2018_12_29_112732_create_tin_tuc_table', 3),
(24, '2019_01_03_004430_create_khach_hang_table', 4),
(25, '2019_01_03_004508_create_hoa_don_table', 4),
(26, '2019_01_03_004524_create_ct_hoa_don_table', 4),
(27, '2019_01_06_112527_create_cua_hang_table', 5),
(29, '2019_01_11_115720_create_y_kien_khach_hang_table', 6),
(30, '2019_01_21_182124_create_dang_ky_nhan_tin_nhan_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_san_xuat`
--

DROP TABLE IF EXISTS `nha_san_xuat`;
CREATE TABLE IF NOT EXISTS `nha_san_xuat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nha_san_xuat` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_nha_san_xuat` int(11) DEFAULT NULL,
  `gioi_thieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ma_nha_san_xuat` (`ma_nha_san_xuat`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_san_xuat`
--

INSERT INTO `nha_san_xuat` (`id`, `ten_nha_san_xuat`, `ma_nha_san_xuat`, `gioi_thieu`) VALUES
(1, 'Apple', 100, 'Apple là một tập đoàn công nghệ lớn của Mỹ có trụ sở chính đặt tại Cupertino, bang California thuộc Mỹ. Apple được thành lập ngày 1 tháng 4 năm 1976 bởi ba nhà sáng lập là Steve Wozniak, Steve Jobs và Ronald Wayne,...'),
(2, 'DELL', 101, 'Được thành lập vào năm 1984, công ty đa quốc gia của Hoa Kỳ - Dell Inc, ngày càng phát triển với phạm vi hoạt động trên toàn cầu hiện nay. Dell Inc là một công ty phát triển và thương mại hóa công nghệ máy tính có trụ sở tại Round Rock, Texas (Hoa Kỳ).'),
(3, 'OPPO', 102, 'OPPO là nhà sản xuất thiết bị điện tử lớn được thành lập từ năm 2004 có trụ sở đặt tại Trung Quốc. Đến nay OPPO đã có mặt trên khắp Châu Âu, Châu Á, Bắc Mỹ và Châu Phi, đứng trong top 5 thương hiệu điện thoại của Trung Quốc và đạt được nhiều giải thưởng lớn trên thế giới.'),
(4, 'VIVO', 103, 'Vivo là thương hiệu điện thoại đến từ Trung Quốc. Thành lập năm 2009 bởi Duan Yongping, cũng là đồng sáng lập của OPPO, cái tên rất quen thuộc với người dùng Việt Nam. 2 thương hiệu điện thoại này được xem là \"anh em\" cùng một nhà khi đều thuộc tập đoàn công nghệ BBK Electronics.'),
(5, 'SAMSUNG', 104, 'Samsung là một thương hiệu điện tử, viễn thông có trụ sở đặt tại hàn Quốc, được thành lập vào năm 1938. Cho tới nay, Samsung là một trong những thương hiệu điện tử lớn trên thế giới, và là nhà sản xuất điện thoại lớn nhất trên thế giới. Các dòng điện thoại Samsung được sản xuất chủ yếu tại Hàn Quốc và Việt Nam.'),
(6, 'HP', 105, 'HP được thành lập bởi 2 nhà sáng lập là Bill Hewlett và Dave Packard, với hình thức đầu tiên là nhà sản xuất công cụ đo lường và kiểm định. Thương hiệu HP được thành lập vào ngày 1/1/1939 tại Palo Alto, California, Hoa Kỳ. Hiện nay hãng này đặt trụ sở chính tại Cupertino, California, Hoa Kỳ. '),
(7, 'ASUS', 106, 'Asus (ASUSTeK Computer Incorporated) là một tập đoàn đa quốc gia có trụ sở tại Đài Loan, được thành lập vào ngày 2/4/1990. Ngoài sản xuất điện thoại, Asus còn được biết đến với các sản phẩm nổi tiếng như: laptop, máy tính bảng.'),
(8, 'LENOVO', 107, 'Lenovo hay còn gọi là Lenovo Group Ltd. là tập đoàn đa quốc gia về công nghệ máy tính, được thành lập vào năm 1984 ở Bắc Kinh với tên Legend. Hiện nay Lenovo có các trụ sở chính ở Bắc Kinh - Trung Quốc và Morrisville - Bắc Carolina - Mỹ.'),
(9, 'SONY', 0, 'Sony là một tập đoàn đa quốc gia của Nhật Bản, được thành lập vào tháng 5/1946 tại Nihonbashi Tokyo được mang tên là Tokyo Tsushin Kogyo K.K. Hiện tại, trụ sở chính của Sony nằm tại Minato, Tokyo, Nhật Bản, và là tập đoàn điện tử đứng thứ 5 thế giới tính đến nay.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_san_pham` int(11) DEFAULT NULL,
  `ten_san_pham` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioi_thieu` longtext COLLATE utf8mb4_unicode_ci,
  `gioi_thieu_2` longtext COLLATE utf8mb4_unicode_ci,
  `gioi_thieu_3` longtext COLLATE utf8mb4_unicode_ci,
  `tskt_ket_noi_mang` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_bao_hanh` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_man_hinh` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_VGA` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_camera_sau` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_camera_truoc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_chip` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_ram` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_bo_nho_trong` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_sim` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_pin` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_pixel` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_material` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_weight` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tskt_xuat_xu` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_san_pham` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_3` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_goc` double DEFAULT NULL,
  `giam_gia` double DEFAULT NULL,
  `store_sl_ton` int(11) DEFAULT NULL,
  `store_sl_da_ban` int(11) DEFAULT '0',
  `store_luot_danh_gia` int(11) DEFAULT NULL,
  `store_danh_gia` float DEFAULT NULL,
  `ma_loai` int(11) DEFAULT NULL,
  `ma_nsx` text COLLATE utf8mb4_unicode_ci,
  `trang_thai` tinyint(4) DEFAULT NULL,
  `hot` tinyint(4) DEFAULT NULL,
  `giam_gia_soc` tinyint(4) NOT NULL DEFAULT '0',
  `like` int(11) DEFAULT NULL,
  `new` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ma_san_pham`, `ten_san_pham`, `gioi_thieu`, `gioi_thieu_2`, `gioi_thieu_3`, `tskt_ket_noi_mang`, `tskt_bao_hanh`, `tskt_man_hinh`, `tskt_VGA`, `tskt_camera_sau`, `tskt_camera_truoc`, `tskt_chip`, `tskt_ram`, `tskt_bo_nho_trong`, `tskt_sim`, `tskt_pin`, `tskt_pixel`, `tskt_material`, `tskt_weight`, `tskt_xuat_xu`, `ten_url`, `hinh_san_pham`, `hinh_1`, `hinh_2`, `hinh_3`, `gia_goc`, `giam_gia`, `store_sl_ton`, `store_sl_da_ban`, `store_luot_danh_gia`, `store_danh_gia`, `ma_loai`, `ma_nsx`, `trang_thai`, `hot`, `giam_gia_soc`, `like`, `new`) VALUES
(64, 64, 'Samsung Galaxy S7 EDGE', '<p>&quot;Điện thoại Samsung Galaxy S7 Edge được thiết kế b&oacute;ng bẩy v&agrave; sang trọng hơn, b&ecirc;n cạnh đ&oacute; viền m&agrave;n h&igrave;nh với nhiều t&ugrave;y chỉnh tiện &iacute;ch, nhiều t&iacute;nh năng cao cấp như chống nước, camera chất lượng cao v&agrave; chụp đ&ecirc;m rất tốt. &quot;</p>', '<p>Nhờ đạt chuẩn IP68 n&ecirc;n ho&agrave;n to&agrave;n c&oacute; thể bảo vệ được tốt cho điện thoại Galaxy S7 Edge khi v&ocirc; t&igrave;nh d&iacute;nh nước mưa hay l&agrave;m đổ nước, cho bạn th&ecirc;m an t&acirc;m trong qu&aacute; tr&igrave;nh sử dụng.</p>', '<p>Camera tuyệt vời: Giảm từ độ ph&acirc;n giải 16 MP tr&ecirc;n S6 Edge xuống 12 MP nhưng Galaxy S7 Edge được trang bị c&ocirc;ng nghệ Dual Pixel gi&uacute;p b&ugrave; s&aacute;ng rất tốt trong những điều kiện chụp ảnh thiếu s&aacute;ng.</p>', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '5.5\"', NULL, '12 MP', '4 MP', 'Exynos 8890 8 nhân', '4Gb.', '32GB.', '1 SIM.', '3600 mAh', '2K (1440 x 2560 Pixels)', 'Khung kim loại & Mặt lưng kính cường lực', 'Nặng 157 g', 'Hàng chính hãng.', 'Galaxy-S7-EDGE', 'Galaxy-S7-EDGE', '600_s7edge_gold_800x800', 'Pdpkeyfeature-sm-g935vzsavzw-600x600-C1-062016', '600_s7edge_bluecoral_QT_800x800', 16390000, 500000, 100, 0, 0, 0, 2205, 'SAMSUNG', 1, 1, 0, 0, 1),
(2, 2, 'Galaxy NOTE 7', 'Thiết kế với chất liệu tốt nhất: Điện thoại thông minh Galaxy Note 7 được trang bị màn hình cong 2 bên với tính năng tương tự như đàn anh của mình là Galaxy S7 Edge.', '\"Độ phân giải Quad HD giúp nâng cao độ nét, mang tới không gian làm việc hay giải trí thích mắt.  Với chip Exynos 8890, tốc độ cao nhất 2.6 GHz, RAM 4 GB, bộ nhớ máy lên đến 64 GB và khả năng mở rộng bộ nhớ bằng thẻ nhớ 256 GB.\"', 'Camera đỉnh cao trong việc chụp thiếu sáng: Nhà sản xuất tiếp tục đem những tinh túy từ camera Galaxy S7/S7 Edge lên chiếc Note 7, khẩu độ lớn f1.7 thu sáng rất tốt, công nghệ Đi-ốt quang giúp bắt nét nhanh.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '5.7\"', '', '12 MP', '5 MP', 'Exynos 8890 8 nhân', '4Gb.', '64Gb.', '1 Nano SIM.', '3500 mAh', '2K (1440 x 2560 Pixels)', 'Khung kim loại & Mặt lưng kính cường lực', 'Nặng 169 g', 'Hàng chính hãng.', 'Galaxy-NOTE-7', 'Galaxy-NOTE-7', '600-600-samsung-galaxy-note-fe-didonghathanh-dep-99', '2822_galaxy_note7_gia_tot', 'thong-so-samsung-note-fe-didonghathanh-dep-99', 16390000, 500000, 99, 1, 0, 0, 2205, 'SAMSUNG', 1, 1, 0, 0, 0),
(3, 3, 'OPPO F1S', '\"Thiết kế quen thuộc: OPPO F1s 2017 không mang nhiều thay đổi so với người tiền nhiệm. Máy vẫn được thừa hưởng khung vỏ kim loại sang trọng và cứng cáp kết hợp với các đường cong mềm mại cho cảm giác cầm nắm thoải mái.  \"', 'Cấu hình được nâng cấp: Thay đổi lớn nhất trên điện thoại thông minh OPPO F1s 2017 chính là cấu hình, theo đó thì bộ nhớ trong trên OPPO F1s 2017 đã được nâng cấp lên 64 GB so với 32 GB của thế hệ cũ giúp bạn thoải mái lưu trữ dữ liệu và cài đặt game, ứng dụng. ', '\"Màn hình lớn, pin khủng: Máy sở hữu màn hình kích thước lớn 5.5 inch cùng độ phân giải HD cho bạn không gian trải nghiệm thoải mái. Viên pin dung lượng khủng 3075 mAh mang lại thời gian sử dụng thoải mái trong cả ngày dài. \"', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '5.5\"', '', '13 MP', '16 MP', 'MediaTek MT6750 8 nhân', '3 GB.', '32GB.', '2 Nano SIM', '3075 mAh', 'HD (720 x 1280 Pixels)', 'Khung & Mặt lưng hợp kim nhôm', 'Nặng 160 g', 'Hàng chính hãng.', 'OPPO-F1S', 'OPPO-F1S', 'OPPO-F1S-1', 'f1s-son-tung', '100000_oppo-f1s-2017-2-1', 6490000, 500000, 2, 7, 0, 0, 2205, 'OPPO', 1, 0, 0, 0, 0),
(4, 4, 'iPhone 7 Plus 128GB', '\"Được Apple công bố vào tháng 9/2016 đến nay cũng gần 3 năm nhưng iPhone 7 Plus 128 GB vẫn chưa có dấu hiệu hạ nhiệt. Được xem là phiên bản chuyển mình của iPhone 6 Plus có tuy vẫn giữ nguyên kích thước nhưng vẫn một vài sự thay đổi về camera, chất lượng pin và hiệu năng được nâng cấp.  \"', 'Thay đổi về thiết kế mặt lưng cùng với camera so với iPhone 6 Plus: Mặt lưng của iPhone 7 Plus được thiết kế với phần ăng-ten được đưa vòng lên trên thay vì cắt ngang mặt lưng như những phiên bản trước là iPhone 6 Plus mang lại cảm giác thoải mái khi cầm nắm.', 'Như vậy, iPhone 7 Plus với mức giá vừa phải, phù hợp với túi tiền nhưng mang cho mình nhiều điểm mạnh, nếu bạn là một người thích thiết kế đẹp, camera tốt và cần thiết bị có cấu hình tốt thì sản phẩm chắc chắn là sự lựa chọn đáng lưu tâm trong tầm giá', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '5.5\"', '', '2 camera 12 MP', '7 MP', 'Apple A10 Fusion', '3 GB', '128 GB', '1 Nano SIM', '2900 mAh', 'Full HD (1080 x 1920 Pixels)', 'Khung & Mặt lưng hợp kim nhôm, magie', 'Nặng 188 g', 'Hàng chính hãng.', 'iPhone-7-Plus-128GB', 'iPhone-7-Plus-128GB', '(600x600)_crop_7_plus_red_800x800', '7psilver', 'iphone-7-plus-128gb-hh-600x600', 25690000, 500000, 96, 9, 0, 0, 2205, 'Apple', 1, 1, 0, 0, 0),
(5, 5, 'Galaxy S8', '\"Galaxy S8 là siêu phẩm mới nhất được Samsung ra mắt vào ngày 29/3 với thiết kế nhỏ gọn hoàn toàn mới, màn hình vô cực viền siêu mỏng. Phía trước là màn hình 5.8 inch độ phân giải QHD+ 2960 x 1440 pixels, tỉ lệ 18,5:9 cùng màn hình cạnh căng tràn.\"', 'Trên điện thoại Samsung Galaxy S8, hãng đã quyết định mang phím điều hướng vào trong màn hình, kèm theo đó là nút home hỗ trợ cảm ứng lực.', 'Mặt lưng của Galaxy S8 vẫn làm bằng kính bo cong mềm mại, bảo vệ bởi cường lực Gorilla Glass 5.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '5.8\"', '', '12 MP', '8 MP', 'Exynos 8895', '4 GB', '64 GB', '2 Nano SIM (SIM 2 chung khe thẻ nhớ)', '3000 mAh', '2K+ (1440 x 2960 Pixels)', 'Khung kim loại & Mặt lưng kính cường lực', 'Nặng 155 g', 'Hàng chính hãng.', 'Galaxy-S8', 'Galaxy-S8', 'samsung-galaxy-s8-lite-600x600', '(600x600)_crop_s8_black_800x800', 'samsung-galaxy-s8-plus-hh-600x600-600x600', 19490000, 500000, 100, 0, 0, 0, 2205, 'SAMSUNG', 1, 0, 0, 0, 0),
(6, 6, 'ZENFONE 3 MAX', 'Asus ZenFone 3 Max là một sản phẩm hướng đến khách hàng có nhu cầu về một chiếc smartphone có pin “trâu”, có thể sử dụng thoải mái trong nhiều ngày, sở hữu hiệu năng ổn định cùng giá thành tầm trung.', 'Các vị trí đặt phím nguồn, volume, cổng sạc đều khá giống nhau. Riêng trên Galaxy S8 trang bị cổng USB Type-C, đồng thời xuất hiện thêm phím tắt kích hoạt trợ lý ảo Bixby.', 'Với nhiều ưu điểm như màn hình vô cực viền siêu mỏng, thiết kế định hình smartphone trong tương lai, cấu hình cực đỉnh và camera chụp đêm rất tốt, Galaxy S8 sẽ là một siêu phẩm làm vừa lòng rất nhiều người dùng.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '5.5\"', '', '16 MP', '8 MP', 'Snapdragon 430', '3 GB', '32GB.', '1 Nano SIM & 1 Micro SIM (SIM 2 chung khe thẻ nhớ)', '4100 mAh', 'Full HD (1080 x 1920 Pixels)', 'Khung & Mặt lưng hợp kim nhôm', 'Nặng 174 g', 'Hàng chính hãng.', 'ZENFONE-3-MAX', 'ZENFONE-3-MAX', 'ZENFONE-3-MAX-1', 'asus-zenfone-3-max-zc553kl-xam-didongviet_1_1', 'asus-zenfone-3-max-mo-ta-chuc-nang', 19490000, 500000, 99, 1, 0, 0, 2205, 'ASUS', 1, 1, 0, 0, 1),
(7, 7, 'Zenfone 2 Laser', 'Với rất nhiều thành công từ smartphone giá rẻ Zenfone 2 mang lại thì mới đây Asus lại tiếp tục giới thiệu thêm một phiên bản của chiếc Zenfone 2 Laser với màn hình có kích thước lên tới 6 inch.', 'Thiết kế quen thuộc: Máy vẫn cho bạn cảm giác quen thuộc như những chiếc Zenfone 2 của năm 2015 với mặt lưng bo cong ôm tay và viền màn hình siêu mỏng. ', 'Camera lấy nét siêu nhanh: Máy chỉ mấy 0.03s để có thể bắt nét chủ thể chính là điểm cộng lớn nhất của Zenfone 2 Laser 6\" ZE601KL. Ngoài ra máy còn sở hữu cho mình ống kính 5 thành phần, khẩu độ lớn F/2.0.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '5\"', '', '8 MP', '5 MP', 'Snapdragon 410', '2 GB', '16 GB', '1 Micro SIM', '2070 mAh', 'HD (720 x 1280 Pixels)', 'Khung & Mặt lưng nhựa', 'Nặng 140 g', 'Hàng chính hãng.', 'Zenfone-2-Laser', 'Zenfone-2-Laser', 'op-lung-asus-zenfone-2-laser-ze500kl-nillkin-san-4', 'Copy of ZE500KL GEP', 'asus-zenfone-2-laser-mo-ta-chuc-nang', 19490000, 500000, 98, 2, 0, 0, 2205, 'ASUS', 1, 0, 0, 0, 0),
(8, 8, 'iPhone 12 64GB', 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', 'Với CPU Apple A14 Bionic, bạn có thể dễ dàng trải nghiệm mọi tựa game với những pha chuyển cảnh mượt mà hay hàng loạt hiệu ứng đồ họa tuyệt đẹp ở mức đồ họa cao mà không lo tình trạng giật lag.', 'Sự lột xác đầy mạnh mẽ lần này của Apple không chỉ gây bất ngờ đến người dùng mà còn đánh dấu một kỷ nguyên mới trong nền phát triển smartphone Apple. Và đây cũng được xem là một trong những bộ series iPhone mà Apple đặt nhiều tâm huyết, mục đích và đầy tính năng mạnh mẽ chưa từng thấy.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.1\"', '', '2 camera 12 MP', '12 MP', 'Apple A14 Bionic', '4 GB', '64 GB', '1 Nano SIM & 1 eSIM Hỗ trợ 5G', '2815 mAh 20 W', '1170 x 2532 Pixels', 'Khung nhôm & Mặt lưng kính cường lực', 'Nặng 164 g', 'Hàng chính hãng.', 'iPhone-12-64GB', 'iPhone-12-64GB', '600_600_iphone_12_do_xtmobile_1_1_1', '(600x600)_crop_600_iphone_12_xanh_la_xtmobile_3', 'iphone-12-white-select12', 22790000, 500000, 100, 0, 0, 0, 2205, 'Apple', 1, 1, 0, 0, 1),
(9, 9, 'iPhone 11 64GB', 'Tháng 09/2019, Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', 'Nâng cấp mạnh mẽ về camera: Nói về nâng cấp thì camera chính là điểm có nhiều cải tiến nhất trên thế hệ iPhone mới. Nếu như trước đây iPhone Xr chỉ có một camera thì nay với iPhone 11 chúng ta sẽ có tới hai camera ở mặt sau. ', 'Thời lượng pin tốt nhất từ trước tới nay: Khi nói đến thời lượng pin iPhone 11, hẳn nhiều người đã ước ao rằng máy sẽ có viên pin tốt giống như iPhone Xr (có thời lượng pin tốt nhất so với bất kỳ iPhone hiện đại nào).', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.1\"', '', '2 camera 12 MP', '12 MP', 'Apple A13 Bionic', '4 GB', '64 GB', '1 Nano SIM & 1 eSIM Hỗ trợ 4G', '3110 mAh 18 W', '828 x 1792 Pixels', 'Khung nhôm & Mặt lưng kính cường lực', 'Nặng 194 g', 'Hàng chính hãng.', 'iPhone-11-64GB', 'iPhone-11-64GB', 'iphone-11-pro-bac-600x600-200x200', 'iphone-xi-tim-200x200', 'iphone-xi-vang-200x200', 15590000, 500000, 100, 0, 0, 0, 2205, 'Apple', 1, 0, 0, 0, 0),
(10, 10, 'iPhone XR 64GB', '<p>L&agrave; chiếc điện thoại iPhone c&oacute; mức gi&aacute; dễ chịu, ph&ugrave; hợp với nhiều kh&aacute;ch h&agrave;ng hơn, iPhone Xr vẫn được ưu &aacute;i trang bị chip Apple A12 mạnh mẽ, m&agrave;n h&igrave;nh tai thỏ c&ugrave;ng khả năng kh&aacute;ng nước kh&aacute;ng bụi.</p>', '<p>&quot;M&agrave;n h&igrave;nh tai thỏ tr&agrave;n viền c&ocirc;ng nghệ LCD: Kh&aacute;c với iPhone Xs hay Xs Max, chiếc smartphone n&agrave;y sở hữu m&agrave;n h&igrave;nh LCD. Ngo&agrave;i ra, Apple cũng giới thiệu rằng, iPhone Xr được trang bị một loại c&ocirc;ng nghệ mới c&oacute; t&ecirc;n Liquid Retina. M&aacute;y c&oacute; độ ph&acirc;n giải 1792 x 828 Pixels c&ugrave;ng 1.4 triệu điểm ảnh. &quot;</p>', '<p>Mạnh mẽ bậc nhất với chip Apple A12: Với mỗi lần ra mắt, Apple lại giới thiệu một con chip mới v&agrave; Apple A12 Bionic l&agrave; con chip đầu ti&ecirc;n sản xuất với tiến tr&igrave;nh 7nm được t&iacute;ch hợp tr&ecirc;n iPhone Xr. Apple A12 được t&iacute;ch hợp tr&iacute; tuệ th&ocirc;ng minh nh&acirc;n tạo.</p>', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.1\"', NULL, '12 MP', '7 MP', 'Apple A12 Bionic', '3 GB', '64 GB', '1 Nano SIM & 1 eSIM Hỗ trợ 4G', '2942 mAh 15 W', '828 x 1792 Pixels', 'Khung nhôm & Mặt lưng kính cường lực', 'Nặng 194 g', 'Hàng chính hãng.', 'iPhone-XR-64GB', 'iPhone-XR-64GB', 'iPhone-XR-64GB-1', '(600x600)_crop_iphone-xr-64gb-mau-den-xtmobile', 'dien-thoai-iphone-xr-64gb-moi-do', 12990000, 500000, 9, 0, 0, 0, 2205, 'Apple', 1, 0, 0, 0, 0),
(11, 11, 'iPhone SE (2020) 64GB', '\"iPhone SE 2020 đã bất ngờ ra mắt với thiết kế 4.7 inch nhỏ gọn, chip A13 Bionic mạnh mẽ như trên iPhone 11 và đặc biệt sở hữu mức giá tốt chưa từng có. Thiết kế nhỏ gọn và cao cấp: Cảm biến vân tay Touch ID huyền thoại đã quay trở lại trên iPhone SE 2020, cùng với đó là thiết kế gần như sao y của iPhone 8. \"', '\"Sức mạnh đầu bảng, tương tự iPhone 11: “Bình cũ” nhưng “rượu mới”, iPhone SE 2020 sở hữu cấu hình hợp thời và cao cấp với chip Apple A13 mạnh mẽ từng xuất hiện trên thế hệ iPhone 11.  \"', 'Camera đơn hỗ trợ xóa phông, quay phim 4K: Chỉ có 1 camera 12MP, khẩu độ f/1.8 ở phía sau, nhưng iPhone SE 2020 vẫn hỗ trợ đầy đủ các chế độ chân dung xóa phông như Portrait Lightning, High-Key Light Mono, chỉnh khẩu độ sau chụp,…', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '4.7\" ', '', '12 MP', '7 MP', 'Apple A13 Bionic', '3 GB', '64 GB', '1 Nano SIM & 1 eSIM Hỗ trợ 4G', '1821 mAh 18 W', 'HD (750 x 1334 Pixels)', 'Khung kim loại & Mặt lưng kính', 'Nặng 148 g', 'Hàng chính hãng.', 'k5Hjg2Fz8K4t_iphone-se-2020-den-1', 'iPhone-SE-2020-64GB', 'iphone-se-2020-trang-600x600-200x200', '600_crop_ip-se-2020-white-vienquangmobile', 'iphone-se-2020-red-600x600', 10490000, 500000, 100, 4, 0, 0, 2205, 'Apple', 1, 1, 0, 0, 0),
(12, 12, 'OPPO Find X3 Pro 5G', '\"OPPO đã làm khuynh đảo thị trường smartphone khi cho ra đời chiếc điện thoại OPPO Find X3 Pro 5G. Đây là một sản phẩm có thiết kế độc đáo, sở hữu cụm camera khủng, cấu hình thuộc top đầu trong thế giới Android. \"', '\"Kết quả của sự sáng tạo không ngừng: Nếu nhìn qua mặt lưng của OPPO Find X3 Pro 5G thì bạn sẽ bất ngờ ngay với cụm camera sau, được tạo hình giống như miệng núi lửa, thiết kế này đã ngốn rất nhiều thời gian và công sức của nhà sản xuất để mang đến cho người dùng sự khác biệt mới lạ. \"', 'Mạnh mẽ hàng đầu với Snapdragon 888: OPPO Find X3 Pro 5G mang hiệu năng hàng đầu trong thế giới điện thoại Android khi sở hữu con chip Snapdragon 888 8 nhân mới nhất của Qualcomm (05/2021) được sản xuất trên tiến trình 5 nm mang lại tốc độ xử lý nhanh hơn.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.7\"', '', 'Chính 50 MP & Phụ 50 MP, 13 MP, 3 MP', '32 MP', 'Snapdragon 888', '12 GB', '256 GB', '2 Nano SIM Hỗ trợ 5G', '4500 mAh 65 W', 'Quad HD+ (2K+)', 'Khung kim loại & Mặt lưng kính cường lực Gorilla Glass 5', 'Nặng 193 g', 'Hàng chính hãng.', 'OPPO-Find-X3-Pro-5G', 'OPPO-Find-X3-Pro-5G', 'oppo-find-x3-pro-12gb256gb-snapdragon-888', 'Samsung-Galaxy-A32-5G-Specifications', 'oppo-find-x3-pro-black-001-1-600x600', 27490000, 500000, 100, 0, 0, 0, 2205, 'OPPO', 1, 0, 0, 0, 1),
(13, 13, 'Oppo Reno5 8GB - 128GB', '\"OPPO đã trình làng OPPO Reno5 5G phiên bản kết nối 5G internet siêu nhanh ra thị trường. Chiếc điện thoại với hàng loạt các tính năng nổi bật cùng vẻ ngoài thời thượng giúp tôn lên vẻ sang trọng cho người sở hữu. Từng đường nét lấp lánh, tỏa sáng. \"', 'OPPO Reno5 5G có cấu tạo các khung viền xung quanh hoàn toàn bằng kim loại cao cấp, mặt lưng làm từ kính. Chiếc điện thoại được thiết kế tổng thể nguyên khối vô cùng rắn chắc và bo cong mềm mại ở 4 góc, mang đến người dùng cảm giác cầm nắm thoải mái nhất.', '\"Reno5 5G chiêu mộ mọi tính đồ chụp ảnh, checkin hay blogger: OPPO đã trang bị một hệ thống máy ảnh xuất sắc cho chiếc điện thoại của mình gồm 4 ống kính mặt sau bắt mắt. Camera chính có độ phân giải lên đến 64 MP, camera góc siêu rộng 8 MP, camera macro 2 MP và camera đơn sắc 2 MP. \"', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.43\"', '', 'Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP', '32 MP', 'Snapdragon 765G', '8 GB', '128 GB', '2 Nano SIM Hỗ trợ 5G', '4300 mAh 65 W', 'Full HD+ (1080 x 2400 Pixels)', 'Khung kim loại & Mặt lưng kính', 'Nặng 180 g', 'Hàng chính hãng.', 'Oppo-Reno5-8GB-128GB', 'Oppo-Reno5-8GB-128GB', 'oppo-reno5-5g-thumb-600x600', '1609769650-djien-thoai-oppo-reno-5-8gb128g', 'oppo-reno5-den-600x600-1-200x200', 8400000, 500000, 100, 0, 0, 0, 2205, 'OPPO', 1, 1, 0, 0, 0),
(14, 14, 'OPPO A93 8GB-128GB', '\"OPPO đã tung ra OPPO A93 dòng sản phẩm thuộc phân khúc điện thoại tầm trung được xem là tiếp nối từ OPPO A92 với nhiều điểm được nâng cấp như hiệu năng, hệ thống camera cùng khả năng sạc nhanh 18 W. \"', '\"Hiệu năng vượt trội cùng với Helio P95: OPPO A93 được trang bị chipset MediaTek Helio P95 tốc độ CPU đạt 2.2 GHz với sức mạnh như thế này thì A93 sẽ không làm bạn thất vọng khi có thể hoạt động tốt với nhiều ứng dụng nặng hay thao tác cuộn trang đều diễn ra trơn tru cảm giác như không có độ trễ. \"', 'Cụm camera selfie tích hợp AI: OPPO A93 có 4 camera sau được xếp đối xứng nhau trong module hình vuông và thanh đèn flash LED. Camera chính có độ phân giải 48 MP, camera góc siêu rộng 8 MP, mono đơn sắc và mono chân dung lần lượt đều bằng 2 MP.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.43\"', '', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Chính 16 MP & Phụ 2 MP', 'MediaTek Helio P95', '8 GB', '128 GB', '2 Nano SIM Hỗ trợ 4G', '4000 mAh 18 W', 'Full HD+ (1080 x 2400 Pixels)', 'Khung hợp kim phủ nhựa & Mặt lưng thuỷ tinh hữu cơ', 'Nặng 164 g', 'Hàng chính hãng.', 'OPPO-A93-8GB-128GB', 'OPPO-A93-8GB-128GB', 'oppo-a93-den-14-200x200', 'oppo-a93-den-14-200x200-2', 'oppo-a93-den-14-200x200-3', 6490000, 500000, 100, 0, 0, 0, 2205, 'OPPO', 1, 0, 0, 0, 0),
(15, 15, 'OPPO A73 6GB-128GB', '\"Tháng 10/2020, OPPO cho ra mắt sản phẩm mới có tên gọi là OPPO A73. Điểm đặc biệt đến từ OPPO A73 là sự đột phá mới về thiết kế, hiệu năng mạnh mẽ cung cấp từ con chip Snapdragon đi kèm công nghệ sạc nhanh VOOC hứa hẹn sẽ làm hài lòng những người dùng yêu công nghệ. \"', '\"Thiết kế mới đột phá với vẻ ngoài sang trọng: Hầu hết các dòng điện thoại của OPPO dòng A được làm từ chất liệu kim loại, nhựa hay hợp kim nhôm. Tuy nhiên, với chiếc smartphone A73, OPPO đã hoàn thiện mặt lưng với chất liệu giả da.  \"', 'Trải nghiệm xem phim boom tấn với màn hình AMOLED:Sở hữu màn hình tràn viền với tấm nền AMOLED kích thước 6.44 inch, tỷ lệ màn hình so với thân máy là 90.7% cho khả năng hiển thị với màn hình rộng cùng chất lượng hình ảnh sống động.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.44\"', '', 'Chính 16 MP & Phụ 8 MP, 2 MP, 2 MP', '16 MP', 'Snapdragon 662', '6 GB', '128 GB', '2 Nano SIM Hỗ trợ 4G', '4015 mAh', 'Full HD+ (1080 x 2400 Pixels)', 'Nguyên khối', 'Nặng 163 g', 'Hàng chính hãng.', 'Oppo-A73', 'Oppo-A73', 'dien-thoai-oppo-a73-128gb', 'oppo-a73-5g-125220-095243-600x600', 'oppo-a15s-4', 8090000, 500000, 100, 2, 0, 0, 2205, 'OPPO', 1, 0, 0, 0, 0),
(16, 16, 'Vivo Y20 4GB - 64GB', '\"Mẫu điện thoại tầm trung giá rẻ Vivo Y20 trình làng, mang đến cho người dùng thêm một lựa chọn hấp dẫn trong tầm giá, đi kèm màn hình tràn viền, cùng cụm 3 camera AI ấn tượng. \"', '\"Màn hình tràn viền cùng mặt lưng bóng bẩy: Ở mặt trước, Vivo trang bị cho mẫu điện thoại mới của mình màn hình tràn viền thiết kế giọt nước với tên gọi Halo Fullview, tỷ lệ khung hình 20:9 hiện đại.  \"', 'Dung lượng pin “trâu”, trải nghiệm không giới hạn: Vivo Y20 còn tăng cường thời lượng sử dụng với viên pin 5000 mAh, với công nghệ AI, chỉ 1 lần sạc duy nhất là bạn đã có 16 giờ xem phim HD hoặc 11 giờ chơi game.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.51\"', '', 'Chính 13 MP & Phụ 2 MP, 2 MP', '8 MP', 'Snapdragon 460', '4 GB', '64 GB', '2 Nano SIM Hỗ trợ 4G', '5000 mAh 10 W', 'HD+ (720 x 1600 Pixels)', 'Khung & Mặt lưng nhựa Polymer cao cấp', 'Nặng 192.3 g', 'Hàng chính hãng.', 'Vivo-Y20-4GB-64GB', 'Vivo-Y20-4GB-64GB', 'vivo-y20-2021-blue-600x600', 'vivo-y20-white-200x200', 'vivo-v20-600-xanh-hong-2-600x600', 3990000, 500000, 100, 0, 0, 0, 2205, 'VIVO', 1, 1, 0, 0, 0),
(17, 17, 'Vivo Y72 5G 8GB-128GB', '\"Vivo Y72 5G mẫu smartphone 5G của Vivo, máy sở hữu một màn hình lớn, hiệu năng mạnh mẽ, cụm 3 camera sắc nét và thời lượng pin ấn tượng, máy đáp ứng tốt hầu hết nhu cầu sử dụng mà người dùng cần. \"', '\"Thiết kế cứng cáp, sang trọng: Khung viền của Vivo Y72 5G được gia công tỉ mỉ với độ hoàn thiện cao kết hợp với mặt lưng làm từ nhựa cao cấp nên có độ bền và khả năng chịu lực tốt, giúp bảo vệ điện thoại khỏi tác động của ngoại lực trong quá trình sử dụng.  \"', 'Hệ thống 3 camera sau ấn tượng: Di chuyển đến mặt lưng, chiếc điện thoại này mang trên mình hệ thống 3 camera xếp dọc trong mô-đun hình chữ nhật bao gồm camera chính 64 MP, camera góc rộng 8 MP và camera macro 2 MP.', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.58\"', '', 'Chính 64 MP & Phụ 8 MP, 2 MP', '16 MP', 'MediaTek Dimensity 700', '8 GB', '128 GB', '2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G', '5000 mAh 18 W', 'Full HD+ (1080 x 2408 Pixels)', 'Khung & Mặt lưng nhựa Polymer cao cấp', 'Nặng 193 g', 'Hàng chính hãng.', 'vivo-y72-5g-blue-600x600', 'vivo-y72-5g-blue-600x600', 'vivo-y72-5g-black-200x200', 'vivo-y72', 'vivo-v21-600x600', 8290000, 700000, 100, 0, 0, 0, 2205, 'VIVO', 1, 0, 0, 0, 0),
(18, 18, 'Vivo V21 5G 8GB - 128GB', '\"Chụp selfie bùng nổ trong đêm, thiết kế mới hiện đại đón đầu xu hướng, cùng với đó là tốc độ kết nối mạng 5G hàng đầu, tất cả những tính năng ấn tượng này đều có trong Vivo V21 5G mẫu điện thoại cận cao cấp đến từ Vivo. \"', '\"Thiết kế mới dẫn đầu xu hướng: Thay vì bo cong theo số đông, Vivo V21 5G lựa chọn kiểu thiết kế vuông vức hơn với phần khung nhựa vát thẳng, tạo nên một thân máy siêu mỏng và tuyệt đẹp. \"', '\"5G luôn sẵn sàng cho cuộc sống không chờ đợi: Vivo V21 5G hỗ trợ kết nối 5G SA/NSA trên cả 2 sim mang đến tốc độ kết nối cực nhanh cho trải nghiệm trực tuyến của bạn thêm phần mượt mà.  \"', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.44\"', '', 'Chính 64 MP & Phụ 8 MP, 2 MP', '44 MP', 'MediaTek Dimensity 800U 5G', '8 GB', '128 GB', '2 Nano SIM Hỗ trợ 5G', '4000 mAh 33 W', 'Full HD+ (1080 x 2400 Pixels)', 'Khung nhựa & Mặt lưng kính', 'Nặng 177 g', 'Hàng chính hãng.', 'vivo-v21-600x600', 'vivo-v21-600x600', 'vivo-v21-5g-tim-hong-200x200', 'vivo-v21-5g-tim-hong-200x200-1', 'vivo-v21-5g-xanh-den-600x600', 10490000, 700000, 100, 0, 0, 0, 2205, 'VIVO', 1, 1, 1, 0, 0),
(19, 19, 'Vivo Y53s 8GB+3GB - 128GB', '<p>&quot;Vivo mang đến niềm vui cho mọi người tin d&ugrave;ng khi h&atilde;ng ch&iacute;nh thức tung ra chiếc điện thoại Vivo Y53s với những t&iacute;nh năng ti&ecirc;n tiến đi c&ugrave;ng hiệu năng mạnh mẽ. Đặc biệt, smartphone lại c&ograve;n sở hữu mức gi&aacute; hấp dẫn trong ph&acirc;n kh&uacute;c tầm trung đầy hứa hẹn. &quot;</p>', '<p>&quot;Đ&aacute;nh bật l&ecirc;n n&eacute;t sang trọng trong thiết kế: Nh&igrave;n từ xa, Vivo Y53s đ&atilde; tr&ocirc;ng tỏa s&aacute;ng bởi mặt lưng phủ lớp gradient c&oacute; t&aacute;c dụng nhận v&agrave; phản chiếu lại &aacute;nh s&aacute;ng rọi v&agrave;o, kết hợp c&ugrave;ng hiệu ứng h&agrave;o quang to&aacute;t ra từ m&ocirc;-đun camera sau gi&uacute;p chiếc điện thoại để lại ấn tượng đẹp trong l&ograve;ng người d&ugrave;ng. &quot;</p>', '<p>Trang bị con chip gaming ổn định: Chipset MediaTek Helio G80 kết hợp c&ugrave;ng GPU Mali-G52 l&agrave; con chip chuy&ecirc;n game tr&ecirc;n c&aacute;c d&ograve;ng smartphone tầm trung do MediaTek s&aacute;ng tạo.</p>', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.58\"', NULL, 'Chính 64 MP & Phụ 2 MP, 2 MP', '16 MP', 'MediaTek Helio G80', '8 GB', '128 GB', '2 Nano SIM Hỗ trợ 4G', '5000 mAh 33 W', 'Full HD+ (1080 x 2400 Pixels)', 'Khung & Mặt lưng nhựa Polymer cao cấp', 'Nặng 190 g', 'Hàng chính hãng.', 'vivo-y53s-xanh-600x600', 'vivo-y53s-xanh-600x600', 'vivo-y53s-5g-600x600', 'vivo-y53s-1', 'vivo-y53s-0', 7490000, 700000, 5, 0, 0, 0, 2205, 'VIVO', 1, 0, 0, 0, 0),
(20, 20, 'Samsung Galaxy Z Fold2 5G', '\"Thuộc dòng smartphone cao cấp, Samsung Galaxy Z Fold2 5G được Samsung trau chuốt không chỉ vẻ ngoài sang trọng, tinh tế mà lẫn cả “nội thất” bên trong đầy mạnh mẽ khiến chiếc smartphone này hoàn toàn xứng đáng để được sở hữu. \"', '\"Bứt phá ngoạn mục với thiết kế thời thượng: Phần “xương sống” của máy cho phép bạn gập mở nhịp nhàng ở nhiều góc độ khác nhau, mang đến cảm giác chắc chắn, mượt mà hơn, không giống như thế hệ Galaxy Fold đầu tiên. \"', '\"Dung lượng pin lớn 4500 mAh: Samsung Galaxy Z Fold2 5G là chiếc smartphone có kích thước màn hình lớn nên cũng sẽ đòi hỏi nhiều năng lượng hơn. Viên pin kép 4500 mAh đem đến nguồn năng lượng bất tận dành cho cả ngày dài. \"', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', 'Chính 7.59\" & Phụ 6.23\"', '', '3 camera 12 MP', 'Trong 10 MP & Ngoài 10 MP', 'Snapdragon 865+', '12 GB', '256 GB', '1 Nano SIM & 1 eSIM Hỗ trợ 5G', '4500 mAh 25 W', 'Full HD+ (1768 x 2208 Pixels)', 'Khung kim loại & Mặt lưng kính cường lực', 'Nặng 282 g', 'Hàng chính hãng.', 'samsung-galaxy-z-fold-2-vang-600x600-200x200', 'samsung-galaxy-z-fold-2-vang-600x600-200x200', 'samsung-galaxy-z-fold-2-den-200x200', 'samsung-galaxy-z-fold-2-feature-image_1-1024x683_1614682541', '600x600_galaxy_fold_2_black_vienquangmobile', 50090000, 700000, 100, 3, 0, 0, 2205, 'SAMSUNG', 1, 1, 0, 0, 1),
(21, 21, 'Samsung Galaxy S21 Ultra 128GB', '\"Sự đẳng cấp được Samsung gửi gắm thông qua chiếc smartphone Galaxy S21 Ultra 5G với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong, hứa hẹn đáp ứng trọn vẹn nhu cầu ngày càng cao của người dùng. \"', '\"Đột phá trong thiết kế thời thượng: Không chỉ đơn thuần phục vụ giao tiếp và giải trí, Samsung Galaxy S21 Ultra 5G còn chính là món phụ kiện thời trang khẳng định vị thế của người sở hữu. \"', '\"Sức mạnh kinh khủng từ chip Exynos 2100: Samsung Galaxy S21 Ultra 5G được tích hợp vi xử lý Exynos 2100, sản xuất trên tiến trình 5 nm bao gồm 8 lõi có tốc độ xung nhịp lên đến 2.9 GHz, tối ưu hóa hiệu suất năng lượng đồng thời tiết kiệm điện năng hết sức có thể. \"', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.8\"', '', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', '40 MP', 'Exynos 2100', '12 GB', '128 GB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM Hỗ trợ 5G', '5000 mAh 25 W', '2K+ (1440 x 3200 Pixels)', 'Khung nhôm & Mặt lưng kính cường lực', 'Nặng 228 g', 'Hàng chính hãng.', 'samsung-galaxy-s21-ultra-bac-600x600-1-200x200', 'samsung-galaxy-s21-ultra-bac-600x600-1-200x200', 'samsung-galaxy-s21-ultra-256gb-den-600x600-1-200x200', '42065_galaxy_s21_ultra_5g_silver_ha2', 'samsung-galaxy-s21-ultra-sponsored_1614738909.jpg', 22490000, 700000, 100, 2, 0, 0, 2205, 'SAMSUNG', 1, 0, 1, 0, 0),
(22, 22, 'Samsung Galaxy S21+ 128GB', '\"Ẩn đằng sau thiết kế tuyệt tác của siêu phẩm Galaxy S21+ 5G là cả một kỳ quan công nghệ, mà ở đó bạn có thể trải nghiệm hiệu năng mạnh mẽ nhất, những công nghệ tiên phong, dẫn đầu trào lưu với cụm camera đỉnh cao đến từ Samsung. \"', '\"Thiết kế mới, tinh tế đến từng chi tiết: Samsung Galaxy S21+ 5G sở hữu thiết kế mới lạ chưa từng có trên các smartphone trước đây với phần cụm camera gắn liền với cạnh mang vẻ đẹp độc đáo, tạo sự kết nối hài hòa, liền mạch. \"', '\"Hiệu năng cực khủng đến từ vi xử lý siêu nhỏ: Galaxy S21+ 5G được trang bị chipset 5 nm của Samsung đó là Exynos 2100 tốc độ đạt 2.9 GHz, cung cấp hiệu suất CPU cao hơn tới 30%, GPU Mali-G78 mạnh hơn 40% so với GPU Mali-G77 của Exynos 990. \"', '3G, 4G, Bluetooth, Wifi, GPS.', '06 tháng.', '6.7\"', '', 'Chính 12 MP & Phụ 64 MP, 12 MP', '10 MP', 'Exynos 2100', '8 GB', '128 GB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM Hỗ trợ 5G', '4800 mAh 25 W', 'Full HD+ (1080 x 2400 Pixels)', 'Khung nhôm & Mặt lưng kính cường lực', 'Nặng 201 g', 'Hàng chính hãng.', 'samsung-galaxy-s21-plus-den-600x600-200x200', 'samsung-galaxy-s21-plus-den-600x600-200x200', '10924_samsung_galaxy_s21_5g_plus_128gb_silver_chinh_hang_1', '10924_samsung_galaxy_s21_5g_plus_128gb_silver_chinh_hang_2', '42063_galaxy_s21_plus_5g_violet_ha1', 17490000, 700000, 100, 0, 0, 0, 2205, 'SAMSUNG', 1, 0, 0, 0, 0),
(63, 63, 'OPTIPLEX 3046SFF 70086073', NULL, NULL, NULL, NULL, '06 tháng.', NULL, 'Đồ họa HD Intel® cho Bộ xử lý Intel® thế hệ trước', NULL, NULL, 'CPU i7-10700 2.9GHz', 'RAM 8GB', 'HDD dung lượng 1TB', NULL, NULL, NULL, NULL, NULL, 'Hàng chính hãng.', 'OPTIPLEX-3046SFF-70086073', 'OPTIPLEX-3046SFF-70086073', '', '', '', 22390000, 700000, 100, 0, 0, 0, 2202, 'DELL', 1, 1, 0, 1, 0),
(24, 24, 'Máy Bộ Dell Vostro 3268', '', '', '', '', '06 tháng.', '', 'Đồ họa HD Intel® cho Bộ xử lý Intel® thế hệ trước', '', '', 'CPU i7-10700 2.9GHz', 'RAM 8GB', 'HDD 500GB', '', '', '', '', '', 'Hàng chính hãng.', 'MB_DELL_3268_7100', 'MB_DELL_3268_7100', '450_Dell_Vostro_3268_2', '3423_may_tinh_de_ban_dell_vostro_3653_core_i5_6400_4gb_500gb', 'sti31506w_49c330b92f01402685f141c04076d419', 11790000, 700000, 9, 0, 0, 0, 2202, 'DELL', 1, 0, 0, 1, 0),
(25, 25, 'Máy Bộ Dell Vostro 3470', '', '', '', '', '06 tháng.', '', 'Đồ họa HD Intel® cho Bộ xử lý Intel® thế hệ trước', '', '', 'CPU i7-10700 2.9GHz', 'RAM 8GB', 'HDD dung lượng 1TB', '', '', '', '', '', 'Hàng chính hãng.', 'Dell-Vostro-3470', 'Dell-Vostro-3470', '450_Dell_Vostro_3268_3', '3423_may_tinh_de_ban_dell_vostro_3653_core_i5_6400_4gb_500gb', 'sti31506w_49c330b92f01402685f141c04076d420', 9950000, 700000, 100, 0, 0, 0, 2202, 'DELL', 1, 1, 0, 1, 0),
(26, 26, 'Máy Bộ Dell Optiplex 3050MT', '', '', '', '', '06 tháng.', '', 'Đồ họa HD Intel® cho Bộ xử lý Intel® thế hệ trước', '', '', 'CPU i7-10700 2.9GHz', 'RAM 8GB', 'HDD dung lượng 1TB', '', '', '', '', '', 'Hàng chính hãng.', 'Dell_Optiplex_3050MT_2', 'Dell_Optiplex_3050MT_2', '', '', '', 11650000, 700000, 100, 0, 0, 0, 2202, 'DELL', 1, 0, 0, 1, 0),
(28, 28, 'Dell Optiplex 980 SFF Case Size Mini', '', '', '', '', '06 tháng.', '', 'Đồ họa HD Intel® cho Bộ xử lý Intel® thế hệ trước', '', '', 'Intel® Core™ i5-650 4M bộ nhớ đệm, 3,20 GHz', '4GB DDR3 bus 1333Mhz', '250GB Sata HDD', '', '', '', '', '', 'Hàng chính hãng.', 'dell-optiplex-980-mt-5', 'dell-optiplex-980-mt-5', '', '', '', 4000000, 700000, 100, 0, 0, 0, 2202, 'DELL', 1, 1, 1, 1, 0),
(29, 29, 'asus Gimming 980 SFF Case Size Mini', '', '', '', '', '06 tháng.', '', 'Đồ họa HD Intel® cho Bộ xử lý Intel® thế hệ trước', '', '', 'Intel® Core™ i5-650 4M bộ nhớ đệm, 3,20 GHz', '4GB DDR3 bus 1333Mhz', '250GB Sata HDD', '', '', '', '', '', 'Hàng chính hãng.', 'asus-Gimming-980-SFF-Case', 'asus-Gimming-980-SFF-Case', '', '', '', 4000000, 700000, 100, 0, 0, 0, 2202, 'ASUS', 1, 0, 0, 1, 0),
(30, 30, 'ASus ROG GL 552 VX', '<p>Laptop Asus GL552VW l&agrave; d&ograve;ng gaming trung cấp CPU Skylake thế hệ thứ 6 của Intel.</p>', '<p>M&aacute;y được thiết kế với kiểu d&aacute;ng khỏe khoắn, chất liệu vỏ nh&ocirc;m phay chắc chắn. Ở giữa mặt sau logo Asus ROG được thiết kế cực kỳ ấn tượng, mang dấu ấn ri&ecirc;ng của d&ograve;ng Gaming, c&oacute; đ&egrave;n ph&aacute;t s&aacute;ng.</p>', '<p>Nh&igrave;n chung, cảm gi&aacute;c đầu ti&ecirc;n khi nh&igrave;n v&agrave;o chiếc laptop Asus GL552VW l&agrave; rất ngầu với phong c&aacute;ch Gaming trẻ trung.</p>', 'USB 2.0 USB 3.0, USB 3.1 (Type C) HDMI, LAN, jack cắm tai nghe 3.5', '06 tháng.', '15.6 inch full HD (1920 x 1080 pixels) LED + Anti-Glare', 'NVIDIA GeForce GTX 960M + Intel HD Graphics 530', NULL, NULL, 'intel Core i5 6300HQ 2.3 Ghz, turbo boost 3.2Ghz', '8GB DDR4 2133MHz 2 slot (Max 32GB)', 'HDD 1TB', NULL, NULL, NULL, 'Vỏ nhựa', '2.6kg', 'Hàng chính hãng.', 'may-tinh-xach-tay-asus-gl552jx-xo093d-4-600x600', 'may-tinh-xach-tay-asus-gl552jx-xo093d-4-600x600', 'may-tinh-xach-tay-asus-gl552jx-xo093d-4-600x600', 'GL552VX-CN239T_3', 'Laptop-Asus-GL552', 20350000, 700000, 99, 1, 0, 0, 2204, 'ASUS', 1, 1, 0, 1, 0),
(31, 31, 'Laptop HP Omen 15 2016 I5 6300HQ/ RAM 4GB/ HDD 1TB/ GTX 960M/ 15.6 INCH FHD', 'HP Omen 15 được trang bị vi xử lý Intel® Core™ lõi tứ thế hệ 6 và card đồ họa NVIDIA® GTX™ 9 series. 2 bản lề màn hình với thiết kế mới bằng kim loại mạ Crom. ', 'Bên cạnh phải của HP Omen 15 là cổng USB 3.0, HDMI, khe thẻ nhớ SD và cổng LAN, cạnh trái có 2 cổng USB nữa và 1 jack headset tích hợp.', 'Kiểu dáng đẹp và ánh sáng, thiết bị này đã sẵn sàng để đi bất cứ nơi đâu. Chơi với hiệu suất tốt hơn và tuổi thọ pin trên một trong những máy tính xách tay chơi game mỏng nhất và nhẹ nhất thế giới.', 'HDMI, USB 3.0, 2.0 Ethernet (LAN), Card-Reader', '06 tháng.', '15.6 inch Anti-Glare LED-Backlit FHD(1920x1080)', 'NVIDIA GeForce GTX 960M 4GB + Intel HD graphics 530', '', '', 'Intel Core i5-6300HQ (4 x 2.3GHz up to 3.2GHz Cache 6Mb)', '4GB DDR4 bus 2133MHz (max 32GB)', '1TB HDD', '', '', '', 'Vỏ nhựa', '2.2kg', 'Hàng chính hãng.', '43276_probook_430_g8_ha4', '43276_probook_430_g8_ha4', 'Laptop-HP-Omen', 'hp-omen-15-2016-500-500_af9f6f040f6244bcb95254d3148f0d74_grande', '', 20350000, 700000, 100, 0, 0, 0, 2204, 'HP', 1, 0, 0, 1, 0),
(32, 32, 'Laptop Lenovo ThinkBook 15 i5 10210U/8GB/512GB SSD/2GB RADEON 620/WIN10 ', 'Lenovo ThinkBook 15 được trang bị bộ vi xử lý Intel Core i5 10210U thế hệ thứ 10 mới nhất, cho hiệu năng mạnh mẽ, xử lý trơn tru công việc của bạn. ', 'Intel Core i5 10210U với 4 lõi 8 luồng, xung nhịp tối đa 4.20 GHz, bộ nhớ đệm 6MB không chỉ mạnh mà còn rất tiết kiệm điện năng.', 'Dù có thiết kế mỏng nhẹ nhưng Lenovo ThinkBook 15 vẫn sở hữu card đồ họa rời AMD Radeon 620 2GB, giúp chạy các phần mềm đồ họa và chơi game hiệu quả hơn. Sức mạnh đồ họa của Lenovo ThinkBook 15 ở một đẳng cấp khác biệt so với những laptop chỉ có đồ họa onboard.', '2 x USB 3.1 HDMI LAN (RJ45) USB 2.0 2 x USB Type-C', '06 tháng.', '15.6\", 1920 x 1080 Pixel, IPS, 250 nits, LED-backlit', 'AMD Radeon 620 2 GB & Intel UHD Graphics', '', '', 'Intel Core i5-10210U', '8 GB, DDR4, 2666 MHz', 'SSD 512 GB', '', '', '', 'Vỏ nhựa', '1.7 kg', 'Hàng chính hãng.', 'LENOVO-12434-I5-6300HQ', 'LENOVO-12434-I5-6300HQ', '', '', '', 20350000, 700000, 99, 1, 0, 0, 2204, 'LENOVO', 1, 0, 0, 1, 0),
(27, 27, 'Dell Inspiron 3552', 'Dell Inspiron 3552 là mẫu laptop giá rẻ thuộc dòng Dell Inspiron 3000 series. ', 'Máy sở hữu thiết kế mạnh mẽ, gọn gàng, màn hình lớn 15.6 inch cùng hiệu năng ổn định. ', 'Sản phẩm có mức giá phù hợp với học sinh, sinh viên hay nhân viên văn phòng cần một chiếc laptop phục vụ tốt cho công việc cũng như giải trí.', '2 x USB 2.0 HDMI USB 3.0', '06 tháng.', '15.6\" HD (1366 x 768)', 'Card tích hợp Intel HD Graphics', '', '', 'N3050 1.60 GHz', '2 GB DDR3L (1 khe RAM) 1600 MHz', 'HDD 500GB', '', '', '', 'Vỏ nhựa', 'Nặng 2.14 kg', 'Hàng chính hãng.', 'dell-inspiron-3552-70138764-1', 'dell-inspiron-3552-70138764-1', 'laptop-dell-inspiron-15-3552-1', 'laptop-dell-inspiron-15-3552-3', 'e4a06bb0195c7e118e5e920fc43d0deb', 6990000, 700000, 100, 0, 0, 0, 2204, 'DELL', 1, 1, 0, 1, 0),
(35, 35, 'Laptop Dell Inspiron N5505A', 'Dell Inspiron N5505A sở hữu độ bền đáng tin cậy chuẩn Dell với chất lượng hoàn thiện cao ở mọi chi tiết. Chế tác từ lớp vỏ nhôm sang trọng, cứng cáp, các đường cắt kim cương sắc sảo và màu trắng thanh lịch. ', 'Dell Inspiron N5505A mang đến vẻ đẹp sang trọng, thể hiện cá tính của riêng bạn.', ' Dù là một chiếc laptop màn hình lớn 15,6 inch nhưng máy vẫn rất mỏng nhẹ với trọng lượng chỉ 1,83kg và độ mỏng 17,9mm, đủ cơ động để bạn mang đi bất cứ đâu.', '1 Type-C2 USB 3.00 USB 2.01 HDMI1 Jack 3.5 mm', '06 tháng.', '15.6\", 1920 x 1080 Pixel, WVA, 60 Hz, 220 nits, WVA Anti-glare LED Backlit Narrow Border', 'AMD Radeon RX Graphics Vega 10', '', '', 'AMD Ryzen 5-4500U', '8 GB, DDR4, 3200 MHz', 'SSD 256 GB', '', '', '', 'Vỏ nhôm', '1.83 kg', 'Hàng chính hãng.', '41784_inspiron_5502_silver_ha3', '41784_inspiron_5502_silver_ha3', '', '', '', 17690000, 1000000, 100, 0, 0, 0, 2204, 'DELL', 1, 0, 0, 1, 0),
(40, 40, 'Laptop Asus Zenbook UX425EA KI439T', '<p>Phi&ecirc;n bản ZenBook 14 UX425EA trong b&agrave;i viết c&oacute; m&agrave;u x&aacute;m th&ocirc;ng, thể hiện sự th&acirc;m trầm, hiện đại. Kiểu d&aacute;ng cao cấp v&agrave; ho&agrave;n thiện từ kim loại nguy&ecirc;n khối, c&ugrave;ng m&agrave;n h&igrave;nh viền si&ecirc;u mỏng tạo n&ecirc;n một chiếc laptop đẹp ho&agrave;n mỹ.</p>', '<p>Asus ZenBook 14 UX425EA mang tới đẳng cấp ri&ecirc;ng biệt cho người d&ugrave;ng, khẳng định gi&aacute; trị của sự tr&iacute; tuệ qua một thiết bị c&ocirc;ng nghệ đỉnh cao.</p>', '<p>Kh&ocirc;ng chỉ đẹp m&agrave; độ bền của Asus ZenBook 14 UX425EA cũng rất đ&aacute;ng kinh ngạc. ZenBook 14 thậm ch&iacute; c&ograve;n đạt chuẩn qu&acirc;n đội Mỹ MIL-STD-810G.</p>', '-- USB 3.01 HDMI1 Card reader-- Jack 3.5 mm2 Thunderbolt', '06 tháng.', '14.0\", 1920 x 1080 Pixel, IPS, 60 Hz', 'Intel Iris Xe Graphics', NULL, NULL, 'Intel Core i5-1135G7', '8 GB, LPDDR4X, 3200 MHz', 'SSD 512 GB', NULL, NULL, NULL, 'Vỏ nhựa', '1.17 kg', 'Hàng chính hãng.', 'laptop-asus-zenbook-14-ux425ea-ki439tt-1', 'laptop-asus-zenbook-14-ux425ea-ki439tt-1', '', '', '', 32690000, 1000000, 99, 1, 0, 0, 2204, 'ASUS', 1, 1, 0, 1, 0),
(42, 42, 'MacBook Pro 13\" 2020', '<p>Vũ kh&iacute; b&iacute; mật của MacBook Pro 13 2020 đến từ Apple M1, bộ vi xử l&yacute; đầu ti&ecirc;n được ch&iacute;nh Apple chế tạo cho m&aacute;y Mac.</p>', '<p>Với 16 tỷ b&oacute;ng b&aacute;n dẫn, Apple M1 t&iacute;ch hợp tất cả từ CPU, GPU, Neural Engine, I/O, bộ xử l&yacute; h&igrave;nh ảnh v&agrave; hơn thế nữa v&agrave;o một con chip nhỏ b&eacute;.</p>', '<p>Bạn sẽ được tận hưởng những điều đ&aacute;ng kinh ngạc chưa từng thấy ở MacBook Pro 13.</p>', '2 Thunderbolt 4 ports, 1 jack tai nghe 3.5mm', '06 tháng.', '13.3\", 2560 x 1600 Pixel', 'Apple M1 GPU 8 nhân', NULL, NULL, 'Apple M1', '8 GB, LPDDR4', 'SSD 256 GB', NULL, NULL, NULL, 'Vỏ hợp kim titan', '1.4 kg', 'Hàng chính hãng.', 'broshop-uag-macbook-pro-13-inch-2020-plyo-4', 'broshop-uag-macbook-pro-13-inch-2020-plyo-4', '', '', '', 53490000, 1000000, 100, 0, 0, 0, 2204, 'Apple', 1, 0, 0, 1, 1),
(47, 47, 'Laptop HP 240 G8', 'Cơ chế bản lề nâng mới giúp HP Envy 13 khéo léo “giấu đi” một phần nhỏ cạnh dưới màn hình, mang tới cho bạn trải nghiệm trên màn hình viền mỏng đều cả 4 cạnh vô cùng tuyệt vời. ', 'Màn hình tràn viền của HP Envy 13 sẽ hiển thị mọi nội dung một cách tuyệt đẹp, từ văn bản sắc nét, các phần mềm tương thích cho đến những đoạn phim sống động. ', 'Chất lượng chuẩn Full HD, góc nhìn rộng 178 độ và đặc biệt màu sắc hết sức chân thực tạo nên hình ảnh xuất sắc. Hãy cùng đắm chìm trong thế giới giải trí đỉnh cao của HP Envy 13 ba1028TU.', '3 USB 3.01 HDMI-- Jack 3.5 mm1 Thunderbolt1 LAN', '06 tháng.', '14.0\", 1920 x 1080 Pixel, IPS, 60 Hz', 'Intel® Iris® Xe Graphics', '', '', 'Intel Core i7-11370H', 'Ram 8gb', 'SD 256gb', '', '', '', 'Vỏ hợp kim titan', '2.072 kg', 'Hàng chính hãng.', 'HP-240-G8-2', 'HP-240-G8-2', '', '', '', 14890000, 600000, 100, 0, 0, 0, 2204, 'HP', 1, 0, 0, 1, 0),
(33, 33, 'Laptop Dell Inspiron 3501', 'Khung máy được làm bằng chất liệu hợp kim cao cấp, mang lại sự chắc chắn. Logo Dell màu đen, sáng bóng được đặt chính giữa phần mặt lưng càng tôn lên vẻ đẹp của chiếc máy này.', 'Trọng lượng máy nặng 1.96kg với độ dày 19.9mm khá gọn nhẹ. Giúp người dùng có thể dễ dàng mang theo máy đi khắp mọi nơi. Đặc biệt là đối với những ai thường xuyên phải đi công tác.', 'Sở hữu thiết kế khá gọn nhẹ so với rất nhiều anh,em trong cùng phân khúc. ', '2 x USB 3.2 Gen 1 1 x USB 2.0 1 x USB 3.2 Gen 1 Type-C port (optional) 1 x HDMI 1.4 port 1 x headset (headphone and microphone combo) port', '06 tháng.', '15.6 inch', 'Intel Iris Graphics', '', '', 'Core™ i5-1135G1', 'RAM 8GB', 'SSD 256GB', '', '', '', 'Vỏ nhôm', '1.96 kg', 'Hàng chính hãng.', '41373_inspiron_3501_black_ha4', '41373_inspiron_3501_black_ha4', '', '', '', 17790000, 700000, 99, 1, 0, 0, 2204, 'DELL', 1, 1, 0, 1, 0),
(36, 36, 'Laptop Dell Vostro V5502', 'Dell Vostro V5502A là một trong những laptop đầu tiên trên thị trường trang bị bộ vi xử lý Intel thế hệ thứ 11. Con chip Intel Core i5 1135G7 sở hữu 4 lõi 8 luồng, tốc độ xung nhịp tối đa 4.20GHz, cho hiệu năng xử lý đa nhân mạnh mẽ và ổn định.', ' Bên cạnh đó là 8GB RAM DDR4 3200 MHz và 256GB M.2 PCIe NVMe SSD, mang đến khả năng xử lý đa nhiệm tuyệt vời cùng tốc độ khởi động, mở ứng dụng cực nhanh.', 'GPU đồ họa Intel Iris Xe Graphics mạnh hơn 4 lần so với GPU đồ họa đi kèm thế hệ trước, bạn có thể chạy các tác vụ đồ họa như chỉnh sửa ảnh, video, dựng 3D, các phần mềm kỹ thuật và kể cả chơi game.', '1 Type-C2 USB 3.01 HDMI1 Card reader1 Jack 3.5 mm', '06 tháng.', '15.6\", 1920 x 1080 Pixel, WVA, 60 Hz', 'Intel Iris Xe Graphics', '', '', 'Intel Core i5-1135G7', '8 GB, DDR4, 3200 MHz', 'SSD 256 GB', '', '', '', 'Vỏ nhôm', '1.7 kg', 'Hàng chính hãng.', 'dell-vostro-15-v5502a-2', 'dell-vostro-15-v5502a-2', '', '', '', 23890000, 1000000, 100, 0, 0, 0, 2204, 'DELL', 1, 0, 1, 1, 0),
(37, 37, 'Laptop ASUS Gaming TUF FX516PE HN005T', 'Không đơn thuần gói gọn trong hoạt động chơi game, sức mạnh của ASUS Gaming TUF FX516PE HN005T (Dash F15) đủ để đáp ứng mọi nhu cầu của bạn, kể cả những công việc chuyên nghiệp đòi hỏi hiệu năng cao. ', 'Bộ vi xử lý Intel Core i7 11370H thuộc thế hệ thứ 11 mới nhất có tốc độ xung nhịp tối đa lên tới 4.80GHz, tương đương với CPU của những máy PC nhanh nhất hiện nay, vô cùng mạnh mẽ nhưng cũng rất tiết kiệm điện năng', 'Bạn có thể chơi các game bom tấn, vừa chơi game vừa livestream hay chạy mọi ứng dụng nặng trên chiếc máy tính Dash F15 đầy di động.', '3 USB 3.01 HDMI-- Jack 3.5 mm1 Thunderbolt1 LAN', '06 tháng.', '15.6\", 1920 x 1080 Pixel, IPS, 144 Hz', 'NVIDIA GeForce RTX 3050Ti 4 GB & Intel Iris Xe Graphics', '', '', 'Intel Core i7-11370H', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB', '', '', '', 'Vỏ nhôm', '2.072 kg', 'Hàng chính hãng.', '43495_tuf_gaming_fx516_ha2', '43495_tuf_gaming_fx516_ha2', '', '', '', 30490000, 1000000, 98, 2, 0, 0, 2204, 'ASUS', 1, 0, 0, 1, 1),
(39, 39, 'Laptop Asus Vivobook D515DA EJ711T', 'Không đơn thuần gói gọn trong hoạt động chơi game, sức mạnh của ASUS Gaming TUF FX516PE HN005T (Dash F15) đủ để đáp ứng mọi nhu cầu của bạn, kể cả những công việc chuyên nghiệp đòi hỏi hiệu năng cao. ', 'Bộ vi xử lý Intel Core i7 11370H thuộc thế hệ thứ 11 mới nhất có tốc độ xung nhịp tối đa lên tới 4.80GHz, tương đương với CPU của những máy PC nhanh nhất hiện nay, vô cùng mạnh mẽ nhưng cũng rất tiết kiệm điện năng', 'Bạn có thể chơi các game bom tấn, vừa chơi game vừa livestream hay chạy mọi ứng dụng nặng trên chiếc máy tính Dash F15 đầy di động.', '3 USB 3.01 HDMI-- Jack 3.5 mm1 Thunderbolt1 LAN', '06 tháng.', '15.6\", 1920 x 1080 Pixel, IPS, 144 Hz', 'NVIDIA GeForce RTX 3050Ti 4 GB & Intel Iris Xe Graphics', '', '', 'Intel Core i7-11370H', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB', '', '', '', 'Vỏ nhôm', '1.55 kg', 'Hàng chính hãng.', '39775_vivobook_m433ia_ha1', '39775_vivobook_m433ia_ha1', '', '', '', 15290000, 1000000, 99, 1, 0, 0, 2204, 'ASUS', 1, 0, 0, 1, 0),
(51, 51, 'Laptop Lenovo IdeaPad Slim 5 14ALC05', 'Những bộ vi xử lý mạnh mẽ từ AMD đang được các game thủ săn đón, đặc biệt là những con chip thuộc thế hệ Ryzen 4000 series mới nhất. ', 'Lenovo IdeaPad Gaming 3 15ARH05 trang bị AMD Ryzen 5 4600H, bộ vi xử lý cực mạnh với 6 lõi 12 luồng, tốc độ 3.0 – 4.0GHz và đặc biệt là sản xuất trên tiến trình 7nm vô cùng tiên tiến. ', 'Sở hữu nhiều nhân và tiến trình 7nm giúp hiệu năng đa luồng của Ideapad Gaming 3 cực mạnh, không chỉ giúp chơi game tốt mà khả năng đồ họa, dựng video cũng rất đỉnh.', '3 USB 3.01 HDMI-- Jack 3.5 mm1 Thunderbolt1 LAN', '06 tháng.', '13.4-inch, FHD+ (1920 x 1200), 60 Hz', 'Intel Iris Xe Graphics', '', '', 'Intel Core i5-1135G7', '8 GB, LPDDR4X, 3200 MHz', 'SSD 512 GB', '', '', '', 'Vỏ nhựa', '1.17 kg', 'Hàng chính hãng.', '39457_ideapad_5_14iil05_grey_ha5', '39457_ideapad_5_14iil05_grey_ha5', '', '', '', 18690000, 600000, 100, 0, 0, 0, 2204, 'LENOVO', 1, 1, 0, 1, 0),
(41, 41, 'Laptop Asus Vivobook Flip TP470EA EC027T', 'Phiên bản ZenBook 14 UX425EA trong bài viết có màu xám thông, thể hiện sự thâm trầm, hiện đại. Kiểu dáng cao cấp và hoàn thiện từ kim loại nguyên khối, cùng màn hình viền siêu mỏng tạo nên một chiếc laptop đẹp hoàn mỹ. ', 'Asus ZenBook 14 UX425EA mang tới đẳng cấp riêng biệt cho người dùng, khẳng định giá trị của sự trí tuệ qua một thiết bị công nghệ đỉnh cao.', 'Không chỉ đẹp mà độ bền của Asus ZenBook 14 UX425EA cũng rất đáng kinh ngạc. ZenBook 14 thậm chí còn đạt chuẩn quân đội Mỹ MIL-STD-810G.', '-- USB 3.01 HDMI1 Card reader-- Jack 3.5 mm2 Thunderbolt', '06 tháng.', '14.0\", 1920 x 1080 Pixel, IPS, 60 Hz', 'Intel Iris Xe Graphics', '', '', 'Intel Core i5-1135G7', '8 GB, LPDDR4X, 3200 MHz', 'SSD 512 GB', '', '', '', 'Vỏ hợp kim titan', '1.55 kg', 'Hàng chính hãng.', '43542_vivobook_flip_tp470_silver_ha2', '43542_vivobook_flip_tp470_silver_ha2', '', '', '', 16890000, 1000000, 100, 0, 0, 0, 2204, 'ASUS', 1, 0, 0, 1, 0),
(43, 43, 'MacBook Air 13\" 2020', 'Vũ khí bí mật của MacBook Pro 13 2020 đến từ Apple M1, bộ vi xử lý đầu tiên được chính Apple chế tạo cho máy Mac. ', 'Với 16 tỷ bóng bán dẫn, Apple M1 tích hợp tất cả từ CPU, GPU, Neural Engine, I/O, bộ xử lý hình ảnh và hơn thế nữa vào một con chip nhỏ bé.', ' Bạn sẽ được tận hưởng những điều đáng kinh ngạc chưa từng thấy ở MacBook Pro 13.', '1 Type-C2 USB 3.00 USB 2.01 HDMI1 Jack 3.5 mm', '06 tháng.', '13.3\", 2560 x 1600 Pixel', 'Apple M1 GPU 8 nhân', '', '', 'Apple M1', '8 GB, LPDDR4', 'SSD 256 GB', '', '', '', 'Vỏ hợp kim titan', '1.17 kg', 'Hàng chính hãng.', 'Macbook-Air-13-inch-2020-MWTK2SA-A-3', 'Macbook-Air-13-inch-2020-MWTK2SA-A-3', '', '', '', 30790000, 1000000, 100, 0, 0, 0, 2204, 'Apple', 1, 0, 0, 1, 0),
(34, 34, 'Laptop Dell XPS 13 9310', 'Dell tiếp tục áp dụng triết lý thiết kế của XPS 9300 đình đám vào năm ngoái lên chiếc XPS 9310 này. Đây là kiểu thiết kế nhôm nguyên khối đã từng làm mưa làm gió cộng đồng fan XPS vì vẻ hiện đại, tinh tế này.', 'Viền màn hình vẫn được thiết kế theo lối InfinityEdge, vô cực mọi góc độ. Bản lề vẫn được thiết kế ở chính giữa, theo hơi hướng EurgoLift, nhằm tăng khả năng tản nhiệt trên chiếc Ultrabook này.', 'Máy có 2 màu sắc chủ đạo là màu xám Silver và màu trắng Frost White như thế hệ trước.', '2 Thunderbolt 4 ports, 1 jack tai nghe 3.5mm', '06 tháng.', '13.4-inch, FHD+ (1920 x 1200), 60 Hz', 'Intel® Iris® Xe Graphics', '', '', 'Core i5-1135G7', 'Ram 8gb', 'SD 256gb', '', '', '', 'Vỏ nhôm', '1.2 - 1.27kg', 'Hàng chính hãng.', '41987_xps_13_9310_silver_ha1', '41987_xps_13_9310_silver_ha1', '', '', '', 42490000, 700000, 100, 0, 0, 0, 2204, 'DELL', 1, 0, 1, 1, 0),
(45, 45, 'MacBook Air 13\" 2020 M1 256GB', 'Vũ khí bí mật của MacBook Pro 13 2020 đến từ Apple M1, bộ vi xử lý đầu tiên được chính Apple chế tạo cho máy Mac. ', 'Với 16 tỷ bóng bán dẫn, Apple M1 tích hợp tất cả từ CPU, GPU, Neural Engine, I/O, bộ xử lý hình ảnh và hơn thế nữa vào một con chip nhỏ bé.', ' Bạn sẽ được tận hưởng những điều đáng kinh ngạc chưa từng thấy ở MacBook Pro 13.', '3 USB 3.01 HDMI-- Jack 3.5 mm1 Thunderbolt1 LAN', '06 tháng.', '13.3\", 2560 x 1600 Pixel', 'Apple M1 GPU 8 nhân', '', '', 'Apple M1', '8 GB, LPDDR4', 'SSD 256 GB', '', '', '', 'Vỏ hợp kim titan', '1.4 kg', 'Hàng chính hãng.', 'macbook_pro_13-MYDC2SAA-600x600', 'macbook_pro_13-MYDC2SAA-600x600', '', '', '', 27890000, 1000000, 100, 0, 0, 0, 2204, 'Apple', 1, 0, 0, 1, 0),
(46, 46, 'Laptop HP Envy 13 ba1028TU', 'Cơ chế bản lề nâng mới giúp HP Envy 13 khéo léo “giấu đi” một phần nhỏ cạnh dưới màn hình, mang tới cho bạn trải nghiệm trên màn hình viền mỏng đều cả 4 cạnh vô cùng tuyệt vời. ', 'Màn hình tràn viền của HP Envy 13 sẽ hiển thị mọi nội dung một cách tuyệt đẹp, từ văn bản sắc nét, các phần mềm tương thích cho đến những đoạn phim sống động. ', 'Chất lượng chuẩn Full HD, góc nhìn rộng 178 độ và đặc biệt màu sắc hết sức chân thực tạo nên hình ảnh xuất sắc. Hãy cùng đắm chìm trong thế giới giải trí đỉnh cao của HP Envy 13 ba1028TU.', '-- USB 3.01 HDMI1 Card reader-- Jack 3.5 mm2 Thunderbolt', '06 tháng.', '14.0\", 1920 x 1080 Pixel, IPS, 60 Hz', 'Intel Iris Graphics', '', '', 'Intel Core i5-1135G7', 'RAM 8GB', 'SSD 256GB', '', '', '', 'Vỏ hợp kim titan', '1.7 kg', 'Hàng chính hãng.', '40991_envy_13_gold_ha4', '40991_envy_13_gold_ha4', '', '', '', 21690000, 600000, 100, 0, 0, 0, 2204, 'HP', 1, 0, 0, 1, 0),
(49, 49, 'Laptop HP Pavilion 15 eg0508TU', 'Cơ chế bản lề nâng mới giúp HP Envy 13 khéo léo “giấu đi” một phần nhỏ cạnh dưới màn hình, mang tới cho bạn trải nghiệm trên màn hình viền mỏng đều cả 4 cạnh vô cùng tuyệt vời. ', 'Màn hình tràn viền của HP Envy 13 sẽ hiển thị mọi nội dung một cách tuyệt đẹp, từ văn bản sắc nét, các phần mềm tương thích cho đến những đoạn phim sống động. ', 'Chất lượng chuẩn Full HD, góc nhìn rộng 178 độ và đặc biệt màu sắc hết sức chân thực tạo nên hình ảnh xuất sắc. Hãy cùng đắm chìm trong thế giới giải trí đỉnh cao của HP Envy 13 ba1028TU.', '-- USB 3.01 HDMI1 Card reader-- Jack 3.5 mm2 Thunderbolt', '06 tháng.', '15.6\", 1920 x 1080 Pixel, IPS, 250 nits, LED-backlit', 'Intel Iris Xe Graphics', '', '', 'Intel Core i7-11370H', '8 GB, DDR4, 3200 MHz', 'SSD 256 GB', '', '', '', 'Vỏ nhựa', '1.55 kg', 'Hàng chính hãng.', 'HP-Pavilion-15-eg0069TU-8', 'HP-Pavilion-15-eg0069TU-8', '', '', '', 21590000, 600000, 100, 0, 0, 0, 2204, 'HP', 1, 0, 0, 1, 0),
(38, 38, 'Laptop Asus Zenbook UX425EA KI429T', 'Phiên bản ZenBook 14 UX425EA trong bài viết có màu xám thông, thể hiện sự thâm trầm, hiện đại. Kiểu dáng cao cấp và hoàn thiện từ kim loại nguyên khối, cùng màn hình viền siêu mỏng tạo nên một chiếc laptop đẹp hoàn mỹ. ', 'Asus ZenBook 14 UX425EA mang tới đẳng cấp riêng biệt cho người dùng, khẳng định giá trị của sự trí tuệ qua một thiết bị công nghệ đỉnh cao.', 'Không chỉ đẹp mà độ bền của Asus ZenBook 14 UX425EA cũng rất đáng kinh ngạc. ZenBook 14 thậm chí còn đạt chuẩn quân đội Mỹ MIL-STD-810G.', '-- USB 3.01 HDMI1 Card reader-- Jack 3.5 mm2 Thunderbolt', '06 tháng.', '14.0\", 1920 x 1080 Pixel, IPS, 60 Hz', 'Intel Iris Xe Graphics', '', '', 'Intel Core i5-1135G7', '8 GB, LPDDR4X, 3200 MHz', 'SSD 512 GB', '', '', '', 'Vỏ nhôm', '1.17 kg', 'Hàng chính hãng.', '43711_zenbook_ux425_grey_bh_ha1', '43711_zenbook_ux425_grey_bh_ha1', '', '', '', 25690000, 1000000, 100, 0, 0, 0, 2204, 'ASUS', 1, 0, 1, 1, 0);
INSERT INTO `san_pham` (`id`, `ma_san_pham`, `ten_san_pham`, `gioi_thieu`, `gioi_thieu_2`, `gioi_thieu_3`, `tskt_ket_noi_mang`, `tskt_bao_hanh`, `tskt_man_hinh`, `tskt_VGA`, `tskt_camera_sau`, `tskt_camera_truoc`, `tskt_chip`, `tskt_ram`, `tskt_bo_nho_trong`, `tskt_sim`, `tskt_pin`, `tskt_pixel`, `tskt_material`, `tskt_weight`, `tskt_xuat_xu`, `ten_url`, `hinh_san_pham`, `hinh_1`, `hinh_2`, `hinh_3`, `gia_goc`, `giam_gia`, `store_sl_ton`, `store_sl_da_ban`, `store_luot_danh_gia`, `store_danh_gia`, `ma_loai`, `ma_nsx`, `trang_thai`, `hot`, `giam_gia_soc`, `like`, `new`) VALUES
(50, 50, 'Laptop Lenovo IdeaPad Gaming 3 15ARH05', 'Những bộ vi xử lý mạnh mẽ từ AMD đang được các game thủ săn đón, đặc biệt là những con chip thuộc thế hệ Ryzen 4000 series mới nhất. ', 'Lenovo IdeaPad Gaming 3 15ARH05 trang bị AMD Ryzen 5 4600H, bộ vi xử lý cực mạnh với 6 lõi 12 luồng, tốc độ 3.0 – 4.0GHz và đặc biệt là sản xuất trên tiến trình 7nm vô cùng tiên tiến. ', 'Sở hữu nhiều nhân và tiến trình 7nm giúp hiệu năng đa luồng của Ideapad Gaming 3 cực mạnh, không chỉ giúp chơi game tốt mà khả năng đồ họa, dựng video cũng rất đỉnh.', '-- USB 3.01 HDMI1 Card reader-- Jack 3.5 mm2 Thunderbolt', '06 tháng.', '15.6 inch', 'NVIDIA GeForce RTX 3050Ti 4 GB & Intel Iris Xe Graphics', '', '', 'Intel Core i5-1135G7', '8 GB, DDR4, 3200 MHz', 'SSD 512 GB', '', '', '', 'Vỏ nhựa', '1.17 kg', 'Hàng chính hãng.', 'Lenovo-IdeaPad-Gaming-3-031', 'Lenovo-IdeaPad-Gaming-3-031', '', '', '', 25990000, 600000, 100, 0, 0, 0, 2204, 'LENOVO', 1, 0, 0, 1, 0),
(44, 44, 'MacBook Pro 13\" 2020 Touch Bar M1 256GB', 'Vũ khí bí mật của MacBook Pro 13 2020 đến từ Apple M1, bộ vi xử lý đầu tiên được chính Apple chế tạo cho máy Mac. ', 'Với 16 tỷ bóng bán dẫn, Apple M1 tích hợp tất cả từ CPU, GPU, Neural Engine, I/O, bộ xử lý hình ảnh và hơn thế nữa vào một con chip nhỏ bé.', ' Bạn sẽ được tận hưởng những điều đáng kinh ngạc chưa từng thấy ở MacBook Pro 13.', '1 Type-C2 USB 3.01 HDMI1 Card reader1 Jack 3.5 mm', '06 tháng.', '13.3\", 2560 x 1600 Pixel', 'Apple M1 GPU 8 nhân', '', '', 'Apple M1', '8 GB, LPDDR4', 'SSD 256 GB', '', '', '', 'Vỏ hợp kim titan', '1.55 kg', 'Hàng chính hãng.', 'macbook-pro-13inch-m1', 'macbook-pro-13inch-m1', '', '', '', 34690000, 1000000, 100, 0, 0, 0, 2204, 'Apple', 1, 0, 0, 1, 0),
(52, 52, 'Laptop Lenovo Yoga Slim 7 14ITL05', 'Những bộ vi xử lý mạnh mẽ từ AMD đang được các game thủ săn đón, đặc biệt là những con chip thuộc thế hệ Ryzen 4000 series mới nhất. ', 'Lenovo IdeaPad Gaming 3 15ARH05 trang bị AMD Ryzen 5 4600H, bộ vi xử lý cực mạnh với 6 lõi 12 luồng, tốc độ 3.0 – 4.0GHz và đặc biệt là sản xuất trên tiến trình 7nm vô cùng tiên tiến. ', 'Sở hữu nhiều nhân và tiến trình 7nm giúp hiệu năng đa luồng của Ideapad Gaming 3 cực mạnh, không chỉ giúp chơi game tốt mà khả năng đồ họa, dựng video cũng rất đỉnh.', '-- USB 3.01 HDMI1 Card reader-- Jack 3.5 mm2 Thunderbolt', '06 tháng.', '15.6\", 1920 x 1080 Pixel, WVA, 60 Hz, 220 nits, WVA Anti-glare LED Backlit Narrow Border', 'NVIDIA GeForce RTX 3050Ti 4 GB & Intel Iris Xe Graphics', '', '', 'Core i5-1135G7', '8 GB, DDR4, 2666 MHz', 'SSD 512 GB', '', '', '', 'Vỏ nhựa', '1.55 kg', 'Hàng chính hãng.', '41581_yoga_slim_7_xanh_reu_ha6', '41581_yoga_slim_7_xanh_reu_ha6', '', '', '', 23490000, 600000, 100, 0, 0, 0, 2204, 'LENOVO', 1, 0, 0, 1, 0),
(53, 53, 'Laptop Lenovo Legion 5 15ACH6', 'Những bộ vi xử lý mạnh mẽ từ AMD đang được các game thủ săn đón, đặc biệt là những con chip thuộc thế hệ Ryzen 4000 series mới nhất. ', 'Lenovo IdeaPad Gaming 3 15ARH05 trang bị AMD Ryzen 5 4600H, bộ vi xử lý cực mạnh với 6 lõi 12 luồng, tốc độ 3.0 – 4.0GHz và đặc biệt là sản xuất trên tiến trình 7nm vô cùng tiên tiến. ', 'Sở hữu nhiều nhân và tiến trình 7nm giúp hiệu năng đa luồng của Ideapad Gaming 3 cực mạnh, không chỉ giúp chơi game tốt mà khả năng đồ họa, dựng video cũng rất đỉnh.', '-- USB 3.01 HDMI1 Card reader-- Jack 3.5 mm2 Thunderbolt', '06 tháng.', '15.6\", 1920 x 1080 Pixel, WVA, 60 Hz, 220 nits, WVA Anti-glare LED Backlit Narrow Border', 'NVIDIA GeForce RTX 3050Ti 4 GB & Intel Iris Xe Graphics', '', '', 'AMD Ryzen 5-4500U', 'RAM 8GB', 'SSD 256GB', '', '', '', 'Vỏ nhựa', '1.17 kg', 'Hàng chính hãng.', '40841_legion_5_15_ha1', '40841_legion_5_15_ha1', '', '', '', 23500000, 600000, 100, 0, 0, 0, 2204, 'LENOVO', 1, 0, 0, 1, 0),
(48, 48, 'Laptop HP Pavilion 15 eg0506TU', 'Cơ chế bản lề nâng mới giúp HP Envy 13 khéo léo “giấu đi” một phần nhỏ cạnh dưới màn hình, mang tới cho bạn trải nghiệm trên màn hình viền mỏng đều cả 4 cạnh vô cùng tuyệt vời. ', 'Màn hình tràn viền của HP Envy 13 sẽ hiển thị mọi nội dung một cách tuyệt đẹp, từ văn bản sắc nét, các phần mềm tương thích cho đến những đoạn phim sống động. ', 'Chất lượng chuẩn Full HD, góc nhìn rộng 178 độ và đặc biệt màu sắc hết sức chân thực tạo nên hình ảnh xuất sắc. Hãy cùng đắm chìm trong thế giới giải trí đỉnh cao của HP Envy 13 ba1028TU.', '-- USB 3.01 HDMI1 Card reader-- Jack 3.5 mm2 Thunderbolt', '06 tháng.', '15.6 inch Anti-Glare LED-Backlit FHD(1920x1080)', 'AMD Radeon RX Graphics Vega 10', '', '', 'Intel Core i5-1135G7', '8 GB, DDR4, 3200 MHz', 'SSD 256 GB', '', '', '', 'Vỏ nhựa', '1.17 kg', 'Hàng chính hãng.', '43908_pavilion_15_eg_silver_ha4s1', '43908_pavilion_15_eg_silver_ha4s1', '', '', '', 19490000, 600000, 100, 0, 0, 0, 2204, 'HP', 1, 0, 1, 1, 0),
(54, 54, 'Samsung Galaxy Tab A7 Lite', '\"Màn hình 8.7 inch WXGA+ (1340x800) hiển thị hình ảnh rõ nét, chân thực     CPU Mediatek MT8768T cho hiệu năng ổn định, xử lý tác vụ nhanh chóng \"', '\"    Dung lượng pin 5100 mAh, sạc nhanh 15W, thoải mái trải nghiệm cả ngày \"', '    Trải nghiệm âm thanh sống động với Hệ thống loa kép và Dolby Atmos ', '', '06 tháng.', '', '', '', '', '', '', '', '', '', '', '', '', 'Hàng chính hãng.', '40746_tab_a7_grey_ha1', '40746_tab_a7_grey_ha1', '', '', '', 4990000, 600000, 100, 0, 0, 0, 2201, 'SAMSUNG', 1, 0, 0, 1, 0),
(55, 55, 'iPad 10.2 2020 Wi-Fi + Cellular 32GB', '<p>&quot; Bộ vi xử l&yacute; Apple A12 Bionic, thưởng thức tựa game nặng mượt m&agrave; M&agrave;n h&igrave;nh Retina 10.2 inch mang lại h&igrave;nh ảnh sắc n&eacute;t, sống động Camera sau 8MP cho ph&eacute;p lưu giữ mọi khoảnh khắc &quot;</p>', '<p>&quot;Camera trước 1.2 MP hỗ trợ videocall với h&igrave;nh ảnh chất lượng Hệ thống Stereo, đắm ch&igrave;m trong kh&ocirc;ng gian &acirc;m nhạc đỉnh cao Thời lượng pin sử dụng li&ecirc;n tục trong 10 giờ, đ&aacute;p ứng mọi nhu cầu &quot;</p>', '<p>&quot;Hệ điều h&agrave;nh iPadOS mang tới những trải nghiệm độc đ&aacute;o Bộ nhớ trong 128GB cho kh&ocirc;ng gian lưu trữ bất tận&quot;</p>', NULL, '06 tháng.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hàng chính hãng.', 'ipad-gen-8-cellular-den-new-600x600-200x200', 'ipad-gen-8-cellular-den-new-600x600-200x200', '', '', '', 12490000, 600000, 98, 2, 0, 0, 2201, 'Apple', 1, 1, 0, 1, 0),
(56, 56, 'Samsung Galaxy Tab S7 FE', '\"    Màn hình 8.7 inch WXGA+ (1340x800) hiển thị hình ảnh rõ nét, chân thực     CPU Mediatek MT8768T cho hiệu năng ổn định, xử lý tác vụ nhanh chóng \"', '\"    Dung lượng pin 5100 mAh, sạc nhanh 15W, thoải mái trải nghiệm cả ngày \"', '    Trải nghiệm âm thanh sống động với Hệ thống loa kép và Dolby Atmos ', '', '06 tháng.', '', '', '', '', '', '', '', '', '', '', '', '', 'Hàng chính hãng.', 'samsung-galaxy-tab-s7-thumb-xanh-600x600-200x200', 'samsung-galaxy-tab-s7-thumb-xanh-600x600-200x200', '', '', '', 14490000, 600000, 100, 0, 0, 0, 2201, 'SAMSUNG', 1, 0, 0, 1, 0),
(57, 57, 'iPad Air 10.9 2020 Wi-Fi 64GB', '<p>&quot; Bộ vi xử l&yacute; Apple A12 Bionic, thưởng thức tựa game nặng mượt m&agrave; M&agrave;n h&igrave;nh Retina 10.2 inch mang lại h&igrave;nh ảnh sắc n&eacute;t, sống động Camera sau 8MP cho ph&eacute;p lưu giữ mọi khoảnh khắc &quot;</p>', '<p>&quot;Camera trước 1.2 MP hỗ trợ videocall với h&igrave;nh ảnh chất lượng Hệ thống Stereo, đắm ch&igrave;m trong kh&ocirc;ng gian &acirc;m nhạc đỉnh cao Thời lượng pin sử dụng li&ecirc;n tục trong 10 giờ, đ&aacute;p ứng mọi nhu cầu &quot;</p>', '<p>&quot;Hệ điều h&agrave;nh iPadOS mang tới những trải nghiệm độc đ&aacute;o Bộ nhớ trong 128GB cho kh&ocirc;ng gian lưu trữ bất tận&quot;</p>', NULL, '06 tháng.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hàng chính hãng.', '5220_may_tinh_bang_ipad_air_10_9_inch_wifi_mau_bac...', 'ipad-air-105-inch-wifi-2019-gold-600x600', '', '', '', 16490000, 600000, 100, 0, 0, 0, 2201, 'Apple', 1, 0, 1, 1, 1),
(58, 58, 'Pin sạc dự phòng Quick Charge Li-polymer 10000mAH ...', '', '', '', '', '06 tháng.', '', '', '', '', '', '', '', '', '', '', '', '', 'Hàng chính hãng.', 'pin-sac-du-phong-polymer-10000mah-evalu-pa-croco-a...', 'pin-sac-du-phong-polymer-10000mah-evalu-pa-croco-avatar-1-600x600', '', '', '', 1390000, 200000, 100, 0, 0, 0, 2203, 'SONY', 1, 0, 0, 1, 0),
(59, 59, 'Thẻ nhớ MicroSD 200GB Sandisk C10 100MB/s', '', '', '', '', '06 tháng.', '', '', '', '', '', '', '', '', '', '', '', '', 'Hàng chính hãng.', 'the-nho-microsd-32gb-class-10-305520-105555-600x60...', 'the-nho-microsd-200gb-class10uhs1-fix-600x600', '', '', '', 2190000, 200000, 99, 1, 0, 0, 2203, 'SONY', 1, 0, 0, 1, 0),
(60, 60, 'Tai nghe choàng đầu có mic Gaming Logitech G331', '', '', '', '', '06 tháng.', '', '', '', '', '', '', '', '', '', '', '', '', 'Hàng chính hãng.', '15474-tai-nghe-logitech-g331-1', '15474-tai-nghe-logitech-g331-1', '', '', '', 2190000, 200000, 100, 0, 0, 0, 2203, 'SONY', 1, 0, 0, 1, 0),
(61, 61, 'Tai nghe choàng đầu có mic Gaming Zadez GT-326P', '', '', '', '', '06 tháng.', '', '', '', '', '', '', '', '', '', '', '', '', 'Hàng chính hãng.', 'head-mic-Gaming-Zadez-GT-326P', 'head-mic-Gaming-Zadez-GT-326P', '', '', '', 1200000, 200000, 99, 1, 0, 0, 2203, 'SONY', 1, 0, 1, 1, 0),
(62, 62, 'Combo Loa Bluetooth Karaoke i.value FG206-01 Nhựa ...', '', '', '', '', '06 tháng.', '', '', '', '', '', '', '', '', '', '', '', '', 'Hàng chính hãng.', 'dalton-ts-15g600x-12-600x600', 'dalton-ts-15g600x-12-600x600', '', '', '', 1595000, 200000, 100, 0, 0, 0, 2203, 'SONY', 1, 0, 0, 1, 0),
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -3, 3, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL),
(71, 1203, 'test sp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '(600x600)_crop_iphone-xr-64gb-mau-den-xtmobile.jpg', NULL, NULL, NULL, 12000000, 0, 50, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, NULL, 1),
(72, 1204, 'test 2', 'abc', 'avc', 'abc', 'wifi', '12 tháng', '6\'\'', 'GTX', '200px', '100px', 'intel', '16Gb', '1T', '3 sim', '5000mAh', '0', 'sắt', '1kg', 'chính hãng', '1234', '7psilver.jpg', NULL, NULL, NULL, 13000000, 1000000, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham_giam_gia`
--

DROP TABLE IF EXISTS `san_pham_giam_gia`;
CREATE TABLE IF NOT EXISTS `san_pham_giam_gia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sp` int(11) NOT NULL,
  `date` date NOT NULL,
  `so_luong` int(11) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham_giam_gia`
--

INSERT INTO `san_pham_giam_gia` (`id`, `id_sp`, `date`, `so_luong`, `trang_thai`) VALUES
(1, 30, '2022-02-14', 20, 1),
(2, 40, '2022-02-21', 10, 1),
(3, 50, '2022-01-31', 20, 1),
(4, 60, '2022-01-30', 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_slider` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_slider` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sp` int(11) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `ten_slider`, `hinh_slider`, `url`, `id_sp`, `trang_thai`, `created_at`, `updated_at`) VALUES
(2, '1200x400-Header-S20-Blog2-v1', '1200x400-Header-S20-Blog2-v1', '1200x400-Header-S20-Blog2-v1', 21, 1, NULL, NULL),
(1, 'iphone-12-pre-order', 'iphone-12-pre-order', 'iphone-12-pre-order', 8, 1, NULL, NULL),
(6, 'Realme-X3-Super-Zoom-1200', 'Realme-X3-Super-Zoom-1200', 'Realme-X3-Super-Zoom-1200', 12, 1, NULL, NULL),
(7, 'Samsung-Galaxy-S9-SunRise-Gold1', 'Samsung-Galaxy-S9-SunRise-Gold1', 'Samsung-Galaxy-S9-SunRise-Gold1', 5, 1, NULL, NULL),
(10, 'dk_banner_2_2_1200x', 'dk_banner_2_2_1200x', 'dk_banner_2_2_1200x', 16, 1, NULL, NULL),
(11, 'oppo-a74', 'oppo-a74', 'oppo-a74', 15, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

DROP TABLE IF EXISTS `tin_tuc`;
CREATE TABLE IF NOT EXISTS `tin_tuc` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tom_tat` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieu_de_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieu_de_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieu_de_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chi_tiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chi_tiet_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chi_tiet_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chi_tiet_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tac_gia` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhan_vien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `tieu_de`, `tom_tat`, `tieu_de_1`, `tieu_de_2`, `tieu_de_3`, `chi_tiet`, `chi_tiet_2`, `chi_tiet_3`, `chi_tiet_4`, `tac_gia`, `nhan_vien`, `hinh`, `hinh_2`, `hinh_3`, `hinh_4`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'Loạt điện thoại Vsmart bộ nhớ trong lớn giá đã rẻ còn giảm xịn sò mừng sinh nhật, chỉ từ 2.6 triệu đồng', 'Vsmart Active 3 sẽ làm cho bạn mê mẩn ngay cái nhìn đầu tiên nhờ có thiết kế mặt lưng hiệu ứng gradient thời thượng, lại có nhiều sự lựa chọn về màu sắc: Xanh lục bảo, Xanh sapphire, Đen thạch anh và Tím ngọc. Cảm biến vân tay tiện lợi nhờ tích hợp ở mặt lưng, độ bảo mật cao dễ dàng sử dụng chỉ với một tay.\r\n\r\nĐược trang bị bộ 3 camera chuyên nghiệp với camera chính lên đến 48 MP giúp cho ra hình ảnh sắc nét. Máy còn sở hữu vi xử lý MediaTek Helio P60 đem lại hiệu năng ổn định, bộ nhớ trong lớn 64 GB cho khả năng lưu trữ thoải mái.', 'Loạt điện thoại Vsmart bộ nhớ trong lớn giá đã rẻ còn giảm xịn sò mừng sinh nhật, chỉ từ 2.6 triệu đồng', 'Vsmart Active 3 (6GB/64GB): Giảm 600.000 đồng ', 'Vsmart Joy 4 (6GB/64GB): Giảm 400.000 đồng', '<p>Đường n&acirc;u chia th&agrave;nh hai loại ch&iacute;nh l&agrave; đường n&acirc;u tự nhi&ecirc;n v&agrave; thương mại. Đường n&acirc;u tự nhi&ecirc;n khi sản xuất sẽ giữ lại một phần mật rỉ đường ở giai đoạn cuối trong qu&aacute; tr&igrave;nh luyện. Đường n&acirc;u thương mại được sản xuất bằng c&aacute;ch sử dụng đường trắng v&agrave; th&ecirc;m một lượng mật đường v&agrave;o để nhuộm m&agrave;u. Tỷ lệ mật đường được sử dụng chứa khoảng 10% tổng trọng lượng đường n&acirc;u.</p>\r\n\r\n<p>Y học cổ truyền cho rằng đường n&acirc;u c&oacute; t&iacute;nh &ocirc;n vị ngọt, gi&uacute;p bổ m&aacute;u, chống lạnh, nu&ocirc;i dưỡng cơ thể, c&oacute; t&aacute;c dụng tốt đối với gan, l&aacute; l&aacute;ch, dạ d&agrave;y. Đường n&acirc;u cũng chứa lượng lớn sắt, hỗ trợ việc đưa kh&iacute; oxy đến c&aacute;c cơ quan.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8081/ThucAnNhanh/public/hinh_CT_tin_tuc_san_pham/images/duong_nau.jpg\" style=\"height:440px; width:660px\" /></p>\r\n\r\n<p><span style=\"font-size:12px\">Sữa tươi kết hợp đường n&acirc;u nhiều dinh dưỡng</span></p>\r\n\r\n<p>Trong đường n&acirc;u c&oacute; th&agrave;nh phần tương tự như đường trắng, tuy nhi&ecirc;n c&oacute; gi&aacute; trị calo thấp hơn: 100 gram đường chỉ c&oacute; khoảng 373 calo. Ngo&agrave;i ra, c&aacute;c kho&aacute;ng chất được lấy từ mật đường như canxi, magie, kali v&agrave; sắt. Một muỗng canh mật đường c&oacute; thể cung cấp 20% gi&aacute; trị dinh dưỡng h&agrave;ng ng&agrave;y của mỗi người.</p>\r\n\r\n<p>Đường n&acirc;u kh&ocirc;ng phải l&agrave; đường v&agrave;ng, m&agrave;u sắc của ch&uacute;ng được quyết định bởi lượng mật rỉ. Từng loại đường sẽ c&oacute; lượng kho&aacute;ng chất kh&aacute;c nhau, t&ugrave;y theo nhu cầu của người d&ugrave;ng m&agrave; lựa chọn loại đường th&iacute;ch hợp.</p>\r\n\r\n<p>Nắm bắt những lợi &iacute;ch từ đường n&acirc;u v&agrave; nhu cầu sử dụng c&aacute;c sản phẩm c&oacute; lợi cho sức khoẻ của thực kh&aacute;ch, Gong Cha mang đến d&ograve;ng sản phẩm kết hợp c&ugrave;ng tr&agrave; đen truyền thống, sữa tươi v&agrave; tr&acirc;n ch&acirc;u mang t&ecirc;n gọi: Sữa tươi Okinawa; Okinawa Latte; tr&agrave; sữa Okinawa với 2 mức đường để thực kh&aacute;ch tự do lựa chọn l&agrave; c&oacute; đường hoặc &iacute;t đường.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8081/ThucAnNhanh/public/hinh_CT_tin_tuc_san_pham/images/duong_nau2.jpg\" style=\"height:660px; width:660px\" /></p>\r\n\r\n<p>Sữa tươi Okinawa l&agrave; sự kết hợp đan xen giữa lớp đường n&acirc;u được nấu th&agrave;nh dạng syrup ướp c&ugrave;ng tr&acirc;n ch&acirc;u đen nằm ở dưới đ&aacute;y ly, sau đ&oacute; đổ sữa tươi tr&ecirc;n mặt. C&aacute;ch thưởng thức cũng tuỳ v&agrave;o sở th&iacute;ch của kh&aacute;ch h&agrave;ng. Nếu l&agrave; fan hảo ngọt, bạn sẽ kh&ocirc;ng bỏ qua lớp đường ph&iacute;a dưới c&ugrave;ng tr&acirc;n ch&acirc;u để cảm nhận được hết mật đường tự nhi&ecirc;n với lớp tr&acirc;n ch&acirc;u dẻo dai. Nếu l&agrave; fan th&iacute;ch vị ngọt nhẹ, thanh m&aacute;t th&igrave; chỉ cần khuấy đều để cảm nhận lớp sữa tươi c&ugrave;ng hương thơm mật đường thoang thoảng đan xen trong vị sữa.</p>\r\n\r\n<p>Okinawa Latte d&agrave;nh cho những thực kh&aacute;ch vừa muốn thưởng thức tr&agrave; sữa, vừa muốn giữ d&aacute;ng, đẹp da. Sữa tươi v&agrave; tr&agrave; đen được kết hợp với vị thơm của đường mật mang lại vị gi&aacute;c mới lạ, l&agrave; lựa chọn cho kh&aacute;ch h&agrave;ng y&ecirc;u th&iacute;ch sự tươi m&aacute;t, nhẹ nh&agrave;ng lại kh&ocirc;ng qu&aacute; đậm đ&agrave; của tr&agrave;.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8081/ThucAnNhanh/public/hinh_CT_tin_tuc_san_pham/images/duong_nau3.jpg\" style=\"height:660px; width:660px\" /></p>\r\n\r\n<p><span style=\"font-size:12px\">Tr&agrave; sữa Okinawa l&agrave; sự kết hợp của tr&agrave; sữa v&agrave; đường đen</span></p>\r\n\r\n<p>Tr&agrave; sữa Okinawa lại d&agrave;nh cho fan tr&agrave; sữa truyền thống của Gong Cha. Thức uống b&eacute;o ngậy c&ugrave;ng lớp tr&acirc;n ch&acirc;u dẻo dai, cộng hưởng c&ugrave;ng vị đường n&acirc;u thay v&igrave; đường th&ocirc;ng thường. Tr&agrave; sữa sẽ thơm v&agrave; ngậy hơn nhiều nhưng vẫn c&oacute; vị ngọt dịu, thanh m&aacute;t.</p>\r\n\r\n<p>Yếu tố sức khoẻ trong những năm gần đ&acirc;y được quan t&acirc;m l&agrave;m tiền đề để Gong Cha chọn lựa sản phẩm c&oacute; nhiều gi&aacute; trị dinh dưỡng v&agrave; an to&agrave;n đến người ti&ecirc;u d&ugrave;ng. Lựa chọn mức đường cho thức uống cũng kh&ocirc;ng c&ograve;n l&agrave; nỗi bận t&acirc;m của bạn khi thưởng thức một ly tr&agrave; sữa nữa. Thay v&agrave;o đ&oacute;, Gong Cha đ&atilde; c&oacute; sẵn trọn bộ m&oacute;n thức uống mang đến đa dạng lựa chọn.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8081/ThucAnNhanh/public/hinh_CT_tin_tuc_san_pham/images/duong_nau4.jpg\" style=\"height:660px; width:660px\" /></p>', 'Mừng tuổi mới khuyến mãi tưng bừng, Thế Giới Di Động giảm sâu điện thoại Vsmart giá đã rẻ nay lại rẻ hơn chỉ từ 2.6 triệu đồng. Sắm smartphone xịn có bộ nhớ trong lớn với giá rẻ bèo cơ hội đã đến, bắt liền tay chốt đơn ngay nhé bạn ơi.  Thời gian khuyến mãi: đến hết 15/07/2021.  Lưu ý: Khuyến mãi có thể kết thúc sớm hơn khi hết số lượng.', 'Vsmart Active 3 sẽ làm cho bạn mê mẩn ngay cái nhìn đầu tiên nhờ có thiết kế mặt lưng hiệu ứng gradient thời thượng, lại có nhiều sự lựa chọn về màu sắc: Xanh lục bảo, Xanh sapphire, Đen thạch anh và Tím ngọc. Cảm biến vân tay tiện lợi nhờ tích hợp ở mặt lưng, độ bảo mật cao dễ dàng sử dụng chỉ với một tay.  Được trang bị bộ 3 camera chuyên nghiệp với camera chính lên đến 48 MP giúp cho ra hình ảnh sắc nét. Máy còn sở hữu vi xử lý MediaTek Helio P60 đem lại hiệu năng ổn định, bộ nhớ trong lớn 64 GB cho khả năng lưu trữ thoải mái.', 'Với vi xử lý Snapdragon 665, Vsmart Joy 4 mang đến hiệu năng mạnh mẽ kết hợp chip đồ họa GPU Adreno 610 cho chất lượng đồ hoạ chân thực. Không phải lo lắng về dung lượng lưu trữ nhờ có bộ nhớ trong lên đến 64 GB.  Về thiết kế, phần lưng được làm nhám chống bám vân tay và hiệu ứng màu gradient nổi bật. Camera selfie dành cho các tín đồ \'sống ảo\' với độ phân giải 13 MP có khả năng lấy nét chính xác, kèm thuật toán Beauty AI giúp làm đẹp thông minh.', 'https://www.thegioididong.com/tin-tuc/dien-thoai-vsmart-bo-nho-trong-lon-gia-da-re-con-giam-xin-so-1365701', 'Duong Minh Hoang', 'tin_tuc_1', 'vsmart-active-3-6gb-1', 'vsmart-joy-4-6gb-214120-014110', '', 1, '2018-12-29 06:23:03', '2018-12-29 06:23:03'),
(2, 'Xiaomi Mi 10i và Redmi K20 Pro cuối cùng đã được cập nhật MIUI 12.5, kiểm tra ngay lên đời cho nóng nhé', 'Xiaomi đã phát hành MIUI 12.5 cho các dòng điện thoại đủ điều kiện cập nhật trong vài tháng qua. Tuy nhiên, tại Ấn Độ thì bản cập nhật được tung ra khá chậm, phải đến gần đây mẫu smartphone cao cấp nhất là Mi 11 Ultra mới được lên phiên bản này. Cũng như hiện tại hãng đã bắt đầu tung ra MIUI 12.5 cho Mi 10i và Redmi K20 Pro.\r\n\r\nĐược biết, Xiaomi Mi 10i chính là phiên bản dành cho Ấn Độ của Redmi Note 9 Pro 5G và Mi 10T Lite. Hai phiên bản này trước đó đã nhận được MIUI 12.5 vào tháng 5 và tháng 6.', 'Tin vui: Xiaomi Mi 10i và Redmi K20 Pro cuối cùng đã được cập nhật MIUI 12.5, kiểm tra ngay lên đời cho nóng nhé', '', '', 'Xiaomi đã phát hành MIUI 12.5 cho các dòng điện thoại đủ điều kiện cập nhật trong vài tháng qua. Tuy nhiên, tại Ấn Độ thì bản cập nhật được tung ra khá chậm, phải đến gần đây mẫu smartphone cao cấp nhất là Mi 11 Ultra mới được lên phiên bản này. Cũng như hiện tại hãng đã bắt đầu tung ra MIUI 12.5 cho Mi 10i và Redmi K20 Pro.\r\n\r\nĐược biết, Xiaomi Mi 10i chính là phiên bản dành cho Ấn Độ của Redmi Note 9 Pro 5G và Mi 10T Lite. Hai phiên bản này trước đó đã nhận được MIUI 12.5 vào tháng 5 và tháng 6.\r\n\r\nGiờ đây, Mi 10i cũng đã nhận được bản cập nhật tương tự với số bản dựng V12.5.1.0.RJSINXM, dự kiến sẽ được phát hành theo từng đợt.\r\nXiaomi Mi 10i và Redmi K20 Pro cuối cùng đã được cập nhật MIUI 12.5\r\nRedmi K20 Pro (Nguồn: Gizmochina)\r\n\r\nMặt khác, bản cập nhật của Redmi K20 Pro có số bản dựng V12.5.1.0.RFKINXM, mang đến giao diện MIUI 12.5 mới cùng hệ điều hành Android 11. Cũng theo truyền thống, Xiaomi sẽ phát hành từng đợt cho người dùng.\r\n\r\nNgoài ra, Xiaomi hiện đang phát triển và sẽ sớm ra mắt MIUI 13, hai mẫu điện thoại Xiaomi Mi 10i và Redmi K20 Pro dự kiến cũng sẽ được lên đời phiên bản hệ điều hành mới sắp tới.', 'Xiaomi đã phát hành MIUI 12.5 cho các dòng điện thoại đủ điều kiện cập nhật trong vài tháng qua. Tuy nhiên, tại Ấn Độ thì bản cập nhật được tung ra khá chậm, phải đến gần đây mẫu smartphone cao cấp nhất là Mi 11 Ultra mới được lên phiên bản này. Cũng như hiện tại hãng đã bắt đầu tung ra MIUI 12.5 cho Mi 10i và Redmi K20 Pro.  Được biết, Xiaomi Mi 10i chính là phiên bản dành cho Ấn Độ của Redmi Note 9 Pro 5G và Mi 10T Lite. Hai phiên bản này trước đó đã nhận được MIUI 12.5 vào tháng 5 và tháng 6.  Giờ đây, Mi 10i cũng đã nhận được bản cập nhật tương tự với số bản dựng V12.5.1.0.RJSINXM, dự kiến sẽ được phát hành theo từng đợt.', 'Mặt khác, bản cập nhật của Redmi K20 Pro có số bản dựng V12.5.1.0.RFKINXM, mang đến giao diện MIUI 12.5 mới cùng hệ điều hành Android 11. Cũng theo truyền thống, Xiaomi sẽ phát hành từng đợt cho người dùng.  Ngoài ra, Xiaomi hiện đang phát triển và sẽ sớm ra mắt MIUI 13, hai mẫu điện thoại Xiaomi Mi 10i và Redmi K20 Pro dự kiến cũng sẽ được lên đời phiên bản hệ điều hành mới sắp tới.  Các bạn cảm thấy thích tính năng nào nhất ở trên MIUI 12.5?   Nguồn: Gizmochina', '', 'https://www.thegioididong.com/tin-tuc/xiaomi-mi-10i-va-redmi-k20-pro-da-duoc-cap-nhat-miui-12-5-1367322', 'Duong Minh Hoang', 'tin_tuc_2', 'xiaomi-mi-10i-185621-015613', '', '', 1, '2018-12-29 06:28:55', '2018-12-29 06:28:55'),
(3, 'Sự hợp tác giữa MSI với công ty âm thanh Onkyo đã mang lại một sản phẩm gaming tương đối thú vị, chiếc tai nghe MSI Immerse GH61.', 'Immerse mang đến sự thoải mái dựa trên sở thích cá nhân của bạn – nó đi kèm với Da Protein (một cái tên ưa thích của chất liệu giả da) rất thích hợp để sử dụng lâu dài và một chiếc cốc tai bằng vải mềm hơn và thoáng khí hơn. Bạn có thể hoán đổi giữa bất kỳ loại nào bạn thích và vì đó là tai nghe over-ear nên nó nằm gọn trong tai bạn mà không gây đau hay khó chịu. Dây đeo trên những chiếc tai nghe này chắc chắn là dày và có thể điều chỉnh được, vì vậy nó sẽ đẹp và phù hợp với bất kỳ ai. ', 'Tai nghe MSI Immerse GH61: Sự kết hợp giữa gaming và Onkyo sẽ như thế nào?', '', '', 'Ngoại hình và sự thoải mái khi đeo\r\n\r\nImmerse mang đến sự thoải mái dựa trên sở thích cá nhân của bạn – nó đi kèm với Da Protein (một cái tên ưa thích của chất liệu giả da) rất thích hợp để sử dụng lâu dài và một chiếc cốc tai bằng vải mềm hơn và thoáng khí hơn. Bạn có thể hoán đổi giữa bất kỳ loại nào bạn thích và vì đó là tai nghe over-ear nên nó nằm gọn trong tai bạn mà không gây đau hay khó chịu. Dây đeo trên những chiếc tai nghe này chắc chắn là dày và có thể điều chỉnh được, vì vậy nó sẽ đẹp và phù hợp với bất kỳ ai. Phần đệm trên đầu của dây đeo rất quan trọng đối với tôi vì đây là nơi mà nhiều nhà sản xuất có xu hướng rẻ tiền và khiến mọi thứ trở nên khó chịu, nhưng không phải vậy ở đây vì GH61 có một chiếc băng đô kết cấu “da protein” đẹp mắt mà không đào sâu vào đầu sau khi sử dụng kéo dài.\r\n\r\nĐiều quan trọng là tai nghe phải tạo ra một lớp đệm tốt để ngăn chặn rò rỉ âm thanh và toàn bộ thiết kế được hoàn thiện tốt để rò rỉ âm thanh không nghiêm trọng và chỉ quá nhẹ. Vì vậy, bạn có thể có người khác trong phòng khi bạn chơi trò chơi và họ sẽ có thể xem và nghe nội dung yêu thích của họ trên màn hình lớn mà không bị làm phiền. MSI Immerse chắc chắn sẽ trở thành tai nghe chơi game thoải mái nhất mà tôi đã sử dụng cho đến nay.\r\n\r\nTính năng và Đặc điểm kỹ thuật\r\n\r\nCũng giống như bất kỳ Thiết bị ngoại vi chơi game nào khác, IMMERSE GH61 đi kèm với bộ tính năng riêng:\r\n\r\n    Người dùng có thể chọn kết nối trực tiếp qua Jack 3.5mm hoặc sử dụng DAC và bộ điều khiển đi kèm thông qua Kết nối USB.\r\n    Trang bị micrô có thể thu vào chất lượng tốt để ghi lại giọng nói tốt hơn qua các phiên chơi game.\r\n    Đi kèm với ESS Sabre DAC được tích hợp vào Bộ điều khiển USB và trên cùng là hỗ trợ Nahimic cho âm thanh không gian 3D.\r\n\r\nChất lượng âm thanh\r\n\r\nTai nghe này có trình điều khiển Neodymium 40mm của Onkyo. Đáng ngạc nhiên là không có màu sắc với trình điều khiển – âm trầm không mạnh, thay vì nhiều hơn ở các mặt phẳng hơn. Âm thấp, trung được xử lý hoàn hảo và âm cao có thể hơi quá sắc nét nhưng ở một điểm âm lượng ngọt ngào, âm thanh rất đẹp. Sự rõ ràng trên trình điều khiển là một hiện tượng và DAC thực sự cung cấp một số cải tiến nhất định về âm thanh, điều này đặc biệt tốt và phần lớn, tôi nghi ngờ rằng nó sẽ có bất kỳ sự chú ý nào đối với người tiêu dùng nói chung. Tai nghe cung cấp khả năng dàn dựng tốt và tạo ra các nốt tốt hơn, đặc biệt là khi thử một số bài hát qua tai nghe.\r\n\r\nNó hỗ trợ Hi-Res Virtual 7.1 – dựa trên ảo được chuyển đổi thông qua một phần mềm cũng sẽ xảy ra để điều khiển Nahimic cho Tai nghe. Đáng ngạc nhiên là hoạt động tốt hơn tôi dự đoán. Trải nghiệm âm thanh không gian tốt trong các trò chơi có yêu cầu âm thanh cao như Division 2 và Ghostpoint. Nhưng một lần nữa, nó vẫn không chân thực như những gì bạn có được trên trải nghiệm âm thanh vòm 7.1 kênh thích hợp và giống như trước đây, tôi luôn có mối quan hệ yêu ghét với phương pháp tiếp cận kỹ thuật âm thanh vòm ảo của Nahimic và đó là một thành công tuyệt đối và cô. Đối thủ – HyperX với Audeze đã làm tốt hơn trong việc cung cấp trải nghiệm không gian tốt hơn và Âm thanh vòm 7.1 kênh ảo tốt hơn nhiều nhờ các trình điều khiển từ phẳng và khoa học âm thanh Waves Nx.\r\n\r\nLời kết\r\n\r\nMSI Immerse GH61 cố gắng mô phỏng trải nghiệm âm thanh tốt hơn với sự trợ giúp của Onkyo cho các trình điều khiển, Sabre cho DAC và Nahimic cho các cải tiến phần mềm. Cá nhân tôi, phương pháp tiếp cận phần mềm Nahimic cho âm thanh vẫn không gắn bó với tôi vì toàn bộ trải nghiệm tìm kiếm âm thanh vẫn còn thô và khiến trải nghiệm với DAC hơi quá chua. Nhưng điều đó nói lên rằng, nếu bạn quên phần mềm Nahimic và sử dụng GH61 có hoặc không có DAC ESS Sabre, bạn đang xem xét một chiếc tai nghe tuyệt vời dành cho người sáng tạo và chơi game với sự thoải mái tốt nhất có thể có được từ Tai nghe chơi game.\r\n\r\nNó trông không hào nhoáng chút nào, điều này chắc chắn làm cho nó trở thành một chiếc tai nghe tuyệt vời khi nhìn trên giá đỡ tai nghe trên bàn của bạn.', 'Ngoại hình và sự thoải mái khi đeo  Immerse mang đến sự thoải mái dựa trên sở thích cá nhân của bạn – nó đi kèm với Da Protein (một cái tên ưa thích của chất liệu giả da) rất thích hợp để sử dụng lâu dài và một chiếc cốc tai bằng vải mềm hơn và thoáng khí hơn. Bạn có thể hoán đổi giữa bất kỳ loại nào bạn thích và vì đó là tai nghe over-ear nên nó nằm gọn trong tai bạn mà không gây đau hay khó chịu. Dây đeo trên những chiếc tai nghe này chắc chắn là dày và có thể điều chỉnh được, vì vậy nó sẽ đẹp và phù hợp với bất kỳ ai. Phần đệm trên đầu của dây đeo rất quan trọng đối với tôi vì đây là nơi mà nhiều nhà sản xuất có xu hướng rẻ tiền và khiến mọi thứ trở nên khó chịu, nhưng không phải vậy ở đây vì GH61 có một chiếc băng đô kết cấu “da protein” đẹp mắt mà không đào sâu vào đầu sau khi sử dụng kéo dài.  Điều quan trọng là tai nghe phải tạo ra một lớp đệm tốt để ngăn chặn rò rỉ âm thanh và toàn bộ thiết kế được hoàn thiện tốt để rò rỉ âm thanh không nghiêm trọng và chỉ quá nhẹ. Vì vậy, bạn có thể có người khác trong phòng khi bạn chơi trò chơi và họ sẽ có thể xem và nghe nội dung yêu thích của họ trên màn hình lớn mà không bị làm phiền. MSI Immerse chắc chắn sẽ trở thành tai nghe chơi game thoải mái nhất mà tôi đã sử dụng cho đến nay.  Tính năng và Đặc điểm kỹ thuật  Cũng giống như bất kỳ Thiết bị ngoại vi chơi game nào khác, IMMERSE GH61 đi kèm với bộ tính năng riêng:      Người dùng có thể chọn kết nối trực tiếp qua Jack 3.5mm hoặc sử dụng DAC và bộ điều khiển đi kèm thông qua Kết nối USB.     Trang bị micrô có thể thu vào chất lượng tốt để ghi lại giọng nói tốt hơn qua các phiên chơi game.     Đi kèm với ESS Sabre DAC được tích hợp vào Bộ điều khiển USB và trên cùng là hỗ trợ Nahimic cho âm thanh không gian 3D.  Chất lượng âm thanh  Tai nghe này có trình điều khiển Neodymium 40mm của Onkyo. Đáng ngạc nhiên là không có màu sắc với trình điều khiển – âm trầm không mạnh, thay vì nhiều hơn ở các mặt phẳng hơn. Âm thấp, trung được xử lý hoàn hảo và âm cao có thể hơi quá sắc nét nhưng ở một điểm âm lượng ngọt ngào, âm thanh rất đẹp. Sự rõ ràng trên trình điều khiển là một hiện tượng và DAC thực sự cung cấp một số cải tiến nhất định về âm thanh, điều này đặc biệt tốt và phần lớn, tôi nghi ngờ rằng nó sẽ có bất kỳ sự chú ý nào đối với người tiêu dùng nói chung. Tai nghe cung cấp khả năng dàn dựng tốt và tạo ra các nốt tốt hơn, đặc biệt là khi thử một số bài hát qua tai nghe.  ', 'Nó hỗ trợ Hi-Res Virtual 7.1 – dựa trên ảo được chuyển đổi thông qua một phần mềm cũng sẽ xảy ra để điều khiển Nahimic cho Tai nghe. Đáng ngạc nhiên là hoạt động tốt hơn tôi dự đoán. Trải nghiệm âm thanh không gian tốt trong các trò chơi có yêu cầu âm thanh cao như Division 2 và Ghostpoint. Nhưng một lần nữa, nó vẫn không chân thực như những gì bạn có được trên trải nghiệm âm thanh vòm 7.1 kênh thích hợp và giống như trước đây, tôi luôn có mối quan hệ yêu ghét với phương pháp tiếp cận kỹ thuật âm thanh vòm ảo của Nahimic và đó là một thành công tuyệt đối và cô. Đối thủ – HyperX với Audeze đã làm tốt hơn trong việc cung cấp trải nghiệm không gian tốt hơn và Âm thanh vòm 7.1 kênh ảo tốt hơn nhiều nhờ các trình điều khiển từ phẳng và khoa học âm thanh Waves Nx.  Lời kết  MSI Immerse GH61 cố gắng mô phỏng trải nghiệm âm thanh tốt hơn với sự trợ giúp của Onkyo cho các trình điều khiển, Sabre cho DAC và Nahimic cho các cải tiến phần mềm. Cá nhân tôi, phương pháp tiếp cận phần mềm Nahimic cho âm thanh vẫn không gắn bó với tôi vì toàn bộ trải nghiệm tìm kiếm âm thanh vẫn còn thô và khiến trải nghiệm với DAC hơi quá chua. Nhưng điều đó nói lên rằng, nếu bạn quên phần mềm Nahimic và sử dụng GH61 có hoặc không có DAC ESS Sabre, bạn đang xem xét một chiếc tai nghe tuyệt vời dành cho người sáng tạo và chơi game với sự thoải mái tốt nhất có thể có được từ Tai nghe chơi game.  Nó trông không hào nhoáng chút nào, điều này chắc chắn làm cho nó trở thành một chiếc tai nghe tuyệt vời khi nhìn trên giá đỡ tai nghe trên bàn của bạn.', '', 'https://websosanh.vn/tin-tuc/tai-nghe-msi-immerse-gh61-su-ket-hop-giua-c75-20210701112657232.htm', 'Duong Minh Hoang', 'tin_tuc_3', '38tkbczl4g9ke', '', '', 1, '2018-12-29 20:09:35', '2018-12-29 20:09:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `member` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `address1` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address3` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address4` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cong_ty` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_thich` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `is_admin`, `member`, `first_name`, `last_name`, `gioi_tinh`, `ngay_sinh`, `address1`, `address2`, `address3`, `address4`, `cong_ty`, `so_thich`, `phone`, `email`, `token`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 0, 'Customer', 'hà', 'hậu', 'nam', '2022-02-10', '1234 Nguyễn Thái Bình', 'Phường 4', 'Tân Bình', 'Tp.HCM', NULL, NULL, '0986217897', 'hau123@gmail.com', '', NULL, '$2y$10$bVN07jFgpCVFKjKDaBXYgumpPlh.XKRECGZ8HY1ALSnbL6.Jtx.RC', NULL, NULL, NULL),
(18, 0, 'Member', 'ha', 'hau', 'nam', '2022-02-10', '1234 Nguyễn Thái Bình', 'Phường 4', 'Tân Bình', 'Tp.HCM', NULL, NULL, '0986217897', 'hau2@gmail.com', NULL, NULL, '$2y$10$mWHg.3FU6feTpfvOg.EKZerz5S8av25n70eIoREQ3wcRQOP0A0DoS', NULL, NULL, NULL),
(20, 1, 'Customer', 'ha', 'hau', 'nam', '2022-02-10', '1234 Nguyễn Thái Bình', 'Phường 4', 'Tân Bình', 'Tp.HCM', NULL, NULL, '0986217897', '123@gmail.com', '', NULL, '$2y$10$qaCZXAZ8qD0c78ukwsYILephaB0M3mP7PZkG3QbxhkvB0pYogM5eW', 'tYk1XpoUCkF2gPThNkygXLrZHG7tbbCJBVVGkgmv6tKoCRyFgCrLFGFdrGY7', NULL, NULL),
(21, 0, 'Customer', 'hà', 'hậu', 'nam', '2022-02-10', '1234 Nguyễn Thái Bình', 'Phường 4', 'Tân Bình', '1', NULL, NULL, '1234567890', '1@gmail.com', '', NULL, '$2y$10$P239YxczFgcaaRGk6rbiqO3yHWBnuKon9pbeP.uiqLZ819WQqhsmS', NULL, NULL, NULL),
(22, 1, 'VIP', 'hà', 'hậu', 'nam', '2022-02-11', '1234 Nguyễn Thái Bình', 'Phường 4', 'Tân Bình', 'Tp.HCM', 'lập trình', NULL, '0986217897', 'hau261197@gmail.com', NULL, NULL, '$2y$10$J0Z91mp5ys2XGUECEiDhmeE7a98oPPghVgmNLzV05Mk1csKcpDoD6', 's7NxNooIjVJF9AD82in1i21siJUQZDk5TFVmU9maxOwTIlymu1QBgkHNBluP', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_menus`
--

DROP TABLE IF EXISTS `users_menus`;
CREATE TABLE IF NOT EXISTS `users_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `menu_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=188 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_menus`
--

INSERT INTO `users_menus` (`id`, `user_id`, `menu_id`, `created_at`, `updated_at`, `user`) VALUES
(184, 6, '26', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(185, 6, '27', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(165, 4, '29', '2019-01-17 14:22:16', '2019-01-17 14:22:16', 6),
(186, 6, '28', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(183, 6, '23', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(182, 6, '25', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(181, 6, '24', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(180, 6, '22', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(179, 6, '21', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(178, 6, '19', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(177, 6, '18', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(176, 6, '16', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(175, 6, '14', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(174, 6, '13', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(173, 6, '12', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(172, 6, '11', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(171, 6, '9', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(170, 6, '8', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(169, 6, '6', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(168, 6, '5', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(167, 6, '3', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(166, 6, '2', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6),
(150, 3, '2', '2019-01-17 14:06:46', '2019-01-17 14:06:46', 6),
(151, 3, '3', '2019-01-17 14:06:46', '2019-01-17 14:06:46', 6),
(152, 3, '5', '2019-01-17 14:06:46', '2019-01-17 14:06:46', 6),
(153, 3, '6', '2019-01-17 14:06:46', '2019-01-17 14:06:46', 6),
(154, 3, '11', '2019-01-17 14:06:46', '2019-01-17 14:06:46', 6),
(155, 3, '12', '2019-01-17 14:06:46', '2019-01-17 14:06:46', 6),
(156, 3, '25', '2019-01-17 14:06:46', '2019-01-17 14:06:46', 6),
(164, 4, '13', '2019-01-17 14:22:16', '2019-01-17 14:22:16', 6),
(163, 4, '9', '2019-01-17 14:22:16', '2019-01-17 14:22:16', 6),
(162, 4, '8', '2019-01-17 14:22:16', '2019-01-17 14:22:16', 6),
(187, 6, '29', '2019-01-18 09:37:58', '2019-01-18 09:37:58', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `y_kien_khach_hang`
--

DROP TABLE IF EXISTS `y_kien_khach_hang`;
CREATE TABLE IF NOT EXISTS `y_kien_khach_hang` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ho_ten_khach_hang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung_tra_loi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `xoa` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
