-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 05:47 AM
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
  `file_mp3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci,
  `title` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(170) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuong_trinh_phat_thanh`
--

INSERT INTO `chuong_trinh_phat_thanh` (`id`, `active`, `name`, `name_url`, `link_mp3`, `file_mp3`, `noi_dung`, `title`, `keyword`, `description`) VALUES
(1, 1, 'Chương trình PT: 13 - 02 - 2017', 'chuong-trinh-pt-13-02-2017', '', '/daituson/view/admin/Themes/kcfinder/upload/images/file_mp3/13_2_17/CT_32%2C_13_-_2_-_2017.mp3', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Chương trình PT: 13 - 02 - 2017', 'Chương trình PT: 13 - 02 - 2017', 'Chương trình PT: 13 - 02 - 2017'),
(2, 1, 'Chương trình PT: 14 - 2 - 2017', 'chuong-trinh-pt-14-2-2017', '', '/daituson/view/admin/Themes/kcfinder/upload/images/file_mp3/14_02_17/CT_33%2C_14_-_2_-_2017.mp3', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Chương trình PT: 14 - 2 - 2017', 'Chương trình PT: 14 - 2 - 2017', 'Chương trình PT: 14 - 2 - 2017'),
(3, 1, 'Chương trình PT: 15 - 2 - 2017', 'chuong-trinh-pt-15-2-2017', '', '/daituson/view/admin/Themes/kcfinder/upload/images/file_mp3/15_02_17/CT_34%2C_15_-_2_-_2017.mp3', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Chương trình PT: 15 - 2 - 2017', 'Chương trình PT: 15 - 2 - 2017', 'Chương trình PT: 15 - 2 - 2017');

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
(1, '/daituson/view/admin/Themes/kcfinder/upload/images/config/logodaituson.jpg', '/daituson/view/admin/Themes/kcfinder/upload/images/config/favicon.jpg', 'Đài phát thanh Từ Sơn | Thời sự tổng hợp', '02413.835.112', '02416.260.112', 'phatthanhtuson@gmail.com', 'Khu trung tâm TX Từ Sơn - Bắc Ninh.', 'Website Đài phát thanh TX Từ Sơn được Bộ TT và TT cấp phép hoạt động theo giấy phép số 116/GP-TTĐT từ tháng 9/2009.', 'Trưởng Đài - Nguyễn Đình Minh.', 'Phó Trưởng Đài - Nguyễn Thị Châu Loan.', '<p>\r\n	&nbsp;</p>\r\n<p align="center" font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " times="">\r\n	<strong style="margin: 0px; padding: 0px;">Từ Sơn con người - truyền thống văn hiến c&aacute;ch mạng</strong></p>\r\n<p align="center" font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " times="">\r\n	<strong style="margin: 0px; padding: 0px;">&nbsp;</strong></p>\r\n<div font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " text-align:="" times="">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Từ Sơn vốn l&agrave; v&ugrave;ng qu&ecirc; gi&agrave;u truyền thống văn hiến v&agrave; c&aacute;ch mạng, qu&ecirc; hương của Vương triều L&yacute; với Đền Đ&ocirc; một di t&iacute;ch lịch sử nổi tiếng. Trải qua bao thế hệ c&ugrave;ng những thăng trầm của lịch sử, nơi đ&acirc;y đ&atilde; sản sinh ra những con người ưu t&uacute; ti&ecirc;u biểu như: Ng&ocirc; Gia Tự - Người chiến sĩ c&aacute;ch mạng lỗi lạc của Đảng ta, Nguyễn Văn Cừ - cố Tổng b&iacute; thư, một tấm gương c&aacute;ch mạng kiệt xuất của Đảng, v&agrave; c&ograve;n nhiều khoa bảng t&agrave;i hoa, đỗ đạt cao l&agrave;m rạng rỡ qu&ecirc; hương đất nước. Người Từ Sơn lu&ocirc;n tự h&agrave;o về điều đ&oacute; v&agrave; kh&ocirc;ng ngừng phấn đấu vươn l&ecirc;n để x&acirc;y dựng qu&ecirc; hương ng&agrave;y c&agrave;ng gi&agrave;u đẹp văn minh.</div>\r\n<div font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " text-align:="" times="">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Theo c&aacute;c nguồn t&agrave;i liệu cổ v&agrave; khảo cổ học từ thời đại H&ugrave;ng Vương, v&ugrave;ng đất Từ Sơn đ&atilde; c&oacute; nhiều bộ tộc người Việt sinh sống dọc theo đ&ocirc;i bờ s&ocirc;ng Ti&ecirc;u Tương thuộc địa phận c&aacute;c phường, x&atilde; Đ&igrave;nh Bảng, Đồng Nguy&ecirc;n, Tam Sơn, Tương Giang. Thời đ&oacute;, c&aacute;c Vua H&ugrave;ng chia nước Văn Lang th&agrave;nh 15 bộ, Từ Sơn nằm trong bộ Vũ Ninh. Đời nh&agrave; Đường đ&ocirc; hộ, Từ Sơn thuộc địa phận của Long Ch&acirc;u; Thời L&ecirc; Đại H&agrave;nh (989-1005) gọi l&agrave; Cổ ph&aacute;p; Thời nh&agrave; L&yacute; (1010-1400) được đổi th&agrave;nh phủ Thi&ecirc;n Đức; Thời nh&agrave; Trần (1225-1400) được gọi l&agrave; huyện Đ&ocirc;ng Ng&agrave;n.</div>\r\n<div font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " text-align:="" times="">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dưới thời ph&aacute;p thuộc, ch&iacute;nh quyền thực d&acirc;n tiến h&agrave;nh c&aacute;c cuộc cải c&aacute;ch h&agrave;nh ch&iacute;nh, điều chỉnh địa giới ở một số địa phương. Từ Sơn l&uacute;c đ&oacute; gọi l&agrave; huyện Đ&ocirc;ng Ng&agrave;n. Năm 1925 đổi lại th&agrave;nh phủ Từ Sơn, thời kỳ n&agrave;y chỉ c&ograve;n lại 10 tổng l&agrave; Dục T&uacute;, Hạ Dương, H&agrave; Lỗ, Hội phụ, Mẫn X&aacute;, Nghĩa Lập, Ph&ugrave; Chẩn, Ph&ugrave; Lưu, Tam Sơn, Y&ecirc;n Thường v&agrave; chỉ quản l&yacute; một huyện Từ Sơn.</div>\r\n<div font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " text-align:="" times="">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sau c&aacute;ch mạng th&aacute;ng 8 năm 1945, c&aacute;c đơn vị h&agrave;nh ch&iacute;nh dưới tỉnh c&oacute; huyện, x&atilde;, b&atilde;i bỏ phủ. Thi h&agrave;nh Quyết định của Ch&iacute;nh phủ ng&agrave;y 08/6/1961 UBHC tỉnh Bắc Ninh đ&atilde; b&agrave;n giao cho UBHC th&agrave;nh phố H&agrave; Nội c&aacute;c x&atilde; thuộc huyện Từ Sơn được cắt về ngoại th&agrave;nh H&agrave; Nội đ&oacute; l&agrave; Li&ecirc;n H&agrave;, V&acirc;n H&agrave;, Mai L&acirc;m, Đ&ocirc;ng Hội, Dục T&uacute;, Đ&igrave;nh Xuy&ecirc;n, Ninh Hiệp, Tiền Phong, TT Y&ecirc;n Vi&ecirc;n, Dương H&agrave;.</div>\r\n<div font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " text-align:="" times="">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đến ng&agrave;y 14/3/1963, Hội đồng Ch&iacute;nh phủ ra Quyết định số 25/QĐ s&aacute;t nhập hai huyện Từ Sơn v&agrave; Ti&ecirc;n Du th&agrave;nh huyện Ti&ecirc;n Sơn, đồng thời 2 x&atilde; Đ&ocirc;ng Thọ v&agrave; Văn M&ocirc;n được chuyển sang huyện Y&ecirc;n Phong, 2 x&atilde; Tương Giang v&agrave; Ph&uacute; L&acirc;m được chuyển về huyện Ti&ecirc;n Sơn. Ng&agrave;y 9/8/1999 Ch&iacute;nh phủ ra Nghị định số 68/1999/NĐ-CP về việc chia huyện Ti&ecirc;n Sơn th&agrave;nh hai huyện Từ Sơn v&agrave; Ti&ecirc;n Du.</div>\r\n<div font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " text-align:="" times="">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Từ Sơn hiện nay, theo Nghị định số 01/NĐ-CP ng&agrave;y 24/9/2008 của Ch&iacute;nh phủ về việc th&agrave;nh lập thị x&atilde; Từ Sơn, tỉnh Bắc Ninh th&igrave; huyện Từ Sơn được trở th&agrave;nh thị x&atilde; Từ Sơn với 12 đơn vị h&agrave;nh ch&iacute;nh bao gồm: 7 phường, 5 x&atilde; đ&oacute; l&agrave;: phường Đồng Nguy&ecirc;n, T&acirc;n Hồng, Đ&ocirc;ng Ng&agrave;n, Đ&igrave;nh Bảng, Trang Hạ, Đồng Kỵ, Ch&acirc;u Kh&ecirc; v&agrave; c&aacute;c x&atilde; Hương Mạc, Ph&ugrave; Chẩn, Ph&ugrave; Kh&ecirc;, Tam Sơn, Tương Giang.</div>\r\n<div font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " text-align:="" times="">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thị x&atilde; Từ Sơn c&oacute; diện t&iacute;ch tự nhi&ecirc;n l&agrave; 6.133,23km2, d&acirc;n số tr&ecirc;n 164 ngh&igrave;n người. Địa b&agrave;n thị x&atilde; Từ Sơn nằm ở cửa ng&otilde; ph&iacute;a Bắc của thủ đ&ocirc; H&agrave; Nội, c&oacute; đường quốc lộ, đường sắt huyết mạch giao th&ocirc;ng Từ H&agrave; Nội l&ecirc;n bi&ecirc;n giới Lạng Sơn. Từ trung t&acirc;m thị x&atilde; c&ograve;n c&oacute; nhiều đường bộ nối liền c&aacute;c v&ugrave;ng kinh tế trong v&agrave; ngo&agrave;i tỉnh. Về địa giới h&agrave;nh ch&iacute;nh: ph&iacute;a Bắc gi&aacute;p huyện Y&ecirc;n Phong, ph&iacute;a Đ&ocirc;ng gi&aacute;p huyện Ti&ecirc;n Du, ph&iacute;a T&acirc;y v&agrave; Nam gi&aacute;p c&aacute;c huyện Đ&ocirc;ng Anh, Gia L&acirc;m (H&agrave; Nội).</div>\r\n<div font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " text-align:="" times="">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Từ Sơn c&oacute; nền kinh tế ph&aacute;t triển, ngo&agrave;i sản xuất n&ocirc;ng nghiệp Từ Sơn c&ograve;n c&oacute; rất nhiều l&agrave;ng nghề truyền thống đang ng&agrave;y c&agrave;ng duy tr&igrave; v&agrave; mở rộng như: Đồ gỗ mỹ nghệ Đồng Kỵ, Ph&ugrave; Kh&ecirc;, Hương Mạc, sản xuất sắt th&eacute;p Ch&acirc;u Kh&ecirc;, &nbsp;nghề Dệt ở Tương Giang&hellip; Từ đ&oacute; tạo đ&agrave; cho Từ Sơn chuyển dịch cơ cấu kinh tế với tỷ trọng C&ocirc;ng nghiệp - X&acirc;y dựng cơ bản chiếm 77,9%, dịch vụ 20,1%, n&ocirc;ng nghiệp c&ograve;n 2%, thu nhập b&igrave;nh qu&acirc;n đầu người hiện nay ước đạt 6.370 USD; thu ng&acirc;n s&aacute;ch nh&agrave; nước&nbsp; tr&ecirc;n 670 tỷ đồng. Từ Sơn phấn đấu đạt chuẩn n&ocirc;ng th&ocirc;n mới trong năm 2016. Đ&acirc;y l&agrave; những yếu tố quan trọng để Từ Sơn được chọn l&agrave; một trong những điểm đột ph&aacute; của chiến lược đưa tỉnh Bắc Ninh th&agrave;nh tỉnh c&ocirc;ng nghiệp theo hướng văn minh hiện đại v&agrave;o trước năm 2020./.</div>\r\n<p font-size:="" new="" style="margin: 0px; padding: 0px; color: rgb(60, 59, 59); font-family: " text-align:="" times="">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong style="margin: 0px; padding: 0px;">Đ&igrave;nh Minh</strong></p>\r\n', 'Đài phát thanh Từ Sơn | Thời sự tổng hợp', 'Đài phát thanh Từ Sơn | Thời sự tổng hợp', 'Đài phát thanh Từ Sơn | Thời sự tổng hợp');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `link_website`
--

INSERT INTO `link_website` (`id`, `name`, `link`, `vi_tri`) VALUES
(1, 'Báo Bắc Ninh Online', 'http://baobacninh.com.vn/', 1),
(2, 'Cổng thông tin điện tử Từ Sơn', 'http://tuson.bacninh.gov.vn/', 2),
(3, 'Thông tin Kinh tế Tỉnh Bắc Ninh', 'http://bacninh.gov.vn', 3),
(4, 'Bản đồ Tỉnh Bắc Ninh', 'http://bacninh.gov.vn/ban-do', 4),
(5, 'Đài PT-TH Bắc Ninh', 'http://bacninhtv.vn/', 5);

-- --------------------------------------------------------

--
-- Table structure for table `quang_cao`
--

CREATE TABLE IF NOT EXISTS `quang_cao` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top` tinyint(1) NOT NULL,
  `bottom` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vi_tri` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `active`, `name`, `img`, `top`, `bottom`, `link`, `vi_tri`) VALUES
(1, 1, '', '/daituson/view/admin/Themes/kcfinder/upload/images/quang_cao/Hinh_w_DH.jpg', 1, 0, '', 1),
(2, 1, 'Học tập', '/daituson/view/admin/Themes/kcfinder/upload/images/quang_cao/Anh_hoc_tap_2.jpg', 0, 1, '', 2),
(3, 1, '', '/daituson/view/admin/Themes/kcfinder/upload/images/quang_cao/bien-dao-la-que-huong.jpg', 0, 0, '', 3),
(4, 1, '', '/daituson/view/admin/Themes/kcfinder/upload/images/quang_cao/danhchoquangcao-daituson.gif', 0, 0, '', 4),
(5, 0, '', '/daituson/view/admin/Themes/kcfinder/upload/images/quang_cao/ngay-vi-nguoi-ngheo.jpg', 0, 0, '', 5);

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
  `file_mp4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci,
  `title` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(170) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `danhmuc_id`, `active`, `name`, `name_url`, `img`, `tin_moi`, `tin_noi_bat`, `link_video`, `file_mp4`, `noi_dung`, `title`, `keyword`, `description`, `created`) VALUES
(1, 1, 1, 'Thị ủy Từ Sơn tổ chức học tập, quán triệt Nghị quyết Đại hội lần thứ XII của Đảng', 'thi-uy-tu-son-to-chuc-hoc-tap-quan-triet-nghi-quyet-dai-hoi-lan-thu-xii-cua-dang', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, '', '/daituson/view/admin/Themes/kcfinder/upload/images/file_mp4/thoi_su_tong_hop/thi_uy_tu_son/TS160712_1.mp4', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Thị ủy Từ Sơn tổ chức học tập, quán triệt Nghị quyết Đại hội lần thứ X', 'Thị ủy Từ Sơn tổ chức học tập, quán triệt Nghị quyết Đại hội lần thứ XII của Đảng', 'Thị ủy Từ Sơn tổ chức học tập, quán triệt Nghị quyết Đại hội lần thứ XII của Đảng', '2017-05-07 05:05:47'),
(2, 1, 1, 'Hội CCB thị xã sơ kết 6 tháng đầu năm', 'hoi-ccb-thi-xa-so-ket-6-thang-dau-nam', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, '', '/daituson/view/admin/Themes/kcfinder/upload/images/file_mp4/thoi_su_tong_hop/hoi_ccb/TS160713_2.mp4', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Hội CCB thị xã sơ kết 6 tháng đầu năm', 'Hội CCB thị xã sơ kết 6 tháng đầu năm', 'Hội CCB thị xã sơ kết 6 tháng đầu năm', '2017-05-07 05:06:57'),
(3, 1, 1, 'Điểm tin thời sự tuần 29', 'diem-tin-thoi-su-tuan-29', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, 'https://www.youtube.com/embed/cUUlWQMK1nY', NULL, '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Điểm tin thời sự tuần 29', '0', 'Điểm tin thời sự tuần 29', '2017-05-06 10:13:47'),
(4, 1, 1, 'Lễ công bố quyết định bổ nhiệm Phó chánh án tòa án nhân dân thị xã', 'le-cong-bo-quyet-dinh-bo-nhiem-pho-chanh-an-toa-an-nhan-dan-thi-xa', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, 'https://www.youtube.com/embed/cUUlWQMK1nY', NULL, '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">&nbsp; Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Lễ công bố quyết định bổ nhiệm Phó chánh án tòa án nhân dân thị xã', '0', 'Lễ công bố quyết định bổ nhiệm Phó chánh án tòa án nhân dân thị xã', '2017-05-06 10:15:46'),
(5, 1, 1, 'Đình Bảng tổ chức kỳ họp thứ 2 HĐND khóa XXV', 'dinh-bang-to-chuc-ky-hop-thu-2-hdnd-khoa-xxv', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, 'https://www.youtube.com/embed/cUUlWQMK1nY', '', '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">&nbsp; Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Đình Bảng tổ chức kỳ họp thứ 2 HĐND khóa XXV', '0', 'Đình Bảng tổ chức kỳ họp thứ 2 HĐND khóa XXV', '2017-05-07 03:29:10'),
(6, 2, 1, 'Từ Sơn tổ chức công bố quyết định thành lập Trung tâm giáo dục nghề nghiệp, giáo dục thường xuyên Thị Xã', 'tu-son-to-chuc-cong-bo-quyet-dinh-thanh-lap-trung-tam-giao-duc-nghe-nghiep-giao-duc-thuong-xuyen-thi-xa', '/daituson/view/admin/Themes/kcfinder/upload/images/tintuc/TS160509_3.jpg', 1, 1, '', NULL, '<p>\r\n	<span style="color: rgb(60, 59, 59); font-family: helvetica; font-size: 15px; text-align: justify;">&nbsp; Hưởng ứng phong tr&agrave;o x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, những năm qua thị uỷ, UBND thị x&atilde; Từ Sơn đ&atilde; t&iacute;ch cực chỉ đạo c&aacute;c ng&agrave;nh đo&agrave;n thể v&agrave; c&aacute;c x&atilde;, phường tr&ecirc;n địa b&agrave;n tập trung mọi nguồn lực thực hiện c&aacute;c chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới. &nbsp;T&iacute;nh đến hết năm 2015, to&agrave;n thị x&atilde; c&oacute; 4/5 x&atilde; đ&atilde; ho&agrave;n th&agrave;nh 19/19 ti&ecirc;u ch&iacute; được c&ocirc;ng nhận đạt ti&ecirc;u chuẩn x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, &nbsp;c&ograve;n lại x&atilde; Tam Sơn l&agrave; đơn vị cuối c&ugrave;ng của thị x&atilde; chưa ho&agrave;n th&agrave;nh chỉ ti&ecirc;u. Với mục ti&ecirc;u 100% x&atilde; tr&ecirc;n địa b&agrave;n đạt ti&ecirc;u chuẩn về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới để tạo tiền đề cho Từ Sơn sớm trở th&agrave;nh đ&ocirc; thị loại 3 văn minh hiện đại v&agrave;o năm 2020, Thị x&atilde; đ&atilde; chỉ đạo x&atilde; Tam Sơn phấn đấu trong năm 2016 sẽ ho&agrave;n th&agrave;nh 19/19 chỉ ti&ecirc;u về x&acirc;y dựng n&ocirc;ng th&ocirc;n mới.</span></p>\r\n', 'Từ Sơn tổ chức công bố quyết định thành lập Trung tâm giáo dục nghề ng', '0', 'Từ Sơn tổ chức công bố quyết định thành lập Trung tâm giáo dục nghề nghiệp, giáo dục thường xuyên Thị Xã', '2017-05-07 02:54:01');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
