-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 10:44 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cty_phongkhamnamkhangnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `address_ip` varchar(255) NOT NULL,
  `comment_detail` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `media_file` varchar(255) NOT NULL,
  `media_name` varchar(255) DEFAULT NULL,
  `media_alias` varchar(255) DEFAULT NULL,
  `media_folder` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_status` tinyint(1) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_alias` varchar(255) NOT NULL,
  `post_avatar` varchar(255) DEFAULT NULL,
  `post_description` text NOT NULL,
  `post_detail` longtext NOT NULL,
  `post_keyword` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `term_id`, `user_id`, `post_status`, `post_name`, `post_alias`, `post_avatar`, `post_description`, `post_detail`, `post_keyword`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 'Về chúng tôi', 've-chung-toi', NULL, 'Phòng khám Nam Khang Hà Nội là phòng khám nam khoa trọng điểm ở thành phố Hà nội, làphòng khám nam khoa chuyên nghiệp chất lượng cao đầu tiên tại Hà Nội, phòng khám nam khoa chuyên nghiệp hiện đại hóa được ra đời trong hoàn cảnh kiến thức về sức khỏe sinh dục của người bệnh còn kém, bệnh viện viện nam khoa chuyên nghiệp còn thiếu thốn, mà nhu cầu của gia đình xã hội bức bối. Sự ra đời của phòng khám là cột mốc trong điều trị các bệnh nam khoa chuyên nghiệp trong lĩnh vực y tế tại Hà Nội và trên toàn quốc.', '', '', '2017-03-22 00:24:11', '2017-03-22 00:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `web_icon` varchar(255) DEFAULT NULL,
  `web_logo` varchar(255) DEFAULT NULL,
  `web_name` varchar(255) DEFAULT NULL,
  `web_description` text,
  `web_keyword` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `user_id`, `web_icon`, `web_logo`, `web_name`, `web_description`, `web_keyword`, `created_at`, `updated_at`) VALUES
