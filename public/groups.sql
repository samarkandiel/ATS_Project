-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2022 at 12:34 PM
-- Server version: 10.2.44-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atsfares_comm`

-- Table structure for table `groups`
--

-- CREATE TABLE `groups` (
--   `group_id` int(11) NOT NULL,
--   `group_name` varchar(255) DEFAULT NULL
-- ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--


INSERT INTO `groups` (`group_id`, `group_name`) VALUES
(1, 'None'),
(2, 'Latin / South America / Caribbean / Mexico'),
(4, 'South Pacific (Australia / New Zealand)'),
(5, 'WB'),
(6, 'EB'),
(7, 'EB / WB'),
(8, 'EB Pacific Destination'),
(9, 'EB / WB Transpacific Asia / Japan / China * t-1270'),
(10, 'EB /Â WBÂ South Pacific'),
(128, 'SFO to CI TC3'),
(129, 'NEW ZELAND'),
(130, 'Â LAX/ONT/SFO/JFK/HNL/YVR to TC3 CI/AE on-line destinationsÂ '),
(12, 'Europe / Middle East / Africa / India / Asia (via Atlantic)'),
(13, 'EB /Â WBÂ Central / South America'),
(14, 'EB /Â WB South Pacific (Australia / New Zealand)'),
(15, 'Atlantic Contract'),
(16, 'EB /Â WB Pacific'),
(30, 'Middle East'),
(34, 'EB /Â WB Middle East'),
(20, 'WB Europe / Middle East / Africa / India / Asia (via Atlantic) - Selected Cities'),
(33, 'EB /Â WB Transpacific Asia/Japan agreement #1251'),
(31, '(Transatlantic) United Kingdom'),
(58, 'YTO - BEG VIA AMS'),
(35, 'Asia - Oceania - Europe - Africa'),
(32, 'WB - Ghana and Senegal'),
(27, 'Central / South America'),
(28, 'EB /Â WB North America / Pacific'),
(29, 'Korea / ChinaÂ / JapanÂ / S.E.A. / EuropeÂ / AfricaÂ / Middle East'),
(59, 'BEG - CANADA VIA (EUROPE CITIES)'),
(41, 'ME / LH BUSINESS FARES FROM USA - BEIRUT'),
(42, 'USA - Mexico'),
(43, 'ET / USA'),
(85, 'AA-ME North Atlantic to Bey via FRA'),
(44, 'ET / WB USA & CANADA'),
(45, 'ET / ALL OTHER DESTINATIONS'),
(46, 'TB /Â Belgium SPECIAL COMMISSION '),
(47, 'EB OUTSID INDIA'),
(48, 'EB PORTUGAL,Â EUROPE &Â AFRICA'),
(80, 'JU -BA'),
(54, 'YHZ/YYZ/YVR/YXY/YYC - BEG VIAÂ FRA'),
(55, 'BEG VIA EUROPEAN SECTORS DEFINED IN THIS PRICELIST'),
(56, 'BEG - YYZ VIA WAW'),
(57, 'USA - BEG VIA LHR'),
(66, 'BEG - YTO VIA AMS'),
(60, 'BEG - YTO/YVR/YMQ/YYC VIA LHR'),
(61, 'BEG - NYC/CHI VIA WAW'),
(62, 'NYC - BEG VIA BRU'),
(63, 'AMERICAS CITIES - BEG VIA FRA'),
(64, 'YTO/YVR/YMQ/YYC - BEG VIA LHR'),
(65, 'BEG - EU/TLV'),
(67, 'AMERICAS CITIES - BEG VIAÂ FCO/MXP'),
(68, 'YYZ - BEG VIA\nWAW'),
(69, 'BEG - USA VIA LHR'),
(70, 'CANADA - BEG VIA (EUROPE CITIES)'),
(71, 'YYZ - BEG VIA FCO'),
(72, 'CX NETWORK'),
(73, 'USA - QR NETWORK'),
(75, 'USA / CANADA - RJ NETWORK'),
(76, 'BEG - AMERICAS CITIES VIA FRA'),
(77, 'USA / CANADA -Â PHILIPPINES &Â OTHER PR NETWORK'),
(78, 'USA / CANADA - TC3'),
(84, 'NYC-ASIA'),
(83, 'AA-JU'),
(86, 'TRANSATLANTIC TO BEG VIA European Sector'),
(87, 'BEY to North Atlantic via PAR/LON/FRA/MIL/ROM/ATH/BRU'),
(88, 'AF-US TO DKR /LOS /ACC'),
(89, 'US - United Kingdom via Atlantic exclude LON'),
(138, 'US-UK*1273'),
(91, 'US - EMEAI /ASIA VIA ATLANTIC'),
(92, 'EMEAI /ASIA VIA ATLANTIC TO USÂ '),
(93, 'US TO DKR /LOS /ACC'),
(94, 'USA TO ASIA Pacific'),
(95, 'China to United States'),
(96, 'USA TO S.E ASIA'),
(97, 'USA TO ASIAÂ '),
(98, 'USA TO Australia &NewZeland'),
(99, 'USA TO Brazil / Argentina, Chile, Peru, Colombia , Panama'),
(100, 'ME-AA from North Atlantic to BEY via Europe'),
(101, 'ME -AA from BEY to North Atlantic via EuropeÂ '),
(102, 'ME-AA from North Atlantic to BEY via FRA'),
(103, 'AA-JU Transatlantic to BEG via European sectors'),
(104, 'JU -AZ'),
(105, 'JU- AC from Canada to BEG via Europe'),
(106, 'NYC TO BEG VIA BRU SN/JU'),
(107, 'US - MEX,MLM,OAX,AGU,MZT,ZCL,SLP,BJX,QRO,MID,TGZ,GDL,'),
(108, 'MU USA Marketing Fare 1'),
(109, 'MU USA Marketing Fare 2'),
(110, 'US - KOREA'),
(111, 'US -SEL'),
(112, 'US-AU/NZ'),
(113, 'US- ASIA Except CHINA'),
(114, 'Area1/Asia -Asia/Area1'),
(115, 'Europe/Middle East//Africa/India/Asia via Atlantic to USA'),
(116, 'USA - INDIAÂ '),
(117, 'USA-United Kingdom'),
(118, 'AA-JU 2'),
(119, 'North Atlantic to BEY via FRA'),
(120, 'North Atlantic to BEY via Europe'),
(121, 'Joint ME & (LH) net fareÂ '),
(122, 'AC USA to Asia'),
(123, 'Cuba to BEY via LON'),
(124, 'Selected point in USA to BEY via LON'),
(125, 'US - LAC'),
(126, 'USA- JAPAN'),
(127, 'Canada- Japan'),
(137, 'BOS / MIA - CASÂ '),
(136, 'JFK- All Egypt Air Net Work via CAI'),
(135, 'JFK - CAI'),
(134, 'Testing'),
(133, 'WB - JAPAN -USA'),
(132, 'USA- EuropeÂ  .Middle East. Africa. India .Asia');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
