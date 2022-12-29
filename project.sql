-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 03:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 'Trusha', 'Gondaliya', 'trusha@gmail.com', '123456', '2022-12-06 03:44:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(2048) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `image`, `title`, `text`, `sort_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1669371170.png', 'Sed ut perspiciatis unde omnis iste natus voluptatem', '<div>\r\n<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>\r\n</div>', 1, '2022-11-25 00:14:35', '2022-11-25 04:42:50', NULL),
(3, '1670246172.jpg', 'Sed1 ut perspiciatis unde omnis iste natus voluptatem', '<div>\r\n<div><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong></div>\r\n</div>', 2, '2022-11-25 04:37:50', '2022-12-05 07:46:12', NULL),
(4, '1670246331.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '<div>\r\n<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>\r\n</div>', 3, '2022-11-25 04:38:14', '2022-12-05 07:48:51', NULL),
(5, '1670246149.jpg', 'Visual Elements That Fit in, but Stand Out', '<p>When it comes to the colors and visuals you choose for your banner ad, think about the modern styles of the websites your ad may be on. While you can&rsquo;t match everyone, you can use design styles that will fit in well with modern websites and will feel at home.&nbsp;</p>\r\n<p>Lean toward the eye-catching and bold. You want to be attractive but not overt.&nbsp;</p>', 4, '2022-12-05 07:38:28', '2022-12-05 07:45:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Mumbai', '2022-11-08 13:02:29', NULL, NULL),
(2, 1, 'Kolkata', '2022-11-08 13:02:29', NULL, NULL),
(3, 1, 'Ahmedabad', '2022-11-08 13:03:05', NULL, NULL),
(4, 2, 'New York', '2022-11-08 13:03:05', NULL, NULL),
(5, 2, 'Chicago', '2022-11-08 13:03:30', NULL, NULL),
(6, 2, 'Houston', '2022-11-08 13:03:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_page`
--

CREATE TABLE `cms_page` (
  `cms_page_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_page`
--

INSERT INTO `cms_page` (`cms_page_id`, `title`, `description`, `status`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PHP', '<p>WE ARE TEACHING PHP</p>\r\n<p>&nbsp;</p>\r\n<p>lets learn php</p>', '1', 'php,learn', '2022-11-22 04:53:50', NULL, NULL),
(2, 'LARAVEL', '<p>LETS LEARN WITH US</p>', '0', 'laravel learn', '2022-11-22 04:54:16', NULL, NULL),
(3, 'Environment', '<p>We work for environment. Lets join us..</p>', '0', 'env,work', '2022-11-24 09:09:00', '2022-11-25 04:13:34', '2022-11-25 04:13:34'),
(4, 'WordPress', '<p><a href=\"https://themeisle.com/blog/what-is-wordpress/\">WordPress</a>&nbsp;is by far the most popular content management system. As one of the best free CMS tools, WordPress&nbsp;<strong>powers&nbsp;<a href=\"https://www.codeinwp.com/blog/wordpress-statistics/\" target=\"_blank\" rel=\"noopener\">43%</a>&nbsp;of all the websites on the internet</strong>&nbsp;(<em>including the Themeisle blog</em>).</p>\r\n<p>There are a ton of&nbsp;<a href=\"https://themeisle.com/blog/why-you-should-use-wordpress/\">reasons WordPress is so popular</a>. It&rsquo;s free to download and use, and also easy to learn, flexible, and&nbsp;<a href=\"https://themeisle.com/blog/get-started-with-wordpress-seo/\">search engine friendly</a>. Plus, thousands of themes and plugins make it one of the most customizable platforms. That definitely aligns WordPress with our core CMS definition and more!</p>', '1', 'wordpress', '2022-12-02 10:56:40', NULL, NULL),
(5, 'Joomla', '<p><a href=\"https://www.joomla.org/\" target=\"_blank\" rel=\"noopener\">Joomla</a>&nbsp;is one of the best free CMS options since it has an impressive set of features baked in, and supports 70+ languages. It&rsquo;s a good open source CMS for any website that needs comprehensive content management, especially educational sites or complex websites like social networks.</p>', '0', 'joomla', '2022-12-02 10:57:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `approval_status` enum('PENDING','PUBLISHED') NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `ISO` varchar(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `name`, `ISO`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'India', 'IND', '2022-11-08 13:01:10', NULL, NULL),
(2, 'America', 'USA', '2022-11-08 13:01:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favourite_mission`
--

CREATE TABLE `favourite_mission` (
  `favourite_mission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourite_mission`
--

INSERT INTO `favourite_mission` (`favourite_mission_id`, `user_id`, `mission_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 10, '2022-11-29 09:08:08', NULL, NULL),
(2, 1, 13, '2022-11-30 03:37:57', NULL, NULL),
(3, 5, 10, '2022-12-01 10:09:01', NULL, NULL),
(4, 5, 13, '2022-12-01 10:18:46', NULL, NULL),
(5, 5, 14, '2022-12-01 10:19:45', NULL, NULL),
(6, 5, 16, '2022-12-01 10:39:20', NULL, NULL),
(7, 1, 17, '2022-12-01 11:26:23', NULL, NULL),
(8, 1, 18, '2022-12-01 12:34:27', NULL, NULL),
(9, 1, 40, '2022-12-02 12:57:47', '2022-12-26 01:24:39', '2022-12-26 01:24:39'),
(10, 1, 22, '2022-12-05 08:51:02', NULL, NULL),
(11, 1, 37, '2022-12-05 08:51:11', NULL, NULL),
(12, 1, 25, '2022-12-06 09:23:58', NULL, NULL),
(13, 1, 20, '2022-12-06 12:31:03', NULL, NULL),
(14, 1, 39, '2022-12-07 05:41:25', '2022-12-12 21:40:27', '2022-12-12 21:40:27'),
(15, 1, 39, '2022-12-26 06:52:52', NULL, NULL),
(16, 8, 35, '2022-12-28 11:50:49', NULL, NULL),
(17, 8, 37, '2022-12-28 11:51:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `goal_mission`
--

CREATE TABLE `goal_mission` (
  `goal_mission_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `goal_objective_text` varchar(255) DEFAULT NULL,
  `goal_value` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goal_mission`
--

INSERT INTO `goal_mission` (`goal_mission_id`, `mission_id`, `goal_objective_text`, `goal_value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'e3qe3', 3, '2022-11-08 10:23:13', NULL, NULL),
(2, 36, 'Goal Objective', 10, '2022-11-30 05:05:27', '2022-11-30 05:05:27', NULL),
(3, 38, 'Goal Objective text', 12, '2022-11-30 10:45:43', NULL, NULL),
(4, 39, 'Goal Objective text', 10, '2022-11-30 06:32:48', '2022-11-30 06:32:48', NULL),
(5, 40, 'Ongoing Oppertunity', 1000, '2022-11-30 21:58:08', '2022-11-30 21:58:08', NULL),
(6, 41, 'Ongoing Oppertunity', 200, '2022-11-30 22:07:43', '2022-11-30 22:07:43', NULL),
(7, 42, 'Ongoing Oppertunity', 200, '2022-11-30 22:08:15', '2022-11-30 22:08:15', NULL),
(8, 13, 'Goal Objective text', 12, '2022-12-02 08:01:59', NULL, NULL),
(9, 14, 'Ongoing Oppertunity', 200, '2022-12-02 08:02:20', NULL, NULL),
(10, 16, 'plant 10,000 trees', 1500, '2022-12-02 10:34:06', NULL, NULL),
(11, 18, 'Ongoing Oppertunity', 123, '2022-12-02 10:37:35', NULL, NULL),
(12, 18, 'Ongoing Oppertunity', 190, '2022-12-02 10:38:59', NULL, NULL),
(13, 13, 'Goal Objective text', 120, '2022-12-02 10:42:18', NULL, NULL),
(14, 19, 'All students will be very clever', 1000, '2022-12-02 10:46:06', NULL, NULL),
(15, 20, 'plant 2000 plants', 1000, '2022-12-02 10:46:35', NULL, NULL),
(16, 35, 'Save Animal and birds', 125, '2022-12-02 10:47:07', NULL, NULL),
(17, 41, 'To accelerate the world’s transition', 535, '2022-12-02 10:49:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2022_11_08_080600_create_admin_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `theme_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` text NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `mission_type` enum('GOAL','TIME') NOT NULL,
  `status` enum('0','1') NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `organization_detail` varchar(255) NOT NULL,
  `availability` enum('DAILY','WEEKLY','MONTHLY','WEEK-END') NOT NULL,
  `seat_left` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`mission_id`, `theme_id`, `city_id`, `country_id`, `title`, `short_description`, `description`, `start_date`, `end_date`, `mission_type`, `status`, `organization_name`, `organization_detail`, `availability`, `seat_left`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'Animal Welfare Life & save bird campaign', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-13', '2022-11-16', '', '0', 'Save animal and bird', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEKLY', 254, '2022-11-29 05:26:17', '2022-11-28 23:56:17', '2022-11-28 23:56:17'),
(2, 2, 2, 1, 'CSR initiative stands for Coffee & Farmer Equity', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-19', '1900-01-11', '', '0', 'We stands for coffee and farmers equity', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'MONTHLY', 210, '2022-11-29 05:26:21', '2022-11-28 23:56:21', '2022-11-28 23:56:21'),
(3, 5, 3, 1, 'Education Supplies for Every Pair of Shoes Sold', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, '', '0', 'We supply education', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEK-END', 126, '2022-11-29 05:26:25', '2022-11-28 23:56:25', '2022-11-28 23:56:25'),
(4, 4, 4, 2, 'Grow-Trees On the path to environment sustainability', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, '', '0', 'We grows tree', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEKLY', 255, '2022-11-29 05:26:30', '2022-11-28 23:56:30', '2022-11-28 23:56:30'),
(5, 5, 5, 2, 'Plantation & Afforestation programme', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '0000-00-00', '1900-01-16', '', '0', 'Plantation ', '', 'DAILY', 255, '2022-12-07 11:58:12', '2022-11-28 23:56:34', '2022-11-28 23:56:34'),
(6, 6, 6, 2, 'Nourish the Children in African country', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, '1900-01-23', '', '0', 'Nourish the Children in African country', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEKLY', 167, '2022-11-29 05:26:38', '2022-11-28 23:56:38', '2022-11-28 23:56:38'),
(7, 1, 2, 1, 'dummy', '', 'dummy', '0000-00-00', NULL, '', '0', 'dummy', 'dummy', 'DAILY', 65, '2022-11-28 05:07:29', '2022-11-25 04:31:54', '2022-11-25 04:31:54'),
(8, 4, 3, 1, 'wemfre', NULL, 'nmfenmfre', '2022-11-13', '2022-12-03', 'GOAL', '0', 'rfmref', 'nfren', 'DAILY', 23, '2022-11-29 05:29:18', '2022-11-28 23:59:18', '2022-11-28 23:59:18'),
(9, 4, 3, 1, 'wemfre', NULL, 'nmfenmfre', '2022-11-13', '2022-12-03', 'GOAL', '0', 'rfmref', 'nfren', 'DAILY', 23, '2022-11-29 05:29:22', '2022-11-28 23:59:22', '2022-11-28 23:59:22'),
(10, 4, 3, 1, 'Animal Welfare Life & save bird campaign', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-12-10', '2023-01-06', 'TIME', '0', 'Save animal and bird', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 23, '2022-12-02 10:49:01', '2022-12-02 05:19:01', NULL),
(11, 2, 6, 2, 'dasd', NULL, 'dsd', '2022-11-20', '2022-12-11', 'GOAL', '0', 'dssaddsxas', 'dd', 'MONTHLY', 23, '2022-11-28 11:41:44', '2022-11-28 06:11:44', '2022-11-28 06:11:44'),
(12, 4, 1, 1, 'Animal Welfare Life & save bird campaign', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-12', '2022-12-11', 'GOAL', '0', 'Save animal and bird', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEKLY', 34, '2022-11-29 05:52:26', '2022-11-28 04:34:03', '2022-11-28 04:34:03'),
(13, 2, 4, 2, 'CSR initiative stands for Coffee & Farmer Equity', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, 'GOAL', '0', 'We stands for coffee ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEKLY', 43, '2022-12-07 06:17:31', '2022-12-02 05:12:18', NULL),
(14, 2, 1, 1, 'Education Supplies for Every Pair of Shoes Sold', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, 'GOAL', '0', 'We supply education', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'MONTHLY', 44, '2022-12-02 08:02:20', '2022-12-02 02:32:20', NULL),
(15, 1, 3, 1, 'Grow-Trees On the path to environment sustainability', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-12', '2022-11-12', 'TIME', '0', 'We grows tree', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEK-END', 214, '2022-11-29 03:03:44', '2022-11-29 03:03:44', NULL),
(16, 6, 4, 2, 'Plantation & Afforestation programme', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, 'GOAL', '0', 'Plantation & Afforestation ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'MONTHLY', 210, '2022-12-07 06:17:39', '2022-12-02 05:04:06', NULL),
(17, 7, 5, 2, 'Nourish the Children in African country', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-27', '2022-12-31', 'TIME', '0', 'Nourish the Children ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEK-END', 21, '2022-12-07 06:17:49', '2022-11-29 03:10:18', NULL),
(18, 1, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, 'GOAL', '0', 'Lorem ipsum dolor sit ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEKLY', 23, '2022-12-07 06:17:54', '2022-12-02 05:08:59', NULL),
(19, 1, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, 'GOAL', '0', 'Lorem ipsum  adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEK-END', 23, '2022-12-07 11:57:52', '2022-12-02 05:16:06', NULL),
(20, 1, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, 'GOAL', '0', 'Lorem ipsum dolor sit ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 23, '2022-12-07 11:58:28', '2022-12-02 05:16:35', NULL),
(21, 2, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-19', '2023-01-25', 'TIME', '0', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 212, '2022-11-29 04:03:34', '2022-11-29 04:03:34', NULL),
(22, 2, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-19', '2023-01-25', 'TIME', '0', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 212, '2022-11-29 04:06:34', '2022-11-29 04:06:34', NULL),
(23, 4, 6, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-27', '2023-02-22', 'TIME', '0', 'Lorem ipsum dolor sit ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 21, '2022-12-07 11:58:37', '2022-11-29 04:50:27', NULL),
(24, 4, 3, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-27', '2023-02-22', 'TIME', '0', 'Lorem ipsum dolor sit ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 21, '2022-12-07 11:58:44', '2022-11-30 02:45:41', NULL),
(25, 4, 6, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-11-27', '2023-02-22', 'TIME', '0', 'Lorem ipsum dolor sit ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 21, '2022-12-07 11:59:01', '2022-11-29 04:57:25', NULL),
(26, 2, 1, 1, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, NULL, 'GOAL', '0', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', 'MONTHLY', 21, '2022-11-30 07:59:45', '2022-11-30 02:29:45', '2022-11-30 02:29:45'),
(27, 2, 1, 1, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, NULL, 'GOAL', '0', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', 'MONTHLY', 21, '2022-11-30 07:59:38', '2022-11-30 02:29:38', '2022-11-30 02:29:38'),
(28, 2, 1, 1, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, NULL, 'GOAL', '0', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', 'MONTHLY', 21, '2022-11-30 07:59:31', '2022-11-30 02:29:31', '2022-11-30 02:29:31'),
(29, 2, 1, 1, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, NULL, 'GOAL', '0', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', 'MONTHLY', 21, '2022-11-30 07:58:18', '2022-11-30 02:28:18', '2022-11-30 02:28:18'),
(30, 2, 1, 1, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, NULL, 'GOAL', '0', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', 'MONTHLY', 21, '2022-11-30 07:58:09', '2022-11-30 02:28:09', '2022-11-30 02:28:09'),
(31, 2, 1, 1, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, NULL, 'GOAL', '0', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', 'MONTHLY', 21, '2022-11-30 07:57:59', '2022-11-30 02:27:59', '2022-11-30 02:27:59'),
(32, 2, 1, 1, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, NULL, 'GOAL', '0', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', 'MONTHLY', 21, '2022-11-30 07:57:37', '2022-11-30 02:27:37', '2022-11-30 02:27:37'),
(33, 2, 1, 1, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, '$user_role = array((\'role\')=>json_encode($request[\'role\']));', NULL, NULL, 'GOAL', '0', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', '$user_role = array((\'role\')=>json_encode($request[\'role\']));', 'MONTHLY', 21, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(34, 7, 6, 2, 'foreach($request->skill_id as $index){', NULL, 'foreach($request->skill_id as $index){', NULL, NULL, 'GOAL', '0', 'foreach($request->skill_id as $index){', 'foreach($request->skill_id as $index){', 'DAILY', 23, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(35, 2, 1, 1, 'Lorem ipsum dolor sit amet adipisicing elit.', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, 'GOAL', '0', 'Lorem ipsum dolor sit ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 45, '2022-12-07 11:59:39', '2022-12-02 05:17:07', NULL),
(36, 5, 2, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', NULL, NULL, 'GOAL', '0', 'Lorem ipsum dolor sit ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 324, '2022-12-07 11:59:48', '2022-11-30 05:05:27', NULL),
(37, 5, 6, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '2022-12-16', '2022-12-31', 'TIME', '0', 'Lorem ipsum dolor sit ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEK-END', 210, '2022-12-07 12:00:04', '2022-12-02 05:17:37', NULL),
(38, 5, 6, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', NULL, 'save animal and birds', '2022-12-17', '2022-12-31', 'TIME', '0', 'save animal and birds', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'WEEK-END', 210, '2022-12-06 12:26:20', '2022-12-02 05:17:53', NULL),
(39, 5, 5, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', NULL, 'save animal and birds', '2023-01-08', '2023-02-08', 'TIME', '0', 'Lorem ipsum dolor sit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', 'DAILY', 210, '2022-12-07 12:00:13', '2022-12-02 05:18:26', NULL),
(40, 7, 2, 1, 'The mission is the “what” and the “how,” and the vision is the “why.”', NULL, 'The mission statement defines what an organization does and includes tangible goals which the organization strives to accomplish', '2022-12-23', '2023-01-06', 'TIME', '0', 'The mission is the ', 'The mission statement defines what an organization does and includes tangible goals which the organization strives to accomplish', 'MONTHLY', 210, '2022-12-07 12:00:20', '2022-12-05 00:42:55', NULL),
(41, 5, 6, 2, 'To accelerate the world’s transition to sustainable energy.', NULL, 'To offer designer eyewear at a revolutionary price, while leading the way for socially conscious businesses.', NULL, NULL, 'GOAL', '0', 'Tesla', 'To offer designer eyewear at a revolutionary price, while leading the way for socially conscious businesses.', 'DAILY', 12, '2022-12-02 10:49:50', '2022-12-02 05:19:50', NULL),
(42, 5, 6, 2, 'To accelerate the world’s transition to sustainable energy.', NULL, 'To offer designer eyewear at a revolutionary price, while leading the way for socially conscious businesses.', '2022-12-17', '2022-12-30', 'TIME', '0', 'Tesla', 'To offer designer eyewear at a revolutionary price, while leading the way for socially conscious businesses.', 'DAILY', 12, '2022-12-02 08:05:52', '2022-12-02 02:35:52', NULL),
(43, 2, 5, 2, 'American Express', NULL, '“We work hard every day to make American Express the world’s most respected service brand.”', '2022-12-17', '2023-01-01', 'TIME', '0', 'American Express', '“We work hard every day to make American Express the world’s most respected service brand.”', 'WEEK-END', 122, '2022-12-02 08:05:28', '2022-12-02 02:35:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mission_application`
--

CREATE TABLE `mission_application` (
  `mission_application` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `applied_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `approval_status` enum('PENDING','APPROVE','DECLINE') NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_application`
--

INSERT INTO `mission_application` (`mission_application`, `mission_id`, `user_id`, `applied_at`, `approval_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 5, '2022-12-02 06:55:56', 'PENDING', '2022-12-02 06:55:56', NULL, NULL),
(2, 10, 1, '2022-12-02 07:11:17', 'PENDING', '2022-12-02 07:11:17', NULL, NULL),
(3, 14, 1, '2022-12-02 07:11:34', 'PENDING', '2022-12-02 07:11:34', NULL, NULL),
(4, 16, 5, '2022-12-02 07:12:00', 'APPROVE', '2022-12-02 07:12:00', '2022-12-02 02:22:58', NULL),
(5, 23, 1, '2022-12-07 05:40:33', 'PENDING', '2022-12-07 05:40:33', NULL, NULL),
(6, 40, 5, '2022-12-07 12:43:36', 'PENDING', '2022-12-07 12:43:36', NULL, NULL),
(7, 40, 1, '2022-12-08 03:45:08', 'PENDING', '2022-12-08 03:45:08', NULL, NULL),
(8, 43, 1, '2022-12-08 03:47:06', 'PENDING', '2022-12-08 03:47:06', NULL, NULL),
(9, 37, 1, '2022-12-09 12:22:31', 'PENDING', '2022-12-09 12:22:31', NULL, NULL),
(10, 35, 1, '2022-12-14 03:17:17', 'PENDING', '2022-12-14 03:17:17', NULL, NULL),
(11, 39, 8, '2022-12-27 07:46:16', 'PENDING', '2022-12-27 07:46:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mission_document`
--

CREATE TABLE `mission_document` (
  `mission_document_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `document_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_document`
--

INSERT INTO `mission_document` (`mission_document_id`, `mission_id`, `document_name`, `document_type`, `document_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, '1668577584.jpeg', 'image/jpeg', '1669710880.jpeg', '2022-11-29 08:34:40', '2022-11-28 02:50:00', NULL),
(2, 11, '1668577584.jpeg', 'image/jpeg', '1669635507.jpeg', '2022-11-28 11:41:44', '2022-11-28 06:11:44', '2022-11-28 06:11:44'),
(3, 12, 'bonafide-7.pdf', 'application/pdf', '1669629345.pdf', '2022-11-28 04:25:45', '2022-11-28 04:25:45', NULL),
(4, 13, '1668577584.jpeg', 'image/jpeg', '1669700488.jpeg', '2022-11-29 00:11:28', '2022-11-29 00:11:28', NULL),
(5, 14, '1668577584.jpeg', 'image/jpeg', '1669710442.jpeg', '2022-11-29 02:57:22', '2022-11-29 02:57:22', NULL),
(6, 15, '1668577584.jpeg', 'image/jpeg', '1669710824.jpeg', '2022-11-29 03:03:44', '2022-11-29 03:03:44', NULL),
(7, 16, '1668577584.jpeg', 'image/jpeg', '1669710963.jpeg', '2022-11-29 03:06:03', '2022-11-29 03:06:03', NULL),
(8, 17, '1668577584.jpeg', 'image/jpeg', '1669711218.jpeg', '2022-11-29 08:40:18', '2022-11-29 03:07:20', NULL),
(9, 20, '1668577584.jpeg', 'image/jpeg', '1669714252.jpeg', '2022-11-29 04:00:52', '2022-11-29 04:00:52', NULL),
(10, 22, '1668577584.jpeg', 'image/jpeg', '1669714594.jpeg', '2022-11-29 04:06:34', '2022-11-29 04:06:34', NULL),
(11, 25, '1668577584.jpeg', 'image/jpeg', '1669717645.jpeg', '2022-11-29 04:57:25', '2022-11-29 04:57:25', NULL),
(12, 33, '1668577584.jpeg', 'image/jpeg', '1669724308.jpeg', '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(13, 34, '1668577584.jpeg', 'image/jpeg', '1669724252.jpeg', '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(14, 35, '1668577584.jpeg', 'image/jpeg', '1669724102.jpeg', '2022-11-29 12:15:02', '2022-11-29 05:36:56', NULL),
(15, 18, '1668577584.jpeg', 'image/jpeg', '1669796237.jpeg', '2022-11-30 08:17:17', NULL, NULL),
(16, 19, '1668577584.jpeg', 'image/jpeg', '1669796301.jpeg', '2022-11-30 08:18:21', NULL, NULL),
(17, 21, 'Hostel run by college.pdf', 'application/pdf', '1669796348.pdf', '2022-11-30 08:19:08', NULL, NULL),
(18, 23, 'foodbill.pdf', 'application/pdf', '1669796455.pdf', '2022-11-30 08:20:55', NULL, NULL),
(19, 24, 'hostel fee.pdf', 'application/pdf', '1669796493.pdf', '2022-11-30 08:21:33', NULL, NULL),
(20, 36, 'AML_ LAB MANUAL.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '1669804527.docx', '2022-11-30 05:05:27', '2022-11-30 05:05:27', NULL),
(21, 38, 'hostel fee.pdf', 'application/pdf', '1669804721.pdf', '2022-11-30 05:08:41', '2022-11-30 05:08:41', NULL),
(22, 39, 'hostel fee.pdf', 'application/pdf', '1669809768.pdf', '2022-11-30 06:32:48', '2022-11-30 06:32:48', NULL),
(23, 43, 'foodbill.pdf', 'application/pdf', '1669884837.pdf', '2022-12-01 03:23:57', '2022-12-01 03:23:57', NULL),
(24, 43, 'hostel sanstha.pdf', 'application/pdf', '1669884837.pdf', '2022-12-01 03:23:57', '2022-12-01 03:23:57', NULL),
(25, 43, 'IOT_practicals (1).pdf', 'application/pdf', '1669884837.pdf', '2022-12-01 03:23:57', '2022-12-01 03:23:57', NULL),
(26, 42, 'foodbill.pdf', 'application/pdf', '1669886085.pdf', '2022-12-01 09:14:45', NULL, NULL),
(27, 42, 'hostel fee.pdf', 'application/pdf', '1669886085.pdf', '2022-12-01 09:14:45', NULL, NULL),
(28, 42, 'Hostel run by college.pdf', 'application/pdf', '1669886085.pdf', '2022-12-01 09:14:45', NULL, NULL),
(29, 42, 'foodbill.pdf', 'application/pdf', '1669886136.pdf', '2022-12-01 09:15:36', NULL, NULL),
(30, 42, 'Hostel run by college.pdf', 'application/pdf', '1669886136.pdf', '2022-12-01 09:15:36', NULL, NULL),
(31, 37, 'foodbill.pdf', 'application/pdf', '1669886436.pdf', '2022-12-01 09:20:36', NULL, NULL),
(32, 40, 'foodbill-2022.pdf', 'application/pdf', '1669886466.pdf', '2022-12-01 09:21:06', NULL, NULL),
(33, 40, 'Hostel run by college.pdf', 'application/pdf', '1669886466.pdf', '2022-12-01 09:21:06', NULL, NULL),
(34, 41, 'hostel fee.pdf', 'application/pdf', '1669886492.pdf', '2022-12-01 09:21:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mission_invite`
--

CREATE TABLE `mission_invite` (
  `mission_invite_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `from_user_id` bigint(20) UNSIGNED NOT NULL,
  `to_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_invite`
--

INSERT INTO `mission_invite` (`mission_invite_id`, `mission_id`, `from_user_id`, `to_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 13, 8, 6, '2022-12-26 23:29:23', '2022-12-26 23:29:23', NULL),
(3, 13, 8, 9, '2022-12-26 23:37:31', '2022-12-26 23:37:31', NULL),
(4, 13, 8, 9, '2022-12-26 23:37:52', '2022-12-26 23:37:52', NULL),
(5, 15, 8, 1, '2022-12-26 23:38:21', '2022-12-26 23:38:21', NULL),
(6, 14, 8, 9, '2022-12-26 23:47:43', '2022-12-26 23:47:43', NULL),
(7, 17, 8, 1, '2022-12-27 04:16:41', '2022-12-27 04:16:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mission_media`
--

CREATE TABLE `mission_media` (
  `mission_media_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `media_name` varchar(64) NOT NULL,
  `media_type` varchar(255) NOT NULL,
  `media_path` varchar(255) DEFAULT NULL,
  `default` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_media`
--

INSERT INTO `mission_media` (`mission_media_id`, `mission_id`, `media_name`, `media_type`, `media_path`, `default`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png', 'image/png', '1669698987.png', '1', '2022-12-27 07:43:57', '2022-11-28 23:56:17', '2022-11-28 23:56:17'),
(2, 10, 'Animal-welfare-&-save-birds-campaign-1.png', 'image/png', '1669710880.png', '1', '2022-12-27 07:44:07', '2022-11-28 02:50:00', NULL),
(3, 11, 'Animal-welfare-&-save-birds-campaign-1.png', 'image/png', '1669635507.png', '0', '2022-11-28 11:41:44', '2022-11-28 06:11:44', '2022-11-28 06:11:44'),
(5, 13, 'CSR-initiative-stands-for-Coffee--and-Farmer-Equity-4.png', 'image/png', '1669700488.png', '0', '2022-11-29 00:11:28', '2022-11-29 00:11:28', NULL),
(6, 14, 'Education-Supplies-for-Every--Pair-of-Shoes-Sold-1.png', 'image/png', '1669710442.png', '0', '2022-11-29 02:57:22', '2022-11-29 02:57:22', NULL),
(7, 15, 'Grow-Trees-On-the-path-to-environment-sustainability-1.png', 'image/png', '1669710824.png', '0', '2022-11-29 03:03:44', '2022-11-29 03:03:44', NULL),
(8, 16, 'img3.png', 'image/png', '1669710963.png', '0', '2022-11-29 03:06:03', '2022-11-29 03:06:03', NULL),
(9, 17, 'Nourish-the-Children-in--African-country-1.png', 'image/png', '1669711218.png', '0', '2022-11-29 08:40:18', '2022-11-29 03:07:20', NULL),
(10, 20, 'img.png', 'image/png', '1669714252.png', '0', '2022-11-29 04:00:52', '2022-11-29 04:00:52', NULL),
(11, 22, 'img2.png', 'image/png', '1669714594.png', '0', '2022-11-29 04:06:34', '2022-11-29 04:06:34', NULL),
(12, 25, 'image2.png', 'image/png', '1669717645.png', '0', '2022-11-29 04:57:25', '2022-11-29 04:57:25', NULL),
(13, 33, 'Grow-Trees-On-the-path-to-environment-sustainability-login.png', 'image/png', '1669724308.png', '0', '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(14, 34, 'Animal-welfare-&-save-birds-campaign.png', 'image/png', '1669724252.png', '0', '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(15, 35, 'Animal-welfare-&-save-birds-campaign-1.png', 'image/png', '1669724102.png', '0', '2022-11-29 12:15:02', '2022-11-29 05:36:56', NULL),
(16, 18, 'CSR-initiative-stands-for-Coffee--and-Farmer-Equity-3.png', 'image/png', '1669796237.png', '0', '2022-11-30 08:17:17', NULL, NULL),
(17, 19, 'image2.png', 'image/png', '1669796301.png', '0', '2022-11-30 08:18:21', NULL, NULL),
(18, 21, 'img.png', 'image/png', '1669796348.png', '0', '2022-11-30 08:19:08', NULL, NULL),
(19, 23, 'img11.png', 'image/png', '1669796454.png', '0', '2022-11-30 08:20:54', NULL, NULL),
(20, 24, 'img3.png', 'image/png', '1669796493.png', '0', '2022-11-30 08:21:33', NULL, NULL),
(21, 36, 'image.png', 'image/png', '1669804527.png', '0', '2022-11-30 05:05:27', '2022-11-30 05:05:27', NULL),
(22, 38, 'img11.png', 'image/png', '1669804721.png', '0', '2022-11-30 05:08:41', '2022-11-30 05:08:41', NULL),
(23, 39, 'image1.png', 'image/png', '1669809768.png', '0', '2022-11-30 06:32:48', '2022-11-30 06:32:48', NULL),
(24, 43, 'Education-Supplies-for-Every--Pair-of-Shoes-Sold.png', 'image/png', '1669884837.png', '0', '2022-12-01 03:23:57', '2022-12-01 03:23:57', NULL),
(25, 43, 'Grow-Trees-On-the-path-to-environment-sustainability.png', 'image/png', '1669884837.png', '0', '2022-12-01 03:23:57', '2022-12-01 03:23:57', NULL),
(26, 43, 'Grow-Trees-On-the-path-to-environment-sustainability-login.png', 'image/png', '1669884837.png', '0', '2022-12-01 03:23:57', '2022-12-01 03:23:57', NULL),
(27, 42, 'Grow-Trees-On-the-path-to-environment-sustainability-4.png', 'image/png', '1669886085.png', '1', '2022-12-27 07:44:50', NULL, NULL),
(28, 42, 'img.png', 'image/png', '1669886085.png', '1', '2022-12-27 07:44:54', NULL, NULL),
(29, 42, 'img11.png', 'image/png', '1669886085.png', '1', '2022-12-27 07:44:58', NULL, NULL),
(30, 42, 'CSR-initiative-stands-for-Coffee--and-Farmer-Equity-5.png', 'image/png', '1669886136.png', '1', '2022-12-27 07:45:08', NULL, NULL),
(31, 42, 'Education-Supplies-for-Every--Pair-of-Shoes-Sold.png', 'image/png', '1669886136.png', '0', '2022-12-01 09:15:36', NULL, NULL),
(32, 37, 'Education-Supplies-for-Every--Pair-of-Shoes-Sold.png', 'image/png', '1669886436.png', '0', '2022-12-01 09:20:36', NULL, NULL),
(33, 37, 'Grow-Trees-On-the-path-to-environment-sustainability.png', 'image/png', '1669886436.png', '0', '2022-12-01 09:20:36', NULL, NULL),
(35, 41, 'CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png', 'image/png', '1669886492.png', '0', '2022-12-05 07:08:32', NULL, NULL),
(36, 41, 'Education-Supplies-for-Every--Pair-of-Shoes-Sold.png', 'image/png', '1669886492.png', '0', '2022-12-01 09:21:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mission_rating`
--

CREATE TABLE `mission_rating` (
  `mission_rating_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_rating`
--

INSERT INTO `mission_rating` (`mission_rating_id`, `user_id`, `mission_id`, `rating`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 10, '3', '2022-12-01 12:30:33', '2022-12-01 07:00:33', NULL),
(2, 1, 40, '3', '2022-12-14 23:52:28', '2022-12-14 23:52:28', NULL),
(3, 1, 37, '4', '2022-12-14 23:52:33', '2022-12-14 23:52:33', NULL),
(4, 1, 39, '3', '2022-12-26 09:09:51', '2022-12-26 03:39:51', NULL),
(5, 1, 13, '3', '2022-12-15 00:26:58', '2022-12-15 00:26:58', NULL),
(6, 1, 15, '3', '2022-12-15 05:57:49', '2022-12-15 00:27:49', NULL),
(7, 1, 23, '5', '2022-12-15 00:27:24', '2022-12-15 00:27:24', NULL),
(8, 5, 39, '3', '2022-12-15 00:28:30', '2022-12-15 00:28:30', NULL),
(9, 5, 18, '2', '2022-12-15 00:42:40', '2022-12-15 00:42:40', NULL),
(10, 1, 35, '3', '2022-12-26 05:34:21', '2022-12-26 05:34:21', NULL),
(11, 1, 38, '1', '2022-12-26 05:45:22', '2022-12-26 05:45:22', NULL),
(12, 8, 39, '3', '2022-12-26 23:49:25', '2022-12-26 23:49:25', NULL),
(13, 8, 35, '2', '2022-12-27 00:15:12', '2022-12-27 00:15:12', NULL),
(14, 8, 23, '3', '2022-12-27 00:15:23', '2022-12-27 00:15:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mission_skill`
--

CREATE TABLE `mission_skill` (
  `mission_skill_id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_skill`
--

INSERT INTO `mission_skill` (`mission_skill_id`, `skill_id`, `mission_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 33, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(2, 7, 34, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(3, 5, 35, '2022-11-29 11:40:29', '2022-11-29 05:36:56', NULL),
(4, 5, 35, '2022-11-29 11:40:29', '2022-11-29 05:36:56', NULL),
(5, 5, 35, '2022-11-29 11:40:29', '2022-11-29 05:36:56', NULL),
(6, 5, 35, '2022-11-29 11:40:29', '2022-11-29 05:36:56', NULL),
(7, 3, 35, '2022-11-29 12:15:02', NULL, NULL),
(8, 7, 35, '2022-11-29 12:15:02', NULL, NULL),
(9, 7, 34, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(10, 7, 34, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(11, 7, 34, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(12, 4, 33, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(13, 4, 33, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(14, 4, 33, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(15, 1, 33, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(16, 3, 33, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(17, 5, 33, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(18, 7, 33, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(19, 8, 33, '2022-11-30 07:57:29', '2022-11-30 02:27:29', '2022-11-30 02:27:29'),
(20, 1, 34, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(21, 3, 34, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(22, 4, 34, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(23, 5, 34, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(24, 6, 34, '2022-11-30 07:57:18', '2022-11-30 02:27:18', '2022-11-30 02:27:18'),
(25, 1, 18, '2022-11-30 08:03:00', NULL, NULL),
(26, 5, 18, '2022-11-30 08:04:55', NULL, NULL),
(27, 1, 19, '2022-11-30 08:07:11', NULL, NULL),
(28, 5, 19, '2022-11-30 08:07:11', NULL, NULL),
(29, 6, 19, '2022-11-30 08:07:11', NULL, NULL),
(30, 1, 21, '2022-11-30 08:08:24', NULL, NULL),
(31, 5, 21, '2022-11-30 08:08:24', NULL, NULL),
(32, 3, 23, '2022-11-30 08:08:53', NULL, NULL),
(33, 5, 23, '2022-11-30 08:08:54', NULL, NULL),
(34, 1, 24, '2022-11-30 08:15:42', NULL, NULL),
(35, 4, 24, '2022-11-30 08:15:42', NULL, NULL),
(36, 3, 36, '2022-11-30 05:05:27', '2022-11-30 05:05:27', NULL),
(37, 5, 36, '2022-11-30 05:05:27', '2022-11-30 05:05:27', NULL),
(38, 4, 38, '2022-11-30 05:08:41', '2022-11-30 05:08:41', NULL),
(39, 3, 39, '2022-11-30 06:32:48', '2022-11-30 06:32:48', NULL),
(40, 7, 39, '2022-11-30 06:32:48', '2022-11-30 06:32:48', NULL),
(41, 8, 39, '2022-11-30 06:32:48', '2022-11-30 06:32:48', NULL),
(42, 6, 40, '2022-11-30 21:58:08', '2022-11-30 21:58:08', NULL),
(43, 7, 40, '2022-11-30 21:58:08', '2022-11-30 21:58:08', NULL),
(44, 3, 41, '2022-11-30 22:07:43', '2022-11-30 22:07:43', NULL),
(45, 6, 41, '2022-11-30 22:07:43', '2022-11-30 22:07:43', NULL),
(46, 8, 41, '2022-11-30 22:07:43', '2022-11-30 22:07:43', NULL),
(47, 3, 42, '2022-11-30 22:08:15', '2022-11-30 22:08:15', NULL),
(48, 6, 42, '2022-11-30 22:08:15', '2022-11-30 22:08:15', NULL),
(49, 8, 42, '2022-11-30 22:08:15', '2022-11-30 22:08:15', NULL),
(50, 5, 43, '2022-12-01 03:23:57', '2022-12-01 03:23:57', NULL),
(51, 7, 43, '2022-12-01 03:23:57', '2022-12-01 03:23:57', NULL),
(52, 4, 37, '2022-12-01 09:20:36', NULL, NULL),
(53, 6, 37, '2022-12-01 09:20:36', NULL, NULL),
(54, 4, 13, '2022-12-02 08:01:59', NULL, NULL),
(55, 7, 13, '2022-12-02 08:01:59', NULL, NULL),
(56, 6, 14, '2022-12-02 08:02:20', NULL, NULL),
(57, 4, 10, '2022-12-02 10:13:22', NULL, NULL),
(58, 6, 16, '2022-12-02 10:34:06', NULL, NULL),
(59, 5, 20, '2022-12-02 10:46:35', NULL, NULL),
(60, 8, 20, '2022-12-02 10:46:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mission_theme`
--

CREATE TABLE `mission_theme` (
  `mission_theme_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_theme`
--

INSERT INTO `mission_theme` (`mission_theme_id`, `title`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'environment', 1, '2022-11-22 04:54:36', NULL, NULL),
(2, 'education', 0, '2022-11-22 04:54:52', NULL, NULL),
(3, 'Farmer', 1, '2022-11-25 09:57:53', '2022-11-25 04:27:53', '2022-11-25 04:27:53'),
(4, 'animal', 1, '2022-11-28 04:08:30', NULL, NULL),
(5, 'Farmer', 0, '2022-11-28 04:08:45', NULL, NULL),
(6, 'Plantation', 0, '2022-11-28 04:09:00', NULL, NULL),
(7, 'Children', 0, '2022-11-28 04:09:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(64) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'php', 1, '2022-11-22 04:55:04', NULL, NULL),
(2, 'laravel', 0, '2022-11-25 09:37:21', '2022-11-25 04:07:21', '2022-11-25 04:07:21'),
(3, 'Anthropology', 1, '2022-11-29 08:29:05', NULL, NULL),
(4, 'Archeology', 0, '2022-11-29 08:29:24', NULL, NULL),
(5, 'Astronomy', 0, '2022-11-29 08:29:43', NULL, NULL),
(6, 'Computer Science', 1, '2022-11-29 08:29:57', NULL, NULL),
(7, 'History', 0, '2022-11-29 08:30:09', NULL, NULL),
(8, 'Research', 0, '2022-11-29 08:30:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('DRAFT','PENDING','PUBLISHED','DECLINE') NOT NULL DEFAULT 'DRAFT',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `user_id`, `mission_id`, `title`, `description`, `status`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 10, 'Animal Stories', '<p>Reading stories is an activity that is a part of the most delightful period of childhood. Most of us have a natural curiosity about the animals we see around us</p>', 'DRAFT', NULL, '2022-12-08 06:37:01', '2022-12-08 06:37:01', NULL),
(2, 1, 14, 'Monkey and Crocodile,', '<p>Grandma Stories for kids, Moral Stories for kids, Animal Stories for Kids, Jungle Stories for kids, Panchatantra Stories for Children, Fairy Tales, Akbar and Birbal, Tenali Raman and many more.</p>', 'DRAFT', NULL, '2022-12-09 00:58:55', '2022-12-09 00:58:55', NULL),
(3, 1, 18, 'Love of Tomorrow', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry</p>', 'DRAFT', NULL, '2022-12-09 02:45:57', '2022-12-09 02:45:57', NULL),
(4, 1, 15, 'Funny Story', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry</p>', 'DRAFT', NULL, '2022-12-12 04:11:31', '2022-12-11 22:37:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `story_invite`
--

CREATE TABLE `story_invite` (
  `story_invite_id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `from_user_id` bigint(20) UNSIGNED NOT NULL,
  `to_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_invite`
--

INSERT INTO `story_invite` (`story_invite_id`, `story_id`, `from_user_id`, `to_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 8, 8, '2022-12-27 02:57:20', '2022-12-27 02:57:20', NULL),
(2, 3, 8, 1, '2022-12-27 04:12:08', '2022-12-27 04:12:08', NULL),
(3, 3, 8, 1, '2022-12-27 04:14:37', '2022-12-27 04:14:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `story_media`
--

CREATE TABLE `story_media` (
  `story_media_id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_media`
--

INSERT INTO `story_media` (`story_media_id`, `story_id`, `type`, `path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'image/png', 'CSR-initiative-stands-for-Coffee--and-Farmer-Equity-2.png', '2022-12-08 06:37:01', '2022-12-08 06:37:01', NULL),
(2, 1, 'image/png', 'Grow-Trees-On-the-path-to-environment-sustainability-1.png', '2022-12-08 06:37:01', '2022-12-08 06:37:01', NULL),
(3, 2, 'image/jpeg', 'banner1.jpg', '2022-12-09 00:58:55', '2022-12-09 00:58:55', NULL),
(4, 2, 'image/png', 'Grow-Trees-On-the-path-to-environment-sustainability-4.png', '2022-12-09 00:58:55', '2022-12-09 00:58:55', NULL),
(5, 3, 'image/jpeg', 'banner2.jpg', '2022-12-09 02:45:57', '2022-12-09 02:45:57', NULL),
(6, 3, 'image/png', 'CSR-initiative-stands-for-Coffee--and-Farmer-Equity-2.png', '2022-12-09 02:45:57', '2022-12-09 02:45:57', NULL),
(7, 4, 'image/png', 'CSR-initiative-stands-for-Coffee--and-Farmer-Equity-2.png', '2022-12-11 22:37:55', '2022-12-11 22:37:55', NULL),
(8, 4, 'image/png', 'Grow-Trees-On-the-path-to-environment-sustainability-login.png', '2022-12-11 22:37:55', '2022-12-11 22:37:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE `timesheet` (
  `timesheet_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mission_id` bigint(20) UNSIGNED DEFAULT NULL,
  `time` time DEFAULT NULL,
  `action` int(11) DEFAULT NULL,
  `date_volunteered` date NOT NULL,
  `notes` text DEFAULT NULL,
  `status` enum('APPROVED','DECLINED','SUBMIT_FOR_APPROVAL','PENDNG') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timesheet`
--

INSERT INTO `timesheet` (`timesheet_id`, `user_id`, `mission_id`, `time`, `action`, `date_volunteered`, `notes`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 17, '07:14:00', NULL, '2022-12-17', 'Trusha Gondaliya', 'APPROVED', '2022-12-28 08:42:16', '2022-12-28 03:12:16', NULL),
(2, 2, 13, NULL, 6, '2022-12-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'APPROVED', '2022-12-28 08:54:52', '2022-12-28 03:24:52', NULL),
(3, 2, 14, '18:18:00', NULL, '2023-01-07', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'APPROVED', '2022-12-05 04:16:14', '2022-12-05 04:16:14', NULL),
(4, 2, 17, '01:37:00', NULL, '2022-12-18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'APPROVED', '2022-12-05 04:37:58', '2022-12-05 04:37:58', NULL),
(5, 2, 17, NULL, 3, '2022-12-17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'APPROVED', '2022-12-28 09:21:08', '2022-12-28 03:51:08', '2022-12-28 03:51:08'),
(6, 2, 15, '17:29:00', NULL, '2022-12-17', 'Trusha Gondaliya', 'APPROVED', '2022-12-28 09:11:50', '2022-12-28 03:41:50', '2022-12-28 03:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(16) DEFAULT NULL,
  `last_name` varchar(16) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `avtar` varchar(2048) DEFAULT NULL,
  `why_i_volunteer` text DEFAULT NULL,
  `employee_id` varchar(16) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_text` text DEFAULT NULL,
  `linked_in_url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `avtar`, `why_i_volunteer`, `employee_id`, `department`, `city_id`, `country_id`, `profile_text`, `linked_in_url`, `title`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Trusha', 'Gondaliya', 'trushagondaliya30@gmail.com', '$2y$10$I8/CxGHOxO7KWA4YUOuriuys6zfEoFvSDeCdfCxNI2yUVQujvwlDq', '8897645682', '1669376704.png', 'I love to work and help other people..', '123abc', 'HR MANAGEMENT', 1, 1, '<p>Being a part of a team with a common goal will help you form bonds with strangers that can be life-changing. Volunteering inherently means helping people, and that means you&rsquo;ll be creating meaningful relationships with others and increasing your social interactions.</p>', 'trusha.linkdin', 'volunteer', '0', '2022-11-21 23:15:19', '2022-12-02 07:16:57', NULL),
(2, 'Harsh', 'Gondaliya', 'harsh@gmail.com', '$2y$10$U0zp/n1GyhDe5eA/9GANP.vpMEbQ592zGw4R9HkeRrHbeQ20o1W3O', '9909876568', '1669293016.jpeg', 'Meet New People and Build Community', '1234abcd', 'managment', 2, 1, '<p>Being a part of a team with a common goal will help you form bonds with strangers that can be life-changing. Volunteering inherently means helping people, and that means you&rsquo;ll be creating meaningful relationships with others and increasing your social interactions.</p>', 'harsh Gondaliya', 'community', '1', '2022-11-21 23:17:45', '2022-12-02 07:16:31', NULL),
(5, 'Alis', 'Bhatt', 'alisbhatt@gmail.com', '$2y$10$XXE/gUxm/ulY2joTGxw5ceXDCSuGPTevuJxUyBLXfnPhk6ET31hq2', '1234567890', '1669811265.png', 'Gain Knowledge and Understanding of Other Ways of Life', 'abc54', 'HR', 5, 1, '<p>Volunteering might take you to a new part of your community you have never been to before. Volunteer programs can give you the opportunity to bring people into your social network you otherwise wouldn&rsquo;t get to meet and learn from those who come from different walks of life. This experience can expand your understanding of others who are different from you.</p>', 'Alis Bhatt', 'ways of life', '0', '2022-11-30 06:57:45', '2022-12-02 07:17:55', NULL),
(6, 'Arshi', 'Sharma', 'arshi@gmail.com', '$2y$10$4/usutXiLWXn2oE925XCweLuEC9hWWG/KxDeZvZNOWzImpYlVhz9i', '9943789032', '1669881933.png', 'Boost Your Self-Esteem', '190310', 'Accounting and Finance', 5, 1, '<p>The more opportunities you take to learn new skills and gain knowledge, the more fully you will develop as a person. And what safer space to develop those skills than in a context of service?</p>\r\n<p>Stepping out of your comfort zone and building new skills is the best way to develop your self-esteem. Volunteering will increase your sense of pride and thus, your self-confidence! When you challenge yourself through volunteering and receive appreciation from others, it can make you feel better emotionally and mentally.&nbsp;</p>\r\n<p>&nbsp;</p>', 'Arshi Sharma', 'self-Esteem', '1', '2022-12-01 02:35:33', '2022-12-02 07:19:00', NULL),
(7, 'Robert', 'Smith', 'robert@gmail.com', '$2y$10$jeE8ohpFAb56HnZmcFsYJ.wz.zV7CwggUJg6jMBxUSeAloOWQ8vXO', '8897645682', '1670567806.png', 'Meet New People and Build Community', '1234abc', 'HR', 4, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>', 'robert smith', 'xyz', '0', '2022-12-09 01:06:46', '2022-12-09 01:06:46', NULL),
(8, 'Bansi', 'Raiyani', 'bansiraiyani9963@gmail.com', '$2y$10$GiZGT1aD/cenFTbFXNjXOOaU5115GGjyxV.WVGi3VVyOdCmzhKxs.', '123456789', '1672116342.png', 'Meet New People and Build Community', '1234abc', 'HR', 2, 1, '<p>Volunteering might take you to a new part of your community you have never been to before. Volunteer programs can give you the opportunity to bring people into your social network you otherwise wouldn&amp;rsquo;t get to meet and learn from those who come from different walks of life. This experience can expand your understanding of others who are different from you.</p>', 'bansi raiyani', 'abcd', '0', '2022-12-26 23:15:42', '2022-12-26 23:15:42', NULL),
(9, 'Ritika', 'Parmar', 'ritikaparmar406@gmail.com', '$2y$10$oM12WyOFjEGUqELC00ZGGuvXLcifiR11LFs5YFmtFmFB1x.64.3da', '7864257907', '1672116419.png', 'Boost Your Self-Esteem', '1234abc', 'electrical', 5, 2, '<p>&lt;p&gt;Volunteering might take you to a new part of your community you have never been to before. Volunteer programs can give you the opportunity to bring people into your social network you otherwise wouldn&amp;rsquo;t get to meet and learn from those who come from different walks of life. This experience can expand your understanding of others who are different from you.&lt;/p&gt;</p>', 'ritika parmar', 'loream', '0', '2022-12-26 23:16:59', '2022-12-26 23:16:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_skill`
--

CREATE TABLE `user_skill` (
  `user_skill_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `skill_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_country_id_foreign` (`country_id`);

--
-- Indexes for table `cms_page`
--
ALTER TABLE `cms_page`
  ADD PRIMARY KEY (`cms_page_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_mission_id` (`mission_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `favourite_mission`
--
ALTER TABLE `favourite_mission`
  ADD PRIMARY KEY (`favourite_mission_id`),
  ADD KEY `favourite_mission_user_id_foreign` (`user_id`) USING BTREE,
  ADD KEY `favourite_mission_mission_id_foreign` (`mission_id`) USING BTREE;

--
-- Indexes for table `goal_mission`
--
ALTER TABLE `goal_mission`
  ADD PRIMARY KEY (`goal_mission_id`),
  ADD KEY `goal_mission_mission_id_foreign` (`mission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`mission_id`),
  ADD KEY `theme_id` (`theme_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `mission_application`
--
ALTER TABLE `mission_application`
  ADD PRIMARY KEY (`mission_application`),
  ADD KEY `mission_application_mission_id_foreign` (`mission_id`),
  ADD KEY `mission_application_user_id_foreign` (`user_id`);

--
-- Indexes for table `mission_document`
--
ALTER TABLE `mission_document`
  ADD PRIMARY KEY (`mission_document_id`),
  ADD KEY `mission_document_mission_id_foreign` (`mission_id`);

--
-- Indexes for table `mission_invite`
--
ALTER TABLE `mission_invite`
  ADD PRIMARY KEY (`mission_invite_id`),
  ADD KEY `mission_invite_mission_id_foreign` (`mission_id`),
  ADD KEY `mission_invite_from_user_id_foreign` (`from_user_id`),
  ADD KEY `mission_invite_to_user_id_foreign` (`to_user_id`);

--
-- Indexes for table `mission_media`
--
ALTER TABLE `mission_media`
  ADD PRIMARY KEY (`mission_media_id`),
  ADD KEY `mission_media_mission_id_foreign` (`mission_id`);

--
-- Indexes for table `mission_rating`
--
ALTER TABLE `mission_rating`
  ADD PRIMARY KEY (`mission_rating_id`),
  ADD KEY `mission_rating_user_id_foreign` (`user_id`),
  ADD KEY `mission_rating_mission_id_foreign` (`mission_id`);

--
-- Indexes for table `mission_skill`
--
ALTER TABLE `mission_skill`
  ADD PRIMARY KEY (`mission_skill_id`),
  ADD KEY `mission_skill_mission_id_foreign` (`mission_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `mission_theme`
--
ALTER TABLE `mission_theme`
  ADD PRIMARY KEY (`mission_theme_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `story_user_id_foreign` (`user_id`),
  ADD KEY `story_mission_id_foreign` (`mission_id`);

--
-- Indexes for table `story_invite`
--
ALTER TABLE `story_invite`
  ADD PRIMARY KEY (`story_invite_id`),
  ADD KEY `story_invite_from_user_id_foreign` (`from_user_id`),
  ADD KEY `story_invite_to_user_id_foreign` (`to_user_id`),
  ADD KEY `story_id` (`story_id`);

--
-- Indexes for table `story_media`
--
ALTER TABLE `story_media`
  ADD PRIMARY KEY (`story_media_id`),
  ADD KEY `story_id` (`story_id`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`timesheet_id`),
  ADD KEY `timesheet_user_id_foreign` (`user_id`),
  ADD KEY `timesheet_mission_id_foreign` (`mission_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_city_id` (`city_id`),
  ADD KEY `user_country_id` (`country_id`);

--
-- Indexes for table `user_skill`
--
ALTER TABLE `user_skill`
  ADD PRIMARY KEY (`user_skill_id`),
  ADD KEY `user_skill_user_id_foreign` (`user_id`),
  ADD KEY `user_skill_skill_id_foreign` (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `cms_page_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favourite_mission`
--
ALTER TABLE `favourite_mission`
  MODIFY `favourite_mission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `goal_mission`
--
ALTER TABLE `goal_mission`
  MODIFY `goal_mission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `mission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `mission_application`
--
ALTER TABLE `mission_application`
  MODIFY `mission_application` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mission_document`
--
ALTER TABLE `mission_document`
  MODIFY `mission_document_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mission_invite`
--
ALTER TABLE `mission_invite`
  MODIFY `mission_invite_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mission_media`
--
ALTER TABLE `mission_media`
  MODIFY `mission_media_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `mission_rating`
--
ALTER TABLE `mission_rating`
  MODIFY `mission_rating_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mission_skill`
--
ALTER TABLE `mission_skill`
  MODIFY `mission_skill_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `mission_theme`
--
ALTER TABLE `mission_theme`
  MODIFY `mission_theme_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `story_invite`
--
ALTER TABLE `story_invite`
  MODIFY `story_invite_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `story_media`
--
ALTER TABLE `story_media`
  MODIFY `story_media_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `timesheet_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_skill`
--
ALTER TABLE `user_skill`
  MODIFY `user_skill_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_mission_id` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`);

--
-- Constraints for table `favourite_mission`
--
ALTER TABLE `favourite_mission`
  ADD CONSTRAINT `favourite_mission_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `favourite_mission_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `goal_mission`
--
ALTER TABLE `goal_mission`
  ADD CONSTRAINT `goal_mission_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`);

--
-- Constraints for table `missions`
--
ALTER TABLE `missions`
  ADD CONSTRAINT `missions_ibfk_1` FOREIGN KEY (`theme_id`) REFERENCES `mission_theme` (`mission_theme_id`),
  ADD CONSTRAINT `missions_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `missions_ibfk_3` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `mission_application`
--
ALTER TABLE `mission_application`
  ADD CONSTRAINT `mission_application_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `mission_application_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `mission_document`
--
ALTER TABLE `mission_document`
  ADD CONSTRAINT `mission_document_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`);

--
-- Constraints for table `mission_invite`
--
ALTER TABLE `mission_invite`
  ADD CONSTRAINT `mission_invite_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `mission_invite_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `mission_invite_to_user_id_foreign` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `mission_media`
--
ALTER TABLE `mission_media`
  ADD CONSTRAINT `mission_media_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`);

--
-- Constraints for table `mission_rating`
--
ALTER TABLE `mission_rating`
  ADD CONSTRAINT `mission_rating_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `mission_rating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `mission_skill`
--
ALTER TABLE `mission_skill`
  ADD CONSTRAINT `mission_skill_ibfk_1` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`),
  ADD CONSTRAINT `mission_skill_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`);

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `story_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `story_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `story_invite`
--
ALTER TABLE `story_invite`
  ADD CONSTRAINT `story_invite_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `story_invite_ibfk_1` FOREIGN KEY (`story_id`) REFERENCES `story` (`story_id`),
  ADD CONSTRAINT `story_invite_to_user_id_foreign` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `story_media`
--
ALTER TABLE `story_media`
  ADD CONSTRAINT `story_media_ibfk_1` FOREIGN KEY (`story_id`) REFERENCES `story` (`story_id`);

--
-- Constraints for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD CONSTRAINT `timesheet_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `timesheet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `city_id` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`);

--
-- Constraints for table `user_skill`
--
ALTER TABLE `user_skill`
  ADD CONSTRAINT `user_skill_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`),
  ADD CONSTRAINT `user_skill_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
