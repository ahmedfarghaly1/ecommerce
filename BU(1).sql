-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2018 at 02:51 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BU`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `about_us` text NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_image` text NOT NULL,
  `discription` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_us`, `company_name`, `company_image`, `discription`, `updated_at`, `created_at`) VALUES
(1, 'dsdsds', 'asd', 'images/etfoooooo.PNG', 'etfoooooo', '2018-05-06 04:18:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `abouts_ar`
--

CREATE TABLE `abouts_ar` (
  `id` int(11) NOT NULL,
  `about_us` text NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_image` text NOT NULL,
  `discription` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts_ar`
--

INSERT INTO `abouts_ar` (`id`, `about_us`, `company_name`, `company_image`, `discription`, `updated_at`, `created_at`) VALUES
(1, 'نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه ', 'ايس كريم', 'images/etfoooooo.PNG', 'نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه نقدم نحن بعض الخدمات التى تخص المعاملات الداخليه والخارجيه والملوخيه ', '2018-05-12 01:12:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `col_meet_request`
--

CREATE TABLE `col_meet_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `col_meet_request`
--

INSERT INTO `col_meet_request` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(7, 'hasnaa', '01234556', 'phone', 'projects request projects request projects request\r\nprojects request projects request projects request\r\nprojects request projects request projects request', 4, NULL, '2018-05-21 10:25:01', '2018-05-21 10:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `col_meet_request_ar`
--

CREATE TABLE `col_meet_request_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `col_meet_request_ar`
--

INSERT INTO `col_meet_request_ar` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `updated_at`, `created_at`) VALUES
(1, 'محمد', '0123456', 'كرسى', 'الكرسى وقع واتكسر :D', 0, 0, '2018-05-12 20:49:48', '2018-05-12 20:49:48'),
(2, 'منى', '01234556', 'جزمة', 'الجزمة اتقطعت معلش', 0, 0, '2018-05-13 01:50:42', '2018-05-13 01:50:42'),
(3, 'سماح', '12345', 'مشبك', 'المشبك وقع واتكسر', 0, 0, '2018-05-13 02:02:20', '2018-05-13 02:02:20'),
(4, 'uuuuu', 'uuuuu', 'uuuuuuu', 'uuuuuuuuuuuu', 0, 0, '2018-05-15 08:34:10', '2018-05-15 08:34:10'),
(5, 'hhhhhhh', 'hhhhh', 'hhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhh', 0, 0, '2018-05-15 08:38:07', '2018-05-15 08:38:07'),
(7, 'dfdf', 'ss', 'phone', 'kkk', 0, 0, '2018-05-15 08:43:19', '2018-05-15 08:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `Telephone` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `Service_Hotline` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Telephone`, `Email`, `fax`, `Service_Hotline`, `fb`, `tw`, `insta`, `created_at`, `updated_at`) VALUES
(1, '0123456', 'hr@gmail.com', '123@345', 'hot123$', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.insta.com/', '2018-05-06 01:54:04', '2018-05-06 08:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `direct_meet_request`
--

CREATE TABLE `direct_meet_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) NOT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `direct_meet_request`
--

INSERT INTO `direct_meet_request` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(1, 'hasnaa', '01234556', 'BED', 'has error :(', 8, NULL, '2018-05-20 10:13:24', '2018-05-20 10:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `direct_meet_request_ar`
--

CREATE TABLE `direct_meet_request_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) NOT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `direct_meet_request_ar`
--

