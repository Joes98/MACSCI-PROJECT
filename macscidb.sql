-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 07:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `macscidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ngos`
--

CREATE TABLE `ngos` (
  `id` int(6) UNSIGNED NOT NULL,
  `ngoname` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngos`
--

INSERT INTO `ngos` (`id`, `ngoname`, `region`, `address`, `reg_date`) VALUES
(5, 'TSUAD', 'Mbeya', '5311', '2023-05-17 18:31:26'),
(6, 'SILKY', 'Dodoma', '1212', '2023-05-17 18:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(6) UNSIGNED NOT NULL,
  `region` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region`, `reg_date`) VALUES
(56, 'Arusha', '2023-05-17 18:07:06'),
(57, 'Mbeya', '2023-05-17 18:07:13'),
(58, 'Iringa', '2023-05-17 18:07:25'),
(59, 'Dodoma', '2023-05-17 18:07:34'),
(60, 'Mwanza', '2023-05-17 18:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(6) UNSIGNED NOT NULL,
  `stationname` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `stationname`, `region`, `address`, `reg_date`) VALUES
(45, 'Iyunga', 'Mbeya', '141', '2023-05-17 18:08:56'),
(46, 'Mererani', 'Arusha', '240', '2023-05-17 18:09:30'),
(47, 'Ukerewe', 'Mwanza', '121', '2023-05-17 18:09:45'),
(48, 'Ipogolo', 'Iringa', '345', '2023-05-17 18:10:01'),
(49, 'Bunge', 'Dodoma', '678', '2023-05-17 18:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `organization` varchar(30) NOT NULL,
  `bornarea` varchar(30) NOT NULL,
  `nin` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `region`, `dob`, `password`, `organization`, `bornarea`, `nin`, `phone`, `usertype`, `reg_date`) VALUES
(17, 'Joe Moses', 'Joe98', 'Mbeya', '2023-05-15', 'hallow98', 'Iyunga', 'Mbinga', '87654456776544567654', '0876544567', 'POLICE', '2023-05-17 18:26:28'),
(18, 'isack Nyagawa', 'isaka34', 'Mbeya', '2023-05-16', '123@123', 'SILKY', 'mwanza', '234567890987654323456789', '0876544567', 'NGO', '2023-05-17 18:29:44'),
(19, 'Administrator ', 'Fidando', 'Mbeya', '2023-05-14', 'admin43', 'Iyunga', 'moro', '87654456776544567654', '0876544567', 'admin', '2023-05-17 18:35:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngos`
--
ALTER TABLE `ngos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
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
-- AUTO_INCREMENT for table `ngos`
--
ALTER TABLE `ngos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
