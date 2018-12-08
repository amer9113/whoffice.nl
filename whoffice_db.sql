-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 09:55 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whoffice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_1`
--

CREATE TABLE `card_1` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `work_1` varchar(255) DEFAULT NULL,
  `work_2` varchar(255) DEFAULT NULL,
  `work_3` varchar(255) DEFAULT NULL,
  `sectors` text,
  `one_sector` varchar(255) DEFAULT NULL,
  `have_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `certificate_name` varchar(255) DEFAULT NULL,
  `another_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `another_certificate_name` varchar(255) DEFAULT NULL,
  `have_certificate_cannot_view` tinyint(1) NOT NULL DEFAULT '0',
  `ion_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `ion_certificate_name` varchar(255) DEFAULT NULL,
  `ion_certificate_file` varchar(255) DEFAULT NULL,
  `work_with_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `reason_no_certificate` varchar(255) DEFAULT NULL,
  `experience` tinyint(1) DEFAULT '0',
  `experience_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `experience_certificate_file` varchar(255) DEFAULT NULL,
  `reson_no_experience` varchar(255) DEFAULT NULL,
  `no_experience_certificate` tinyint(1) NOT NULL DEFAULT '0',
  `checked_with_teacher` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allow` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(40) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `firstname` varchar(75) NOT NULL,
  `lastname` varchar(75) NOT NULL,
  `postal_code` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `website` varchar(150) NOT NULL,
  `bio` text NOT NULL,
  `profile_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `active`, `firstname`, `lastname`, `postal_code`, `email`, `website`, `bio`, `profile_image`) VALUES
(2, 'student', '204036a1ef6e7360e536300ea78c6aeb4a9333dd', 1, 'mohmmad', 'rabea', '98191', 'mohm@hotmail.com', 'http://google.com', 'nothing ', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(40) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `firstname` varchar(75) NOT NULL,
  `lastname` varchar(75) NOT NULL,
  `postal_code` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `website` varchar(150) NOT NULL,
  `bio` text NOT NULL,
  `profile_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `password`, `active`, `firstname`, `lastname`, `postal_code`, `email`, `website`, `bio`, `profile_image`) VALUES
(1, 'teacher', '4a82cb6db537ef6c5b53d144854e146de79502e8', 1, 'AbdAlrzzaq', 'Alommar', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_1`
--
ALTER TABLE `card_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_1`
--
ALTER TABLE `card_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
