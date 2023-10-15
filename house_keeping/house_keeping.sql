-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 01:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_keeping`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment_items`
--

CREATE TABLE `equipment_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_equipment` varchar(255) NOT NULL,
  `category` enum('B','T') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_items`
--

INSERT INTO `equipment_items` (`id`, `name_equipment`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Coal Feeder 3A', 'B', NULL, NULL),
(2, 'Coal Feeder 3B', 'B', NULL, NULL),
(3, 'Coal Feeder 3C', 'B', NULL, NULL),
(4, 'Coal Feeder 4A', 'B', NULL, NULL),
(5, 'Coal Feeder 4B', 'B', NULL, NULL),
(6, 'Coal Feeder 4C', 'B', NULL, NULL),
(7, 'Pulverizer 3A', 'B', NULL, NULL),
(8, 'Pulverizer 3B', 'B', NULL, NULL),
(9, 'Pulverizer 3C', 'B', NULL, NULL),
(10, 'Pulverizer 4A', 'B', NULL, NULL),
(11, 'Pulverizer 4B', 'B', NULL, NULL),
(12, 'Pulverizer 4C', 'B', NULL, NULL),
(13, 'Seal Air Fan 3A', 'B', NULL, NULL),
(14, 'Seal Air Fan 3B', 'B', NULL, NULL),
(15, 'Seal Air Fan 4A', 'B', NULL, NULL),
(16, 'Seal Air Fan 4B', 'B', NULL, NULL),
(17, 'Primary Air Fan 3A', 'B', NULL, NULL),
(18, 'Primary Air Fan 3B', 'B', NULL, NULL),
(19, 'Primary Air Fan 4A', 'B', NULL, NULL),
(20, 'Primary Air Fan 4B', 'B', NULL, NULL),
(21, 'Forced Draft Fan 3A', 'B', NULL, NULL),
(22, 'Forced Draft Fan 3B', 'B', NULL, NULL),
(23, 'Forced Draft Fan 4A', 'B', NULL, NULL),
(24, 'Forced Draft Fan 4B', 'B', NULL, NULL),
(25, 'Induced Draft Fan 3A', 'B', NULL, NULL),
(26, 'Induced Draft Fan 3B', 'B', NULL, NULL),
(27, 'Induced Draft Fan 4A', 'B', NULL, NULL),
(28, 'Induced Draft Fan 4B', 'B', NULL, NULL),
(29, 'Condensate Extr Pump 3A', 'T', NULL, NULL),
(30, 'Condensate Extr Pump 3B', 'T', NULL, NULL),
(31, 'Compressor Serv A', 'T', NULL, NULL),
(32, 'Compressor Serv B', 'T', NULL, NULL),
(33, 'Compressor Serv C', 'T', NULL, NULL),
(34, 'Condensate Ext Pump 4A', 'T', NULL, NULL),
(35, 'Condensate Ext Pump 4B', 'T', NULL, NULL),
(92, 'Compressor Contr A', 'T', NULL, NULL),
(93, 'Compressor Contr B', 'T', NULL, NULL),
(94, 'Compressor Contr C', 'T', NULL, NULL),
(95, 'Gland Steam Extr 3A', 'T', NULL, NULL),
(96, 'Gland Steam Extr 3B', 'T', NULL, NULL),
(97, 'Gland Steam Extr 4A', 'T', NULL, NULL),
(98, 'Gland Steam Extr 4B', 'T', NULL, NULL),
(99, 'Cooling Water Pump 3A', 'T', NULL, NULL),
(100, 'Cooling Water Pump 3B', 'T', NULL, NULL),
(102, 'Cooling Water Pump 4A', 'T', NULL, NULL),
(103, 'Cooling Water Pump 4B', 'T', NULL, NULL),
(105, 'Cooling Water Pump Com', 'T', NULL, NULL),
(110, 'Close Loop 3A', 'T', NULL, NULL),
(111, 'Close Loop 3B', 'T', NULL, NULL),
(112, 'Close Loop 4A', 'T', NULL, NULL),
(113, 'Close Loop 4B', 'T', NULL, NULL),
(114, 'Cooling Tower Fan 3A', 'T', NULL, NULL),
(115, 'Cooling Tower Fan 3B', 'T', NULL, NULL),
(116, 'Cooling Tower Fan 3C', 'T', NULL, NULL),
(117, 'Cooling Tower Fan 4A', 'T', NULL, NULL),
(118, 'Cooling Tower Fan 4B', 'T', NULL, NULL),
(119, 'Cooling Tower Fan 4C', 'T', NULL, NULL),
(120, 'Cooling Tower Fan Common', 'T', NULL, NULL),
(121, 'Boiler Feed Pump 3A', 'T', NULL, NULL),
(122, 'Boiler Feed Pump 3B', 'T', NULL, NULL),
(123, 'Boiler Feed Pump 4A', 'T', NULL, NULL),
(124, 'Boiler Feed Pump 4B', 'T', NULL, NULL),
(125, 'Turbine Unit 3', 'T', NULL, NULL),
(126, 'Turbine Unit 4', 'T', NULL, NULL),
(127, 'Jacking Oil Pump A', 'T', NULL, NULL),
(128, 'Jacking Oil Pump B', 'T', NULL, NULL),
(129, 'Emergency Diesel Generator', 'T', NULL, NULL);

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
-- Table structure for table `house_keepings`
--

CREATE TABLE `house_keepings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shift` varchar(255) NOT NULL,
  `op_turbine1` varchar(255) NOT NULL,
  `op_turbine2` varchar(255) NOT NULL,
  `op_boiler1` varchar(255) NOT NULL,
  `op_boiler2` varchar(255) NOT NULL,
  `team_leader` varchar(255) NOT NULL,
  `manbagop` varchar(255) NOT NULL,
  `ttd_opt1` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `ttd_opt2` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `ttd_opb1` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `ttd_opb2` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `ttd_tl` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `ttd_manbag` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `graphic` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `bln_laporan` varchar(255) NOT NULL,
  `tgl_pengesahan` date NOT NULL,
  `summary` longtext NOT NULL,
  `conclusion` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_keepings`
