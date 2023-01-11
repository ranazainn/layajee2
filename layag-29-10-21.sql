-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2021 at 12:53 PM
-- Server version: 8.0.19-0ubuntu5
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layag`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_orientation`
--

CREATE TABLE `doc_orientation` (
  `id` int NOT NULL,
  `orientation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doc_orientation`
--

INSERT INTO `doc_orientation` (`id`, `orientation`) VALUES
(1, 'front'),
(2, 'back'),
(3, 'right'),
(4, 'left');

-- --------------------------------------------------------

--
-- Table structure for table `doc_type`
--

CREATE TABLE `doc_type` (
  `id` int NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `role_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doc_type`
--

INSERT INTO `doc_type` (`id`, `type`, `role_id`) VALUES
(1, 'license', 2),
(2, 'registration_book ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `vehicle_id` int DEFAULT NULL,
  `vehicle_model_id` int DEFAULT NULL,
  `vehicle_number_plate` varchar(255) DEFAULT NULL,
  `vehicle_color` varchar(20) DEFAULT NULL,
  `vehicle_year` int DEFAULT NULL,
  `vehicle_seats` int DEFAULT NULL,
  `occupied_seats` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `user_id`, `vehicle_id`, `vehicle_model_id`, `vehicle_number_plate`, `vehicle_color`, `vehicle_year`, `vehicle_seats`, `occupied_seats`, `created_at`, `updated_at`) VALUES
(2, 4, 1, 1, '1825', 'Black', 2021, 4, NULL, '2021-04-20 17:56:54', '2021-04-20 17:56:54'),
(3, 8, 1, 1, '1425', 'Red', 2021, 6, NULL, '2021-04-22 15:32:12', '2021-04-22 15:32:12'),
(4, 4, 1, 1, '03324848685', 'Gray', 2020, 4, NULL, '2021-04-22 15:53:10', '2021-04-22 15:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `driver_docs`
--

CREATE TABLE `driver_docs` (
  `id` int NOT NULL,
  `driver_id` int DEFAULT NULL,
  `vehicle_id` int DEFAULT NULL,
  `doc_type_id` int DEFAULT NULL,
  `doc_orientation_id` int DEFAULT NULL,
  `doc_name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `doc_ext` varchar(100) DEFAULT NULL,
  `doc_number` varchar(255) DEFAULT NULL,
  `doc_exp` date DEFAULT NULL,
  `doc_path` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_routes`
--

CREATE TABLE `driver_routes` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `d_id` int DEFAULT NULL,
  `location_name` varchar(255) DEFAULT NULL,
  `loc_lat` varchar(255) DEFAULT NULL,
  `loc_long` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `driver_routes`
--

INSERT INTO `driver_routes` (`id`, `user_id`, `d_id`, `location_name`, `loc_lat`, `loc_long`, `created_at`, `updated_at`) VALUES
(1, 8, 3, 'Kalma Chowk', '31.503818', '74.331823', '2021-04-23 14:46:57', '2021-04-23 14:46:57'),
(2, 8, 3, 'Kalma Chowk', '31.503818', '74.331823', '2021-04-23 20:56:35', '2021-04-23 20:56:35'),
(3, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:08:02', '2021-05-05 18:08:02'),
(4, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:09:55', '2021-05-05 18:09:55'),
(5, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:12:13', '2021-05-05 18:12:13'),
(6, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:15:13', '2021-05-05 18:15:13'),
(7, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:16:32', '2021-05-05 18:16:32'),
(8, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:22:59', '2021-05-05 18:22:59'),
(9, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:23:22', '2021-05-05 18:23:22'),
(10, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:26:56', '2021-05-05 18:26:56'),
(11, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:27:08', '2021-05-05 18:27:08'),
(12, 8, 2, 'Kalma Chowk', '31.503818', '74.331823', '2021-05-05 18:32:07', '2021-05-05 18:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `driver_st_end`
--

CREATE TABLE `driver_st_end` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `d_id` int DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `off_time` datetime DEFAULT NULL,
  `start_location` varchar(255) DEFAULT NULL,
  `st_lat` varchar(255) DEFAULT NULL,
  `st_long` varchar(255) DEFAULT NULL,
  `off_location` varchar(255) DEFAULT NULL,
  `off_lat` varchar(255) DEFAULT NULL,
  `off_long` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `driver_st_end`
--

INSERT INTO `driver_st_end` (`id`, `user_id`, `d_id`, `start_time`, `off_time`, `start_location`, `st_lat`, `st_long`, `off_location`, `off_lat`, `off_long`, `created_at`, `updated_at`) VALUES
(6, 4, 2, '2021-04-21 08:00:00', '2021-04-21 14:00:00', 'sadiq trade center', '31.5315', '74.3529', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-04-21 19:24:17', '2021-04-21 19:24:17'),
(7, 8, 3, '2021-04-21 08:00:00', '2021-04-21 15:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-04-22 17:31:02', '2021-04-22 17:31:02'),
(10, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:08:02', '2021-05-05 18:08:02'),
(11, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:09:55', '2021-05-05 18:09:55'),
(12, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:12:14', '2021-05-05 18:12:14'),
(13, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:15:13', '2021-05-05 18:15:13'),
(14, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:16:32', '2021-05-05 18:16:32'),
(15, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:22:59', '2021-05-05 18:22:59'),
(16, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:23:23', '2021-05-05 18:23:23'),
(17, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:26:56', '2021-05-05 18:26:56'),
(18, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:27:08', '2021-05-05 18:27:08'),
(19, 8, 2, '2021-04-21 00:00:00', '2021-04-21 00:00:00', 'Hafeez center, Pakistan', '31.5160', '74.3429', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', '2021-05-05 18:32:07', '2021-05-05 18:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2021_01_20_185941_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@aroma.com', '$2y$10$P/1M3mCN4HNW1QLzFmn8WeaYGKbc6T6p98EUeUNINqw833ZYRLLAW', '2021-01-21 15:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `id` int NOT NULL,
  `usr_id` int UNSIGNED DEFAULT NULL,
  `vehicle_type_id` int DEFAULT NULL,
  `service_id` int DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`id`, `usr_id`, `vehicle_type_id`, `service_id`, `created_at`, `updated_at`) VALUES
(2, 7, NULL, NULL, '2021-04-20 18:27:48', '2021-04-20 18:27:48'),
(3, 7, NULL, NULL, '2021-04-21 14:44:18', '2021-04-21 14:44:18'),
(4, 7, NULL, NULL, '2021-04-21 14:49:08', '2021-04-21 14:49:08'),
(5, 7, NULL, NULL, '2021-04-21 15:55:40', '2021-04-21 15:55:40'),
(6, 7, NULL, NULL, '2021-04-21 15:55:59', '2021-04-21 15:55:59'),
(7, 7, NULL, NULL, '2021-04-21 15:56:46', '2021-04-21 15:56:46'),
(8, 7, NULL, NULL, '2021-04-21 15:56:59', '2021-04-21 15:56:59'),
(9, 7, NULL, NULL, '2021-04-21 15:57:15', '2021-04-21 15:57:15'),
(10, 7, NULL, NULL, '2021-04-21 15:58:06', '2021-04-21 15:58:06'),
(11, 7, NULL, NULL, '2021-04-21 15:58:35', '2021-04-21 15:58:35'),
(12, 7, NULL, NULL, '2021-04-21 15:59:09', '2021-04-21 15:59:09'),
(13, 7, NULL, NULL, '2021-04-21 19:22:44', '2021-04-21 19:22:44'),
(14, NULL, NULL, NULL, '2021-04-22 16:43:05', '2021-04-22 16:43:05'),
(15, NULL, NULL, NULL, '2021-04-22 16:43:34', '2021-04-22 16:43:34'),
(16, 7, NULL, NULL, '2021-05-07 10:35:27', '2021-05-07 10:35:27'),
(17, 7, NULL, NULL, '2021-05-07 10:48:38', '2021-05-07 10:48:38'),
(18, 7, NULL, NULL, '2021-05-07 10:49:15', '2021-05-07 10:49:15'),
(19, 7, NULL, NULL, '2021-08-31 13:31:17', '2021-08-31 13:31:17'),
(20, 7, NULL, NULL, '2021-08-31 13:31:18', '2021-08-31 13:31:18'),
(21, NULL, NULL, NULL, '2021-08-31 19:48:53', '2021-08-31 19:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `ride_details`
--

CREATE TABLE `ride_details` (
  `id` int NOT NULL,
  `ride_id` int DEFAULT NULL,
  `d_id` int DEFAULT NULL,
  `child_name` varchar(255) DEFAULT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pickup_time` varchar(255) DEFAULT NULL,
  `drop_off_time` varchar(255) DEFAULT NULL,
  `special_child` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pickup_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `p_lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `p_long` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `drop_off_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `d_lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `d_long` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `vehicle_type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `distance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ride_details`
--

INSERT INTO `ride_details` (`id`, `ride_id`, `d_id`, `child_name`, `gender`, `pickup_time`, `drop_off_time`, `special_child`, `pickup_location`, `p_lat`, `p_long`, `drop_off_location`, `d_lat`, `d_long`, `vehicle_type`, `distance`, `address`) VALUES
(2, 2, NULL, ' umar', 'male', '11:27', '12:27', 'no', 'liberty', '31.5106', '74.3445', 'Kandahar, Afghanistan', '31.628871', '65.7371749', 'Car', NULL, NULL),
(3, 3, NULL, 'usma', 'male', '19:43', '21:43', 'no', 'hafeez center', '31.5160', '74.3429', 'Kabul, Afghanistan', '34.5553494', '69.207486', 'Car', NULL, NULL),
(4, 4, NULL, NULL, 'male', '21:48', '22:48', NULL, 'Islamabad, Pakistan', '33.6844202', '73.04788479999999', 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Car', NULL, NULL),
(5, 5, NULL, NULL, 'male', '21:55', '22:55', NULL, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Sheikhupura, Pakistan', '31.7166617', '73.98502429999999', 'Car', NULL, NULL),
(6, 6, NULL, NULL, 'male', '21:55', '22:55', NULL, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Islamabad, Pakistan', '33.6844202', '73.04788479999999', 'Bus', NULL, NULL),
(7, 7, NULL, NULL, 'male', '22:56', '12:56', NULL, 'Islamabad, Pakistan', '33.6844202', '73.04788479999999', 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Van', NULL, NULL),
(8, 8, NULL, NULL, 'male', '21:56', '22:56', NULL, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Islamabad, Pakistan', '33.6844202', '73.04788479999999', 'Van', NULL, NULL),
(9, 9, NULL, NULL, 'male', '21:57', '22:57', NULL, 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Islamabad, Pakistan', '33.6844202', '73.04788479999999', 'Bus', NULL, NULL),
(10, 10, NULL, 'haider', 'male', '20:59', '23:57', 'no', 'İstanbul, Turkey', '41.0082376', '28.9783589', 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Bus', NULL, NULL),
(11, 11, NULL, 'girl', 'female', '20:58', '23:58', 'no', 'Islamabad, Pakistan', '33.6844202', '73.04788479999999', 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Car', NULL, NULL),
(12, 12, NULL, 'male', 'male', '21:58', '22:58', 'no', 'Islamabad, Pakistan', '33.6844202', '73.04788479999999', 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Bus', NULL, NULL),
(13, 13, NULL, 'haji', 'male', '01:21', '03:21', 'no', 'Shahdara, Pakistan', '31.6211127', '74.2823662', 'Model Town, Lahore, Pakistan', '31.4804642', '74.3239342', 'Car', NULL, NULL),
(14, 14, NULL, 'Salman', 'Male', '9:42 PM', '9:42 PM', 'No', 'Serang, Serang City, Banten, Indonesia', '-6.1169309', '106.1538519', 'Swargate Flyover, Mukund Nagar, Pune, Maharashtra 411037, India', '18.4971535', '73.8580894', NULL, NULL, NULL),
(15, 15, NULL, NULL, NULL, '7:43 PM', '9:43 PM', NULL, 'Ghaus-ul-Azam، Jail Road, Shadman 1 Shadman, Lahore, Punjab 54000, Pakistan', '31.5409853', '74.3323679', 'Shadman, Lahore, Punjab, Pakistan', '31.5377616', '74.3308864', NULL, NULL, NULL),
(16, 16, NULL, NULL, 'male', '16:32', '16:32', NULL, 'Islamabad, Pakistan', '33.6844202', '73.04788479999999', 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Bus', NULL, NULL),
(17, NULL, NULL, 'jazzy rana', 'male', '08:36', '18:36', NULL, NULL, '33.6844202', '73.04788479999999', 'Lahore, Pakistan', '31.5203696', '74.35874729999999', 'Van', NULL, NULL),
(18, 19, NULL, NULL, 'male', '19:30', '23:30', 'no', 'Islamabad, Pakistan', '33.6844202', '73.04788479999999', 'Kabul, Afghanistan', '34.5553494', '69.207486', 'Car', NULL, NULL),
(19, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 21, NULL, NULL, NULL, '9:00', '12:00', NULL, 'Siddique trade', '0.0', '9.0', 'Services Hospital', '3.0', '4.0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role_name` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `display_name`, `discription`) VALUES
(1, 'admin', 'Admin', 'Has all the rights');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'school pick and drop'),
(2, 'office pick and drop'),
(3, 'cab service'),
(4, 'rent a car'),
(5, 'tours booking'),
(6, 'movers and packers'),
(7, 'recovery service');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plain_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` int NOT NULL DEFAULT '0',
  `verification_code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int DEFAULT NULL,
  `google_id` int DEFAULT NULL,
  `faccebook_id` int DEFAULT NULL,
  `provider_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `email`, `phone`, `password`, `plain_password`, `is_verified`, `verification_code`, `type`, `role`, `google_id`, `faccebook_id`, `provider_id`, `provider_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', '', 'admin@layajee.com', NULL, '$2y$12$j90Q2usqD2.PApKxUwrDCOZwtzGqSvtSGwItjL8kk1Y4qhEq7HuLu', '12345678', 0, NULL, NULL, 8, NULL, NULL, NULL, NULL, 'KTuRvTsh4YK3yHcXfo5P6jpqg6frGiJGQx69LXEpYzM3GDGHxArSuxsI10Yl', NULL, NULL),
(4, 'Salman Khan', 'Male', 'msalmanjavaid11@gmail.com', '03324810682', '$2y$10$qMR4h2cyHkHTyBUWE/GR7O3Fb77rM.ViDmZaeUKvBWP3WnQcJDuQC', '12345678', 0, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-04-20 17:43:42', '2021-04-20 17:43:42'),
(7, 'jazzy rana', 'male', 'ahmad786@gmail.com', NULL, '$2y$10$igFlAYu1FSdGkY/N1del6uyMEmtSVCI/lTOBRongEolvJV55Cc6qm', 'TremWEoeGv', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-20 18:25:03', '2021-04-20 18:25:27'),
(8, 'Usama Ahmed', 'Male', 'usama@gmail.com', '03314810682', '$2y$10$LnVkDnxrnpHKOcc3BAf7sOLeBaAZiglBalGyLVwH1F9p/IICTm8fC', '12345678', 0, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-04-22 15:30:57', '2021-04-22 15:30:57'),
(9, 'Ali Javaid', 'Male', 'ali@gmail.com', '03334725695', '$2y$10$hveitIxxEaPn7y/Mvqdd7OF3yOaDiMKahTypsnKyGj7h/0sxvbs.W', '12345678', 0, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-04-22 15:31:36', '2021-04-22 15:31:36'),
(10, 'first_name last_name', 'ahmad', 'ahmd@layajee.com', '03447006590', '$2y$10$AYc.yt016Jqq2UNJx4ZGMer0NhnwcZ7OJ1RewN1Z5RIKOXQZghwOm', '12345678', 0, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-05-05 17:34:01', '2021-05-05 17:34:01'),
(11, 'test testing', 'male', 'testing@gmail.com', '+923451450106', '$2y$10$7wEiuoxPla4hY6peQFLe2OsjiOmIpKGN2hKOX3wL4bdVPFgR24cb2', '12345678', 0, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2021-08-16 19:18:51', '2021-08-16 19:18:51'),
(12, 'test testing', 'Male', 'test@gmail.com', '03317714132', '$2y$10$m7vhVr74FIYWWczCu/hPI.0btPb2Ee2GZrlZa/ZXPUQSbLqK/VdR.', '12345678', 0, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, '2021-08-16 19:28:52', '2021-08-16 19:28:52'),
(13, 'ahmad786@gmail.com', NULL, '12345678', NULL, '$2y$10$mqsLccmyJIUjfYnBnyYQN.PGsFeLcnqg6IBDtAX.ibu0Nz5hOtHt.', 'r3NEvNpdBX', 0, '2774', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-31 13:29:34', '2021-08-31 13:29:34'),
(14, 'ahmad bilal', 'male', 'ahmadbilal786@gmail.com', NULL, '$2y$10$2/nIavl8UD4hpyNd3Q4VseJ8tGlOekpcflDJLx7E6yM8Cye26HomC', '2rPWkrmcvd', 0, '6144', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-31 19:16:58', '2021-08-31 19:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `role_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`) VALUES
(1, 'toyata');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_models`
--

CREATE TABLE `vehicle_models` (
  `id` int NOT NULL,
  `vehicle_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vehicle_models`
--

INSERT INTO `vehicle_models` (`id`, `vehicle_id`, `name`) VALUES
(1, 1, 'crollora xli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_orientation`
--
ALTER TABLE `doc_orientation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_type`
--
ALTER TABLE `doc_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_docs`
--
ALTER TABLE `driver_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_routes`
--
ALTER TABLE `driver_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_st_end`
--
ALTER TABLE `driver_st_end`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usr_fk` (`usr_id`),
  ADD KEY `service_fk` (`service_id`);

--
-- Indexes for table `ride_details`
--
ALTER TABLE `ride_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ride_fk` (`ride_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rol_fk` (`role_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_models`
--
ALTER TABLE `vehicle_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc_orientation`
--
ALTER TABLE `doc_orientation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `driver_docs`
--
ALTER TABLE `driver_docs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_routes`
--
ALTER TABLE `driver_routes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `driver_st_end`
--
ALTER TABLE `driver_st_end`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ride_details`
--
ALTER TABLE `ride_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_models`
--
ALTER TABLE `vehicle_models`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rides`
--
ALTER TABLE `rides`
  ADD CONSTRAINT `service_fk` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `usr_fk` FOREIGN KEY (`usr_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ride_details`
--
ALTER TABLE `ride_details`
  ADD CONSTRAINT `ride_fk` FOREIGN KEY (`ride_id`) REFERENCES `rides` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `rol_fk` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
