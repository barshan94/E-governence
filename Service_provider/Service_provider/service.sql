-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 08:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `sname` varchar(100) NOT NULL,
  `snumber` varchar(100) NOT NULL,
  `sdistrict` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`sname`, `snumber`, `sdistrict`) VALUES
('Victoria Ambulance', '1400', 'Narayanganj'),
('Modern Ambulance', '05569874563', 'Dhaka'),
('Popular Ambulance', '02769874563', 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `fire`
--

CREATE TABLE `fire` (
  `sname` varchar(100) NOT NULL,
  `snumber` varchar(100) NOT NULL,
  `sdistrict` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fire`
--

INSERT INTO `fire` (`sname`, `snumber`, `sdistrict`) VALUES
('Narail Fire Station', '025896352', 'Narail'),
('Kurmitola Fire Station', '01556321456', 'Kurmitola');

-- --------------------------------------------------------

--
-- Table structure for table `more`
--

CREATE TABLE `more` (
  `sname` varchar(100) NOT NULL,
  `surl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `more`
--

INSERT INTO `more` (`sname`, `surl`) VALUES
('Covid Vaccination', 'https://surokkha.gov.bd/'),
('', ''),
('', ''),
('E-passport', 'https://www.epassport.gov.bd/landing'),
('Dhaka Education Board', 'https://dhakaeducationboard.gov.bd/');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `sname` varchar(100) NOT NULL,
  `snumber` varchar(15) NOT NULL,
  `sdistrict` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`sname`, `snumber`, `sdistrict`) VALUES
('ABBBBBA', '1500', 'Barisal'),
('Bhola Police Station', '01556321456', 'Bhola'),
('Tangail Police Station', '01446321456', 'Tangail');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`name`, `uname`, `age`, `email`, `pass`, `mobile`) VALUES
('bgb', 'bgb1', '21', 'streamingbd51@gmail.com', '123456', '01624811454'),
('Shubrata Das', 'sd1', '23', 'kehot82375@tigasu.com', '123456', '01236547891'),
('vcvcvc', 'ad', '25', 'streamingbd51@gmail.com', '111111', '23456789123'),
('Amit Kumar Saha', 'amitspc', '26', 'amit@gmail.com', '123456789', '01676923286'),
('Barshan', 'asasasas', '16', 'streamingbd51@gmail.com', '123456789', '123654897456'),
('Shubrata Das', 'Doe1236', '19', 'barshan.ghosh2@gmail.com', '12345678', '111111111111111111'),
('Sumon', 'sumon1', '19', 'streamingbd51@gmail.com', '123456', '01589632147');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
