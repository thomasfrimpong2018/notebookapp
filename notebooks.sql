-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 06:17 AM
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
-- Database: `notebooks`
--

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
(6, '2018_04_25_145544_create_notebook_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notebook`
--

CREATE TABLE `notebook` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notebook`
--

INSERT INTO `notebook` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'notebook 1.0', '2018-04-30 07:22:38', '2018-04-30 07:57:18'),
(2, 1, 'notebook 1.0.1', '2018-04-30 07:54:31', '2018-04-30 07:57:33'),
(3, 2, 'notebook 1.1.0', '2018-04-30 08:40:28', '2018-04-30 08:40:52'),
(4, 2, 'notebook 1.0.3', '2018-04-30 10:41:25', '2018-04-30 10:41:25'),
(5, 2, 'maths notebook', '2018-04-30 10:41:55', '2018-05-01 10:25:33'),
(6, 2, 'physics notebook', '2018-05-01 10:25:50', '2018-05-01 10:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `notebook_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `body` varchar(225) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `notebook_id`, `title`, `body`, `updated_at`, `created_at`) VALUES
(1, 1, 'english', 'new language', '2018-05-01 07:50:08', '2018-05-01 07:50:08'),
(2, 2, 'Latin', 'an ancient language', '2018-05-01 08:42:11', '2018-05-01 08:02:00'),
(6, 5, 'maths', 'stuff adding and likes', '2018-05-01 10:24:41', '2018-05-01 10:24:22'),
(8, 6, 'aerodynamics', 'new age physics', '2018-05-01 10:26:40', '2018-05-01 10:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yaw asante', 'asante@gmail.com', '$2y$10$RPX6RLg1pi1nxyP43tcnrePyDV3qp.MMAJin3YuEGq06ECVX3HYYi', 'OeTh0TL4tut3nXK02B2C4Zhdvhl0dKKVFaqoUBtfOl3bWSlXDeCOHNFd4FjH', '2018-04-29 14:48:04', '2018-04-29 14:48:04'),
(2, 'kojo nkansah', 'nkansah@gmail.com', '$2y$10$3Lrh8UPISmz5k2DUNyaOK.o/nL/pwA0Jr/gCknB34rompcHUuCYv6', 'n9qddwAgXh4Q2nn2WbR6YwRcVT1r9Ko2O8Ey9liXhChDs7DO01TBvEFRaXVH', '2018-04-30 07:26:04', '2018-04-30 07:26:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notebook`
--
ALTER TABLE `notebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notebook`
--
ALTER TABLE `notebook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
