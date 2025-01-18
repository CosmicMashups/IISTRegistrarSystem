-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 02:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrar`
--
CREATE DATABASE IF NOT EXISTS `registrar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `registrar`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `student1` varchar(3) NOT NULL,
  `student2` int(4) NOT NULL,
  `student3` int(4) NOT NULL,
  `lrn` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `middlename`, `lastname`, `sex`, `bday`, `email`, `contact`, `student1`, `student2`, `student3`, `lrn`, `username`, `password`) VALUES
(1, 'Yuri', 'Morales', 'Brown', 'Male', '0000-00-00', 'ymbrown@yahoo.com.ph', 2147483647, 'YMB', 2016, 799, 2147483647, 'CosmicMine', 'yahquick92yq'),
(3, 'Tristan', 'Manalaysay', 'Taganas', 'Male', '2004-09-15', 'miney2356.m2@gmail.com', 2147483647, 'TMT', 2016, 8976, 2147483647, 'CosmicMine', 'yahquick92yq'),
(4, 'Maria Adela', 'B', 'Borromeo', 'Female', '2019-04-11', 'borromeo@gmail.com', 2147483647, 'ABB', 2016, 799, 2147483647, 'admin1', 'admin1'),
(5, 'Allan', 'A', 'Herrera', 'Male', '2019-04-11', 'herrera@gmail.com', 2147483647, 'AAH', 2016, 799, 2147483647, 'admin2', 'admin2'),
(6, 'Neil', 'F', 'Tinamisan', 'Male', '2019-04-11', 'tinamisan@gmail.com', 2147483647, 'NFT', 2016, 799, 2147483647, 'admin3', 'admin3'),
(7, 'Orlando', 'P', 'Rivera', 'Male', '2019-04-11', 'rivera@gmail.com', 2147483647, 'OPR', 2016, 799, 2147483647, 'admin4', 'admin4');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `student1` varchar(3) NOT NULL,
  `student2` int(4) NOT NULL,
  `student3` int(4) NOT NULL,
  `lrn` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `middlename`, `lastname`, `sex`, `bday`, `email`, `contact`, `student1`, `student2`, `student3`, `lrn`, `username`, `password`, `usertype`) VALUES
(1, 'Yuri', 'Morales', 'Brown', 'Male', '0000-00-00', 'ymbrown@yahoo.com.ph', 2147483647, 'YMB', 2016, 799, 2147483647, 'CosmicMine', 'yahquick92yq', ''),
(2, 'Shanin Ysabelle', 'Penolio', 'Reusi', 'Female', '2004-08-31', 'ymbrown@yahoo.com.ph', 2147483647, 'SPR', 2016, 799, 2147483647, 'ShanBelle', 'shanbelle', ''),
(3, 'Tristan', 'Manalaysay', 'Taganas', 'Male', '2004-09-15', 'miney2356.m2@gmail.com', 2147483647, 'TMT', 2016, 8976, 2147483647, 'CosmicMine', 'yahquick92yq', ''),
(4, 'Maria Adela', 'B', 'Borromeo', 'Female', '2019-04-11', 'borromeo@gmail.com', 2147483647, 'ABB', 2016, 799, 2147483647, 'admin1', 'admin1', ''),
(5, 'Allan', 'A', 'Herrera', 'Male', '2019-04-11', 'herrera@gmail.com', 2147483647, 'AAH', 2016, 799, 2147483647, 'admin2', 'admin2', ''),
(6, 'Neil', 'F', 'Tinamisan', 'Male', '2019-04-11', 'tinamisan@gmail.com', 2147483647, 'NFT', 2016, 799, 2147483647, 'admin3', 'admin3', ''),
(7, 'Orlando', 'P', 'Rivera', 'Male', '2019-04-11', 'rivera@gmail.com', 2147483647, 'OPR', 2016, 799, 2147483647, 'admin4', 'admin4', ''),
(8, 'Diana Lorreanne', 'Mengote', 'Zacarias', 'Female', '2019-04-12', 'miney2356.m2@gmail.com', 2147483647, 'DMZ', 2016, 8776, 2147483647, 'CosmicMine', 'yahquick92yq', 'Client'),
(9, 'Diana Lorreanne', 'Mengote', 'Zacarias', 'Female', '2019-04-12', 'miney2356.m2@gmail.com', 2147483647, 'DMZ', 2016, 8776, 2147483647, 'tskeh', 'tch', 'Client'),
(10, 'Diana Lorreanne', 'Mengote', 'Zacarias', 'Female', '2019-04-12', 'miney2356.m2@gmail.com', 2147483647, 'DMZ', 2016, 8776, 2147483647, 'tskeh', 'tch', 'Client'),
(11, 'Serell', 'Del Monte', 'Tan', 'Female', '2019-04-12', 'ymbrown@yahoo.com.ph', 2147483647, 'SDT', 2017, 9278, 2147483647, 'summer', '6b1628b016dff46e6fa35684be6acc96', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

DROP TABLE IF EXISTS `diploma`;
CREATE TABLE `diploma` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `schoolyear7` varchar(255) NOT NULL,
  `grade7` int(255) NOT NULL,
  `section7` varchar(255) NOT NULL,
  `reason7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

DROP TABLE IF EXISTS `enrollment`;
CREATE TABLE `enrollment` (
  `id` int(255) NOT NULL,
  `username5` varchar(255) NOT NULL,
  `date5` date NOT NULL,
  `grade5` int(255) NOT NULL,
  `section5` varchar(255) NOT NULL,
  `schoolyear5` varchar(255) NOT NULL,
  `pay5` text NOT NULL,
  `reason5` varchar(255) NOT NULL,
  `authorize5` varchar(255) NOT NULL,
  `status5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `username5`, `date5`, `grade5`, `section5`, `schoolyear5`, `pay5`, `reason5`, `authorize5`, `status5`) VALUES
