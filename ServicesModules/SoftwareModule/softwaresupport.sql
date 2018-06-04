-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 12:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwaresupport`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `contactno` int(15) NOT NULL,
  `department` varchar(50) NOT NULL,
  `request` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `comments2` varchar(200) NOT NULL,
  `ictcstatus` varchar(20) NOT NULL,
  `ssstatus` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `date`, `name`, `contactno`, `department`, `request`, `remarks`, `status`, `comments`, `comments2`, `ictcstatus`, `ssstatus`, `user`) VALUES
(18, '2018-05-04', 'Austria, Amabelle Joy', 2147483647, 'CITE', 'Office installation in all offices', 'ASAP', 'Disapproved', '', '', 'Pending', 'Pending', 'ajaustria'),
(23, '2018-05-21', 'De Mesa, Kim Zyra', 2147483647, 'ICTC', 'Office installation in all offices', 'ASAP', 'Completed', '', '', 'Completed', 'Completed', 'kzdemesa'),
(24, '2018-05-21', 'Manalo, Angelyn Joy', 2147483647, 'ICTC', 'Office installation in all offices', 'ASAP', 'Completed', '', '', 'Completed', 'Completed', 'ajmanalo'),
(26, '2018-05-21', 'Villegas, Kate Ann', 2147483647, 'ICTC', 'VMware installation in all computer laboratories', 'Please complete the request before June 2', 'Completed', '', '', 'Completed', 'Completed', 'kavillegas'),
(27, '2018-05-21', 'Huelgas, Angela Nicole', 2147483647, 'ICTC', 'Adobe reader installation in all offices', 'ASAP', 'Completed', '', '', 'Completed', 'Completed', 'anhuelgas'),
(29, '2018-05-22', 'Egar, Robert Francis', 12345678, 'CEAS', 'Sample', 'Sample', 'Completed', '', '', 'Completed', 'Completed', 'rfegar'),
(30, '2018-05-22', 'Marinay, Roselyn Kaye', 123456, 'CITE', 'Sample', 'Sample', 'Disapproved', '', '', 'Pending', 'Pending', 'rkmarinay'),
(37, '2018-05-24', 'Padua, Jonathan Erik', 987654321, 'CBEAM', 'laskdksdfsdfkjdf', 'sasdiasdj', 'Disapproved', '', '', 'Disapproved', 'Disapproved', 'jepadua'),
(38, '2018-05-24', 'Huelgas, Angela Nicole', 2147483647, 'CBEAM', 'Install VMware in PC#32 in GZ201', 'Please complete the request as soon as possible.', 'Completed', '', '', 'Completed', 'Completed', 'anhuelgas'),
(39, '2018-05-24', 'Llanes, Jessie James', 2147483647, 'CITE', 'I want a FREE!!!! windows server 2016', 'ASAP!!!!!!!', 'Completed', 'BAYAD KA MUNA', '', 'Completed', 'Completed', 'unknownmind'),
(40, '2018-05-24', 'Marinay, Roselyn Kaye', 2147483647, 'CITE', 'Office installation', '', 'Queued', '', '', 'Queued', 'Pending', 'rkmarinay'),
(41, '2018-05-24', 'Egar, Robert Francis', 2147483647, 'CBEAM', 'Adobe installation', 'ASAP', 'Queued', '', '', 'Pending', 'Pending', 'rfegar'),
(42, '2018-05-24', 'Llanes, Jessie James', 2147483647, 'CITE', 'Adobe installation', 'ASAP', 'Disapproved', '', '', 'Disapproved', 'Disapproved', 'unknownmind');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`) VALUES
('rkmarinay', '1234', 'Marinay, Roselyn Kaye'),
('anhuelgas', '1234', 'Huelgas, Angela Nicole'),
('kzdemesa', '1234', 'De Mesa, Kim Zyra'),
('rfegar', '1234', 'Egar, Robert Francis'),
('ajmanalo', '1234', 'Manalo, Angelyn Joy'),
('ajaustria', '1234', 'Austria, Amabelle Joy'),
('jepadua', '1234', 'Padua, Jonathan Erik'),
('kavillegas', '1234', 'Villegas, Kate Ann'),
('unknownmind', '!@#$', 'Llanes, Jessie James');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
