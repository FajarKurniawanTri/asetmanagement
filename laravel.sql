-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 03:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_datas`
--

CREATE TABLE `a_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a_dvrs`
--

CREATE TABLE `a_dvrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) NOT NULL,
  `location_id` bigint(20) NOT NULL,
  `merk` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `firmware` varchar(225) NOT NULL,
  `channel` varchar(225) NOT NULL,
  `hdd` varchar(225) NOT NULL,
  `localip` varchar(225) NOT NULL,
  `publicip` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_dvrs`
--

INSERT INTO `a_dvrs` (`id`, `unit_id`, `location_id`, `merk`, `type`, `firmware`, `channel`, `hdd`, `localip`, `publicip`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'HIKVISION', 'DS-7216HQHI-K2', 'V3.5.35 build 180316', '11', '8 TBt', '192.168.10.19', '1125.512', '2023-09-05 08:55:33', '2023-09-07 13:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `a_faces`
--

CREATE TABLE `a_faces` (
  `id` bigint(20) NOT NULL,
  `unit_id` bigint(20) NOT NULL,
  `location_id` bigint(20) NOT NULL,
  `merk` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `firmware` varchar(225) NOT NULL,
  `localip` varchar(225) NOT NULL,
  `condition` enum('Baik','Buruk') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a_faces`
--

