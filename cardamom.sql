-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2018 at 02:27 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cardamom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `name`, `password`, `image`) VALUES
('admin', 'Admin', 'admin', 'img/Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cardamom`
--

CREATE TABLE IF NOT EXISTS `cardamom` (
  `number` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `place` varchar(100) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cardamom`
--

INSERT INTO `cardamom` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'Black Cardamon ', 240, 'img/cardamom4.png', '15 3   2018, at 6.00 am', 'Bodinayakanur '),
(3, 'Small Cardamon', 0, 'img/cardamom3.png', '15 3   2018, at 6.00 am', 'Theni'),
(2, 'cardamom  ', 550, 'img/cardamom5.png', '25 4   2018, at 2.08 pm', 'Theni '),
(6, 'cardamom-2', 700, 'img/cardamom1.png', '25 4   2018, at 2.13 pm', 'MUNNAR'),
(7, 'cardamom 1', 900, 'img/cardamom2.png', '25 4   2018, at 2.14 pm', 'BODINAYAKANUR');

-- --------------------------------------------------------

--
-- Table structure for table `cardamon`
--

CREATE TABLE IF NOT EXISTS `cardamon` (
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardamon`
--


-- --------------------------------------------------------

--
-- Table structure for table `cinnamon`
--

CREATE TABLE IF NOT EXISTS `cinnamon` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cinnamon`
--

INSERT INTO `cinnamon` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'cinnamon', '780\r\n', 'img/cinnamon.png', '22 3   2018, at 8.57 pm', 'madurai'),
(2, 'CINNAMON', '789\r\n', 'img/cinnamon2.png', '25 4   2018, at 2.18 pm', 'THENI'),
(3, 'CINNAMON 2', '678\r\n', 'img/cinnamon1.png', '25 4   2018, at 2.18 pm', 'Theni'),
(4, 'CINNAMON SMALL', '800\r\n', 'img/cinnamon.png', '25 4   2018, at 2.19 pm', 'BODINAYAKANUR');

-- --------------------------------------------------------

--
-- Table structure for table `clove`
--

CREATE TABLE IF NOT EXISTS `clove` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `clove`
--

INSERT INTO `clove` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'clove 23', '500\r\n', 'img/clove3.png', '18 3   2018, at 7.38 pm', 'Bodinayakanur'),
(2, 'CLOVE', '300\r\n', 'img/clove2.png', '25 4   2018, at 2.17 pm', 'MADURAI'),
(3, 'CLOVE 2', '380\r\n', 'img/clove.png', '25 4   2018, at 2.17 pm', 'COVAI');

-- --------------------------------------------------------

--
-- Table structure for table `fennel`
--

CREATE TABLE IF NOT EXISTS `fennel` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(55) NOT NULL,
  `place` varchar(55) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fennel`
--

INSERT INTO `fennel` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'fennel', '78\r\n', 'img/fennel1.png', '22 3   2018, at 9.03 pm', 'thenbi');

-- --------------------------------------------------------

--
-- Table structure for table `garlic`
--

CREATE TABLE IF NOT EXISTS `garlic` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(55) NOT NULL,
  `place` varchar(55) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `garlic`
--

INSERT INTO `garlic` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'garlic ', '123 ', 'img/garlic2.png', '25 4   2018, at 2.22 pm', 'BODI'),
(2, 'GARLIC 1', '450\r\n', 'img/garlic1.png', '25 4   2018, at 2.21 pm', 'THENI'),
(3, 'GARLIC 2', '450\r\n', 'img/garlic4.png', '25 4   2018, at 2.22 pm', 'MADURAI'),
(4, 'GARLIC 6', '600\r\n', 'img/garlic3.png', '25 4   2018, at 2.23 pm', 'THENI');

-- --------------------------------------------------------

--
-- Table structure for table `ginger`
--

