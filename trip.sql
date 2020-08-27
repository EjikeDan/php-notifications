-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 05:39 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `last_login`) VALUES
('admin', 'admin', '2020-08-27 10:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `name` varchar(512) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `last_login`, `email`) VALUES
('d', 'd', 'Dan', '2020-08-27 08:21:38', NULL),
('Maureen', 'm', 'Maureen', '2020-08-27 10:43:14', 'mau@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_trip`
--

CREATE TABLE `user_trip` (
  `user` varchar(512) NOT NULL,
  `trip` varchar(512) NOT NULL,
  `approval` int(255) NOT NULL DEFAULT 0,
  `id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_trip`
--

INSERT INTO `user_trip` (`user`, `trip`, `approval`, `id`) VALUES
('Debby', '1', 0, 1),
('John', '2', 1, 2),
('Eunice', '3', 1, 3),
('Goodness', '4', -1, 4),
('Michael', '3', 1, 5),
('Daniel', '2', 0, 6),
('Frank', '4', 0, 7),
('Debby', '4', -1, 8),
('John', '4', -1, 9),
('Frank', '3', -1, 10),
('Eunice', '2', -1, 11),
('Daniel', '1', 1, 12),
('Goodness', '1', 1, 13),
('Daniel', '3', 1, 14),
('Maureen', '2', 0, 15),
('Maureen', '5', 0, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_trip`
--
ALTER TABLE `user_trip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_trip`
--
ALTER TABLE `user_trip`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