INSERT INTO `direct_meet_request_ar` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(1, 'حسناء', '01234556', 'كمبيوتر', 'سبب المقابلة  سبب المقابلة  سبب المقابلة  سبب المقابلة سبب المقابلة', 0, NULL, '2018-05-22 08:52:37', '2018-05-22 08:52:37'),
(2, 'حسناء', '0123456', 'كمبيوتر', 'سبب المقابلة سبب المقابلة سبب المقابلة سبب المقابلة سبب المقابلة', 0, NULL, '2018-05-22 08:53:24', '2018-05-22 08:53:24'),
(4, 'mohamed', '0123456', 'mjjkk', 'ررررررر', 0, NULL, '2018-05-22 08:56:53', '2018-05-22 08:56:53'),
(5, 'حسناء', '0123456', 'موبيل', 'سبب المقابلة  سبب المقابلة  سبب المقابلة  سبب المقابلة  سبب المقابلة  سبب المقابلة  سبب المقابلة', 0, NULL, '2018-05-22 09:10:42', '2018-05-22 09:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `fin_meet_request`
--

CREATE TABLE `fin_meet_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fin_meet_request`
--

INSERT INTO `fin_meet_request` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(3, 'mohamed', '01234556', 'BED', 'vvvvvvvvvvv', 9, NULL, '2018-05-20 10:55:42', '2018-05-20 10:55:42'),
(5, 'said', '01234556', 'phone', 'more errors and problems\r\n more errors and problems more errors and problems\r\nmore errors and problems more errors and problems\r\nmore errors and problems more errors and problems\r\nmore errors and problems more errors and problems', 9, NULL, '2018-05-21 06:05:52', '2018-05-21 06:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `fin_meet_request_ar`
--

CREATE TABLE `fin_meet_request_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fin_meet_request_ar`
--

INSERT INTO `fin_meet_request_ar` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(1, 'حسناء', '12345', 'موبيل', 'يوجد عطل', 0, 0, '2018-05-13 07:39:42', '2018-05-13 07:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `fin_request`
--

CREATE TABLE `fin_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cheek_name` varchar(255) NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fin_request`
--

INSERT INTO `fin_request` (`id`, `name`, `phone`, `cheek_name`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(1, 'asd', '333', 'fad', 9, NULL, '2018-05-19 14:05:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fin_request_ar`
--

CREATE TABLE `fin_request_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cheek_name` varchar(255) DEFAULT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `updatea_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fin_trans`
--

CREATE TABLE `fin_trans` (
  `id` int(11) NOT NULL,
  `org_no` int(11) NOT NULL,
  `subject` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `legal_meet_request`
--

CREATE TABLE `legal_meet_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) NOT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `legal_meet_request`
--

INSERT INTO `legal_meet_request` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(1, 'hasnaa', '01234556', 'phone', 'phone brocked :(', 6, NULL, '2018-05-20 10:18:59', '2018-05-20 10:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `legal_meet_request_ar`
--

CREATE TABLE `legal_meet_request_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `legal_meet_request_ar`
--

INSERT INTO `legal_meet_request_ar` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(1, 'حسناء', '012344', 'كمبيوتر', 'سبب المقابلة  سبب المقابلة  سبب المقابلة  سبب المقابلة  سبب المقابلة', NULL, NULL, '2018-05-22 08:59:04', '2018-05-22 08:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `main_meet_request`
--

CREATE TABLE `main_meet_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_meet_request`
--

INSERT INTO `main_meet_request` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(2, 'hasnaa', '01234556', 'phone', 'nnnnnn', 3, NULL, '2018-05-20 10:50:07', '2018-05-20 10:50:07'),
(3, 'ahmed', 'kkk', 'BED', 'hhhhh', 3, NULL, '2018-05-20 10:50:25', '2018-05-20 10:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `main_meet_request_ar`
--

CREATE TABLE `main_meet_request_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_meet_request_ar`
--

INSERT INTO `main_meet_request_ar` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `updated_at`, `created_at`) VALUES
(2, 'kk', 'kkk', 'kk', 'kkkkk', NULL, 0, '2018-05-15 08:31:42', '2018-05-15 08:31:42'),
(3, 'kk', 'kkkkkk', 'kkkkkkkkk', 'kkkkkkkkkkk', NULL, 0, '2018-05-15 08:33:32', '2018-05-15 08:33:32'),
(4, 'ahmed', '0123456', 'mjjkk', 'dddddddddddddd', NULL, NULL, '2018-05-29 16:35:09', '2018-05-29 16:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `main_request`
--

CREATE TABLE `main_request` (
  `id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `q_number` varchar(255) NOT NULL,
  `m_number` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_request`
--

INSERT INTO `main_request` (`id`, `area`, `group`, `q_number`, `m_number`, `type`, `description`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(2, 'assuit', 'aa', '55', '345', 'water', 'oooooooooo', 3, NULL, '2018-05-20 10:50:55', '2018-05-20 10:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `main_request_ar`
--

CREATE TABLE `main_request_ar` (
  `id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `q_number` varchar(255) NOT NULL,
  `m_number` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_request_ar`
--

INSERT INTO `main_request_ar` (`id`, `area`, `group`, `q_number`, `m_number`, `type`, `description`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(1, 'اسيوط', 'لا ادرى', '77', '345', 'healthy', 'الحنفية بتنقط اعمل اية', NULL, NULL, '2018-05-13 02:43:46', '2018-05-13 02:43:46'),
(2, 'القوصية', 'الاتحاد', '66', '345', 'Firefighting', 'البيت ولع ي اخواتشى', NULL, NULL, '2018-05-13 02:49:38', '2018-05-13 02:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `managements`
--

CREATE TABLE `managements` (
  `id` int(11) NOT NULL,
  `manage_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `manage_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `manage_phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managements`
--

INSERT INTO `managements` (`id`, `manage_name`, `manage_email`, `manage_phone`, `updated_at`, `created_at`) VALUES
(3, 'إدارة الصيانة', 'ma@m.com', '+201066854343', '2018-05-07 12:51:48', '2018-05-06 05:02:34'),
(4, 'إدارة المشاريع', 'ma@m.com', '+201066854343', '2018-05-07 12:56:35', '2018-05-06 09:23:52'),
(6, 'الإدارة القانونية', 'ma@m.com', '010512505', '2018-05-07 12:57:32', '2018-05-06 15:34:53'),
(7, 'إدارة التأجير', 'ma@m.com', '+201066854343', '2018-05-07 12:58:38', '2018-05-07 12:58:38'),
(8, 'المدير العام', 'ma@m.com', '+201066854343', '2018-05-07 12:59:11', '2018-05-07 12:59:11'),
(9, 'الادارة المالية', 'ma@m.com', '+201066854343', '2018-05-07 12:59:33', '2018-05-07 12:59:33'),
(10, 'إدارة التحصيل', 'ma@m.com', '+201066854343', '2018-05-07 12:59:55', '2018-05-07 12:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_06_02_001729_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `new_tittle` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `new_body` text CHARACTER SET utf8,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `new_tittle`, `new_body`, `image`, `created_at`, `updated_at`) VALUES
(5, 'fun', 'fun fun fun', NULL, '2018-05-17 13:09:55', '2018-05-17 11:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `news_ar`
--

CREATE TABLE `news_ar` (
  `id` int(11) NOT NULL,
  `new_tittle` varchar(255) NOT NULL,
  `new_body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_ar`
--

INSERT INTO `news_ar` (`id`, `new_tittle`, `new_body`, `image`, `created_at`, `updated_at`) VALUES
(2, 'اخبار رياضية', 'الاهلى يهزم الزومالك 3/0', 'images/.png', '2018-05-14 21:33:46', '2018-05-14 21:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('9f983619-5bbb-4144-a60a-07e23fc46358', 'App\\Notifications\\transactions', 'App\\User', 13, '{\"sender\":{\"id\":10,\"name\":\"ahmed\",\"email\":\"admin@gmail.com\",\"admin\":1,\"manage_id\":6,\"created_at\":\"2018-05-10 20:33:42\",\"updated_at\":\"2018-05-10 20:33:42\"},\"transaction\":\"47\",\"managment\":{\"id\":6,\"manage_name\":\"\\u0627\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0629\",\"manage_email\":\"ma@m.com\",\"manage_phone\":\"010512505\",\"updated_at\":\"2018-05-07 14:57:32\",\"created_at\":\"2018-05-06 17:34:53\"},\"transaction_time\":{\"date\":\"2018-06-06 23:21:49.630583\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', '2018-06-06 21:25:01', '2018-06-06 21:21:49', '2018-06-06 21:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `our_projects`
--

CREATE TABLE `our_projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desc` text NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `manage_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_projects`
--

INSERT INTO `our_projects` (`id`, `project_name`, `project_desc`, `project_image`, `manage_id`, `created_at`, `updated_at`) VALUES
(9, 'محمد على', 'ةرخهةفخهرلفة', '/images/rkhhfkhhrlf.JPG', 0, '2018-05-05 16:03:53', '2018-05-05 14:01:40'),
(11, 'mmmmmmmmm', 'piokpok', 'images/piokpok.jpeg', 0, '2018-05-05 14:10:09', '2018-05-05 14:10:09'),
(12, 'mmmmmmmmm', 'piokpok', 'images/piokpok.jpeg', 0, '2018-05-05 15:27:43', '2018-05-05 15:27:43'),
(13, 'nnnnnnnnnnnn', 'kijoi', 'images/kijoi.jpeg', 0, '2018-05-05 15:28:04', '2018-05-05 15:28:04'),
(14, 'عمرو', 'لااهعارهعثارهفثع', 'images/laahaaarhaatharhfthaa.jpeg', 0, '2018-05-05 15:29:25', '2018-05-05 15:29:25'),
(15, 'kkkk', 'l;;\'\'\r\nphggyo', 'images/lphggyo.jpg', 0, '2018-05-06 02:23:36', '2018-05-06 02:23:36'),
(16, 'build', 'build build build', 'images/build-build-build.png', 0, '2018-05-14 20:24:55', '2018-05-14 20:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `our_projects_ar`
--

CREATE TABLE `our_projects_ar` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desc` text NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_projects_ar`
--

INSERT INTO `our_projects_ar` (`id`, `project_name`, `project_desc`, `project_image`, `created_at`, `updated_at`) VALUES
(1, 'مشروع صرف صحى', 'مشروع صرف صحى  مشروع صرف صحى  مشروع صرف صحى  مشروع صرف صحى  مشروع صرف صحى', 'images/mshroaa-srf-sh-mshroaa-srf-sh-mshroaa-srf-sh-mshroaa-srf-sh-mshroaa-srf-sh.png', '2018-05-14 14:58:18', '2018-05-14 21:58:18'),
(2, 'مشروع التنمية والبطاطا', 'مشروع التنمية والبطاطا مشروع التنمية والبطاطا مشروع التنمية والبطاطا مشروع التنمية والبطاطا', 'images/mshroaa-altnmy-oalbtata-mshroaa-altnmy-oalbtata-mshroaa-altnmy-oalbtata-mshroaa-altnmy-oalbtata.png', '2018-05-14 22:03:16', '2018-05-14 22:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `rent_meet_request`
--

CREATE TABLE `rent_meet_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rent_meet_request`
--

INSERT INTO `rent_meet_request` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(2, 'hasnaa', '01234556', 'phone', 'pppppppppp', 7, NULL, '2018-05-20 10:38:53', '2018-05-20 10:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `rent_meet_request_ar`
--

CREATE TABLE `rent_meet_request_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rent_meet_request_ar`
--

INSERT INTO `rent_meet_request_ar` (`id`, `name`, `phone`, `prod_name`, `cause`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(1, 'احمد', '01234556', 'دولاب', 'الدولاب باظ :(', NULL, NULL, '2018-05-13 07:23:12', '2018-05-13 07:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `rent_request`
--

CREATE TABLE `rent_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rent_request`
--

INSERT INTO `rent_request` (`id`, `name`, `phone`, `prod_name`, `activity`, `description`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(2, 'mohamed', '01234556', 'BED', 'djdf', 'ooooooo', 7, NULL, '2018-05-20 10:39:26', '2018-05-20 10:39:26'),
(3, 'hasnaa', '01234556', 'BED', 'sport', 'renting request renting request\r\nrenting request renting request renting request \r\nrenting request renting request renting request\r\nrenting request renting request renting request', 7, NULL, '2018-05-21 09:40:30', '2018-05-21 09:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `rent_request_ar`
--

CREATE TABLE `rent_request_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rent_request_ar`
--

INSERT INTO `rent_request_ar` (`id`, `name`, `phone`, `prod_name`, `activity`, `description`, `manage_id`, `readed`, `updated_at`, `created_at`) VALUES
(1, 'علا', '12345', 'مكتب', 'اداره', 'وصف المشكلة  وصف المشكلة  وصف المشكلة  وصف المشكلة  وصف المشكلة', NULL, NULL, '2018-05-22 07:19:20', '2018-05-22 07:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `transactions_ar`
--

CREATE TABLE `transactions_ar` (
  `id` int(255) NOT NULL,
  `department_number` int(255) DEFAULT NULL,
  `department_receive` varchar(1024) CHARACTER SET utf8 DEFAULT NULL,
  `department_sender` varchar(1024) CHARACTER SET utf8 DEFAULT NULL,
  `transaction_date` date DEFAULT NULL,
  `transaction_topic` text CHARACTER SET utf8,
  `notes` text CHARACTER SET utf8,
  `file` varchar(1024) CHARACTER SET utf8 DEFAULT NULL,
  `type` enum('in','out','employer') CHARACTER SET utf8 DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `seen` date DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `action_need` enum('replyNeed') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions_ar`
--

INSERT INTO `transactions_ar` (`id`, `department_number`, `department_receive`, `department_sender`, `transaction_date`, `transaction_topic`, `notes`, `file`, `type`, `admin_id`, `seen`, `parent`, `action_need`, `created_at`, `updated_at`) VALUES
(45, 1, '6', '6', '2018-02-05', 'ئيؤةءؤئ', 'ئةىؤئىءؤ', NULL, 'in', 10, '2018-06-06', NULL, 'replyNeed', '2018-06-06 01:17:39', '2018-06-05 23:17:39'),
(47, 3, '13', '6', '2018-02-10', 'ئاؤنتئءؤتن', 'ءىئةءىةئؤىثثتهئئءؤنئاىؤنئءا', NULL, 'employer', 10, '2018-06-06', NULL, 'replyNeed', '2018-06-06 23:25:01', '2018-06-06 21:25:01'),
(48, 1, '6', 'نادي الزمالك', '2018-02-10', 'سؤؤىئ|ؤةىسﻻئؤةىىﻻسؤةى', 'يسؤئؤتئؤشستيسي', NULL, 'out', 10, '2018-06-06', NULL, NULL, '2018-06-06 21:32:51', '2018-06-06 19:32:51'),
(62, 22, '13', '6', '2018-02-05', 'mbnnm', 'hvnv', NULL, 'employer', 10, NULL, 47, NULL, '2018-06-06 20:52:45', '2018-06-06 20:52:45'),
(63, 44, '13', '6', '2018-02-05', 'mnm,n', 'nbmnbmn', NULL, 'employer', 10, NULL, NULL, NULL, '2018-06-06 20:56:39', '2018-06-06 20:56:39'),
(64, 445, '13', '6', '2018-02-05', 'mbnmn', 'nbmnb', NULL, 'employer', 10, NULL, 47, NULL, '2018-06-06 20:57:30', '2018-06-06 20:57:30'),
(66, 122, '10', '6', '2018-02-05', 'sdafz<', 'sdafasd', '/attached_files/attached_file1528332287.jpg', 'in', 10, NULL, NULL, NULL, '2018-06-06 22:44:47', '2018-06-06 22:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `t_request`
--

CREATE TABLE `t_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `area` varchar(255) NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_request`
--

INSERT INTO `t_request` (`id`, `name`, `phone`, `prod_name`, `cause`, `area`, `manage_id`, `readed`, `created_at`, `updated_at`) VALUES
(2, 'hasnaa', '01234556', 'BED', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'assuit', 10, NULL, '2018-05-20 10:29:15', '2018-05-20 10:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `t_request_ar`
--

CREATE TABLE `t_request_ar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `area` varchar(255) NOT NULL,
  `manage_id` int(11) DEFAULT NULL,
  `readed` tinyint(1) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_request_ar`
--

INSERT INTO `t_request_ar` (`id`, `name`, `phone`, `prod_name`, `cause`, `area`, `manage_id`, `readed`, `updated_at`, `created_at`) VALUES
(1, 'حسناء', '12345', 'سرير', 'وجود كسر ف الضلع الاعوج', 'ديروط', NULL, NULL, '2018-05-12 20:02:27', '2018-05-12 20:02:27');

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
  `manage_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `manage_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'ahmed', 'admin@gmail.com', '$2y$10$uigT3TV2tUb4ANxpah1/Ue2QofCKBUtpKLqf3KyoiEsg5vrIDKUWS', 1, 6, 'DZGAoiUCIUxUxOi7mUsTD2VBL7gOLoHmOBcgDiCyZpd08fUR4RFwrKvCwdZm', '2018-05-10 18:33:42', '2018-05-10 18:33:42'),
(13, 'asmaa', 'asmaa@gmail.com', '$2y$10$/cUXGjBfuIDaOpr6hvNon.j3xBqnoLii89ZWwks5IyhiIYzrbZsrK', 2, 6, 'PeWZmGYxbYjA17QWK7w2jDeXvK8J72QVfmE2wZ2AZC2ttBL0mWcHkFoHI5g3', '2018-05-19 05:56:35', '2018-05-19 05:56:35'),
(15, 'mona', 'mona@gmail.com', '$2y$10$1lsB3B.EcGVjNcaZkNHDkeHOTuZHwrWtAkNayZ.QL7jHPtStQF.NS', 3, 7, 'W5EzSSTZmk6P29GE9nYoizHmrHGyabDKi4RvYI0OILX5iihpZ9a68Q14eJKa', '2018-05-27 12:05:38', '2018-05-27 12:05:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abouts_ar`
--
ALTER TABLE `abouts_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `col_meet_request`
--
ALTER TABLE `col_meet_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `col_meet_request_ar`
--
ALTER TABLE `col_meet_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direct_meet_request`
--
ALTER TABLE `direct_meet_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direct_meet_request_ar`
--
ALTER TABLE `direct_meet_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_meet_request`
--
ALTER TABLE `fin_meet_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_meet_request_ar`
--
ALTER TABLE `fin_meet_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_request`
--
ALTER TABLE `fin_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_request_ar`
--
ALTER TABLE `fin_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_trans`
--
ALTER TABLE `fin_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal_meet_request`
--
ALTER TABLE `legal_meet_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal_meet_request_ar`
--
ALTER TABLE `legal_meet_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_meet_request`
--
ALTER TABLE `main_meet_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_meet_request_ar`
--
ALTER TABLE `main_meet_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_request`
--
ALTER TABLE `main_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_request_ar`
--
ALTER TABLE `main_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managements`
--
ALTER TABLE `managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_ar`
--
ALTER TABLE `news_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `our_projects`
--
ALTER TABLE `our_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_projects_ar`
--
ALTER TABLE `our_projects_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_meet_request`
--
ALTER TABLE `rent_meet_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_meet_request_ar`
--
ALTER TABLE `rent_meet_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_request`
--
ALTER TABLE `rent_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_request_ar`
--
ALTER TABLE `rent_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions_ar`
--
ALTER TABLE `transactions_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_request`
--
ALTER TABLE `t_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_request_ar`
--
ALTER TABLE `t_request_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manage_id` (`manage_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `abouts_ar`
--
ALTER TABLE `abouts_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `col_meet_request`
--
ALTER TABLE `col_meet_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `col_meet_request_ar`
--
ALTER TABLE `col_meet_request_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `direct_meet_request`
--
ALTER TABLE `direct_meet_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `direct_meet_request_ar`
--
ALTER TABLE `direct_meet_request_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fin_meet_request`
--
ALTER TABLE `fin_meet_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fin_meet_request_ar`
--
ALTER TABLE `fin_meet_request_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fin_request`
--
ALTER TABLE `fin_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fin_request_ar`
--
ALTER TABLE `fin_request_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fin_trans`
--
ALTER TABLE `fin_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `legal_meet_request`
--
ALTER TABLE `legal_meet_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `legal_meet_request_ar`
--
ALTER TABLE `legal_meet_request_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_meet_request`
--
ALTER TABLE `main_meet_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `main_meet_request_ar`
--
ALTER TABLE `main_meet_request_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `main_request`
--
ALTER TABLE `main_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_request_ar`
--
ALTER TABLE `main_request_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managements`
--
ALTER TABLE `managements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_ar`
--
ALTER TABLE `news_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_projects`
--
ALTER TABLE `our_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transactions_ar`
--
ALTER TABLE `transactions_ar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