(1, 'CosmicMine', '2019-04-10', 9, 'Einstein', '2018-2019', 'GCASH', 'Transfer', '1.PNG', 'Processing'),
(2, '', '0000-00-00', 0, '', '', '', '', '', 'Invalid'),
(3, 'CosmicMine', '2019-04-11', 9, 'Einstein', '2018-2019', 'GCASH', 'Transfer', '1.PNG', 'Sent!'),
(4, 'CosmicMine', '2019-04-11', 9, 'Einstein', '2018-2019', 'GCASH', 'Transfer', '1.PNG', 'Sent!'),
(5, '', '0000-00-00', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `esc`
--

DROP TABLE IF EXISTS `esc`;
CREATE TABLE `esc` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `schoolyear3` varchar(255) NOT NULL,
  `grade3` int(255) NOT NULL,
  `section3` varchar(255) NOT NULL,
  `reason3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form137`
--

DROP TABLE IF EXISTS `form137`;
CREATE TABLE `form137` (
  `id` int(255) NOT NULL,
  `date1` date NOT NULL,
  `username1` varchar(255) NOT NULL,
  `schoolyear1` varchar(255) NOT NULL,
  `grade1` int(255) NOT NULL,
  `section1` varchar(255) NOT NULL,
  `reason1` varchar(255) NOT NULL,
  `pay1` varchar(255) NOT NULL,
  `authorize1` varchar(255) NOT NULL,
  `status1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form137`
--

INSERT INTO `form137` (`id`, `date1`, `username1`, `schoolyear1`, `grade1`, `section1`, `reason1`, `pay1`, `authorize1`, `status1`) VALUES
(3, '2019-04-09', 'CosmicMine', '2018', 9, 'Einstein', 'Transfer', '', '', 'Processing'),
(4, '2019-04-09', 'CosmicMine', '2018-2019', 9, 'Einstein', 'Transfer', '', '', 'Processing'),
(5, '0000-00-00', '', '', 0, '', '', '', '', 'Processing'),
(6, '0000-00-00', '', '', 0, '', '', '', '', 'Invalid'),
(7, '0000-00-00', '', '', 0, '', '', '', '', 'Invalid'),
(8, '0000-00-00', '', '', 0, '', '', '', '', 'Invalid'),
(9, '0000-00-00', '', '', 0, '', '', '', '', 'Invalid'),
(10, '0000-00-00', '', '', 0, '', '', '', '', 'Invalid'),
(11, '0000-00-00', '', '', 0, '', '', '', '', 'Invalid'),
(12, '0000-00-00', '', '', 0, '', '', '', '', 'Invalid'),
(13, '0000-00-00', '', '', 0, '', '', '', '', 'Invalid'),
(14, '0000-00-00', '', '', 0, '', '', '', '', 'Invalid'),
(15, '2019-05-28', 'CosmicMine', '2018-2019', 9, 'Einstein', 'Varsity', 'PayMaya', 'Growtopia Background.png', 'Sent!');

-- --------------------------------------------------------

--
-- Table structure for table `form138`
--

DROP TABLE IF EXISTS `form138`;
CREATE TABLE `form138` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `schoolyear2` varchar(255) NOT NULL,
  `grade2` int(255) NOT NULL,
  `section2` varchar(255) NOT NULL,
  `reason2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `goodmoral`
--

DROP TABLE IF EXISTS `goodmoral`;
CREATE TABLE `goodmoral` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `schoolyear4` varchar(255) NOT NULL,
  `grade4` int(255) NOT NULL,
  `section4` varchar(255) NOT NULL,
  `reason4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `graduation`
--

DROP TABLE IF EXISTS `graduation`;
CREATE TABLE `graduation` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `schoolyear6` varchar(255) NOT NULL,
  `grade6` int(255) NOT NULL,
  `section6` varchar(255) NOT NULL,
  `reason6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

DROP TABLE IF EXISTS `id`;
CREATE TABLE `id` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `schoolyear8` varchar(255) NOT NULL,
  `grade8` int(255) NOT NULL,
  `section8` varchar(255) NOT NULL,
  `reason8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `student1` varchar(3) NOT NULL,
  `student2` int(4) NOT NULL,
  `student3` int(4) NOT NULL,
  `lrn` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `sex`, `bday`, `email`, `contact`, `student1`, `student2`, `student3`, `lrn`, `username`, `password`, `usertype`) VALUES
(1, 'Yuri', 'Morales', 'Brown', 'Male', '0000-00-00', 'ymbrown@yahoo.com.ph', 2147483647, 'YMB', 2016, 799, 2147483647, 'CosmicMine', 'yahquick92yq', 'Client'),
(2, 'Shanin Ysabelle', 'Penolio', 'Reusi', 'Female', '2004-08-31', 'ymbrown@yahoo.com.ph', 2147483647, 'SPR', 2016, 799, 2147483647, 'ShanBelle', 'shanbelle', 'Client'),
(3, 'Tristan', 'Manalaysay', 'Taganas', 'Male', '2004-09-15', 'miney2356.m2@gmail.com', 2147483647, 'TMT', 2016, 8976, 2147483647, 'CosmicMine', 'yahquick92yq', 'Client'),
(4, 'Maria Adela', 'B', 'Borromeo', 'Female', '2019-04-11', 'borromeo@gmail.com', 2147483647, 'ABB', 2016, 799, 2147483647, 'admin1', 'admin1', 'Admin'),
(5, 'Allan', 'A', 'Herrera', 'Male', '2019-04-11', 'herrera@gmail.com', 2147483647, 'AAH', 2016, 799, 2147483647, 'admin2', 'admin2', 'Admin'),
(6, 'Neil', 'F', 'Tinamisan', 'Male', '2019-04-11', 'tinamisan@gmail.com', 2147483647, 'NFT', 2016, 799, 2147483647, 'admin3', 'admin3', 'Admin'),
(7, 'Orlando', 'P', 'Rivera', 'Male', '2019-04-11', 'rivera@gmail.com', 2147483647, 'OPR', 2016, 799, 2147483647, 'admin4', 'admin4', 'Admin'),
(8, 'Diana Lorreanne', 'Mengote', 'Zacarias', 'Female', '2019-04-12', 'miney2356.m2@gmail.com', 2147483647, 'DMZ', 2016, 8776, 2147483647, 'tskeh', 'tch', 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esc`
--
ALTER TABLE `esc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form137`
--
ALTER TABLE `form137`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form138`
--
ALTER TABLE `form138`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goodmoral`
--
ALTER TABLE `goodmoral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduation`
--
ALTER TABLE `graduation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id`
--
ALTER TABLE `id`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `diploma`
--
ALTER TABLE `diploma`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `esc`
--
ALTER TABLE `esc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form137`
--
ALTER TABLE `form137`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `form138`
--
ALTER TABLE `form138`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goodmoral`
--
ALTER TABLE `goodmoral`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `graduation`
--
ALTER TABLE `graduation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id`
--
ALTER TABLE `id`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table admin
--

--
-- Metadata for table clients
--

--
-- Metadata for table diploma
--

--
-- Metadata for table enrollment
--

--
-- Dumping data for table `pma__column_info`
--

INSERT INTO `pma__column_info` (`db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`, `input_transformation`, `input_transformation_options`) VALUES
('registrar', 'enrollment', 'authorize5', '', 'image_jpeg', 'output/image_jpeg_inline.php', '', 'Input/Image_JPEG_Upload.php', '');

--
-- Metadata for table esc
--

--
-- Metadata for table form137
--

--
-- Dumping data for table `pma__column_info`
--

INSERT INTO `pma__column_info` (`db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`, `input_transformation`, `input_transformation_options`) VALUES
('registrar', 'form137', 'authorize1', '', 'image_jpeg', 'output/text_plain_imagelink.php', '', 'Input/Image_JPEG_Upload.php', '');

--
-- Metadata for table form138
--

--
-- Metadata for table goodmoral
--

--
-- Metadata for table graduation
--

--
-- Metadata for table id
--

--
-- Metadata for table users
--

--
-- Metadata for database registrar
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
