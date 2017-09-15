-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 12:46 AM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

DROP TABLE IF EXISTS `tbl_uploads`;
CREATE TABLE IF NOT EXISTS `tbl_uploads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`) VALUES
(1, '70455-(r)11d.jpg', 'image/jpeg', 19),
(2, '77190-3d-glass-green-effect.jpg', 'image/jpeg', 249),
(3, '40188-list_holidays_9jan2017.pdf', 'application/pdf', 544),
(4, '12973-invoice-od508645830178507000.pdf', 'application/pdf', 82),
(5, '85952-xinput1_3.zip', 'application/zip', 44),
(6, '80426-soict_coursestrucsyllabi_5yrdualse_6feb15.pdf', 'application/pdf', 563),
(7, '23357-common-android-views-cheat-sheet.pdf', 'application/pdf', 188),
(8, '29532-aad.0.jpg', 'image/jpeg', 87),
(9, '75256-apple-laptops-wallpapers.jpg', 'image/jpeg', 510),
(10, '35862-apple-hd-wallpapers-for-laptop.jpg', 'image/jpeg', 103),
(11, '34499-162762-joker-hd.jpg', 'image/jpeg', 169),
(12, '1993-java-advantages.doc', 'application/msword', 39),
(14, '52527-gbu-counciling-letter.pdf', 'application/pdf', 110),
(15, '99940-15---1-(1).jpg', 'image/jpeg', 57),
(16, '13148-15---1.jpg', 'image/jpeg', 99),
(17, '20478-1111.jpg', 'image/jpeg', 876);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
