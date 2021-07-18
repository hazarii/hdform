-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 07:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amsb21`
--

-- --------------------------------------------------------

--
-- Table structure for table `hd_0001`
--

CREATE TABLE `hd_0001` (
  `hd_id` int(11) NOT NULL,
  `refnum` varchar(15) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `mykad` varchar(30) DEFAULT NULL,
  `visoffice` varchar(10) DEFAULT NULL,
  `appemail` varchar(100) DEFAULT NULL,
  `entryin` date DEFAULT NULL,
  `entryout` date DEFAULT NULL,
  `radiocom` varchar(20) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `caddress` varchar(100) DEFAULT NULL,
  `ccity` varchar(20) DEFAULT NULL,
  `cstate` varchar(20) DEFAULT NULL,
  `cpostal` varchar(10) DEFAULT NULL,
  `telno` varchar(30) DEFAULT NULL,
  `reasonentry` varchar(150) DEFAULT NULL,
  `nameconperson` varchar(50) DEFAULT NULL,
  `emailaddconperson` varchar(100) DEFAULT NULL,
  `radio1` varchar(5) DEFAULT NULL,
  `country` varchar(100) NOT NULL DEFAULT 'NA',
  `doafromcountries` date DEFAULT NULL,
  `radio2` varchar(5) DEFAULT NULL,
  `radiozone` varchar(50) NOT NULL,
  `areafrom` varchar(100) NOT NULL DEFAULT 'NA',
  `radio3` varchar(5) DEFAULT NULL,
  `radio4` varchar(5) DEFAULT NULL,
  `rescovid` varchar(25) DEFAULT 'NA',
  `datetest` date DEFAULT NULL,
  `loctest` varchar(50) NOT NULL DEFAULT 'NA',
  `cough` varchar(5) DEFAULT NULL,
  `diffbreathing` varchar(5) DEFAULT NULL,
  `fever` varchar(5) DEFAULT NULL,
  `flu` varchar(5) DEFAULT NULL,
  `sorethroat` varchar(5) DEFAULT NULL,
  `sense` varchar(5) DEFAULT NULL,
  `othersymptoms` varchar(5) DEFAULT NULL,
  `wcough` varchar(20) DEFAULT 'No',
  `poliom` varchar(20) DEFAULT 'No',
  `measles` varchar(10) DEFAULT 'No',
  `rabies` varchar(20) DEFAULT 'No',
  `chancroid` varchar(20) DEFAULT 'No',
  `rfever` varchar(20) DEFAULT 'No',
  `dfever` varchar(20) DEFAULT 'No',
  `syphilis` varchar(20) DEFAULT 'No',
  `yfever` varchar(20) DEFAULT 'No',
  `tetanus` varchar(20) DEFAULT 'No',
  `diphtheria` varchar(20) DEFAULT 'No',
  `tfever` varchar(20) DEFAULT 'No',
  `dysentries` varchar(20) DEFAULT 'No',
  `tuberculosis` varchar(20) DEFAULT 'No',
  `goninfections` varchar(20) DEFAULT 'No',
  `hep` varchar(20) DEFAULT 'No',
  `ebola` varchar(20) DEFAULT 'No',
  `conjunc` varchar(20) DEFAULT 'No',
  `foodpoi` varchar(20) DEFAULT 'No',
  `isd` varchar(20) DEFAULT 'No',
  `hfmd` varchar(20) DEFAULT 'No',
  `leprosy` varchar(20) DEFAULT 'No',
  `cholera` varchar(20) DEFAULT 'No',
  `plague` varchar(20) DEFAULT 'No',
  `applstatus` varchar(10) DEFAULT 'Pending',
  `dt_apply` datetime DEFAULT NULL,
  `dt_updstatus` datetime DEFAULT NULL,
  `dt_updsby` int(11) DEFAULT NULL,
  `covtestresult` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hd_0001`
--