--

INSERT INTO `house_keepings` (`id`, `shift`, `op_turbine1`, `op_turbine2`, `op_boiler1`, `op_boiler2`, `team_leader`, `manbagop`, `ttd_opt1`, `ttd_opt2`, `ttd_opb1`, `ttd_opb2`, `ttd_tl`, `ttd_manbag`, `graphic`, `bln_laporan`, `tgl_pengesahan`, `summary`, `conclusion`, `created_at`, `updated_at`) VALUES
(10, 'E', 'Bagus Dewantoro', 'Muhammad Adhari', 'M Yusuf', '=', 'Rahmadhani', 'Iskandar Setiyawan', 'house_keeping/5dyvYMFUU1zNuz4tWqSuko44rTbQJDjtVdk3ZjF1.jpg', 'house_keeping/kJdNVy3JBBAUWuc9DKhaVtkcxwYOgj9vh2ww1L6K.jpg', 'house_keeping/Chjl6GDvMoUOg012KVCNWfxzQCr1e8gFiHGsbsen.jpg', 'img_default/white.jpeg', 'house_keeping/yTaylqNefZSToLaUzThM3c4dCfEuYVJ74wQxopVQ.jpg', 'house_keeping/ye0pFHasIpMTaJf8Cf13vvsDnZj0OEPXJHQPFArD.jpg', 'house_keeping/yropKqVjLrOjf0oMI0WF9gfqc4ulQqbKdCu1nU3L.jpg', 'JULI', '2023-08-01', '<div>Pada semester I tahun 2023 rencana pelaksanaan house keeping sebanyak 18 peratalan setiap bulannya berdasarkan nota dinas nomor 1599/KIT/.02.01/MAN II OP/2022 perihal Jadwal House Keeping / 5S Semester 1 Tahun 2023. Dimana setiap peralatan berbeda – beda frekuensi house keepingnya (Weekly, 2 Week, Monthly). Bulan Juni 2023 Operator Shift G telah melaksanakan house keeping sebanyak 30 peralatan dari 31 peralatan yang terjadwal&nbsp;</div>', '<ul><li>Operator Shift G sudah konsisten untuk melaksanakan house keeping sesuai jadwal&nbsp;</li><li>Pencapaian dalam bulan Juni 2023 sebesar 96.77%&nbsp;</li><li>Diharapkan dengan rutinnya melaksanakan house keeping ini tingkat kepedulian operator terhadap peralatan semakin meningkat dan konsisten&nbsp;</li></ul>', '2023-08-15 00:12:55', '2023-08-15 00:12:55');

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
(5, '2023_08_10_135651_create_house_keepings_table', 1),
(6, '2023_08_10_235741_create_weekly1s_table', 1),
(7, '2023_08_10_235741_create_weekly2s_table', 1),
(8, '2023_08_10_235741_create_weekly3s_table', 1),
(9, '2023_08_10_235741_create_weekly4s_table', 1),
(10, '2023_08_14_225622_create_equipment_items_table', 1);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weekly1s`
--

CREATE TABLE `weekly1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agenda` varchar(255) NOT NULL DEFAULT 'Minggu 2',
  `tgl_turbine` date DEFAULT NULL,
  `tgl_boiler` date DEFAULT NULL,
  `peralatan_turbine` varchar(255) NOT NULL,
  `peralatan_boiler` varchar(255) NOT NULL,
  `posisi_turbine` varchar(255) NOT NULL,
  `posisi_boiler` varchar(255) NOT NULL,
  `foto_1` text NOT NULL DEFAULT '\'-\'',
  `foto_2` text NOT NULL DEFAULT '\'-\'',
  `foto_3` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_4` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_5` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_6` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weekly2s`
--

CREATE TABLE `weekly2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agenda` varchar(255) NOT NULL DEFAULT 'Minggu 1',
  `tgl_turbine` date DEFAULT NULL,
  `tgl_boiler` date DEFAULT NULL,
  `peralatan_turbine` varchar(255) NOT NULL,
  `peralatan_boiler` varchar(255) NOT NULL,
  `posisi_turbine` varchar(255) NOT NULL,
  `posisi_boiler` varchar(255) NOT NULL,
  `foto_1` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_2` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_3` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_4` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_5` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_6` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weekly2s`
--

INSERT INTO `weekly2s` (`id`, `agenda`, `tgl_turbine`, `tgl_boiler`, `peralatan_turbine`, `peralatan_boiler`, `posisi_turbine`, `posisi_boiler`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `created_at`, `updated_at`) VALUES
(1, 'Minggu 2', '2023-08-15', '2023-08-15', 'Cooling Water Pump 3A', 'Primary Air Fan 3A', '1', '1', 'pictures/PKZ0txZOhcLV9laMEYCELyVrGvRzkAtxdLB4AJHH.jpg', 'pictures/tiU8ppByTQ4MNwCAQVdDU2CFLNEfJZAeaHSQm1ZF.jpg', 'pictures/ysHudnsNmAnts3OKGlALfte50ojE6Ec6pUMHYOwj.jpg', 'pictures/rZcfe6PK7Zky0Wa57THJgmaOeYr1WyUIPQwG7ikJ.jpg', 'pictures/Sb1d5aqYBDGpvjKffOXoRoRa6q4EQkS55cKeaNZq.jpg', 'pictures/CaftP9yXZGiB7xDPuWEHd3IkfwW7XpHqztUKMkGp.jpg', '2023-08-14 22:26:31', '2023-08-15 00:27:23'),
(2, 'Minggu 2', NULL, NULL, '-', '-', '-', '-', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', '2023-08-21 02:30:06', '2023-08-21 02:30:06'),
(3, 'Minggu 2', '2023-08-21', '2023-08-21', '-', '-', '-', '-', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', '2023-08-21 02:30:36', '2023-08-21 02:30:36'),
(4, 'Minggu 2', NULL, NULL, '-', '-', '-', '-', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', '2023-08-21 02:31:45', '2023-08-21 02:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `weekly3s`
--

CREATE TABLE `weekly3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agenda` varchar(255) NOT NULL DEFAULT 'Minggu 3',
  `tgl_turbine` date DEFAULT NULL,
  `tgl_boiler` date DEFAULT NULL,
  `peralatan_turbine` varchar(255) NOT NULL,
  `peralatan_boiler` varchar(255) NOT NULL,
  `posisi_turbine` varchar(255) NOT NULL,
  `posisi_boiler` varchar(255) NOT NULL,
  `foto_1` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_2` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_3` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_4` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_5` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_6` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weekly3s`
--

INSERT INTO `weekly3s` (`id`, `agenda`, `tgl_turbine`, `tgl_boiler`, `peralatan_turbine`, `peralatan_boiler`, `posisi_turbine`, `posisi_boiler`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `created_at`, `updated_at`) VALUES
(1, 'Minggu 3', '2023-08-15', '2023-08-15', 'Turbine Unit 3', 'Primary Air Fan 3B', '3', '1', 'pictures/vpUVD63VeFh6V2JAPhPCCc1cfoY6Lub7gXjAshk5.jpg', 'pictures/z9r4sdRVmMm8HpJF79N6aHsaJYFHpIq20j9O1VsX.jpg', 'pictures/j8AMBSgJjLMCYCifiZl0ZjdFNCEYNF7faPGFJk61.jpg', 'pictures/M0d6FHaNP0ko48WQl00grqM4RIBCLASf8g6GsGP9.jpg', 'pictures/2Omv0360MT6Fgls86XXfinp4oDWRgoRrWllPPYLo.jpg', 'pictures/GnFm3RGdagMQDmJZ7kaLtL9j74hEXjIA9sZmzg4Z.jpg', '2023-08-14 22:46:41', '2023-08-15 00:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `weekly4s`
--

CREATE TABLE `weekly4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agenda` varchar(255) NOT NULL DEFAULT 'Minggu 4',
  `tgl_turbine` date DEFAULT NULL,
  `tgl_boiler` date DEFAULT NULL,
  `peralatan_turbine` varchar(255) NOT NULL,
  `peralatan_boiler` varchar(255) NOT NULL,
  `posisi_turbine` varchar(255) NOT NULL,
  `posisi_boiler` varchar(255) NOT NULL,
  `foto_1` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_2` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_3` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_4` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_5` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `foto_6` text NOT NULL DEFAULT 'img_default/white.jpeg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weekly4s`
