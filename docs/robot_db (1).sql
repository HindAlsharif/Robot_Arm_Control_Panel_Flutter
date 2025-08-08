-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2025 at 10:15 PM
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
-- Database: `robot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pose`
--

CREATE TABLE `pose` (
  `id` int(11) NOT NULL,
  `servo1` int(11) DEFAULT NULL,
  `servo2` int(11) DEFAULT NULL,
  `servo3` int(11) DEFAULT NULL,
  `servo4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pose`
--

INSERT INTO `pose` (`id`, `servo1`, `servo2`, `servo3`, `servo4`) VALUES
(1, 137, 55, 90, 26),
(2, 90, 115, 90, 59),
(3, 98, 77, 108, 79),
(5, 46, 75, 107, 83);

-- --------------------------------------------------------

--
-- Table structure for table `run`
--

CREATE TABLE `run` (
  `id` int(11) NOT NULL,
  `servo1` int(11) DEFAULT NULL,
  `servo2` int(11) DEFAULT NULL,
  `servo3` int(11) DEFAULT NULL,
  `servo4` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `run`
--

INSERT INTO `run` (`id`, `servo1`, `servo2`, `servo3`, `servo4`, `status`) VALUES
(1, 137, 55, 90, 26, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pose`
--
ALTER TABLE `pose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `run`
--
ALTER TABLE `run`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pose`
--
ALTER TABLE `pose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
