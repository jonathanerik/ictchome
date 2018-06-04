-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 03:15 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itapdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqdatabase`
--

CREATE TABLE `faqdatabase` (
  `faqid` int(255) NOT NULL,
  `title` varchar(9999) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqdatabase`
--

INSERT INTO `faqdatabase` (`faqid`, `title`, `description`) VALUES
(20, 'I am unable to send or receive email? ', 'Verify that your computer is able to see the Internet and/or other computers to ensure that your computer is not encountering a connection issue, which would be causing your e-mail issue. Ensure that your Internet e-mail server or your Network e-mail server is not encountering issues by contacting either your Internet Service Provider or your Network administrator.'),
(21, 'I can\'t connect to my network drive anymore?', ' Verify that the network cable is properly connected to the back of the computer. In addition, when checking the connection of the network cable, ensure that the LED\'s on the network are properly illuminated. For example, a network card with a solid green LED or light usually indicates that the card is either connected or receiving a signal. Note: generally, when the green light is flashing, this is an indication of data being sent or received.'),
(25, 'How do I map a network drive?', 'Open Microsoft Explorer. From Explorer, click the Tools drop down menu and click the option Map Network Drive. Specify the network drive or network computer as the folder. If the computers name was hope, to map to that computer, type \\hope If you wished to map to a shared folder on the hope computer such as a mp3 folder, you would type \\hopemp3. If a different username or login is required to connect to this computer or drive it must be specified in this window before clicking the finish.'),
(26, ' How do I determine my computer\'s name?', 'Right-click My Computer. Click Properties. In the Properties window, click the Computer Name tab. Within this tab you\'ll be able to see the full computer name, workgroup and also a description. If you wish to change the name or workgroup, click the Change button.'),
(27, 'How do I delete Internet cookies?.', 'Microsoft Internet Explorer users can go to \'Tools\' (or the little cog icon in the top left), then go to \'Safety\' and choose \'Delete browsing history...\', you can then choose to delete your Internet cookies. In Google Chrome, go to \'More Tools\' and choose \'Clear browsing data...\'. Firefox users can go to \'History\', then choose \'Clear recent history...\'.'),
(28, 'I cannot connect to Campus LAN (Cable) Network', 'A wireless router or access point\'s signal typically extends up to approximately 300 feet.'),
(29, 'How Far Does the Signal Reach?', 'Check the LAN cable if properly connected, and make sure that the LAN cable is not damaged.');

-- --------------------------------------------------------

--
-- Table structure for table `requestdatabase`
--

