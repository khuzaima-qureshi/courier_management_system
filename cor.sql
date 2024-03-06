-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 01:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cor`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `street`, `city`, `state`, `zip_code`, `country`, `contact`, `date_created`) VALUES
(7, 'sharefaisal', '  Lahore', ' hkhoihi', '132101525', 'pakistan', '05555787785', '2024-01-17 05:43:20'),
(8, 'korangi', 'karachi', 'sindh', '666', 'pakistan', '0561263481', '2024-01-17 06:07:27'),
(9, 'khishocd', '  islamabad', ' hoshcoi', '5885659', 'nhcohj', '26595595668', '2024-01-19 04:58:32'),
(11, 'korangi', 'faisalabad', 'khhoh', '0000000', 'pak', '1111111', '2024-01-26 00:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `con_name` varchar(256) NOT NULL,
  `con_email` varchar(256) NOT NULL,
  `con_phone` varchar(256) NOT NULL,
  `con_sub` varchar(256) NOT NULL,
  `con_message` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(30) NOT NULL,
  `reference_number` varchar(100) NOT NULL,
  `sender_name` text NOT NULL,
  `sender_address` text NOT NULL,
  `sender_contact` text NOT NULL,
  `recipient_name` text NOT NULL,
  `recipient_address` text NOT NULL,
  `recipient_contact` text NOT NULL,
  `type` int(1) NOT NULL COMMENT '1 = Deliver, 2=Pickup',
  `from_branch_id` varchar(30) NOT NULL,
  `to_branch_id` varchar(30) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `reference_number`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `type`, `from_branch_id`, `to_branch_id`, `weight`, `height`, `width`, `length`, `price`, `status`, `date_created`) VALUES
(3, '983186540795', 'John Smith', '  Sample', '+123456', 'Claire Blake', 'Sample', 'Sample', 1, 'karachi', 'Karachi', '20Kg', '  10in', '10in', '10in', 1500, 'Arrived At Destination', '2020-11-26 16:46:03'),
(4, '514912669061', 'Claire Blake', 'Sample', '+123456', 'John Smith', 'Sample Address', '+12345', 2, '4', '1', '23kg', '12in', '12in', '15in', 1900, 'Delivered', '2020-11-27 13:52:14'),
(5, '897856905844', 'abcd', '  Sample', '+123456', 'efgh', 'Sample Address', '+12345', 1, '  islamabad', 'Lahore', '30kg', '  10in', '10in', '10in', 1450, 'Picked-up', '2020-11-27 13:52:14'),
(6, '505604168988', 'xyz', '   kk', '0012455500', 'zyx', 'mm', '00124888412', 0, 'select', 'Karachi', '00', '   00', '40', '00', 40, 'Delivered', '2020-11-27 14:06:42'),
(27, '79012584764', 'khuzaima', 'abc', '0321578256', 'komal', 'xyz', '2128345964', 2, 'karachi ', 'Karachi', '4', '4', '4', '4', 328.2, 'In-Transit', '2024-01-30 06:00:17'),
(28, '31546320961', 'komal', 'abc', '0122451242456', 'khuzaima', 'xyz', '012121515', 1, '  Lahore ', 'Lahore', '20', '102', '250', '20', 27105, '0', '2024-02-06 07:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'komal', 'nadeem', 'komal@gmail.com', '1111', '1'),
(2, 'amna', 'nadeem', 'amna@gmail.com', '1234', '2'),
(4, 'abc', 'kkk', 'abc@gmail.com', '123', '2'),
(10, 'Men', 'jiu', 'amna@gmail.com', '555', '2'),
(19, 'lllll', ' llllllllll', ' llllll@gmail.com', ' 555', '2'),
(20, 'kk', ' kk', ' kk@gmail.com', ' kk', '2'),
(21, 'kk', 'kk', 'kk@gmail.com', 'kkk', '2'),
(22, 'ppp', 'ppp', 'abc@gmail.com', 'ppp', '2'),
(24, 't', 'kk', 'abc@gmail.com', '5555', '2'),
(25, 't', 'kk', 'kk@gmail.com', 'mm', '2'),
(26, 't', 'kk', 'kk@gmail.com', '44', '2');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'Agent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
