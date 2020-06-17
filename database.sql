-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 03:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbweb4`
--

-- --------------------------------------------------------

--
-- Table structure for table `talbum`
--

CREATE TABLE `talbum` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL,
  `photo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tcategory`
--

CREATE TABLE `tcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tphotos`
--

CREATE TABLE `tphotos` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tpost`
--

CREATE TABLE `tpost` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `slug` varchar(25) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `talbum`
--
ALTER TABLE `talbum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Indexes for table `tcategory`
--
ALTER TABLE `tcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tphotos`
--
ALTER TABLE `tphotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `tpost`
--
ALTER TABLE `tpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `talbum`
--
ALTER TABLE `talbum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tcategory`
--
ALTER TABLE `tcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tphotos`
--
ALTER TABLE `tphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tpost`
--
ALTER TABLE `tpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `talbum`
--
ALTER TABLE `talbum`
  ADD CONSTRAINT `talbum_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `tphotos` (`id`);

--
-- Constraints for table `tphotos`
--
ALTER TABLE `tphotos`
  ADD CONSTRAINT `tphotos_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `tpost` (`id`);

--
-- Constraints for table `tpost`
--
ALTER TABLE `tpost`
  ADD CONSTRAINT `tpost_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tcategory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