CREATE TABLE IF NOT EXISTS `ginger` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `place` varchar(55) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ginger`
--

INSERT INTO `ginger` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'ginger -3', '345 ', 'img/ginger2.png', '25 4   2018, at 2.11 pm', 'Bodinayakanur '),
(2, 'GINGER 2 ', '210 ', 'img/ginger soft rot  (1).jpg', '25 4   2018, at 2.12 pm', 'MADURAI '),
(3, 'GINGER 1', '450\r\n', 'img/ginger.jpg', '25 4   2018, at 2.19 pm', 'THENI'),
(4, 'GINGER 5', '300\r\n', 'img/ginger.png', '25 4   2018, at 2.20 pm', 'BODI');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `time` varchar(40) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`no`, `name`, `email`, `phone`, `time`, `msg`, `status`) VALUES
(1, 'gowtham rombha nallavan', 'jgtjkj', 3454656, '25 3   2018, at 6.33 pm', 'hi', 0),
(2, 'gowtham rombha nallavan', 'jgtjkj', 3454656, '25 3   2018, at 6.35 pm', 'hi', 0),
(4, 'Gowri', 'gllkl', 4464656, '25 3   2018, at 6.37 pm', 'ghhg', 0),
(6, 'rnkjhkj1jh', 'hj', 0, '25 3   2018, at 6.39 pm', 'jhj', 1),
(7, 'rnkjhkj1jh', 'hj', 0, '25 3   2018, at 6.39 pm', 'jhj', 1),
(8, 'rnkjhkj1jh', 'hj', 0, '25 3   2018, at 6.40 pm', 'jhj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `number` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`number`, `name`, `image`, `price`, `time`, `details`) VALUES
(1, 'Big Cardamon      ', 'img/cardamom4.png', '567      ', '18 3   2018, at 3.49 pm', 'Today Only This Offers Don''t Miss It     '),
(2, 'Black pepper ', 'img/pepper4.png', '550 ', '18 3   2018, at 1.47 pm', 'Black Pepper from theni '),
(3, 'Clove', 'img/clove3.png', '600', '18 3   2018, at 3.38 pm', 'hi'),
(4, 'Ginner', 'img/ginger1.png', '456', '18 3   2018, at 3.50 pm', 'hii'),
(5, 'Turmeric', 'img/turmeric.png', '430', '18 3   2018, at 4.05 pm', 'turmeric'),
(6, 'Tamarind', 'img/tamarind1.png', '890', '18 3   2018, at 4.07 pm', 'hi'),
(7, 'gowtham', 'img/cinnamon2.png', '560', '25 3   2018, at 1.31 pm', 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `number` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--


-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE IF NOT EXISTS `pay` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `image` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  `cno` int(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(30) NOT NULL,
  `cvc` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`no`, `email`, `name`, `phone`, `image`, `address`, `proname`, `img`, `price`, `time`, `cno`, `month`, `year`, `cvc`, `status`) VALUES
(1, 'gowthamrn4@gmail.com', 'Gowtham', 2147483647, 'img/cardamom4.png', 'kerala', 'Black Cardamon ', 'img/5618389e-93bf-4d24-bc73-c5f073d50fe2.jpg', '240', '25 3   2018, at 3.37 pm', 343, 433, 3, 3, 0),
(2, 'gowthamrn4@gmail.com', 'Gowtham', 2147483647, 'img/cardamom4.png', 'theni', 'Black Cardamon ', 'img/5618389e-93bf-4d24-bc73-c5f073d50fe2.jpg', '240', '25 3   2018, at 3.37 pm', 2345, 5, 56, 565, 0),
(3, 'gowthamrn13@gmail.com', 'gowtham', 2147483647, 'img/cardamom4.png', 'jhuhi', 'Black Cardamon ', 'img/Chrysanthemum.jpg', '240', '7 4   2018, at 6.47 pm', 8998, 989, 89, 99, 1),
(4, 'gowthamrn13@gmail.com', 'gowtham', 2147483647, 'img/cardamom4.png', 'iuiu', 'Black Cardamon ', 'img/Chrysanthemum.jpg', '240', '7 4   2018, at 6.50 pm', 455, 112, 11, 1, 1),
(5, 'gowthamrn13@gmail.com', 'gowtham', 2147483647, 'img/cardamom4.png', 'yuyu', 'Black Cardamon ', 'img/Chrysanthemum.jpg', '240', '7 4   2018, at 6.59 pm', 45454, 54, 45, 45, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pepper`
--

CREATE TABLE IF NOT EXISTS `pepper` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pepper`
--

INSERT INTO `pepper` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'PEPPER 1', '600 ', 'img/pepper4.png', '25 4   2018, at 2.14 pm', 'Theni '),
(2, 'Pepper ', '450 ', 'img/pepper5.png', '25 4   2018, at 2.14 pm', 'Bodinayakanur '),
(3, 'PEPPER 3', '356\r\n', 'img/pepper3.png', '25 4   2018, at 2.15 pm', 'MADURAI'),
(4, 'PEPPER 0', '190\r\n', 'img/pepper.png', '25 4   2018, at 2.16 pm', 'BODINAYAKANUR');

-- --------------------------------------------------------

--
-- Table structure for table `reviewcardamon`
--

CREATE TABLE IF NOT EXISTS `reviewcardamon` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(40) NOT NULL,
  `review` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `reviewcardamon`
--

INSERT INTO `reviewcardamon` (`no`, `name`, `image`, `time`, `review`, `mark`, `status`) VALUES
(1, 'gowtham', 'img/Chrysanthemum.jpg', '8 4   2018, at 5.47 am', 'very good', 1, 1),
(2, 'gowtham', 'img/Chrysanthemum.jpg', '8 4   2018, at 5.49 am', 'very good', 1, 1),
(3, 'gowtham', 'img/Chrysanthemum.jpg', '8 4   2018, at 5.49 am', 'very good', 1, 1),
(4, 'Gowri', 'img/PicsArt_08-04-01.54.53.jpg', '25 4   2018, at 4.28 am', 'bad', 2, 1),
(5, 'Gowri', 'img/PicsArt_08-04-01.54.53.jpg', '25 4   2018, at 4.28 am', 'gnfkjngkr', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviewcin`
--

