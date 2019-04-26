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
-- our new table

CREATE TABLE `tbl_car_part_new` (
  `part_id` int(5) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `part_name_ui` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_car_part_sj`
--

INSERT INTO `tbl_car_part_new` (`part_id`, `part_name`, `part_name_ui`) VALUES
(1, 'ABS-Control-Module', 'ABS Control Module'),
(2, 'ABS-System', 'ABS System Anti Lock'),
(3, 'AC-Compressor', 'AC Compressor'),
(4, 'AC-Condenser', 'AC Condenser'),
(5, 'AC-Evaporator', 'AC Evaporator'),
(6, 'Air-Bag-Control-Module', 'Air Bag Control Module'),
(7, 'Air-Flow-Meter', 'Air Flow Meter'),
(8, 'Alternator', 'Alternator'),
(9, 'Axle-Shaft', 'Axle Shaft'),
(10, 'Back-Glass', 'Back Glass'),
(11, 'Blower-Motor', 'Blower Motor'),
(12, 'Brake-Master-Cylinder', 'Brake Master Cylinder'),
(13, 'Front-Bumper', 'Front Bumper'),
(14, 'Rear-Bumper', 'Rear Bumper'),
(15, 'F-Bumper-Renf', 'Bumper Reinforcement Front'),
(16, 'R-Bump-Reinfor', 'Bumper Reinforcement Rear'),
(17, 'Column-Switch', 'Column Switch'),
(18, 'Communication-Control-Module', 'Communication Control Module'),
(19, 'Ecu', 'ECMECU Engine'),
(20, 'Front-Lower-Control-Arm', 'Lower Control Arm Front'),
(21, 'Rear-Lower-Control-Arm', 'Lower Control Arm Rear'),
(22, 'Front-Upper-Control-Arm', 'Upper Control Arm Front'),
(23, 'Cruise-Control-Switch', 'Cruise Switch'),
(24, 'Cylinder-Block', 'Cylinder Block'),
(25, 'Cylinder-Head', 'Cylinder Head'),
(26, 'Dash-Panel', 'Dash Panel'),
(27, 'Fsrnt-Door-Asm', 'Door Assembly Front'),
(28, 'Rear-Door-Asm', 'Door Assembly Rear'),
(29, 'Front-Door-Glass', 'Side Door Glass Front'),
(30, 'Rear-Dr-Glass', 'Side Door Glass Rear'),
(31, 'Door-Lock-Control-Module', 'Door Lock Control Module'),
(32, 'Rear-VentGlass', 'Side Door Vent Glass Rear'),
(33, 'Front-Window-Regulator', 'Front Window Regulator'),
(34, 'Ecm', 'Engine Control Module'),
(35, 'Engine', 'Engine'),
(36, 'Engine-Computer', 'Engine Computer'),
(37, 'Engine-Computer-Module', 'Computer Engine Module-ECM'),
(38, 'Exhaust-Manifold', 'Exhaust Manifold'),
(39, 'Flywheel', 'Flywheel'),
(40, 'Fog-Light-Lever', 'Fog Light Stalk'),
(41, 'Front-Clip', 'Front Clip'),
(42, 'Front-End-Assembly', 'Front End Assembly'),
(43, 'Front-Wiper-Motor', 'Front Wiper Motor'),
(44, 'Fuel-Pump-Control-Module', 'Fuel Pump Control Module'),
(45, 'Headlight-Switch', 'Head Light Switch'),
(46, 'Ignition-Switch', 'Ignition Switch'),
(47, 'Intake-Manifold', 'Intake Manifold'),
(48, 'Interior-Light-Control-Module', 'Interior Light Control Module'),
(49, 'Navigation-Control-Module', 'Navigation Control Module'),
(50, 'Oil-Pan', 'Oil Pan'),
(51, 'Power-Steering-Pump', 'Power Steering Pump'),
(52, 'Power-Supply-Control-Module', 'Power Supply Control Module'),
(53, 'Radiator', 'Radiator'),
(54, 'Roof-Control-Module', 'Roof Control Module'),
(55, 'Seat-Control-Module', 'Seat Control Module'),
(56, 'Security-System-Control-Module', 'Security System Control Module'),
(57, 'Side-View-Mirror', 'Side View Mirror'),
(58, 'Speedometer-Cluster', 'Speedometer Cluster'),
(59, 'Spindle-Knuckle-Front', 'Spindle Knuckle Front'),
(60, 'Starter-Motor', 'Starter Motor'),
(61, 'Steering-Column', 'Steering Column'),
(62, 'Strut', 'Strut'),
(63, 'Suspension-Control-Module', 'Suspension Control Module'),
(64, 'Tail-Light', 'Tail Light'),
(65, 'Temperature-Control-Module', 'Temperature Control Module'),
(66, 'Throttle-Body-Assembly', 'Throttle Body Assembly'),
(67, 'Transmission', 'Transmission'),
(68, 'Transmission-Control-Module', 'Transmission Control Module'),
(69, 'Water-Pump', 'Water Pump'),
(71, 'Carrier-Assembly', 'Carrier Assembly'),
(72, 'Crankshaft', 'Crankshaft'),
(73, 'Distributor', 'Distributor'),
(74, 'Rear-Drive-Shaft', 'Drive Shaft Rear'),
(75, 'AC-Compressor-Clutch', 'AC Compressor Clutch'),
(76, 'Differential-Case', 'Differential Case'),
(77, 'Engine-Oil-Cooler', 'Engine Oil Cooler'),
(78, 'Front-Axle', 'Axle Front'),
(79, 'Rear-Axle', 'Axle Rear'),
(80, 'Differential-Assembly', 'Differential Assembly'),
(81, 'Front-Drive-Shaft', 'Drive Shaft Front'),
(82, 'Fan-Clutch', 'Fan Clutch'),
(83, 'Torsion-Bar', 'Torsion Bar'),
(84, 'DC-Converter', 'DC Converter Invertor');










-- our new table
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
