-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 10:35 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daituson`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(11) NOT NULL,
  `TenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `TenDangNhap`, `Full_name`, `MatKhau`) VALUES
(2, 'tungtv', 'Trần Văn Tùng', '51780454a6218a08d996716083df5d87c011adc40ca032b74605b0985bf6a4b3688ddd43bd1876ee923c0367dfd6374bf4f0db274e90bd7df95451a10dec2fa3');

-- --------------------------------------------------------

--
-- Table structure for table `chuong_trinh_phat_thanh`
--

CREATE TABLE IF NOT EXISTS `chuong_trinh_phat_thanh` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_mp3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci,
  `title` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(170) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `Id` int(11) NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tru_so` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giay_phep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trach_nhiem_chinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trach_nhiem_noi_dung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioi_thieu` text COLLATE utf8_unicode_ci,
  `title` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(170) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`Id`, `banner`, `icon`, `name`, `dien_thoai`, `fax`, `email`, `tru_so`, `giay_phep`, `trach_nhiem_chinh`, `trach_nhiem_noi_dung`, `gioi_thieu`, `title`, `keyword`, `description`) VALUES
(1, '/azbooking/view/admin/Themes/kcfinder/upload/images/cauhinh/logoazbooking.png', '/azbooking/view/admin/Themes/kcfinder/upload/images/cauhinh/favicon.png', 'CHÀO MỪNG BẠN ĐẾN VỚI MIXGROUP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHÀO MỪNG BẠN ĐẾN VỚI MIXGROUP', 'CHÀO MỪNG BẠN ĐẾN VỚI MIXGROUP', 'CHÀO MỪNG BẠN ĐẾN VỚI MIXGROUP');

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc_tin_tuc`
--

CREATE TABLE IF NOT EXISTS `danh_muc_tin_tuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vi_tri` int(11) NOT NULL,
  `title` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` int(255) DEFAULT NULL,
  `description` int(170) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danh_muc_tin_tuc`
--

INSERT INTO `danh_muc_tin_tuc` (`id`, `name`, `name_url`, `vi_tri`, `title`, `keyword`, `description`) VALUES
(1, 'Thời sự tổng hợp', 'thoi-su-tong-hop', 1, 'Thời sự tổng hợp', 0, 0),
(2, 'Chính trị', 'chinh-tri', 2, 'Chính trị', 0, 0),
(3, 'Kinh tế', 'kinh-te', 3, 'Kinh tế', 0, 0),
(4, 'Văn hóa xã hội', 'van-hoa-xa-hoi', 4, 'Văn hóa xã hội', 0, 0),
(5, 'An ninh quốc phòng', 'an-ninh-quoc-phong', 5, 'An ninh quốc phòng', 0, 0),
(6, 'Phóng sự tài liệu', 'phong-su-tai-lieu', 6, 'Phóng sự tài liệu', 0, 0),
(7, 'Hoạt động nghiệp vụ', 'hoat-dong-nghiep-vu', 7, 'Hoạt động nghiệp vụ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `link_website`
--

CREATE TABLE IF NOT EXISTS `link_website` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vi_tri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quang_cao`
--

CREATE TABLE IF NOT EXISTS `quang_cao` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` int(255) DEFAULT NULL,
  `top` tinyint(1) NOT NULL,
  `bottom` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vi_tri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tin_moi` tinyint(1) NOT NULL,
  `tin_noi_bat` tinyint(1) NOT NULL,
  `link_video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci,
  `title` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` int(255) DEFAULT NULL,
  `description` varchar(170) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `danhmuc_id`, `active`, `name`, `name_url`, `img`, `tin_moi`, `tin_noi_bat`, `link_video`, `noi_dung`, `title`, `keyword`, `description`, `created`) VALUES
(1, 1, 1, 'Thị ủy Từ Sơn tổ chức học tập, quán triệt Nghị quyết Đại hội lần thứ XII của Đảng', 'thi-uy-tu-son-to-chuc-hoc-tap-quan-triet-nghi-quyet-dai-hoi-lan-thu-xii-cua-dang', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, 'https://www.youtube.com/embed/cUUlWQMK1nY', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Thị ủy Từ Sơn tổ chức học tập, quán triệt Nghị quyết Đại hội lần thứ X', 0, 'Thị ủy Từ Sơn tổ chức học tập, quán triệt Nghị quyết Đại hội lần thứ XII của Đảng', '2017-05-06 10:08:53'),
(2, 1, 1, 'Hội CCB thị xã sơ kết 6 tháng đầu năm', 'hoi-ccb-thi-xa-so-ket-6-thang-dau-nam', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, 'https://www.youtube.com/embed/cUUlWQMK1nY', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Hội CCB thị xã sơ kết 6 tháng đầu năm', 0, 'Hội CCB thị xã sơ kết 6 tháng đầu năm', '2017-05-06 10:12:59'),
(3, 1, 1, 'Điểm tin thời sự tuần 29', 'diem-tin-thoi-su-tuan-29', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, 'https://www.youtube.com/embed/cUUlWQMK1nY', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Điểm tin thời sự tuần 29', 0, 'Điểm tin thời sự tuần 29', '2017-05-06 10:13:47'),
(4, 1, 1, 'Lễ công bố quyết định bổ nhiệm Phó chánh án tòa án nhân dân thị xã', 'le-cong-bo-quyet-dinh-bo-nhiem-pho-chanh-an-toa-an-nhan-dan-thi-xa', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, 'https://www.youtube.com/embed/cUUlWQMK1nY', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">&nbsp; Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Lễ công bố quyết định bổ nhiệm Phó chánh án tòa án nhân dân thị xã', 0, 'Lễ công bố quyết định bổ nhiệm Phó chánh án tòa án nhân dân thị xã', '2017-05-06 10:15:46'),
(5, 1, 1, 'Đình Bảng tổ chức kỳ họp thứ 2 HĐND khóa XXV', 'dinh-bang-to-chuc-ky-hop-thu-2-hdnd-khoa-xxv', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, 'https://www.youtube.com/embed/cUUlWQMK1nY', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">&nbsp; Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Đình Bảng tổ chức kỳ họp thứ 2 HĐND khóa XXV', 0, 'Đình Bảng tổ chức kỳ họp thứ 2 HĐND khóa XXV', '2017-05-06 10:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `tin_phan_anh`
--

CREATE TABLE IF NOT EXISTS `tin_phan_anh` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(170) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `chuong_trinh_phat_thanh`
--
ALTER TABLE `chuong_trinh_phat_thanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `danh_muc_tin_tuc`
--
ALTER TABLE `danh_muc_tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_website`
--
ALTER TABLE `link_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Indexes for table `tin_phan_anh`
--
ALTER TABLE `tin_phan_anh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chuong_trinh_phat_thanh`
--
ALTER TABLE `chuong_trinh_phat_thanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `danh_muc_tin_tuc`
--
ALTER TABLE `danh_muc_tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `link_website`
--
ALTER TABLE `link_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tin_phan_anh`
--
ALTER TABLE `tin_phan_anh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danh_muc_tin_tuc` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