CREATE TABLE IF NOT EXISTS `reviewcin` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(55) NOT NULL,
  `review` varchar(55) NOT NULL,
  `mark` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviewcin`
--

INSERT INTO `reviewcin` (`no`, `name`, `image`, `time`, `review`, `mark`, `status`) VALUES
(1, 'gowtham', 'img/Chrysanthemum.jpg', '25 4   2018, at 1.58 pm', 'hi', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviewclove`
--

CREATE TABLE IF NOT EXISTS `reviewclove` (
  `no` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(44) NOT NULL,
  `review` varchar(56) NOT NULL,
  `mark` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewclove`
--

INSERT INTO `reviewclove` (`no`, `name`, `image`, `time`, `review`, `mark`, `status`) VALUES
(0, 'gowtham', 'img/Chrysanthemum.jpg', '25 4   2018, at 1.20 pm', '6yuyu', 4, 0),
(0, 'gowtham', 'img/Chrysanthemum.jpg', '25 4   2018, at 1.21 pm', '6yuyu', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviewga`
--

CREATE TABLE IF NOT EXISTS `reviewga` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `reviewga`
--

INSERT INTO `reviewga` (`no`, `name`, `image`, `time`, `review`, `mark`, `status`) VALUES
(1, 'gowtham', 'img/Chrysanthemum.jpg', '25 4   2018, at 1.42 pm', 'goof', 4, 0),
(2, 'gowtham', 'img/Chrysanthemum.jpg', '25 4   2018, at 1.42 pm', 'goog', 2, 0),
(3, 'gowtham', 'img/Chrysanthemum.jpg', '25 4   2018, at 1.43 pm', 'goog', 2, 0),
(4, 'gowtham', 'img/Chrysanthemum.jpg', '25 4   2018, at 1.43 pm', 'goog', 2, 0),
(5, 'gowtham', 'img/Chrysanthemum.jpg', '25 4   2018, at 1.44 pm', 'goog', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviewginger`
--

CREATE TABLE IF NOT EXISTS `reviewginger` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(30) NOT NULL,
  `review` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reviewginger`
--

INSERT INTO `reviewginger` (`no`, `name`, `image`, `time`, `review`, `mark`, `status`) VALUES
(1, 'Gowri', 'img/PicsArt_08-04-01.54.53.jpg', '25 4   2018, at 4.48 am', 'hii', 2, 1),
(2, 'Gowri', 'img/PicsArt_08-04-01.54.53.jpg', '25 4   2018, at 4.58 am', 'bad', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `username` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '',
  `phone` int(10) NOT NULL,
  `image` text NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `name`, `email`, `password`, `phone`, `image`, `address`) VALUES
('gowtham@', 'gowtham', 'gowthamrn13@gmail.com', 'gm', 2147483647, 'img/Chrysanthemum.jpg', 'rfgrtygty'),
('gowri@', 'Gowri', '', 'gm', 2147483647, 'img/PicsArt_08-04-01.54.53.jpg', 'bodi theni'),
('gowtham123@', 'Gowtham', 'gowthamrn4@gmail.com', 'gm', 2147483647, 'img/5618389e-93bf-4d24-bc73-c5f073d50fe2.jpg', 'theni,bodi'),
('123@', 'thulasi', 'thulasi12@gmail.com', 'gm', 2147483647, 'img/a.png', 'theni'),
('12334', 'Msd', 'gfdgf', 'gm', 67676787, 'img/a.png', 'tytuy'),
('rtr', 'rtr', 'ere', 'rr', 0, 'img/cardamom.png', '44'),
('yt', 'tuy67', '6767', 'ytty', 0, 'img/cardamom.png', 'tyt'),
('thulasi@gmail.com', 'Thulasi', 'thulasi@gmail.com', 'th', 2147483647, 'img/avatar5.png', '5/w,east street,bodinayakanur,theni');

-- --------------------------------------------------------

--
-- Table structure for table `tamarind`
--

CREATE TABLE IF NOT EXISTS `tamarind` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(55) NOT NULL,
  `place` varchar(55) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tamarind`
--

INSERT INTO `tamarind` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'Tamarind', '123\r\n', 'img/tamarind.png', '25 3   2018, at 8.38 pm', 'Bodinayakanur');

-- --------------------------------------------------------

--
-- Table structure for table `turmeric`
--

CREATE TABLE IF NOT EXISTS `turmeric` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(55) NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `turmeric`
--

INSERT INTO `turmeric` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'Turmeric', '567\r\n', 'img/Turmeric.JPG', '25 3   2018, at 5.51 pm', 'Bodinayakanur');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE IF NOT EXISTS `tutorial` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `rating` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tutorial`
--


-- --------------------------------------------------------

--
-- Table structure for table `vanilla`
--

CREATE TABLE IF NOT EXISTS `vanilla` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `image` text NOT NULL,
  `time` varchar(55) NOT NULL,
  `place` varchar(55) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vanilla`
--

INSERT INTO `vanilla` (`number`, `name`, `price`, `image`, `time`, `place`) VALUES
(1, 'Vanilla', '435\r\n', 'img/vanilla1.png', '18 3   2018, at 5.02 pm', 'Theni');
