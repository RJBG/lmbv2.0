-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2015 at 02:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmb_2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `name` varchar(20) NOT NULL,
  `numcode` varchar(20) NOT NULL,
  `phonecode` varchar(20) NOT NULL,
  `iso3` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`name`, `numcode`, `phonecode`, `iso3`, `id`) VALUES
('C', 'num1', 'p1', 'iso1', 1),
('count2', 'num2', 'p2', 'iso2', 2),
('ad', 'asdf', 'asdf', 'adf', 3),
('123s', 'sdglkj', 'sdg', 'ag', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `companyID` int(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `mi` varchar(20) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `customerID` int(60) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `alternativeContact` varchar(30) NOT NULL,
  `alternativePhone` varchar(30) NOT NULL,
  `street` varchar(40) NOT NULL,
  `street2` varchar(40) DEFAULT NULL,
  `city` varchar(40) NOT NULL,
  `zipcode` int(30) NOT NULL,
  `customerID2` varchar(30) NOT NULL,
  `shipAddress` varchar(60) NOT NULL,
  `creationDate` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`companyID`, `company`, `firstName`, `mi`, `lastName`, `fullName`, `customerID`, `phone`, `telephone`, `alternativeContact`, `alternativePhone`, `street`, `street2`, `city`, `zipcode`, `customerID2`, `shipAddress`, `creationDate`) VALUES
(1, 'some company', 'some name', 'a', 'some last name', '', 1, '1234', '54321', '', '', '', NULL, '', 0, '', '', '2015-09-15 12:42:49'),
(9876, 'sample company', 'sample name', 'b', 'sample last', '', 2, '5678', '321543', '', '', '', NULL, '', 0, '', '', '2015-09-15 12:50:40'),
(1, 'webplus', 'kenneth', 'r', 'canada', '', 3, '2343', '234', '', '', '', NULL, '', 0, '', '', '2015-09-16 12:52:25'),
(2147483647, 'lmb', 'a4tech', 'q', 'newmen', '', 4, '08927347892', '983877283112', '', '', '', NULL, '', 0, '', '', '2015-09-25 16:45:26'),
(123, 'coke', 'coca', 'a', 'cola', '', 5, '4567', '87654', '', '', '', NULL, '', 0, '', '', '2015-09-25 16:49:34'),
(5435353, 'sprite', 'ZEST', 'o', 'juice', '', 6, '895858', '948382', '', '', '', NULL, '', 0, '', '', '2015-09-25 16:51:43'),
(12344, 'company', 'name', 'middle', 'last', '', 7, '044940', '0300489', '', '', '', NULL, '', 0, '', '', '2015-09-29 17:51:08'),
(123123, 'kbasdh', 'dgdfgdfg', 'rtw', 'sdwefzdf', '', 8, '367773', '345322', '', '', '', NULL, '', 0, '', '', '2015-09-29 17:51:29'),
(829749, 'hjkakbow', 'kkckjhsufho', 'o', 'houbvu', '', 9, '9287498', '93787', '', '', '', NULL, '', 0, '', '', '2015-09-29 17:51:57'),
(8838758, 'khvkbdkaf', 'knskhfoow', 'h', 'lkhfwiuhiw', '', 10, '9823840', '7278491', '', '', '', NULL, '', 0, '', '', '2015-09-29 17:52:17'),
(234235, 'mnabsdkjkkksii', 'dsankbvkjakhfu', 'j', 'khsdfihwiifh', '', 11, '93985771', '2999487', '', '', '', NULL, '', 0, '', '', '2015-09-29 17:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `deptID` int(10) NOT NULL,
  `deptCode` varchar(10) NOT NULL,
  `deptName` varchar(50) NOT NULL,
  `taxCode` varchar(30) NOT NULL,
  `margin` varchar(30) NOT NULL,
  `markup` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptID`, `deptCode`, `deptName`, `taxCode`, `margin`, `markup`) VALUES
(1, '123', 'department 1', '0', '0', '0'),
(2, '456', 'department 2', '1', '1', '1'),
(3, '789', 'department 3', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empID` int(30) NOT NULL,
  `employee` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `mi` varchar(10) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `employeeID` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `employee`, `firstName`, `lastName`, `mi`, `fullName`, `employeeID`, `phone`, `telephone`, `address`, `username`, `password`) VALUES
(1, '1', 'Vince Joseph', 'Laplana', 'C', '', '1221212', '09273466828', '', 'Malitbog Southern Leyte', 'username', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `held_receipts`
--

CREATE TABLE IF NOT EXISTS `held_receipts` (
  `id` int(40) NOT NULL,
  `date` varchar(40) NOT NULL,
  `company` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `total` varchar(1000) NOT NULL,
  `receiptType` varchar(40) NOT NULL,
  `store` varchar(40) NOT NULL,
  `cashier` varchar(60) NOT NULL,
  `associate` varchar(60) NOT NULL,
  `shipToFullname` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `orderNo` varchar(60) NOT NULL,
  `customerPONo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `itemID` int(30) NOT NULL,
  `storeID` int(10) NOT NULL,
  `itemType` varchar(30) NOT NULL,
  `deptID` int(30) NOT NULL,
  `vendorID` int(30) DEFAULT NULL,
  `itemName` varchar(60) NOT NULL,
  `itemDes` text,
  `attribute` varchar(60) NOT NULL,
  `size` varchar(60) DEFAULT NULL,
  `itemNo` int(30) DEFAULT NULL,
  `receiptNo` varchar(60) NOT NULL,
  `UPC` varchar(30) DEFAULT NULL,
  `orderCost` varchar(40) NOT NULL,
  `alternateLookup` varchar(60) DEFAULT NULL,
  `reorderPointByStore` tinyint(1) NOT NULL,
  `companyReorderPoint` int(10) NOT NULL,
  `usualSellUnit` int(4) NOT NULL,
  `usualOrderUnit` int(4) NOT NULL,
  `baseUnit` varchar(30) NOT NULL,
  `itemUnit2` int(4) DEFAULT NULL,
  `itemUnit3` int(4) DEFAULT NULL,
  `itemUnit4` int(4) DEFAULT NULL,
  `itemDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemID`, `storeID`, `itemType`, `deptID`, `vendorID`, `itemName`, `itemDes`, `attribute`, `size`, `itemNo`, `receiptNo`, `UPC`, `orderCost`, `alternateLookup`, `reorderPointByStore`, `companyReorderPoint`, `usualSellUnit`, `usualOrderUnit`, `baseUnit`, `itemUnit2`, `itemUnit3`, `itemUnit4`, `itemDate`) VALUES
(15, 0, 'Inventory', 1, 1, 'addada', 'dad', 'adad', '', 2, '', '', '0.00', '', 0, 0, 0, 0, '', 0, 0, 0, '2015-10-01 00:25:21'),
(16, 0, 'Inventory', 3, 1, 'a', '', '', '', 3, '', '', '0.00', '', 0, 0, 0, 0, '', 0, 0, 0, '2015-10-01 00:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `layaway`
--

CREATE TABLE IF NOT EXISTS `layaway` (
  `id` int(30) NOT NULL,
  `itemNo` varchar(60) NOT NULL,
  `itemName` varchar(60) NOT NULL,
  `attribute` varchar(60) NOT NULL,
  `size` varchar(60) NOT NULL,
  `ordered` varchar(60) NOT NULL,
  `unitOfMeasure` varchar(60) NOT NULL,
  `onHandQuantity` varchar(60) NOT NULL,
  `due` varchar(60) NOT NULL,
  `sold` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `extPrice` varchar(1000) NOT NULL,
  `alternateLookup` varchar(60) NOT NULL,
  `deptCode` varchar(60) NOT NULL,
  `vendorCode` varchar(60) NOT NULL,
  `cost` varchar(1000) NOT NULL,
  `customerInfo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `layaway_list`
--

CREATE TABLE IF NOT EXISTS `layaway_list` (
  `id` int(60) NOT NULL,
  `orderDate` varchar(60) NOT NULL,
  `layawayNo` varchar(60) NOT NULL,
  `company` varchar(60) NOT NULL,
  `lastName` int(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `balanceDue` varchar(1000) NOT NULL,
  `depositBal` varchar(1000) NOT NULL,
  `total` varchar(1000) NOT NULL,
  `unfilledPercent` varchar(60) NOT NULL,
  `shipToFullname` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `customerPONo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE IF NOT EXISTS `payout` (
  `id` int(30) NOT NULL,
  `cashier` varchar(60) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `account` varchar(60) NOT NULL,
  `comments` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_history`
--

CREATE TABLE IF NOT EXISTS `sales_history` (
  `id` int(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `company` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `total` varchar(1000) NOT NULL,
  `receiptType` varchar(40) NOT NULL,
  `store` varchar(60) NOT NULL,
  `cashier` varchar(60) NOT NULL,
  `associate` varchar(60) NOT NULL,
  `shipToFullname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `receiptNo` varchar(60) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `orderNo` varchar(60) NOT NULL,
  `customerPONo` varchar(60) NOT NULL,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE IF NOT EXISTS `sales_order` (
  `soID` int(30) NOT NULL,
  `soRef` varchar(30) NOT NULL,
  `customerID` int(20) NOT NULL,
  `storeID` int(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `priceLevel` varchar(50) NOT NULL,
  `subTotal` int(30) NOT NULL,
  `dscPer` int(3) NOT NULL,
  `discount` int(30) NOT NULL,
  `taxPer` int(3) NOT NULL,
  `tax` int(30) NOT NULL,
  `shipping` int(30) NOT NULL,
  `depositBal` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  `noOfItems` int(10) NOT NULL,
  `totalQty` int(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`soID`, `soRef`, `customerID`, `storeID`, `date`, `status`, `priceLevel`, `subTotal`, `dscPer`, `discount`, `taxPer`, `tax`, `shipping`, `depositBal`, `total`, `noOfItems`, `totalQty`, `comment`) VALUES
(1, '', 0, 0, '2015-08-24', 'open', 'Regular Price', 400, 0, 0, 0, 0, 0, 0, 400, 2, 20, ''),
(2, '', 0, 0, '2015-08-24', 'open', 'Regular Price', 1400, 0, 0, 0, 0, 0, 0, 1400, 2, 40, ''),
(3, '', 0, 0, '2015-08-24', 'open', 'Regular Price', 700, 12, 84, 1, 7, 0, 0, 609, 2, 30, ''),
(4, '', 0, 0, '2015-08-24', 'open', 'Regular Price', 1000, 0, 0, 0, 0, 0, 0, 1000, 2, 30, ''),
(5, '', 0, 0, '2015-08-26', 'open', 'Regular Price', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(6, '', 0, 0, '2015-08-28', 'open', 'Regular Price', 500, 0, 0, 0, 0, 0, 0, 500, 1, 1, ''),
(7, '', 0, 0, '2015-08-28', 'open', 'Regular Price', 500, 0, 0, 0, 0, 0, 0, 500, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_item`
--

CREATE TABLE IF NOT EXISTS `sales_order_item` (
  `soID` int(30) NOT NULL,
  `itemID` int(10) NOT NULL,
  `qty` int(6) NOT NULL,
  `price` double NOT NULL,
  `ePrice` double NOT NULL,
  `unitID` int(4) NOT NULL,
  `id` int(11) NOT NULL,
  `soldQty` int(30) NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order_item`
--

INSERT INTO `sales_order_item` (`soID`, `itemID`, `qty`, `price`, `ePrice`, `unitID`, `id`, `soldQty`, `status`) VALUES
(1, 1, 10, 20, 200, 0, 1, 0, ''),
(1, 2, 10, 20, 200, 0, 2, 0, ''),
(2, 2, 10, 20, 200, 0, 3, 0, ''),
(2, 1, 30, 40, 1200, 0, 4, 0, ''),
(3, 1, 10, 10, 100, 0, 5, 0, ''),
(3, 2, 20, 30, 600, 0, 6, 0, ''),
(4, 1, 10, 40, 400, 0, 7, 0, ''),
(4, 2, 20, 30, 600, 0, 8, 0, ''),
(6, 4, 1, 500, 500, 0, 9, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_receipt`
--

CREATE TABLE IF NOT EXISTS `sales_receipt` (
  `srID` int(10) NOT NULL,
  `srRef` int(11) NOT NULL,
  `userID` int(10) NOT NULL,
  `associateID` int(10) DEFAULT NULL,
  `storeID` int(10) NOT NULL,
  `customerID` int(10) NOT NULL,
  `date` date NOT NULL,
  `priceLevel` varchar(20) NOT NULL,
  `subTotal` double NOT NULL,
  `dscPer` float NOT NULL,
  `discount` double NOT NULL,
  `taxPer` float NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `status` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `noOfItems` int(10) NOT NULL,
  `totalQty` int(10) NOT NULL,
  `soID` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_receipt`
--

INSERT INTO `sales_receipt` (`srID`, `srRef`, `userID`, `associateID`, `storeID`, `customerID`, `date`, `priceLevel`, `subTotal`, `dscPer`, `discount`, `taxPer`, `tax`, `total`, `status`, `comment`, `noOfItems`, `totalQty`, `soID`) VALUES
(17, 0, 0, NULL, 0, 0, '2015-09-09', 'Select Option', 10000, 0, 0, 0, 0, 10000, 'receive', '                                            ', 1, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_receipt_item`
--

CREATE TABLE IF NOT EXISTS `sales_receipt_item` (
  `srID` int(10) NOT NULL,
  `itemID` int(10) NOT NULL,
  `qty` int(6) NOT NULL,
  `price` double NOT NULL,
  `ePrice` double NOT NULL,
  `unitID` int(10) NOT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_receipt_item`
--

INSERT INTO `sales_receipt_item` (`srID`, `itemID`, `qty`, `price`, `ePrice`, `unitID`, `id`) VALUES
(1, 0, 10, 20, 200, 0, 1),
(1, 0, 10, 20, 200, 0, 2),
(1, 1, 10, 10, 100, 0, 3),
(2, 0, 10, 20, 200, 0, 4),
(2, 0, 10, 20, 200, 0, 5),
(2, 1, 10, 10, 100, 0, 6),
(3, 0, 10, 20, 200, 0, 7),
(3, 0, 30, 40, 1200, 0, 8),
(3, 3, 50, 60, 3000, 0, 9),
(4, 1, 10, 10, 100, 0, 10),
(4, 1, 10, 20, 200, 0, 11),
(5, 4, 12, 11010100, 132121200, 0, 12),
(6, 4, 12, 500, 6000, 0, 13),
(7, 4, 10, 500, 5000, 0, 14),
(8, 4, 10, 500, 5000, 0, 15),
(9, 6, 10, 0, 0, 0, 16),
(10, 6, 90, 0, 0, 0, 17),
(11, 6, 100, 0, 0, 0, 18),
(12, 6, 190, 0, 0, 0, 19),
(13, 6, 1, 0, 0, 0, 20),
(14, 6, 5, 0, 0, 0, 21),
(15, 2, 5, 1, 5, 0, 22),
(17, 7, 100, 0, 0, 0, 23),
(18, 7, 10, 0, 0, 0, 24),
(19, 7, 1, 1, 1, 0, 25),
(20, 7, 10, 1, 10, 0, 26),
(21, 7, 1, 0, 0, 0, 27),
(24, 23, 100, 100, 10000, 0, 28),
(25, 23, 10, 100, 1000, 0, 29),
(26, 23, 10, 100, 1000, 0, 30),
(27, 23, 10, 100, 1000, 0, 31),
(28, 23, 1, 100, 100, 0, 32),
(4, 23, 10, 100, 1000, 0, 33),
(5, 23, 1, 100, 100, 0, 34),
(6, 23, 10, 100, 1000, 0, 35),
(7, 23, 1, 100, 100, 0, 36),
(8, 23, 1, 100, 100, 0, 37),
(9, 23, 1, 100, 100, 0, 38),
(10, 23, 1, 100, 100, 0, 39),
(10, 29, 1, 100, 100, 0, 40),
(11, 28, 1, 1, 1, 0, 41),
(12, 32, 2, 500, 1000, 0, 42),
(12, 28, 1, 300, 300, 0, 43),
(14, 33, 100, 11, 1100, 0, 44),
(15, 33, 22, 111, 2442, 0, 45),
(16, 33, 1111, 1, 1111, 0, 46),
(17, 33, 100, 100, 10000, 0, 47);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `storeID` int(30) NOT NULL,
  `storeCode` varchar(30) NOT NULL,
  `storeName` varchar(100) DEFAULT NULL,
  `storeAddress` varchar(255) DEFAULT NULL,
  `misc1` varchar(255) DEFAULT NULL,
  `misc2` varchar(255) DEFAULT NULL,
  `misc3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`storeID`, `storeCode`, `storeName`, `storeAddress`, `misc1`, `misc2`, `misc3`) VALUES
(1, '123', 'LMB store 1', 'ormoc', '', '', ''),
(2, '456', 'LMB store 2', 'maasin', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `store_item`
--

CREATE TABLE IF NOT EXISTS `store_item` (
  `siID` int(11) NOT NULL,
  `itemID` int(30) NOT NULL,
  `storeID` int(30) NOT NULL,
  `onHandQuantity` int(30) NOT NULL,
  `storeReorderPoint` int(30) DEFAULT NULL,
  `regularPrice` double NOT NULL,
  `orderCost` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_item`
--

INSERT INTO `store_item` (`siID`, `itemID`, `storeID`, `onHandQuantity`, `storeReorderPoint`, `regularPrice`, `orderCost`) VALUES
(29, 15, 1, 1, 0, 100, 100),
(30, 15, 2, 0, 0, 90, 95),
(31, 16, 1, 10, 0, 0, 0),
(32, 16, 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `unit_of_measure`
--

CREATE TABLE IF NOT EXISTS `unit_of_measure` (
  `unitID` int(20) NOT NULL,
  `unitName` varchar(20) NOT NULL,
  `isBaseUnit` tinyint(1) NOT NULL,
  `baseUnitName` varchar(20) DEFAULT NULL,
  `noOfBaseUnit` int(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_of_measure`
--

INSERT INTO `unit_of_measure` (`unitID`, `unitName`, `isBaseUnit`, `baseUnitName`, `noOfBaseUnit`) VALUES
(2, 'adadada', 0, NULL, NULL),
(3, 'jun', 0, NULL, NULL),
(67, 'a', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `position`) VALUES
(3, 'admin', 'admin', 'adminato', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `vendorID` int(10) NOT NULL,
  `vendorCode` int(10) DEFAULT NULL,
  `companyName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorID`, `vendorCode`, `companyName`) VALUES
(1, 1234, 'Vendor 1'),
(2, 456, 'Vendor 2'),
(3, 789, 'vendor 3');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
  `voucherID` int(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `subTotal` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  `dscPer` int(30) NOT NULL,
  `discount` int(30) NOT NULL,
  `taxPer` int(30) NOT NULL,
  `tax` int(30) NOT NULL,
  `fee` int(30) NOT NULL,
  `frieght` int(30) NOT NULL,
  `storeID` int(30) NOT NULL,
  `vendorID` int(30) NOT NULL,
  `comment` text NOT NULL,
  `noOfItems` int(10) NOT NULL,
  `totalQty` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`voucherID`, `date`, `status`, `subTotal`, `total`, `dscPer`, `discount`, `taxPer`, `tax`, `fee`, `frieght`, `storeID`, `vendorID`, `comment`, `noOfItems`, `totalQty`) VALUES
(43, '2015-09-09', 'receive', 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, '', 1, 1),
(44, '2015-10-03', 'Open', 100, 100, 0, 0, 0, 0, 0, 0, 1, 1, 'dadada', 1, 1),
(45, '2015-10-03', 'Open', 90, 90, 0, 0, 0, 0, 0, 0, 2, 2, '', 1, 1),
(46, '2015-10-03', 'Open', 100, 100, 0, 0, 0, 0, 0, 0, 1, 2, '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `voucher_item`
--

CREATE TABLE IF NOT EXISTS `voucher_item` (
  `voucherID` int(30) NOT NULL,
  `qty` int(30) NOT NULL,
  `price` int(30) NOT NULL,
  `eprice` int(30) NOT NULL,
  `itemID` int(30) NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher_item`
--

INSERT INTO `voucher_item` (`voucherID`, `qty`, `price`, `eprice`, `itemID`, `id`) VALUES
(2, 10, 60, 600, 1, 4),
(2, 20, 50, 1000, 2, 5),
(2, 30, 40, 1200, 3, 6),
(4, 10, 500, 5000, 4, 7),
(5, 12, 500, 6000, 4, 8),
(6, 10, 500, 5000, 4, 9),
(7, 10, 500, 5000, 4, 10),
(8, 10, 500, 5000, 4, 11),
(9, 100, 0, 0, 6, 12),
(10, 10, 0, 0, 6, 13),
(11, 90, 2, 180, 6, 14),
(12, 100, 0, 0, 6, 15),
(13, 90, 0, 0, 6, 16),
(14, 1, 500, 500, 4, 17),
(15, 100, 0, 0, 7, 18),
(16, 79, 1, 79, 7, 19),
(18, 100, 100, 10000, 23, 20),
(20, 100, 100, 10000, 23, 21),
(21, 0, 100, 0, 23, 22),
(22, 10, 100, 1000, 23, 23),
(23, 1, 100, 100, 23, 24),
(24, 1, 100, 100, 23, 25),
(25, 1, 100, 100, 23, 26),
(26, 1, 100, 100, 23, 27),
(27, 3, 100, 300, 23, 28),
(28, 1, 100, 100, 23, 29),
(29, 5, 100, 500, 23, 30),
(30, 10, 100, 1000, 23, 31),
(32, 100, 100, 10000, 23, 32),
(35, 1, 100, 100, 23, 33),
(36, 0, 100, 0, 23, 34),
(37, 1, 100, 100, 23, 35),
(38, 1, 100, 100, 23, 36),
(39, 1, 100, 100, 23, 37),
(40, 1, 102, 102, 29, 38),
(41, 2, 100, 200, 29, 39),
(42, 1, 100, 100, 29, 40),
(43, 1, 100, 100, 33, 41),
(44, 1, 100, 100, 15, 42),
(45, 1, 90, 90, 15, 43),
(46, 1, 100, 100, 15, 44);

-- --------------------------------------------------------

--
-- Table structure for table `work_order`
--

CREATE TABLE IF NOT EXISTS `work_order` (
  `id` int(30) NOT NULL,
  `itemNo` varchar(60) NOT NULL,
  `itemName` varchar(60) NOT NULL,
  `attribute` varchar(60) NOT NULL,
  `size` varchar(60) NOT NULL,
  `ordered` varchar(60) NOT NULL,
  `unitOfMeasure` varchar(60) NOT NULL,
  `onHandQuantity` varchar(60) NOT NULL,
  `due` varchar(60) NOT NULL,
  `sold` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `extPrice` varchar(1000) NOT NULL,
  `alternateLookup` varchar(60) NOT NULL,
  `deptCode` varchar(60) NOT NULL,
  `vendorCode` varchar(60) NOT NULL,
  `cost` varchar(1000) NOT NULL,
  `customerInfo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `work_order_list`
--

CREATE TABLE IF NOT EXISTS `work_order_list` (
  `id` int(11) NOT NULL,
  `workOrderNo` varchar(60) NOT NULL,
  `company` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `balanceDue` varchar(1000) NOT NULL,
  `depositBal` varchar(1000) NOT NULL,
  `total` varchar(1000) NOT NULL,
  `dueTotal` varchar(1000) NOT NULL,
  `unfilledPercent` varchar(60) NOT NULL,
  `shipToFullname` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `customerPONo` varchar(60) NOT NULL,
  `orderDate` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `held_receipts`
--
ALTER TABLE `held_receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `layaway`
--
ALTER TABLE `layaway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layaway_list`
--
ALTER TABLE `layaway_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payout`
--
ALTER TABLE `payout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_history`
--
ALTER TABLE `sales_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`soID`);

--
-- Indexes for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_receipt`
--
ALTER TABLE `sales_receipt`
  ADD PRIMARY KEY (`srID`),
  ADD UNIQUE KEY `srRef` (`srID`);

--
-- Indexes for table `sales_receipt_item`
--
ALTER TABLE `sales_receipt_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`storeID`),
  ADD UNIQUE KEY `storeCode` (`storeCode`);

--
-- Indexes for table `store_item`
--
ALTER TABLE `store_item`
  ADD PRIMARY KEY (`siID`),
  ADD UNIQUE KEY `store_item_id_test` (`itemID`,`storeID`);

--
-- Indexes for table `unit_of_measure`
--
ALTER TABLE `unit_of_measure`
  ADD PRIMARY KEY (`unitID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorID`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`voucherID`);

--
-- Indexes for table `voucher_item`
--
ALTER TABLE `voucher_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_order`
--
ALTER TABLE `work_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_order_list`
--
ALTER TABLE `work_order_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(60) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empID` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `held_receipts`
--
ALTER TABLE `held_receipts`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemID` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `layaway`
--
ALTER TABLE `layaway`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layaway_list`
--
ALTER TABLE `layaway_list`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payout`
--
ALTER TABLE `payout`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_history`
--
ALTER TABLE `sales_history`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `soID` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sales_receipt`
--
ALTER TABLE `sales_receipt`
  MODIFY `srID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sales_receipt_item`
--
ALTER TABLE `sales_receipt_item`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `storeID` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `store_item`
--
ALTER TABLE `store_item`
  MODIFY `siID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `unit_of_measure`
--
ALTER TABLE `unit_of_measure`
  MODIFY `unitID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `voucherID` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `voucher_item`
--
ALTER TABLE `voucher_item`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `work_order`
--
ALTER TABLE `work_order`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `work_order_list`
--
ALTER TABLE `work_order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `store_item`
--
ALTER TABLE `store_item`
  ADD CONSTRAINT `store_item_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `item` (`itemID`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
