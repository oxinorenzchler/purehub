-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 10:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purehub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'dsdasdasdas', '2018-06-17 17:03:52', '2018-06-17 17:03:52'),
(2, 1, 1, 'dasdasd', '2018-06-17 17:37:03', '2018-06-17 17:37:03'),
(3, 1, 1, 'Deputa!', '2018-06-17 18:18:49', '2018-06-17 18:18:49'),
(4, 1, 5, 'long beach!', '2018-06-17 18:54:56', '2018-06-17 18:54:56'),
(5, 1, 6, 'dsadsa', '2018-06-17 19:37:25', '2018-06-17 19:37:25'),
(6, 1, 6, 'yfedhygfd', '2018-06-17 19:39:03', '2018-06-17 19:39:03'),
(7, 1, 2, 'haha!', '2018-06-17 21:54:49', '2018-06-17 21:54:49'),
(8, 1, 7, 'comment1', '2018-06-17 22:33:03', '2018-06-17 22:33:03'),
(9, 1, 7, 'comment 1', '2018-06-17 22:33:18', '2018-06-17 22:33:18'),
(10, 1, 7, 'comment 2', '2018-06-17 22:33:28', '2018-06-17 22:33:28'),
(11, 1, 7, 'comment 3', '2018-06-17 22:33:32', '2018-06-17 22:33:32'),
(12, 1, 11, 'hello world', '2018-06-17 23:46:26', '2018-06-17 23:46:26'),
(15, 1, 8, 'dem boy', '2018-06-17 23:59:41', '2018-06-17 23:59:41'),
(18, 3, 9, 'das', '2018-06-18 20:23:45', '2018-06-18 20:23:45'),
(19, 3, 10, 'edit!edited bes!', '2018-06-18 20:30:47', '2018-06-18 20:56:46'),
(20, 3, 10, 'comment 3', '2018-06-18 20:30:53', '2018-06-18 20:30:53'),
(22, 3, 11, 'dasd', '2018-06-18 21:06:10', '2018-06-18 21:06:10'),
(23, 4, 12, 'papapapapapap pp ap', '2018-06-18 21:25:47', '2018-06-18 21:26:19'),
(25, 1, 8, 'ssss', '2018-06-18 22:17:16', '2018-06-18 22:17:16'),
(26, 1, 8, 'dsadsafasdsadsa', '2018-06-18 22:39:51', '2018-06-18 22:41:24'),
(27, 1, 14, 'dsadsadsa', '2018-06-18 22:41:47', '2018-06-18 22:41:47'),
(28, 1, 8, 'sdadasdas', '2018-06-18 22:41:58', '2018-06-18 22:41:58'),
(29, 1, 8, 'edit', '2018-06-18 22:42:18', '2018-06-18 22:42:18'),
(30, 1, 8, 'eee', '2018-06-18 22:42:22', '2018-06-18 22:42:22'),
(31, 1, 8, 'boom boom', '2018-06-18 22:42:27', '2018-06-18 22:42:27'),
(32, 1, 8, 'haha!', '2018-06-18 22:42:31', '2018-06-18 22:42:31'),
(33, 1, 8, 'adklsakd;', '2018-06-18 22:44:15', '2018-06-18 22:44:15'),
(35, 1, 8, 'hahah!', '2018-06-18 22:46:12', '2018-06-18 22:46:12'),
(36, 1, 8, 'test comment', '2018-06-18 22:48:40', '2018-06-18 22:48:40'),
(37, 1, 8, 'bang bang beng beng', '2018-06-18 22:49:22', '2018-06-18 22:49:54'),
(38, 1, 23, 'dsada', '2018-06-19 00:11:36', '2018-06-19 00:11:36'),
(39, 1, 24, 'fasds', '2018-06-19 00:11:58', '2018-06-19 00:11:58'),
(40, 1, 24, 'sdds', '2018-06-19 00:12:14', '2018-06-19 00:12:14'),
(41, 1, 24, 'aa', '2018-06-19 00:23:37', '2018-06-19 00:23:37'),
(42, 4, 37, 'gaga', '2018-06-19 17:06:42', '2018-06-19 17:06:42'),
(43, 4, 61, 'ghaha', '2018-06-19 18:31:47', '2018-06-19 18:31:47'),
(44, 4, 61, 'hjldkas', '2018-06-19 18:33:42', '2018-06-19 18:33:42'),
(45, 4, 62, 'dsada', '2018-06-19 18:35:31', '2018-06-19 18:35:31'),
(46, 4, 62, '12121', '2018-06-19 18:37:15', '2018-06-19 18:37:15'),
(48, 4, 64, 'bang!', '2018-06-19 19:14:39', '2018-06-19 19:14:44'),
(50, 4, 66, 'dddd', '2018-06-19 23:39:05', '2018-06-19 23:39:05'),
(51, 4, 8, 'pangit!', '2018-06-19 23:46:19', '2018-06-19 23:46:19'),
(52, 4, 66, 'wag saksak', '2018-06-19 23:51:04', '2018-06-19 23:51:04'),
(53, 4, 66, 'hello', '2018-06-19 23:52:18', '2018-06-19 23:52:18'),
(54, 4, 70, 'new comment', '2018-06-19 23:55:11', '2018-06-19 23:55:11'),
(55, 4, 70, 'jajja', '2018-06-19 23:55:52', '2018-06-19 23:55:52'),
(56, 4, 75, 'dd', '2018-06-20 18:33:31', '2018-06-20 18:33:31'),
(57, 4, 140, 'i love ios!', '2018-06-24 18:57:02', '2018-06-24 18:57:02'),
(58, 4, 138, 'dasda', '2018-06-24 23:16:57', '2018-06-24 23:16:57'),
(59, 4, 141, 'dsadas', '2018-06-25 00:06:13', '2018-06-25 00:06:13'),
(60, 4, 142, 'fdsfds', '2018-06-25 00:06:54', '2018-06-25 00:06:54'),
(61, 4, 143, 'dsadsad', '2018-06-25 00:12:14', '2018-06-25 00:12:14'),
(62, 4, 143, 'dsadsa', '2018-06-25 00:12:46', '2018-06-25 00:12:46'),
(63, 4, 143, 'dasdasd', '2018-06-25 00:13:41', '2018-06-25 00:13:41'),
(64, 4, 143, 'dsadas', '2018-06-25 00:13:51', '2018-06-25 00:13:51'),
(65, 4, 143, 'hello', '2018-06-25 00:14:28', '2018-06-25 00:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` int(10) UNSIGNED NOT NULL,
  `follower` int(11) NOT NULL,
  `following` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-06-17 16:59:49', '2018-06-17 16:59:49'),
(2, 2, '2018-06-18 00:43:54', '2018-06-18 00:43:54'),
(3, 3, '2018-06-18 16:26:45', '2018-06-18 16:26:45'),
(4, 4, '2018-06-18 21:12:23', '2018-06-18 21:12:23'),
(5, 5, '2018-06-21 16:31:25', '2018-06-21 16:31:25'),
(6, 6, '2018-06-21 17:11:22', '2018-06-21 17:11:22'),
(7, 7, '2018-06-21 17:13:37', '2018-06-21 17:13:37'),
(8, 8, '2018-06-22 00:34:39', '2018-06-22 00:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_id` int(11) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `gallery_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'users/1/2.PNG', '2018-06-17 18:36:54', '2018-06-17 18:36:54'),
(2, 1, 'users/1/2.PNG', '2018-06-17 18:36:59', '2018-06-17 18:36:59'),
(3, 1, 'users/1/2.PNG', '2018-06-17 18:37:55', '2018-06-17 18:37:55'),
(4, 1, 'users/1/1.PNG', '2018-06-17 18:39:28', '2018-06-17 18:39:28'),
(5, 1, 'users/1/2.PNG', '2018-06-17 18:46:59', '2018-06-17 18:46:59'),
(6, 1, 'users/1/2.PNG', '2018-06-17 18:47:58', '2018-06-17 18:47:58'),
(7, 1, 'users/1/2.PNG', '2018-06-17 18:49:15', '2018-06-17 18:49:15'),
(8, 1, 'users/1/2.PNG', '2018-06-17 18:51:24', '2018-06-17 18:51:24'),
(9, 1, 'users/1/resort_map.jpg', '2018-06-17 18:52:57', '2018-06-17 18:52:57'),
(10, 1, 'users/1/resort_map.jpg', '2018-06-17 18:54:12', '2018-06-17 18:54:12'),
(11, 1, 'users/1/2.PNG', '2018-06-17 18:55:51', '2018-06-17 18:55:51'),
(12, 1, 'users/1/2.PNG', '2018-06-17 23:38:15', '2018-06-17 23:38:15'),
(13, 3, 'users/3/github.png', '2018-06-18 16:32:59', '2018-06-18 16:32:59'),
(14, 3, 'users/3/Schnitzel-3-landscape.jpg', '2018-06-18 21:05:14', '2018-06-18 21:05:14'),
(15, 1, 'users/1/900_675_13__20170615153917.jpg', '2018-06-18 23:56:00', '2018-06-18 23:56:00'),
(16, 1, 'users/1/900_675_13__20170615153917.jpg', '2018-06-18 23:57:01', '2018-06-18 23:57:01'),
(17, 1, 'users/1/1771601.jpg', '2018-06-19 00:01:52', '2018-06-19 00:01:52'),
(18, 1, 'users/1/1771601.jpg', '2018-06-19 00:02:21', '2018-06-19 00:02:21'),
(19, 1, 'users/1/020817_du301.jpg', '2018-06-19 00:02:59', '2018-06-19 00:02:59'),
(20, 1, 'users/1/1771601.jpg', '2018-06-19 00:05:32', '2018-06-19 00:05:32'),
(21, 4, 'users/4/900_675_30__20170914205657.jpg', '2018-06-19 16:49:36', '2018-06-19 16:49:36'),
(22, 4, 'users/4/1771601.jpg', '2018-06-19 17:15:00', '2018-06-19 17:15:00'),
(23, 4, 'users/4/900_675_30__20170914205657.jpg', '2018-06-19 17:15:20', '2018-06-19 17:15:20'),
(24, 1, 'users/1/1771601.jpg', '2018-06-20 23:40:35', '2018-06-20 23:40:35'),
(25, 1, 'users/1/020817_du301.jpg', '2018-06-20 23:42:54', '2018-06-20 23:42:54'),
(26, 1, 'users/1/900_675_13__20170615153917.jpg', '2018-06-20 23:43:40', '2018-06-20 23:43:40'),
(27, 1, 'users/1/dRgWl78N_400x400.jpg', '2018-06-20 23:44:53', '2018-06-20 23:44:53'),
(28, 1, 'users/1/nadine-lustre-brother-died-nadine-lustre-sister-nadine-lustre-instagram-nadine-lustre-funeral-nadine-lustre-depression-nadine-lustre-suicide-isaiah-lustre.jpg', '2018-06-20 23:45:35', '2018-06-20 23:45:35'),
(29, 1, 'users/1/020817_du301.jpg', '2018-06-20 23:51:35', '2018-06-20 23:51:35'),
(30, 1, 'users/1/e9aae5273ad8788efdac84f0fbcdba0e.jpg', '2018-06-20 23:54:59', '2018-06-20 23:54:59'),
(31, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', '2018-06-21 00:23:17', '2018-06-21 00:23:17'),
(32, 1, 'users/1/900_675_30__20170914205657.jpg', '2018-06-21 00:25:13', '2018-06-21 00:25:13'),
(33, 1, 'users/1/1771601.jpg', '2018-06-21 00:30:30', '2018-06-21 00:30:30'),
(34, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', '2018-06-21 00:42:01', '2018-06-21 00:42:01'),
(35, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', '2018-06-21 00:49:33', '2018-06-21 00:49:33'),
(36, 1, 'users/1/Webp.net-resizeimage.png', '2018-06-21 00:51:12', '2018-06-21 00:51:12'),
(37, 1, 'users/1/020817_du301.jpg', '2018-06-21 00:55:59', '2018-06-21 00:55:59'),
(38, 1, 'users/1/34189771_2107080476230927_7947201330383159296_n.png', '2018-06-21 00:57:27', '2018-06-21 00:57:27'),
(39, 1, 'users/1/linux.jfif', '2018-06-21 01:01:55', '2018-06-21 01:01:55'),
(40, 1, 'users/1/linux.jfif', '2018-06-21 01:03:26', '2018-06-21 01:03:26'),
(41, 4, 'users/4/download.jfif', '2018-06-21 16:06:34', '2018-06-21 16:06:34'),
(42, 4, 'users/4/Schnitzel-3-landscape.jpg', '2018-06-21 16:16:51', '2018-06-21 16:16:51'),
(43, 5, 'users/5/e9aae5273ad8788efdac84f0fbcdba0e.jpg', '2018-06-21 16:33:54', '2018-06-21 16:33:54'),
(44, 5, 'users/5/1771601.jpg', '2018-06-21 16:46:44', '2018-06-21 16:46:44'),
(45, 5, 'users/5/900_675_13__20170615153917.jpg', '2018-06-21 16:53:17', '2018-06-21 16:53:17'),
(46, 5, 'users/5/nadine-lustre-brother-died-nadine-lustre-sister-nadine-lustre-instagram-nadine-lustre-funeral-nadine-lustre-depression-nadine-lustre-suicide-isaiah-lustre.jpg', '2018-06-21 16:53:44', '2018-06-21 16:53:44'),
(47, 5, 'users/5/1771601.jpg', '2018-06-21 16:56:57', '2018-06-21 16:56:57'),
(48, 7, 'users/7/900_675_13__20170615153917.jpg', '2018-06-21 17:13:57', '2018-06-21 17:13:57'),
(49, 7, 'users/7/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', '2018-06-21 17:23:26', '2018-06-21 17:23:26'),
(50, 7, 'users/7/Schnitzel-3-landscape.jpg', '2018-06-21 17:26:01', '2018-06-21 17:26:01'),
(51, 7, 'users/7/linux.jfif', '2018-06-21 17:26:49', '2018-06-21 17:26:49'),
(52, 7, 'users/7/linux.jfif', '2018-06-21 17:27:38', '2018-06-21 17:27:38'),
(53, 7, 'users/7/linux.jfif', '2018-06-21 17:37:35', '2018-06-21 17:37:35'),
(54, 7, 'users/7/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', '2018-06-21 18:09:13', '2018-06-21 18:09:13'),
(55, 7, 'users/7/download.jfif', '2018-06-21 18:12:29', '2018-06-21 18:12:29'),
(56, 4, 'users/4/34189771_2107080476230927_7947201330383159296_n.png', '2018-06-22 00:33:23', '2018-06-22 00:33:23'),
(57, 8, 'users/8/900_675_30__20170914205657.jpg', '2018-06-22 00:36:01', '2018-06-22 00:36:01'),
(58, 8, 'users/8/1771601.jpg', '2018-06-22 00:55:49', '2018-06-22 00:55:49'),
(59, 8, 'users/8/1771601.jpg', '2018-06-22 00:55:54', '2018-06-22 00:55:54'),
(60, 8, 'users/8/900_675_13__20170615153917.jpg', '2018-06-22 00:56:34', '2018-06-22 00:56:34'),
(61, 8, 'users/8/900_675_13__20170615153917.jpg', '2018-06-22 00:56:41', '2018-06-22 00:56:41'),
(62, 8, 'users/8/020817_du301.jpg', '2018-06-22 01:00:35', '2018-06-22 01:00:35'),
(63, 8, 'users/8/020817_du301.jpg', '2018-06-22 01:00:42', '2018-06-22 01:00:42'),
(64, 8, 'users/8/e9aae5273ad8788efdac84f0fbcdba0e.jpg', '2018-06-22 01:01:59', '2018-06-22 01:01:59'),
(65, 4, 'users/4/android.jfif', '2018-06-24 18:53:47', '2018-06-24 18:53:47'),
(66, 4, 'users/4/nadine-lustre-brother-died-nadine-lustre-sister-nadine-lustre-instagram-nadine-lustre-funeral-nadine-lustre-depression-nadine-lustre-suicide-isaiah-lustre.jpg', '2018-06-24 20:27:52', '2018-06-24 20:27:52'),
(67, 4, 'users/4/900_675_13__20170615153917.jpg', '2018-06-24 21:10:52', '2018-06-24 21:10:52'),
(68, 4, 'users/4/android.jfif', '2018-06-24 22:43:26', '2018-06-24 22:43:26'),
(69, 4, 'users/4/rose.jpg', '2018-06-24 22:46:05', '2018-06-24 22:46:05'),
(70, 4, 'users/4/android.jfif', '2018-06-24 22:51:28', '2018-06-24 22:51:28'),
(71, 4, 'users/4/rose.jpg', '2018-06-24 22:52:01', '2018-06-24 22:52:01'),
(72, 4, 'users/4/020817_du301.jpg', '2018-06-24 22:54:03', '2018-06-24 22:54:03'),
(73, 4, 'users/4/020817_du301.jpg', '2018-06-24 22:55:29', '2018-06-24 22:55:29'),
(74, 4, 'users/4/020817_du301.jpg', '2018-06-24 22:56:33', '2018-06-24 22:56:33'),
(75, 4, 'users/4/020817_du301.jpg', '2018-06-24 22:58:49', '2018-06-24 22:58:49'),
(76, 4, 'users/4/e9aae5273ad8788efdac84f0fbcdba0e.jpg', '2018-06-24 22:59:27', '2018-06-24 22:59:27'),
(77, 4, 'users/4/020817_du301.jpg', '2018-06-24 22:59:39', '2018-06-24 22:59:39'),
(78, 4, 'users/4/dRgWl78N_400x400.jpg', '2018-06-24 22:59:53', '2018-06-24 22:59:53'),
(79, 4, 'users/4/020817_du301.jpg', '2018-06-24 23:00:42', '2018-06-24 23:00:42'),
(80, 4, 'users/4/e9aae5273ad8788efdac84f0fbcdba0e.jpg', '2018-06-24 23:17:29', '2018-06-24 23:17:29'),
(81, 4, 'users/4/1771601.jpg', '2018-06-24 23:18:54', '2018-06-24 23:18:54'),
(82, 4, 'users/4/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', '2018-06-24 23:19:52', '2018-06-24 23:19:52'),
(83, 4, 'users/4/020817_du301.jpg', '2018-06-24 23:23:15', '2018-06-24 23:23:15'),
(84, 4, 'users/4/1771601.jpg', '2018-06-24 23:26:14', '2018-06-24 23:26:14'),
(85, 4, 'users/4/nadine-lustre-brother-died-nadine-lustre-sister-nadine-lustre-instagram-nadine-lustre-funeral-nadine-lustre-depression-nadine-lustre-suicide-isaiah-lustre.jpg', '2018-06-24 23:43:16', '2018-06-24 23:43:16'),
(86, 4, 'users/4/nadine-lustre-brother-died-nadine-lustre-sister-nadine-lustre-instagram-nadine-lustre-funeral-nadine-lustre-depression-nadine-lustre-suicide-isaiah-lustre.jpg', '2018-06-25 00:05:59', '2018-06-25 00:05:59'),
(87, 4, 'users/4/nadine-lustre-brother-died-nadine-lustre-sister-nadine-lustre-instagram-nadine-lustre-funeral-nadine-lustre-depression-nadine-lustre-suicide-isaiah-lustre.jpg', '2018-06-25 00:06:01', '2018-06-25 00:06:01'),
(88, 4, 'users/4/android.jfif', '2018-06-25 00:06:09', '2018-06-25 00:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 7, 1, '2018-06-17 23:22:34', '2018-06-17 23:22:34'),
(11, 142, 4, '2018-06-25 00:06:53', '2018-06-25 00:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_06_11_053829_create_roles_table', 1),
(2, '2014_06_11_053845_create_statuses_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_06_11_060047_create_galleries_table', 1),
(6, '2018_06_11_075749_create_posts_table', 1),
(7, '2018_06_11_075815_create_comments_table', 1),
(8, '2018_06_11_075859_create_likes_table', 1),
(9, '2018_06_13_004900_create_images_table', 1),
(10, '2018_06_18_013248_create_follows_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `media` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `media`, `post_body`, `created_at`, `updated_at`) VALUES
(7, 1, NULL, 'ghahaha', '2018-06-17 22:32:57', '2018-06-17 22:32:57'),
(8, 1, 'users/1/2.PNG', NULL, '2018-06-17 23:38:15', '2018-06-17 23:38:15'),
(9, 3, NULL, 'my first post as user3', '2018-06-18 16:30:37', '2018-06-18 16:30:37'),
(10, 3, 'users/3/github.png', 'Github is love!', '2018-06-18 16:32:59', '2018-06-18 19:16:02'),
(11, 3, 'users/3/Schnitzel-3-landscape.jpg', 'My schnitzel is love love! edited again', '2018-06-18 21:05:14', '2018-06-18 21:11:06'),
(12, 4, NULL, '1st post ni James', '2018-06-18 21:12:54', '2018-06-18 21:12:54'),
(13, 4, NULL, 'dafsadasdasd', '2018-06-18 21:47:23', '2018-06-18 21:47:23'),
(14, 1, NULL, 'dasdsadsa', '2018-06-18 22:41:35', '2018-06-18 22:41:35'),
(16, 1, 'users/1/900_675_13__20170615153917.jpg', 'fdasdasdsa', '2018-06-18 23:57:01', '2018-06-18 23:57:01'),
(23, 1, NULL, 'Haha', '2018-06-19 00:11:33', '2018-06-19 00:11:33'),
(24, 1, NULL, 'lkdjas', '2018-06-19 00:11:51', '2018-06-19 00:11:51'),
(25, 1, NULL, 'User!', '2018-06-19 00:23:58', '2018-06-19 00:23:58'),
(26, 1, NULL, 'dsadsada dddd', '2018-06-19 00:27:14', '2018-06-19 00:27:21'),
(27, 4, NULL, 'no image', '2018-06-19 16:24:45', '2018-06-19 16:24:45'),
(28, 4, NULL, 'no image 2', '2018-06-19 16:25:56', '2018-06-19 16:25:56'),
(29, 4, NULL, 'no image 3', '2018-06-19 16:35:16', '2018-06-19 16:35:16'),
(30, 4, NULL, 'no image 4', '2018-06-19 16:36:21', '2018-06-19 16:36:21'),
(31, 4, NULL, 'no image 5', '2018-06-19 16:46:32', '2018-06-19 16:46:32'),
(32, 4, NULL, 'NO IMAGE 6 POTA!', '2018-06-19 16:49:08', '2018-06-19 16:49:08'),
(33, 4, 'users/4/900_675_30__20170914205657.jpg', 'babe!', '2018-06-19 16:49:35', '2018-06-19 16:49:35'),
(34, 4, NULL, 'no image 7', '2018-06-19 16:51:50', '2018-06-19 16:51:50'),
(35, 4, NULL, 'walang media', '2018-06-19 16:53:53', '2018-06-19 16:53:53'),
(36, 4, NULL, 'haha huhu', '2018-06-19 17:04:30', '2018-06-19 17:04:30'),
(37, 4, NULL, 'hah hehe', '2018-06-19 17:04:52', '2018-06-19 17:04:52'),
(38, 4, NULL, 'gfasfa', '2018-06-19 17:07:12', '2018-06-19 17:07:12'),
(39, 4, NULL, 'dfasdsadas', '2018-06-19 17:10:39', '2018-06-19 17:10:39'),
(40, 4, NULL, 'pfft!', '2018-06-19 17:12:14', '2018-06-19 17:12:14'),
(41, 4, NULL, 'xvxcdv', '2018-06-19 17:13:46', '2018-06-19 17:13:46'),
(42, 4, NULL, 'asdasd', '2018-06-19 17:14:07', '2018-06-19 17:14:07'),
(43, 4, 'users/4/1771601.jpg', 'dsadas', '2018-06-19 17:15:00', '2018-06-19 17:15:00'),
(44, 4, 'users/4/900_675_30__20170914205657.jpg', NULL, '2018-06-19 17:15:20', '2018-06-19 17:15:20'),
(45, 4, NULL, 'ddd', '2018-06-19 17:16:30', '2018-06-19 17:16:30'),
(46, 4, NULL, 'aaaa', '2018-06-19 17:17:10', '2018-06-19 17:17:10'),
(47, 4, NULL, 'ddd', '2018-06-19 17:17:41', '2018-06-19 17:17:41'),
(48, 4, NULL, 'parse', '2018-06-19 17:18:10', '2018-06-19 17:18:10'),
(49, 4, NULL, 'hello world', '2018-06-19 17:27:06', '2018-06-19 17:27:06'),
(50, 4, NULL, 'hello earth!', '2018-06-19 17:27:56', '2018-06-19 17:27:56'),
(51, 4, NULL, 'bangarang', '2018-06-19 17:28:54', '2018-06-19 17:28:54'),
(52, 4, NULL, 'dd', '2018-06-19 17:34:40', '2018-06-19 17:34:40'),
(53, 4, NULL, 'haha', '2018-06-19 17:42:56', '2018-06-19 17:42:56'),
(54, 4, NULL, 'ddddasdsadsa', '2018-06-19 17:48:57', '2018-06-19 17:48:57'),
(55, 4, NULL, 'please work', '2018-06-19 18:13:57', '2018-06-19 18:13:57'),
(57, 4, NULL, 'this time it will work', '2018-06-19 18:24:58', '2018-06-19 18:24:58'),
(58, 4, NULL, 'hello', '2018-06-19 18:26:59', '2018-06-19 18:26:59'),
(59, 4, NULL, 'hh', '2018-06-19 18:29:31', '2018-06-19 18:29:31'),
(61, 4, NULL, 'dsadsa', '2018-06-19 18:31:37', '2018-06-19 18:31:37'),
(62, 4, NULL, 'gagasfdsasda', '2018-06-19 18:35:27', '2018-06-19 18:35:27'),
(63, 4, NULL, 'dsadsadsa', '2018-06-19 18:39:24', '2018-06-19 18:39:24'),
(64, 4, NULL, 'new post', '2018-06-19 18:41:45', '2018-06-19 18:41:45'),
(65, 4, NULL, 'dadsa', '2018-06-19 19:14:58', '2018-06-19 19:14:58'),
(66, 4, NULL, 'csaasdsa', '2018-06-19 19:15:18', '2018-06-19 19:15:18'),
(68, 4, NULL, 'sss', '2018-06-19 23:53:15', '2018-06-19 23:53:15'),
(69, 4, NULL, 'sss', '2018-06-19 23:54:00', '2018-06-19 23:54:00'),
(70, 4, NULL, 'new post', '2018-06-19 23:54:09', '2018-06-19 23:54:09'),
(71, 4, NULL, 'haha!', '2018-06-19 23:57:35', '2018-06-19 23:57:35'),
(72, 4, NULL, 'hello world!', '2018-06-19 23:59:08', '2018-06-19 23:59:08'),
(73, 4, NULL, 'im hungry', '2018-06-20 00:19:15', '2018-06-20 00:19:15'),
(74, 4, NULL, 'im wewe na', '2018-06-20 00:19:51', '2018-06-20 00:19:51'),
(76, 4, NULL, 'post 48 daskljdsa', '2018-06-20 20:32:25', '2018-06-20 20:50:54'),
(81, 4, NULL, 'dsadsa', '2018-06-20 21:08:02', '2018-06-20 21:08:02'),
(82, 1, 'users/1/1771601.jpg', 'dsadsa', '2018-06-20 23:40:34', '2018-06-20 23:40:34'),
(83, 1, 'users/1/020817_du301.jpg', 'dsads', '2018-06-20 23:42:53', '2018-06-20 23:42:53'),
(84, 1, 'users/1/900_675_13__20170615153917.jpg', 'dsadsadas', '2018-06-20 23:43:40', '2018-06-20 23:43:40'),
(85, 1, 'users/1/dRgWl78N_400x400.jpg', 'Raiadayadaya!', '2018-06-20 23:44:53', '2018-06-20 23:44:53'),
(86, 1, 'users/1/nadine-lustre-brother-died-nadine-lustre-sister-nadine-lustre-instagram-nadine-lustre-funeral-nadine-lustre-depression-nadine-lustre-suicide-isaiah-lustre.jpg', 'Nadine!', '2018-06-20 23:45:35', '2018-06-20 23:45:35'),
(87, 1, 'users/1/020817_du301.jpg', 's', '2018-06-20 23:51:35', '2018-06-20 23:51:35'),
(88, 1, 'users/1/e9aae5273ad8788efdac84f0fbcdba0e.jpg', NULL, '2018-06-20 23:54:59', '2018-06-20 23:54:59'),
(89, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', 'dsadsa', '2018-06-21 00:15:14', '2018-06-21 00:15:14'),
(90, 1, 'users/1/900_675_13__20170615153917.jpg', 'dsa', '2018-06-21 00:17:08', '2018-06-21 00:17:08'),
(91, 1, 'users/1/1771601.jpg', 'dsss', '2018-06-21 00:17:46', '2018-06-21 00:17:46'),
(92, 1, 'users/1/dRgWl78N_400x400.jpg', 'dsadsadsa', '2018-06-21 00:21:36', '2018-06-21 00:21:36'),
(93, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', NULL, '2018-06-21 00:23:17', '2018-06-21 00:23:17'),
(94, 1, 'users/1/900_675_30__20170914205657.jpg', NULL, '2018-06-21 00:25:13', '2018-06-21 00:25:13'),
(95, 1, 'users/1/1771601.jpg', NULL, '2018-06-21 00:30:30', '2018-06-21 00:30:30'),
(96, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', NULL, '2018-06-21 00:37:57', '2018-06-21 00:37:57'),
(97, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', 'dsa', '2018-06-21 00:42:01', '2018-06-21 00:42:01'),
(98, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', 'dsadsa', '2018-06-21 00:43:52', '2018-06-21 00:43:52'),
(99, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', 'DSADAS', '2018-06-21 00:44:49', '2018-06-21 00:44:49'),
(100, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', 'dsadsa', '2018-06-21 00:47:00', '2018-06-21 00:47:00'),
(101, 1, 'users/1/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', NULL, '2018-06-21 00:49:32', '2018-06-21 00:49:32'),
(102, 1, 'users/1/Webp.net-resizeimage.png', NULL, '2018-06-21 00:51:11', '2018-06-21 00:51:11'),
(103, 1, 'users/1/020817_du301.jpg', 'kjhdasj', '2018-06-21 00:55:59', '2018-06-21 00:55:59'),
(104, 1, 'users/1/34189771_2107080476230927_7947201330383159296_n.png', 'dsdsadsad', '2018-06-21 00:57:27', '2018-06-21 00:57:27'),
(105, 1, 'users/1/linux.jfif', 'sasa', '2018-06-21 01:01:55', '2018-06-21 01:01:55'),
(106, 1, 'users/1/linux.jfif', NULL, '2018-06-21 01:03:25', '2018-06-21 01:03:25'),
(107, 4, 'users/4/download.jfif', 'Picka picka!', '2018-06-21 16:06:34', '2018-06-21 16:06:34'),
(108, 4, 'users/4/Schnitzel-3-landscape.jpg', NULL, '2018-06-21 16:16:51', '2018-06-21 16:16:51'),
(109, 5, 'users/5/e9aae5273ad8788efdac84f0fbcdba0e.jpg', 'My first post!', '2018-06-21 16:33:53', '2018-06-21 16:33:53'),
(110, 5, 'users/5/1771601.jpg', NULL, '2018-06-21 16:46:43', '2018-06-21 16:46:43'),
(111, 5, 'users/5/900_675_13__20170615153917.jpg', 'Soleen my labs!', '2018-06-21 16:53:17', '2018-06-21 16:53:17'),
(112, 5, 'users/5/nadine-lustre-brother-died-nadine-lustre-sister-nadine-lustre-instagram-nadine-lustre-funeral-nadine-lustre-depression-nadine-lustre-suicide-isaiah-lustre.jpg', 'Nadine!', '2018-06-21 16:53:44', '2018-06-21 16:53:44'),
(113, 5, 'users/5/1771601.jpg', 'xdfxdcfgd', '2018-06-21 16:56:56', '2018-06-21 16:56:56'),
(114, 7, 'users/7/900_675_13__20170615153917.jpg', NULL, '2018-06-21 17:13:57', '2018-06-21 17:13:57'),
(115, 7, 'users/7/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', 'dsadsadsa', '2018-06-21 17:23:26', '2018-06-21 17:23:26'),
(116, 7, 'users/7/Schnitzel-3-landscape.jpg', NULL, '2018-06-21 17:26:00', '2018-06-21 17:26:00'),
(118, 7, 'users/7/linux.jfif', NULL, '2018-06-21 17:27:38', '2018-06-21 17:27:38'),
(119, 7, 'users/7/linux.jfif', NULL, '2018-06-21 17:37:35', '2018-06-21 17:37:35'),
(120, 7, 'users/7/liza-soberano-screenshot_2018-04-13_16-48-38.jpg', NULL, '2018-06-21 18:09:13', '2018-06-21 18:09:13'),
(121, 7, 'users/7/download.jfif', NULL, '2018-06-21 18:12:29', '2018-06-21 18:12:29'),
(122, 4, 'users/4/34189771_2107080476230927_7947201330383159296_n.png', 'dasdsa', '2018-06-22 00:33:23', '2018-06-22 00:33:23'),
(123, 8, 'users/8/900_675_30__20170914205657.jpg', 'user 8 1st post', '2018-06-22 00:36:01', '2018-06-22 00:36:01'),
(124, 8, 'users/8/1771601.jpg', NULL, '2018-06-22 00:55:48', '2018-06-22 00:55:48'),
(125, 8, 'users/8/1771601.jpg', 'dsadas', '2018-06-22 00:55:54', '2018-06-22 00:55:54'),
(126, 8, NULL, 'hello', '2018-06-22 00:56:12', '2018-06-22 00:56:12'),
(127, 8, 'users/8/900_675_13__20170615153917.jpg', 'soleen', '2018-06-22 00:56:34', '2018-06-22 00:56:34'),
(128, 8, 'users/8/900_675_13__20170615153917.jpg', NULL, '2018-06-22 00:56:41', '2018-06-22 00:56:41'),
(129, 8, NULL, NULL, '2018-06-22 00:57:10', '2018-06-22 00:57:10'),
(130, 8, 'users/8/020817_du301.jpg', NULL, '2018-06-22 01:00:35', '2018-06-22 01:00:35'),
(131, 8, 'users/8/020817_du301.jpg', 'dsada', '2018-06-22 01:00:42', '2018-06-22 01:00:42'),
(132, 8, NULL, 'dasdasdas', '2018-06-22 01:01:40', '2018-06-22 01:01:40'),
(133, 8, 'users/8/e9aae5273ad8788efdac84f0fbcdba0e.jpg', NULL, '2018-06-22 01:01:58', '2018-06-22 01:01:58'),
(134, 8, NULL, 'wala dapat image', '2018-06-22 01:02:08', '2018-06-22 01:02:08'),
(135, 8, NULL, 'no storage path dapat', '2018-06-22 01:03:46', '2018-06-22 01:03:46'),
(136, 8, NULL, 'hello world!', '2018-06-22 01:04:33', '2018-06-22 01:04:33'),
(137, 8, NULL, 'dasdsadasd', '2018-06-22 01:05:02', '2018-06-22 01:05:02'),
(138, 8, NULL, 'dsadasdasdsadsadsadsad', '2018-06-22 01:06:09', '2018-06-22 01:06:09'),
(139, 8, NULL, 'dsadas', '2018-06-22 01:07:56', '2018-06-22 01:07:56'),
(140, 4, 'users/4/android.jfif', NULL, '2018-06-24 18:53:47', '2018-06-24 18:53:47'),
(141, 4, 'users/4/nadine-lustre-brother-died-nadine-lustre-sister-nadine-lustre-instagram-nadine-lustre-funeral-nadine-lustre-depression-nadine-lustre-suicide-isaiah-lustre.jpg', 'Hello!', '2018-06-24 20:27:52', '2018-06-24 20:27:52'),
(142, 4, 'users/4/900_675_13__20170615153917.jpg', 'Soleen my labs!', '2018-06-24 21:10:52', '2018-06-24 21:10:52'),
(143, 4, 'users/4/900_675_30__20170914205657.jpg', 'dadsa', '2018-06-25 00:07:08', '2018-06-25 00:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-06-17 16:45:52', '2018-06-17 16:45:52'),
(2, 'user', '2018-06-17 16:46:44', '2018-06-17 16:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'active', '2018-06-17 16:48:10', '2018-06-17 16:48:10'),
(2, 'disabled', '2018-06-17 16:48:47', '2018-06-17 16:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `birthdate`, `address`, `work`, `bio`, `profile_picture`, `role_id`, `status_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@email.com', '09999999999', '$2y$10$HiRjCUtjC1C0E/WEGCH/A.6WI81u8jvOBi075BKwBL/NVIb8Tv4gy', '2018-06-03', NULL, NULL, NULL, 'https://www.gravatar.com/avatar/ee11cbb19052e40b07aac0ca060c23ee?d=mp', 2, 1, 'es0o5H1FdkQC0LdBR5XyODQHZkJk1EJ7yCVrDsSKBph9Z1tS2zDulDZtBLlP', '2018-06-17 16:59:48', '2018-06-17 16:59:48'),
(2, 'user2', 'user2@email.com', '09270757234', '$2y$10$zjwujRmmt36bPpNtwgmt4.Kn4kFJ3Zzoz.jqLZFI6P5prbMyhr2ve', '2018-06-22', NULL, NULL, NULL, 'https://www.gravatar.com/avatar/7e58d63b60197ceb55a1c487989a3720?d=mp', 2, 1, '0sZRBY2ejazjAAuGCzDSlVgMLo02ogdwTfC9DWoZYAQXF9TbYlToGmMa9EvA', '2018-06-18 00:43:54', '2018-06-18 00:43:54'),
(3, 'user3', 'user3@email.com', '09888888888', '$2y$10$LneC3u2lNa.C054Fm2Bv2eWm6SWTtnqYzdQVl7qOBnXkyZhWkTjgu', '2018-06-02', NULL, NULL, NULL, 'https://www.gravatar.com/avatar/92877af70a45fd6a2ed7fe81e1236b78?d=mp', 2, 1, 'A5tL6ysmMLD49Q7mhWtvImaBReasfDQYZfrs8rVOHRORI99KCIfFpZdICdOe', '2018-06-18 16:26:45', '2018-06-18 16:26:45'),
(4, 'James Bond', 'jamesbond@email.com', '09777777777', '$2y$10$HZiLS.sB9C1I0fL8qgpCE.IPcuqtlAFq2ClYOwhVmqeWTo9VkjAQO', '2005-04-01', NULL, NULL, NULL, '/storage/users/4/android.jfif', 2, 1, 'kF3F3Fz6z6iTJgpUS3vXQxJVobz2a75q258UT09Qreg3S8jHeGnyhmf9E1wi', '2018-06-18 21:12:23', '2018-06-25 00:06:09'),
(5, 'renz', 'renz@email.com', '09111111111', '$2y$10$tny.0A5GPEPqcm6s7evn2OvjFtZR7ptHAx4A2yqzaAQuQ0lo95kCu', '1997-04-26', NULL, NULL, NULL, 'https://www.gravatar.com/avatar/490bbb8e8a1d6129b5b9b1423b0bb1ea?d=mp', 2, 1, 'Uli1CiySuuO07QIBmb3Vs7Yl6byx8wI1MqzXCzkW1N1J1xdwylzwfDaJYpqO', '2018-06-21 16:31:24', '2018-06-21 16:31:24'),
(6, 'user6', 'user6r@email.com', '09444444444', '$2y$10$FLYaTQ2qnCNEuvU.PqLtQ.LkZiDw74L.56MdE/hLK7FP2FVAbi8zW', '2015-06-16', NULL, NULL, NULL, 'https://www.gravatar.com/avatar/affec3b64cf90492377a8114c86fc093?d=mp', 2, 1, 'Vk3i7aY8s9AyAE349Ji1LKjvEAQLtWoh5uwsGILi37vVKViIup2jjCZmVcMn', '2018-06-21 17:11:22', '2018-06-21 17:11:22'),
(7, 'user7', 'user7@email.com', '09666666666', '$2y$10$gTxbRp.oWjbYyBsLMr3lc.wvOA2Mys2O9faDrKyn7JE4fram/oZzi', '2018-06-09', NULL, NULL, NULL, 'https://www.gravatar.com/avatar/3e0469fb134991f8f75a2760e409c6ed?d=mp', 2, 1, 'ids4iOJGFrfqfDfqdM7vq4rPcCx503aFfmBs1OtlLsKN8TfXcUiDmRaDXas0', '2018-06-21 17:13:37', '2018-06-21 17:13:37'),
(8, 'user8', 'user8@gmail.com', '09475652541', '$2y$10$GGQSRJqdTYKmcSxV9fZXvu9Q6HxupfbtNP0O49ZBZc7QXyHsWAkXe', '2018-06-15', NULL, NULL, NULL, 'https://www.gravatar.com/avatar/7668f673d5669995175ef91b5d171945?d=mp', 2, 1, NULL, '2018-06-22 00:34:39', '2018-06-22 00:34:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_id` (`gallery_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_ibfk_1` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_status_id_foreign` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
