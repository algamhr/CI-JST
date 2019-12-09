-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 03:12 PM
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
-- Table structure for table `t_weather`
--

CREATE TABLE `t_weather` (
  `id` int(11) UNSIGNED NOT NULL,
  `dteday` date NOT NULL,
  `temp` decimal(50,6) NOT NULL,
  `hum` decimal(50,6) NOT NULL,
  `windspeed` decimal(50,6) NOT NULL,
  `weathersit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_weather`
--

INSERT INTO `t_weather` (`id`, `dteday`, `temp`, `hum`, `windspeed`, `weathersit`, `created_at`, `updated_at`) VALUES
(1, '2011-01-01', '0.344167', '0.805833', '0.160446', 2, NULL, NULL),
(2, '2011-01-02', '0.363478', '0.696087', '0.248539', 2, NULL, NULL),
(3, '2011-01-03', '0.196364', '0.437273', '0.248309', 1, NULL, NULL),
(4, '2011-01-04', '0.200000', '0.590435', '0.160296', 1, NULL, NULL),
(5, '2011-01-05', '0.226957', '0.436957', '0.186900', 1, NULL, NULL),
(6, '2011-01-06', '0.204348', '0.518261', '0.089565', 1, NULL, NULL),
(7, '2011-01-07', '0.196522', '0.436957', '0.168726', 2, NULL, NULL),
(8, '2011-01-08', '0.165000', '0.535833', '0.266804', 2, NULL, NULL),
(9, '2011-01-09', '0.138333', '0.434167', '0.361950', 1, NULL, NULL),
(10, '2011-01-10', '0.150833', '0.482917', '0.223267', 1, NULL, NULL),
(11, '2011-01-11', '0.169091', '0.686364', '0.122132', 2, NULL, NULL),
(12, '2011-01-12', '0.172727', '0.599545', '0.304627', 1, NULL, NULL),
(13, '2011-01-13', '0.165000', '0.470417', '0.301000', 1, NULL, NULL),
(14, '2011-01-14', '0.160870', '0.537826', '0.126548', 1, NULL, NULL),
(15, '2011-01-15', '0.233333', '0.498750', '0.157963', 2, NULL, NULL),
(16, '2011-01-16', '0.231667', '0.483750', '0.188433', 1, NULL, NULL),
(17, '2011-01-17', '0.175833', '0.537500', '0.194017', 2, NULL, NULL),
(18, '2011-01-18', '0.216667', '0.861667', '0.146775', 2, NULL, NULL),
(19, '2011-01-19', '0.292174', '0.741739', '0.208317', 2, NULL, NULL),
(20, '2011-01-20', '0.261667', '0.538333', '0.195904', 2, NULL, NULL),
(21, '2011-01-21', '0.177500', '0.457083', '0.353242', 1, NULL, NULL),
(22, '2011-01-22', '0.059130', '0.400000', '0.171970', 1, NULL, NULL),
(23, '2011-01-23', '0.096522', '0.436522', '0.246600', 1, NULL, NULL),
(24, '2011-01-24', '0.097391', '0.491739', '0.158330', 1, NULL, NULL),
(25, '2011-01-25', '0.223478', '0.616957', '0.129796', 2, NULL, NULL),
(26, '2011-01-26', '0.217500', '0.862500', '0.239850', 3, NULL, NULL),
(27, '2011-01-27', '0.195000', '0.675000', '0.113837', 1, NULL, NULL),
(28, '2011-01-28', '0.203478', '0.793043', '0.123300', 2, NULL, NULL),
(29, '2011-01-29', '0.196522', '0.651739', '0.145365', 1, NULL, NULL),
(34, '2011-01-30', '0.216522', '0.722174', '0.073983', 1, '2019-12-04 23:53:33', '2019-12-04 23:53:33');

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
-- AUTO_INCREMENT for table `t_weather`
--
ALTER TABLE `t_weather`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
