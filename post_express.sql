-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: May 02, 2024 at 02:05 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_express`
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

--
-- Dumping data for table `ca_banner`
--

INSERT INTO `ca_banner` (`id`, `name`, `links`, `picture`, `is_type`, `status`, `position`, `created_at`, `updated_at`) VALUES
(2, 'Panner 1', 'javascript:;', 'banner_1711342281.png', NULL, '1', 1, '2023-11-04 09:08:02', '2024-03-25 04:51:21'),
(6, 'Banner 2', 'javascript:;', 'banner_1711342320.png', NULL, '1', 1, '2024-03-25 04:01:36', '2024-03-25 04:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `ca_contact`
--

CREATE TABLE `ca_contact` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content_mail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `subject_mail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_contact`
--

INSERT INTO `ca_contact` (`id`, `name`, `email`, `phone`, `address`, `old`, `content`, `content_mail`, `subject_mail`, `created_at`, `updated_at`) VALUES
(11, 'test test', 'test@gmail.com', '0782731131', 'Lô G- Chung Cư Hùng Vương - Đường Tản Đà - Quận 5', NULL, 'test', NULL, NULL, '2024-03-26 03:48:18', '2024-03-26 03:48:18');

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
(1, 'MR Trading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ca_main`
--

CREATE TABLE `ca_main` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `content` text,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ca_main`
--

INSERT INTO `ca_main` (`id`, `name`, `alias`, `content`, `updated_at`, `created_at`) VALUES
(1, 'Tận tâm - giá tốt', '1', '<div class=\"main_section section\">\r\n<div class=\"container_n informationWrap\" id=\"informationWrap\">\r\n<div class=\"info\">\r\n<p>Với kinh nghiệm nhiều năm trong lĩnh vực vận chuyển h&agrave;ng h&oacute;a, 79 Post Express được nhiều kh&aacute;ch h&agrave;ng lựa chọn để giao h&agrave;ng, vận chuyển h&agrave;ng h&oacute;a mọi nơi khắp tỉnh th&agrave;nh Việt Nam. Với phương ch&acirc;m tận t&acirc;m với mỗi kiện h&agrave;ng đưa niềm tin đến bạn. Gi&aacute; cả hợp l&yacute; cạnh tranh tr&ecirc;n thị trường. Khi sử dụng dịch vụ của 79 Post Express, bạn sẽ nhận được những ưu đ&atilde;i:</p>\r\n\r\n<ul>\r\n	<li>- Thời gian vận chuyển nhanh cam kết đ&uacute;ng hẹn.</li>\r\n	<li>- Quy tr&igrave;nh vận chuyển nghi&ecirc;m ngặt gi&uacute;p hạn chế tối đa t&igrave;nh trạng hư hỏng, thất lạc h&agrave;ng h&oacute;a.</li>\r\n	<li>- Miễn ph&iacute; dịch vụ thu hộ.</li>\r\n	<li>- Ch&iacute;nh s&aacute;ch chiết khấu, giảm gi&aacute; cho Qu&yacute; h&agrave;ng c&oacute; nhu cầu nhập h&agrave;ng thường xuy&ecirc;n.</li>\r\n	<li>- Thanh to&aacute;n bằng nhiều h&igrave;nh thức: Chuyển khoản, đặt cọc tại văn ph&ograve;ng hoặc tại nh&agrave;.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '2024-03-25 02:52:01', '2023-11-11 03:50:53'),
(2, 'Tư vấn chuyên nghiệp', '1', '<p>Nh&acirc;n vi&ecirc;n tư vấn chuy&ecirc;n nghiệp về chất lượng sản phẩm, mức độ uy t&iacute;n seller, phương thức thanh to&aacute;n,&hellip;</p>\r\n\r\n<p>Khi sử dụng dịch vụ tại 79 Post Express, qu&yacute; kh&aacute;ch sẽ được 79 Post Express hỗ trợ chu đ&aacute;o với c&aacute;c dịch vụ tiện &iacute;ch sau:</p>\r\n\r\n<ul>\r\n	<li>Dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng tận t&igrave;nh trước - trong - sau khi mua h&agrave;ng, xuy&ecirc;n suốt 7 ng&agrave;y/tuần, từ 8:00 đến 21:00</li>\r\n	<li>Giao h&agrave;ng miễn ph&iacute; (đối với đơn h&agrave;ng từ 150.000đ trong phạm vi TP.HCM v&agrave; từ 250.000đ đối với đơn h&agrave;ng giao đến c&aacute;c tỉnh th&agrave;nh kh&aacute;c thuộc Việt Nam)</li>\r\n	<li>T&iacute;ch lũy điểm thưởng 79 Post Express xu nhận cơ hội mua h&agrave;ng với gi&aacute; 0đ Thời hạn đổi - trả sản phẩm l&ecirc;n đến 30 ng&agrave;y để kh&aacute;ch h&agrave;ng ho&agrave;n to&agrave;n an t&acirc;m khi mua sắm tại 79 Post Express</li>\r\n</ul>', '2024-03-25 03:38:06', '2023-11-11 03:50:53'),
(3, 'Giao hàng tận nợi', '1', '<div class=\"main-contents\" id=\"contents\">\r\n<div class=\"main-contents__inner\" id=\"main\">\r\n<div class=\"main-article message\">\r\n<div class=\"is-layout-flow sweets-block wp-block-group wp-block-group-is-layout-flow\" style=\"opacity:1; transform:translate(0px, 0px); visibility:inherit\">\r\n<div class=\"wp-block-group__inner-container\">\r\n<div class=\"wp-block-image\">\r\n<div class=\"aligncenter size-full\">\r\n<p>Ch&uacute;ng t&ocirc;i cung cấp c&aacute;c dịch vụ giao h&agrave;ng tận nh&agrave; trong ng&agrave;y. Gi&uacute;p bạn tiết kiệm thời gian hơn</p>\r\n\r\n<p>79 Post Express thực hiện c&aacute;ch thức giao h&agrave;ng linh động, cho ph&eacute;p kh&aacute;ch h&agrave;ng lựa chọn nhận h&agrave;ng tại kho, tại nh&agrave; hoặc qua đường bưu điện. Với c&aacute;ch thức giao h&agrave;ng tiện lợi n&agrave;y, c&aacute;c h&agrave;ng h&oacute;a chất lượng đến từ Mỹ sẽ kh&ocirc;ng c&ograve;n xa lạ đối với người ti&ecirc;u d&ugrave;ng Việt.</p>\r\n\r\n<p>Khi đơn hàng của khách hàng v&ecirc;̀ đ&ecirc;́n trụ sở của 79 Post Express tại Việt Nam, khách hàng sẽ nh&acirc;̣n được Email th&ocirc;ng báo hàng v&ecirc;̀, 79 Post Express sẽ chủ đ&ocirc;̣ng ti&ecirc;́n hành lu&acirc;n chuy&ecirc;̉n và thay đ&ocirc;̉i theo địa chỉ đăng ký nh&acirc;̣n hàng tr&ecirc;n đơn hàng</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2024-03-25 02:52:08', '2023-11-11 03:50:53'),
(4, 'THỐNG KÊ', '5', '<div class=\"box_hair slideInRight wow\" id=\"mainBanner_top\">\r\n<div class=\"pageTitle\">\r\n<div class=\"pageTitleIn\">\r\n<div class=\"h2\">\r\n<h3>C&ocirc;ng ty ship h&agrave;ng, giao h&agrave;ng chuy&ecirc;n nghiệp h&agrave;ng đầu</h3>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i mong muốn kết nối mọi người tại Việt Nam, gi&uacute;p bạn giải quyết những kh&oacute; khăn khi giao h&agrave;ng, gửi h&agrave;ng, vận chuyển h&agrave;ng cũng như thủ tục vận chuyển phức tạp.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"human-partners is-layout-flow wp-block-group-is-layout-flow\">\r\n<div class=\"wp-block-group__inner-container\">\r\n<div class=\"tabControl tab_hair\">\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', '2024-03-25 07:58:21', '2023-11-11 03:50:53'),
(5, '79 Post Express', '2', '<div class=\"main-contents\" id=\"contents\">\n<div class=\"main-contents__inner\" id=\"main\">\n<div class=\"company-message is-layout-flow wp-block-group wp-block-group-is-layout-flow\" style=\"opacity:1; transform:translate(0px, 0px); visibility:inherit\">\n<div class=\"wp-block-group__inner-container\">\n<div class=\"pageTitle\">\n<div class=\"pageTitleIn\">\n<div class=\"h2\">\n<ul>\n	<li>\n	<p>79 Post Express l&agrave; giải ph&aacute;p quản l&yacute; h&agrave;ng h&oacute;a, nhận h&agrave;ng v&agrave; giao h&agrave;ng, tiết kiệm nhanh ch&oacute;ng gi&aacute; tốt tận t&acirc;m với từng kiện h&agrave;ng đưa niềm tin đến kh&aacute;ch h&agrave;ng. Gi&uacute;p kh&aacute;ch h&agrave;ng v&agrave; doanh nghiệp ph&aacute;t triển kinh doanh online hiệu quả hơn.</p>\n	</li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>', '2024-03-25 07:57:41', '2023-11-11 03:50:53'),
(7, 'Địa chỉ', '3', 'Lô G - Chung cư Hùng Vương - Quận 5 - TPHCM.', '2024-03-25 03:01:52', '2024-03-25 03:00:15'),
(8, 'Số điện thoại', '3', '097823322', '2024-03-25 03:02:03', '2024-03-25 03:00:32'),
(9, 'email', '3', '79post@express.vn', '2024-03-25 03:01:06', '2024-03-25 03:01:06'),
(10, 'HotLine', '4', '1900 1456', '2024-03-25 03:17:09', '2024-03-25 03:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `ca_main_human`
--

CREATE TABLE `ca_main_human` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `alias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ca_main_human`
--

INSERT INTO `ca_main_human` (`id`, `name`, `alias`) VALUES
(1, 'OTA FACTORYの強み', 'forte'),
(2, 'ジョブダイアリー', 'jobdiary'),
(3, 'お客様の声', 'voice'),
(4, '料金', 'fee'),
(5, 'よくある質問', 'faq'),
(6, '特定技能について', 'specific');

-- --------------------------------------------------------

--
-- Table structure for table `ca_main_value`
--

CREATE TABLE `ca_main_value` (
  `id` int NOT NULL,
  `cid_main` int DEFAULT NULL,
  `type_main` varchar(200) DEFAULT NULL,
  `key` varchar(300) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `key_en` varchar(200) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
(4, '5 tuyệt chiêu tạo ấn tượng tốt khi ship hàng cho khách', '2023-11-03-4', NULL, '1', '1', '2023-11-03-4.jpg', 'Hầu hết các dịch vụ ship hàng ở Việt Nam vẫn chưa tạo được ấn tượng tốt với khách hàng và khiến...', '<p>Dịch vụ ship h&agrave;ng&nbsp;ra đời gi&uacute;p người mua h&agrave;ng c&oacute; được sản phẩm m&igrave;nh ưng &yacute; m&agrave; kh&ocirc;ng phải đến tận nơi. Điều n&agrave;y đặc biệt ph&ugrave; hợp v&agrave; thuận tiện cho những ai bận rộn hoặc ở xa kh&ocirc;ng thể đến tận nơi để mua h&agrave;ng. Tuy nhi&ecirc;n, c&oacute; kh&ocirc;ng &iacute;t lỗi m&agrave; hầu như cửa h&agrave;ng n&agrave;o cũng c&oacute; thể mắc phải khiến kh&aacute;ch h&agrave;ng kh&ocirc;ng vừa l&ograve;ng.&nbsp;<strong>Successtrans&nbsp;</strong>sẽ gi&uacute;p bạn liệt k&ecirc; một số lỗi phổ biến v&agrave; c&aacute;ch để bạn hạn chế ch&uacute;ng.</p>\r\n\r\n<p><img alt=\"ship-hang-nhanh-1200x900\" src=\"https://successtrans.vn/wp-content/uploads/2015/11/ship-hang-nhanh-1200x900-1-635x360.jpeg\" title=\"ship-hang-nhanh-1200x900\" /></p>\r\n\r\n<p><strong>1. Thiếu tuỳ chọn ship h&agrave;ng</strong></p>\r\n\r\n<p>Để giảm bớt chi ph&iacute; ship h&agrave;ng, nhất l&agrave; với dịch vụ free ship, nhiều cửa h&agrave;ng đ&atilde; lược bỏ bớt một số tuỳ chọn ship d&ugrave; n&oacute; c&oacute; đem lại nhiều lợi &iacute;ch, về cả tốc độ v&agrave; sự linh hoạt m&agrave; kh&aacute;ch h&agrave;ng cần đến. Điều n&agrave;y l&agrave; kh&ocirc;ng n&ecirc;n. Bởi việc mang đến sự lựa chọn chủ động trong ship h&agrave;ng cho kh&aacute;ch l&agrave; điều cần thiết. N&ecirc;n ch&uacute; &yacute; rằng đ&ocirc;i l&uacute;c vấn đề ship h&agrave;ng lại khiến kh&aacute;ch bỏ đi m&agrave; kh&ocirc;ng mua h&agrave;ng ở shop nữa.</p>\r\n\r\n<p><strong>=&gt; C&aacute;ch hạn chế</strong>: Kh&aacute;ch h&agrave;ng lu&ocirc;n muốn vừa được mua sắm gi&aacute; rẻ vừa được phục vụ ship miễn ph&iacute; hoặc ph&iacute; thấp. Bạn ho&agrave;n to&agrave;n c&oacute; thể đ&aacute;p ứng được cả hai nhu cầu n&agrave;y m&agrave; vẫn cung cấp cho kh&aacute;ch h&agrave;ng đầy đủ c&aacute;c tuỳ chọn ship bằng c&aacute;ch đưa ra nhiều lựa chọn cho họ. Với c&aacute;ch n&agrave;y, bạn sẽ kh&ocirc;ng bao giờ l&agrave;m mất l&ograve;ng kh&aacute;ch h&agrave;ng, v&igrave; họ được lựa chọn c&aacute;i m&agrave; họ muốn.</p>\r\n\r\n<p><strong>2. Đ&oacute;ng g&oacute;i sai c&aacute;ch</strong></p>\r\n\r\n<p>Với ship h&agrave;ng, kh&acirc;u đ&oacute;ng g&oacute;i l&agrave; kh&acirc;u quan trọng bởi n&oacute; li&ecirc;n quan đến sự an to&agrave;n của h&agrave;ng ho&aacute; trong suốt qu&aacute; tr&igrave;nh vận chuyển. Việc đ&oacute;ng g&oacute;i sai c&aacute;ch, như d&ugrave;ng hộp đựng qu&aacute; to hoặc qu&aacute; nhỏ, hay kh&ocirc;ng c&oacute; c&aacute;c lớp bảo vệ, &hellip; đều dễ dẫn đến việc sản phẩm bị hư hỏng v&agrave; kh&ocirc;ng c&ograve;n được nguy&ecirc;n vẹn như ban đầu.</p>\r\n\r\n<p><strong>=&gt; C&aacute;ch hạn chế</strong>: Với bất k&igrave; sản phẩm n&agrave;o, bạn cũng n&ecirc;n đ&oacute;ng g&oacute;i thật cẩn thận. Ph&iacute;a trong hộp đựng n&ecirc;n c&oacute; một lớp xốp bảo vệ d&agrave;y tương đối. Tuy nhi&ecirc;n, tuỳ từng mặt h&agrave;ng để bạn chọn c&aacute;ch đ&oacute;ng g&oacute;i tốt nhất. Đ&oacute;ng g&oacute;i cẩn thận kh&ocirc;ng chỉ gi&uacute;p bảo vệ sản phẩm m&agrave; c&ograve;n khiến kh&aacute;ch h&agrave;ng cảm thấy an t&acirc;m v&agrave; h&agrave;i l&ograve;ng với dịch vụ của bạn.</p>\r\n\r\n<p><strong>3. Ch&iacute;nh s&aacute;ch đổi trả kh&ocirc;ng r&otilde; r&agrave;ng</strong></p>\r\n\r\n<p>B&aacute;n h&agrave;ng online&nbsp;kh&ocirc;ng thể tr&aacute;nh khỏi việc kh&aacute;ch h&agrave;ng đổi trả v&igrave; rất nhiều l&yacute; do. Do đ&oacute;, ch&iacute;nh s&aacute;ch đổi trả n&ecirc;n được ch&uacute; trọng, v&igrave; kh&aacute;ch h&agrave;ng c&oacute; thể sẽ cảm thấy thất vọng v&agrave; do dự nếu n&oacute; kh&ocirc;ng r&otilde; r&agrave;ng.</p>\r\n\r\n<p><strong>=&gt; C&aacute;ch hạn chế</strong>: Sự cạnh trong trong b&aacute;n h&agrave;ng online l&agrave; kh&ocirc;ng hề nhỏ. Kh&aacute;ch h&agrave;ng sẽ kh&ocirc;ng chờ đợi để trải nghiệm rồi mới đ&aacute;nh gi&aacute; ch&iacute;nh s&aacute;ch của bạn m&agrave; họ sẽ đ&aacute;nh gi&aacute; ngay từ ban đầu sau khi đọc được những g&igrave; bạn đề ra. Họ muốn chắc chắn rằng họ sẽ được đổi hay trả lại nếu họ kh&ocirc;ng th&iacute;ch m&agrave;u n&agrave;y hay k&iacute;ch cỡ n&agrave;y kh&ocirc;ng vừa với họ. V&igrave; vậy, những ch&iacute;nh s&aacute;ch đổi trả bạn đề ra cần hợp l&yacute; v&agrave; gi&uacute;p kh&aacute;ch h&agrave;ng hiểu cũng như ghi nhớ ngay từ lần đầu ti&ecirc;n. B&ecirc;n cạnh đ&oacute;, ch&uacute;ng n&ecirc;n ngắn gọn, s&uacute;c t&iacute;ch v&agrave; dễ hiểu, dễ ghi nhớ. Bạn cần tr&aacute;nh c&acirc;u từ d&agrave;i d&ograve;ng, phức tạp, v&igrave; điều đ&oacute; c&oacute; thể khiến kh&aacute;ch h&agrave;ng phải lo lắng khi đặt h&agrave;ng ở shop của bạn. Một điều quan trọng l&agrave; đừng đặt ch&iacute;nh s&aacute;ch đổi trả ở những nơi kh&oacute; t&igrave;m tr&ecirc;n website. Thay v&agrave;o đ&oacute;, bạn n&ecirc;n để ch&uacute;ng ở ngay tại trang b&aacute;n h&agrave;ng, nơi kh&aacute;ch tiến h&agrave;nh đặt h&agrave;ng để giao dịch diễn ra nhanh ch&oacute;ng v&agrave; thuận lợi hơn.</p>', 6, NULL, '{\"seo_title\":\"5 tuy\\u1ec7t chi\\u00eau t\\u1ea1o \\u1ea5n t\\u01b0\\u1ee3ng t\\u1ed1t khi ship h\\u00e0ng cho kh\\u00e1ch\",\"seo_description\":\"5 tuy\\u1ec7t chi\\u00eau t\\u1ea1o \\u1ea5n t\\u01b0\\u1ee3ng t\\u1ed1t khi ship h\\u00e0ng cho kh\\u00e1ch\",\"seo_keyword\":\"5 tuy\\u1ec7t chi\\u00eau t\\u1ea1o \\u1ea5n t\\u01b0\\u1ee3ng t\\u1ed1t khi ship h\\u00e0ng cho kh\\u00e1ch\"}', 0, 27, '2023-11-02 14:52:33', '2024-03-26 02:43:26'),
(5, '5 lỗi ship hàng phổ biến và các cách để hạn chế chúng', '2023-11-03-5', NULL, '1', '1', '2023-11-03-5.jpg', 'Dịch vụ ship hàng ra đời giúp người mua hàng có được sản phẩm mình ưng ý mà không phải đến tận nơi', '<p>Dịch vụ ship h&agrave;ng&nbsp;ra đời gi&uacute;p người mua h&agrave;ng c&oacute; được sản phẩm m&igrave;nh ưng &yacute; m&agrave; kh&ocirc;ng phải đến tận nơi. Điều n&agrave;y đặc biệt ph&ugrave; hợp v&agrave; thuận tiện cho những ai bận rộn hoặc ở xa kh&ocirc;ng thể đến tận nơi để mua h&agrave;ng. Tuy nhi&ecirc;n, c&oacute; kh&ocirc;ng &iacute;t lỗi m&agrave; hầu như cửa h&agrave;ng n&agrave;o cũng c&oacute; thể mắc phải khiến kh&aacute;ch h&agrave;ng kh&ocirc;ng vừa l&ograve;ng.&nbsp;<strong>Successtrans&nbsp;</strong>sẽ gi&uacute;p bạn liệt k&ecirc; một số lỗi phổ biến v&agrave; c&aacute;ch để bạn hạn chế ch&uacute;ng.</p>\r\n\r\n<p><img alt=\"ship-hang-nhanh-1200x900\" src=\"https://successtrans.vn/wp-content/uploads/2015/11/ship-hang-nhanh-1200x900-1-635x360.jpeg\" style=\"height:360px; width:635px\" title=\"ship-hang-nhanh-1200x900\" /></p>\r\n\r\n<p><strong>1. Thiếu tuỳ chọn ship h&agrave;ng</strong></p>\r\n\r\n<p>Để giảm bớt chi ph&iacute; ship h&agrave;ng, nhất l&agrave; với dịch vụ free ship, nhiều cửa h&agrave;ng đ&atilde; lược bỏ bớt một số tuỳ chọn ship d&ugrave; n&oacute; c&oacute; đem lại nhiều lợi &iacute;ch, về cả tốc độ v&agrave; sự linh hoạt m&agrave; kh&aacute;ch h&agrave;ng cần đến. Điều n&agrave;y l&agrave; kh&ocirc;ng n&ecirc;n. Bởi việc mang đến sự lựa chọn chủ động trong ship h&agrave;ng cho kh&aacute;ch l&agrave; điều cần thiết. N&ecirc;n ch&uacute; &yacute; rằng đ&ocirc;i l&uacute;c vấn đề ship h&agrave;ng lại khiến kh&aacute;ch bỏ đi m&agrave; kh&ocirc;ng mua h&agrave;ng ở shop nữa.</p>\r\n\r\n<p><strong>=&gt; C&aacute;ch hạn chế</strong>: Kh&aacute;ch h&agrave;ng lu&ocirc;n muốn vừa được mua sắm gi&aacute; rẻ vừa được phục vụ ship miễn ph&iacute; hoặc ph&iacute; thấp. Bạn ho&agrave;n to&agrave;n c&oacute; thể đ&aacute;p ứng được cả hai nhu cầu n&agrave;y m&agrave; vẫn cung cấp cho kh&aacute;ch h&agrave;ng đầy đủ c&aacute;c tuỳ chọn ship bằng c&aacute;ch đưa ra nhiều lựa chọn cho họ. Với c&aacute;ch n&agrave;y, bạn sẽ kh&ocirc;ng bao giờ l&agrave;m mất l&ograve;ng kh&aacute;ch h&agrave;ng, v&igrave; họ được lựa chọn c&aacute;i m&agrave; họ muốn.</p>\r\n\r\n<p><strong>2. Đ&oacute;ng g&oacute;i sai c&aacute;ch</strong></p>\r\n\r\n<p>Với ship h&agrave;ng, kh&acirc;u đ&oacute;ng g&oacute;i l&agrave; kh&acirc;u quan trọng bởi n&oacute; li&ecirc;n quan đến sự an to&agrave;n của h&agrave;ng ho&aacute; trong suốt qu&aacute; tr&igrave;nh vận chuyển. Việc đ&oacute;ng g&oacute;i sai c&aacute;ch, như d&ugrave;ng hộp đựng qu&aacute; to hoặc qu&aacute; nhỏ, hay kh&ocirc;ng c&oacute; c&aacute;c lớp bảo vệ, &hellip; đều dễ dẫn đến việc sản phẩm bị hư hỏng v&agrave; kh&ocirc;ng c&ograve;n được nguy&ecirc;n vẹn như ban đầu.</p>\r\n\r\n<p><strong>=&gt; C&aacute;ch hạn chế</strong>: Với bất k&igrave; sản phẩm n&agrave;o, bạn cũng n&ecirc;n đ&oacute;ng g&oacute;i thật cẩn thận. Ph&iacute;a trong hộp đựng n&ecirc;n c&oacute; một lớp xốp bảo vệ d&agrave;y tương đối. Tuy nhi&ecirc;n, tuỳ từng mặt h&agrave;ng để bạn chọn c&aacute;ch đ&oacute;ng g&oacute;i tốt nhất. Đ&oacute;ng g&oacute;i cẩn thận kh&ocirc;ng chỉ gi&uacute;p bảo vệ sản phẩm m&agrave; c&ograve;n khiến kh&aacute;ch h&agrave;ng cảm thấy an t&acirc;m v&agrave; h&agrave;i l&ograve;ng với dịch vụ của bạn.</p>\r\n\r\n<p><strong>3. Ch&iacute;nh s&aacute;ch đổi trả kh&ocirc;ng r&otilde; r&agrave;ng</strong></p>\r\n\r\n<p>B&aacute;n h&agrave;ng online&nbsp;kh&ocirc;ng thể tr&aacute;nh khỏi việc kh&aacute;ch h&agrave;ng đổi trả v&igrave; rất nhiều l&yacute; do. Do đ&oacute;, ch&iacute;nh s&aacute;ch đổi trả n&ecirc;n được ch&uacute; trọng, v&igrave; kh&aacute;ch h&agrave;ng c&oacute; thể sẽ cảm thấy thất vọng v&agrave; do dự nếu n&oacute; kh&ocirc;ng r&otilde; r&agrave;ng.</p>\r\n\r\n<p><strong>=&gt; C&aacute;ch hạn chế</strong>: Sự cạnh trong trong b&aacute;n h&agrave;ng online l&agrave; kh&ocirc;ng hề nhỏ. Kh&aacute;ch h&agrave;ng sẽ kh&ocirc;ng chờ đợi để trải nghiệm rồi mới đ&aacute;nh gi&aacute; ch&iacute;nh s&aacute;ch của bạn m&agrave; họ sẽ đ&aacute;nh gi&aacute; ngay từ ban đầu sau khi đọc được những g&igrave; bạn đề ra. Họ muốn chắc chắn rằng họ sẽ được đổi hay trả lại nếu họ kh&ocirc;ng th&iacute;ch m&agrave;u n&agrave;y hay k&iacute;ch cỡ n&agrave;y kh&ocirc;ng vừa với họ. V&igrave; vậy, những ch&iacute;nh s&aacute;ch đổi trả bạn đề ra cần hợp l&yacute; v&agrave; gi&uacute;p kh&aacute;ch h&agrave;ng hiểu cũng như ghi nhớ ngay từ lần đầu ti&ecirc;n. B&ecirc;n cạnh đ&oacute;, ch&uacute;ng n&ecirc;n ngắn gọn, s&uacute;c t&iacute;ch v&agrave; dễ hiểu, dễ ghi nhớ. Bạn cần tr&aacute;nh c&acirc;u từ d&agrave;i d&ograve;ng, phức tạp, v&igrave; điều đ&oacute; c&oacute; thể khiến kh&aacute;ch h&agrave;ng phải lo lắng khi đặt h&agrave;ng ở shop của bạn. Một điều quan trọng l&agrave; đừng đặt ch&iacute;nh s&aacute;ch đổi trả ở những nơi kh&oacute; t&igrave;m tr&ecirc;n website. Thay v&agrave;o đ&oacute;, bạn n&ecirc;n để ch&uacute;ng ở ngay tại trang b&aacute;n h&agrave;ng, nơi kh&aacute;ch tiến h&agrave;nh đặt h&agrave;ng để giao dịch diễn ra nhanh ch&oacute;ng v&agrave; thuận lợi hơn.</p>', 6, NULL, '{\"seo_title\":\"5 l\\u1ed7i ship h\\u00e0ng ph\\u1ed5 bi\\u1ebfn v\\u00e0 c\\u00e1c c\\u00e1ch \\u0111\\u1ec3 h\\u1ea1n ch\\u1ebf ch\\u00fang\",\"seo_description\":\"5 l\\u1ed7i ship h\\u00e0ng ph\\u1ed5 bi\\u1ebfn v\\u00e0 c\\u00e1c c\\u00e1ch \\u0111\\u1ec3 h\\u1ea1n ch\\u1ebf ch\\u00fang\",\"seo_keyword\":\"5 l\\u1ed7i ship h\\u00e0ng ph\\u1ed5 bi\\u1ebfn v\\u00e0 c\\u00e1c c\\u00e1ch \\u0111\\u1ec3 h\\u1ea1n ch\\u1ebf ch\\u00fang\"}', 0, 14, '2023-11-03 15:29:34', '2024-03-26 02:42:37'),
(6, '7 tuyệt chiêu tạo ấn tượng tốt khi ship hàng cho khách', '7-tuyet-chieu-tao-an-tuong-tot-khi-ship-hang-cho-khach-2024-03-25-080716', NULL, '1', '1', '2023-11-03-6.jpg', 'Hầu hết các dịch vụ ship hàng ở Việt Nam vẫn chưa tạo được ấn tượng tốt với khách hàng và khiến...', '<p>Dịch vụ ship h&agrave;ng&nbsp;ra đời gi&uacute;p người mua h&agrave;ng c&oacute; được sản phẩm m&igrave;nh ưng &yacute; m&agrave; kh&ocirc;ng phải đến tận nơi. Điều n&agrave;y đặc biệt ph&ugrave; hợp v&agrave; thuận tiện cho những ai bận rộn hoặc ở xa kh&ocirc;ng thể đến tận nơi để mua h&agrave;ng. Tuy nhi&ecirc;n, c&oacute; kh&ocirc;ng &iacute;t lỗi m&agrave; hầu như cửa h&agrave;ng n&agrave;o cũng c&oacute; thể mắc phải khiến kh&aacute;ch h&agrave;ng kh&ocirc;ng vừa l&ograve;ng.&nbsp;<strong>Successtrans&nbsp;</strong>sẽ gi&uacute;p bạn liệt k&ecirc; một số lỗi phổ biến v&agrave; c&aacute;ch để bạn hạn chế ch&uacute;ng.</p>\r\n\r\n<p><img alt=\"ship-hang-nhanh-1200x900\" src=\"https://successtrans.vn/wp-content/uploads/2015/11/ship-hang-nhanh-1200x900-1-635x360.jpeg\" title=\"ship-hang-nhanh-1200x900\" /></p>\r\n\r\n<p><strong>1. Thiếu tuỳ chọn ship h&agrave;ng</strong></p>\r\n\r\n<p>Để giảm bớt chi ph&iacute; ship h&agrave;ng, nhất l&agrave; với dịch vụ free ship, nhiều cửa h&agrave;ng đ&atilde; lược bỏ bớt một số tuỳ chọn ship d&ugrave; n&oacute; c&oacute; đem lại nhiều lợi &iacute;ch, về cả tốc độ v&agrave; sự linh hoạt m&agrave; kh&aacute;ch h&agrave;ng cần đến. Điều n&agrave;y l&agrave; kh&ocirc;ng n&ecirc;n. Bởi việc mang đến sự lựa chọn chủ động trong ship h&agrave;ng cho kh&aacute;ch l&agrave; điều cần thiết. N&ecirc;n ch&uacute; &yacute; rằng đ&ocirc;i l&uacute;c vấn đề ship h&agrave;ng lại khiến kh&aacute;ch bỏ đi m&agrave; kh&ocirc;ng mua h&agrave;ng ở shop nữa.</p>\r\n\r\n<p><strong>=&gt; C&aacute;ch hạn chế</strong>: Kh&aacute;ch h&agrave;ng lu&ocirc;n muốn vừa được mua sắm gi&aacute; rẻ vừa được phục vụ ship miễn ph&iacute; hoặc ph&iacute; thấp. Bạn ho&agrave;n to&agrave;n c&oacute; thể đ&aacute;p ứng được cả hai nhu cầu n&agrave;y m&agrave; vẫn cung cấp cho kh&aacute;ch h&agrave;ng đầy đủ c&aacute;c tuỳ chọn ship bằng c&aacute;ch đưa ra nhiều lựa chọn cho họ. Với c&aacute;ch n&agrave;y, bạn sẽ kh&ocirc;ng bao giờ l&agrave;m mất l&ograve;ng kh&aacute;ch h&agrave;ng, v&igrave; họ được lựa chọn c&aacute;i m&agrave; họ muốn.</p>\r\n\r\n<p><strong>2. Đ&oacute;ng g&oacute;i sai c&aacute;ch</strong></p>\r\n\r\n<p>Với ship h&agrave;ng, kh&acirc;u đ&oacute;ng g&oacute;i l&agrave; kh&acirc;u quan trọng bởi n&oacute; li&ecirc;n quan đến sự an to&agrave;n của h&agrave;ng ho&aacute; trong suốt qu&aacute; tr&igrave;nh vận chuyển. Việc đ&oacute;ng g&oacute;i sai c&aacute;ch, như d&ugrave;ng hộp đựng qu&aacute; to hoặc qu&aacute; nhỏ, hay kh&ocirc;ng c&oacute; c&aacute;c lớp bảo vệ, &hellip; đều dễ dẫn đến việc sản phẩm bị hư hỏng v&agrave; kh&ocirc;ng c&ograve;n được nguy&ecirc;n vẹn như ban đầu.</p>\r\n\r\n<p><strong>=&gt; C&aacute;ch hạn chế</strong>: Với bất k&igrave; sản phẩm n&agrave;o, bạn cũng n&ecirc;n đ&oacute;ng g&oacute;i thật cẩn thận. Ph&iacute;a trong hộp đựng n&ecirc;n c&oacute; một lớp xốp bảo vệ d&agrave;y tương đối. Tuy nhi&ecirc;n, tuỳ từng mặt h&agrave;ng để bạn chọn c&aacute;ch đ&oacute;ng g&oacute;i tốt nhất. Đ&oacute;ng g&oacute;i cẩn thận kh&ocirc;ng chỉ gi&uacute;p bảo vệ sản phẩm m&agrave; c&ograve;n khiến kh&aacute;ch h&agrave;ng cảm thấy an t&acirc;m v&agrave; h&agrave;i l&ograve;ng với dịch vụ của bạn.</p>\r\n\r\n<p><strong>3. Ch&iacute;nh s&aacute;ch đổi trả kh&ocirc;ng r&otilde; r&agrave;ng</strong></p>\r\n\r\n<p>B&aacute;n h&agrave;ng online&nbsp;kh&ocirc;ng thể tr&aacute;nh khỏi việc kh&aacute;ch h&agrave;ng đổi trả v&igrave; rất nhiều l&yacute; do. Do đ&oacute;, ch&iacute;nh s&aacute;ch đổi trả n&ecirc;n được ch&uacute; trọng, v&igrave; kh&aacute;ch h&agrave;ng c&oacute; thể sẽ cảm thấy thất vọng v&agrave; do dự nếu n&oacute; kh&ocirc;ng r&otilde; r&agrave;ng.</p>\r\n\r\n<p><strong>=&gt; C&aacute;ch hạn chế</strong>: Sự cạnh trong trong b&aacute;n h&agrave;ng online l&agrave; kh&ocirc;ng hề nhỏ. Kh&aacute;ch h&agrave;ng sẽ kh&ocirc;ng chờ đợi để trải nghiệm rồi mới đ&aacute;nh gi&aacute; ch&iacute;nh s&aacute;ch của bạn m&agrave; họ sẽ đ&aacute;nh gi&aacute; ngay từ ban đầu sau khi đọc được những g&igrave; bạn đề ra. Họ muốn chắc chắn rằng họ sẽ được đổi hay trả lại nếu họ kh&ocirc;ng th&iacute;ch m&agrave;u n&agrave;y hay k&iacute;ch cỡ n&agrave;y kh&ocirc;ng vừa với họ. V&igrave; vậy, những ch&iacute;nh s&aacute;ch đổi trả bạn đề ra cần hợp l&yacute; v&agrave; gi&uacute;p kh&aacute;ch h&agrave;ng hiểu cũng như ghi nhớ ngay từ lần đầu ti&ecirc;n. B&ecirc;n cạnh đ&oacute;, ch&uacute;ng n&ecirc;n ngắn gọn, s&uacute;c t&iacute;ch v&agrave; dễ hiểu, dễ ghi nhớ. Bạn cần tr&aacute;nh c&acirc;u từ d&agrave;i d&ograve;ng, phức tạp, v&igrave; điều đ&oacute; c&oacute; thể khiến kh&aacute;ch h&agrave;ng phải lo lắng khi đặt h&agrave;ng ở shop của bạn. Một điều quan trọng l&agrave; đừng đặt ch&iacute;nh s&aacute;ch đổi trả ở những nơi kh&oacute; t&igrave;m tr&ecirc;n website. Thay v&agrave;o đ&oacute;, bạn n&ecirc;n để ch&uacute;ng ở ngay tại trang b&aacute;n h&agrave;ng, nơi kh&aacute;ch tiến h&agrave;nh đặt h&agrave;ng để giao dịch diễn ra nhanh ch&oacute;ng v&agrave; thuận lợi hơn.</p>', 6, NULL, '{\"seo_title\":\"7 tuy\\u1ec7t chi\\u00eau t\\u1ea1o \\u1ea5n t\\u01b0\\u1ee3ng t\\u1ed1t khi ship h\\u00e0ng cho kh\\u00e1ch\",\"seo_description\":\"7 tuy\\u1ec7t chi\\u00eau t\\u1ea1o \\u1ea5n t\\u01b0\\u1ee3ng t\\u1ed1t khi ship h\\u00e0ng cho kh\\u00e1ch\",\"seo_keyword\":\"7 tuy\\u1ec7t chi\\u00eau t\\u1ea1o \\u1ea5n t\\u01b0\\u1ee3ng t\\u1ed1t khi ship h\\u00e0ng cho kh\\u00e1ch\"}', 0, 39, '2023-11-03 15:45:39', '2024-03-26 02:41:52');

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
(6, 'TIN TỨC', '2023-11-02-6', NULL, NULL, '1', 1, NULL, '{\"seo_title\":\"TIN T\\u1ee8C\",\"seo_description\":\"TIN T\\u1ee8C\",\"seo_keyword\":\"TIN T\\u1ee8C2023 11 02 6\"}', '2023-11-02 08:32:30', '2024-03-23 09:02:14');

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

--
-- Dumping data for table `ca_page`
--

INSERT INTO `ca_page` (`id`, `name`, `alias`, `content`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Giới thiệu', '2023-11-21-4', '<div class=\"main_section section\">\r\n<div class=\"container_n informationWrap\" id=\"informationWrap\">\r\n<div class=\"info\">\r\n<h2>79 Post Express &ndash; c&ocirc;ng ty ship h&agrave;ng, giao h&agrave;ng vận tải h&agrave;ng đầu TẬN T&Acirc;M VỚI MỖI KIỆN H&Agrave;NG - ĐƯA NIỀM TIN ĐẾN BẠN</h2>\r\n\r\n<p>Với kinh nghiệm nhiều năm trong lĩnh vực vận chuyển h&agrave;ng h&oacute;a, 79 Post Express được nhiều kh&aacute;ch h&agrave;ng lựa chọn để giao h&agrave;ng, vận chuyển h&agrave;ng h&oacute;a mọi nơi khắp tỉnh th&agrave;nh Việt Nam. Với phương ch&acirc;m tận t&acirc;m với mỗi kiện h&agrave;ng đưa niềm tin đến bạn. Gi&aacute; cả hợp l&yacute; cạnh tranh tr&ecirc;n thị trường. Khi sử dụng dịch vụ của 79 Post Express, bạn sẽ nhận được những ưu đ&atilde;i:</p>\r\n\r\n<ul>\r\n	<li>- Thời gian vận chuyển nhanh cam kết đ&uacute;ng hẹn.</li>\r\n	<li>- Quy tr&igrave;nh vận chuyển nghi&ecirc;m ngặt gi&uacute;p hạn chế tối đa t&igrave;nh trạng hư hỏng, thất lạc h&agrave;ng h&oacute;a.</li>\r\n	<li>- Miễn ph&iacute; dịch vụ thu hộ.</li>\r\n	<li>- Ch&iacute;nh s&aacute;ch chiết khấu, giảm gi&aacute; cho Qu&yacute; h&agrave;ng c&oacute; nhu cầu nhập h&agrave;ng thường xuy&ecirc;n.</li>\r\n	<li>- Thanh to&aacute;n bằng nhiều h&igrave;nh thức: Chuyển khoản, đặt cọc tại văn ph&ograve;ng hoặc tại nh&agrave;.</li>\r\n</ul>\r\n\r\n<p><img alt=\"Giới thiệu\" src=\"../img/sec_price_image1.png\" /></p>\r\n\r\n<h2>ĐIỂM NỔI BẬT CỦA CH&Uacute;NG T&Ocirc;I</h2>\r\n\r\n<p><img alt=\"Điểm nổi bật của chúng tôi\" src=\"../public/img/feature_image_2.webp\" /></p>\r\n\r\n<h4>Bảo hiểm h&agrave;ng h&oacute;a</h4>\r\n\r\n<p>Mức ph&iacute; bảo hiểm l&agrave; 5% gi&aacute; trị l&ocirc; h&agrave;ng. Gi&uacute;p bạn y&ecirc;n t&acirc;m, tiết kiệm hơn khi gởi h&agrave;ng tại 79 Post Express</p>\r\n\r\n<h4>Bồi thường 100%</h4>\r\n\r\n<p>Khi đặt cọc, nếu h&agrave;ng h&oacute;a kh&ocirc;ng đến tay bạn. Ch&uacute;ng t&ocirc;i ho&agrave;n trả 100% tiền cọc &amp; m&oacute;n qu&agrave; thay lời xin lỗi</p>\r\n\r\n<h4>Gi&aacute; cước tiết kiệm</h4>\r\n\r\n<p>79 Post Express lu&ocirc;n cố gắng loại bỏ những kh&acirc;u trung gian để mang đến sản phẩm c&oacute; chi ph&iacute; hợp l&yacute; nhất</p>\r\n\r\n<h4>Miễn ph&iacute; dịch vụ thu hộ</h4>\r\n\r\n<p>Miễn ph&iacute; thu hộ tiền cho kh&aacute;ch, cho shop . Bạn tiết kiệm chi ph&iacute; để sở hữu dịch vụ n&agrave;y</p>\r\n</div>\r\n</div>\r\n</div>', '1', '2023-11-21 02:20:15', '2024-03-23 03:38:41'),
(5, 'Chính sách giao hàng', 'chinh-sach-giao-hang', '<p>Đang cập nhật</p>', '2', '2024-03-26 02:05:08', '2024-03-26 02:22:14'),
(6, 'Thỏa thuận người dùng', 'thoa-thuan-nguoi-dung', '<ul>\r\n	<li><a href=\"#\" title=\"#\">Thỏa thuận người d&ugrave;ng</a></li>\r\n</ul>', '2', '2024-03-26 02:05:31', '2024-03-26 02:22:21'),
(7, 'Tuyển dụng', 'tuyen-dung', '<p><strong>Th&ocirc;ng tin tuyển dụng cả nước</strong></p>\r\n\r\n<ol>\r\n	<li>&nbsp;Vị tr&iacute; quản l&yacute; cấp tỉnh: 2 quản l&yacute; / tỉnh</li>\r\n	<li>&nbsp;Vị tr&iacute; quản l&yacute; cấp huyện: 1 quản l&yacute; /huyện</li>\r\n	<li>&nbsp;Vị tr&iacute; ship v&agrave; nhận h&agrave;ng mỗi tỉnh: 70 nh&acirc;n vi&ecirc;n</li>\r\n	<li>&nbsp;Nh&acirc;n vi&ecirc;n tiếp thị đi thị trường: 2 người / tỉnh</li>\r\n</ol>\r\n\r\n<p><strong>Th&ocirc;ng tin tuyển dụng tại tỉnh C&agrave; Mau</strong></p>\r\n\r\n<ol>\r\n	<li>T&agrave;i ch&iacute;nh kế to&aacute;n:5 người</li>\r\n	<li>&nbsp;Quản l&yacute; kho vận: 5 người</li>\r\n</ol>\r\n\r\n<p>Ưu ti&ecirc;n cho người c&oacute; kinh nghiệm</p>', '2', '2024-03-26 02:05:54', '2024-03-26 02:31:28');

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
  `cid_main` int DEFAULT NULL,
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

INSERT INTO `ca_slideshow` (`id`, `cid_main`, `name`, `links`, `picture`, `status`, `position`, `created_at`, `updated_at`) VALUES
(13, NULL, '79 Post Press', '/', 'slide_1711165512.jpg', '1', 1, '2023-10-28 09:12:50', '2024-03-23 03:46:53');

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
(1, '79 Express', '79post_express@gmail.com', '79post', NULL, '$2y$10$IwMh8MtmzTRwndIKBWFIdea.cXi092mBwyJ7OMclX/WqruPnIa1dG', '0473-69-7071', NULL, '1', 1, NULL, '111728662347916896451', 'PXIVqamzCNeenqZZLm8utjcriMKg6nJFUtBuylnRrsO93eCo5K4b6nfM0htO', '2018-10-21 19:17:22', '2024-03-23 03:02:27');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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

--
-- Dumping data for table `tag_main`
--

INSERT INTO `tag_main` (`id`, `name`, `alias`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tag_news`
--

CREATE TABLE `tag_news` (
  `cid_news` int NOT NULL,
  `cid_tag` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tag_news`
--

INSERT INTO `tag_news` (`cid_news`, `cid_tag`) VALUES
(7, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Indexes for table `ca_contact`
--
ALTER TABLE `ca_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_general`
--
ALTER TABLE `ca_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_main`
--
ALTER TABLE `ca_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_main_human`
--
ALTER TABLE `ca_main_human`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_main_value`
--
ALTER TABLE `ca_main_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca_news`
--
ALTER TABLE `ca_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ca_banner`
--
ALTER TABLE `ca_banner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ca_contact`
--
ALTER TABLE `ca_contact`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ca_general`
--
ALTER TABLE `ca_general`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ca_main`
--
ALTER TABLE `ca_main`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ca_main_human`
--
ALTER TABLE `ca_main_human`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ca_main_value`
--
ALTER TABLE `ca_main_value`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca_news`
--
ALTER TABLE `ca_news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ca_news_cate`
--
ALTER TABLE `ca_news_cate`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ca_page`
--
ALTER TABLE `ca_page`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag_main`
--
ALTER TABLE `tag_main`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
