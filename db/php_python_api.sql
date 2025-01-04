-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 06:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_python_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `incubator_heracell`
--

CREATE TABLE `incubator_heracell` (
  `id` int(11) NOT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `co2` float NOT NULL,
  `temp` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incubator_heracell`
--

INSERT INTO `incubator_heracell` (`id`, `device_id`, `co2`, `temp`, `created_at`, `updated_at`) VALUES
(2, 'inc_1', 5, 26, '2025-01-04 16:23:23', '2025-01-04 16:23:23'),
(3, 'inc_1', 5, 26, '2025-01-04 16:40:46', '2025-01-04 16:40:46'),
(4, 'inc_1', 5, 26, '2025-01-04 16:40:51', '2025-01-04 16:40:51'),
(5, 'inc_1', 5, 26, '2025-01-04 17:14:14', '2025-01-04 17:14:14'),
(6, 'inc_1', 5, 26, '2025-01-04 17:15:14', '2025-01-04 17:15:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incubator_heracell`
--
ALTER TABLE `incubator_heracell`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incubator_heracell`
--
ALTER TABLE `incubator_heracell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