CREATE TABLE `requestdatabase` (
  `id` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `comment` varchar(255) NOT NULL,
  `requestedby` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `technician` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestdatabase`
--

INSERT INTO `requestdatabase` (`id`, `division`, `contact`, `date`, `comment`, `requestedby`, `username`, `status`, `note`, `technician`) VALUES
(3, 'CITHM', '12343', '2018-05-06 09:39:18.935973', 'CB 201, Experiencing some network traffic inside the room.', 'Requestor2', 'Requestor2', 'Queued', 'ewq', 'Technician1'),
(4, 'CBEAM', '12342', '2018-05-06 09:44:38.476915', 'Cbeam Building 101 Needs some internet support', 'Requestor2', 'Requestor2', 'Approved', 'weewe', 'Technician1'),
(5, 'CITE', '12332', '2018-05-06 09:45:27.535030', 'Please send some assistance ASAP. MB308', 'Requestor2', 'Requestor2', 'Declined', 'Check this out', 'Technician1'),
(7, 'CBEAM', '12355', '2018-05-07 00:00:13.871855', 'Please lend some hand regarding network traffic', 'Requesting_1', 'Requestor1', 'Approved', '', ''),
(8, 'Example', '12333', '2018-05-07 00:34:32.371239', 'Example', 'Example', 'Requestor1', 'Approved', '6', 'Technician1'),
(9, 'CON', '51515', '2018-05-08 06:33:37.246395', 'Con Building send help', 'Requestor1Nurse 1', 'Requestor1', 'Queued', 'Donee', 'Technician1'),
(10, 'CON', '51515', '2018-05-08 06:33:49.508541', 'Con Building send help', 'Requestor1Nurse 1', 'Requestor1', 'Queued', 'e', 'Technician1'),
(11, 'CBEAM', '61515', '2018-05-08 06:34:13.656240', 'CBEAM function Hall send asap', 'Requestor 1 cbeam2', 'Requestor1', 'Cancel', '', 'Technician1'),
(12, 'CBEAM', '61515', '2018-05-08 06:34:16.388247', 'CBEAM function Hall send asap', 'Requestor 1 cbeam2', 'Requestor1', 'Cancel', '', 'Technician2'),
(14, 'Magandang Bebe', '4223', '2018-05-11 07:45:12.041881', 'Yup, Still Available.', 'Mak', 'Requestor1', 'Approved', '', 'Technician2'),
(22, 'CITE', '09212624842', '2018-05-18 02:25:19.338498', 'rstdfygoiuytrertyui', 'Jessie James Llanes', 'Requestor2', 'Declined', '', ''),
(23, 'CITE', '12344', '2018-05-18 12:05:27.920248', 'SAND HALPERINO', 'Helperinoo', 'Requestor2', 'Approved', '22qwe', 'Technician2'),
(26, 'CITE', '271', '2018-05-24 23:56:44.252110', 'Wifi malfunction in IS Department', 'Dante Chavez', 'Requestor1', 'Closed', 'Where exactly is the area of malfunction?', 'Technician1');

-- --------------------------------------------------------

--
-- Table structure for table `userdatabase`
--

CREATE TABLE `userdatabase` (
  `UserID` int(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `Usertype` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdatabase`
--

INSERT INTO `userdatabase` (`UserID`, `fname`, `lname`, `email`, `contact`, `Usertype`, `username`, `password`) VALUES
(2, 'Dominicc ', 'Malonzoo', 'Dominic69@gmail.com', 1435, 'Requestor', 'Requestor2', '123qwe'),
(3, 'BOII ', 'Miralle', 'BOII@Yahoo.com', 41416, 'Requestor', 'Booii', '123qwe'),
(4, 'Jei Jeih', 'Llannes', 'darkMaitimNaHorse@gmail.com', 6666, 'Admin', 'Admin1', '123qwe'),
(5, 'Chinais', 'Numbawan', 'ChinaNumbawan@gmail.com', 1111, 'ICTC', 'ICTC1', '123qwe'),
(6, 'Espressoo', 'Tea', 'teaEspresso@gmail.com', 4141, 'Technician', 'Technician1', '123qwe'),
(7, 'Mayone', 'Green De Peas', 'Gpeas@mgail.com', 1113, 'Technician', 'Technician2', '123qwe'),
(28, 'qwe', 'qwe', 'QWE@gmail.com', 13, 'Requestor', '123', '123'),
(29, '213441', '2', '3213@gmail.com', 5159, 'Requestor', 'Requestor4', '123qwe'),
(30, 'Jomali', 'Umali', 'Jumali@gmail.com', 5199, 'Superior', 'Superior1', '123qwe'),
(31, 'Kurtneyy', 'Binay', 'KurtneyBinay@gmail.com', 9998, 'Requestor', 'Requestor1', '123qwe'),
(32, 'zeus', 'cosico', 'cosico@gmail.com', 2147483647, 'Requestor', 'Requestor5', '123qwe'),
(33, 'aj', 'sad', 'asd@gmail.com', 98723421, 'Requestor', 'Req1', '123qwe'),
(34, 'ew', 'e', 'ee@gmail.com', 0, 'Requestor', 'e', 'e'),
(35, 'we', 'we', 'we@gmail.com', 0, 'Requestor', 'we', 'we'),
(36, 'qwe', 'qwe', 'qwe@gmail.com', 0, 'Requestor', 'qwe', 'qwe'),
(45, 'qwe', 'qwe', 'ewqwe@gmail.com', 123332, 'Requestor', 'eweweq', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqdatabase`
--
ALTER TABLE `faqdatabase`
  ADD PRIMARY KEY (`faqid`);

--
-- Indexes for table `requestdatabase`
--
ALTER TABLE `requestdatabase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdatabase`
--
ALTER TABLE `userdatabase`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqdatabase`
--
ALTER TABLE `faqdatabase`
  MODIFY `faqid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `requestdatabase`
--
ALTER TABLE `requestdatabase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userdatabase`
--
ALTER TABLE `userdatabase`
  MODIFY `UserID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
