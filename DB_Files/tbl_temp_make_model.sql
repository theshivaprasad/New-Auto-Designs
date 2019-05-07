-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2019 at 02:46 PM
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
-- Table structure for table `tbl_temp_make_model`
--

CREATE TABLE `tbl_temp_make_model` (
  `id` int(11) NOT NULL,
  `maker_name` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temp_make_model`
--

INSERT INTO `tbl_temp_make_model` (`id`, `maker_name`, `model_name`) VALUES
(1, 'Acura', 'TSX'),
(2, 'Acura', 'TL'),
(3, 'Acura', 'RDX'),
(4, 'Acura', 'Vigor'),
(5, 'Acura', 'ZDX'),
(6, 'Acura', 'RL'),
(7, 'Acura', 'SLX'),
(8, 'Acura', 'RLX'),
(9, 'Acura', 'NSX'),
(10, 'Acura', 'MDX'),
(11, 'Acura', 'ILX'),
(12, 'Acura', 'EL'),
(13, 'Acura', 'Integra'),
(14, 'Acura', 'Legend'),
(15, 'Acura', 'CSX'),
(16, 'Acura', 'RSX'),
(17, 'Acura', 'CL'),
(18, 'Acura', 'TLX'),
(19, 'Alfa-romeo', '164'),
(20, 'Alfa-romeo', '2000-Spider'),
(21, 'Alfa-romeo', '1750'),
(22, 'Alfa-romeo', 'Milano'),
(23, 'Alfa-romeo', 'GTV6'),
(24, 'Alfa-romeo', 'Spider'),
(25, 'Alfa-romeo', '1600'),
(26, 'Amc', 'Classic'),
(27, 'Amc', 'Eagle'),
(28, 'Amc', 'Hornet'),
(29, 'Amc', 'Rebel'),
(30, 'Amc', 'Pacer'),
(31, 'Amc', 'Marlin'),
(32, 'Amc', 'Concord'),
(33, 'Amc', 'Rambler'),
(34, 'Amc', 'Ambassador'),
(35, 'Amc', 'Spirit'),
(36, 'Amc', 'Amx'),
(37, 'Amc', 'Gremlin'),
(38, 'Amc', 'Javelin'),
(39, 'Amc', 'American'),
(40, 'Audi', '5000'),
(41, 'Audi', 'A6'),
(42, 'Audi', 'RS5'),
(43, 'Audi', 'S3'),
(44, 'Audi', 'S7'),
(45, 'Audi', 'FOX'),
(46, 'Audi', 'S8'),
(47, 'Audi', 'S4'),
(48, 'Audi', 'Q5'),
(49, 'Audi', 'SQ5'),
(50, 'Audi', 'RS6'),
(51, 'Audi', '4000'),
(52, 'Audi', 'Coupe-GT'),
(53, 'Audi', '100'),
(54, 'Audi', 'A3'),
(55, 'Audi', 'S5'),
(56, 'Audi', '200'),
(57, 'Audi', 'A7'),
(58, 'Audi', 'Quattro'),
(59, 'Audi', '80'),
(60, 'Audi', 'S6'),
(61, 'Audi', 'Coupe-Quattro'),
(62, 'Audi', 'S90'),
(63, 'Audi', 'Allroad'),
(64, 'Audi', 'A8'),
(65, 'Audi', 'A4'),
(66, 'Audi', 'Q7'),
(67, 'Audi', 'Coupe'),
(68, 'Audi', 'A5'),
(69, 'Audi', 'RS7'),
(70, 'Audi', 'V8'),
(71, 'Audi', 'RS4'),
(72, 'Audi', 'TT'),
(73, 'Audi', 'R8'),
(74, 'Audi', '90'),
(75, 'Audi', 'Cabriolet'),
(76, 'Audi', 'Q3'),
(77, 'Bmw', '528i'),
(78, 'Bmw', '540i'),
(79, 'Bmw', '750i'),
(80, 'Bmw', '328i'),
(81, 'Bmw', '128i'),
(82, 'Bmw', '323i'),
(83, 'Bmw', 'ACTIVEHYBRID-3'),
(84, 'Bmw', '645i'),
(85, 'Bmw', '535i'),
(86, 'Bmw', 'X5M'),
(87, 'Bmw', 'L6'),
(88, 'Bmw', '524TD'),
(89, 'Bmw', '850i'),
(90, 'Bmw', '528e'),
(91, 'Bmw', 'M3'),
(92, 'Bmw', 'Z4'),
(93, 'Bmw', 'X3'),
(94, 'Bmw', 'Z8'),
(95, 'Bmw', '335i-GT'),
(96, 'Bmw', '3'),
(97, 'Bmw', '2002'),
(98, 'Bmw', 'ALPINA-B7'),
(99, 'Bmw', '325i'),
(100, 'Bmw', 'X5'),
(101, 'Bmw', 'ALPINA-B6'),
(102, 'Bmw', '228i'),
(103, 'Bmw', '735i'),
(104, 'Bmw', '435i'),
(105, 'Bmw', 'Z3'),
(106, 'Bmw', '2800'),
(107, 'Bmw', 'M6'),
(108, 'Bmw', '635C-Si'),
(109, 'Bmw', '330i'),
(110, 'Bmw', '325e'),
(111, 'Bmw', 'X6M'),
(112, 'Bmw', '550i'),
(113, 'Bmw', '533i'),
(114, 'Bmw', 'i3'),
(115, 'Bmw', '760i'),
(116, 'Bmw', 'ACTIVEHYBRID-5'),
(117, 'Bmw', 'ACTIVEHYBRID-7'),
(118, 'Bmw', '550i-GT'),
(119, 'Bmw', '733i'),
(120, 'Bmw', '335i'),
(121, 'Bmw', '135i'),
(122, 'Bmw', '535i-GT'),
(123, 'Bmw', '630C-Si'),
(124, 'Bmw', '545i'),
(125, 'Bmw', '740i'),
(126, 'Bmw', '525i'),
(127, 'Bmw', '633C-Si'),
(128, 'Bmw', '428i'),
(129, 'Bmw', '328i-GT'),
(130, 'Bmw', 'M5'),
(131, 'Bmw', 'M1'),
(132, 'Bmw', '530i'),
(133, 'Bmw', '2500'),
(134, 'Bmw', '840i'),
(135, 'Bmw', '318i'),
(136, 'Bmw', 'X6'),
(137, 'Bmw', 'M235i'),
(138, 'Bmw', 'X1'),
(139, 'Bmw', '650i'),
(140, 'Bmw', '320i'),
(141, 'Bmw', '640i'),
(142, 'Bmw', 'M4'),
(143, 'Bmw', '745i'),
(144, 'Bmw', '1800'),
(145, 'Bmw', 'X4'),
(146, 'British-leyland', 'Austin'),
(147, 'British-leyland', 'Triumph'),
(148, 'British-leyland', 'MG'),
(149, 'Buick', 'Century'),
(150, 'Buick', 'Buick'),
(151, 'Buick', 'ENCORE'),
(152, 'Buick', 'Electra'),
(153, 'Buick', 'Buick-Special'),
(154, 'Buick', 'Park-Avenue'),
(155, 'Buick', 'Roadmaster'),
(156, 'Buick', 'Apollo'),
(157, 'Buick', 'Skyhawk'),
(158, 'Buick', 'Terraza'),
(159, 'Buick', 'Skylark'),
(160, 'Buick', 'Regal'),
(161, 'Buick', 'Riviera'),
(162, 'Buick', 'Lucerne'),
(163, 'Buick', 'Enclave'),
(164, 'Buick', 'Rainier'),
(165, 'Buick', 'Lacrosse'),
(166, 'Buick', 'Somerset'),
(167, 'Buick', 'Lesabre'),
(168, 'Buick', 'Reatta'),
(169, 'Buick', 'Allure'),
(170, 'Cadillac', 'ATS'),
(171, 'Cadillac', 'Catera'),
(172, 'Cadillac', 'SRX'),
(173, 'Cadillac', 'Deville'),
(174, 'Cadillac', 'XTS'),
(175, 'Cadillac', 'Escalade-ESV'),
(176, 'Cadillac', 'DTS'),
(177, 'Cadillac', 'Escalade'),
(178, 'Cadillac', 'Allante'),
(179, 'Cadillac', 'Seville'),
(180, 'Cadillac', 'XLR'),
(181, 'Cadillac', 'ELR'),
(182, 'Cadillac', 'CTS'),
(183, 'Cadillac', 'Fleetwood'),
(184, 'Cadillac', 'Brougham'),
(185, 'Cadillac', 'Eldorado'),
(186, 'Cadillac', 'Escalade-EXT'),
(187, 'Cadillac', 'STS'),
(188, 'Cadillac', 'Cadillac'),
(189, 'Cadillac', 'Cimarron'),
(190, 'Chevy', 'Nova'),
(191, 'Chevy', 'Silverado-1500'),
(192, 'Chevy', 'CHEVY-10-VAN'),
(193, 'Chevy', 'Citation'),
(194, 'Chevy', 'SS-CAPRICE'),
(195, 'Chevy', 'Chevy-3500'),
(196, 'Chevy', 'Chevy-20'),
(197, 'Chevy', 'Lumina-Van'),
(198, 'Chevy', 'Monza'),
(199, 'Chevy', 'Beretta'),
(200, 'Chevy', 'Malibu'),
(201, 'Chevy', 'Silverado-3500'),
(202, 'Chevy', 'Suburban-2500'),
(203, 'Chevy', 'Van'),
(204, 'Chevy', 'Avalanche-1500'),
(205, 'Chevy', 'Chevy-2500'),
(206, 'Chevy', 'VOLT'),
(207, 'Chevy', 'CHEVY-30-VAN'),
(208, 'Chevy', 'Lumina'),
(209, 'Chevy', 'Suburban-20'),
(210, 'Chevy', 'Impala'),
(211, 'Chevy', 'Avalanche-2500'),
(212, 'Chevy', 'VERANO'),
(213, 'Chevy', 'Suburban-10'),
(214, 'Chevy', 'Aveo'),
(215, 'Chevy', 'SONIC'),
(216, 'Chevy', 'SPARK'),
(217, 'Chevy', 'Prizm'),
(218, 'Chevy', 'Tahoe'),
(219, 'Chevy', 'Chevette'),
(220, 'Chevy', 'Phoenix'),
(221, 'Chevy', 'Chevy-30'),
(222, 'Chevy', 'Chevy-10'),
(223, 'Chevy', 'Spectrum'),
(224, 'Chevy', 'Equinox'),
(225, 'Chevy', 'Luv'),
(226, 'Chevy', 'Corsica'),
(227, 'Chevy', 'Chevy-II'),
(228, 'Chevy', 'Traverse'),
(229, 'Chevy', 'Suburban-1000'),
(230, 'Chevy', 'CHEVY-20-VAN'),
(231, 'Chevy', 'Metro'),
(232, 'Chevy', 'Suburban-30'),
(233, 'Chevy', 'Astro'),
(234, 'Chevy', 'Corvair'),
(235, 'Chevy', 'Passenger'),
(236, 'Chevy', 'Suburban-1500'),
(237, 'Chevy', 'Cruze'),
(238, 'Chevy', 'Trailblazer'),
(239, 'Chevy', 'Chevy-1500'),
(240, 'Chevy', 'Storm'),
(241, 'Chevy', 'Forward-Control'),
(242, 'Chevy', 'Caprice'),
(243, 'Chevy', 'Tracker'),
(244, 'Chevy', 'Venture'),
(245, 'Chevy', 'Colorado'),
(246, 'Chevy', 'Celebrity'),
(247, 'Chevy', 'Camaro'),
(248, 'Chevy', 'Chevelle'),
(249, 'Chevy', 'Omega'),
(250, 'Chevy', 'HHR'),
(251, 'Chevy', 'Vega'),
(252, 'Chevy', 'Monte-Carlo'),
(253, 'Chevy', 'Sprint'),
(254, 'Chevy', 'Optra'),
(255, 'Chevy', 'TRAX'),
(256, 'Chevy', 'Uplander'),
(257, 'Chevy', 'Ventura-II'),
(258, 'Chevy', 'Corvette'),
(259, 'Chevy', 'Silverado-2500'),
(260, 'Chevy', 'SSR'),
(261, 'Chevy', 'Trailblazer-EXT'),
(262, 'Chevy', 'Cobalt'),
(263, 'Chevy', 'Cavalier'),
(264, 'Chevy', 'Chevy-3800'),
(265, 'Chevy', 'Chevy-3100'),
(266, 'Chevy', 'Chevy-3600'),
(267, 'Chrysler', 'SPRINTER-3500'),
(268, 'Chrysler', 'PLYMOUTH-350-VAN'),
(269, 'Chrysler', 'Cordoba'),
(270, 'Chrysler', 'E-Class'),
(271, 'Chrysler', 'Dart'),
(272, 'Chrysler', '250-VAN'),
(273, 'Chrysler', 'Conquest'),
(274, 'Chrysler', '300M'),
(275, 'Chrysler', '3500-VAN'),
(276, 'Chrysler', 'NEW-YORKER'),
(277, 'Chrysler', 'Arrow-Pass'),
(278, 'Chrysler', 'PLYMOUTH-200-VAN'),
(279, 'Chrysler', 'Town-Country'),
(280, 'Chrysler', 'RWD'),
(281, 'Chrysler', 'LHS'),
(282, 'Chrysler', '350-VAN'),
(283, 'Chrysler', '300-VAN'),
(284, 'Chrysler', '200'),
(285, 'Chrysler', 'Voyager'),
(286, 'Chrysler', '150-VAN'),
(287, 'Chrysler', 'Aspen'),
(288, 'Chrysler', 'Raider'),
(289, 'Chrysler', 'Arrow-Truck'),
(290, 'Chrysler', 'Sebring'),
(291, 'Chrysler', '100-VAN'),
(292, 'Chrysler', 'PLYMOUTH-150-VAN'),
(293, 'Chrysler', 'Crossfire'),
(294, 'Chrysler', 'PLYMOUTH-250-VAN'),
(295, 'Chrysler', '200-VAN'),
(296, 'Chrysler', 'Lebaron'),
(297, 'Chrysler', 'PROMASTER-1500-VAN'),
(298, 'Chrysler', '2500-VAN'),
(299, 'Chrysler', '300'),
(300, 'Chrysler', 'Horizon'),
(301, 'Chrysler', 'PROMASTER-3500-VAN'),
(302, 'Chrysler', '1500-VAN'),
(303, 'Chrysler', '5th-Avenue'),
(304, 'Chrysler', 'Cirrus'),
(305, 'Chrysler', 'Concorde'),
(306, 'Chrysler', 'PLYMOUTH-300-VAN'),
(307, 'Chrysler', 'Newport'),
(308, 'Chrysler', 'PROMASTER-2500-VAN'),
(309, 'Chrysler', 'PLYMOUTH-100-VAN'),
(310, 'Chrysler', 'Pacifica'),
(311, 'Chrysler', 'PT-Cruiser'),
(312, 'Chrysler', 'Trail-Duster'),
(313, 'Chrysler', 'PROMASTER-CITY'),
(314, 'Chrysler', '400-PICKUP'),
(315, 'Chrysler', 'Desoto'),
(316, 'Cooper', 'COUNTRYMAN'),
(317, 'Cooper', 'Mini'),
(318, 'Cooper', 'CLUBMAN'),
(319, 'Cooper', 'PACEMAN'),
(320, 'Daewoo', 'Leganza'),
(321, 'Daewoo', 'Lanos'),
(322, 'Daewoo', 'Nubira'),
(323, 'Daihatsu', 'Charade'),
(324, 'Daihatsu', 'Rocky'),
(325, 'Dodge', 'D50'),
(326, 'Dodge', 'Caravan'),
(327, 'Dodge', '250'),
(328, 'Dodge', '600'),
(329, 'Dodge', '150'),
(330, 'Dodge', 'Durango'),
(331, 'Dodge', 'Dakota'),
(332, 'Dodge', 'Magnum'),
(333, 'Dodge', 'Sprinter'),
(334, 'Dodge', 'Nitro'),
(335, 'Dodge', 'St-Regis'),
(336, 'Dodge', 'Rampage'),
(337, 'Dodge', 'Imperial'),
(338, 'Dodge', '300'),
(339, 'Dodge', '450'),
(340, 'Dodge', 'Viper'),
(341, 'Dodge', 'Monaco'),
(342, 'Dodge', '1500'),
(343, 'Dodge', 'Caliber'),
(344, 'Dodge', 'Neon'),
(345, 'Dodge', '350'),
(346, 'Dodge', 'Shadow'),
(347, 'Dodge', '100'),
(348, 'Dodge', 'Aries'),
(349, 'Dodge', '400'),
(350, 'Dodge', 'Charger'),
(351, 'Dodge', 'Ram'),
(352, 'Dodge', '2500'),
(353, 'Dodge', 'Passenger'),
(354, 'Dodge', 'Voyager'),
(355, 'Dodge', 'Van'),
(356, 'Dodge', '200'),
(357, 'Dodge', 'Stealth'),
(358, 'Dodge', 'Intrepid'),
(359, 'Dodge', 'Daytona'),
(360, 'Dodge', 'Avenger'),
(361, 'Dodge', 'Colt'),
(362, 'Dodge', 'Omni'),
(363, 'Dodge', 'Laser'),
(364, 'Dodge', 'Challenger'),
(365, 'Dodge', 'Spirit'),
(366, 'Dodge', 'Stratus'),
(367, 'Dodge', 'Dynasty'),
(368, 'Dodge', 'Lancer'),
(369, 'Dodge', 'Mirada'),
(370, 'Dodge', '3500'),
(371, 'Dodge', 'Journey'),
(372, 'Dodge', 'Diplomat'),
(373, 'Eagle', '2000-GTX'),
(374, 'Eagle', 'Premier'),
(375, 'Eagle', 'Vision'),
(376, 'Eagle', 'Talon'),
(377, 'Eagle', 'Summit'),
(378, 'Fiat-lancia', '500'),
(379, 'Fiat-lancia', '131'),
(380, 'Fiat-lancia', 'X-1-9'),
(381, 'Fiat-lancia', '128'),
(382, 'Fiat-lancia', 'Strada'),
(383, 'Fiat-lancia', 'Lancia'),
(384, 'Fiat-lancia', '124'),
(385, 'Fiat-lancia', '850'),
(386, 'Fiat-lancia', '1100R'),
(387, 'Ford', 'Freestar'),
(388, 'Ford', 'Mustang'),
(389, 'Ford', 'Escort'),
(390, 'Ford', 'Probe'),
(391, 'Ford', 'Van'),
(392, 'Ford', 'E250-VAN'),
(393, 'Ford', 'Five-Hundred'),
(394, 'Ford', 'F150-Raptor'),
(395, 'Ford', 'F250'),
(396, 'Ford', 'Fairmont'),
(397, 'Ford', 'Ranger'),
(398, 'Ford', 'Transit-Connect'),
(399, 'Ford', 'Bronco'),
(400, 'Ford', 'TRANSIT-350'),
(401, 'Ford', 'Maverick'),
(402, 'Ford', 'Focus'),
(403, 'Ford', 'Aerostar'),
(404, 'Ford', 'Escape'),
(405, 'Ford', 'Explorer'),
(406, 'Ford', 'Ford-GT'),
(407, 'Ford', 'TRANSIT-150'),
(408, 'Ford', 'Bronco-II'),
(409, 'Ford', 'Crown-Victoria'),
(410, 'Ford', 'Taurus'),
(411, 'Ford', 'Courier'),
(412, 'Ford', 'LTD'),
(413, 'Ford', 'Thunderbird'),
(414, 'Ford', 'Granada'),
(415, 'Ford', 'F100'),
(416, 'Ford', 'Mercury'),
(417, 'Ford', 'Contour'),
(418, 'Ford', 'Windstar'),
(419, 'Ford', 'Edge'),
(420, 'Ford', 'F150'),
(421, 'Ford', 'Passenger'),
(422, 'Ford', 'F450'),
(423, 'Ford', 'F250SD'),
(424, 'Ford', 'F550SD'),
(425, 'Ford', 'Taurus-X'),
(426, 'Ford', 'Torino'),
(427, 'Ford', 'Exp'),
(428, 'Ford', 'LTD-II'),
(429, 'Ford', 'Fusion'),
(430, 'Ford', 'TRANSIT-250'),
(431, 'Ford', 'F350SD'),
(432, 'Ford', 'LN7'),
(433, 'Ford', 'Festiva'),
(434, 'Ford', 'Freestyle'),
(435, 'Ford', 'Forward-Control'),
(436, 'Ford', 'E350-VAN'),
(437, 'Ford', 'F350'),
(438, 'Ford', 'C-MAX'),
(439, 'Ford', 'E200-VAN'),
(440, 'Ford', 'E150-VAN'),
(441, 'Ford', 'Flex'),
(442, 'Ford', 'Pinto'),
(443, 'Ford', 'Aspire'),
(444, 'Ford', 'Falcon'),
(445, 'Ford', 'Tempo'),
(446, 'Ford', 'Expedition'),
(447, 'Ford', 'Fiesta'),
(448, 'Ford', 'Cortina'),
(449, 'Ford', 'E100-VAN'),
(450, 'Ford', 'E550SD-VAN'),
(451, 'Ford', 'Fairlane'),
(452, 'Ford', 'Excursion'),
(453, 'Ford', 'E450SD-VAN'),
(454, 'Ford', 'E300-VAN'),
(455, 'Ford', 'F450SD'),
(456, 'Gm', '3500-VAN'),
(457, 'Gm', '1500-VAN'),
(458, 'Gm', 'SAVANA-2500-VAN'),
(459, 'Gm', 'EXPRESS-2500-VAN'),
(460, 'Gm', 'CAPTIVA-SPORT'),
(461, 'Gm', 'EXPRESS-1500-VAN'),
(462, 'Gm', 'EXPRESS-3500-VAN'),
(463, 'Gm', 'SAVANA-1500-VAN'),
(464, 'Gm', '2500-VAN'),
(465, 'Gm', 'SAVANA-3500-VAN'),
(466, 'Gm', 'ORLANDO'),
(467, 'Gm', '1000-VAN'),
(468, 'Gm', 'CITY-EXPRESS'),
(469, 'Gmc', 'Jimmy'),
(470, 'Gmc', '6000'),
(471, 'Gmc', 'Sierra-1500'),
(472, 'Gmc', 'Sierra-2500'),
(473, 'Gmc', '1000'),
(474, 'Gmc', 'Jimmy-S15'),
(475, 'Gmc', 'Safari'),
(476, 'Gmc', 'Yukon'),
(477, 'Gmc', 'Sierra-3500'),
(478, 'Gmc', '1000-Pickup'),
(479, 'Gmc', 'Envoy'),
(480, 'Gmc', 'Acadian'),
(481, 'Gmc', '1500-Pickup'),
(482, 'Gmc', 'Canyon'),
(483, 'Gmc', 'Syclone'),
(484, 'Gmc', '3500-Pickup'),
(485, 'Gmc', 'Denali'),
(486, 'Gmc', 'Van'),
(487, 'Gmc', 'Typhoon'),
(488, 'Gmc', 'Acadia'),
(489, 'Gmc', 'SIERRA-DENALI-2500'),
(490, 'Gmc', 'XL-2500'),
(491, 'Gmc', 'Envoy-XL'),
(492, 'Gmc', 'Envoy-XUV'),
(493, 'Gmc', 'Sonoma'),
(494, 'Gmc', '2500-Pickup'),
(495, 'Gmc', 'Forward-Control'),
(496, 'Gmc', 'SIERRA-DENALI-3500'),
(497, 'Gmc', 'SIERRA-DENALI-1500'),
(498, 'Gmc', 'Terrain'),
(499, 'Gmc', '2000'),
(500, 'Gmc', 'XL-1500'),
(501, 'Honda', 'Civic'),
(502, 'Honda', 'Prelude'),
(503, 'Honda', 'Del-Sol'),
(504, 'Honda', 'CRX'),
(505, 'Honda', 'Accord'),
(506, 'Honda', 'Pilot'),
(507, 'Honda', 'CRZ'),
(508, 'Honda', '600'),
(509, 'Honda', 'Fit'),
(510, 'Honda', 'Odyssey'),
(511, 'Honda', 'CRV'),
(512, 'Honda', 'S2000'),
(513, 'Honda', 'Crosstour'),
(514, 'Honda', 'Ridgeline'),
(515, 'Honda', 'Passport'),
(516, 'Honda', 'Insight'),
(517, 'Honda', 'Element'),
(518, 'Honda', 'HR-V'),
(519, 'Hummer', 'H3'),
(520, 'Hummer', 'H2'),
(521, 'Hyundai', 'Excel'),
(522, 'Hyundai', 'Pony'),
(523, 'Hyundai', 'Tiburon'),
(524, 'Hyundai', 'Elantra'),
(525, 'Hyundai', 'Entourage'),
(526, 'Hyundai', 'Tucson'),
(527, 'Hyundai', 'EQUUS'),
(528, 'Hyundai', 'Veracruz'),
(529, 'Hyundai', 'XG'),
(530, 'Hyundai', 'Azera'),
(531, 'Hyundai', 'Accent'),
(532, 'Hyundai', 'Genesis'),
(533, 'Hyundai', 'Santa-Fe'),
(534, 'Hyundai', 'VELOSTER'),
(535, 'Hyundai', 'Sonata'),
(536, 'Hyundai', 'Scoupe'),
(537, 'Infiniti', 'QX80'),
(538, 'Infiniti', 'Q60'),
(539, 'Infiniti', 'M30'),
(540, 'Infiniti', 'M56'),
(541, 'Infiniti', 'QX60'),
(542, 'Infiniti', 'Q70'),
(543, 'Infiniti', 'J30'),
(544, 'Infiniti', 'I30'),
(545, 'Infiniti', 'QX4'),
(546, 'Infiniti', 'M45'),
(547, 'Infiniti', 'QX70'),
(548, 'Infiniti', 'G20'),
(549, 'Infiniti', 'M37'),
(550, 'Infiniti', 'EX35'),
(551, 'Infiniti', 'G35'),
(552, 'Infiniti', 'JX35'),
(553, 'Infiniti', 'Q45'),
(554, 'Infiniti', 'QX50'),
(555, 'Infiniti', 'EX37'),
(556, 'Infiniti', 'M35'),
(557, 'Infiniti', 'I35'),
(558, 'Infiniti', 'G37'),
(559, 'Infiniti', 'G25'),
(560, 'Infiniti', 'FX'),
(561, 'Infiniti', 'QX56'),
(562, 'Infiniti', 'Q40'),
(563, 'Infiniti', 'Q50'),
(564, 'International', 'International'),
(565, 'International', 'Scout'),
(566, 'Isuzu', 'Oasis'),
(567, 'Isuzu', 'I290'),
(568, 'Isuzu', 'Pickup'),
(569, 'Isuzu', 'Axiom'),
(570, 'Isuzu', 'Imark'),
(571, 'Isuzu', 'I350'),
(572, 'Isuzu', 'Rodeo'),
(573, 'Isuzu', 'Vehicross'),
(574, 'Isuzu', 'Stylus'),
(575, 'Isuzu', 'Optima'),
(576, 'Isuzu', 'I370'),
(577, 'Isuzu', 'Hombre'),
(578, 'Isuzu', 'Amigo'),
(579, 'Isuzu', 'Impulse'),
(580, 'Isuzu', 'Ascender'),
(581, 'Isuzu', 'Trooper'),
(582, 'Isuzu', 'I280'),
(583, 'Jaguar', 'XKE'),
(584, 'Jaguar', 'XJ12'),
(585, 'Jaguar', 'XK8'),
(586, 'Jaguar', 'F-TYPE'),
(587, 'Jaguar', 'XJ8'),
(588, 'Jaguar', 'XF'),
(589, 'Jaguar', 'X-Type'),
(590, 'Jaguar', 'XJ6'),
(591, 'Jaguar', 'XJ'),
(592, 'Jaguar', 'XK'),
(593, 'Jaguar', 'XJS'),
(594, 'Jaguar', 'S-Type'),
(595, 'Jeep', 'CJ'),
(596, 'Jeep', 'Cherokee'),
(597, 'Jeep', 'Wagoneer'),
(598, 'Jeep', 'Comanche'),
(599, 'Jeep', 'J-Series'),
(600, 'Jeep', 'Jeepster'),
(601, 'Jeep', 'Compass'),
(602, 'Jeep', 'Truck'),
(603, 'Jeep', 'FC'),
(604, 'Jeep', 'Liberty'),
(605, 'Jeep', 'Grand-Wagoneer'),
(606, 'Jeep', 'Grand-Cherokee'),
(607, 'Jeep', 'Wrangler'),
(608, 'Jeep', 'Commander'),
(609, 'Jeep', 'Patriot'),
(610, 'Jeep', 'Station-Wagon'),
(611, 'Jeep', 'DJ'),
(612, 'Jeep', 'RENEGADE'),
(613, 'Kia', 'CADENZA'),
(614, 'Kia', 'Forte'),
(615, 'Kia', 'Optima'),
(616, 'Kia', 'Rio'),
(617, 'Kia', 'Sorento'),
(618, 'Kia', 'Sedona'),
(619, 'Kia', 'Amanti'),
(620, 'Kia', 'Spectra'),
(621, 'Kia', 'Sephia'),
(622, 'Kia', 'Sportage'),
(623, 'Kia', 'Borrego'),
(624, 'Kia', 'Rondo'),
(625, 'Kia', 'Soul'),
(626, 'Kia', 'K900'),
(627, 'Land-rover', 'Freelander'),
(628, 'Land-rover', 'LR2'),
(629, 'Land-rover', 'LR3'),
(630, 'Land-rover', 'Range-Rover'),
(631, 'Land-rover', 'Land-Rover'),
(632, 'Land-rover', 'Range-Rover-Sport'),
(633, 'Land-rover', 'LR4'),
(634, 'Lexus', 'LS400'),
(635, 'Lexus', 'ES350'),
(636, 'Lexus', 'IS300'),
(637, 'Lexus', 'RX400H'),
(638, 'Lexus', 'IS-F'),
(639, 'Lexus', 'LS460'),
(640, 'Lexus', 'RX300'),
(641, 'Lexus', 'GS450H'),
(642, 'Lexus', 'ES300H'),
(643, 'Lexus', 'IS350'),
(644, 'Lexus', 'GS430'),
(645, 'Lexus', 'GS460'),
(646, 'Lexus', 'GX460'),
(647, 'Lexus', 'GX470'),
(648, 'Lexus', 'RX330'),
(649, 'Lexus', 'ES250'),
(650, 'Lexus', 'LX470'),
(651, 'Lexus', 'ES300'),
(652, 'Lexus', 'RC-350'),
(653, 'Lexus', 'GS350'),
(654, 'Lexus', 'RC-F'),
(655, 'Lexus', 'CT200H'),
(656, 'Lexus', 'SC'),
(657, 'Lexus', 'LX450'),
(658, 'Lexus', 'GS300'),
(659, 'Lexus', 'IS250'),
(660, 'Lexus', 'LS600-HL'),
(661, 'Lexus', 'LX570'),
(662, 'Lexus', 'SC430'),
(663, 'Lexus', 'GS400'),
(664, 'Lexus', 'HS250H'),
(665, 'Lexus', 'RX350'),
(666, 'Lexus', 'LS430'),
(667, 'Lexus', 'ES330'),
(668, 'Lexus', 'RX450H'),
(669, 'Lexus', 'NX300H'),
(670, 'Lexus', 'NX200T'),
(671, 'Lincoln', 'Mark-Series'),
(672, 'Lincoln', 'Navigator'),
(673, 'Lincoln', 'MKC'),
(674, 'Lincoln', 'LS'),
(675, 'Lincoln', 'Zephyr'),
(676, 'Lincoln', 'Continental'),
(677, 'Lincoln', 'LT'),
(678, 'Lincoln', 'Town-Car'),
(679, 'Lincoln', 'Aviator'),
(680, 'Lincoln', 'Versailles'),
(681, 'Lincoln', 'Blackwood'),
(682, 'Mazda', 'B3000'),
(683, 'Mazda', 'MX5'),
(684, 'Mazda', '3'),
(685, 'Mazda', 'B2600'),
(686, 'Mazda', 'MPV'),
(687, 'Mazda', '323'),
(688, 'Mazda', 'B2500'),
(689, 'Mazda', 'Millenia'),
(690, 'Mazda', 'RX7'),
(691, 'Mazda', 'CX9'),
(692, 'Mazda', '808'),
(693, 'Mazda', '929'),
(694, 'Mazda', 'RX3'),
(695, 'Mazda', 'MX6'),
(696, 'Mazda', 'B1600'),
(697, 'Mazda', '6'),
(698, 'Mazda', 'RX2'),
(699, 'Mazda', '626'),
(700, 'Mazda', 'B4000'),
(701, 'Mazda', '2'),
(702, 'Mazda', 'B1800'),
(703, 'Mazda', '5'),
(704, 'Mazda', 'Navajo'),
(705, 'Mazda', 'RX8'),
(706, 'Mazda', 'Protege'),
(707, 'Mazda', 'B2300'),
(708, 'Mazda', 'GLC'),
(709, 'Mazda', 'MX3'),
(710, 'Mazda', 'Rotary'),
(711, 'Mazda', 'B2200'),
(712, 'Mazda', 'CX7'),
(713, 'Mazda', '1800'),
(714, 'Mazda', 'B2000'),
(715, 'Mazda', 'RX4'),
(716, 'Mazda', 'CX-5'),
(717, 'Mazda', 'Tribute'),
(718, 'Mazda', '1200'),
(719, 'Mercedes-benz', 'S-Class'),
(720, 'Mercedes-benz', 'GLK-Class'),
(721, 'Mercedes-benz', 'R-Class'),
(722, 'Mercedes-benz', 'CLA-CLASS'),
(723, 'Mercedes-benz', 'GL-Class'),
(724, 'Mercedes-benz', '240D'),
(725, 'Mercedes-benz', '450'),
(726, 'Mercedes-benz', '350'),
(727, 'Mercedes-benz', '420'),
(728, 'Mercedes-benz', 'SLK'),
(729, 'Mercedes-benz', '380'),
(730, 'Mercedes-benz', '300E'),
(731, 'Mercedes-benz', 'G-Class'),
(732, 'Mercedes-benz', '500'),
(733, 'Mercedes-benz', 'C-Class'),
(734, 'Mercedes-benz', 'SLS'),
(735, 'Mercedes-benz', '250'),
(736, 'Mercedes-benz', 'CL-Class'),
(737, 'Mercedes-benz', 'SMART'),
(738, 'Mercedes-benz', 'B-Class'),
(739, 'Mercedes-benz', '280'),
(740, 'Mercedes-benz', '300D'),
(741, 'Mercedes-benz', '260E'),
(742, 'Mercedes-benz', 'CLS-Class'),
(743, 'Mercedes-benz', '230-6'),
(744, 'Mercedes-benz', 'E-Class'),
(745, 'Mercedes-benz', 'ML-Class'),
(746, 'Mercedes-benz', '190'),
(747, 'Mercedes-benz', '200'),
(748, 'Mercedes-benz', '220'),
(749, 'Mercedes-benz', '400'),
(750, 'Mercedes-benz', 'CLK'),
(751, 'Mercedes-benz', 'SLR'),
(752, 'Mercedes-benz', '600'),
(753, 'Mercedes-benz', 'GLA-CLASS'),
(754, 'Mercedes-benz', '560'),
(755, 'Mercedes-benz', '230'),
(756, 'Mercedes-benz', 'SPRINTER-2500'),
(757, 'Mercedes-benz', 'SPRINTER-3500'),
(758, 'Mercury', 'Grand-Marquis'),
(759, 'Mercury', 'MKX'),
(760, 'Mercury', 'Milan'),
(761, 'Mercury', 'Tracer'),
(762, 'Mercury', 'Mariner'),
(763, 'Mercury', 'Monterey'),
(764, 'Mercury', 'MKT'),
(765, 'Mercury', 'Capri'),
(766, 'Mercury', 'Marquis'),
(767, 'Mercury', 'Marauder'),
(768, 'Mercury', 'MKZ'),
(769, 'Mercury', 'MKS'),
(770, 'Mercury', 'Merkur'),
(771, 'Mercury', 'Mystique'),
(772, 'Mercury', 'Mountaineer'),
(773, 'Mercury', 'Sable'),
(774, 'Mercury', 'Lynx'),
(775, 'Mercury', 'Bobcat'),
(776, 'Mercury', 'Villager'),
(777, 'Mercury', 'Monarch'),
(778, 'Mercury', 'Topaz'),
(779, 'Mercury', 'Cougar'),
(780, 'Mercury', 'Comet'),
(781, 'Mercury', 'Montego'),
(782, 'Mitsubishi', 'Precis'),
(783, 'Mitsubishi', 'Expo'),
(784, 'Mitsubishi', 'Outlander'),
(785, 'Mitsubishi', 'Raider'),
(786, 'Mitsubishi', 'Sigma'),
(787, 'Mitsubishi', '3000GT'),
(788, 'Mitsubishi', 'Tredia'),
(789, 'Mitsubishi', 'Endeavor'),
(790, 'Mitsubishi', 'Lancer'),
(791, 'Mitsubishi', 'Cordia'),
(792, 'Mitsubishi', 'Galant'),
(793, 'Mitsubishi', 'Pickup'),
(794, 'Mitsubishi', 'Diamante'),
(795, 'Mitsubishi', 'Eclipse'),
(796, 'Mitsubishi', 'Montero'),
(797, 'Mitsubishi', 'Montero-Sport'),
(798, 'Mitsubishi', 'Mirage'),
(799, 'Mitsubishi', 'Van'),
(800, 'Mitsubishi', 'Starion'),
(801, 'Nissan', '240Z'),
(802, 'Nissan', '200SX'),
(803, 'Nissan', 'Murano'),
(804, 'Nissan', 'Stanza-Van'),
(805, 'Nissan', '210'),
(806, 'Nissan', 'Altima'),
(807, 'Nissan', 'Quest'),
(808, 'Nissan', '710'),
(809, 'Nissan', 'Pulsar'),
(810, 'Nissan', 'Pickup'),
(811, 'Nissan', '280ZX'),
(812, 'Nissan', '280Z'),
(813, 'Nissan', 'Xterra'),
(814, 'Nissan', 'Cube'),
(815, 'Nissan', '610'),
(816, 'Nissan', 'Versa'),
(817, 'Nissan', '370Z'),
(818, 'Nissan', '311'),
(819, 'Nissan', '300ZX'),
(820, 'Nissan', 'Micra'),
(821, 'Nissan', 'LEAF'),
(822, 'Nissan', 'X-Trail'),
(823, 'Nissan', '411'),
(824, 'Nissan', 'NV-3500'),
(825, 'Nissan', 'Titan'),
(826, 'Nissan', 'Stanza'),
(827, 'Nissan', '240SX'),
(828, 'Nissan', 'Pathfinder'),
(829, 'Nissan', '410'),
(830, 'Nissan', 'Frontier'),
(831, 'Nissan', 'GTR'),
(832, 'Nissan', 'B210'),
(833, 'Nissan', '1200'),
(834, 'Nissan', 'Sentra'),
(835, 'Nissan', '510'),
(836, 'Nissan', 'NV-2500'),
(837, 'Nissan', 'Maxima'),
(838, 'Nissan', 'Juke'),
(839, 'Nissan', 'Armada'),
(840, 'Nissan', 'NV-1500'),
(841, 'Nissan', 'Axxess'),
(842, 'Nissan', '260Z'),
(843, 'Nissan', 'Rogue'),
(844, 'Nissan', 'NX'),
(845, 'Nissan', 'NV200'),
(846, 'Nissan', '350Z'),
(847, 'Nissan', '810'),
(848, 'Nissan', '310'),
(849, 'Oldsmobile', 'Olds'),
(850, 'Oldsmobile', 'Achieva'),
(851, 'Oldsmobile', 'Firenza'),
(852, 'Oldsmobile', 'Ciera'),
(853, 'Oldsmobile', 'Ninety-Eight'),
(854, 'Oldsmobile', 'Alero'),
(855, 'Oldsmobile', 'Eighty-Eight'),
(856, 'Oldsmobile', 'Custom-Cruiser'),
(857, 'Oldsmobile', 'Calais'),
(858, 'Oldsmobile', 'Aurora'),
(859, 'Oldsmobile', 'Intrigue'),
(860, 'Oldsmobile', 'Olds-F85'),
(861, 'Oldsmobile', 'Bravada'),
(862, 'Oldsmobile', 'Cutlass'),
(863, 'Oldsmobile', 'Starfire'),
(864, 'Oldsmobile', 'Silhouette'),
(865, 'Oldsmobile', 'Toronado'),
(866, 'Opel', 'Astra'),
(867, 'Opel', 'Opel'),
(868, 'Peugeot', '405'),
(869, 'Peugeot', '505'),
(870, 'Peugeot', '304'),
(871, 'Peugeot', '604'),
(872, 'Peugeot', '504'),
(873, 'Peugeot', '404'),
(874, 'Plymouth', 'Scamp'),
(875, 'Plymouth', 'Vista'),
(876, 'Plymouth', 'Breeze'),
(877, 'Plymouth', 'Gran-Fury'),
(878, 'Plymouth', 'Volare'),
(879, 'Plymouth', 'Reliant'),
(880, 'Plymouth', 'Prowler'),
(881, 'Plymouth', 'Caravelle'),
(882, 'Plymouth', 'Acclaim'),
(883, 'Plymouth', 'Passenger'),
(884, 'Plymouth', 'Sundance'),
(885, 'Plymouth', 'Valiant'),
(886, 'Plymouth', 'Plymouth-Van'),
(887, 'Plymouth', 'Barracuda'),
(888, 'Plymouth', 'Sapporo'),
(889, 'Plymouth', 'Champ'),
(890, 'Pontiac', 'Tempest'),
(891, 'Pontiac', 'Sunbird'),
(892, 'Pontiac', 'Bonneville'),
(893, 'Pontiac', 'G5'),
(894, 'Pontiac', 'Trans-Sport'),
(895, 'Pontiac', 'Parisienne'),
(896, 'Pontiac', 'Montana'),
(897, 'Pontiac', 'Pontiac'),
(898, 'Pontiac', 'Vibe'),
(899, 'Pontiac', 'Firebird'),
(900, 'Pontiac', 'Solstice'),
(901, 'Pontiac', 'Sunrunner'),
(902, 'Pontiac', 'Firefly'),
(903, 'Pontiac', 'Aztek'),
(904, 'Pontiac', 'Relay'),
(905, 'Pontiac', 'Torrent'),
(906, 'Pontiac', 'Sunburst'),
(907, 'Pontiac', 'Pursuit'),
(908, 'Pontiac', 'Catalina'),
(909, 'Pontiac', 'Le-Mans'),
(910, 'Pontiac', 'G8'),
(911, 'Pontiac', 'G3'),
(912, 'Pontiac', 'Fiero'),
(913, 'Pontiac', 'Sunfire'),
(914, 'Pontiac', 'Rendezvous'),
(915, 'Pontiac', 'Grand-Prix'),
(916, 'Pontiac', 'G6'),
(917, 'Pontiac', 'GTO'),
(918, 'Pontiac', 'Grand-Am'),
(919, 'Pontiac', 'Astre'),
(920, 'Porsche', '912'),
(921, 'Porsche', '944'),
(922, 'Porsche', '968'),
(923, 'Porsche', '356'),
(924, 'Porsche', '928'),
(925, 'Porsche', 'Panamera'),
(926, 'Porsche', '911'),
(927, 'Porsche', '924'),
(928, 'Porsche', 'Cayenne'),
(929, 'Porsche', 'Carrera'),
(930, 'Porsche', 'Boxster'),
(931, 'Porsche', '914'),
(932, 'Porsche', 'Cayman'),
(933, 'Renault', 'Encore'),
(934, 'Renault', 'Alliance'),
(935, 'Renault', 'Medallion'),
(936, 'Rover', 'EVOQUE'),
(937, 'Rover', 'Discovery-Sport'),
(938, 'Saab', '9-7X'),
(939, 'Saab', '900'),
(940, 'Saab', '99'),
(941, 'Saab', '9000'),
(942, 'Saab', '93'),
(943, 'Saab', '92X'),
(944, 'Saab', '96'),
(945, 'Saab', '9-3'),
(946, 'Saab', '9-5'),
(947, 'Saab', '95'),
(948, 'Saturn', 'Vue'),
(949, 'Saturn', 'Saturn-S'),
(950, 'Saturn', 'Saturn-L'),
(951, 'Saturn', 'Ion'),
(952, 'Saturn', 'Outlook'),
(953, 'Saturn', 'Sky'),
(954, 'Saturn', 'Aura'),
(955, 'Scion', 'IQ'),
(956, 'Scion', 'Scion-TC'),
(957, 'Scion', 'Scion-XD'),
(958, 'Scion', 'FR-S'),
(959, 'Scion', 'Scion-XB'),
(960, 'Scion', 'Scion-XA'),
(961, 'Subaru', 'Forester'),
(962, 'Subaru', 'Justy'),
(963, 'Subaru', 'Tribeca'),
(964, 'Subaru', 'Baja'),
(965, 'Subaru', 'Impreza'),
(966, 'Subaru', 'Legacy'),
(967, 'Subaru', 'XV-CROSSTREK'),
(968, 'Subaru', 'SVX'),
(969, 'Subaru', 'Brat'),
(970, 'Subaru', 'Passenger'),
(971, 'Subaru', 'XT'),
(972, 'Subaru', 'Loyale'),
(973, 'Subaru', 'BR-Z'),
(974, 'Subaru', 'WRX'),
(975, 'Suzuki', 'Aerio'),
(976, 'Suzuki', 'Reno'),
(977, 'Suzuki', 'Swift'),
(978, 'Suzuki', 'Kizashi'),
(979, 'Suzuki', 'Esteem'),
(980, 'Suzuki', 'SX4'),
(981, 'Suzuki', 'Vitara'),
(982, 'Suzuki', 'Samurai'),
(983, 'Suzuki', 'X90'),
(984, 'Suzuki', 'Verona'),
(985, 'Suzuki', 'Sidekick'),
(986, 'Suzuki', 'Forenza'),
(987, 'Toyota', 'Pickup'),
(988, 'Toyota', 'MR2'),
(989, 'Toyota', 'Sequoia'),
(990, 'Toyota', 'Tercel'),
(991, 'Toyota', 'Sienna'),
(992, 'Toyota', 'Matrix'),
(993, 'Toyota', 'Corolla'),
(994, 'Toyota', 'Land-Cruiser'),
(995, 'Toyota', 'Tundra'),
(996, 'Toyota', 'Camry'),
(997, 'Toyota', 'Rav4'),
(998, 'Toyota', 'Solara'),
(999, 'Toyota', 'Celica'),
(1000, 'Toyota', 'Previa'),
(1001, 'Toyota', 'Tacoma'),
(1002, 'Toyota', 'Venza'),
(1003, 'Toyota', 'Cressida'),
(1004, 'Toyota', 'Van-Wagon'),
(1005, 'Toyota', 'Paseo'),
(1006, 'Toyota', '4Runner'),
(1007, 'Toyota', 'Highlander'),
(1008, 'Toyota', 'Starlet'),
(1009, 'Toyota', 'T100'),
(1010, 'Toyota', 'Corona-Mark'),
(1011, 'Toyota', 'Avalon'),
(1012, 'Toyota', 'Prius'),
(1013, 'Toyota', 'FJ-Cruiser'),
(1014, 'Toyota', 'Echo'),
(1015, 'Toyota', 'Yaris'),
(1016, 'Toyota', 'Supra'),
(1017, 'Toyota', 'FX'),
(1018, 'Toyota', 'Corona'),
(1019, 'Volkswagen', 'Routan'),
(1020, 'Volkswagen', '411'),
(1021, 'Volkswagen', 'Beetle'),
(1022, 'Volkswagen', 'Jetta'),
(1023, 'Volkswagen', 'VW-CC'),
(1024, 'Volkswagen', 'Quantum'),
(1025, 'Volkswagen', 'Golf'),
(1026, 'Volkswagen', 'Scirocco'),
(1027, 'Volkswagen', 'Tiguan'),
(1028, 'Volkswagen', 'Corrado'),
(1029, 'Volkswagen', 'Fox'),
(1030, 'Volkswagen', 'Eos'),
(1031, 'Volkswagen', 'Dasher'),
(1032, 'Volkswagen', 'Touareg'),
(1033, 'Volkswagen', 'Phaeton'),
(1034, 'Volkswagen', 'Cabriolet'),
(1035, 'Volkswagen', 'Eurovan'),
(1036, 'Volkswagen', 'Rabbit'),
(1037, 'Volkswagen', 'Passat'),
(1038, 'Volkswagen', 'Vanagon'),
(1039, 'Volvo', '1800'),
(1040, 'Volvo', '850'),
(1041, 'Volvo', 'XC90'),
(1042, 'Volvo', '780'),
(1043, 'Volvo', 'S40'),
(1044, 'Volvo', 'S70'),
(1045, 'Volvo', '760'),
(1046, 'Volvo', '740'),
(1047, 'Volvo', 'C30'),
(1048, 'Volvo', '960'),
(1049, 'Volvo', 'V50'),
(1050, 'Volvo', 'S60'),
(1051, 'Volvo', '240'),
(1052, 'Volvo', '164'),
(1053, 'Volvo', 'S90'),
(1054, 'Volvo', 'S80'),
(1055, 'Volvo', '940'),
(1056, 'Volvo', 'V60'),
(1057, 'Yugo', 'GV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_temp_make_model`
--
ALTER TABLE `tbl_temp_make_model`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_temp_make_model`
--
ALTER TABLE `tbl_temp_make_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1059;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