INSERT INTO `hd_0001` (`hd_id`, `refnum`, `fullname`, `mykad`, `visoffice`, `appemail`, `entryin`, `entryout`, `radiocom`, `company`, `caddress`, `ccity`, `cstate`, `cpostal`, `telno`, `reasonentry`, `nameconperson`, `emailaddconperson`, `radio1`, `country`, `doafromcountries`, `radio2`, `radiozone`, `areafrom`, `radio3`, `radio4`, `rescovid`, `datetest`, `loctest`, `cough`, `diffbreathing`, `fever`, `flu`, `sorethroat`, `sense`, `othersymptoms`, `wcough`, `poliom`, `measles`, `rabies`, `chancroid`, `rfever`, `dfever`, `syphilis`, `yfever`, `tetanus`, `diphtheria`, `tfever`, `dysentries`, `tuberculosis`, `goninfections`, `hep`, `ebola`, `conjunc`, `foodpoi`, `isd`, `hfmd`, `leprosy`, `cholera`, `plague`, `applstatus`, `dt_apply`, `dt_updstatus`, `dt_updsby`, `covtestresult`) VALUES
(1, NULL, 'Muhammad Syaffiq', '870193016281', 'HQ', 'aiehazari@gmail.com', '2021-05-08', '2021-05-27', NULL, 'amsb', 'pengkalan chepa', 'KOTA BHARU', 'kelantan', '16100', '0192839283', 'report duty', 'syaffiq', 'aiehazari@gmail.com', 'yes', 'singapore', '0000-00-00', 'yes', '', 'kuala lumpur', 'yes', 'yes', 'neg', '2020-01-12', 'kota bharu', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-12 09:59:03', NULL, NULL, NULL),
(2, NULL, 'Hazari Zulkefli', '940382938473', 'HQ', 'syaffiq@gmail.com', '2021-05-23', '2021-05-21', NULL, 'amsb', 'taman seri keranji', 'Kota Bharu', 'kelantan', '16150', '0199566190', 'report duty', 'muhammad', 'mhd@amsb.com.my', 'yes', 'Thailand', '2021-05-13', 'yes', '', 'Petaling Jaya', 'no', 'yes', 'neg', '2021-05-07', 'Kubang Kerian, Kota Bharu.', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Approved', '2021-05-12 09:59:15', NULL, NULL, NULL),
(3, NULL, 'Syaffiq Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-02-09', '2021-03-09', NULL, 'amcsb', 'Pengkalan Chepa', 'Kota Bharu', 'Kelantan', '16000', '0199342312', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'no', '', '0000-00-00', 'no', '', '', 'no', 'no', 'neg', '1970-01-01', '', 'yes', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-12 09:59:19', NULL, NULL, NULL),
(4, NULL, 'Syaffiq Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-02-09', '2021-03-09', NULL, 'amcsb', 'Pengkalan Chepa', 'Kota Bharu', 'Kelantan', '16000', '0199342312', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'no', '', '0000-00-00', 'no', '', '', 'no', 'no', 'neg', '1970-01-01', '', 'yes', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Rejected', '2021-05-12 09:59:22', NULL, NULL, NULL),
(5, NULL, 'Syaffiq Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-05-23', '2021-05-27', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'Kota Bharu', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'no', '', '1970-01-01', 'no', '', '', 'no', 'no', 'neg', '1970-01-01', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Rejected', '2021-05-12 09:59:34', NULL, NULL, NULL),
(6, NULL, 'Syaffiq Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-05-04', '2021-05-27', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'Kota Bharu', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'no', '', '1970-01-01', 'no', '', '', 'no', 'no', 'neg', '1970-01-01', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Rejected', '2021-05-12 09:59:37', NULL, NULL, NULL),
(7, NULL, 'Mhd Syaffiq', '839432038281', 'Northern', 'syaffiq@gmail.com', '2021-05-27', '2021-06-01', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'Kota Bharu', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'no', '', '1970-01-01', 'yes', '', 'KL', 'no', 'no', 'neg', '1970-01-01', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-12 09:59:40', NULL, NULL, NULL),
(8, NULL, 'Syaffiq Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-07', '2021-05-21', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'Kota Bharu', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'yes', 'Malaysia', '2021-05-13', 'no', '', '', 'no', 'yes', 'neg', '2021-05-14', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-12 09:59:42', NULL, NULL, NULL),
(9, NULL, 'Syaffiq Hazari Zulkefli', '930493929383', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'No', '', '1970-01-01', 'No', '', '', 'Yes', 'Yes', 'neg', '2021-05-03', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-10 09:59:44', NULL, NULL, NULL),
(10, NULL, 'Syaffiq Hazari Zulkefli', '930493929383', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'No', '', '1970-01-01', 'No', '', '', 'Yes', 'Yes', 'neg', '2021-05-03', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-10 09:59:44', NULL, NULL, NULL),
(11, NULL, 'Syaffiq Hazari Zulkefli', '930493929383', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'No', '', '1970-01-01', 'No', '', '', 'Yes', 'Yes', 'neg', '2021-05-03', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-10 09:59:44', NULL, NULL, NULL),
(12, NULL, 'Syaffiq Hazari Zulkefli', '930493929383', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'No', '', '1970-01-01', 'No', '', '', 'Yes', 'Yes', 'neg', '2021-05-03', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-10 09:59:44', NULL, NULL, NULL),
(13, NULL, 'Syaffiq Hazari Zulkefli', '930493929383', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'No', '', '1970-01-01', 'No', '', '', 'Yes', 'Yes', 'neg', '2021-05-03', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-10 09:59:44', NULL, NULL, NULL),
(14, NULL, 'Syaffiq Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-19', '2021-06-04', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'No', 'neg', '1970-01-01', '', 'yes', 'yes', 'yes', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-10 09:59:44', NULL, NULL, NULL),
(15, NULL, 'Syaffiq Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-19', '2021-06-04', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'No', 'neg', '1970-01-01', '', 'yes', 'yes', 'yes', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-10 09:59:44', NULL, NULL, NULL),
(16, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Approved', '2021-05-23 09:59:44', NULL, NULL, NULL),
(17, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', NULL, NULL, NULL, NULL),
(18, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-23 14:53:58', NULL, NULL, NULL),
(19, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', NULL, NULL, NULL, NULL),
(20, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', NULL, NULL, NULL, NULL),
(21, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', NULL, NULL, NULL, NULL),
(22, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', NULL, NULL, NULL, NULL),
(23, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', NULL, NULL, NULL, NULL),
(24, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', NULL, NULL, NULL, NULL),
(25, NULL, 'Syaffiq Hazari Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-12', '2021-05-28', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Singapore', '2021-05-19', 'Yes', '', 'KL', 'No', 'Yes', 'neg', '2021-05-27', 'Kota Bharu', 'no', 'no', 'no', 'yes', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', NULL, NULL, NULL, NULL),
(26, NULL, 'Syaffiq Hazari', '940392018263', 'HQ', 'aiehazari@gmail.com', '2021-05-06', '2021-05-06', NULL, 'amcsb', 'LOT1627 KM10, PASIR TUMBOH', 'KOTA BHARU', 'KELANTAN', '16150', '0199566190', 'Report Duty', 'Muhammad', 'muhd@amsb.com.my', 'Yes', 'Malaysia', '2021-05-21', 'Yes', '', 'KL', 'Yes', 'Yes', 'neg', '2021-05-14', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-23 13:10:14', NULL, NULL, NULL),
(27, NULL, 'Ahmad Hilmi', '770908037281', 'HQ', 'hilmi@gmail.com', '2021-05-19', '2021-05-27', NULL, 'HP', 'Alamat 1', 'Kota Bharu', 'Kelantan', '15000', '019372932', 'Air con', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'No', 'neg', '1970-01-01', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Approved', '2021-05-23 13:11:21', NULL, NULL, NULL),
(28, NULL, 'Ahmad Hilmi', '770908037281', 'HQ', 'hilmi@gmail.com', '2021-05-19', '2021-05-27', NULL, 'HP', 'Alamat 1', 'Kota Bharu', 'Kelantan', '15000', '019372932', 'Air con', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'No', 'neg', '1970-01-01', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-23 13:11:25', NULL, NULL, NULL),
(29, NULL, 'Ahmad Hilmi', '770908037281', 'HQ', 'hilmi@gmail.com', '2021-05-23', '2021-05-27', NULL, 'HP', 'Alamat 1', 'Kota Bharu', 'Kelantan', '15000', '019372932', 'Air con', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'No', 'neg', '1970-01-01', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Approved', '2021-05-23 13:11:28', NULL, NULL, NULL),
(30, NULL, 'Ahmad Hilmi', '770908037281', 'HQ', 'hilmi@gmail.com', '2021-05-23', '2021-05-27', NULL, 'HP', 'Alamat 1', 'Kota Bharu', 'Kelantan', '15000', '019372932', 'Air con', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'No', 'neg', '1970-01-01', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-23 13:11:32', NULL, NULL, NULL),
(31, NULL, 'Ahmad Hilmi', '770908037281', 'HQ', 'hilmi@gmail.com', '2021-05-19', '2021-05-27', NULL, 'HP', 'Alamat 1', 'Kota Bharu', 'Kelantan', '15000', '019372932', 'Air con', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'No', 'neg', '1970-01-01', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-18 00:00:00', NULL, NULL, NULL),
(32, NULL, 'Farah Amir', '820304038472', 'Northern', 'farah@gmail.com', '2021-05-23', '2021-05-27', NULL, 'HP', '58 Casuarina', 'Ipoh', 'Perak', '32500', '0196283920', 'Network', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'No', 'neg', '1970-01-01', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-18 10:01:46', NULL, NULL, NULL),
(33, NULL, 'Khairulhaziq Zulkifli', '880304037263', 'HQ', 'khaziq@icloud.com', '2021-05-13', '2021-05-20', NULL, 'HP', '72B Jalan Helang', 'Langkawi', 'Kedah', '67500', '0192738239', 'Training', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'No', 'neg', '1970-01-01', '', 'yes', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-19 12:16:50', NULL, NULL, NULL),
(34, NULL, 'Farid Ahmad', '730103083749', 'Northern', 'faridmad@gmail.com', '2021-05-23', '2021-05-26', NULL, 'baru', 'Kedawang', 'Jitra', 'Kedah', '23400', '0183949238', 'Training', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '1970-01-01', 'No', '', '', 'No', 'Yes', 'neg', '2021-05-21', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-23 12:22:31', NULL, NULL, NULL),
(35, NULL, 'Farid Ahmad', '730103083749', 'Northern', 'faridmad@gmail.com', '2021-05-23', '2021-05-26', NULL, 'baru', 'Kedawang', 'Jitra', 'Kedah', '23400', '0183949238', 'Training', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '0000-00-00', 'No', '', '', 'No', 'Yes', 'neg', '2021-05-21', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-23 12:23:39', NULL, NULL, NULL),
(36, NULL, 'Farid Ahmad', '730103083749', 'Northern', 'faridmad@gmail.com', '2021-05-23', '2021-05-26', NULL, 'baru', 'Kedawang', 'Jitra', 'Kedah', '23400', '0183949238', 'Training', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '0000-00-00', 'No', '', '', 'No', 'Yes', 'neg', '2021-05-21', 'kubang kerian', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-19 12:25:20', NULL, NULL, NULL),
(37, NULL, 'Nolan Rusdi', '900403033843', 'HQ', 'nolan@gmail.com', '2021-05-20', '2021-05-27', NULL, 'amcsb', 'Panchor', 'Kota Bharu', 'Kelantan', '16780', '0192638293', 'Elektrik', 'Syaffiq', 'faridmad@gmail.com', 'No', '', '0000-00-00', 'No', '', '', 'No', 'No', 'neg', '0000-00-00', '', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-19 12:49:55', NULL, NULL, NULL),
(38, NULL, 'Allinda Saleh', '841204029809', 'HQ', 'allinda@gmail.com', '2021-05-20', '2021-05-26', NULL, 'RHB', '40B Labis', 'Segamat', 'Johor', '76400', '0129384792', 'Training', 'Syaffiq', 'syaffiq@am.com.my', 'No', '', '0000-00-00', 'No', '', '', 'No', 'Yes', 'neg', '2021-05-05', 'Segamat', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-19 04:48:16', NULL, NULL, '872420.pdf'),
(39, NULL, 'Muhammad Syaffiq Hazari bin Zulkefli', '930419036151', 'HQ', 'aiehazari@gmail.com', '2021-05-03', '2021-05-03', NULL, 'Ain Medicare Sdn Bhd', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Report Duty', 'Syaffiq', 'syaffiqhazari@ainmedicare.com.my', 'No', '', '0000-00-00', 'No', '', '', 'No', 'Yes', 'neg', '2021-05-03', 'Klinik Ummah, Kubang Kerian, Kota Bharu, Kelantan', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-19 05:01:38', NULL, NULL, '360581.pdf'),
(40, 'HD2140', 'Muhammad Syaffiq Hazari bin Zulkefli', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-05-25', '2021-05-27', NULL, 'ABC', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Report Duty', 'Syaffiq', 'aiehazari@gmail.com', 'Yes', 'Singapore', '2021-05-19', 'No', '', '', 'No', 'Yes', 'neg', '2021-05-13', 'kubang kerian', 'no', 'no', 'yes', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-23 05:46:42', NULL, NULL, '575058.pdf'),
(41, 'HD2141', 'Faiz Syazwan', '8912260504831', 'Northern', 'faiz@gmail.com', '2021-05-24', '2021-05-26', NULL, 'Faiesh', 'Selayang Indah', 'Gombak', 'Selangor', '54300', '0127483749', 'Training', 'Syaffiq', 'syaffiqhazari@ainmedicare.com.my', 'No', '', '0000-00-00', 'No', '', '', 'No', 'Yes', 'neg', '2021-05-24', 'Selayang', 'no', 'no', 'no', 'no', 'no', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-05-24 11:18:22', NULL, NULL, '62866.pdf'),
(42, 'HD2142', 'Syaffiq Zulkefli', '934832493022', 'HQ', 'syaffiq@gmail.com', '2021-06-03', '2021-06-17', 'Individual', '', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Report Duty', 'Muhammad Syaffiq Hazari bin Zulkefli', 'aiehazari@gmail.com', 'No', '', '0000-00-00', 'Yes', 'MCO / PKP', 'KL', 'No', 'Yes', 'Negative /', '2021-06-24', 'Kota Bharu', 'No', 'No', 'No', 'No', NULL, 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Pending', '2021-06-02 12:09:50', NULL, NULL, '409615.png'),
(43, 'HD2143', 'Syaffiq Zulkefli', '934832493022', 'Northern', 'syaffiq@gmail.com', '2021-06-05', '2021-06-10', 'Organisation', 'Faiesh', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Training', 'Syaffiq Zulkefli', 'syaffiq@gmail.com', 'No', '', '0000-00-00', 'Yes', 'Red Zone / Zon Merah', 'KL', 'No', 'No', NULL, '0000-00-00', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-06-02 12:19:11', NULL, NULL, ''),
(44, 'HD2144', 'Muhammad Syaffiq Hazari bin Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-06-19', '2021-06-23', 'Individual', '', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Training', 'Syaffiq Hazari', 'aiehazari@gmail.com', 'No', '', '0000-00-00', 'No', 'None / Tiada', '', 'No', 'No', 'Negative / Negatif', '0000-00-00', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-06-02 12:34:29', NULL, NULL, ''),
(45, 'HD2145', 'Muhammad Syaffiq Hazari bin Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-06-19', '2021-06-23', 'Individual', '', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Training', 'Syaffiq Hazari', 'aiehazari@gmail.com', 'No', '', '0000-00-00', 'No', 'None / Tiada', '', 'No', 'No', 'Negative / Negatif', '0000-00-00', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-06-02 12:35:07', NULL, NULL, ''),
(46, 'HD2146', 'Muhammad Syaffiq Hazari bin Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-06-19', '2021-06-23', 'Individual', '', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Training', 'Syaffiq Hazari', 'aiehazari@gmail.com', 'No', '', '0000-00-00', 'No', 'None / Tiada', '', 'No', 'No', 'Negative / Negatif', '0000-00-00', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-06-02 12:37:48', NULL, NULL, ''),
(47, 'HD2147', 'Muhammad Syaffiq Hazari bin Zulkefli', '934832493022', 'Northern', 'aiehazari@gmail.com', '2021-06-19', '2021-06-23', 'Individual', '', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Training', 'Syaffiq Hazari', 'aiehazari@gmail.com', 'No', '', '0000-00-00', 'No', 'None / Tiada', '', 'No', 'No', 'Negative / Negatif', '0000-00-00', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2021-06-02 12:41:25', NULL, NULL, ''),
(48, 'HD2148', 'Muhammad bin Zulkefli', '934832493022', 'HQ', 'muhammadz@gmail.com', '2021-06-10', '2021-06-19', 'Individual', '', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Report Duty', 'Muhammad Syaffiq Hazari bin Zulkefli', 'aiehazari@gmail.com', 'No', '', '0000-00-00', 'No', 'None / Tiada', '', 'No', 'No', 'Negative / Negatif', '0000-00-00', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-06-02 12:42:37', NULL, NULL, ''),
(49, 'HD2149', 'Syaffiq Hazari', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-06-24', '2021-06-18', 'Individual', '', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Training', 'Muhammad Syaffiq Hazari bin Zulkefli', 'aiehazari@gmail.com', 'No', '', '0000-00-00', 'No', 'None / Tiada', '', 'Yes', 'No', 'Negative / Negatif', '0000-00-00', '', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-06-02 12:44:37', NULL, NULL, ''),
(50, 'HD2150', 'Syaffiq Hazari', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-06-24', '2021-06-18', 'Individual', '', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Training', 'Muhammad Syaffiq Hazari bin Zulkefli', 'aiehazari@gmail.com', 'No', '', '0000-00-00', 'No', 'None / Tiada', '', 'Yes', 'No', 'Negative / Negatif', '0000-00-00', '', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-06-02 12:44:50', NULL, NULL, ''),
(51, 'HD2151', 'Syaffiq Hazari', '934832493022', 'HQ', 'aiehazari@gmail.com', '2021-06-24', '2021-06-18', 'Individual', '', 'Jalan 6/44, Kawasan Perindustrian Pengkalan Chepa 2', 'Kota Bharu', 'Kelantan', '16150', '0199566190', 'Training', 'Muhammad Syaffiq Hazari bin Zulkefli', 'aiehazari@gmail.com', 'No', '', '0000-00-00', 'No', 'None / Tiada', '', 'Yes', 'No', 'Negative / Negatif', '0000-00-00', '', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Pending', '2021-06-02 12:46:26', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hd_0001`
--
ALTER TABLE `hd_0001`
  ADD PRIMARY KEY (`hd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hd_0001`
--
ALTER TABLE `hd_0001`
  MODIFY `hd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