INSERT INTO `a_faces` (`id`, `unit_id`, `location_id`, `merk`, `type`, `firmware`, `localip`, `condition`, `created_at`, `updated_at`) VALUES
(1, 2, 9, 'HIKVISION', 'DS-7216HQHI-K2', 'V4.71.005 build 220524', '192.168.1.1', 'Baik', '2023-09-08 09:12:16', '2023-09-08 18:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `a_groups`
--

CREATE TABLE `a_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_groups`
--

INSERT INTO `a_groups` (`id`, `group`, `created_at`, `updated_at`) VALUES
(1, 'Refinery', '2023-09-05 00:08:08', '2023-09-06 07:11:51'),
(2, 'OFFICE', '2023-09-05 00:21:13', '2023-09-06 07:11:44'),
(3, 'POM', '2023-09-06 07:11:57', '2023-09-06 07:11:57'),
(4, 'Bulking Terminal', '2023-09-06 19:55:48', '2023-09-06 19:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `a_locations`
--

CREATE TABLE `a_locations` (
  `id` bigint(20) NOT NULL,
  `location` varchar(225) NOT NULL,
  `unit_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_locations`
--

INSERT INTO `a_locations` (`id`, `location`, `unit_id`, `created_at`, `updated_at`) VALUES
(1, 'DEPAN BEA CUKAI', 3, '2023-09-06 07:09:23', '2023-09-06 07:09:23'),
(2, 'EHS OFFICE', 1, '2023-09-06 07:09:33', '2023-09-06 07:09:33'),
(3, 'ETP', 1, '2023-09-06 07:09:42', '2023-09-06 07:09:42'),
(4, 'FAL MCC OFFICE', 1, '2023-09-06 07:09:57', '2023-09-06 07:09:57'),
(5, 'FINISHING WAREHOUSE 01', 1, '2023-09-06 07:10:08', '2023-09-06 07:10:08'),
(6, 'KANTIN', 3, '2023-09-06 07:10:15', '2023-09-06 07:10:15'),
(8, 'MAIN OFFICE', 3, '2023-09-06 07:10:32', '2023-09-06 07:10:32'),
(9, 'MAIN OFFICE', 2, '2023-09-06 07:10:41', '2023-09-06 07:10:41'),
(10, 'MES PLANT', 1, '2023-09-06 07:10:50', '2023-09-06 07:10:50'),
(11, 'CENTRAL LAB', 1, '2023-09-06 20:00:17', '2023-09-06 20:00:17'),
(12, 'CENTRAL LAB', 2, '2023-09-06 20:00:25', '2023-09-06 20:00:25'),
(13, 'BIOREFINERY PANEL ROOM', 1, '2023-09-06 20:00:50', '2023-09-06 20:00:50'),
(14, 'BC KAI', 1, '2023-09-06 20:01:02', '2023-09-06 20:01:02'),
(15, 'BWRO', 1, '2023-09-06 20:01:41', '2023-09-06 20:01:41'),
(19, 'OLEO FA 2', 1, '2023-09-07 10:50:01', '2023-09-07 10:50:01'),
(20, 'FLOURMILL WH EXPAN DAN PELET', 1, '2023-09-07 10:50:11', '2023-09-07 10:50:11'),
(21, 'FLOURMILL WAREHOUSE', 1, '2023-09-07 10:50:18', '2023-09-07 10:50:18'),
(22, 'TEXTURING PROD-FILLING-01', 1, '2023-09-07 10:50:27', '2023-09-07 10:50:27'),
(23, 'TEXTURING LOADING WH-1', 1, '2023-09-07 10:50:38', '2023-09-07 10:50:38'),
(24, 'MAIN OFFICE', 1, '2023-09-07 10:50:46', '2023-09-07 10:53:28'),
(26, 'EHS OFFICE', 2, '2023-09-08 19:16:05', '2023-09-08 19:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `a_logs`
--

CREATE TABLE `a_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a_nvrs`
--

CREATE TABLE `a_nvrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) NOT NULL,
  `location_id` bigint(20) NOT NULL,
  `merk` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `firmware` varchar(225) NOT NULL,
  `channel` varchar(225) NOT NULL,
  `hdd` varchar(225) NOT NULL,
  `localip` varchar(225) NOT NULL,
  `publicip` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_nvrs`
--

INSERT INTO `a_nvrs` (`id`, `unit_id`, `location_id`, `merk`, `type`, `firmware`, `channel`, `hdd`, `localip`, `publicip`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'HIKVISION', 'DS-7216HQHI-K2', 'V3.5.35 build 180316', '16', '8 TB', '192.168.10.10', '255.255.125.512', '2023-09-05 14:52:54', '2023-09-06 20:05:42'),
(2, 1, 9, 'HIKVISION', 'DS-7716NI-K4', 'V4.71.005 build 220524', '12', '24 TB', '192.268.34.56', '255.255.255.0', '2023-09-06 20:05:33', '2023-09-06 20:12:59'),
(3, 1, 3, 'HIKVISION', 'DS-7716NI-K4', 'V3.4.101 build 180904', '16', '12 TB', '192.168.15.1', '255.255.255.1', '2023-09-06 20:08:06', '2023-09-06 20:12:52'),
(4, 1, 2, 'HIKVISION', 'DS-7716NI-K4', 'V3.4.103 build 181226', '16', '24 TB', '192.168.10.12', '255.255.255.2', '2023-09-06 20:10:14', '2023-09-06 20:10:14'),
(5, 2, 1, 'HIKVISION', 'DS-7716NI-K4', 'V4.32.116 build 220112', '4', '8 TB', '192.168.10.11', '255.255.255.4', '2023-09-06 20:12:43', '2023-09-06 20:12:43'),
(6, 3, 6, 'HIKVISION', 'DS-7716NI-K4', 'V4.32.110 build 211009', '4', '4 TB', '192.168.10.19', '255.255.255.5', '2023-09-06 20:15:12', '2023-09-06 20:15:12'),
(8, 3, 23, 'HIKVISION', 'DS-7216HQHI-K2', 'V3.5.35 build 180316', '603', '7023', '12334243535', '4324534535635', '2023-09-07 12:13:15', '2023-09-07 12:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `a_services`
--

CREATE TABLE `a_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `startdate` date NOT NULL,
  `estdate` date NOT NULL,
  `finishdate` date NOT NULL,
  `pic` varchar(225) NOT NULL,
  `unit` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `merk` varchar(225) NOT NULL,
  `camera` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_services`
--

INSERT INTO `a_services` (`id`, `startdate`, `estdate`, `finishdate`, `pic`, `unit`, `location`, `merk`, `camera`, `created_at`, `updated_at`) VALUES
(1, '2023-09-06', '2023-09-13', '2023-09-20', 'ADMIN', 'Gresik', 'CENTRAL LAB', 'HIKVISION', '5', '2023-09-06 08:32:59', '2023-09-06 08:32:59'),
(2, '2023-09-06', '2023-09-13', '2023-10-07', 'user', 'WINA GRESIK 3', 'EHS OFFICEb yuguvuv', 'HIKVISION', '1', '2023-09-06 02:05:56', '2023-09-06 02:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `a_units`
--

CREATE TABLE `a_units` (
  `id` bigint(20) NOT NULL,
  `unit` varchar(225) NOT NULL,
  `group_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_units`
--

INSERT INTO `a_units` (`id`, `unit`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'WINA GRESIK 1', 1, '2023-09-04 18:17:06', '2023-09-06 07:08:27'),
(2, 'WINA GRESIK 2', 2, '2023-09-04 15:07:08', '2023-09-06 07:08:51'),
(3, 'WINA GRESIK 3', 3, '2023-09-05 01:57:18', '2023-09-06 07:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `cctvs`
--

CREATE TABLE `cctvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `view_area` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cctvs`
--

INSERT INTO `cctvs` (`id`, `location`, `ip`, `merk`, `type`, `view_area`, `condition`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'indoor', '192.168.8.8', 'HIKVISION', 'IPCAM', 'CAMERA 01', 'Baik', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_30_135220_create_products_table', 1),
(6, '2023_08_31_015756_add_role_to_users_table', 2),
(7, '2023_08_31_154249_create_u_units_table', 3),
(8, '2023_08_31_160017_create_u_locations_table', 3),
(9, '2023_08_31_163539_create_u_nvrs_table', 3),
(10, '2023_08_31_163559_create_u_dvrs_table', 3),
(11, '2023_08_31_163704_create_u_services_table', 3),
(12, '2023_08_31_163755_create_u_datas_table', 3),
(13, '2023_08_31_163834_create_u_logs_table', 3),
(14, '2023_08_31_172553_create_a_datas_table', 3),
(15, '2023_08_31_173540_create_a_dvrs_table', 3),
(16, '2023_08_31_175015_create_a_groups_table', 3),
(17, '2023_08_31_175055_create_a_units_table', 3),
(18, '2023_08_31_175124_create_a_locations_table', 3),
(19, '2023_08_31_175149_create_a_nvrs_table', 3),
(20, '2023_08_31_175212_create_a_services_table', 3),
(21, '2023_08_31_175234_create_a_logs_table', 3),
(22, '2023_09_04_131501_add_created_by_to_products_table', 4),
(23, '2023_09_05_065948_create_table_a_groups', 5),
(24, '2023_09_05_070300_create_a_groups', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `created_by`) VALUES
(1, 'Office', NULL),
(2, 'Refinery', NULL),
(3, 'Bulking Terminal', NULL),
(4, 'POM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$K2RTVMdCf/ycsIb/Ha2OZOlzIrwcOhRMiD1Jz70XTDL8esA48Qtry', NULL, '2023-08-30 07:19:55', '2023-08-30 07:19:55', 'admin'),
(3, 'Saya Siapa', 'user@gmail.com', NULL, '$2y$10$Dmmq2kDsfrkKvnMKuynDeuatGazOZO.Q/.0hm1xGpulkUEICN.uYK', NULL, '2023-08-30 19:10:48', '2023-08-30 19:10:48', 'user'),
(4, 'ya', 'ya@gmail.com', NULL, '$2y$10$Ai6vcKsaEY7s5TVLqX4Zs.M2WtUYfuY04KeQFGChh7MHbHrrq.tUu', NULL, '2023-09-05 19:09:35', '2023-09-05 19:34:18', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_datas`
--
ALTER TABLE `a_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_dvrs`
--
ALTER TABLE `a_dvrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_faces`
--
ALTER TABLE `a_faces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_groups`
--
ALTER TABLE `a_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grooup` (`group`);

--
-- Indexes for table `a_locations`
--
ALTER TABLE `a_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_logs`
--
ALTER TABLE `a_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_nvrs`
--
ALTER TABLE `a_nvrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_services`
--
ALTER TABLE `a_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_units`
--
ALTER TABLE `a_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cctvs`
--
ALTER TABLE `cctvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_created_by_foreign` (`created_by`);

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
-- AUTO_INCREMENT for table `a_datas`
--
ALTER TABLE `a_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a_dvrs`
--
ALTER TABLE `a_dvrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `a_faces`
--
ALTER TABLE `a_faces`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `a_groups`
--
ALTER TABLE `a_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `a_locations`
--
ALTER TABLE `a_locations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `a_logs`
--
ALTER TABLE `a_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a_nvrs`
--
ALTER TABLE `a_nvrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `a_services`
--
ALTER TABLE `a_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `a_units`
--
ALTER TABLE `a_units`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cctvs`
--
ALTER TABLE `cctvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `a_locations`
--
ALTER TABLE `a_locations`
  ADD CONSTRAINT `a_locations_ibfk_1` FOREIGN KEY (`unit`) REFERENCES `a_units` (`unit`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