--

INSERT INTO `weekly4s` (`id`, `agenda`, `tgl_turbine`, `tgl_boiler`, `peralatan_turbine`, `peralatan_boiler`, `posisi_turbine`, `posisi_boiler`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `foto_5`, `foto_6`, `created_at`, `updated_at`) VALUES
(1, 'Minggu 4', '2023-08-15', '2023-08-01', 'Boiler Feed Pump 3A', 'Coal Feeder 4A', '1', '1', 'pictures/gIMKLYSElEs3ttoON0Lh5UrvBnFS8pGhVaOrqvq3.jpg', 'pictures/sOzmmaJBMXFWvKz0QMjhCupAnsH7I32X5JuAbkTl.jpg', 'pictures/Fvq6uqgoO4d0n2Z00i5eC0uL4DZByy2K5oDPMKEg.jpg', 'pictures/GkgULG7k3J65x7MnjFU0uq8FD0Wia6mHDWwpV1pA.jpg', 'pictures/ZFY7tf4LUwckcrhSnkFY9w40f2WMWA2jfw1xlCeR.jpg', 'pictures/kNSKShCrfO0J9Bt3p7trLBXdfxkCFuXDpAhIuApn.jpg', '2023-08-14 21:41:20', '2023-08-15 00:35:03'),
(2, 'Minggu 4', NULL, NULL, '-', '-', '-', '-', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', '2023-08-14 21:41:23', '2023-08-14 21:41:23'),
(3, 'Minggu 4', NULL, NULL, '-', '-', '-', '-', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', '2023-08-14 21:41:26', '2023-08-14 21:41:26'),
(4, 'Minggu 4', NULL, NULL, '-', '-', '-', '-', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', '2023-08-14 21:41:28', '2023-08-14 21:41:28'),
(9, 'Minggu 4', NULL, NULL, '-', 'Coal Feeder 3B', '-', '3', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', 'img_default/white.jpeg', '2023-08-20 22:30:44', '2023-08-20 22:30:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment_items`
--
ALTER TABLE `equipment_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `equipment_items_name_equipment_unique` (`name_equipment`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `house_keepings`
--
ALTER TABLE `house_keepings`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `weekly1s`
--
ALTER TABLE `weekly1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly2s`
--
ALTER TABLE `weekly2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly3s`
--
ALTER TABLE `weekly3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly4s`
--
ALTER TABLE `weekly4s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment_items`
--
ALTER TABLE `equipment_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house_keepings`
--
ALTER TABLE `house_keepings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weekly1s`
--
ALTER TABLE `weekly1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `weekly2s`
--
ALTER TABLE `weekly2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `weekly3s`
--
ALTER TABLE `weekly3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weekly4s`
--
ALTER TABLE `weekly4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
