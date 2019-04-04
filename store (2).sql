-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2018 at 10:08 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safe house systemds`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE IF NOT EXISTS `store` (
  `d_id` int(11) NOT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `d_name` varchar(20) DEFAULT NULL,
  `mf_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL,
  `cost` double DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`d_id`, `doc_id`, `d_name`, `mf_date`, `exp_date`, `quantity`, `cost`) VALUES
(1000, 101, 'asprine', '2019-07-07', '2020-07-07', 54, 100),
(1001, 102, 'paracetamol', '2018-07-05', '2019-07-06', 12, 8),
(1006, 106, 'crocin', '2016-05-03', '2019-06-08', 50, 26),
(1009, 108, 'saradon', '2014-06-20', '2019-06-08', 45, 78);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
