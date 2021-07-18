-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 10:37 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `fullname` varchar(50) NOT NULL,
  `mykad` varchar(30) NOT NULL,
  `appemail` varchar(20) NOT NULL,
  `entryin` date NOT NULL,
  `entryout` date NOT NULL,
  `company` varchar(20) NOT NULL,
  `caddress` varchar(100) NOT NULL,
  `cstate` varchar(20) NOT NULL,
  `cpostal` varchar(10) NOT NULL,
  `telno` varchar(30) NOT NULL,
  `reasonentry` varchar(100) NOT NULL,
  `nameconperson` varchar(50) NOT NULL,
  `emailaddconperson` varchar(30) NOT NULL,
  `radio1` varchar(5) NOT NULL,
  `country` varchar(100) NOT NULL,
  `doafromcountries` date NOT NULL,
  `radio2` varchar(5) NOT NULL,
  `individu` varchar(100) NOT NULL,
  `areafrom` varchar(100) NOT NULL,
  `radio3` varchar(5) NOT NULL,
  `radio4` varchar(5) NOT NULL,
  `rescovid` varchar(10) NOT NULL,
  `datetest` date NOT NULL,
  `loctest` varchar(50) NOT NULL,
  `cough` varchar(5) NOT NULL,
  `diffbreathing` varchar(5) NOT NULL,
  `fever` varchar(5) NOT NULL,
  `flu` varchar(5) NOT NULL,
  `sorethroat` varchar(5) NOT NULL,
  `othersymptoms` varchar(300) NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hd_0001`
--

INSERT INTO `hd_0001` (`hd_id`, `fullname`, `mykad`, `appemail`, `entryin`, `entryout`, `company`, `caddress`, `cstate`, `cpostal`, `telno`, `reasonentry`, `nameconperson`, `emailaddconperson`, `radio1`, `country`, `doafromcountries`, `radio2`, `individu`, `areafrom`, `radio3`, `radio4`, `rescovid`, `datetest`, `loctest`, `cough`, `diffbreathing`, `fever`, `flu`, `sorethroat`, `othersymptoms`, `timestamps`) VALUES
(1, 'muhammad syaffiq', '930193016281', 'aiehazari@gmail.com', '2021-05-08', '2021-05-27', 'amsb', 'pengkalan chepa', 'kelantan', '16100', '0192839283', 'report duty', 'syaffiq', 'aiehazari@gmail.com', 'yes', 'singapore', '0000-00-00', 'yes', 'spouse', 'kuala lumpur', 'yes', 'yes', 'neg', '2020-01-12', 'kota bharu', 'no', 'no', 'no', 'no', 'no', 'no', '2021-05-11 08:30:42'),
(2, 'hazari zulkefli', '940382938473', 'syaffiq@gmail.com', '2021-05-05', '2021-05-21', 'amsb', 'taman seri keranji', 'kelantan', '16150', '0199566190', 'report duty', 'muhammad', 'mhd@amsb.com.my', 'yes', 'Thailand', '2021-05-13', 'yes', 'spouse', 'Petaling Jaya', 'no', 'yes', 'neg', '2021-05-07', 'Kubang Kerian, Kota Bharu.', 'no', 'no', 'no', 'no', 'no', 'no other symptoms', '2021-05-11 08:36:10');

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
  MODIFY `hd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