(1, 1, '1490167595.png', '1490167624.png', 'Khoa nam khoa - Phòng khám Nam Khang', 'Khoa nam khoa - Phòng khám Nam Khang', 'Khoa nam khoa - Phòng khám Nam Khang', '2017-03-22 07:27:04', '2017-03-22 00:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `term_name` varchar(255) NOT NULL,
  `term_alias` varchar(255) NOT NULL,
  `term_order` int(11) NOT NULL,
  `term_description` text,
  `term_keyword` text,
  `term_comment` longtext,
  `term_view` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `user_id`, `term_id`, `term_name`, `term_alias`, `term_order`, `term_description`, `term_keyword`, `term_comment`, `term_view`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Phòng khám Nam Khang', 'phong-kham-nam-khang', 0, '', '', NULL, NULL, '2017-03-21 21:22:24', '2017-03-22 00:23:18'),
(2, 1, 0, 'Bệnh về tuyến tiền liệt', 'benh-ve-tuyen-tien-liet', 0, '', '', NULL, NULL, '2017-03-22 00:22:32', '2017-03-22 03:20:21'),
(3, 1, 2, 'Viêm tuyến tiền liệt', 'viem-tuyen-tien-liet', 0, '', '', NULL, NULL, '2017-03-22 03:20:46', '2017-03-22 03:20:46'),
(4, 1, 2, 'U nang tuyến tiền liệt', 'u-nang-tuyen-tien-liet', 0, '', '', NULL, NULL, '2017-03-22 03:20:59', '2017-03-22 03:20:59'),
(5, 1, 2, 'Tăng sinh tuyến tiền liệt', 'tang-sinh-tuyen-tien-liet', 0, '', '', NULL, NULL, '2017-03-22 03:21:11', '2017-03-22 03:21:11'),
(6, 1, 2, 'Phì đại tuyến tiền liệt', 'phi-dai-tuyen-tien-liet', 0, '', '', NULL, NULL, '2017-03-22 03:21:30', '2017-03-22 03:21:30'),
(7, 1, 0, 'Rối loạn chức năng sinh dục', 'roi-loan-chuc-nang-sinh-duc', 0, '', '', NULL, NULL, '2017-03-22 03:21:41', '2017-03-22 03:21:41'),
(8, 1, 7, 'Liệt dương', 'liet-duong', 0, '', '', NULL, NULL, '2017-03-22 03:21:54', '2017-03-22 03:21:54'),
(9, 1, 7, 'Rối loạn cương dương', 'roi-loan-cuong-duong', 0, '', '', NULL, NULL, '2017-03-22 03:22:06', '2017-03-22 03:22:06'),
(10, 1, 7, 'Xuất tinh sớm', 'xuat-tinh-som', 0, '', '', NULL, NULL, '2017-03-22 03:22:15', '2017-03-22 03:22:15'),
(11, 1, 7, 'Rối loạn xuất tinh', 'roi-loan-xuat-tinh', 0, '', '', NULL, NULL, '2017-03-22 03:22:33', '2017-03-22 03:22:33'),
(12, 1, 0, 'Chỉnh hình bộ phận sinh dục', 'chinh-hinh-bo-phan-sinh-duc', 0, '', '', NULL, NULL, '2017-03-22 03:22:57', '2017-03-22 03:22:57'),
(13, 1, 12, 'Dài bao quy đầu', 'dai-bao-quy-dau', 0, '', '', NULL, NULL, '2017-03-22 03:23:53', '2017-03-22 03:23:53'),
(14, 1, 12, 'Kéo dài dương vật', 'keo-dai-duong-vat', 0, '', '', NULL, NULL, '2017-03-22 03:24:03', '2017-03-22 03:24:03'),
(15, 1, 12, 'Thủ thuật hẹp bao quy đầu', 'thu-thuat-hep-bao-quy-dau', 0, '', '', NULL, NULL, '2017-03-22 03:24:23', '2017-03-22 03:24:23'),
(16, 1, 12, 'Tăng kích thước dương vật', 'tang-kich-thuoc-duong-vat', 0, '', '', NULL, NULL, '2017-03-22 03:24:40', '2017-03-22 03:24:40'),
(17, 1, 0, 'Viêm nhiễm hệ thống sinh dục', 'viem-nhiem-he-thong-sinh-duc', 0, '', '', NULL, NULL, '2017-03-22 03:24:52', '2017-03-22 03:24:52'),
(18, 1, 17, 'Viêm quy đầu', 'viem-quy-dau', 0, '', '', NULL, NULL, '2017-03-22 03:25:07', '2017-03-22 03:25:07'),
(19, 1, 17, 'Viêm bàng quang', 'viem-bang-quang', 0, '', '', NULL, NULL, '2017-03-22 03:25:22', '2017-03-22 03:25:22'),
(20, 1, 17, 'Viêm niệu đạo', 'viem-nieu-dao', 0, '', '', NULL, NULL, '2017-03-22 03:25:33', '2017-03-22 03:25:33'),
(21, 1, 17, 'Viêm tinh hoàn', 'viem-tinh-hoan', 0, '', '', NULL, NULL, '2017-03-22 03:25:46', '2017-03-22 03:25:46'),
(22, 1, 0, 'Vô sinh nam', 'vo-sinh-nam', 0, '', '', NULL, NULL, '2017-03-22 03:25:56', '2017-03-22 03:25:56'),
(23, 1, 22, 'Ít tinh trùng', 'it-tinh-trung', 0, '', '', NULL, NULL, '2017-03-22 03:26:12', '2017-03-22 03:26:12'),
(24, 1, 22, 'Xuất tinh ra máu', 'xuat-tinh-ra-mau', 0, '', '', NULL, NULL, '2017-03-22 03:26:26', '2017-03-22 03:26:26'),
(25, 1, 22, 'Vô tinh', 'vo-tinh', 0, '', '', NULL, NULL, '2017-03-22 03:26:42', '2017-03-22 03:26:42'),
(26, 1, 22, 'Yếu tinh trùng', 'yeu-tinh-trung', 0, '', '', NULL, NULL, '2017-03-22 03:26:59', '2017-03-22 03:26:59'),
(27, 1, 0, 'Bệnh xã hội', 'benh-xa-hoi', 0, '', '', NULL, NULL, '2017-03-22 03:27:09', '2017-03-22 03:27:09'),
(28, 1, 27, 'Sùi mào gà', 'sui-mao-ga', 0, '', '', NULL, NULL, '2017-03-22 03:27:22', '2017-03-22 03:27:22'),
(29, 1, 27, 'Giang mai', 'giang-mai', 0, '', '', NULL, NULL, '2017-03-22 03:27:34', '2017-03-22 03:27:34'),
(30, 1, 27, 'Bệnh lậu', 'benh-lau', 0, '', '', NULL, NULL, '2017-03-22 03:27:48', '2017-03-22 03:27:48'),
(31, 1, 27, 'Mụn rộp sinh dục', 'mun-rop-sinh-duc', 0, '', '', NULL, NULL, '2017-03-22 03:28:03', '2017-03-22 03:28:03'),
(32, 1, 0, 'Kỹ thuật điều trị', 'ky-thuat-dieu-tri', 0, '', '', NULL, NULL, '2017-03-22 03:28:18', '2017-03-23 02:35:22'),
(33, 1, 0, 'Thiết bị tiên tiến', 'thiet-bi-tien-tien', 0, '', '', NULL, NULL, '2017-03-22 03:28:29', '2017-03-22 03:28:29'),
(34, 1, 0, 'Bệnh án điển hình', 'benh-an-dien-hinh', 0, '', '', NULL, NULL, '2017-03-22 03:29:06', '2017-03-22 03:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_group` varchar(255) NOT NULL,
  `user_block` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_avatar`, `user_name`, `user_email`, `user_group`, `user_block`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', 'pham-van-truong-1487748942.jpeg', 'Trường', 'truongbuon@hotmail.com', 'admin', 0, '2017-03-03 08:34:28', '2017-03-03 01:34:28'),
(2, 'user', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', 'pham-thanh-thuy-1487754937.jpeg', 'Thúy', 'vantruong3289@gmail.com', 'bien-tap', 0, '2017-03-07 05:00:39', '2017-03-06 22:00:39'),
(3, 'seo', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', NULL, 'Nhường', 'nhuong_xinh@gmail.com', 'seo', 1, '2017-03-03 09:25:27', '2017-03-03 02:25:27'),
(4, 'nga', '$2y$10$5BZpRSJ7tycdY16Ym2axi.MP2QlhPuGP81CKN6NMB16wmXcus.5SS', NULL, 'nga', NULL, 'bien-tap', 0, '2017-03-13 19:28:24', '2017-03-13 19:28:24'),
(5, 'lan', '$2y$10$CInTplXe.ZVcPDiUrM/Aseak1cOWQwXT0tXwIm8zI25y15umhJNtS', NULL, 'lan', NULL, 'bien-tap', 0, '2017-03-15 01:57:04', '2017-03-14 18:57:04'),
(6, 'hanh', '$2y$10$/V2P6xhmOBOJ9XiQ7ee8jOkNU3T9MS.TS/Giw3YqafDhMUtg4Ibpu', NULL, 'Hanh', NULL, 'bien-tap', 0, '2017-03-14 18:55:52', '2017-03-14 18:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `term_id` bigint(20) DEFAULT NULL,
  `view_sum` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `post_id`, `term_id`, `view_sum`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 17, '2017-03-23 09:33:22', '2017-03-23 02:33:22'),
(2, NULL, 3, 3, '2017-03-23 09:35:47', '2017-03-23 02:35:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
