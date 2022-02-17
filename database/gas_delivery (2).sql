-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 11:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gas_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `customer_id`, `message`) VALUES
(1, 1, 'hi dear admin'),
(2, 1, 'thank you king samile'),
(3, 3, 'good morning admin'),
(4, 1, 'zx');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `phone_no` bigint(15) NOT NULL,
  `location_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `surname`, `gender`, `phone_no`, `location_id`, `position_id`, `password`) VALUES
(1, 'kingdom', 'samile', 'male', 620350083, 1, 3, '1234'),
(2, 'godfrey', 'julius', 'male', 723838278, 1, 3, '1234'),
(3, 'magreth', 'alice', 'female', 74216466, 1, 3, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `gas`
--

CREATE TABLE `gas` (
  `gas_id` int(11) NOT NULL,
  `gas_name` varchar(50) NOT NULL,
  `kg` int(15) NOT NULL,
  `price` int(20) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas`
--

INSERT INTO `gas` (`gas_id`, `gas_name`, `kg`, `price`, `staff_id`) VALUES
(8, 'orxy', 120, 120000, 1),
(20, 'mihan', 45, 45000, 1),
(24, 'manjis', 120, 12000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `ward_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `street_name`, `ward_name`) VALUES
(1, 'mlali', 'mlali'),
(2, 'changarawe', 'mzumbe');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(1, 'staff'),
(2, 'admin'),
(3, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `gas_name` varchar(50) NOT NULL,
  `kg` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `timee` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `street_name`, `gas_name`, `kg`, `customer_id`, `timee`, `status`) VALUES
(1, 'mlali', 'orxy', 120, 1, '2022-01-14 13:35:01', 'derivered'),
(2, 'mlali', 'manjis', 120, 2, '2022-01-14 14:08:09', 'derivered'),
(3, 'mlali', 'mihan', 120, 3, '2022-01-14 15:47:16', 'derivered'),
(4, 'mlali', 'mihan', 120, 1, '2022-01-15 17:46:38', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff_mamber`
--

CREATE TABLE `staff_mamber` (
  `staff_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(15) NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `password` varchar(50) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_mamber`
--

INSERT INTO `staff_mamber` (`staff_id`, `firstname`, `surname`, `email`, `phone_no`, `sex`, `password`, `position_id`) VALUES
(1, 'yohana', 'samile', 'kingsamile@gmail.com', 745668527, 'male', '1234', 1),
(2, 'julius', 'godfrey', 'godfreyjkabele88@gmail.com', 745668527, 'male', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `staff_id` (`location_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `gas`
--
ALTER TABLE `gas`
  ADD PRIMARY KEY (`gas_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `staff_mamber`
--
ALTER TABLE `staff_mamber`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `position_id` (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gas`
--
ALTER TABLE `gas`
  MODIFY `gas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_mamber`
--
ALTER TABLE `staff_mamber`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`);

--
-- Constraints for table `gas`
--
ALTER TABLE `gas`
  ADD CONSTRAINT `gas_ibfk_1` FOREIGN KEY (`gas_id`) REFERENCES `payment` (`gas_id`),
  ADD CONSTRAINT `gas_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `staff_mamber` (`staff_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `staff_mamber`
--
ALTER TABLE `staff_mamber`
  ADD CONSTRAINT `staff_mamber_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
