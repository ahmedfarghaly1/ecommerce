-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 07:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('admin','store','trader') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(1024) NOT NULL,
  `image` text,
  `parent` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `image`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'حريمى ', '', 2, '2018-08-31 11:55:48', '0000-00-00 00:00:00'),
(4, 'حريمى', '', NULL, '2018-08-31 14:58:43', '2018-08-31 21:58:43'),
(9, 'رجالى', '', NULL, '2018-08-31 14:56:18', '2018-08-31 21:56:18'),
(11, 'حريمى', '', NULL, '2018-08-31 22:39:33', '2018-08-31 22:39:33'),
(13, 'اطفالى', NULL, NULL, '2018-09-01 12:26:36', '2018-09-01 19:26:36'),
(14, 'حريمى', NULL, NULL, '2018-09-01 19:28:22', '2018-09-01 19:28:22'),
(15, 'رجالى', NULL, NULL, '2018-09-01 17:06:12', '2018-09-02 00:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `client_name` varchar(1024) NOT NULL,
  `phonenumber` varchar(1024) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `image` text,
  `price` int(11) NOT NULL,
  `size` text,
  `countities` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `image`, `price`, `size`, `countities`, `category_id`, `type_id`, `created_at`, `updated_at`) VALUES
(3, 'حريم السلطان', 'عباية', '', 200, NULL, 40, 4, NULL, '2018-08-31 14:58:43', '2018-08-31 21:58:43'),
(8, 'تيشيرت الاهلى', 'تيشيرت', '', 100, NULL, 1000, 9, NULL, '2018-08-31 14:56:18', '2018-08-31 21:56:18'),
(10, 'رولا', 'جزمه', 'C:\\xampp\\tmp\\php3AB8.tmp', 100, '37', NULL, 11, NULL, '2018-08-31 22:39:33', '2018-08-31 22:39:33'),
(12, 'رجال السلطان', 'تيشيرت', NULL, 250, NULL, 1000, 13, NULL, '2018-09-01 12:26:36', '2018-09-01 19:26:36'),
(13, 'ecommerce', 'طرحة', NULL, 200, 'xl', NULL, 14, NULL, '2018-09-01 19:28:22', '2018-09-01 19:28:22'),
(14, 'mohamed', 'جزمه', 'C:\\xampp\\tmp\\php203C.tmp', 100, 'x', NULL, 15, NULL, '2018-09-01 17:06:12', '2018-09-02 00:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'اسماء', 'hasnaa2727@gmail.com', '$2y$10$y0MgtKksG4y7AAWsd6FiTOx0XxJRJU3WC3G5fb4WpcQ7ajBsVdtHa', 0, NULL, NULL, '2018-09-01 23:10:25', '2018-09-01 23:45:14'),
(10, 'ahmed', 'admin@gmail.com', '$2y$10$uigT3TV2tUb4ANxpah1/Ue2QofCKBUtpKLqf3KyoiEsg5vrIDKUWS', 1, NULL, 'sJLvG3hjEYQG5E3YngEQOcP8kb2ekHrMNem2xOwPHT2AwTRpM7CGMTCsvLuh', '2018-05-10 18:33:42', '2018-05-10 18:33:42'),
(13, 'asmaa', 'asmaa@gmail.com', '$2y$10$/cUXGjBfuIDaOpr6hvNon.j3xBqnoLii89ZWwks5IyhiIYzrbZsrK', 2, NULL, 'OkPxnqpAvF04mW4akrlIX9Lf04YhTQ5tt2BHkWH4CkI0yiJ3geLf6LrGO5Xi', '2018-05-19 05:56:35', '2018-05-19 05:56:35'),
(14, 'ecommerce', 'hasna3ra2727@gmail.com', '$2y$10$rm1.TfKMWXsizorJ22z2Cu5JHymsGcYTSy9pbOJISgznGRRct9a5W', 2, NULL, NULL, '2018-09-01 23:11:46', '2018-09-01 23:11:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
