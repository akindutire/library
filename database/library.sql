-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 08:18 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `id` int(11) NOT NULL,
  `callno` text NOT NULL,
  `date` text NOT NULL,
  `lib_id` int(11) NOT NULL,
  `toreturnedon` text NOT NULL,
  `requeststatus` text NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `br`
--

CREATE TABLE `br` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `event` text NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 'ND 1'),
(2, 'ND 2'),
(3, 'HND 1'),
(4, 'HND 2');

-- --------------------------------------------------------

--
-- Table structure for table `libclass`
--

CREATE TABLE `libclass` (
  `id` int(11) NOT NULL,
  `class` text NOT NULL,
  `acry` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libclass`
--

INSERT INTO `libclass` (`id`, `class`, `acry`) VALUES
(1, 'General Works', 'A'),
(2, 'Philosophy,Psychology and Religion', 'B'),
(3, 'Auxiliary Science of History', 'C'),
(4, 'General and Old World History', 'D'),
(5, 'History of Nigeria', 'E'),
(6, 'History of British and Africa', 'F'),
(7, 'Geography, Anthropology and Recreation', 'G'),
(8, 'Social Science', 'H'),
(9, 'Political Science', 'J'),
(10, 'Law', 'K'),
(11, 'Education', 'L'),
(12, 'Music', 'M'),
(13, 'Fine Arts', 'N'),
(14, 'Language and Literature', 'P'),
(15, 'Science', 'Q'),
(16, 'Medicine', 'R'),
(17, 'Agriculture', 'S'),
(18, 'Technology', 'T'),
(19, 'Military Science', 'U'),
(20, 'Naval Science', 'V'),
(21, 'Biblography,Library Science, and General Information Resources', 'Z'),
(23, 'arts and humanities', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `cls` int(11) NOT NULL,
  `title` text NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `uid` varchar(115) NOT NULL,
  `pdf` text NOT NULL,
  `pubdate` varchar(40) NOT NULL,
  `author` text NOT NULL,
  `callno` text NOT NULL,
  `pub_by` text NOT NULL,
  `added_on` text NOT NULL,
  `sbcls` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `cls`, `title`, `isbn`, `uid`, `pdf`, `pubdate`, `author`, `callno`, `pub_by`, `added_on`, `sbcls`) VALUES
(10, 1, 'Ggg', '767676767', '7', '1440457639author.pdf', '2000', 'Jhhiouoio', 'AE1.G12000', 'kjhjlkk', 'Tue, Aug 2015: 01:07:45 am', 2),
(12, 1, 'Laravel', '99499958', '7', '1440457787laravel 3.3.pdf', '2010', 'Larry Ullman', 'AE11.L12010', 'Artic press.nyc,usa', 'Tue, Aug 2015: 01:11:17 am', 2),
(13, 2, 'Geogeon Valley', '90-26874873', '7', '1441034274chapter three.docx', '2005', 'Author Wilson Thresla', 'Bd1.G12005', 'Atlanic Press,NYC,USA', 'Mon, Aug 2015: 17:18:57 pm', 16);

-- --------------------------------------------------------

--
-- Table structure for table `performancetab`
--

CREATE TABLE `performancetab` (
  `id` int(11) NOT NULL,
  `ifr` text NOT NULL,
  `tg` text NOT NULL,
  `st` int(11) NOT NULL,
  `lm` varchar(78) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performancetab`
--

INSERT INTO `performancetab` (`id`, `ifr`, `tg`, `st`, `lm`) VALUES
(1, '1439686429', '1447638829', 1, '1445892154');

-- --------------------------------------------------------

--
-- Table structure for table `rec`
--

CREATE TABLE `rec` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `sh` text NOT NULL,
  `encoded` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rec`
--

INSERT INTO `rec` (`id`, `uid`, `sh`, `encoded`) VALUES
(1, 4, '645542838c0381db8c42232ad07d2a8f98d26379', 'grassroot'),
(2, 5, '645542838c0381db8c42232ad07d2a8f98d26379', 'grassroot'),
(3, 6, '645542838c0381db8c42232ad07d2a8f98d26379', 'grassroot'),
(4, 7, '645542838c0381db8c42232ad07d2a8f98d26379', 'grassroot'),
(5, 8, '645542838c0381db8c42232ad07d2a8f98d26379', 'grassroot');

-- --------------------------------------------------------

--
-- Table structure for table `sbclass`
--

CREATE TABLE `sbclass` (
  `id` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `sbclass` text NOT NULL,
  `acry` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbclass`
--

INSERT INTO `sbclass` (`id`, `classid`, `sbclass`, `acry`) VALUES
(1, 1, 'Collections: Series,Collected Works', 'C'),
(2, 1, 'Encyclopedias', 'E'),
(3, 1, 'Dictionaries and Other General Reference', 'G'),
(4, 1, 'Indexes', 'I'),
(5, 1, 'Museums, Collectors and Collecting', 'M'),
(6, 1, 'Newspapers', 'N'),
(7, 1, 'Periodicals', 'P'),
(8, 1, 'Academies and Learned Societies', 'S'),
(9, 1, 'Yearbooks, Almanacs, Directories', 'Y'),
(10, 1, 'History of Scholarship and Learning', 'Z'),
(11, 3, 'History of Civilization', 'B'),
(12, 3, 'Archology', 'C'),
(13, 3, 'Diplomatics', 'D'),
(14, 3, 'Technical Chronology', 'E'),
(15, 2, 'logic', 'c'),
(16, 2, 'speculative philosophy', 'd'),
(17, 2, 'psychology', 'f'),
(18, 8, 'finance', 'g'),
(19, 3, 'yyyryyr', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` text NOT NULL,
  `name` text NOT NULL,
  `mat` text NOT NULL,
  `password` text NOT NULL,
  `pix` text NOT NULL,
  `regdate` text NOT NULL,
  `expire` text NOT NULL,
  `sex` text NOT NULL,
  `bk` varchar(2) NOT NULL,
  `dpt` text NOT NULL,
  `addr` text NOT NULL,
  `extrights` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `mat`, `password`, `pix`, `regdate`, `expire`, `sex`, `bk`, `dpt`, `addr`, `extrights`) VALUES
(1, 'Staff', 'Akinsuyi Grate Wilson', 'cliqs@403.com', 'cbaac6303676c08e8dfa39d51d0d09e947878ad5', '1274882akinsuyi.jpg', 'Wed, Aug 2015: 05:33:04 am', '', 'Male', '0', '', '', 1),
(8, 'Student', 'Adekunle Sukanmi', 'SO5/COM/2012/516', '645542838c0381db8c42232ad07d2a8f98d26379', '144005033310177882_10152810629628916_5949031253159728046_n.jpg', 'Thu, Aug 2015: 07:59:51 am', '1471672791', 'Male', '0', 'Computer Science', '7 Igbolodu', 0),
(7, 'Staff', 'Akindutire Funmbi Imoleayo', '08107926082', '645542838c0381db8c42232ad07d2a8f98d26379', '144004756462144_399396086847303_658717517_n.jpg', 'Thu, Aug 2015: 07:13:08 am', '1471669988', 'Female', '0', '', '67 Nyc Beach', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `br`
--
ALTER TABLE `br`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libclass`
--
ALTER TABLE `libclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performancetab`
--
ALTER TABLE `performancetab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rec`
--
ALTER TABLE `rec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbclass`
--
ALTER TABLE `sbclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrower`
--
ALTER TABLE `borrower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `br`
--
ALTER TABLE `br`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `libclass`
--
ALTER TABLE `libclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `performancetab`
--
ALTER TABLE `performancetab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rec`
--
ALTER TABLE `rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sbclass`
--
ALTER TABLE `sbclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
