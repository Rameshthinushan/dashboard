-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 02:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datastore`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `Action` varchar(255) DEFAULT NULL,
  `Itemnumber` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Listingsite` varchar(255) DEFAULT NULL,
  `Currency` varchar(255) DEFAULT NULL,
  `Startprice` varchar(255) DEFAULT NULL,
  `BuyItNowprice` varchar(255) DEFAULT NULL,
  `Availablequantity` varchar(255) DEFAULT NULL,
  `Relationship` varchar(255) DEFAULT NULL,
  `Relationshipdetails` varchar(255) DEFAULT NULL,
  `Customlabel` varchar(255) DEFAULT NULL,
  `channel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `Action`, `Itemnumber`, `Title`, `Listingsite`, `Currency`, `Startprice`, `BuyItNowprice`, `Availablequantity`, `Relationship`, `Relationshipdetails`, `Customlabel`, `channel`) VALUES
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '5.73', '', '10', '', '', 'ICG95E2760', 'led son'),
(0, 'Revise', '263000000000', 'Bayonet Vintage Bulb Lighting Edison Bulb G95 B22 60W Antique Retro Filament UK', 'UK', 'GBP', '5.17', '', '10', '', '', 'ICG95B2260', 'led son'),
(0, 'Revise', '263000000000', 'G95 E27 60W Dimmable Edison Bulb Vintage Lighting Antique Retro Filament Bulb UK', 'UK', 'GBP', '6.06', '', '10', '', '', 'ICG95E2760', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulb ST64 E27 4W Vintage Antique Retro Light LED Filament 220V UK', 'UK', 'GBP', '5.45', '', '10', '', '', 'LDMST64E274', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulb ST64 E27 4W Vintage Retro Lighting Filament 220V 5 pack Pearls', 'UK', 'GBP', '21.52', '', '10', '', '', 'LDMT64E2745PK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulb Mushroom E27 60W 220V Vintage Antique Retro Light Filament Bulb', 'UK', 'GBP', '5.45', '', '10', '', '', 'ICMUSHE2760', 'led son'),
(0, 'Revise', '263000000000', 'Edison Bulb Tall E27 60W Vintage Antique Retro 220V Light Filament 1Ye. Warrenty', 'UK', 'GBP', '5.64', '', '10', '', '', 'ICT130E2760', 'led son'),
(0, 'Revise', '263000000000', 'Burgandy Colour Twisted Silk Braided Vintage Fabric Lighting Cable 3 Core 0.75mm', 'UK', 'GBP', '3.02', '', '10', '', '', 'CL3TBU', 'led son'),
(0, 'Revise', '263000000000', 'Light Cord Burgundy TWISTED 3Core Braided Cable Fabric Flex Cable Vintage 0.75mm', 'UK', 'GBP', '3.02', '', '10', '', '', 'CL3TBU', 'led son'),
(0, 'Revise', '263000000000', 'METAL CEILING ROSE Antique Brass Vintage Industrial Style for Fabric Cable UK', 'UK', 'GBP', '', '', '', '', 'Celing type=With Cord grip;with Hook;With Hook Ring;With 0.5M Chain', 'BRASS CEILING ROSE', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '6', '', '10', 'Variation', 'Celing type=With Cord grip', 'CRFF100GB', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '7.17', '', '10', 'Variation', 'Celing type=with Hook', 'CRFF100GB+HK10GB', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '9.48', '', '10', 'Variation', 'Celing type=With 0.5M Chain', 'CRFF100GB+CNP1000GB', 'led son'),
(0, 'Revise', '263000000000', 'IP67 Waterproof LED Driver Power Supply Transformer AC240V-DC12V Power Converter', 'UK', 'GBP', '', '', '', '', 'Watts=15W;20W;30W;36W;40W;45W;50W;60W;80W;100W;120W;150W;200W;250W;300W;350W', 'IP67 Waterproof power supply Transformer', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '9.01', '', '10', 'Variation', 'Watts=36W', '12IP6736', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '5.43', '', '10', 'Variation', 'Watts=15W', '12IP6715', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '6.83', '', '10', 'Variation', 'Watts=20W', '12IP6720', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '7.93', '', '10', 'Variation', 'Watts=30W', '12IP6730', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '10.64', '', '0', 'Variation', 'Watts=40W', '12IP6740', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '9.67', '', '0', 'Variation', 'Watts=45W', '12IP6745', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '11.86', '', '10', 'Variation', 'Watts=50W', '12IP6750', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '16.21', '', '10', 'Variation', 'Watts=60W', '12IP6760', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '17.3', '', '0', 'Variation', 'Watts=80W', '12IP6780', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '21.02', '', '10', 'Variation', 'Watts=100W', '12IP67100', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '24.18', '', '0', 'Variation', 'Watts=120W', '12IP67120', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '26.47', '', '10', 'Variation', 'Watts=150W', '12IP67150', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '37.37', '', '0', 'Variation', 'Watts=200W', '12IP67200', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '42.73', '', '10', 'Variation', 'Watts=250W', '12IP67250', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '46.87', '', '0', 'Variation', 'Watts=300W', '12IP67300', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '54.41', '', '10', 'Variation', 'Watts=350W', '12IP67350', 'led son'),
(0, 'Revise', '263000000000', 'LED Power Supply Transformer 25w/30w/40w Driver for LED Bulb Strip 240V - DC 12V', 'UK', 'GBP', '', '', '', '', 'WATTS=15W;25W;30W;40W', 'LED power supply Transformer', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '8.24', '', '10', 'Variation', 'WATTS=40W', '12IP2040', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '7.2', '', '10', 'Variation', 'WATTS=30W', '12IP2030', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '6.3', '', '10', 'Variation', 'WATTS=25W', '12MIP2025', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '3.77', '', '10', 'Variation', 'WATTS=15W', '12IP2015', 'led son'),
(0, 'Revise', '263000000000', 'Constant Current LED Driver Power Supply Transformer 3W/5W/7W/9W Compact Driver', 'UK', 'GBP', '', '', '', '', 'Watts=5 Watts;7 Watts;9 Watts;3 Watts;12 Watts;18 Watts;24 Watts;36 Watts', 'Constant Current LED Driver Power Supply', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '4.57', '', '10', 'Variation', 'Watts=7 Watts', 'CCBC7', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '2.29', '', '10', 'Variation', 'Watts=3 Watts', 'CCBC3', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '4.07', '', '0', 'Variation', 'Watts=5 Watts', 'CCBC5', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '5.23', '', '10', 'Variation', 'Watts=9 Watts', 'CCBC9', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '5.88', '', '10', 'Variation', 'Watts=12 Watts', 'CCBC12', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '6.8', '', '10', 'Variation', 'Watts=18 Watts', 'CCBC18', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '8.27', '', '10', 'Variation', 'Watts=24 Watts', 'CCBC24', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '9.91', '', '10', 'Variation', 'Watts=36 Watts', 'CCBC36', 'led son'),
(0, 'Revise', '263000000000', 'DC12V LED Transformer Driver 7W-60W LED Strips, MR16 CCTV & other 12V UK A++++++', 'UK', 'GBP', '', '', '', '', 'Power=DC12V 0.58A 7W;DC12V 1.25A 15W;DC12V 1A 12W;DC12V 3A 36W;DC12V 2.9A 35W;DC12V 5A 60W;DC12V 2A 24W', 'DC 12V Transformer', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '6.07', '', '10', 'Variation', 'Power=DC12V 0.58A 7W', '12SAN7', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '7.2', '', '10', 'Variation', 'Power=DC12V 1.25A 15W', '12SAN15', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '5.84', '', '10', 'Variation', 'Power=DC12V 1A 12W', '12WC12', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '8.23', '', '10', 'Variation', 'Power=DC12V 3A 36W', '12WC36', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '8.36', '', '10', 'Variation', 'Power=DC12V 2.9A 35W', '12SAN35', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '15.23', '', '10', 'Variation', 'Power=DC12V 5A 60W', '12SAN60', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '8.23', '', '10', 'Variation', 'Power=DC12V 2A 24W', '12WC24', 'led son'),
(0, 'Revise', '263000000000', 'Vintage Black Round Braided Fabric Flexible 3Core Electrical Cable UK Lighting', 'UK', 'GBP', '3.83', '', '10', '', '', 'CL3RBM', 'led son'),
(0, 'Revise', '263000000000', 'VINTAGE RED 3 CORE ROUND BRAIDED CABLE FABRIC ELECTRIC LIGHT CORD FLEX CABLE', 'UK', 'GBP', '4.11', '', '10', '', '', 'CL3RRE', 'led son'),
(0, 'Revise', '263000000000', 'Electrical Cable 3 Core Vintage Blue Round Braided Fabric Flex Cable Light Cord', 'UK', 'GBP', '4.01', '', '10', '', '', '3CRBE', 'led son'),
(0, 'Revise', '263000000000', 'ELECTRIC LIGHT CORD CABLE ROUND 3CORE BABY PINK BRAIDED CABLE FABRIC FLEX CABLE', 'UK', 'GBP', '3.09', '', '10', '', '', 'CL3RBP', 'led son'),
(0, 'Revise', '263000000000', 'Blue 3Core Twisted Italian Style Electric Cable Braided Fabric Flex Light 0.75mm', 'UK', 'GBP', '3.06', '', '10', '', '', 'CL3TBL', 'led son'),
(0, 'Revise', '263000000000', '0.75mm Dark Blue Twisted 3 Core Braided Electric Cable Vintage Fabric Lamp Cord', 'UK', 'GBP', '3.39', '', '10', '', '', 'CL3TBD', 'led son'),
(0, 'Revise', '263000000000', '3 Core Twisted Fabric Flex Lighting Cord Vintage Red Colour Braided Cable', 'UK', 'GBP', '2.75', '', '10', '', '', 'CL3TRE', 'led son'),
(0, 'Revise', '263000000000', 'Round Braided Vintage Fabric Gold Colour Lighting Cable Flex 3Core0.75mm 10M', 'UK', 'GBP', '25.79', '', '10', '', '', 'CL3RGDAPK', 'led son'),
(0, 'Revise', '263000000000', 'DC12V LED Driver Switching Power Supply Transformer for LED Strip CCTV MR16 UK', 'UK', 'GBP', '', '', '', '', 'Watts=15W;24W;30W;40W;60W;80W;100W;120W;150W;180W;200W;240W;300W;360W;400W;480W', 'DC12V LED Driver', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '7.2', '', '10', 'Variation', 'Watts=30W', '12IP2030', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '8.24', '', '10', 'Variation', 'Watts=40W', '12IP2040', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '15.34', '', '10', 'Variation', 'Watts=100W', '12IP20100', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '12.71', '', '10', 'Variation', 'Watts=120W', '12IP20120', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '15.83', '', '10', 'Variation', 'Watts=150W', '12IP20150', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '19.47', '', '10', 'Variation', 'Watts=180W', '12IP20180', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '16.19', '', '10', 'Variation', 'Watts=200W', '12IP20200', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '19.51', '', '10', 'Variation', 'Watts=240W', '12IP20240', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '32.23', '', '10', 'Variation', 'Watts=480W', '12IP20480', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '3.77', '', '10', 'Variation', 'Watts=15W', '12IP2015', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '6.3', '', '10', 'Variation', 'Watts=24W', '12IP2024', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '10.08', '', '0', 'Variation', 'Watts=60W', '12IP2060', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '11.28', '', '10', 'Variation', 'Watts=80W', '12IP2080', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '19.41', '', '10', 'Variation', 'Watts=300W', '12IP20300', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '20.11', '', '10', 'Variation', 'Watts=360W', '12IP20360', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '20.89', '', '10', 'Variation', 'Watts=400W', '12IP20400', 'led son'),
(0, 'Revise', '263000000000', 'IP65 2/3 Way Underground Cable Wire Connectors Outdoor Waterproof Junction Box', 'UK', 'GBP', '', '', '', '', 'Pack=5;10|Number of Ways=2 Way;3 Way', 'IP65 2/3 way Junction box', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '17.77', '', '10', 'Variation', 'Number of Ways=2 Way|Pack=5', 'WJB25PK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '30.37', '', '10', 'Variation', 'Number of Ways=3 Way|Pack=10', 'WJB3APK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '30.23', '', '10', 'Variation', 'Number of Ways=2 Way|Pack=10', 'WJB2APK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '15.65', '', '10', 'Variation', 'Number of Ways=3 Way|Pack=5', 'WJB35PK', 'led son'),
(0, 'Revise', '263000000000', '2/3/5 Way Connector Wire Reusable Spring Lever Terminal Cable Blocks Lighting UK', 'UK', 'GBP', '', '', '', '', 'Number of Ports=2;3;5|Number of Pack=1;5;10;20;50;100', '2/3/5 way wire connector', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '1.75', '', '10', 'Variation', 'Number of Ports=2|Number of Pack=1', 'CO232AGY', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '2.6', '', '10', 'Variation', 'Number of Ports=2|Number of Pack=5', 'CO232AGY5PK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '3.27', '', '10', 'Variation', 'Number of Ports=2|Number of Pack=10', 'CO232AGYAPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '5.56', '', '10', 'Variation', 'Number of Ports=2|Number of Pack=20', 'CO232AGYCPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '12.29', '', '10', 'Variation', 'Number of Ports=2|Number of Pack=50', 'CO232AGYEPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '21.33', '', '10', 'Variation', 'Number of Ports=2|Number of Pack=100', 'CO232AGYFPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '1.72', '', '10', 'Variation', 'Number of Ports=3|Number of Pack=1', 'CO332AGY', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '2.83', '', '10', 'Variation', 'Number of Ports=3|Number of Pack=5', 'CO332AGY5PK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '4.61', '', '10', 'Variation', 'Number of Ports=3|Number of Pack=10', 'CO332AGYAPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '6', '', '10', 'Variation', 'Number of Ports=3|Number of Pack=20', 'CO332AGYCPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '13.27', '', '10', 'Variation', 'Number of Ports=3|Number of Pack=50', 'CO332AGYEPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '24.71', '', '10', 'Variation', 'Number of Ports=3|Number of Pack=100', 'CO332AGYFPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '2.55', '', '10', 'Variation', 'Number of Ports=5|Number of Pack=1', 'CO532AGY', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '4.61', '', '10', 'Variation', 'Number of Ports=5|Number of Pack=5', 'CO532AGY5PK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '6.67', '', '10', 'Variation', 'Number of Ports=5|Number of Pack=10', 'CO532AGYAPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '10.77', '', '10', 'Variation', 'Number of Ports=5|Number of Pack=20', 'CO532AGYCPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '21.56', '', '10', 'Variation', 'Number of Ports=5|Number of Pack=50', 'CO532AGYEPK', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '39.72', '', '10', 'Variation', 'Number of Ports=5|Number of Pack=100', 'CO532AGYFPK', 'led son'),
(0, 'Revise', '263000000000', 'LED Lighting Transformer 10W - 300W IP67 Waterproof Driver Power Supply DC12V UK', 'UK', 'GBP', '', '', '', '', 'Power=10W;15W;20W;24W;30W;36W;45W;50W;60W;80W;100W;120W;150W;250W;300W;350W', 'IP67 Waterproof Transformer', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '8.37', '', '10', 'Variation', 'Power=24W', '12IP6724', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '4.88', '', '10', 'Variation', 'Power=10W', '12IP6710', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '5.43', '', '10', 'Variation', 'Power=15W', '12IP6715', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '6.83', '', '10', 'Variation', 'Power=20W', '12IP6720', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '7.93', '', '10', 'Variation', 'Power=30W', '12IP6730', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '9.01', '', '10', 'Variation', 'Power=36W', '12IP6736', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '9.67', '', '0', 'Variation', 'Power=45W', '12IP6745', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '11.86', '', '10', 'Variation', 'Power=50W', '12IP6750', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '16.21', '', '10', 'Variation', 'Power=60W', '12IP6760', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '17.3', '', '0', 'Variation', 'Power=80W', '12IP6780', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '19.42', '', '0', 'Variation', 'Power=100W', '12SIP67100', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '24.18', '', '0', 'Variation', 'Power=120W', '12IP67120', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '28.99', '', '0', 'Variation', 'Power=150W', '12SIP67150', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '46.87', '', '0', 'Variation', 'Power=300W', '12IP67300', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '42.73', '', '10', 'Variation', 'Power=250W', '12IP67250', 'led son'),
(0, 'Revise', '263000000000', 'Edison Lamp Bulbs 220V E27 60W Vintage Antique Retro Filament Edison Light Bulb', 'UK', 'GBP', '54.41', '', '10', 'Variation', 'Power=350W', '12IP67350', 'led son');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
