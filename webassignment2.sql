-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220731.8ef83c070e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 01, 2022 at 04:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webassignment2`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_t`
--

CREATE TABLE `child_t` (
  `child_id` int(11) NOT NULL,
  `m_healthcard` varchar(9) NOT NULL,
  `c_firstname` varchar(45) DEFAULT NULL,
  `c_lastname` varchar(45) DEFAULT NULL,
  `DOB` date NOT NULL,
  `SEX` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_t`
--

INSERT INTO `child_t` (`child_id`, `m_healthcard`, `c_firstname`, `c_lastname`, `DOB`, `SEX`) VALUES
(1, 'NO7894562', 'Forest', 'Ly', '2000-02-18', 'M'),
(2, 'NO7894562', 'Stream', 'Ly', '2005-12-23', 'F'),
(3, 'NT1234567', 'Sugar', 'Brown', '2003-05-10', 'F'),
(4, 'AB7654321', 'Bird', 'White', '2010-10-30', 'M'),
(5, 'AI8523697', 'Dave', 'Jone', '2010-03-10', 'M'),
(6, 'AI8523697', 'Chris', 'Jone', '2015-05-02', 'M'),
(7, 'AI8523697', 'Jun', 'Jone', '2020-12-01', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `mother_t`
--

CREATE TABLE `mother_t` (
  `momhealthcard` varchar(9) NOT NULL,
  `momfullname` varchar(100) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother_t`
--

INSERT INTO `mother_t` (`momhealthcard`, `momfullname`, `email`, `password`) VALUES
('AB7654321', 'White', '5346 Queen Street, Ottawa, ON,', 'QQQqqq10'),
('AI8523697', 'Ju', '2516 Alta Visa Dr. Ottawa, ON,', 'cuiteBB123'),
('CS7412589', 'Red', '55 Harwood Ave.S, Toroto, ON M', '000$Oqbb'),
('NO7894562', 'Green', '3641 Flinton Road, Flinton, ON', '147852AB'),
('NT1234567', 'Brown', '7855 Sideroad 30, Kinston, ON,', '568ABCD87');

-- --------------------------------------------------------

--
-- Table structure for table `record_t`
--

CREATE TABLE `record_t` (
  `childid` int(11) NOT NULL,
  `SKU` varchar(10) NOT NULL,
  `vaccine_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_t`
--

INSERT INTO `record_t` (`childid`, `SKU`, `vaccine_date`) VALUES
(6, 'GSDPTD', '2016-08-10'),
(6, 'GSHPTB', '2015-05-03'),
(6, 'GSHPTB', '2016-05-05'),
(6, 'GSPERT', '2016-08-10'),
(6, 'SPTLNS', '2016-08-10'),
(7, 'GSDPTD', '2021-04-03'),
(7, 'GSHPTB', '2020-12-02'),
(7, 'GSHPTB', '2021-01-03'),
(7, 'GSPERT', '2021-04-03'),
(7, 'SPTLNS', '2021-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_t`
--

CREATE TABLE `vaccine_t` (
  `SKU` varchar(10) NOT NULL,
  `vaccine_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine_t`
--

INSERT INTO `vaccine_t` (`SKU`, `vaccine_name`) VALUES
('GSDPTD', 'Diphtheria'),
('GSHPTB', 'Hepatits B'),
('GSMMPS', 'Mumps'),
('GSPERT', 'Pertussis'),
('GSPIPV', 'Polio(IPV)'),
('GSPOPV', 'Polio(OPV)'),
('GSRUBA', 'Rubella'),
('GSVLLA', 'Vricella'),
('SPHIB', 'Hib'),
('SPHMPS', 'Human Papillomavirus'),
('SPMCAC', 'Men-conjugate-ACYW'),
('SPMCJC', 'Men-conjugate-C'),
('SPMSLE', 'Measles'),
('SPPC13', 'Pneumo-conjugate-13'),
('SPRTRS', 'Rotavirus'),
('SPSEAIF', 'Seasonal Influenza'),
('SPTLNS', 'Telanus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_t`
--
ALTER TABLE `child_t`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `mhc_fk` (`m_healthcard`);

--
-- Indexes for table `mother_t`
--
ALTER TABLE `mother_t`
  ADD PRIMARY KEY (`momhealthcard`);

--
-- Indexes for table `record_t`
--
ALTER TABLE `record_t`
  ADD PRIMARY KEY (`childid`,`SKU`,`vaccine_date`),
  ADD KEY `sku_fk` (`SKU`),
  ADD KEY `childid` (`childid`);

--
-- Indexes for table `vaccine_t`
--
ALTER TABLE `vaccine_t`
  ADD PRIMARY KEY (`SKU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_t`
--
ALTER TABLE `child_t`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child_t`
--
ALTER TABLE `child_t`
  ADD CONSTRAINT `mhc_fk` FOREIGN KEY (`m_healthcard`) REFERENCES `mother_t` (`momhealthcard`);

--
-- Constraints for table `record_t`
--
ALTER TABLE `record_t`
  ADD CONSTRAINT `cid_fk` FOREIGN KEY (`childid`) REFERENCES `child_t` (`child_id`),
  ADD CONSTRAINT `sku_fk` FOREIGN KEY (`SKU`) REFERENCES `vaccine_t` (`SKU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
