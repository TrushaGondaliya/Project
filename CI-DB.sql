-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 02:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `approval_status` enum('PENDING','PUBLISHED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `goal_mission`
--

CREATE TABLE `goal_mission` (
  `goal_mission_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `goal_objective_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goal_value` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goal_mission`
--

INSERT INTO `goal_mission` (`goal_mission_id`, `mission_id`, `goal_objective_text`, `goal_value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'e3qe3', 3, '2022-11-08 10:23:13', NULL, NULL);

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
  `short_description` text NOT NULL,
  `discription` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `mission_type` enum('GOAL','TIME') NOT NULL,
  `ststus` enum('0','1') NOT NULL,
  `organization` varchar(255) NOT NULL,
  `organization_detail` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `seat_left` int(11) NOT NULL,
  `Deadline` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`mission_id`, `theme_id`, `city_id`, `country_id`, `title`, `short_description`, `discription`, `start_date`, `end_date`, `mission_type`, `ststus`, `organization`, `organization_detail`, `availability`, `seat_left`, `Deadline`, `image`, `theme`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 1, 0, 'Animal Welfare Life & save bird campaign', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0', 'Save animal and bird', '', '', 254, '2022-10-20', 'Animal-welfare-&-save-birds-campaign.png', 'animal', '2022-11-08 13:04:36', NULL, NULL),
(2, 0, 2, 0, 'CSR initiative stands for Coffee & Farmer Equity', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0', 'We stands for coffee and farmers equity', '', '', 210, '2022-10-26', 'CSR-initiative-stands-for-Coffee--and-Farmer-Equity.png', 'Farmer', '2022-11-08 13:04:45', NULL, NULL),
(3, 0, 3, 0, 'Education Supplies for Every Pair of Shoes Sold', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0', 'We supply education', '', '', 126, '0000-00-00', 'Education-Supplies-for-Every--Pair-of-Shoes-Sold.png', 'Education', '2022-11-08 13:04:49', NULL, NULL),
(4, 0, 4, 0, 'Grow-Trees On the path to environment sustainability', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0', 'We grows tree', '', '', 255, '0000-00-00', 'Grow-Trees-On-the-path-to-environment-sustainability.png', 'Environment', '2022-11-08 13:05:00', NULL, NULL),
(5, 0, 5, 0, 'Plantation & Afforestation programme', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0', 'Plantation & Afforestation programme', '', '', 255, '2022-10-27', 'Plantation-and-Afforestation-programme.png', 'Plantation', '2022-11-08 13:05:05', NULL, NULL),
(6, 0, 6, 0, 'Nourish the Children in African country', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid earum numquam perferendis sunt error!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0', 'Nourish the Children in African country', '', '', 167, '0000-00-00', 'Nourish-the-Children-in--African-country.png', 'Children', '2022-11-08 13:05:14', NULL, NULL),
(7, 0, 2, 0, 'dummy', '', 'dummy', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0', 'dummy', 'dummy', '', 65, '2022-11-16', 'img.png', 'dummy', '2022-11-08 13:05:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mission_application`
--

CREATE TABLE `mission_application` (
  `mission_application` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `applied_at` datetime NOT NULL,
  `approval_status` enum('PENDING','APPROVE','DECLINE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mission_document`
--

CREATE TABLE `mission_document` (
  `mission_document_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `document_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `mission_media`
--

CREATE TABLE `mission_media` (
  `mission_media_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `media_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mission_rating`
--

CREATE TABLE `mission_rating` (
  `mission_rating_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `rating` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mission_skill`
--

CREATE TABLE `mission_skill` (
  `mission_invite_id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mission_theme`
--

CREATE TABLE `mission_theme` (
  `mission_theme_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `skill_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('DRAFT','PENDING','PUBLISHED','DECLINE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `published_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `story_media`
--

CREATE TABLE `story_media` (
  `story_media_id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `date_volunteered` datetime NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('APPROVED','DECLINED','SUBMIT_FOR_APPROVAL','PENDNG') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `avtar` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `why_i_volunteer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `profile_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_in_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD KEY `favourite_mission_user_id_foreign` (`user_id`),
  ADD KEY `favourite_mission_mission_id_foreign` (`mission_id`);

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
  ADD PRIMARY KEY (`mission_id`);

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
  ADD PRIMARY KEY (`mission_invite_id`),
  ADD KEY `mission_skill_skill_id_foreign` (`skill_id`),
  ADD KEY `mission_skill_mission_id_foreign` (`mission_id`);

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
  ADD KEY `story_invite_from_story_id_foreign` (`story_id`);

--
-- Indexes for table `story_media`
--
ALTER TABLE `story_media`
  ADD PRIMARY KEY (`story_media_id`),
  ADD KEY `story_media_story_id_foreign` (`story_id`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`timesheet_id`),
  ADD KEY `timesheet_user_id_foreign` (`user_id`),
  ADD KEY `timesheet_mission_id_foreign` (`mission_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
  MODIFY `banner_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `cms_page_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `favourite_mission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_mission`
--
ALTER TABLE `goal_mission`
  MODIFY `goal_mission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `mission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mission_application`
--
ALTER TABLE `mission_application`
  MODIFY `mission_application` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission_document`
--
ALTER TABLE `mission_document`
  MODIFY `mission_document_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission_invite`
--
ALTER TABLE `mission_invite`
  MODIFY `mission_invite_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission_media`
--
ALTER TABLE `mission_media`
  MODIFY `mission_media_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission_rating`
--
ALTER TABLE `mission_rating`
  MODIFY `mission_rating_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission_skill`
--
ALTER TABLE `mission_skill`
  MODIFY `mission_invite_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission_theme`
--
ALTER TABLE `mission_theme`
  MODIFY `mission_theme_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `story_invite`
--
ALTER TABLE `story_invite`
  MODIFY `story_invite_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `story_media`
--
ALTER TABLE `story_media`
  MODIFY `story_media_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `timesheet_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `favourite_mission_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `goal_mission`
--
ALTER TABLE `goal_mission`
  ADD CONSTRAINT `goal_mission_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`);

--
-- Constraints for table `mission_application`
--
ALTER TABLE `mission_application`
  ADD CONSTRAINT `mission_application_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `mission_application_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `mission_document`
--
ALTER TABLE `mission_document`
  ADD CONSTRAINT `mission_document_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`);

--
-- Constraints for table `mission_invite`
--
ALTER TABLE `mission_invite`
  ADD CONSTRAINT `mission_invite_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `mission_invite_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `mission_invite_to_user_id_foreign` FOREIGN KEY (`to_user_id`) REFERENCES `user` (`user_id`);

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
  ADD CONSTRAINT `mission_rating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `mission_skill`
--
ALTER TABLE `mission_skill`
  ADD CONSTRAINT `mission_skill_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `mission_skill_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`);

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `story_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `story_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `story_invite`
--
ALTER TABLE `story_invite`
  ADD CONSTRAINT `story_invite_from_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `story` (`story_id`),
  ADD CONSTRAINT `story_invite_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `story_invite_to_user_id_foreign` FOREIGN KEY (`to_user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `story_media`
--
ALTER TABLE `story_media`
  ADD CONSTRAINT `story_media_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `story` (`story_id`);

--
-- Constraints for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD CONSTRAINT `timesheet_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`),
  ADD CONSTRAINT `timesheet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_city_id` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `user_country_id` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `user_skill`
--
ALTER TABLE `user_skill`
  ADD CONSTRAINT `user_skill_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`),
  ADD CONSTRAINT `user_skill_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
