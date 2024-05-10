-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 09:21 AM
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
-- Database: `smartcard-demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nationality_id` int(11) NOT NULL,
  `nationality_name` varchar(255) NOT NULL,
  `status_at_id` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`nationality_id`, `nationality_name`, `status_at_id`, `created_at`, `updated_at`) VALUES
(1, 'ไทย', 1, '2023-08-31 17:38:38', '2023-09-14 15:13:18'),
(2, 'กัมพูชา', 1, '2023-08-31 17:38:38', '2023-09-15 08:19:18'),
(3, 'ไม่ระบุ', 2, '2023-09-14 14:48:38', '2023-09-25 15:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `hn` varchar(7) NOT NULL,
  `id_card` varchar(13) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `prefix_id` varchar(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `sex_id` varchar(10) NOT NULL,
  `nationality_id` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status_at_id` varchar(10) NOT NULL DEFAULT '1' COMMENT '1 = ใช้งาน ,\r\n2 = ยกเลิก',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prefix`
--

CREATE TABLE `prefix` (
  `prefix_id` int(11) NOT NULL,
  `prefix_name` varchar(255) NOT NULL,
  `status_at_id` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `prefix`
--

INSERT INTO `prefix` (`prefix_id`, `prefix_name`, `status_at_id`, `created_at`, `updated_at`) VALUES
(1, 'นาย', 1, '2023-08-31 17:37:16', '2023-09-15 14:51:32'),
(2, 'นาง', 1, '2023-08-31 17:37:16', '2023-09-15 14:51:29'),
(3, 'นางสาว', 1, '2023-08-31 17:37:22', '2023-09-15 14:51:26'),
(4, 'Mr.', 1, '2023-09-15 14:46:29', '2023-09-15 14:51:22'),
(5, 'Mrs.', 1, '2023-09-15 14:47:40', '2023-09-15 14:51:16'),
(6, 'Miss', 1, '2023-09-15 14:47:56', '2023-09-21 17:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `sex_id` int(11) NOT NULL,
  `sex_name` varchar(255) NOT NULL,
  `status_at_id` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`sex_id`, `sex_name`, `status_at_id`, `created_at`, `updated_at`) VALUES
(1, 'ชาย', 1, '2023-08-31 17:42:57', '2023-09-15 13:45:04'),
(2, 'หญิง', 1, '2023-08-31 17:42:57', '2023-09-15 13:45:01'),
(3, 'ไม่ระบุเพศ', 1, '2023-09-15 13:45:44', '2023-09-20 17:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `status_at`
--

CREATE TABLE `status_at` (
  `status_at_id` int(11) NOT NULL,
  `status_at_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `status_at`
--

INSERT INTO `status_at` (`status_at_id`, `status_at_name`, `created_at`, `updated_at`) VALUES
(1, 'ใช้งาน', '2023-09-12 14:23:28', '2023-09-12 14:23:28'),
(2, 'ยกเลิก', '2023-09-12 14:23:28', '2023-09-12 14:23:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `prefix`
--
ALTER TABLE `prefix`
  ADD PRIMARY KEY (`prefix_id`);

--
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`sex_id`);

--
-- Indexes for table `status_at`
--
ALTER TABLE `status_at`
  ADD PRIMARY KEY (`status_at_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `nationality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prefix`
--
ALTER TABLE `prefix`
  MODIFY `prefix_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `sex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_at`
--
ALTER TABLE `status_at`
  MODIFY `status_at_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
