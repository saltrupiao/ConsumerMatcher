-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2021 at 11:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csiproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `affinity`
--

CREATE TABLE `affinity` (
  `CustSelectedValue` int(11) NOT NULL COMMENT 'Value that an affinity is being define for.  (Value ID:3 --> Red) ',
  `StockConfigValue` int(11) NOT NULL COMMENT 'Value for which an affinity is being defiend for.  (eg AffinityValueID: 33-> Orange)',
  `AffinityPoints` int(11) DEFAULT NULL COMMENT 'The number of Points awarded for an inventory item haveing the AffinityValue when the cusotmer chooses SelectedValue '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affinity`
--

INSERT INTO `affinity` (`CustSelectedValue`, `StockConfigValue`, `AffinityPoints`) VALUES
(1, 1, 10),
(1, 2, 4),
(1, 3, 0),
(1, 4, 8),
(2, 1, 7),
(2, 2, 10),
(2, 3, 5),
(2, 4, 5),
(3, 1, 4),
(3, 2, 7),
(3, 3, 10),
(3, 4, 0),
(4, 1, 8),
(4, 2, 4),
(4, 3, 3),
(4, 4, 10),
(5, 5, 10),
(5, 6, 7),
(5, 7, 6),
(5, 8, 6),
(5, 9, 2),
(5, 10, 0),
(6, 5, 7),
(6, 6, 10),
(6, 7, 8),
(6, 8, 5),
(6, 9, 2),
(6, 10, 2),
(7, 5, 5),
(7, 6, 7),
(7, 7, 10),
(7, 8, 9),
(7, 9, 4),
(7, 10, 3),
(8, 5, 5),
(8, 6, 7),
(8, 7, 9),
(8, 8, 10),
(8, 9, 4),
(8, 10, 3),
(9, 5, 6),
(9, 6, 3),
(9, 7, 4),
(9, 8, 6),
(9, 9, 10),
(9, 10, 8),
(10, 5, 8),
(10, 6, 2),
(10, 7, 4),
(10, 8, 6),
(10, 9, 8),
(10, 10, 10),
(11, 11, 10),
(11, 12, 7),
(11, 13, 2),
(11, 14, 0),
(12, 11, 7),
(12, 12, 10),
(12, 13, 7),
(12, 14, 2),
(13, 11, 2),
(13, 12, 7),
(13, 13, 10),
(13, 14, 7),
(14, 11, 0),
(14, 12, 2),
(14, 13, 7),
(14, 14, 10),
(15, 15, 10),
(15, 16, 4),
(16, 15, 4),
(16, 16, 10),
(17, 17, 10),
(17, 18, 4),
(17, 19, 7),
(18, 17, 6),
(18, 18, 10),
(18, 19, 7),
(19, 17, 7),
(19, 18, 4),
(19, 19, 10),
(20, 20, 10),
(20, 21, 7),
(20, 22, 4),
(20, 23, 0),
(21, 20, 7),
(21, 21, 10),
(21, 22, 4),
(21, 23, 0),
(22, 20, 2),
(22, 21, 6),
(22, 22, 10),
(22, 23, 4),
(23, 20, 0),
(23, 21, 2),
(23, 22, 5),
(23, 23, 10),
(24, 24, 10),
(24, 25, 8),
(24, 26, 4),
(25, 24, 2),
(25, 25, 10),
(25, 26, 7),
(26, 24, 0),
(26, 25, 4),
(26, 26, 10),
(27, 27, 10),
(27, 28, 6),
(27, 29, 2),
(28, 27, 6),
(28, 28, 10),
(28, 29, 6),
(29, 27, 2),
(29, 28, 6),
(29, 29, 10),
(30, 31, 10),
(30, 32, 7),
(30, 33, 2),
(30, 34, 1),
(31, 31, 7),
(31, 32, 10),
(31, 33, 7),
(31, 34, 2),
(32, 31, 2),
(32, 32, 7),
(32, 33, 10),
(32, 34, 7),
(33, 31, 0),
(33, 32, 2),
(33, 33, 7),
(33, 34, 10),
(34, 34, 10),
(34, 35, 7),
(34, 36, 3),
(34, 37, 1),
(35, 34, 5),
(35, 35, 10),
(35, 36, 7),
(35, 37, 2),
(36, 34, 2),
(36, 35, 7),
(36, 36, 10),
(36, 37, 8),
(37, 34, 1),
(37, 35, 3),
(37, 36, 8),
(37, 37, 10),
(38, 38, 10),
(38, 39, 7),
(38, 40, 2),
(38, 41, 0),
(39, 38, 7),
(39, 39, 10),
(39, 40, 5),
(39, 41, 2),
(40, 38, 2),
(40, 39, 7),
(40, 40, 10),
(40, 41, 7),
(41, 38, 3),
(41, 39, 5),
(41, 40, 7),
(41, 41, 10),
(42, 42, 10),
(42, 43, 6),
(42, 44, 2),
(43, 42, 4),
(43, 43, 10),
(43, 44, 6),
(44, 42, 2),
(44, 43, 7),
(44, 44, 10);

-- --------------------------------------------------------

--
-- Table structure for table `custmatch`
--

CREATE TABLE `custmatch` (
  `CustomerID` int(11) NOT NULL,
  `DomainID` int(11) NOT NULL,
  `StockNum` int(11) NOT NULL,
  `StockDesc` varchar(60) NOT NULL,
  `TotalPoints` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custmatch`
--

INSERT INTO `custmatch` (`CustomerID`, `DomainID`, `StockNum`, `StockDesc`, `TotalPoints`) VALUES
(1, 1, 1, '', 277),
(1, 1, 2, '', 180),
(1, 1, 3, '', 237),
(1, 1, 4, '', 247),
(1, 1, 5, '', 200),
(1, 1, 6, '', 240),
(1, 1, 7, '', 207),
(1, 1, 8, '', 240),
(1, 1, 9, '', 210),
(1, 1, 10, '', 80),
(1, 1, 11, '', 217),
(2, 1, 1, '', 32),
(2, 1, 2, '', 42),
(2, 1, 3, '', 52),
(2, 1, 4, '', 62),
(3, 1, 3, '', 33),
(3, 1, 4, '', 43),
(3, 1, 5, '', 53),
(3, 1, 6, '', 63),
(37, 1, 1, '', 102),
(37, 1, 2, '', 72),
(37, 1, 3, '', 96),
(37, 1, 4, '', 99),
(37, 1, 5, '', 92),
(37, 1, 6, '', 102),
(37, 1, 7, '', 72),
(37, 1, 8, '', 102),
(37, 1, 9, '', 84),
(37, 1, 10, '', 26),
(37, 1, 11, '', 86),
(38, 1, 1, 'Chevy Malibu, 6 Cyl, White, FWD', 79),
(38, 1, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', 67),
(38, 1, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', 76),
(38, 1, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', 79),
(38, 1, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', 75),
(38, 1, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', 85),
(38, 1, 7, 'VW Jetta,6 Cyl, Silver, FWD', 61),
(38, 1, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', 85),
(38, 1, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', 79),
(38, 1, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', 14),
(38, 1, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', 63),
(39, 1, 1, 'Chevy Malibu, 6 Cyl, White, FWD', 102),
(39, 1, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', 72),
(39, 1, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', 96),
(39, 1, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', 99),
(39, 1, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', 92),
(39, 1, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', 102),
(39, 1, 7, 'VW Jetta,6 Cyl, Silver, FWD', 72),
(39, 1, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', 102),
(39, 1, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', 84),
(39, 1, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', 26),
(39, 1, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', 86),
(42, 1, 1, 'Chevy Malibu, 6 Cyl, White, FWD', 51),
(42, 1, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', 48),
(42, 1, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', 39),
(42, 1, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', 42),
(42, 1, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', 31),
(42, 1, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', 39),
(42, 1, 7, 'VW Jetta,6 Cyl, Silver, FWD', 45),
(42, 1, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', 39),
(42, 1, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', 45),
(42, 1, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', 25),
(42, 1, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', 22),
(43, 1, 1, 'Chevy Malibu, 6 Cyl, White, FWD', 41),
(43, 1, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', 31),
(43, 1, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', 40),
(43, 1, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', 41),
(43, 1, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', 41),
(43, 1, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', 43),
(43, 1, 7, 'VW Jetta,6 Cyl, Silver, FWD', 31),
(43, 1, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', 43),
(43, 1, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', 37),
(43, 1, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', 10),
(43, 1, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', 37);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL COMMENT 'Key for customer table\n',
  `CustName` varchar(45) DEFAULT NULL COMMENT 'Name of customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustName`) VALUES
(1, 'Sal'),
(2, 'Rich'),
(3, 'Dr. Singh'),
(4, 'Pragati'),
(5, 'Zimo'),
(6, 'ST'),
(7, 'SDT'),
(8, 'Test 2'),
(9, 'SDTWS'),
(10, 'Test 3'),
(11, 'John Smith II'),
(12, 'JS 3'),
(13, 'JS 4'),
(14, 'JS 5'),
(15, 'JS 6'),
(16, 'JS 7'),
(17, 'JS 8'),
(18, 'JS 10'),
(19, 'JS 11'),
(20, 'JS 12'),
(21, 'JS 13'),
(22, 'JS 14'),
(23, 'JS 15'),
(24, 'JS 16'),
(25, 'SDT 123'),
(26, 'SDT 45'),
(27, 'SDT 6'),
(28, 'SDT 7'),
(29, 'SDT 8'),
(30, 'SDT 9'),
(31, 'SDT 10'),
(32, 'JS 17'),
(33, 'SDT 18'),
(34, 'SDT 19'),
(35, 'SDT 20'),
(36, 'SDT 21'),
(37, 'SDT 22'),
(38, 'SDT 24'),
(39, 'SDT 25'),
(40, 'SDT 26'),
(41, 'SDT 28'),
(42, 'SDT 30'),
(43, 'SDT 31');

-- --------------------------------------------------------

--
-- Table structure for table `custprofile`
--

CREATE TABLE `custprofile` (
  `CustomerID` int(11) NOT NULL,
  `DomainID` int(11) NOT NULL,
  `FeatureID` int(11) NOT NULL COMMENT 'ID of  the feature',
  `DesiredFeatureValue` int(11) DEFAULT NULL COMMENT 'This references the key in FeatureValue table ',
  `DesiredFeatureValueName` varchar(25) NOT NULL,
  `Multiplier` int(11) DEFAULT NULL COMMENT 'Multiplier value for the feature, that is how important the feature is to the customer.   Not important would have low value, important features would have highe value.   Will need to do analysis to determine the right range. (maybe 1-5?, 1-10?, 1-20?, ....'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custprofile`
--

INSERT INTO `custprofile` (`CustomerID`, `DomainID`, `FeatureID`, `DesiredFeatureValue`, `DesiredFeatureValueName`, `Multiplier`) VALUES
(1, 1, 1, 1, '', 5),
(1, 1, 2, 5, '', 10),
(1, 1, 3, 11, '', 1),
(1, 1, 4, 15, '', 5),
(1, 1, 5, 17, '', 10),
(2, 1, 1, 2, '', 2),
(2, 1, 2, 8, '', 3),
(2, 1, 3, 12, '', 4),
(2, 1, 4, 15, '', 5),
(2, 1, 5, 19, '', 6),
(3, 1, 1, 3, '', 10),
(3, 1, 2, 9, '', 9),
(3, 1, 3, 14, '', 8),
(3, 1, 4, 16, '', 7),
(3, 1, 5, 18, '', 6),
(4, 1, 1, 4, '', 10),
(4, 1, 2, 9, '', 5),
(4, 1, 3, 11, '', 5),
(4, 1, 4, 15, '', 7),
(4, 1, 5, 19, '', 6),
(5, 1, 1, 2, '', 5),
(5, 1, 2, 5, '', 2),
(5, 1, 3, 11, '', 10),
(5, 1, 4, 16, '', 7),
(5, 1, 5, 17, '', 10),
(32, 1, 1, 1, 'SUV', 3),
(32, 1, 2, 5, 'White', 1),
(32, 1, 3, 11, '4 Cyl', 2),
(32, 1, 4, 15, 'Automatic', 3),
(32, 1, 5, 17, 'Front Wheel Drive', 1),
(33, 1, 1, 1, 'SUV', 1),
(33, 1, 2, 5, 'White', 3),
(33, 1, 3, 11, '4 Cyl', 2),
(33, 1, 4, 15, 'Automatic', 3),
(33, 1, 5, 17, 'Front Wheel Drive', 1),
(34, 1, 1, 1, 'SUV', 2),
(34, 1, 2, 5, 'White', 3),
(34, 1, 3, 11, '4 Cyl', 1),
(34, 1, 4, 15, 'Automatic', 2),
(34, 1, 5, 17, 'Front Wheel Drive', 2),
(35, 1, 1, 1, 'SUV', 2),
(35, 1, 2, 5, 'White', 3),
(35, 1, 3, 11, '4 Cyl', 2),
(35, 1, 4, 15, 'Automatic', 1),
(35, 1, 5, 17, 'Front Wheel Drive', 3),
(36, 1, 1, 1, 'SUV', 3),
(36, 1, 2, 5, 'White', 2),
(36, 1, 3, 11, '4 Cyl', 1),
(36, 1, 4, 15, 'Automatic', 2),
(36, 1, 5, 17, 'Front Wheel Drive', 3),
(37, 1, 1, 1, 'SUV', 2),
(37, 1, 2, 5, 'White', 3),
(37, 1, 3, 11, '4 Cyl', 2),
(37, 1, 4, 15, 'Automatic', 3),
(37, 1, 5, 17, 'Front Wheel Drive', 2),
(38, 1, 1, 1, 'SUV', 2),
(38, 1, 2, 5, 'White', 3),
(38, 1, 3, 11, '4 Cyl', 3),
(38, 1, 4, 15, 'Automatic', 1),
(38, 1, 5, 17, 'Front Wheel Drive', 1),
(39, 1, 1, 1, 'SUV', 2),
(39, 1, 2, 5, 'White', 3),
(39, 1, 3, 11, '4 Cyl', 2),
(39, 1, 4, 15, 'Automatic', 3),
(39, 1, 5, 17, 'Front Wheel Drive', 2),
(42, 1, 1, 2, 'Sedan', 1),
(42, 1, 2, 5, 'White', 3),
(42, 1, 3, NULL, 'V6', 2),
(42, 1, 4, 16, 'Stick Shift', 1),
(42, 1, 5, 19, 'All Wheel Drive', 1),
(43, 1, 1, 1, 'SUV', 1),
(43, 1, 2, 5, 'White', 1),
(43, 1, 3, 11, '4 Cyl', 1),
(43, 1, 4, 15, 'Automatic', 1),
(43, 1, 5, 17, 'Front Wheel Drive', 1);

--
-- Triggers `custprofile`
--
DELIMITER $$
CREATE TRIGGER `custprofile_get_featurevalue_id` BEFORE INSERT ON `custprofile` FOR EACH ROW BEGIN

DECLARE NewID INT;

SELECT FeatureValueID FROM featvalue WHERE FeatureValue = new.DesiredFeatureValueName INTO NewID;

SET new.DesiredFeatureValue = NewID; 

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `DomainID` int(11) NOT NULL,
  `DomainName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`DomainID`, `DomainName`) VALUES
(1, 'Vehicles'),
(2, 'Homes'),
(3, 'Mates');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `FeatureID` int(11) NOT NULL COMMENT 'Key value for freature, System assigned',
  `DomainID` int(11) NOT NULL,
  `FeatureName` varchar(20) NOT NULL COMMENT 'Name of the feature( i.e:  "Body Style'', Color, Transmission, Engine, Wheel size)',
  `DisplayOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`FeatureID`, `DomainID`, `FeatureName`, `DisplayOrder`) VALUES
(1, 1, 'BodyStyle', 1),
(2, 1, 'Color', 2),
(3, 1, 'Engine', 3),
(4, 1, 'Transmission', 4),
(5, 1, 'Drive', 5),
(6, 2, 'HomeStyle', 1),
(7, 2, 'NumBedrooms', 2),
(8, 2, 'SchoolSystem', 3),
(9, 2, 'LotType', 4),
(10, 3, 'Age', 1),
(11, 3, 'Education', 2),
(12, 3, 'Hobby', 3);

-- --------------------------------------------------------

--
-- Table structure for table `featvalue`
--

CREATE TABLE `featvalue` (
  `FeatureValueID` int(11) NOT NULL COMMENT 'Key for table',
  `FeatureID` int(11) NOT NULL COMMENT 'The ID for the feature being defined.  (FeatureID 6->Color)',
  `FeatureValue` varchar(25) NOT NULL COMMENT 'A text description for the feature (i.e.:  Red, Yellow, ''5sp manual", ''18 inch black rims'', ''Turbocharged V6 2.5L'',  ''Long range battery pack'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featvalue`
--

INSERT INTO `featvalue` (`FeatureValueID`, `FeatureID`, `FeatureValue`) VALUES
(1, 1, 'SUV'),
(2, 1, 'Sedan'),
(3, 1, 'Sports Car'),
(4, 1, 'Mini Van'),
(5, 2, 'White'),
(6, 2, 'Black'),
(7, 2, 'Grey'),
(8, 2, 'Silver'),
(9, 2, 'Red'),
(10, 2, 'Orange'),
(11, 3, '4 Cyl'),
(12, 3, ' V6'),
(13, 3, ' V8 '),
(14, 3, ' V12'),
(15, 4, 'Automatic'),
(16, 4, 'Stick Shift'),
(17, 5, 'Front Wheel Drive'),
(18, 5, 'Rear Wheel Drive'),
(19, 5, 'All Wheel Drive'),
(20, 6, 'Condo'),
(21, 6, 'Ranch'),
(22, 6, 'Colonial'),
(23, 6, 'Mansion'),
(24, 7, '2'),
(25, 7, '3'),
(26, 7, '4'),
(27, 8, 'Modern'),
(28, 8, 'Traditional'),
(29, 8, 'Historic'),
(30, 9, 'Urban'),
(31, 9, 'Subdivison'),
(32, 9, 'Rual'),
(33, 9, 'LakeFront'),
(34, 10, '20\'s'),
(35, 10, '30\'s'),
(36, 10, '40\'s'),
(37, 10, '50\'s'),
(38, 11, 'Post-Grad'),
(39, 11, 'College'),
(40, 11, 'Trade School'),
(41, 11, 'High School'),
(42, 12, 'Reading'),
(43, 12, 'Tennis'),
(44, 12, 'Rockclimbing');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `DomainID` int(11) NOT NULL,
  `StockNum` int(11) NOT NULL COMMENT 'The stock number for the item',
  `Description` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`DomainID`, `StockNum`, `Description`) VALUES
(1, 1, 'Chevy Malibu, 6 Cyl, White, FWD'),
(1, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD'),
(1, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD'),
(1, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD '),
(1, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD'),
(1, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD'),
(1, 7, 'VW Jetta,6 Cyl, Silver, FWD'),
(1, 8, 'Ford Bronco, 4 Cyl, Grey, FWD'),
(1, 9, 'Ford Bronco, 4 Cyl, Grey, FWD'),
(1, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD'),
(1, 11, 'Honda Oddessy, 6 Cyl, Red, FWD'),
(2, 12, '2 Bedroom Traditional Condo in Troy'),
(2, 13, '4 Bedroom Traditional Colonial in Troy'),
(2, 14, '3 Bedroom Modern Ranch in Troy'),
(2, 15, 'Historic Lakefront Mansion in Grosse Pointe'),
(2, 16, '2 Bedroom Modern Condo in Detroit'),
(2, 17, '4 Bedroom Farmhouse in Romeo'),
(2, 18, '3 Bedroom Historic Colonial in Troy'),
(2, 19, '3 Bedroom Ranch in Romeo'),
(2, 20, '3 Bedroom Modern Condo in Royal Oak'),
(3, 21, 'Miley Cyrus'),
(3, 22, 'Lady Gaga'),
(3, 23, 'Rihanna'),
(3, 24, 'Natalie Portman'),
(3, 25, 'Bridgit Mendler'),
(3, 26, 'Ashley Judd'),
(3, 27, 'Kourtney Kardashian');

-- --------------------------------------------------------

--
-- Stand-in structure for view `stockaffinity`
-- (See below for the actual view)
--
CREATE TABLE `stockaffinity` (
`DomainID` int(11)
,`StockNum` int(11)
,`StockDesc` varchar(60)
,`DisplayOrder` int(11)
,`FeatureID` int(11)
,`FeatureName` varchar(20)
,`StockFeatureValue` int(11)
,`FeatureValue` varchar(25)
,`CustSelectedValue` int(11)
,`StockConfigValue` int(11)
,`AffinityPoints` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `stockconfig`
--

CREATE TABLE `stockconfig` (
  `StockNum` int(11) NOT NULL COMMENT 'Stock numbr for Item',
  `FeatureID` int(11) NOT NULL COMMENT 'The Feature being specified for the item.  (This really not needed as it can be looked up from featureValue -->Feature.Name',
  `StockFeatureValue` int(11) NOT NULL COMMENT 'The Value of the feature that this item has \n(e.g. stockNum=1423, Feature=Color,Value=Red\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockconfig`
--

INSERT INTO `stockconfig` (`StockNum`, `FeatureID`, `StockFeatureValue`) VALUES
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(8, 1, 1),
(9, 1, 1),
(1, 1, 2),
(2, 1, 2),
(5, 2, 2),
(7, 1, 2),
(10, 1, 3),
(11, 1, 4),
(1, 2, 5),
(4, 2, 6),
(3, 2, 7),
(8, 2, 7),
(9, 2, 7),
(2, 2, 8),
(6, 2, 8),
(7, 2, 8),
(10, 2, 9),
(11, 2, 9),
(2, 3, 11),
(5, 3, 11),
(6, 3, 11),
(8, 3, 11),
(9, 3, 11),
(1, 3, 12),
(3, 3, 12),
(4, 3, 12),
(7, 3, 12),
(11, 3, 12),
(10, 3, 14),
(1, 4, 15),
(3, 4, 15),
(4, 4, 15),
(5, 4, 15),
(6, 4, 15),
(8, 4, 15),
(11, 4, 15),
(2, 4, 16),
(7, 4, 16),
(9, 4, 16),
(10, 4, 16),
(1, 5, 17),
(7, 5, 17),
(11, 5, 17),
(10, 5, 18),
(2, 5, 19),
(3, 5, 19),
(4, 6, 19),
(5, 5, 19),
(6, 5, 19),
(8, 5, 19),
(9, 5, 19),
(12, 6, 20),
(16, 6, 20),
(20, 6, 20),
(14, 6, 21),
(19, 6, 21),
(13, 6, 22),
(17, 6, 22),
(18, 6, 22),
(15, 6, 23),
(12, 7, 24),
(16, 7, 24),
(14, 7, 25),
(18, 7, 25),
(19, 7, 25),
(20, 7, 25),
(13, 7, 26),
(15, 7, 26),
(17, 7, 26),
(14, 8, 27),
(16, 8, 27),
(20, 8, 27),
(12, 8, 28),
(13, 8, 28),
(17, 8, 28),
(19, 8, 28),
(15, 8, 29),
(18, 8, 29),
(16, 9, 30),
(20, 9, 30),
(12, 9, 31),
(13, 9, 31),
(14, 9, 31),
(18, 9, 31),
(17, 9, 32),
(19, 9, 32),
(15, 9, 33),
(21, 10, 34),
(25, 10, 34),
(22, 10, 35),
(23, 10, 35),
(24, 10, 36),
(27, 10, 36),
(26, 10, 37),
(24, 11, 38),
(25, 11, 38),
(26, 11, 39),
(27, 11, 39),
(22, 11, 40),
(21, 11, 41),
(23, 11, 41),
(25, 12, 42),
(26, 12, 42),
(2, 12, 43),
(24, 12, 43),
(27, 12, 43),
(21, 12, 44),
(23, 12, 44);

-- --------------------------------------------------------

--
-- Table structure for table `stockmatch`
--

CREATE TABLE `stockmatch` (
  `DomainID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `StockNum` int(11) NOT NULL COMMENT 'The stock number for the item',
  `StockDesc` varchar(60) DEFAULT NULL,
  `TotalPoints` decimal(42,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockmatch`
--

INSERT INTO `stockmatch` (`DomainID`, `CustomerID`, `StockNum`, `StockDesc`, `TotalPoints`) VALUES
(1, 43, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', '43'),
(1, 43, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', '43'),
(1, 43, 1, 'Chevy Malibu, 6 Cyl, White, FWD', '41'),
(1, 43, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', '41'),
(1, 43, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', '41'),
(1, 43, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', '40'),
(1, 43, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', '37'),
(1, 43, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', '37'),
(1, 43, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', '31'),
(1, 43, 7, 'VW Jetta,6 Cyl, Silver, FWD', '31'),
(1, 43, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', '10');

-- --------------------------------------------------------

--
-- Table structure for table `stockpoints`
--

CREATE TABLE `stockpoints` (
  `DomainID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `StockNum` int(11) NOT NULL COMMENT 'The stock number for the item',
  `StockDesc` varchar(60) DEFAULT NULL,
  `FeatureID` int(11) NOT NULL COMMENT 'The Feature being specified for the item.  (This really not needed as it can be looked up from featureValue -->Feature.Name',
  `StockFeatureValue` int(11) NOT NULL COMMENT 'The Value of the feature that this item has \n(e.g. stockNum=1423, Feature=Color,Value=Red\n',
  `FeatureName` varchar(20) NOT NULL COMMENT 'Name of the feature( i.e:  "Body Style'', Color, Transmission, Engine, Wheel size)',
  `DisplayOrder` int(11) NOT NULL,
  `FeatureValue` varchar(25) NOT NULL COMMENT 'A text description for the feature (i.e.:  Red, Yellow, ''5sp manual", ''18 inch black rims'', ''Turbocharged V6 2.5L'',  ''Long range battery pack''',
  `CustSelectedValue` int(11) NOT NULL COMMENT 'Value that an affinity is being define for.  (Value ID:3 --> Red) ',
  `StockConfigValue` int(11) NOT NULL COMMENT 'Value for which an affinity is being defiend for.  (eg AffinityValueID: 33-> Orange)',
  `AffinityPoints` int(11) DEFAULT NULL COMMENT 'The number of Points awarded for an inventory item haveing the AffinityValue when the cusotmer chooses SelectedValue ',
  `DesiredFeatureValue` int(11) DEFAULT NULL COMMENT 'This references the key in FeatureValue table ',
  `Multiplier` int(11) DEFAULT NULL COMMENT 'Multiplier value for the feature, that is how important the feature is to the customer.   Not important would have low value, important features would have highe value.   Will need to do analysis to determine the right range. (maybe 1-5?, 1-10?, 1-20?, ....',
  `WeightedAffinityPoints` bigint(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockpoints`
--

INSERT INTO `stockpoints` (`DomainID`, `CustomerID`, `StockNum`, `StockDesc`, `FeatureID`, `StockFeatureValue`, `FeatureName`, `DisplayOrder`, `FeatureValue`, `CustSelectedValue`, `StockConfigValue`, `AffinityPoints`, `DesiredFeatureValue`, `Multiplier`, `WeightedAffinityPoints`) VALUES
(1, 43, 1, 'Chevy Malibu, 6 Cyl, White, FWD', 1, 2, 'BodyStyle', 1, 'Sedan', 1, 2, 4, 1, 1, 4),
(1, 43, 1, 'Chevy Malibu, 6 Cyl, White, FWD', 2, 5, 'Color', 2, 'White', 5, 5, 10, 5, 1, 10),
(1, 43, 1, 'Chevy Malibu, 6 Cyl, White, FWD', 3, 12, 'Engine', 3, ' V6', 11, 12, 7, 11, 1, 7),
(1, 43, 1, 'Chevy Malibu, 6 Cyl, White, FWD', 4, 15, 'Transmission', 4, 'Automatic', 15, 15, 10, 15, 1, 10),
(1, 43, 1, 'Chevy Malibu, 6 Cyl, White, FWD', 5, 17, 'Drive', 5, 'Front Wheel Drive', 17, 17, 10, 17, 1, 10),
(1, 43, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', 1, 2, 'BodyStyle', 1, 'Sedan', 1, 2, 4, 1, 1, 4),
(1, 43, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', 2, 8, 'Color', 2, 'Silver', 5, 8, 6, 5, 1, 6),
(1, 43, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', 3, 11, 'Engine', 3, '4 Cyl', 11, 11, 10, 11, 1, 10),
(1, 43, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', 4, 16, 'Transmission', 4, 'Stick Shift', 15, 16, 4, 15, 1, 4),
(1, 43, 2, 'Audi A4, 4 Cyl Turbo, Silver, 4WD', 5, 19, 'Drive', 5, 'All Wheel Drive', 17, 19, 7, 17, 1, 7),
(1, 43, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', 1, 1, 'BodyStyle', 1, 'SUV', 1, 1, 10, 1, 1, 10),
(1, 43, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', 2, 7, 'Color', 2, 'Grey', 5, 7, 6, 5, 1, 6),
(1, 43, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', 3, 12, 'Engine', 3, ' V6', 11, 12, 7, 11, 1, 7),
(1, 43, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', 4, 15, 'Transmission', 4, 'Automatic', 15, 15, 10, 15, 1, 10),
(1, 43, 3, 'Chevy Equinox, 6 Cyl, Grey, 4WD', 5, 19, 'Drive', 5, 'All Wheel Drive', 17, 19, 7, 17, 1, 7),
(1, 43, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', 1, 1, 'BodyStyle', 1, 'SUV', 1, 1, 10, 1, 1, 10),
(1, 43, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', 2, 6, 'Color', 2, 'Black', 5, 6, 7, 5, 1, 7),
(1, 43, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', 3, 12, 'Engine', 3, ' V6', 11, 12, 7, 11, 1, 7),
(1, 43, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', 4, 15, 'Transmission', 4, 'Automatic', 15, 15, 10, 15, 1, 10),
(1, 43, 4, 'Chevy Equinox, 4 Cyl, Black, 2WD ', 6, 19, 'HomeStyle', 1, 'All Wheel Drive', 17, 19, 7, 17, 1, 7),
(1, 43, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', 1, 1, 'BodyStyle', 1, 'SUV', 1, 1, 10, 1, 1, 10),
(1, 43, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', 2, 2, 'Color', 2, 'Sedan', 1, 2, 4, 1, 1, 4),
(1, 43, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', 3, 11, 'Engine', 3, '4 Cyl', 11, 11, 10, 11, 1, 10),
(1, 43, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', 4, 15, 'Transmission', 4, 'Automatic', 15, 15, 10, 15, 1, 10),
(1, 43, 5, 'Jeep Wrangler, 4 Cyl, Black, 2WD', 5, 19, 'Drive', 5, 'All Wheel Drive', 17, 19, 7, 17, 1, 7),
(1, 43, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', 1, 1, 'BodyStyle', 1, 'SUV', 1, 1, 10, 1, 1, 10),
(1, 43, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', 2, 8, 'Color', 2, 'Silver', 5, 8, 6, 5, 1, 6),
(1, 43, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', 3, 11, 'Engine', 3, '4 Cyl', 11, 11, 10, 11, 1, 10),
(1, 43, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', 4, 15, 'Transmission', 4, 'Automatic', 15, 15, 10, 15, 1, 10),
(1, 43, 6, 'Subaru, Forrester, 4Cyl, Silver, 4WD', 5, 19, 'Drive', 5, 'All Wheel Drive', 17, 19, 7, 17, 1, 7),
(1, 43, 7, 'VW Jetta,6 Cyl, Silver, FWD', 1, 2, 'BodyStyle', 1, 'Sedan', 1, 2, 4, 1, 1, 4),
(1, 43, 7, 'VW Jetta,6 Cyl, Silver, FWD', 2, 8, 'Color', 2, 'Silver', 5, 8, 6, 5, 1, 6),
(1, 43, 7, 'VW Jetta,6 Cyl, Silver, FWD', 3, 12, 'Engine', 3, ' V6', 11, 12, 7, 11, 1, 7),
(1, 43, 7, 'VW Jetta,6 Cyl, Silver, FWD', 4, 16, 'Transmission', 4, 'Stick Shift', 15, 16, 4, 15, 1, 4),
(1, 43, 7, 'VW Jetta,6 Cyl, Silver, FWD', 5, 17, 'Drive', 5, 'Front Wheel Drive', 17, 17, 10, 17, 1, 10),
(1, 43, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', 1, 1, 'BodyStyle', 1, 'SUV', 1, 1, 10, 1, 1, 10),
(1, 43, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', 2, 7, 'Color', 2, 'Grey', 5, 7, 6, 5, 1, 6),
(1, 43, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', 3, 11, 'Engine', 3, '4 Cyl', 11, 11, 10, 11, 1, 10),
(1, 43, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', 4, 15, 'Transmission', 4, 'Automatic', 15, 15, 10, 15, 1, 10),
(1, 43, 8, 'Ford Bronco, 4 Cyl, Grey, FWD', 5, 19, 'Drive', 5, 'All Wheel Drive', 17, 19, 7, 17, 1, 7),
(1, 43, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', 1, 1, 'BodyStyle', 1, 'SUV', 1, 1, 10, 1, 1, 10),
(1, 43, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', 2, 7, 'Color', 2, 'Grey', 5, 7, 6, 5, 1, 6),
(1, 43, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', 3, 11, 'Engine', 3, '4 Cyl', 11, 11, 10, 11, 1, 10),
(1, 43, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', 4, 16, 'Transmission', 4, 'Stick Shift', 15, 16, 4, 15, 1, 4),
(1, 43, 9, 'Ford Bronco, 4 Cyl, Grey, FWD', 5, 19, 'Drive', 5, 'All Wheel Drive', 17, 19, 7, 17, 1, 7),
(1, 43, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', 1, 3, 'BodyStyle', 1, 'Sports Car', 1, 3, 0, 1, 1, 0),
(1, 43, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', 2, 9, 'Color', 2, 'Red', 5, 9, 2, 5, 1, 2),
(1, 43, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', 3, 14, 'Engine', 3, ' V12', 11, 14, 0, 11, 1, 0),
(1, 43, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', 4, 16, 'Transmission', 4, 'Stick Shift', 15, 16, 4, 15, 1, 4),
(1, 43, 10, 'Lamborghini Countach, 12 Cyl, Red, RWD', 5, 18, 'Drive', 5, 'Rear Wheel Drive', 17, 18, 4, 17, 1, 4),
(1, 43, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', 1, 4, 'BodyStyle', 1, 'Mini Van', 1, 4, 8, 1, 1, 8),
(1, 43, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', 2, 9, 'Color', 2, 'Red', 5, 9, 2, 5, 1, 2),
(1, 43, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', 3, 12, 'Engine', 3, ' V6', 11, 12, 7, 11, 1, 7),
(1, 43, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', 4, 15, 'Transmission', 4, 'Automatic', 15, 15, 10, 15, 1, 10),
(1, 43, 11, 'Honda Oddessy, 6 Cyl, Red, FWD', 5, 17, 'Drive', 5, 'Front Wheel Drive', 17, 17, 10, 17, 1, 10);

-- --------------------------------------------------------

--
-- Structure for view `stockaffinity`
--
DROP TABLE IF EXISTS `stockaffinity`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stockaffinity`  AS SELECT `s`.`DomainID` AS `DomainID`, `s`.`StockNum` AS `StockNum`, `s`.`Description` AS `StockDesc`, `f`.`DisplayOrder` AS `DisplayOrder`, `cfg`.`FeatureID` AS `FeatureID`, `f`.`FeatureName` AS `FeatureName`, `cfg`.`StockFeatureValue` AS `StockFeatureValue`, `fv`.`FeatureValue` AS `FeatureValue`, `a`.`CustSelectedValue` AS `CustSelectedValue`, `a`.`StockConfigValue` AS `StockConfigValue`, `a`.`AffinityPoints` AS `AffinityPoints` FROM ((((`stock` `s` join `stockconfig` `cfg` on(`s`.`StockNum` = `cfg`.`StockNum`)) join `feature` `f` on(`f`.`FeatureID` = `cfg`.`FeatureID`)) join `featvalue` `fv` on(`fv`.`FeatureValueID` = `cfg`.`StockFeatureValue`)) join `affinity` `a` on(`a`.`StockConfigValue` = `cfg`.`StockFeatureValue`)) ORDER BY `s`.`DomainID` ASC, `s`.`StockNum` ASC, `fv`.`FeatureID` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affinity`
--
ALTER TABLE `affinity`
  ADD PRIMARY KEY (`CustSelectedValue`,`StockConfigValue`),
  ADD KEY `fk_AffinityValue_idx` (`StockConfigValue`);

--
-- Indexes for table `custmatch`
--
ALTER TABLE `custmatch`
  ADD PRIMARY KEY (`CustomerID`,`StockNum`,`DomainID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `custprofile`
--
ALTER TABLE `custprofile`
  ADD PRIMARY KEY (`CustomerID`,`FeatureID`,`DomainID`),
  ADD KEY `fk_Domain_idx` (`DomainID`);

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`DomainID`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`FeatureID`),
  ADD KEY `idx_Domain` (`DomainID`);

--
-- Indexes for table `featvalue`
--
ALTER TABLE `featvalue`
  ADD PRIMARY KEY (`FeatureValueID`,`FeatureID`),
  ADD KEY `fk_AvailableValues_idx` (`FeatureID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`StockNum`,`DomainID`),
  ADD KEY `fk_StockDomain_idx` (`DomainID`);

--
-- Indexes for table `stockconfig`
--
ALTER TABLE `stockconfig`
  ADD PRIMARY KEY (`StockNum`,`FeatureID`),
  ADD KEY `fk_StockFeatureValue_idx` (`StockFeatureValue`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custmatch`
--
ALTER TABLE `custmatch`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Key for customer table\n', AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `featvalue`
--
ALTER TABLE `featvalue`
  MODIFY `FeatureValueID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Key for table', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `StockNum` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The stock number for the item', AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `affinity`
--
ALTER TABLE `affinity`
  ADD CONSTRAINT `fk_AffinityValue` FOREIGN KEY (`StockConfigValue`) REFERENCES `featvalue` (`FeatureValueID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SlelectedValue` FOREIGN KEY (`CustSelectedValue`) REFERENCES `featvalue` (`FeatureValueID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `custmatch`
--
ALTER TABLE `custmatch`
  ADD CONSTRAINT `fk_CustMatchCustID` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `custprofile`
--
ALTER TABLE `custprofile`
  ADD CONSTRAINT `fk_CustProfileCustID` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Domain` FOREIGN KEY (`DomainID`) REFERENCES `domain` (`DomainID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feature`
--
ALTER TABLE `feature`
  ADD CONSTRAINT `fk_FeatDomain` FOREIGN KEY (`DomainID`) REFERENCES `domain` (`DomainID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `featvalue`
--
ALTER TABLE `featvalue`
  ADD CONSTRAINT `fk_AvailableValues` FOREIGN KEY (`FeatureID`) REFERENCES `feature` (`FeatureID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `fk_StockDomain` FOREIGN KEY (`DomainID`) REFERENCES `domain` (`DomainID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stockconfig`
--
ALTER TABLE `stockconfig`
  ADD CONSTRAINT `fk_StockFeatureValue` FOREIGN KEY (`StockFeatureValue`) REFERENCES `featvalue` (`FeatureValueID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_StockNum` FOREIGN KEY (`StockNum`) REFERENCES `stock` (`StockNum`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
