-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2020 at 12:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ballers_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(255) NOT NULL,
  `area_name` text NOT NULL,
  `state_id` int(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `state_id`, `longitude`, `latitude`) VALUES
(1, 'Lekki Phase 1', 1, '3.5852', '6.4698'),
(2, 'Orchid Road Hotel', 1, '3.5433919', '6.4432707'),
(3, 'Ikate', 1, '0', '0'),
(4, 'Ogombo', 1, '0', '0'),
(5, 'IIsan', 1, '0', '0'),
(6, 'IIasan', 1, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `houses_rent`
--

CREATE TABLE `houses_rent` (
  `id` int(11) NOT NULL,
  `category` varchar(8) DEFAULT NULL,
  `area` varchar(17) DEFAULT NULL,
  `area_id` int(30) NOT NULL,
  `state_id` int(30) NOT NULL,
  `type` varchar(16) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `website` varchar(28) DEFAULT NULL,
  `link` varchar(204) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `houses_rent`
--

INSERT INTO `houses_rent` (`id`, `category`, `area`, `area_id`, `state_id`, `type`, `price`, `website`, `link`) VALUES
(1, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 250000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/lekki-phase-1/614224-self-con-with-birth-room-toilet-but-you-shear-kitchen-3-people'),
(2, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 350000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/lekki-phase-1/614224-self-con-with-birth-room-toilet-but-you-shear-kitchen-3-people'),
(3, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 400000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/lekki-phase-1/618711-one-room-self-contain-with-toilet-kitchen-birth-room-inside-room'),
(4, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/lekki-phase-1/628001-self-contain-in-vgc'),
(5, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 550000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/lekki-phase-1/576161-self-contain-lekki-phase-1'),
(6, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 600000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/lekki-phase-1/615236-spacious-and-luxurious-miniflat-within-the-lekki-environs-in-a-gated'),
(7, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 750000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/lekki-phase-1/617994-self-contain-lekki-phase-1'),
(8, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 800000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/lekki-phase-1/601868-self-contain-lekki-phase-1'),
(9, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 850000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/lekki-phase-1/583203-self-contain-lekki-phase-1'),
(10, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 900000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/631026-serviced-3units-of-roomself-at-lekki-phase-1'),
(11, 'For Rent', 'Lekki Phase 1', 1, 1, 'Studio Apartment', 1600000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/1-bed-mini-serviced-flat-apartment-for-rent-lekki-phase-1-cw89944'),
(12, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 1200000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/470914--one-bedroom-mini-flat'),
(13, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 1300000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/617040-standard-mini-flat-with-parking'),
(14, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 1400000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/lekki-phase-1/601873-mini-flat-onebedroom-flat-lekki-phase-1'),
(15, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 1500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/lekki-phase-1/578356-exquisitely-finished-one-1-bedroom-flatmini-flat'),
(16, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 1700000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/lekki-phase-1/607392-mini-flat-24hr-serviced-lekki-phase-1'),
(17, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 1800000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/lekki-phase-1/382522-one-bedroom-mini-flat-'),
(18, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 1900000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/lekki-phase-1/601522-excellent-mini-flat-lekki-phase-1'),
(19, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 2000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/lekki-phase-1/616821-serviced-furnished-1bedroom-flat'),
(20, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 2500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/622747-newly-built-luxury-1-bedroom-fully-furnished-and-fully-serviced-upper'),
(21, 'For Rent', 'Lekki Phase 1', 1, 1, '1 bedroom', 1500000, 'Property pro.com', 'https://www.propertypro.ng/property/1-bedroom-mini-flat-semi-detached-duplex-house-for-rent-plot-25-block-81-chief-collins-street-lekki-phase-1-lekki-phase-1-lekki-lagos-9DGAN'),
(22, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 1200000, 'Property pro.com', 'https://www.propertypro.ng/property/2-bedroom-blocks-of-flats-house-for-rent-lekki-phase-1-lekki-lagos-4DCDQ'),
(23, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 2200000, 'Property pro.com', 'https://www.propertypro.ng/property/2-bedroom-terraced-duplex-house-for-rent-lekki-phase-1-lekki-lagos-9DCKS'),
(24, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 2300000, 'Property pro.com', 'https://www.propertypro.ng/property/2-bedroom-terraced-duplex-house-for-rent-omore-johnson-lekki-phase-1-lekki-lagos-7DCBW'),
(25, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 2400000, 'Property pro.com', 'https://www.propertypro.ng/property/2-bedroom-blocks-of-flats-house-for-rent-off-admiralty-way-lekki-phase-1-lekki-lagos-1CXSF'),
(26, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 2500000, 'Property pro.com', 'https://www.propertypro.ng/property/2-bedroom-detached-duplex-house-for-rent-off-admiralty-way-lekki-phase-1-lekki-lagos-4DCDD'),
(27, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 3500000, 'Property pro.com', 'https://www.propertypro.ng/property/2-bedroom-blocks-of-flats-house-for-rent-lekki-phase-1-lekki-lagos-7DCNK'),
(28, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 1100000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/526038-nicely-built-luxurious-2-bedroom-in-a-gated-compound-with-clean-water-a-nice-road'),
(29, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 1200000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/626490-luxurious-and-lovely-2-bedroom-upstairs-within-the-lekki-environs-in-a'),
(30, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 1500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/625520-2-bedroom-apartment'),
(31, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 1600000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/586718-newly-built-2-bedroom-flat-with-excellent-facilities'),
(32, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 2500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/601864-2-bedroom-serviced-flat-lekki-phase-1'),
(33, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 3000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/565027-pristine-modern-2-br-fully-serviced-furnished-apartment'),
(34, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 3500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/622745-newly-built-luxury-2-bedroom-fully-furnished-and-fully-serviced-upper'),
(35, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 4000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/574943-fully-furnished-serviced-2-bedroom-apartment'),
(36, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 5500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/576592-expatriate-standard-luxury-2bedrooms-pent-house-in-oniru-estate'),
(37, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 8000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/566547-2-bedroom-furnised-flat-lekki-phase-1'),
(38, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 2300000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/2-bed-serviced-flat-apartment-for-rent-off-freedow-way-lekki-phase-1-htpl0278'),
(39, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 2500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/2-bed-flat-apartment-for-rent-lekki-1-lekki-phase-1-cw0515'),
(40, 'For Rent', 'Lekki Phase 1', 1, 1, '2 bedroom', 3000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/2-bed-serviced-flat-apartment-for-rent-lekki-phase-1-geik2244'),
(41, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 2500000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-rent-crystal-court-estate-idaado-estate-lekki-lagos-lekki-phase-1-lekki-lagos-4CJGG'),
(42, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 3000000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-blocks-of-flats-house-for-rent-off-admiralty-way-lekki-phase-1-lekki-lagos-8CLSE'),
(43, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 3500000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-rent-lekki-phase-1-lekki-lagos-3DBYS'),
(44, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 3800000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-rent-lekki-phase-1-lekki-lagos-5CVJY'),
(45, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 4000000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-rent-off-emma-abimbola-lekki-phase-1-lekki-lagos-4DGYW'),
(46, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 4500000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-house-for-rent-off-castle-and-temp-drive-lekki-lekki-phase-1-lekki-lagos-4DCHS'),
(47, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 1600000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/622403-neat-and-clean-3bedroom-around-orchid-road'),
(48, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 2000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/622275-luxury-3-bedroom-flat'),
(49, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 2500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/630899-nice-3-bed'),
(50, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 3000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/630813-3bed-room-flat'),
(51, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 3500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/631038-stunning-built-3bedroom-flat-in-a-highly-serene-estate-lekki-phase1'),
(52, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 5000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/503668-lovely-3-bedroom-spacious-serviced-apartment-with-a-room-servant-quarter-fitted-kitchen-swimming-pool-gymetc'),
(53, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 6000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/573073-3-bedroom-serviced-flat-gym-pool-lekki-phase-1'),
(54, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 7000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/415810-super-luxury-3-bedroom-serviced-apartment-with-a-room-servant-quarter-swimming-pool-gymfully-fitted-kitchen-etc'),
(55, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 8500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lekki-phase-1/402618-exquisite-3-bedroom-flat-for-let-in-lekki-phase-1-lagos-'),
(56, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 16000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/semi-detached-duplexes/lagos/lekki/lekki-phase-1/600035-4unit-of-3-bedrooms-apartment'),
(57, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 2000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/3-bed-flat-apartment-for-rent-lekki-phase-1-cw0608'),
(58, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 3000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/3-bed-flat-apartment-for-rent-lekki-phase-1-cw0468'),
(59, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 3500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-duplex-for-rent-admiralty-way-lekki-phase-1-aman0067'),
(60, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 4000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-terrace-for-rent-off-chief-collins-lekki-phase-1-sdly1176'),
(61, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 5000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-house-for-rent-off-admiralty-way-lekki-phase-1-sdly1063'),
(62, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 6000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/3-bed-terrace-for-rent-lekki-phase-1-elct0040'),
(63, 'For Rent', 'Lekki Phase 1', 1, 1, '3 bedroom', 8500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/3-bed-furnished-house-for-rent-lekki-phase-1-lagos-lekki-phase-1-ewmk2733'),
(64, 'For Rent', 'Orchid Road Hotel', 2, 1, '3 bedroom', 1700000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lafiaji/626312-3-bedroom-terrace-duplex-with-bq'),
(65, 'For Rent', 'Orchid Road Hotel', 2, 1, '3 bedroom', 2200000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lafiaji/582823-classy-3-bedroom-terraced-duplex-with-bq'),
(66, 'For Rent', 'Orchid Road Hotel', 2, 1, '3 bedroom', 2500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/lafiaji/628767-brandnew-3-bedroom-flat-with-massive-rooms-top-floor'),
(67, 'For Rent', 'Orchid Road Hotel', 2, 1, '3 bedroom', 2800000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lafiaji/625194-brand-new-and-fully-serviced-3-bed-terrace'),
(68, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 2500000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-lekki-phase-1-lekki-lagos-6DDQU'),
(69, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 3000000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-by-nicon-town-lekki-phase-1-lekki-lagos-1DGYF'),
(70, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 4000000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-lekki-phase-1-lekki-lagos-6DBCJ'),
(71, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 4500000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-lekki-phase-1-lekki-lagos-6DGDH'),
(72, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 5000000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-lekki-lekki-phase-1-lekki-lagos-8DAVM'),
(73, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 5500000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-lekki-phase-1-lekki-lagos-4CBWG'),
(74, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 2800000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/598368-4-bedrooms-terraced-duplex-with-kitchen'),
(75, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 3000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/626478-standard-and-clean-terraced-duplex-with-spacious-bq'),
(76, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 3500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/279427-newly-built-4-bedroom-serviced-terrace-duplex-'),
(77, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 4000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/581269-luxury-4-bedrooms-terraced-duplex-with-modernize-kitchen'),
(78, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 4500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/585599-brand-new-4-bedroom-terraced-duplex'),
(79, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 5000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/577133-4-bdr-furnished-serviced-terraced-duplex-in-an-estate'),
(80, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 5500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/610578-tastefully-finished-serviced-4bedroom-terrace-duplex-with-a-room-bq'),
(81, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 6000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/599982-magnificent-4bedroom-terrace-duplex-now-available'),
(82, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 6500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/625070-4bedroom-terrace-duplex-with-bq'),
(83, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 7000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/470325-newly-built-luxury-4-bedroom-terraced-duplex-in-a-new-and-spacious-residential-court'),
(84, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 8500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/594317-fully-furnished-4-bedrooms-terraced-duplex'),
(85, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 3000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-dsc-lekki-phase-1-sdly1260'),
(86, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 3500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-lekki-phase-1-htpl0173'),
(87, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 4500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-off-jide-sawyer-lekki-phase-1-sdly1179'),
(88, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 5000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-lekki-phase-1-geik89206'),
(89, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 5500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-admiralty-road-lekki-phase-1-sdly1249'),
(90, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 6000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-lekki-phase-1-ewmk2695'),
(91, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 7000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-terrace-for-rent-lekki-phase-1-ewmk2615'),
(92, 'For Rent', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 8000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-off-admiralty-road-lekki-phase-1-undh0140'),
(93, 'For Rent', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 2500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lafiaji/600198-4-bedroom-terraced-duplex'),
(94, 'For Rent', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 2800000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lafiaji/626039-uniquely-finished-4-bedroom-terrace-duplex'),
(95, 'For Rent', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 3000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lafiaji/618436-brand-new-4-bedroom-terrace-duplex-with-24-hours-power-supply'),
(96, 'For Rent', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 3200000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/lafiaji/591576-fully-serviced-4-bedroom-terrace-duplex'),
(97, 'For Rent', 'Ikate', 3, 1, 'Studio Apartment', 400000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/ikate-elegushi/624298-a-roomself-con'),
(98, 'For Rent', 'Ikate', 3, 1, 'Studio Apartment', 500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/ikate-elegushi/613807-spacious-service-self-contained'),
(99, 'For Rent', 'Ikate', 3, 1, 'Studio Apartment', 550000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/ikate-elegushi/496849-a-standard-room-selfcon-at-ikate-lekki'),
(100, 'For Rent', 'Ikate', 3, 1, 'Studio Apartment', 700000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/ikate-elegushi/621328-a-single-room-apartment'),
(101, 'For Rent', 'Ikate', 3, 1, 'Studio Apartment', 800000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/ikate-elegushi/629536-nice-and-spacious-self-containedliving-room'),
(102, 'For Rent', 'Ikate', 3, 1, 'Studio Apartment', 900000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/ikate-elegushi/632679-a-new-opening-for-a-very-spacious-roomself-at-lekki'),
(103, 'For Rent', 'Ikate', 3, 1, 'Studio Apartment', 1100000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/ikate-elegushi/630218-service-studio-apartment-ground-floor'),
(104, 'For Rent', 'Ikate', 3, 1, 'Studio Apartment', 1200000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/self-contained/lagos/lekki/ikate-elegushi/617005-studio-apartment'),
(105, 'For Rent', 'Ikate', 3, 1, '1 bedroom', 1300000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/615817-new-upper-floor-miniflat'),
(106, 'For Rent', 'Ikate', 3, 1, '1 bedroom', 1400000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/625182-newly-built-luxury-1-bedroom-fully-finished-and-fully-serviced-upper-f'),
(107, 'For Rent', 'Ikate', 3, 1, '1 bedroom', 1500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/590146-lovely-and-super-standard-miniflat-by-ikate-nicon-town-for-n15m'),
(108, 'For Rent', 'Ikate', 3, 1, '1 bedroom', 1600000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/519974-1bedroom-mini-flat-a-room-and-parlor-in-ikate-elegushi-for-rent'),
(109, 'For Rent', 'Ikate', 3, 1, '1 bedroom', 2000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/574168-luxury-mini-flat-service'),
(110, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 3000000, 'Property pro.com', 'https://www.propertypro.ng/property/2-bedroom-terraced-duplex-house-for-rent-freedom-way-ikate-lekki-lagos-3DDMA'),
(111, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 2000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/2-bed-serviced-flat-apartment-for-rent-ikate-ikate-elegushi-jast0167'),
(112, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 2500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/2-bed-serviced-terrace-for-rent-ikate-elegushi-sdly1273'),
(113, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 1500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/624473-newly-built-luxury-2-bedroom-fully-finished-and-fully-serviced-upper-f'),
(114, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 1800000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/630785-standard-2bedroom-duplex'),
(115, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 2000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/591993-tasteful-2-bedroom-flat'),
(116, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 2200000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/563123-2-bedroom-flat-lekki-ikate-phase-1'),
(117, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 2300000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/575109-fully-serviced-2-bedroom-flat'),
(118, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 2500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/622724-luxury-2-bedroom-terrace-duplex'),
(119, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 2600000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/562131-serviced-luxury-all-ensuite-2-bedroom-apartment'),
(120, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 2800000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/489081-2-bedroom-serviced-flat-24hr-light-ikate-lekki-phase-one-'),
(121, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 3000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/566452-brand-new-serviced-2bedroom-flat-for-behind-meadow-hall-ikate-n3m'),
(122, 'For Rent', 'Ikate', 3, 1, '2 bedroom', 3500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/622763-newly-built-luxury-2-bedroom-fully-furnished-and-fully-serviced-upper'),
(123, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 2000000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-semi-detached-duplex-house-for-rent-ikate-lekki-lagos-5DABK'),
(124, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 2500000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-blocks-of-flats-house-for-rent-kusenla-road-ikate-lekki-lagos-6DHBL'),
(125, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 3200000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-house-for-rent-ikate-lekki-lagos-7DCUV'),
(126, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 3500000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-blocks-of-flats-house-for-rent-prime-water-garden-ikate-lekki-lagos-0CUWS'),
(127, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 3800000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-rent-ikate-ikate-lekki-lagos-5CVAX'),
(128, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 4000000, 'Property pro.com', 'https://www.propertypro.ng/property/3-bedroom-blocks-of-flats-house-for-rent-ikate-lekki-lagos-6DHBM'),
(129, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 1600000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/622767-newly-built-luxury-3-bedroom-fully-finished-and-fully-serviced-upper-f'),
(130, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 1800000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/585557-3-bedroom-flat'),
(131, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 2000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/630633-brand-new-3-bedroom-flat'),
(132, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 2400000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/616671-well-maintain-3-bedroom-flat'),
(133, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 2500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/630657-newly-built-luxury-3-bedroom-fully-finished-and-fully-serviced-upper-f'),
(134, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 2900000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/489814-newly-built-contemporary-styled-3-bedroom-serviced-apartment-with-state-of-the-art-finishing'),
(135, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 3000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/624339-luxury-three-bedroom-flat'),
(136, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 3300000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/625621-2-bedroom-furnished-apartment'),
(137, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 3500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/576444-luxury-3bedroom-ensuite-apartment-with-bq-with-24hrs-power'),
(138, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 4000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/flats-apartments/lagos/lekki/ikate-elegushi/620110-luxury-3-bedroom-pent-house'),
(139, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 2500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-flat-apartment-for-rent-lekki-ikate-elegushi-cw0516'),
(140, 'For Rent', 'Ikate', 3, 1, '3 bedroom', 3000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-duplex-for-rent-ikate-ikate-elegushi-clpi0098'),
(141, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 2500000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-ikate-elegushi-lekki-ikate-lekki-lagos-5DFUQ'),
(142, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 2900000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-ikate-lekki-lagos-6CVGD'),
(143, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 3000000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-platinum-way-ikate-lekki-lagos-6DHFA'),
(144, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 3200000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-ikate-ikate-lekki-lagos-4CLBY'),
(145, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 3500000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-ikate-elegushi-lekki-ikate-lekki-lagos-4DFUT'),
(146, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 4000000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-ikate-elegushi-lekki-ikate-lekki-lagos-0DCJS'),
(147, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 4500000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-ikate-elegushi-ikate-lekki-lagos-6DFXK'),
(148, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 5000000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-abiola-court-ikate-lekki-lagos-9DGPS'),
(149, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 6000000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-ikate-lekki-lagos-6DFCN'),
(150, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 7500000, 'Property pro.com', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-rent-off-freedom-way-ikate-lekki-lagos-9DGJU'),
(151, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 3000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/627066-lovely-4bedroom-terrace-duplex-and-bq'),
(152, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 3500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/628821-new-4-bedroom-terraved-duplex-bq'),
(153, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 4000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/567613-4-bedroom-terrace-duplex-in-ikate'),
(154, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 4500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/602154-fully-serviced-4-bedroom-terrace-duplex'),
(155, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 5000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/623452-fully-serviced-4-bed-terrace-duplex-with-bq'),
(156, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 6500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-rent/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/613386-newly-built-service-4-bedroom-terrace-duplex-in-a-serene-and-secured-n'),
(157, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 3000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-kunsela-road-ikate-elegushi-sdly1338'),
(158, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 3500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-duplex-for-rent-ikate-ikate-elegushi-jast89740'),
(159, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 4000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-semi-detached-serviced-duplex-for-rent-ikate-ikate-elegushi-htpl0154'),
(160, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 4500000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-innocent-idibia-ikate-elegushi-sdly1197'),
(161, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 5000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-off-elegushi-road-ikate-elegushi-sdly1156'),
(162, 'For Rent', 'Ikate', 3, 1, '4 terrace duplex', 6000000, 'Private Property Nigeria.com', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-rent-jakande-ikate-elegushi-sdly1234');

-- --------------------------------------------------------

--
-- Table structure for table `houses_sale`
--

CREATE TABLE `houses_sale` (
  `house_id` int(11) NOT NULL,
  `category` varchar(8) DEFAULT NULL,
  `area` varchar(17) DEFAULT NULL,
  `area_id` int(30) NOT NULL,
  `state_id` int(30) NOT NULL,
  `type` varchar(16) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `webite` varchar(30) DEFAULT NULL,
  `link` varchar(215) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `houses_sale`
--

INSERT INTO `houses_sale` (`house_id`, `category`, `area`, `area_id`, `state_id`, `type`, `price`, `webite`, `link`) VALUES
(1, 'For Sale', 'Lekki Phase 1', 1, 1, '1 bedroom', 15000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/self-contained/lagos/lekki/lekki-phase-1/533945-fully-serviced-studio-aprtment'),
(2, 'For Sale', 'Lekki Phase 1', 1, 1, '1 bedroom', 20000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-sale/houses/block-of-flats/lagos/lekki/lekki-phase-1/598152-luxury-1-bedroom-studio-apartment'),
(3, 'For Sale', 'Lekki Phase 1', 1, 1, '1 bedroom', 45000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/450518-luxury-flats-on-the-lekki-lagoon-waterfront-'),
(4, 'For Sale', 'Lekki Phase 1', 1, 1, '1 bedroom', 45000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/577708-luxury-1-bedroom-block-of-flat'),
(5, 'For Sale', 'Lekki Phase 1', 1, 1, '1 bedroom', 45000000, ' Property pro.com ', 'https://www.propertypro.ng/property/1-bedroom-mini-flat-blocks-of-flats-house-for-sale-admiralty-road-lekki-phase-1-lekki-lagos-3DEEA'),
(6, 'For Sale', 'Orchid Road Hotel', 2, 1, '1 bedroom', 20000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lafiaji/477075-luxuriously-finished-1-bedroom-duplex-by-chevron-toll-lekki-'),
(7, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 50000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-house-for-sale-lekki-phase-1-lekki-lagos-9CZGR'),
(8, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 50000000, ' Castles.com ', 'https://castles.com.ng/property/a-well-maintained-2-bedroom-terrace-for-sale-at-lekki'),
(9, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 50000000, ' Castles.com ', 'https://castles.com.ng/property/brand-new-luxury-two-2-bedrooms-maisonette-for-sale-at-lekki-phase-1'),
(10, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 65000000, ' Castles.com ', 'https://castles.com.ng/property/2-bedroom-penthouse-for-sale-at-lekki-phase-1'),
(11, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 20500000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/detached-duplexes/lagos/lekki/lekki-phase-1/629463-exclusive-2bed-room-duplex-well-equippet-with-allhouse-holdat-lekki'),
(12, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 35000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/387444-fully-furnished-2-bedroom-apartment'),
(13, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 36000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/542135-fully-serviced-brand-new-2bedroom-flat'),
(14, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 38000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/460780-2-bedroom-service-flats'),
(15, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 40000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/563151-2-bedroom-flat-serviced-24hr-light-ikate-elegushi-lekki-phase-1'),
(16, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 45000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/619480-block-of-brand-new-2bedroom-flat'),
(17, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 50000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/622874-luxury-2-bedrooms-at-richmond-estate'),
(18, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 55000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/372654-a-2-bedroom-flat-located-in-a-serene-area-of-lekki-phase-1'),
(19, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 60000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/279970-massive-luxury-2-bedroom-penthouse-flat-for-sale-at-lekki-right'),
(20, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 65000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/block-of-flats/lagos/lekki/lekki-phase-1/599317-8nos-2-bedroom-luxury-apartments-with-excellent-facilities'),
(21, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 50000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/2-bed-detached-semi-detached-serviced-duplex-for-sale-along-nike-art-gallery-way-lekki-phase-1-lekki-phase-1-arrd0010'),
(22, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 52000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/2-bed-serviced-flat-apartment-for-sale-lekki-phase-1-cw0611'),
(23, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 55000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/2-bed-serviced-duplex-for-sale-lekki-phase-1-jire0225'),
(24, 'For Sale', 'Lekki Phase 1', 1, 1, '2 bedroom', 60000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/2-bed-serviced-flat-apartment-for-sale-lekki-phase-1-cw88950'),
(25, 'For Sale', 'Orchid Road Hotel', 2, 1, '2 bedroom', 35000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/2-bed-flat-apartment-for-sale-orchid-hotel-road-lekki-expressway-geik89333'),
(26, 'For Sale', 'Orchid Road Hotel', 2, 1, '2 bedroom', 35000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-house-for-sale-orchid-hotel-road-chevron-lekki-lagos-7DFJN'),
(27, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 27000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-blocks-of-flats-house-for-sale-horizon-estates-lekki-phase-1-lekki-lagos-2DGPW'),
(28, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 34000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-detached-duplex-house-for-sale-ikate-lekki-phase-1-lekki-lagos-8CXSC'),
(29, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 45000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-lekki-gardens-lekki-phase-1-lekki-lagos-8DCQH'),
(30, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 50000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-house-for-sale-babatope-bejide-street-lekki-phase-1-lekki-lagos-8CDWJ'),
(31, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 55000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-blocks-of-flats-house-for-sale-lekki-phase-1-lekki-lagos-7CVGN'),
(32, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 60000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-blocks-of-flats-house-for-sale-off-tf-kuboye-street-lekki-phase-one-lekki-phase-1-lekki-lagos-7CYBS'),
(33, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 75000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-right-lekki-phase-1-lekki-lagos-4CVCV'),
(34, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 78000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-off-admiralty-road-lekki-phase-1-lekki-lagos-4DFLC'),
(35, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 80000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-house-for-sale-lekki-phase-1-lekki-lagos-0DDPG'),
(36, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 85000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-blocks-of-flats-house-for-sale-lekki-phase-1-lekki-lagos-7DBVK'),
(37, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 33000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/625582-3-bedroom-terrace-duplex-with-bq'),
(38, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 35000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/detached-duplexes/lagos/lekki/lekki-phase-1/615002-3-bedroom-maisonette-at-lekki-ajah-in-a-beautiful-estate'),
(39, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 40000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/630369-2-bedroom-apartment'),
(40, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 45000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/596916-10-spacious-apartments-now-available'),
(41, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 50000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/591997-luxury-3-bedroom-penthouse-apartment'),
(42, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 55000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/608595-luxury-3-bedroom-flat-in-lekki-phase-1'),
(43, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 65000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/semi-detached-duplexes/lagos/lekki/lekki-phase-1/520775-3-beedroom-semi-detached-duplex-lekki-phase-1'),
(44, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 75000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/618771-fully-serviced-3br-flat-with-boysquater-at-lekki-phase-1-n75mill'),
(45, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 80000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/block-of-flats/lagos/lekki/lekki-phase-1/628834-brand-new-3bedroom-with-bq-contemporary-architectural-design'),
(46, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 85000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lekki-phase-1/619668-brand-new-and-lavishly-finished-luxury-3-bedroom-apartment'),
(47, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 38000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-duplex-for-sale-phase-1-lekki-phase-1-davr90600'),
(48, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 45000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-flat-apartment-for-sale-lekki-phase-1-cw0502'),
(49, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 60000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-flat-apartment-for-sale-lekki-phase-1-cw89957'),
(50, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 70000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-duplex-for-sale-admiralty-lekki-phase-1-misa1023'),
(51, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 78000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-duplex-for-sale-off-admiralty-way-lekki-phase-1-undh89290'),
(52, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 80000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-flat-apartment-for-sale-phase-1-lekki-phase-1-ehsl89730'),
(53, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 85000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-terrace-for-sale-lekki-right-side-lekki-phase-1-aman0065'),
(54, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 100000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-flat-apartment-for-sale-lekki-phase-1-cw0555'),
(55, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 115000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-duplex-for-sale-off-admiralty-road-lekki-phase-1-lekki-phase-1-joos1207'),
(56, 'For Sale', 'Lekki Phase 1', 1, 1, '3 bedroom', 120000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-duplex-for-sale-lekki-phase-1-ybel0045'),
(57, 'For Sale', 'Orchid Road Hotel', 2, 1, '3 bedroom', 33000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-on-orchid-road-2-mins-drive-away-from-orchid-hotel-chevron-lekki-lagos-2DDFF'),
(58, 'For Sale', 'Orchid Road Hotel', 2, 1, '3 bedroom', 36000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-victorias-crest-phase-3-off-orchid-hotel-road-lekki-lagos-6CVAN'),
(59, 'For Sale', 'Orchid Road Hotel', 2, 1, '3 bedroom', 37500000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-buena-vista-estate-via-orchid-hotel-road-lafiaji-lekki-chevron-lekki-lagos-4DEKE'),
(60, 'For Sale', 'Orchid Road Hotel', 2, 1, '3 bedroom', 38000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-orchid-hotel-road-opposite-chevron-chevron-lekki-lagos-0DCEL'),
(61, 'For Sale', 'Orchid Road Hotel', 2, 1, '3 bedroom', 42000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-orchid-hotel-road-chevron-lekki-lagos-3DGKK'),
(62, 'For Sale', 'Orchid Road Hotel', 2, 1, '3 bedroom', 28000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lafiaji/565022-well-finished-3-bedrooms-flat-close-to-orchid-hotel'),
(63, 'For Sale', 'Orchid Road Hotel', 2, 1, '3 bedroom', 35000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-duplex-for-sale-orchid-road-lafiaji-cw0407'),
(64, 'For Sale', 'Orchid Road Hotel', 2, 1, '3 bedroom', 40000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-terrace-for-sale-off-orchid-hotel-road-lafiaji-symt0013'),
(65, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 47000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-chevron-estate-in-lekki-lekki-phase-1-lekki-lagos-9CYEC'),
(66, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 70000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-elegushi-lekki-phase-1-lekki-lagos-0DEQP'),
(67, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 75000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-lekki-phase-1-lekki-lagos-4CZZG'),
(68, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 80000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-lekki-phase-1-lekki-lagos-1DCSU'),
(69, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 85000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-road-14-lekki-phase-1-lekki-lagos-9CVBJ'),
(70, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 90000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-between-1st-and-2nd-roundabout-lekki-phase-1-lekki-lagos-6CMFX'),
(71, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 100000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-lekki-phase1-lekki-phase-1-lekki-lagos-3CYSW'),
(72, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 110000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-lekki-phase-1-lekki-lagos-7DFTF'),
(73, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 115000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-lekki-phase-1-lekki-lagos-3DGRA'),
(74, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 120000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-lekki-phase1-lekki-phase-1-lekki-lagos-3DGCF'),
(75, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 55000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/551106-4-bedroom-terraced-duplex'),
(76, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 65000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/518392-hot-72-hours-sale-of-4-bedroom-terrace-duplex'),
(77, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 75000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/570005-luxury-4-bedroom-terraced-duplexes'),
(78, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 80000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/568653-mind-blowing-4bedroom-duplex-with-bq'),
(79, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 95000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/574962-luxury-4-bedroom-terraced-duplex-self-serviced'),
(80, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 110000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/598843-newly-built-4-bedroom-terrace-at-lekki-phase-1-lagos'),
(81, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 115000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/574034-beautifully-built-4-bedroom-terrace-duplex'),
(82, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 120000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/619706-luxury-4bedroom-terrance-duplex'),
(83, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 135000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/593056-4-bedroom-terraced-duplex-with-bq-lagoon-view-swimming-poolgym'),
(84, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 150000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lekki-phase-1/627316-exquisite-5-bedroom-terrace-duplex-bq-fitted-kitchen'),
(85, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 70000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-terrace-for-sale-off-providence-road-lekki-phase-1-sdly1151'),
(86, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 75000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-duplex-for-sale-white-sands-school-area-lekki-phase-1-kems1025'),
(87, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 85000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-semi-detached-duplex-for-sale-lekki-phase-one-lekki-lekki-phase-1-ibpi0209'),
(88, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 90000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-duplex-for-sale-lekki-phase-1-eksc1278'),
(89, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 95000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-duplex-for-sale-lekki-1-lekki-phase-1-cw0415'),
(90, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 100000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-sale-off-admiralty-road-lekki-phase-1-juob0031'),
(91, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 110000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-sale-ayodele-odubuyi-lekki-phase-1-olaj0020'),
(92, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 120000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-duplex-for-sale-lekki-1-lekki-phase-1-cw0480'),
(93, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 125000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-terrace-for-sale-lekki-phase-1-ewmk2671'),
(94, 'For Sale', 'Lekki Phase 1', 1, 1, '4 terrace duplex', 140000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-duplex-for-sale-lekki-1-lekki-phase-1-cw0521'),
(95, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 38000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-orchild-road-chevron-lekki-lagos-0CXPF'),
(96, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 40000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-orchid-hotel-road-lekki-phase-2-lekki-lagos-0DGXW'),
(97, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 45000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-orchid-hotel-road-chevron-lekki-lagos-0CYHJ'),
(98, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 53000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-orchid-hotel-road-oral-estate-lekki-lagos-3DGXF'),
(99, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 35000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lafiaji/436159-distress-sale-terrace-duplex'),
(100, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 42000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/lafiaji/617309-spacious-2bedroom-flat'),
(101, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 50000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lafiaji/512282-4bedroom-duplex-for-sale-at-ochid-lafiaji-lekki'),
(102, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 53000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lafiaji/626865-luxury-brand-new-4-bedroom'),
(103, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 65000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/lafiaji/619815-luxury-4bedroom-terrace-duplex'),
(104, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 40000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-duplex-for-sale-orchid-road-lafiaji-eunv90425'),
(105, 'For Sale', 'Orchid Road Hotel', 2, 1, '4 terrace duplex', 43000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-sale-orchid-lafiaji-oprc89818'),
(106, 'For Sale', 'Ikate', 3, 1, 'Studio Apartment', 15000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/self-contained/lagos/lekki/ikate-elegushi/566074-fully-furnished-and-serviced-one-studio-apartment'),
(107, 'For Sale', 'Ikate', 3, 1, 'Studio Apartment', 16000000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/587288-studio-apartment'),
(108, 'For Sale', 'Ikate', 3, 1, 'Studio Apartment', 18500000, 'Nigerian Property Centre.com', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/627914-luxury-one-bedroom-flat-type-b-57264sqm'),
(109, 'For Sale', 'Ikate', 3, 1, 'Studio Apartment', 19500000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/561979-luxury-one-bedroom-flat-type-c'),
(110, 'For Sale', 'Ikate', 3, 1, 'Studio Apartment', 25000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/611378-off-plan-1-bedroom-studio-apartment-serviced'),
(111, 'For Sale', 'Ikate', 3, 1, '1 bedroom', 25000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/585119-luxurious-1-bedroom-apartment-designed-with-european-fittings'),
(112, 'For Sale', 'Ikate', 3, 1, '1 bedroom', 28000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/563149-mini-flat-one-bedroom-24hr-light-serviced-lekki-phase-1'),
(113, 'For Sale', 'Ikate', 3, 1, '1 bedroom', 30000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/502951-brand-new-and-lavishly-finished-1-one-bedroom-apartment'),
(114, 'For Sale', 'Ikate', 3, 1, '1 bedroom', 32000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/mini-flats/lagos/lekki/ikate-elegushi/596301-luxury-one-bedroom-apartment'),
(115, 'For Sale', 'Ikate', 3, 1, '1 bedroom', 28000000, 'Property pro.com', 'https://www.propertypro.ng/property/1-bedroom-mini-flat-blocks-of-flats-house-for-sale-ikate-lekki-lagos-6DBAR'),
(116, 'For Sale', 'Ogombo', 4, 1, '1 bedroom', 12500000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/mini-flats/lagos/ajah/ogombo/632541-luxury-1-bedroom-flat-with-class'),
(117, 'For Sale', 'Ogombo', 4, 1, '1 bedroom', 14500000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/ajah/ogombo/629549-one-bedroom-apartment'),
(118, 'For Sale', 'Ogombo', 4, 1, '1 bedroom', 18000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/block-of-flats/lagos/ajah/ogombo/630780-2-bedroom-apartment-at-urban-prime'),
(119, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 25000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-blocks-of-flats-house-for-sale-ikate-ikate-lekki-lagos-3CXTP'),
(120, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 28000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-house-for-sale-ikate-lekki-lagos-3CYTQ'),
(121, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 30000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-blocks-of-flats-house-for-sale-ikate-lekki-lagos-7DFRW'),
(122, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 37000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-blocks-of-flats-house-for-sale-ikate-lekki-lagos-3CZJL'),
(123, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 45000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-massionette-house-for-sale-ikate-elegushi-alma-beach-estate-immediately-after-lekki-phase-1-entry-is-from-nike-art-gallery-former-3rd-round-about-ikate-lekki-lagos-2CKBJ'),
(124, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 50000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-blocks-of-flats-house-for-sale-spar-road-ikate-lekki-lagos-4DENX'),
(125, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 75000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-terraced-duplex-house-for-sale-closed-to-madiba-enclave-ikate-lekki-lagos-1DFAF'),
(126, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 25000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/block-of-flats/lagos/lekki/ikate-elegushi/592137-affordable-luxury-home-with-flexible-payment-plan-for-1-15-years'),
(127, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 26000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/292823-2-bedroom-flat-with-excellent-benefits'),
(128, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 35000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/611905-off-plan-2-bedroom-terrace-apartment-serviced'),
(129, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 40000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/556197-luxury-finished-2-bedroom-flats'),
(130, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 42000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/lagos/lekki/ikate-elegushi/399014-luxury-2-bedroom-maisonette-'),
(131, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 43000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/484246-for-sale-2bedroom-flat-at-richmond-estate-lekki'),
(132, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 45000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/612651-2-bedroom-luxury-maisonette'),
(133, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 48000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/626890-2-bedroom-luxury-flat'),
(134, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 50000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/626066-2-bedroom-apartment'),
(135, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 55000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/503478-2-bedrooms-penthouse-flat-for-sale-in-ikate'),
(136, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 35000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/2-bed-serviced-flat-apartment-for-sale-ikate-ikate-elegushi-dups0015'),
(137, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 40000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/2-bed-flat-apartment-for-sale-ikate-elegushi-geik88899'),
(138, 'For Sale', 'Ikate', 3, 1, '2 bedroom', 48000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/2-bed-serviced-flat-apartment-for-sale-ikate-ikate-elegushi-cw0600'),
(139, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 20500000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-blocks-of-flats-house-for-sale-ogombo-road-off-abraham-adesanya-urban-lavadia-estate-ogombo-ajah-lagos-6DCUA'),
(140, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 25000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-blocks-of-flats-house-for-sale-off-ogombo-road-lekki-scheme-2-ajah-abraham-adesanya-estate-ajah-lagos-1CYSB'),
(141, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 35000000, ' Property pro.com ', 'https://www.propertypro.ng/property/2-bedroom-house-for-sale-ogombo-road-abraham-adesanya-estate-ajah-lagos-2DFJD'),
(142, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 18000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/ajah/ogombo/623034-2-bedroom-apartment'),
(143, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 18500000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/ajah/ogombo/490952-luxury-2-bedroom'),
(144, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 20500000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/block-of-flats/lagos/ajah/ogombo/629556-2-bedroom-apartment'),
(145, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 23000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/ajah/ogombo/610676-brand-new-contemporary-two-bed-apartment'),
(146, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 25000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/490973-premium-2-bedroom-terraced'),
(147, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 29000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/567304-urban-prime1-estate-ajah-lekki-with-c-of-o'),
(148, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 35000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/632390-prime-2-bedroom-terrace-duplex'),
(149, 'For Sale', 'Ogombo', 4, 1, '2 bedroom', 46000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/545957-spacious-and-ventilated-smart-4-bedroom-terrace-duplex-in-a-smart-and-secured-estate'),
(150, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 34000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-detached-duplex-house-for-sale-ikate-lekki-phase-1-lekki-lagos-8CXSC'),
(151, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 35000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-gbangbala-street-ikate-lekki-lagos-0DEZT'),
(152, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 40000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-semi-detached-duplex-house-for-sale-ilasan-other-side-of-ikate-elegushi-jakande-lekki-lagos-5CYPD'),
(153, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 45000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-semi-detached-duplex-house-for-sale-ikate-elegushi-ikate-lekki-lagos-7DHCY'),
(154, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 50000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-semi-detached-duplex-house-for-sale-ikate-lekki-lagos-1DEQW'),
(155, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 65000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-house-for-sale-ikate-lekki-lagos-6DBWJ'),
(156, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 70000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-massionette-house-for-sale-ikate-lekki-lagos-5CPLS'),
(157, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 75000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-meadow-hall-road-ikate-lekki-lagos-9CJUP'),
(158, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 120000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-elegushi-ikate-lekki-lagos-9DFDN'),
(159, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 125000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-house-for-sale-close-to-lekki-1-ikate-lekki-lagos-9CVLA'),
(160, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 25000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/624957-luxury-3-bedroom-apartments-on-maisonettes'),
(161, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 35000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/599139-3-bedroom-terrace-duplex'),
(162, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 40000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/385707-3-bedroom-serviced-flat-'),
(163, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 45000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/semi-detached-duplexes/lagos/lekki/ikate-elegushi/623105-3bedroom-semi-detached-duplex'),
(164, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 50000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/545517-new-3-bedroom-luxury-apartment-fully-serviced'),
(165, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 55000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/lagos/lekki/ikate-elegushi/617517-luxury-3bedrooms-1bq-flat-at-ikatelekkilagosn55m'),
(166, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 60000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/lagos/lekki/ikate-elegushi/629164-luxury-3bedrooms-terrace-house-with-bq'),
(167, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 65000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/622504-3-bedrooms-maisonette'),
(168, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 85000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/block-of-flats/lagos/lekki/ikate-elegushi/594169-luxury-3-bedrooms-flat-with-excellent-facilities'),
(169, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 30000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-mini-self-contained-semi-detached-serviced-duplex-for-sale-off-kusenla-road-ikate-elegushi-maxi0053'),
(170, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 45000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-semi-detached-house-for-sale-ikate-ikate-elegushi-norh0139'),
(171, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 52000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-detached-serviced-duplex-for-sale-by-world-oil-ikate-elegushi-maxi0003'),
(172, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 55000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-duplex-for-sale-bayview-estate-ikate-elegushi-misa1019'),
(173, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 65000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-duplex-for-sale-ikate-elegushi-cw0541'),
(174, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 70000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-serviced-terrace-for-sale-seagate-estate-ikate-elegushi-bmbp1022'),
(175, 'For Sale', 'Ikate', 3, 1, '3 bedroom', 75000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/3-bed-self-contained-semi-detached-serviced-townhouse-for-sale-richmond-estate-haven-homes-ikate-elegushi-maxi0062'),
(176, 'For Sale', 'IIsan', 5, 1, '3 bedroom', 35000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-semi-detached-duplex-house-for-sale-ilasan-jakande-lekki-phase-1-lekki-lagos-3DEBA'),
(177, 'For Sale', 'IIsan', 5, 1, '3 bedroom', 40000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-semi-detached-duplex-house-for-sale-ilasan-other-side-of-ikate-elegushi-jakande-lekki-lagos-5CYPD'),
(178, 'For Sale', 'IIsan', 5, 1, '3 bedroom', 50000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-ilasan-lekki-lagos-2CVGL'),
(179, 'For Sale', 'IIsan', 5, 1, '3 bedroom', 52000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-house-for-sale-ilasan-lekki-lagos-2CUKZ'),
(180, 'For Sale', 'IIsan', 5, 1, '3 bedroom', 55000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-knox-residences-ilasan-lekki-lagos-0CNAQ'),
(181, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 31000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-abraham-adesanya-off-ogombo-road-lbs-ibeju-lekki-lagos-4DEVR'),
(182, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 38000000, ' Property pro.com ', 'https://www.propertypro.ng/property/3-bedroom-terraced-duplex-house-for-sale-urban-prime-two-estate-sangotedo-ajah-lagos-0DFGX'),
(183, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 15000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/detached-bungalows/lagos/ajah/ogombo/599091-this-will-blow-your-mind'),
(184, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 20000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/386728-fully-finished-3-bedroom-terraced-duplex-with-attached-bq'),
(185, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 25000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/flats-apartments/mini-flats/lagos/ajah/ogombo/632320-hot-promo-deposit-n1m-3-bedroom-luxury-apartments'),
(186, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 27000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/624396-tastefully-finish-3bedrm-terrace-with-bq'),
(187, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 31000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/629513-3-bedroom-terrace-duplex'),
(188, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 35000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/456610-3-bedroom-duplex'),
(189, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 38000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/626847-lavadia-urban-prime-two-estate'),
(190, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 43000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/detached-duplexes/lagos/ajah/ogombo/618492-3-bedrooms-semi-detached-duplex-at-lavadia-estate'),
(191, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 45000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/block-of-flats/lagos/ajah/ogombo/496604-block-of-4-flats-of-3-bedroom'),
(192, 'For Sale', 'Ogombo', 4, 1, '3 bedroom', 65000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/block-of-flats/lagos/ajah/ogombo/468761-standard-3bedroom-flats'),
(193, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 37000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-close-to-alternate-chevron-road-lekki-ikate-lekki-lagos-1DEYU'),
(194, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 40000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ikate-lekki-lagos-5CVKU'),
(195, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 55000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-springbay-estate-3-bakare-street-off-ayigoro-street-ikate-elegushi-ikate-lekki-lagos-4CWXD'),
(196, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 65000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ikate-lekki-lagos-5CXEG'),
(197, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 68000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ologolo-ikate-lekki-lagos-4DHPS'),
(198, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 70000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ikate-lekki-lagos-4CUGV'),
(199, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 73000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-off-kusenla-road-ikate-lekki-lagos-4DGYB'),
(200, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 75000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ikate-lekki-lagos-8DDNJ'),
(201, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 77000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ikate-lekki-lagos-9CYVM'),
(202, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 80000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ikate-lekki-ikate-lekki-lagos-1CZAR'),
(203, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 40000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/401595-nicely-built-4-bedroom-terraced-duplex-for-sale'),
(204, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 50000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/399842-well-built-4-bedroom-terraced-duplex-'),
(205, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 55000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/612987-1-unit-of-4-bedroom-terraced-duplex'),
(206, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 60000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/semi-detached-duplexes/lagos/lekki/ikate-elegushi/539348-4-bedroom-terrace-duplex-with-bq'),
(207, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 65000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/629304-luxury-family-friendly-4-bedroom-terrace-duplexs-for-65m'),
(208, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 70000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/detached-duplexes/lagos/lekki/ikate-elegushi/608948-brand-new-4-bedroom-serviced-terrace-duplex-with-bq-gym-and-swimming'),
(209, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 75000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/610922-neatly-finished-4bedroom-terrace-duplex'),
(210, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 80000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/617377-a-luxurious-4bedroom-terraced-duplex-with-a1rm-bq'),
(211, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 85000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/614776-newly-built-4-bedroom-service-terraced-duplex-in-a-serene-and-secured'),
(212, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 120000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/lekki/ikate-elegushi/519904-4-bedroom-terraced-duplex-with-a-maids-room-all-rooms-ensuite-fitted-kitchen'),
(213, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 32000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-terrace-for-sale-lekki-garden-by-lagos-business-school-ikate-elegushi-gknw1138'),
(214, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 47500000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-sale-just-by-heaven-homes-estate-by-meadow-hall-school-ikate-elegushi-amcl89271'),
(215, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 57000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-sale-ikate-rhs-ikate-elegushi-sbrl0200'),
(216, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 65000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-sale-ikate-ikate-elegushi-oprc0342'),
(217, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 70000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-terrace-for-sale-kunsela-road-ikate-elegushi-sdly1242'),
(218, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 75000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-furnished-semi-detached-serviced-terrace-for-sale-ikate-ikate-elegushi-my23723'),
(219, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 80000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-furnished-serviced-terrace-for-sale-ikate-ikate-elegushi-joos1091'),
(220, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 90000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-terrace-for-sale-jakande-ikate-elegushi-sdly1235'),
(221, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 95000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-detached-serviced-duplex-for-sale-ikate-ikate-elegushi-jast0078'),
(222, 'For Sale', 'Ikate', 3, 1, '4 terrace duplex', 115000000, ' Private Property Nigeria.com ', 'https://www.privateproperty.com.ng/listings/4-bed-serviced-duplex-for-sale-ikate-ikate-elegushi-fmco88925'),
(223, 'For Sale', 'IIasan', 6, 1, '4 terrace duplex', 55000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ilasan-lekki-lagos-2CUKX'),
(224, 'For Sale', 'IIasan', 6, 1, '4 terrace duplex', 60000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-romen-garden-ilasan-lekki-lagos-3CPKF'),
(225, 'For Sale', 'IIasan', 6, 1, '4 terrace duplex', 65000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ilasan-ikate-lekki-lagos-1DGXZ'),
(226, 'For Sale', 'IIasan', 6, 1, '4 terrace duplex', 68000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-ilasan-lekki-lagos-6CWDC'),
(227, 'For Sale', 'IIasan', 6, 1, '4 terrace duplex', 70000000, ' Property pro.com ', 'https://www.propertypro.ng/property/4-bedroom-terraced-duplex-house-for-sale-romay-garden-estate-ilasan-lekki-lagos-2DGKL');
INSERT INTO `houses_sale` (`house_id`, `category`, `area`, `area_id`, `state_id`, `type`, `price`, `webite`, `link`) VALUES
(228, 'For Sale', 'Ogombo', 4, 1, '4 terrace duplex', 46000000, ' Nigerian Property Centre.com ', 'https://nigeriapropertycentre.com/for-sale/houses/terraced-duplexes/lagos/ajah/ogombo/629520-4-bedroom-terrace-duplex');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(255) NOT NULL,
  `state_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`) VALUES
(1, 'Lagos');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(255) NOT NULL,
  `fullName` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `houses_rent`
--
ALTER TABLE `houses_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses_sale`
--
ALTER TABLE `houses_sale`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
