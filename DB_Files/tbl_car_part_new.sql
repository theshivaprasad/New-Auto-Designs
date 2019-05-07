-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2019 at 04:52 PM
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
-- Table structure for table `tbl_car_part_new`
--

CREATE TABLE `tbl_car_part_new` (
  `part_id` int(11) NOT NULL,
  `part_name_ui` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_car_part_new`
--

INSERT INTO `tbl_car_part_new` (`part_id`, `part_name_ui`) VALUES
(1, 'ABS Control Module'),
(2, 'ABS System Anti Lock'),
(3, 'AC Compressor'),
(4, 'AC Condenser'),
(5, 'AC Evaporator'),
(6, 'Air Bag Control Module'),
(7, 'Air Flow Meter'),
(8, 'Alternator'),
(9, 'Axle Shaft'),
(10, 'Back Glass'),
(11, 'Blower Motor'),
(12, 'Control Module - BCM'),
(13, 'Bran Box Module - ECM or ECU'),
(14, 'Brake Master Cylinder'),
(15, 'Front Bumper'),
(16, 'Rear Bumper'),
(17, 'Bumper Reinforcement Front'),
(18, 'Bumper Reinforcement Rear'),
(19, 'Column Switch'),
(20, 'Communication Control Module'),
(21, 'ECM or ECU Engine'),
(22, 'Lower Control Arm Front'),
(23, 'Lower Control Arm Rear'),
(24, 'Upper Control Arm Front'),
(25, 'Cruise Switch'),
(26, 'Cylinder Block'),
(27, 'Cylinder Head'),
(28, 'Dash Panel'),
(29, 'Door Assembly Front'),
(30, 'Door Assembly Rear'),
(31, 'Side Door Glass Front'),
(32, 'Side Door Glass Rear'),
(33, 'Door Lock Control Module'),
(34, 'Side Door Vent Glass Rear'),
(35, 'Front Window Regulator'),
(36, 'Rear Window Regulator'),
(37, 'Engine Control Module'),
(38, 'Engine'),
(39, 'Engine Computer'),
(40, 'Computer Engine Module - ECM'),
(41, 'Exhaust Manifold'),
(42, 'Flywheel'),
(43, 'Fog Light Stalk'),
(44, 'Front Clip'),
(45, 'Front End Assembly'),
(46, 'Front Wiper Motor'),
(47, 'Fuel Pump Control Module'),
(48, 'Head Light Switch'),
(49, 'Ignition Switch'),
(50, 'Intake Manifold'),
(51, 'Interior Light Control Module'),
(52, 'Navigation Control Module'),
(53, 'Oil Pan'),
(54, 'Power Steering Pump'),
(55, 'Power Supply Control Module'),
(56, 'Radiator'),
(57, 'Roof Control Module'),
(58, 'Seat Control Module'),
(59, 'Security System Control Module'),
(60, 'Side View Mirror'),
(61, 'Speedometer Cluster'),
(62, 'Spindle Knuckle Front'),
(63, 'Starter Motor'),
(64, 'Steering Column'),
(65, 'Strut'),
(66, 'Suspension Control Module'),
(67, 'Tail Light'),
(68, 'Temperature Control Module'),
(69, 'Throttle Body Assembly'),
(70, 'Transmission'),
(71, 'Transmission Control Module'),
(72, 'Water Pump'),
(73, 'CamShaft'),
(74, 'Carrier Assembly'),
(75, 'Crankshaft'),
(76, 'Distributor'),
(77, 'Drive Shaft Rear'),
(78, 'AC Compressor Clutch'),
(79, 'Differential Case'),
(80, 'Engine Oil Cooler'),
(81, 'Axle Front'),
(82, 'Axle Rear'),
(83, 'Differential Assembly'),
(84, 'Drive Shaft Front'),
(85, 'Fan Clutch'),
(86, 'Torsion Bar'),
(87, 'DC Converter Invertor'),
(88, 'Air Injection Pump'),
(89, 'Backup Lamp'),
(90, 'Beam Axle'),
(91, 'Bell Housing'),
(92, 'Carburetor'),
(93, 'Carrier Case'),
(94, 'Clutch Slave Cylinder'),
(95, 'Convertible Top Motor'),
(96, 'Decklid'),
(97, 'Side Door Vent Glass Front'),
(98, 'Door Window Regulator Front'),
(99, 'Door Window Regulator Rear'),
(100, 'Electric Door Motor'),
(101, 'Head Light Assembly'),
(102, 'Loaded Beam Axle'),
(103, 'Rear Clip Assembly'),
(104, 'SAM Control Module'),
(105, 'Tail Gate'),
(106, 'Windshield Wiper Switch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_car_part_new`
--
ALTER TABLE `tbl_car_part_new`
  ADD PRIMARY KEY (`part_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_car_part_new`
--
ALTER TABLE `tbl_car_part_new`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `tbl_customer_entry` ( `id` INT(5) NOT NULL , `ref_id` INT(5) NOT NULL ) ENGINE = InnoDB;
INSERT INTO `tbl_customer_entry` (`id`, `ref_id`) VALUES (1, 10234);
ALTER TABLE `tbl_customer_entry` ADD PRIMARY KEY (`id`);
ALTER TABLE `tbl_customer_entry` MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;