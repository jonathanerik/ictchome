-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 08:07 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictc_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stud_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(8) NOT NULL,
  `request_date` date NOT NULL,
  `request_message` longtext NOT NULL,
  `requestor_id` varchar(45) NOT NULL,
  `requestor_done` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT 'For Approval',
  `assigned_support` int(11) DEFAULT NULL,
  `comments_ictc` longtext,
  `approved_ictc` tinyint(4) DEFAULT '0',
  `approved_superior` tinyint(4) DEFAULT '0',
  `comments_superior` longtext,
  `status_support` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `stud_no`, `email`, `department`, `request_date`, `request_message`, `requestor_id`, `requestor_done`, `status`, `assigned_support`, `comments_ictc`, `approved_ictc`, `approved_superior`, `comments_superior`, `status_support`) VALUES
(2, 'aaaazzzz', 0, 'aasdasd@asdasd.com', 'CEAS', '2018-05-01', '', '1', NULL, 'For Approval', 0, '', 0, 1, '', 0),
(3, 'asdasd', 123123123, 'asdas@asdas.asdoasmd', 'CBEAM', '2018-05-24', '123123', '1', NULL, 'Approved', 4, '', 1, 1, NULL, 1),
(5, 'asdasd', 0, 'asdasd@asdasd.com', 'CITHM', '2018-05-30', 'asdasd', '1', NULL, 'For Approval', NULL, NULL, 0, 0, NULL, 0),
(6, 'asdasd', 0, 'asdasd@asdasd.com', 'CITHM', '2018-05-30', 'asdasd', '1', NULL, 'For Approval', NULL, NULL, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `fullName` varchar(191) DEFAULT NULL,
  `userType` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullName`, `userType`) VALUES
(1, 'requestor', '$2y$10$OG8QCJs/5tLc5SISVj2sIesMMW1kyN3USjf0.b44eKIU8mGD/AsvK', 'User Requestor', 'Requestor'),
(3, 'ictc', '$2y$10$PJNvk7HBJ4ksnRaN4MBUn.ROYFCBz9Gv9sD7bjMzjdXf5vPbAE3cK', 'ICTC', 'Ictc'),
(4, 'support', '$2y$10$49CYKGwBEmluYkpgVmTUUenutChr.DPBnX20iJBGkLFzKJTpRzVNK', 'Support', 'Support'),
(5, 'support1', '$2y$10$dtjGxKzC9j3.zaENF2b70OmzLyL0tDWk9wuaMnbnoCGnAruNoasJ.', 'Support1', 'Support'),
(8, 'superior', '$2y$10$2YHMhNNvBzqDbbNoqixiNuyx8DDJMdKpxTsqW7OUii/F6/V/2Z9vi', 'Superior', 'Superior'),
(14, 'admin', '$2y$10$o8eRd4rFr8bGD7AiCEB0dO2NQxObv2y/Nhl2Y3Oa4XcyM8ky14hz6', 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
