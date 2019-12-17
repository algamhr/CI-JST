-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 04:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

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
-- Table structure for table `t_normalisasi`
--

CREATE TABLE `t_normalisasi` (
  `id` int(11) NOT NULL,
  `dteday` date NOT NULL,
  `temp` float NOT NULL,
  `hum` float NOT NULL,
  `windspeed` float NOT NULL,
  `weathersit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_normalisasi`
--

INSERT INTO `t_normalisasi` (`id`, `dteday`, `temp`, `hum`, `windspeed`, `weathersit`) VALUES
(1, '2011-01-01', 0.353386, 0.935202, 0.178863, 0.333333),
(2, '2011-01-02', 0.373214, 0.807838, 0.277252, 0.333333),
(3, '2011-01-03', 0.201624, 0.507473, 0.276995, 0),
(4, '2011-01-04', 0, 0.685224, 0.178695, 0),
(5, '2011-01-05', 0.233036, 0.507107, 0.00175127, 0),
(6, '2011-01-06', 0.209822, 0.601463, 1, 0),
(7, '2011-01-07', 0.201786, 0.578757, 0.188111, 0.333333),
(8, '2011-01-08', 0.00016942, 0.621856, 0.297652, 0.333333),
(9, '2011-01-09', 0.142038, 0.503869, 0.0400893, 0),
(10, '2011-01-10', 0.154873, 0.560445, 0.249026, 0),
(11, '2011-01-11', 0.17362, 0.796554, 0.136071, 0.333333),
(12, '2011-01-12', 0.177354, 0.695797, 0.339896, 0),
(13, '2011-01-13', 0.00016942, 0.545938, 0, 0),
(14, '2011-01-14', 0.0165179, 0.624169, 0.141003, 0),
(15, '2011-01-15', 0.239583, 0.057882, 0.17609, 0.333333),
(16, '2011-01-16', 0.237872, 0.0561412, 0.210121, 0),
(17, '2011-01-17', 0.180543, 0.00623791, 0.216358, 0.333333),
(18, '2011-01-18', 0.222471, 1, 0.163594, 0.333333),
(19, '2011-01-19', 0.3, 0.860819, 0.232329, 0.333333),
(20, '2011-01-20', 0.268676, 0.624758, 0.218465, 0.333333),
(21, '2011-01-21', 0.00182254, 0.530464, 0.394193, 0),
(22, '2011-01-22', 0.607143, 0, 0.0188708, 0),
(23, '2011-01-23', 0.991071, 0.506602, 0.00241805, 0),
(24, '2011-01-24', 1, 0.570683, 0.0173474, 0),
(25, '2011-01-25', 0.229464, 0.716004, 0.14463, 0.333333),
(26, '2011-01-26', 0.00223326, 0.0100097, 0.0324834, 0.666667),
(27, '2011-01-27', 0.000200223, 0.00797872, 0.126806, 0),
(28, '2011-01-28', 0.208928, 0.920359, 0.00104093, 0.333333),
(29, '2011-01-29', 0.201786, 0.75637, 0.162019, 0),
(30, '2011-01-30', 0.222322, 0.838113, 0.825961, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_weather`
--

CREATE TABLE `t_weather` (
  `id` int(11) UNSIGNED NOT NULL,
  `dteday` date NOT NULL,
  `temp` float(50,0) NOT NULL,
  `hum` float(50,0) NOT NULL,
  `windspeed` float(50,0) NOT NULL,
  `weathersit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_weather`
--

INSERT INTO `t_weather` (`id`, `dteday`, `temp`, `hum`, `windspeed`, `weathersit`, `created_at`, `updated_at`) VALUES
(68, '2011-01-01', 344167, 805833, 160446, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(69, '2011-01-02', 363478, 696087, 248539, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(70, '2011-01-03', 196364, 437273, 248309, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(71, '2011-01-04', 0, 590435, 160296, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(72, '2011-01-05', 226957, 436957, 1869, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(73, '2011-01-06', 204348, 518261, 895652, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(74, '2011-01-07', 196522, 498696, 168726, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(75, '2011-01-08', 165, 535833, 266804, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(76, '2011-01-09', 138333, 434167, 36195, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(77, '2011-01-10', 150833, 482917, 223267, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(78, '2011-01-11', 169091, 686364, 122132, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(79, '2011-01-12', 172727, 599545, 304627, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(80, '2011-01-13', 165, 470417, 301, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(81, '2011-01-14', 16087, 537826, 126548, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(82, '2011-01-15', 233333, 49875, 157963, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(83, '2011-01-16', 231667, 48375, 188433, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(84, '2011-01-17', 175833, 5375, 194017, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(85, '2011-01-18', 216667, 861667, 146775, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(86, '2011-01-19', 292174, 741739, 208317, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(87, '2011-01-20', 261667, 538333, 195904, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(88, '2011-01-21', 1775, 457083, 353242, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(89, '2011-01-22', 591304, 0, 17197, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(90, '2011-01-23', 965217, 436522, 2466, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(91, '2011-01-24', 973913, 491739, 15833, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(92, '2011-01-25', 223478, 616957, 129796, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(93, '2011-01-26', 2175, 8625, 29385, 3, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(94, '2011-01-27', 195, 6875, 113837, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(95, '2011-01-28', 203478, 793043, 1233, 2, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(96, '2011-01-29', 196522, 651739, 145365, 1, '2019-12-11 08:28:55', '2019-12-11 08:28:55'),
(97, '2011-01-30', 216522, 722174, 739826, 4, '2019-12-11 08:28:55', '2019-12-11 08:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alga Mahargarika', 'alga@kuatic.com', NULL, '$2y$10$/Ag1B6POsj8RD1zaBD122.2BxOFE.Juo2q26ndrbgUYAWUZtaMQ6S', NULL, '2019-12-04 08:02:58', '2019-12-04 08:02:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_normalisasi`
--
ALTER TABLE `t_normalisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_weather`
--
ALTER TABLE `t_weather`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_normalisasi`
--
ALTER TABLE `t_normalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `t_weather`
--
ALTER TABLE `t_weather`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
