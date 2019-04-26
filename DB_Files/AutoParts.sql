-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2019 at 12:03 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AutoParts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_maker`
--

CREATE TABLE `tbl_car_maker` (
  `maker_id` int(5) NOT NULL,
  `maker_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_model`
--

CREATE TABLE `tbl_car_model` (
  `model_id` int(5) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `maker_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_part`
--

CREATE TABLE `tbl_car_part` (
  `part_id` int(5) NOT NULL,
  `part_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_cust_data`
--

CREATE TABLE `tbl_cust_data` (
  `entry_id` int(5) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_email_id` varchar(255) NOT NULL,
  `cust_subject` varchar(255) NOT NULL,
  `cust_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `inv_id` int(5) NOT NULL,
  `part_id` int(5) NOT NULL,
  `model_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_part_options`
--

CREATE TABLE `tbl_part_options` (
  `opt_id` int(5) NOT NULL,
  `opt_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `year_id` int(5) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_car_maker`
--
ALTER TABLE `tbl_car_maker`
  ADD PRIMARY KEY (`maker_id`);

--
-- Indexes for table `tbl_car_model`
--
ALTER TABLE `tbl_car_model`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `maker_id` (`maker_id`);

--
-- Indexes for table `tbl_car_part`
--
ALTER TABLE `tbl_car_part`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `tbl_cust_data`
--
ALTER TABLE `tbl_cust_data`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`inv_id`),
  ADD KEY `part_id` (`part_id`),
  ADD KEY `model_id` (`model_id`);

--
-- Indexes for table `tbl_part_details`
--
ALTER TABLE `tbl_part_details`
  ADD PRIMARY KEY (`inv_id`,`opt_id`,`year_id`),
  ADD KEY `opt_id` (`opt_id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `tbl_part_options`
--
ALTER TABLE `tbl_part_options`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_car_maker`
--
ALTER TABLE `tbl_car_maker`
  MODIFY `maker_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_car_model`
--
ALTER TABLE `tbl_car_model`
  MODIFY `model_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_car_part`
--
ALTER TABLE `tbl_car_part`
  MODIFY `part_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cust_data`
--
ALTER TABLE `tbl_cust_data`
  MODIFY `entry_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `inv_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_part_options`
--
ALTER TABLE `tbl_part_options`
  MODIFY `opt_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
  MODIFY `year_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_car_model`
--
ALTER TABLE `tbl_car_model`
  ADD CONSTRAINT `tbl_car_model_ibfk_1` FOREIGN KEY (`maker_id`) REFERENCES `tbl_car_maker` (`maker_id`);

--
-- Constraints for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD CONSTRAINT `tbl_inventory_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `tbl_car_part` (`part_id`),
  ADD CONSTRAINT `tbl_inventory_ibfk_2` FOREIGN KEY (`model_id`) REFERENCES `tbl_car_model` (`model_id`);

--
-- Constraints for table `tbl_part_details`
--
ALTER TABLE `tbl_part_details`
  ADD CONSTRAINT `tbl_part_details_ibfk_1` FOREIGN KEY (`inv_id`) REFERENCES `tbl_inventory` (`inv_id`),
  ADD CONSTRAINT `tbl_part_details_ibfk_2` FOREIGN KEY (`opt_id`) REFERENCES `tbl_part_options` (`opt_id`),
  ADD CONSTRAINT `tbl_part_details_ibfk_3` FOREIGN KEY (`year_id`) REFERENCES `tbl_year` (`year_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
