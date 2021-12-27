-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 02:21 PM
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
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'omor', 'omor@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_dop` date NOT NULL,
  `p_available` int(255) NOT NULL,
  `p_total` int(255) NOT NULL,
  `p_original_cost` int(255) NOT NULL,
  `p_selling_cost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`p_id`, `p_name`, `p_dop`, `p_available`, `p_total`, `p_original_cost`, `p_selling_cost`) VALUES
(1, 'mouse', '2021-10-13', 5, 8, 400, 500),
(2, 'mouse', '2021-10-13', 7, 8, 400, 500),
(3, 'keybord', '2021-10-09', 6, 9, 900, 1000),
(4, 'harddisk', '2021-10-12', 6, 6, 4000, 4600),
(9, 'monitor', '2021-10-12', 10, 10, 10000, 11000),
(10, 'laptop', '2021-10-14', 10, 10, 50000, 54000);

-- --------------------------------------------------------

--
-- Table structure for table `assign_work`
--

CREATE TABLE `assign_work` (
  `sno` int(255) NOT NULL,
  `request_id` int(255) NOT NULL,
  `request-info` text NOT NULL,
  `request-desc` text NOT NULL,
  `request-name` varchar(255) NOT NULL,
  `request-add1` varchar(255) NOT NULL,
  `request-add2` varchar(255) NOT NULL,
  `request-city` varchar(255) NOT NULL,
  `request-state` varchar(255) NOT NULL,
  `request-zip` int(10) NOT NULL,
  `request-email` varchar(255) NOT NULL,
  `request-mobile` int(11) NOT NULL,
  `ass_tech` varchar(255) NOT NULL,
  `ass_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_work`
--

INSERT INTO `assign_work` (`sno`, `request_id`, `request-info`, `request-desc`, `request-name`, `request-add1`, `request-add2`, `request-city`, `request-state`, `request-zip`, `request-email`, `request-mobile`, `ass_tech`, `ass_date`) VALUES
(137, 23, 'keybord not working...', 'keybord', 'omor faruk', 'dhaka, bangladesh', 'dhaka', 'dhaka', 'dhaka', 1205, 'omor@gmail.com', 1790581188, 'khan', '2021-10-13'),
(138, 24, 'mouse not working...', 'mouse problem', 'omor faruk', 'dhaka, bangladesh', 'tejturi bazar', 'dhaka', 'dhaka', 1250, 'omor@gmail.com', 1790581188, 'gdfgdfg', '2021-10-13'),
(139, 26, 'test', 'thkdhgfjdsfh', 'gfhdfgh', 'fghfgh', 'fghfdgh', 'gfhhfg', 'gfhfgh', 0, 'mosiur@gmail.com', 0, 'omor', '2021-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `customer_selling`
--

CREATE TABLE `customer_selling` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_add` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_quantity` int(255) NOT NULL,
  `p_price` int(255) NOT NULL,
  `t_price` int(255) NOT NULL,
  `s_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_selling`
--

INSERT INTO `customer_selling` (`cust_id`, `cust_name`, `cust_add`, `p_name`, `p_quantity`, `p_price`, `t_price`, `s_date`) VALUES
(1, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(2, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(3, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(4, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(5, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(6, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(7, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(8, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(9, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(10, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(11, 'omor', 'dhaka', 'mouse', 2, 500, 500, '2021-10-13'),
(12, 'omor', 'dhaka', 'mouse', 1, 500, 500, '2021-10-13'),
(13, 'omor', 'dhaka', 'mouse', 1, 500, 500, '2021-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `submit_requester`
--

CREATE TABLE `submit_requester` (
  `request_id` int(255) NOT NULL,
  `request-info` text NOT NULL,
  `request-desc` text NOT NULL,
  `request-name` varchar(255) NOT NULL,
  `request-add1` varchar(255) NOT NULL,
  `request-add2` varchar(255) NOT NULL,
  `request-city` varchar(255) NOT NULL,
  `request-state` varchar(255) NOT NULL,
  `request-zip` varchar(255) NOT NULL,
  `request-email` varchar(255) NOT NULL,
  `request-mobile` varchar(255) NOT NULL,
  `request-date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit_requester`
--

INSERT INTO `submit_requester` (`request_id`, `request-info`, `request-desc`, `request-name`, `request-add1`, `request-add2`, `request-city`, `request-state`, `request-zip`, `request-email`, `request-mobile`, `request-date`) VALUES
(25, 'mouse problem', 'mouse not working ', 'omor', 'dhaka, bangladesh', 'farmget', 'dhaka', 'dhaka', '1236', 'omor@gamil.com', '01790889998', '2021-12-27'),
(26, 'mouse problem', 'mouse not working ', 'omor', 'dhaka, bangladesh', 'farmget', 'dhaka', 'dhaka', '1236', 'omor@gamil.com', '01790889998', '2021-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `tech_id` int(11) NOT NULL,
  `tech_name` varchar(255) NOT NULL,
  `tech_city` varchar(255) NOT NULL,
  `tech_mobile` bigint(20) NOT NULL,
  `tech_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`tech_id`, `tech_name`, `tech_city`, `tech_mobile`, `tech_email`) VALUES
(1, 'jamal ', 'dhaka', 1766222142, 'jamal@gmail.com'),
(2, 'kamal', 'dhaka', 17966666666, 'kamal@gmail.com'),
(3, 'hasan', 'dhaka', 17966666666, 'hasan@gmail.com'),
(4, 'hasan', 'dhaka', 17966666666, 'hasan@gmail.com'),
(8, 'omor faruk', 'Rangpur', 1790581188, 'omor@gmail.com'),
(9, 'jamil', 'khulna', 1790581188, 'jamil@gmail.com'),
(10, 'misu', 'dhaka', 179622222, 'misu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_ragistration`
--

CREATE TABLE `user_ragistration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ragistration`
--

INSERT INTO `user_ragistration` (`id`, `name`, `email`, `password`, `role`) VALUES
(41, 'Omor Faruk', 'omor@gmail.com', '$2y$10$z/b02md0AODCUeV.Y.KIpeMPJ/MQQ9l3ZIP1Q/FphdLriAg2Y1MtO', 'user'),
(43, 'admin', 'admin@gmail.com', '$2y$10$kRO6tDXDascwnW4nGFjbzOyKqrT1f0KZeQGN36bEzWciyimi1bP1G', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `assign_work`
--
ALTER TABLE `assign_work`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `customer_selling`
--
ALTER TABLE `customer_selling`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `submit_requester`
--
ALTER TABLE `submit_requester`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`tech_id`);

--
-- Indexes for table `user_ragistration`
--
ALTER TABLE `user_ragistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assign_work`
--
ALTER TABLE `assign_work`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `customer_selling`
--
ALTER TABLE `customer_selling`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `submit_requester`
--
ALTER TABLE `submit_requester`
  MODIFY `request_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_ragistration`
--
ALTER TABLE `user_ragistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
