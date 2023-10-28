-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 28, 2023 at 10:10 AM
-- Server version: 8.1.0
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mr_trading`
--

-- --------------------------------------------------------

--
-- Table structure for table `ca_banner`
--

CREATE TABLE `ca_banner` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `links` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_type` int DEFAULT NULL,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `position` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ca_company_info`
--

CREATE TABLE `ca_company_info` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ca_contact`
--

CREATE TABLE `ca_contact` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content_mail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `subject_mail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ca_cooperate`
--

CREATE TABLE `ca_cooperate` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_cooperate`
--

INSERT INTO `ca_cooperate` (`id`, `name`, `phone`, `content`, `created_at`, `updated_at`) VALUES
(1, 'test test', '1123123123', 'http://localhost/chi-tiet-san-pham/van-buom-tay-quay-la-inox-shinyi', '2023-05-13 09:27:58', '2023-05-13 09:27:58'),
(2, 'test', '123123123', 'http://localhost/chi-tiet-san-pham/van-buom-tay-quay-la-inox-shinyi', '2023-05-13 09:28:37', '2023-05-13 09:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `ca_employees`
--

CREATE TABLE `ca_employees` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ca_general`
--

CREATE TABLE `ca_general` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_line` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_general`
--

INSERT INTO `ca_general` (`id`, `name`, `sitename`, `email`, `phone`, `hotline`, `email1`, `phone1`, `address1`, `address`, `time_line`, `social`, `seo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Đất Cảng Group', 'Đất Cảng Group', 'datcangpccc@gmail.com', '0919 000 114', NULL, 'datcangpccc2@gmail.com', '0919 000 114', '1067 - 1069 Phạm Văn Đồng, P. Hải Thành, Q. Dương Kinh, TP. Hải Phòng', '1067 - 1069 Phạm Văn Đồng, P. Hải Thành, Q. Dương Kinh, TP. Hải Phòng', NULL, '{\"facebook_social\":\"https:\\/\\/www.facebook.com\\/pcccdatcang\",\"youtube_social\":\"https:\\/\\/www.youtube.com\\/datcanggroup\",\"google_social\":null,\"skype\":null,\"nick_facebook\":\"\"}', '{\"seo_title\":\"Nhà phân phối chính thức các loại sơn chính hãng - giá tốt - uy tín | Dat Cang Group\",\"seo_description\": \"Nhà phân phối chính thức các loại sơn chính hãng - giá tốt - uy tín | Dat Cang Group\",\"seo_keyword\":null}', 'Giấy phép đăng ký số 0202184127 do Sở Kế hoạch và Đầu tư TP. Hải Phòng cấp ngày 04/01/2023', '2018-09-16 21:11:18', '2023-05-12 15:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `ca_news`
--

CREATE TABLE `ca_news` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `is_hot` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cid_cate` int UNSIGNED NOT NULL,
  `cid_user` int DEFAULT NULL,
  `seo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rating` int DEFAULT '0',
  `viewer` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_news`
--

INSERT INTO `ca_news` (`id`, `name`, `alias`, `slug`, `status`, `is_hot`, `picture`, `description`, `content`, `cid_cate`, `cid_user`, `seo`, `rating`, `viewer`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu về sản phẩm bình chữa cháy tại Đất Cảng', 'gioi-thieu-ve-san-pham-binh-chua-chay-tai-dat-cang', NULL, '1', '1', 'gioi-thieu-ve-san-pham-binh-chua-chay-tai-dat-cang.PNG', 'Bình chữa cháy là thiết bị chữa cháy ban đầu, giúp dập tắt đám cháy khi mới khởi phát, giúp ngăn chặn đám cháy lớn lan rộng gây thiệt hại lớn', '<h2>Những lợi &iacute;ch khi mua b&igrave;nh chữa ch&aacute;y tại PCCC Đất Cảng</h2>\r\n\r\n<p>&ndash; Chứng từ nhập khẩu CO/ CQ l&agrave; nguồn gốc xuất xứ của sản phẩm r&otilde; r&agrave;ng.</p>\r\n\r\n<p>&ndash; B&igrave;nh chữa ch&aacute;y được ph&ecirc; duyệt d&aacute;n tem kiểm định của cơ quan PCCC.</p>\r\n\r\n<p>&ndash; B&igrave;nh được kiểm định chất lượng bởi Cảnh s&aacute;t PCCC</p>\r\n\r\n<p>&ndash; Bảo h&agrave;nh chất lượng sản phẩm 12 th&aacute;ng.</p>\r\n\r\n<p>&ndash; Giao h&agrave;ng theo y&ecirc;u cầu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/public/upload/user_upload/images/Binhchuachay/binhcc.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"text-align:center\">B&igrave;nh chữa ch&aacute;y bột</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Ưu điểm của khi mua b&igrave;nh chữa ch&aacute;y của&nbsp;Đất Cảng</h3>\r\n\r\n<p>&ndash; C&aacute;c chất chữa ch&aacute;y được đảm bảo đ&uacute;ng chất lượng, ti&ecirc;u chuẩn quốc tế.</p>\r\n\r\n<p>&ndash; Quy chuẩn của b&igrave;nh được thiết kế đ&uacute;ng quy c&aacute;ch.</p>\r\n\r\n<p>&ndash; Khối lượng chất chữa ch&aacute;y trong b&igrave;nh đảm bảo đủ kg theo quy c&aacute;ch của từng b&igrave;nh.</p>\r\n\r\n<p>&ndash; Kiểu d&aacute;ng gọn nhẹ v&agrave; dễ d&agrave;ng sử dụng</p>\r\n\r\n<p>&ndash; Được tư vấn th&ocirc;ng tin hữu &iacute;ch của sản phẩm.</p>', 3, NULL, '{\"seo_title\":\"Gi\\u1edbi thi\\u1ec7u v\\u1ec1 s\\u1ea3n ph\\u1ea9m b\\u00ecnh ch\\u1eefa ch\\u00e1y t\\u1ea1i \\u0110\\u1ea5t C\\u1ea3ng\",\"seo_description\":\"Gi\\u1edbi thi\\u1ec7u v\\u1ec1 s\\u1ea3n ph\\u1ea9m b\\u00ecnh ch\\u1eefa ch\\u00e1y t\\u1ea1i \\u0110\\u1ea5t C\\u1ea3ng\",\"seo_keyword\":\"Gi\\u1edbi thi\\u1ec7u v\\u1ec1 s\\u1ea3n ph\\u1ea9m b\\u00ecnh ch\\u1eefa ch\\u00e1y t\\u1ea1i \\u0110\\u1ea5t C\\u1ea3ng\"}', 0, 1, '2023-05-11 16:16:52', '2023-05-11 16:24:46'),
(2, 'Tầm quan trọng của thiết bị báo cháy', 'tam-quan-trong-cua-thiet-bi-bao-chay', NULL, '1', '1', 'tam-quan-trong-cua-thiet-bi-bao-chay.PNG', 'Thiết bị báo cháy là tổ hợp các thiết bị phòng cháy chữa cháy nhằm mục đích phát hiện và cảnh báo cháy nổ tự động tức thời, giúp kiểm soát đám cháy sớm hơn.\r\nThiết bị báo cháy sẽ hoạt động liên tục trong 24 giờ và phát hiện các dấu hiệu cháy như nhiệt độ tăng cao đột ngột, có khói, lửa, khí ga… và thông báo cho con người ngăn chặn kịp thời sự cố cháy nổ.', '<h2>Nguy&ecirc;n l&yacute; hoạt động của hệ thống b&aacute;o ch&aacute;y</h2>\r\n\r\n<p>Quy tr&igrave;nh hoạt động của hệ thống b&aacute;o ch&aacute;y l&agrave; một quy tr&igrave;nh kh&eacute;p k&iacute;n: Thiết bị đầu v&agrave;o nhận t&iacute;n hiệu &ndash; truyền t&iacute;n hiệu đến trung t&acirc;m b&aacute;o ch&aacute;y &ndash; thiết bị đầu ra ph&aacute;t t&iacute;n hiệu b&aacute;o động.</p>\r\n\r\n<p>Khi c&oacute; t&iacute;n hiệu về sự ch&aacute;y như nhiệt độ gia tăng đột ngột, c&oacute; sự xuất hiện của kh&oacute;i hoặc c&aacute;c tia lửa điện &ndash; c&aacute;c thiết bị đầu v&agrave;o như đầu b&aacute;o, c&ocirc;ng tắc khẩn sẽ nhận t&iacute;n hiệu v&agrave; truyền th&ocirc;ng tin của sự cố về trung t&acirc;m b&aacute;o ch&aacute;y.</p>\r\n\r\n<p>Tại đ&acirc;y trung t&acirc;m sẽ xử l&yacute; th&ocirc;ng tin nhận được, x&aacute;c định vị tr&iacute; nơi xảy ra sự ch&aacute;y v&agrave; truyền th&ocirc;ng tin đến c&aacute;c thiết bị đầu ra (bảng hiển thị phụ, chu&ocirc;ng, c&ograve;i, đ&egrave;n).</p>\r\n\r\n<p>Chọn mua thiết bị c&oacute; xuất xứ r&otilde; r&agrave;ng, chất lượng đảm bảo</p>\r\n\r\n<p>Song song với việc lựa chọn sản phẩm ph&ugrave; hợp th&igrave; bạn cần c&acirc;n nhắc tới thương hiệu sản xuất. Bạn n&ecirc;n mua thiết bị thang, d&acirc;y tho&aacute;t hiểm chống ch&aacute;y c&oacute; nguồn gốc r&otilde; r&agrave;ng, được đảm bảo tối đa về chất lượng v&agrave; độ an to&agrave;n kỹ thuật.</p>\r\n\r\n<p>Đa phần mọi người thường chọn c&aacute;c thiết bị c&oacute; xuất xứ ch&iacute;nh h&atilde;ng từ H&agrave;n Quốc.</p>\r\n\r\n<p><img alt=\"\" src=\"/public/upload/user_upload/images/Binhchuachay/tbbc.PNG\" style=\"width:100%\" /></p>', 3, NULL, '{\"seo_title\":\"T\\u1ea7m quan tr\\u1ecdng c\\u1ee7a thi\\u1ebft b\\u1ecb b\\u00e1o ch\\u00e1y\",\"seo_description\":\"T\\u1ea7m quan tr\\u1ecdng c\\u1ee7a thi\\u1ebft b\\u1ecb b\\u00e1o ch\\u00e1y\",\"seo_keyword\":\"T\\u1ea7m quan tr\\u1ecdng c\\u1ee7a thi\\u1ebft b\\u1ecb b\\u00e1o ch\\u00e1y\"}', 0, 1, '2023-05-11 16:23:40', '2023-05-13 09:45:42'),
(3, 'ĐẤT CẢNG CHÍNH THỨC TRỞ THÀNH ĐẠI LÝ PHÂN PHỐI ĐỘC QUYỀN KHU VỰC MIỀN BẮC CỦA SƠN THẾ HỆ MỚI', 'dat-cang-chinh-thuc-tro-thanh-dai-ly-phan-phoi-doc-quyen-khu-vuc-mien-bac-cua-son-the-he-moi', NULL, '1', '1', 'dat-cang-chinh-thuc-tro-thanh-dai-ly-phan-phoi-doc-quyen-khu-vuc-mien-bac-cua-son-the-he-moi.jpg', 'Ngày 08/02 vừa qua, Công ty CP phòng cháy công nghệ cao Đất Cảng đã chính thức ký hợp đồng đại lý độc quyền tại miền Bắc với công ty TNHH sơn Thế Hệ Mới. Đây là dấu mốc quan trọng trong quá trình hợp tác giữa Sơn Thế hệ Mới và Đất Cảng group.', '<p style=\"margin-left:0in; margin-right:0in\"><em><strong><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"color:#212529\">Ng&agrave;y 08/02&nbsp;vừa qua, C&ocirc;ng ty CP ph&ograve;ng ch&aacute;y c&ocirc;ng nghệ cao Đất Cảng đ&atilde; ch&iacute;nh thức k&yacute; hợp đồng đại l&yacute; độc quyền tại miền Bắc với c&ocirc;ng ty TNHH sơn Thế Hệ Mới. Đ&acirc;y l&agrave; dấu mốc quan trọng trong qu&aacute; tr&igrave;nh hợp t&aacute;c giữa Sơn Thế hệ Mới v&agrave; Đất Cảng group.</span></span></span></span></span></span></strong></em></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><img alt=\"\" src=\"/public/upload/user_upload/images/Doi%20Tac/z4335701120855_dc00f6389a4014210ba7e513437f2ae0.jpg\" style=\"height:599px; width:800px\" /></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"color:#212529\">16 năm h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển, Thế Hệ Mới đ&atilde; trở th&agrave;nh nh&agrave; sản xuất h&agrave;ng đầu tại VN với ng&agrave;nh h&agrave;ng sơn chống ch&aacute;y, sơn c&aacute;ch nhiệt, sơn chống rỉ s&eacute;t&hellip; Sản phẩm của Sơn Thế Hệ Mới được sử dụng rộng r&atilde;i trong ng&agrave;nh c&ocirc;ng nghiệp đ&oacute;ng t&agrave;u, x&acirc;y dựng, nh&agrave; xưởng, d&acirc;n dụng&hellip;.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"color:#212529\">Ng&agrave;y 08/02/2023, C&ocirc;ng ty TNHH sơn Thế Hệ Mới v&agrave; C&ocirc;ng ty CP Ph&ograve;ng ch&aacute;y c&ocirc;ng nghệ cao Đất Cảng đ&atilde; c&oacute; buổi k&yacute; kết ch&iacute;nh thức Hợp đồng đại l&yacute; độc quyền tại miền Bắc. Theo đ&oacute;, C&ocirc;ng ty CP Ph&ograve;ng ch&aacute;y c&ocirc;ng nghệ cao Đất Cảng ch&iacute;nh thức trở th&agrave;nh đại l&yacute; ph&acirc;n phối độc quyền tại Miền Bắc (từ Thừa Thi&ecirc;n Huế trở ra) c&aacute;c sản phẩm sơn của Thế Hệ Mới.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"color:#212529\">Đ&acirc;y l&agrave; sự kiện mang t&iacute;nh đột ph&aacute; trong mối quan hệ&nbsp; hợp t&aacute;c giữa hai b&ecirc;n, g&oacute;p phần quan trọng trong qu&aacute; tr&igrave;nh ph&aacute;t triển của cả hai c&ocirc;ng ty.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"color:#212529\">Đất Cảng group v&agrave; Thế Hệ Mới cam kết c&ugrave;ng nhau nỗ lực củng cố mối quan hệ v&agrave; cố gắng mỗi ng&agrave;y để mang đến gi&aacute; trị tốt nhất cho kh&aacute;ch h&agrave;ng. </span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in\">&nbsp;</p>', 2, NULL, '{\"seo_title\":\"\\u0110\\u1ea4T C\\u1ea2NG CH\\u00cdNH TH\\u1ee8C TR\\u1ede TH\\u00c0NH \\u0110\\u1ea0I L\\u00dd PH\\u00c2N PH\\u1ed0I \\u0110\\u1ed8C QUY\\u1ec0N KHU V\\u1ef0C MI\\u1ec0N B\\u1eaeC C\\u1ee6A S\\u01a0N TH\\u1ebe H\\u1ec6 M\\u1edaI\",\"seo_description\":\"\\u0110\\u1ea4T C\\u1ea2NG CH\\u00cdNH TH\\u1ee8C TR\\u1ede TH\\u00c0NH \\u0110\\u1ea0I L\\u00dd PH\\u00c2N PH\\u1ed0I \\u0110\\u1ed8C QUY\\u1ec0N KHU V\\u1ef0C MI\\u1ec0N B\\u1eaeC C\\u1ee6A S\\u01a0N TH\\u1ebe H\\u1ec6 M\\u1edaI\",\"seo_keyword\":\"\\u0110\\u1ea4T C\\u1ea2NG CH\\u00cdNH TH\\u1ee8C TR\\u1ede TH\\u00c0NH \\u0110\\u1ea0I L\\u00dd PH\\u00c2N PH\\u1ed0I \\u0110\\u1ed8C QUY\\u1ec0N KHU V\\u1ef0C MI\\u1ec0N B\\u1eaeC C\\u1ee6A S\\u01a0N TH\\u1ebe H\\u1ec6 M\\u1edaI\"}', 0, 3, '2023-05-12 14:58:30', '2023-05-13 09:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `ca_newsletter`
--

CREATE TABLE `ca_newsletter` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_newsletter`
--

INSERT INTO `ca_newsletter` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'buitantin@gmail.com', '2023-05-12 17:07:23', '2023-05-12 17:07:23'),
(2, 'buitantiasdfn@gmail.com', '2023-05-12 17:14:03', '2023-05-12 17:14:03'),
(3, 'tesst@gmail.com', '2023-05-12 17:14:28', '2023-05-12 17:14:28'),
(4, 'buitantin187@gmail.com', '2023-05-13 08:34:06', '2023-05-13 08:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `ca_news_cate`
--

CREATE TABLE `ca_news_cate` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `orderby` int DEFAULT '1',
  `cid_parent` int DEFAULT '0',
  `seo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_news_cate`
--

INSERT INTO `ca_news_cate` (`id`, `name`, `alias`, `picture`, `description`, `status`, `orderby`, `cid_parent`, `seo`, `created_at`, `updated_at`) VALUES
(1, 'Tin tức', 'tin-tuc', NULL, NULL, '1', 1, 0, '{\"seo_title\":\"Tin t\\u1ee9c\",\"seo_description\":\"Tin t\\u1ee9c\",\"seo_keyword\":\"Tin t\\u1ee9ctin tuc\"}', '2021-03-11 15:03:48', '2021-03-11 15:03:48'),
(2, 'Tin công ty', 'tin-cong-ty', NULL, NULL, '1', 1, 1, '{\"seo_title\":\"Tin c\\u00f4ng ty\",\"seo_description\":\"Tin c\\u00f4ng ty\",\"seo_keyword\":\"Tin c\\u00f4ng tytin cong ty\"}', '2021-03-11 15:04:02', '2023-05-11 16:09:22'),
(3, 'Phòng cháy chữa cháy', 'phong-chay-chua-chay', NULL, NULL, '1', 1, 1, '{\"seo_title\":\"Ph\\u00f2ng ch\\u00e1y ch\\u1eefa ch\\u00e1y\",\"seo_description\":\"Ph\\u00f2ng ch\\u00e1y ch\\u1eefa ch\\u00e1y\",\"seo_keyword\":\"Ph\\u00f2ng ch\\u00e1y ch\\u1eefa ch\\u00e1yphong chay chua chay\"}', '2021-03-11 15:04:13', '2023-05-11 16:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `ca_page`
--

CREATE TABLE `ca_page` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ca_recuitment`
--

CREATE TABLE `ca_recuitment` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` int DEFAULT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limited` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewer` int DEFAULT '0',
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_home` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ca_seo`
--

CREATE TABLE `ca_seo` (
  `id` int NOT NULL,
  `links` varchar(800) DEFAULT NULL,
  `title` varchar(800) DEFAULT NULL,
  `description` tinytext
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `ca_seolinks`
--

CREATE TABLE `ca_seolinks` (
  `id` int NOT NULL,
  `links` varchar(139) DEFAULT NULL,
  `title` varchar(118) DEFAULT NULL,
  `description` varchar(691) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `ca_service`
--

CREATE TABLE `ca_service` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cid_cate` int DEFAULT NULL,
  `viewer` int DEFAULT '0',
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_home` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ca_service_cate`
--

CREATE TABLE `ca_service_cate` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ca_slideshow`
--

CREATE TABLE `ca_slideshow` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `links` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `position` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_slideshow`
--

INSERT INTO `ca_slideshow` (`id`, `name`, `links`, `picture`, `status`, `position`, `created_at`, `updated_at`) VALUES
(13, '「食・仕事・環境を通じて豊かな人生を創造する」', 'javascript:;', 'slide_1698484558.jpg', '1', 1, '2023-10-28 09:12:50', '2023-10-28 09:16:26'),
(14, '「食・仕事・環境を通じて豊かな人生を創造する」2', 'javascript:;', 'slide_1698484847.jpg', '1', 2, '2023-10-28 09:20:47', '2023-10-28 09:20:47'),
(15, '「食・仕事・環境を通じて豊かな人生を創造する」を合言葉に', 'javascript:;', 'slide_1698484875.jpg', '1', 3, '2023-10-28 09:21:15', '2023-10-28 09:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `ca_users`
--

CREATE TABLE `ca_users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT ' 1:Enable,2:Disable',
  `role` int NOT NULL DEFAULT '2',
  `facebook_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_users`
--

INSERT INTO `ca_users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `phone`, `address`, `status`, `role`, `facebook_id`, `google_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'datcanggroup@gmail.com', 'datcanggroup', NULL, '$2y$10$fqQnSL.y9xecGzKTiqIsn.nA/FgjoFdxY8ajSG1YL28y22afKDjsS', '0919 000 114', '1067 - 1069 Phạm Văn Đồng, Hải Phòng', '1', 1, NULL, '111728662347916896451', 'PXIVqamzCNeenqZZLm8utjcriMKg6nJFUtBuylnRrsO93eCo5K4b6nfM0htO', '2018-10-21 19:17:22', '2023-05-11 10:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_link_tags`
--

CREATE TABLE `seo_link_tags` (
  `id` int UNSIGNED NOT NULL,
  `rel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `page_id` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_meta_tags`
--

CREATE TABLE `seo_meta_tags` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `group` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `default_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_placeholder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibility` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_meta_tags`
--

INSERT INTO `seo_meta_tags` (`id`, `name`, `property`, `status`, `group`, `input_type`, `default_value`, `input_placeholder`, `input_label`, `input_info`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'author', '', 'active', '', 'text', '', '', 'Author of this article/webpage', 'Author of this article/webpage', 'page', NULL, NULL),
(2, 'generator', '', 'active', '', 'text', 'Laravel 5.5', 'e.g. Laravel 5.4', 'Website building Program', 'Name of the program you used to build this website', 'global', NULL, NULL),
(3, '', 'og:locale', 'active', 'og', 'text', 'en_US', 'e.g. en_US', 'Website Language', '', 'global', NULL, NULL),
(4, '', 'og:type', 'active', 'og', 'text', 'article|webpage', 'either article or webpage', 'Page Type', '', 'page', NULL, NULL),
(5, '', 'og:title', 'active', 'og', 'text', '', 'Page title', 'Page Title', 'If blank default page title will be used', 'page', NULL, NULL),
(6, '', 'og:description', 'active', 'og', 'text', '', '', 'Meta description', 'When share to social media this will be shown along with image.', 'page', NULL, NULL),
(7, '', 'og:url', 'active', 'og', 'text', '', 'e.g. www.example.com/page.php', 'Page Url', 'If blank page url will be used', 'page', NULL, NULL),
(8, '', 'og:site_name', 'active', 'og', 'text', '', 'e.g. MyCms', 'Site Name', 'Your site name', 'global', NULL, NULL),
(9, '', 'og:image', 'active', 'og', 'file', '', '', 'Image', 'This image will be used on social media', 'page', NULL, NULL),
(10, '', 'og:image:alt', 'active', 'og', 'text', '', '', 'Image Alt Property', ' If the page specifies an og:image it should specify og:image:alt', 'page', NULL, NULL),
(11, '', 'og:image:width', 'inactive', 'og', 'text', '', '', 'Image Width', 'This image width. Recommended by Facebook', 'page', NULL, NULL),
(12, '', 'og:image:height', 'inactive', 'og', 'text', '', '', 'Image Height', 'This image height. Recommended by Facebook', 'page', NULL, NULL),
(13, '', 'og:video', 'inactive', 'og', 'url', '', '', 'Video URL', 'Video URL.If page have any', 'page', NULL, NULL),
(14, '', 'og:audio', 'inactive', 'og', 'url', '', '', 'Audio URL', 'Audio URL. If page have any', 'page', NULL, NULL),
(15, '', 'fb:admins', 'active', 'og', 'number', '', 'Facebook numeric ID', 'Facebook Admin Id', 'Visit: https://developers.facebook.com/tools/debug/accesstoken to get your id', 'global', NULL, NULL),
(16, '', 'fb:app_id', 'active', 'og', 'number', '', 'Facebook numeric ID', 'Facebook App ID', 'Visit: https://developers.facebook.com/tools/debug/accesstoken to get your id', 'global', NULL, NULL),
(17, '', 'article:publisher', 'inactive', 'article', 'text', '', '', 'Author of this page/post', '', 'page', NULL, NULL),
(18, '', 'article:tag', 'inactive', 'og', 'text', '', 'e.g. Html, Css', ' Article Tags', ' Tag words associated with this article', 'page', NULL, NULL),
(19, '', 'article:section', 'inactive', 'article', 'text', '', '', 'Category of this article', '', 'page', NULL, NULL),
(20, '', 'article:published_time', 'inactive', 'og', 'text', '', 'e.g. 2013-09-16T19:08:47+01:00', 'Article Publication time', 'Format:  2013-09-16T19:08:47+01:00', 'page', NULL, NULL),
(21, '', 'article:modified_time', 'inactive', 'og', 'text', '', 'e.g. 2013-09-16T19:08:47+01:00', 'Article Modification time', 'Format: 2013-09-16T19:08:47+01:00', 'page', NULL, NULL),
(22, 'twitter:card', '', 'active', 'twitter', 'text', 'summary|summary_large_image|app|player', 'e.g. summary_large_image', 'Twitter Card', '', 'page', NULL, NULL),
(23, 'twitter:creator', '', 'active', 'twitter', 'text', '', 'e.g. @tuhinbepari12', 'Twitter account holder', '@username for the content creator / author.', 'global', NULL, NULL),
(24, 'twitter:site', '', 'active', 'twitter', 'text', '', 'e.g. @tuhinbepari12', 'Twitter username', '@username for the website used in the card footer.', 'global', NULL, NULL),
(25, 'twitter:description', '', 'active', 'twitter', 'text', '', '', 'Twitter description', 'If blank page description will be used', 'page', NULL, NULL),
(26, 'twitter:title', '', 'active', 'twitter', 'text', '', '', 'Twitter title', 'If blank page title will be used', 'page', NULL, NULL),
(27, 'twitter:image', '', 'active', 'twitter', 'file', '', '', 'Twitter Image', 'This image will be shown when shared to twitter', 'page', NULL, NULL),
(28, 'google-site-verification', '', 'active', 'webmaster_tools', 'text', '', 'e.g. 46CfjAikO4_0A9rp1...', 'Google Site Verification Token', 'Google Webmaster Tools', 'global', NULL, NULL),
(29, 'msvalidate.01', '', 'active', 'webmaster_tools', 'text', '', 'e.g. F69E1D33598A85...', 'Bing Site Verification Token', 'Bing Webmaster Tools', 'global', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int UNSIGNED NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `object` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_id` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `robot_index` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'noindex',
  `robot_follow` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'nofollow',
  `canonical_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_source` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_source` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `change_frequency` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'monthly',
  `priority` double NOT NULL DEFAULT '0.5',
  `schema` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `focus_keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `path`, `object`, `object_id`, `robot_index`, `robot_follow`, `canonical_url`, `title`, `title_source`, `description`, `description_source`, `created_at`, `updated_at`, `change_frequency`, `priority`, `schema`, `focus_keyword`, `tags`) VALUES
(1, 'http://vangdecor.local/vuong-tron/binh-chua-chay-bot-abc-8kgmfzl8', 'App\\Model\\Product', '1', 'index', 'follow', NULL, 'Chữa cháy tốt cho các đám cháy dạng chất rắn', NULL, 'Bình chữa cháy tốt cho các đám cháy dạng chất rắn, lỏng, khí. Bình có chất lượng tốt được nhập khẩu chính hãng Trọng lượng toàn bình 10kg Chiều cao 565mm Đường kính 130mm', NULL, '2023-05-11 14:59:57', '2023-05-11 15:35:35', 'monthly', 0.5, NULL, NULL, NULL),
(2, 'http://5ae8-58-186-75-9.ngrok-free.app/vuong-tron/van-buom-tay-quay-la-inox-shinyi', 'App\\Model\\Product', '2', NULL, NULL, NULL, 'Van Bướm Tay Quay Lá Inox Shinyi', NULL, 'Van Bướm Tay Quay Lá Inox Shinyi', NULL, '2023-05-11 15:53:22', '2023-05-11 15:53:22', 'monthly', 0.5, NULL, NULL, NULL),
(4, 'http://5ae8-58-186-75-9.ngrok-free.app/vuong-tron/van-buom-tay-gat-la-inox-shinyi', 'App\\Model\\Product', '3', NULL, NULL, NULL, 'Van Bướm Tay Gạt Lá Inox ShinYi', NULL, 'Van Bướm Tay Gạt Lá Inox ShinYi', NULL, '2023-05-11 16:00:18', '2023-05-11 16:00:18', 'monthly', 0.5, NULL, NULL, NULL),
(5, 'http://5ae8-58-186-75-9.ngrok-free.app/vuong-tron/son-lot-chong-ri-alkyd-benzo', 'App\\Model\\Product', '4', NULL, NULL, NULL, 'SƠN LÓT CHỐNG RỈ ALKYD BENZO', NULL, 'SƠN LÓT CHỐNG RỈ ALKYD BENZO', NULL, '2023-05-11 16:03:23', '2023-05-11 16:03:23', 'monthly', 0.5, NULL, NULL, NULL),
(6, 'http://5ae8-58-186-75-9.ngrok-free.app/tin-tuc/gioi-thieu-ve-san-pham-binh-chua-chay-tai-dat-cang', 'App\\Model\\News', '1', NULL, NULL, NULL, 'Giới thiệu về sản phẩm bình chữa cháy tại Đất Cảng', NULL, 'Giới thiệu về sản phẩm bình chữa cháy tại Đất Cảng', NULL, '2023-05-11 16:16:52', '2023-05-11 16:16:52', 'monthly', 0.5, NULL, NULL, NULL),
(7, 'http://5ae8-58-186-75-9.ngrok-free.app/tin-tuc/tam-quan-trong-cua-thiet-bi-bao-chay', 'App\\Model\\News', '2', NULL, NULL, NULL, 'Tầm quan trọng của thiết bị báo cháy', NULL, 'Tầm quan trọng của thiết bị báo cháy', NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40', 'monthly', 0.5, NULL, NULL, NULL),
(8, 'http://5ae8-58-186-75-9.ngrok-free.app/vuong-tron/trung-tam-bao-chay-dia-chi-2-loop-hochiki-latitude-la303h110', 'App\\Model\\Product', '5', NULL, NULL, NULL, 'Trung tâm báo cháy địa chỉ 2 loop Hochiki Latitude LA303H1-10', NULL, NULL, NULL, '2023-05-11 16:38:21', '2023-05-11 16:38:21', 'monthly', 0.5, NULL, NULL, NULL),
(10, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/voi-phun-nuoc-chua-chay-rapidrop-rd022', 'App\\Model\\Product', '7', NULL, NULL, NULL, 'VÒI PHUN NƯỚC CHỮA CHÁY RAPIDROP RD022', NULL, NULL, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27', 'monthly', 0.5, NULL, NULL, NULL),
(11, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/voi-phun-nuoc-chua-chay-rapidrop-rd023', 'App\\Model\\Product', '8', NULL, NULL, NULL, 'VÒI PHUN NƯỚC CHỮA CHÁY RAPIDROP RD023', NULL, NULL, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41', 'monthly', 0.5, NULL, NULL, NULL),
(12, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/dau-phun-nuoc-chua-chay-rapidrop-rd024', 'App\\Model\\Product', '9', NULL, NULL, NULL, 'ĐẦU PHUN NƯỚC CHỮA CHÁY RAPIDROP RD024', NULL, NULL, NULL, '2023-05-12 10:25:53', '2023-05-12 10:25:53', 'monthly', 0.5, NULL, NULL, NULL),
(13, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/binh-chua-chay-tomoken-khi-5kg', 'App\\Model\\Product', '10', NULL, NULL, NULL, 'BÌNH CHỮA CHÁY TOMOKEN KHÍ 5KG', NULL, NULL, NULL, '2023-05-12 10:32:43', '2023-05-12 10:32:43', 'monthly', 0.5, NULL, NULL, NULL),
(14, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/binh-chua-chay-tomoken-bot-abc-8kg', 'App\\Model\\Product', '11', NULL, NULL, NULL, 'Bình chữa cháy Tomoken bột ABC - 8kg', NULL, NULL, NULL, '2023-05-12 10:49:59', '2023-05-12 11:04:34', 'monthly', 0.5, NULL, NULL, '<meta name=\"robots\" content=\",\" />\n<title>Bình chữa cháy Tomoken bột ABC - 8kg</title>\n<link rel=\"canonical\" href=\"http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/binh-chua-chay-tomoken-bot-abc-8kg\" />\n<meta property=\"og:title\" content=\"Bình chữa cháy Tomoken bột ABC - 8kg\" />\n<meta property=\"og:url\" content=\"http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/binh-chua-chay-tomoken-bot-abc-8kg\" />\n<meta property=\"og:image\" content=\"http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683863399.jpg\" />\n\n'),
(15, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/binh-chua-chay-tomoken-khi-co2-3kg', 'App\\Model\\Product', '12', NULL, NULL, NULL, 'Bình chữa cháy Tomoken khí CO2 3kg', NULL, NULL, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43', 'monthly', 0.5, NULL, NULL, NULL),
(16, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/van-goc-kem-giam-ap-pccc', 'App\\Model\\Product', '13', NULL, NULL, NULL, 'Van góc kèm giảm áp PCCC', NULL, NULL, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39', 'monthly', 0.5, NULL, NULL, NULL),
(17, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/van-pccc-ngoai-troi', 'App\\Model\\Product', '14', NULL, NULL, NULL, 'Van PCCC ngoài trời', NULL, NULL, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53', 'monthly', 0.5, NULL, NULL, NULL),
(18, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/van-goc-pccc', 'App\\Model\\Product', '15', NULL, NULL, NULL, 'Van góc PCCC', NULL, NULL, NULL, '2023-05-12 13:56:29', '2023-05-12 13:56:29', 'monthly', 0.5, NULL, NULL, NULL),
(20, 'http://localhost/chi-tiet-san-pham/tru-tiep-nuoc-pccc', 'App\\Model\\Product', '17', NULL, NULL, NULL, 'Trụ tiếp nước PCCC', NULL, NULL, NULL, '2023-05-12 14:16:45', '2023-05-13 10:48:28', 'monthly', 0.5, NULL, NULL, NULL),
(21, 'http://fe54-58-186-75-9.ngrok-free.app/tin-tuc/dat-cang-chinh-thuc-tro-thanh-dai-ly-phan-phoi-doc-quyen-khu-vuc-mien-bac-cua-son-the-he-moi', 'App\\Model\\News', '3', NULL, NULL, NULL, 'ĐẤT CẢNG CHÍNH THỨC TRỞ THÀNH ĐẠI LÝ PHÂN PHỐI ĐỘC QUYỀN KHU VỰC MIỀN BẮC CỦA SƠN THẾ HỆ MỚI', NULL, NULL, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30', 'monthly', 0.5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_page_images`
--

CREATE TABLE `seo_page_images` (
  `id` int UNSIGNED NOT NULL,
  `page_id` int UNSIGNED NOT NULL,
  `src` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_page_images`
--

INSERT INTO `seo_page_images` (`id`, `page_id`, `src`, `title`, `caption`, `location`, `created_at`, `updated_at`) VALUES
(6, 1, 'http://vangdecor.local/public/upload/product/big/picture_1683794122.jpg', NULL, NULL, NULL, '2023-05-11 15:35:35', '2023-05-11 15:35:35'),
(7, 2, 'http://5ae8-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683795197.png', NULL, NULL, NULL, '2023-05-11 15:53:22', '2023-05-11 15:53:22'),
(9, 4, 'http://5ae8-58-186-75-9.ngrok-free.app/public/upload/product/big/picture_1683795634.jpg', NULL, NULL, NULL, '2023-05-11 16:00:35', '2023-05-11 16:00:35'),
(11, 5, 'http://5ae8-58-186-75-9.ngrok-free.app/public/upload/product/big/picture_1683795802.png', NULL, NULL, NULL, '2023-05-11 16:04:19', '2023-05-11 16:04:19'),
(13, 7, 'http://5ae8-58-186-75-9.ngrok-free.app/public/upload/news/big/tam-quan-trong-cua-thiet-bi-bao-chay.PNG', NULL, NULL, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(14, 6, 'http://5ae8-58-186-75-9.ngrok-free.app/public/upload/news/big/gioi-thieu-ve-san-pham-binh-chua-chay-tai-dat-cang.PNG', NULL, NULL, NULL, '2023-05-11 16:24:45', '2023-05-11 16:24:45'),
(15, 8, 'http://5ae8-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683797898.jpg', NULL, NULL, NULL, '2023-05-11 16:38:21', '2023-05-11 16:38:21'),
(16, 10, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683861146.jpg', NULL, NULL, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(17, 11, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683861821.jpg', NULL, NULL, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(18, 12, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683861953.jpg', NULL, NULL, NULL, '2023-05-12 10:25:53', '2023-05-12 10:25:53'),
(19, 13, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683862361.jpg', NULL, NULL, NULL, '2023-05-12 10:32:43', '2023-05-12 10:32:43'),
(20, 14, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683863399.jpg', NULL, NULL, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(21, 15, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683864221.jpg', NULL, NULL, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(22, 16, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683872918.png', NULL, NULL, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(23, 17, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683874071.png', NULL, NULL, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(24, 18, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/product/picture_1683874586.png', NULL, NULL, NULL, '2023-05-12 13:56:29', '2023-05-12 13:56:29'),
(26, 21, 'http://fe54-58-186-75-9.ngrok-free.app/public/upload/news/big/dat-cang-chinh-thuc-tro-thanh-dai-ly-phan-phoi-doc-quyen-khu-vuc-mien-bac-cua-son-the-he-moi.jpg', NULL, NULL, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30'),
(27, 20, 'http://localhost/public/upload/product/big/picture_1683875804.png', NULL, NULL, NULL, '2023-05-13 10:48:28', '2023-05-13 10:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `seo_page_meta_tags`
--

CREATE TABLE `seo_page_meta_tags` (
  `id` int UNSIGNED NOT NULL,
  `seo_page_id` int UNSIGNED DEFAULT NULL,
  `seo_meta_tag_id` int UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_page_meta_tags`
--

INSERT INTO `seo_page_meta_tags` (`id`, `seo_page_id`, `seo_meta_tag_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 4, NULL, '2023-05-11 14:59:57', '2023-05-11 14:59:57'),
(2, 1, 5, 'Chữa cháy tốt cho các đám cháy dạng chất rắn', '2023-05-11 14:59:57', '2023-05-11 15:32:15'),
(3, 1, 6, 'Bình chữa cháy tốt cho các đám cháy dạng chất rắn, lỏng, khí. Bình có chất lượng tốt được nhập khẩu chính hãng Trọng lượng toàn bình 10kg Chiều cao 565mm Đường kính 130mm', '2023-05-11 14:59:57', '2023-05-11 15:35:22'),
(4, 1, 7, 'http://vangdecor.local/vuong-tron/binh-chua-chay-bot-abc-8kgmfzl8', '2023-05-11 14:59:57', '2023-05-11 15:32:15'),
(5, 1, 10, NULL, '2023-05-11 14:59:57', '2023-05-11 14:59:57'),
(6, 1, 22, NULL, '2023-05-11 14:59:57', '2023-05-11 14:59:57'),
(7, 1, 25, NULL, '2023-05-11 14:59:57', '2023-05-11 14:59:57'),
(8, 1, 26, NULL, '2023-05-11 14:59:57', '2023-05-11 14:59:57'),
(9, 1, 1, NULL, '2023-05-11 14:59:57', '2023-05-11 14:59:57'),
(10, 2, 4, NULL, '2023-05-11 15:53:22', '2023-05-11 15:53:22'),
(11, 2, 5, NULL, '2023-05-11 15:53:22', '2023-05-11 15:53:22'),
(12, 2, 6, NULL, '2023-05-11 15:53:22', '2023-05-11 15:53:22'),
(13, 2, 7, NULL, '2023-05-11 15:53:22', '2023-05-11 15:53:22'),
(14, 2, 10, NULL, '2023-05-11 15:53:22', '2023-05-11 15:53:22'),
(15, 2, 22, NULL, '2023-05-11 15:53:22', '2023-05-11 15:53:23'),
(16, 2, 25, NULL, '2023-05-11 15:53:23', '2023-05-11 15:53:23'),
(17, 2, 26, NULL, '2023-05-11 15:53:23', '2023-05-11 15:53:23'),
(18, 2, 1, NULL, '2023-05-11 15:53:23', '2023-05-11 15:53:23'),
(19, 4, 4, NULL, '2023-05-11 16:00:18', '2023-05-11 16:00:18'),
(20, 4, 5, 'Van Bướm Tay Gạt Lá Inox ShinYi', '2023-05-11 16:00:18', '2023-05-11 16:00:35'),
(21, 4, 6, 'Van Bướm Tay Gạt Lá Inox ShinYi', '2023-05-11 16:00:18', '2023-05-11 16:00:35'),
(22, 4, 7, 'http://5ae8-58-186-75-9.ngrok-free.app/vuong-tron/van-buom-tay-gat-la-inox-shinyi', '2023-05-11 16:00:18', '2023-05-11 16:00:35'),
(23, 4, 10, NULL, '2023-05-11 16:00:18', '2023-05-11 16:00:18'),
(24, 4, 22, NULL, '2023-05-11 16:00:18', '2023-05-11 16:00:18'),
(25, 4, 25, NULL, '2023-05-11 16:00:18', '2023-05-11 16:00:18'),
(26, 4, 26, NULL, '2023-05-11 16:00:18', '2023-05-11 16:00:18'),
(27, 4, 1, NULL, '2023-05-11 16:00:18', '2023-05-11 16:00:18'),
(28, 5, 4, NULL, '2023-05-11 16:03:23', '2023-05-11 16:03:23'),
(29, 5, 5, 'SƠN LÓT CHỐNG RỈ ALKYD BENZO', '2023-05-11 16:03:23', '2023-05-11 16:04:19'),
(30, 5, 6, 'SƠN LÓT CHỐNG RỈ ALKYD BENZO', '2023-05-11 16:03:23', '2023-05-11 16:04:19'),
(31, 5, 7, 'http://5ae8-58-186-75-9.ngrok-free.app/vuong-tron/son-lot-chong-ri-alkyd-benzo', '2023-05-11 16:03:23', '2023-05-11 16:04:19'),
(32, 5, 10, NULL, '2023-05-11 16:03:23', '2023-05-11 16:03:23'),
(33, 5, 22, NULL, '2023-05-11 16:03:23', '2023-05-11 16:03:23'),
(34, 5, 25, NULL, '2023-05-11 16:03:23', '2023-05-11 16:03:23'),
(35, 5, 26, NULL, '2023-05-11 16:03:23', '2023-05-11 16:03:24'),
(36, 5, 1, NULL, '2023-05-11 16:03:24', '2023-05-11 16:03:24'),
(37, 6, 4, NULL, '2023-05-11 16:16:53', '2023-05-11 16:16:53'),
(38, 6, 5, 'Giới thiệu về sản phẩm bình chữa cháy tại Đất Cảng', '2023-05-11 16:16:53', '2023-05-11 16:24:45'),
(39, 6, 6, 'Giới thiệu về sản phẩm bình chữa cháy tại Đất Cảng', '2023-05-11 16:16:53', '2023-05-11 16:24:45'),
(40, 6, 7, 'http://5ae8-58-186-75-9.ngrok-free.app/tin-tuc/gioi-thieu-ve-san-pham-binh-chua-chay-tai-dat-cang', '2023-05-11 16:16:53', '2023-05-11 16:24:45'),
(41, 6, 10, NULL, '2023-05-11 16:16:53', '2023-05-11 16:16:53'),
(42, 6, 22, NULL, '2023-05-11 16:16:53', '2023-05-11 16:16:53'),
(43, 6, 25, NULL, '2023-05-11 16:16:53', '2023-05-11 16:16:53'),
(44, 6, 26, NULL, '2023-05-11 16:16:53', '2023-05-11 16:16:53'),
(45, 6, 1, NULL, '2023-05-11 16:16:53', '2023-05-11 16:16:53'),
(46, 7, 4, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(47, 7, 5, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(48, 7, 6, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(49, 7, 7, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(50, 7, 10, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(51, 7, 22, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(52, 7, 25, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(53, 7, 26, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(54, 7, 1, NULL, '2023-05-11 16:23:40', '2023-05-11 16:23:40'),
(55, 8, 4, NULL, '2023-05-11 16:38:21', '2023-05-11 16:38:21'),
(56, 8, 5, NULL, '2023-05-11 16:38:21', '2023-05-11 16:38:21'),
(57, 8, 6, NULL, '2023-05-11 16:38:21', '2023-05-11 16:38:21'),
(58, 8, 7, NULL, '2023-05-11 16:38:21', '2023-05-11 16:38:22'),
(59, 8, 10, NULL, '2023-05-11 16:38:22', '2023-05-11 16:38:22'),
(60, 8, 22, NULL, '2023-05-11 16:38:22', '2023-05-11 16:38:22'),
(61, 8, 25, NULL, '2023-05-11 16:38:22', '2023-05-11 16:38:22'),
(62, 8, 26, NULL, '2023-05-11 16:38:22', '2023-05-11 16:38:22'),
(63, 8, 1, NULL, '2023-05-11 16:38:22', '2023-05-11 16:38:22'),
(64, 10, 4, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(65, 10, 5, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(66, 10, 6, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(67, 10, 7, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(68, 10, 10, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(69, 10, 22, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(70, 10, 25, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(71, 10, 26, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(72, 10, 1, NULL, '2023-05-12 10:12:27', '2023-05-12 10:12:27'),
(73, 11, 4, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(74, 11, 5, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(75, 11, 6, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(76, 11, 7, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(77, 11, 10, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(78, 11, 22, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(79, 11, 25, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(80, 11, 26, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(81, 11, 1, NULL, '2023-05-12 10:23:41', '2023-05-12 10:23:41'),
(82, 12, 4, NULL, '2023-05-12 10:25:53', '2023-05-12 10:25:54'),
(83, 12, 5, NULL, '2023-05-12 10:25:54', '2023-05-12 10:25:54'),
(84, 12, 6, NULL, '2023-05-12 10:25:54', '2023-05-12 10:25:54'),
(85, 12, 7, NULL, '2023-05-12 10:25:54', '2023-05-12 10:25:54'),
(86, 12, 10, NULL, '2023-05-12 10:25:54', '2023-05-12 10:25:54'),
(87, 12, 22, NULL, '2023-05-12 10:25:54', '2023-05-12 10:25:54'),
(88, 12, 25, NULL, '2023-05-12 10:25:54', '2023-05-12 10:25:54'),
(89, 12, 26, NULL, '2023-05-12 10:25:54', '2023-05-12 10:25:54'),
(90, 12, 1, NULL, '2023-05-12 10:25:54', '2023-05-12 10:25:54'),
(91, 13, 4, NULL, '2023-05-12 10:32:44', '2023-05-12 10:32:44'),
(92, 13, 5, NULL, '2023-05-12 10:32:44', '2023-05-12 10:32:44'),
(93, 13, 6, NULL, '2023-05-12 10:32:44', '2023-05-12 10:32:44'),
(94, 13, 7, NULL, '2023-05-12 10:32:44', '2023-05-12 10:32:44'),
(95, 13, 10, NULL, '2023-05-12 10:32:44', '2023-05-12 10:32:44'),
(96, 13, 22, NULL, '2023-05-12 10:32:44', '2023-05-12 10:32:44'),
(97, 13, 25, NULL, '2023-05-12 10:32:44', '2023-05-12 10:32:44'),
(98, 13, 26, NULL, '2023-05-12 10:32:44', '2023-05-12 10:32:44'),
(99, 13, 1, NULL, '2023-05-12 10:32:44', '2023-05-12 10:32:44'),
(100, 14, 4, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(101, 14, 5, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(102, 14, 6, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(103, 14, 7, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(104, 14, 10, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(105, 14, 22, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(106, 14, 25, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(107, 14, 26, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(108, 14, 1, NULL, '2023-05-12 10:49:59', '2023-05-12 10:49:59'),
(109, 15, 4, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(110, 15, 5, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(111, 15, 6, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(112, 15, 7, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(113, 15, 10, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(114, 15, 22, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(115, 15, 25, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(116, 15, 26, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(117, 15, 1, NULL, '2023-05-12 11:03:43', '2023-05-12 11:03:43'),
(118, 16, 4, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(119, 16, 5, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(120, 16, 6, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(121, 16, 7, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(122, 16, 10, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(123, 16, 22, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(124, 16, 25, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(125, 16, 26, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(126, 16, 1, NULL, '2023-05-12 13:28:39', '2023-05-12 13:28:39'),
(127, 17, 4, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(128, 17, 5, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(129, 17, 6, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(130, 17, 7, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(131, 17, 10, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(132, 17, 22, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(133, 17, 25, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(134, 17, 26, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(135, 17, 1, NULL, '2023-05-12 13:47:53', '2023-05-12 13:47:53'),
(136, 18, 4, NULL, '2023-05-12 13:56:30', '2023-05-12 13:56:30'),
(137, 18, 5, NULL, '2023-05-12 13:56:30', '2023-05-12 13:56:30'),
(138, 18, 6, NULL, '2023-05-12 13:56:30', '2023-05-12 13:56:30'),
(139, 18, 7, NULL, '2023-05-12 13:56:30', '2023-05-12 13:56:30'),
(140, 18, 10, NULL, '2023-05-12 13:56:30', '2023-05-12 13:56:30'),
(141, 18, 22, NULL, '2023-05-12 13:56:30', '2023-05-12 13:56:30'),
(142, 18, 25, NULL, '2023-05-12 13:56:30', '2023-05-12 13:56:30'),
(143, 18, 26, NULL, '2023-05-12 13:56:30', '2023-05-12 13:56:30'),
(144, 18, 1, NULL, '2023-05-12 13:56:30', '2023-05-12 13:56:30'),
(145, 20, 4, NULL, '2023-05-12 14:16:45', '2023-05-12 14:16:45'),
(146, 20, 5, 'Trụ tiếp nước PCCC', '2023-05-12 14:16:45', '2023-05-13 10:48:28'),
(147, 20, 6, NULL, '2023-05-12 14:16:45', '2023-05-12 14:16:45'),
(148, 20, 7, 'http://fe54-58-186-75-9.ngrok-free.app/chi-tiet-san-pham/tru-tiep-nuoc-pccc', '2023-05-12 14:16:45', '2023-05-13 10:48:28'),
(149, 20, 10, NULL, '2023-05-12 14:16:45', '2023-05-12 14:16:45'),
(150, 20, 22, NULL, '2023-05-12 14:16:45', '2023-05-12 14:16:45'),
(151, 20, 25, NULL, '2023-05-12 14:16:45', '2023-05-12 14:16:45'),
(152, 20, 26, NULL, '2023-05-12 14:16:45', '2023-05-12 14:16:45'),
(153, 20, 1, NULL, '2023-05-12 14:16:45', '2023-05-12 14:16:45'),
(154, 21, 4, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30'),
(155, 21, 5, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30'),
(156, 21, 6, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30'),
(157, 21, 7, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30'),
(158, 21, 10, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30'),
(159, 21, 22, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30'),
(160, 21, 25, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30'),
(161, 21, 26, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30'),
(162, 21, 1, NULL, '2023-05-12 14:58:30', '2023-05-12 14:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` int UNSIGNED NOT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sup_supplier`
--

CREATE TABLE `sup_supplier` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sup_supplier_product`
--

CREATE TABLE `sup_supplier_product` (
  `id` int UNSIGNED NOT NULL,
  `cid_supplier` int NOT NULL,
  `cid_product` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleprice` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `quality` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag_main`
--

CREATE TABLE `tag_main` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag_news`
--

CREATE TABLE `tag_news` (
  `cid_news` int NOT NULL,
  `cid_tag` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag_product`
--

CREATE TABLE `tag_product` (
  `cid_product` int NOT NULL,
  `cid_tag` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag_service`
--

CREATE TABLE `tag_service` (
  `cid_service` int NOT NULL,
  `cid_tag` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ca_banner`
--
ALTER TABLE `ca_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_company_info`
--
ALTER TABLE `ca_company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_contact`
--
ALTER TABLE `ca_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_cooperate`
--
ALTER TABLE `ca_cooperate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_employees`
--
ALTER TABLE `ca_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_general`
--
ALTER TABLE `ca_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_news`
--
ALTER TABLE `ca_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `ca_newsletter`
--
ALTER TABLE `ca_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_news_cate`
--
ALTER TABLE `ca_news_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_page`
--
ALTER TABLE `ca_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_recuitment`
--
ALTER TABLE `ca_recuitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_seo`
--
ALTER TABLE `ca_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_seolinks`
--
ALTER TABLE `ca_seolinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_service`
--
ALTER TABLE `ca_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_service_cate`
--
ALTER TABLE `ca_service_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_slideshow`
--
ALTER TABLE `ca_slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_users`
--
ALTER TABLE `ca_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_link_tags`
--
ALTER TABLE `seo_link_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_link_tags_page_id_foreign` (`page_id`);

--
-- Indexes for table `seo_meta_tags`
--
ALTER TABLE `seo_meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_pages_path_unique` (`path`),
  ADD KEY `seo_pages_object_index` (`object`),
  ADD KEY `seo_pages_object_id_index` (`object_id`),
  ADD KEY `seo_pages_title_index` (`title`),
  ADD KEY `seo_pages_title_source_index` (`title_source`);

--
-- Indexes for table `seo_page_images`
--
ALTER TABLE `seo_page_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_page_images_page_id_foreign` (`page_id`),
  ADD KEY `seo_page_images_src_index` (`src`);

--
-- Indexes for table `seo_page_meta_tags`
--
ALTER TABLE `seo_page_meta_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_page_meta_tags_seo_page_id_foreign` (`seo_page_id`),
  ADD KEY `seo_page_meta_tags_seo_meta_tag_id_foreign` (`seo_meta_tag_id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_settings_key_unique` (`key`);

--
-- Indexes for table `sup_supplier`
--
ALTER TABLE `sup_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sup_supplier_product`
--
ALTER TABLE `sup_supplier_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_main`
--
ALTER TABLE `tag_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_news`
--
ALTER TABLE `tag_news`
  ADD PRIMARY KEY (`cid_news`,`cid_tag`),
  ADD KEY `tag_to_main_news` (`cid_tag`);

--
-- Indexes for table `tag_product`
--
ALTER TABLE `tag_product`
  ADD PRIMARY KEY (`cid_product`,`cid_tag`),
  ADD KEY `tag_to_main_product_a_tag` (`cid_tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ca_banner`
--
ALTER TABLE `ca_banner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_company_info`
--
ALTER TABLE `ca_company_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_contact`
--
ALTER TABLE `ca_contact`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_cooperate`
--
ALTER TABLE `ca_cooperate`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ca_employees`
--
ALTER TABLE `ca_employees`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_general`
--
ALTER TABLE `ca_general`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ca_news`
--
ALTER TABLE `ca_news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ca_newsletter`
--
ALTER TABLE `ca_newsletter`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ca_news_cate`
--
ALTER TABLE `ca_news_cate`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ca_page`
--
ALTER TABLE `ca_page`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_recuitment`
--
ALTER TABLE `ca_recuitment`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_seo`
--
ALTER TABLE `ca_seo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ca_seolinks`
--
ALTER TABLE `ca_seolinks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_service`
--
ALTER TABLE `ca_service`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_service_cate`
--
ALTER TABLE `ca_service_cate`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_slideshow`
--
ALTER TABLE `ca_slideshow`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ca_users`
--
ALTER TABLE `ca_users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_link_tags`
--
ALTER TABLE `seo_link_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_meta_tags`
--
ALTER TABLE `seo_meta_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seo_page_images`
--
ALTER TABLE `seo_page_images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `seo_page_meta_tags`
--
ALTER TABLE `seo_page_meta_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sup_supplier`
--
ALTER TABLE `sup_supplier`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sup_supplier_product`
--
ALTER TABLE `sup_supplier_product`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag_main`
--
ALTER TABLE `tag_main`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seo_link_tags`
--
ALTER TABLE `seo_link_tags`
  ADD CONSTRAINT `seo_link_tags_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `seo_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seo_page_meta_tags`
--
ALTER TABLE `seo_page_meta_tags`
  ADD CONSTRAINT `seo_page_meta_tags_seo_meta_tag_id_foreign` FOREIGN KEY (`seo_meta_tag_id`) REFERENCES `seo_meta_tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seo_page_meta_tags_seo_page_id_foreign` FOREIGN KEY (`seo_page_id`) REFERENCES `seo_pages` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
