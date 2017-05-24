-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 07:50 AM
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
(1, 1, '1488939922.png', '1488939847.png', 'Khoa xương khớp - Phòng khám Nhân Ái', 'Chuyên chữa các bệnh về xương khớp', 'Chuyên chữa các bệnh về xương khớp', '2017-03-08 02:25:22', '2017-03-07 19:25:22');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
