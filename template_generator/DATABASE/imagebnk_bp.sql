-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2016 at 11:37 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imagebnk_bp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'web@2016');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`brand_id` int(255) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'hioi'),
(2, 'Samsung'),
(3, 'afdf'),
(4, 'afdf'),
(5, 'mi'),
(7, 'apple'),
(8, 'k'),
(9, 'lenovo'),
(10, 'Nokia'),
(11, 'sda'),
(12, 'letv'),
(13, 'nn'),
(14, ''),
(15, 'mmy'),
(16, 'mmy'),
(17, 'l'),
(18, 'oppo'),
(19, 'afdf'),
(20, 'afdf'),
(21, 'afdf'),
(22, 'afdf'),
(23, 'h'),
(24, 'Samsung'),
(25, 'ZZZ'),
(26, 'xxx'),
(27, 'Apple1'),
(28, 'Appleeee'),
(29, 'xxxxx'),
(30, 'mlm'),
(31, 'lik'),
(32, 'appleooo'),
(33, 'apploooo'),
(34, 'hipo'),
(35, 'jiii'),
(36, 'jioo'),
(37, 'weeq'),
(38, 'hill'),
(39, 'new'),
(40, 'hello'),
(41, 'gi'),
(42, 'gip'),
(43, 'amm'),
(44, 'kiia'),
(45, 'a'),
(46, 'ea'),
(47, 'kawasaki');

-- --------------------------------------------------------

--
-- Table structure for table `customer_image`
--

CREATE TABLE IF NOT EXISTS `customer_image` (
`id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `catagory_name` varchar(255) NOT NULL,
  `catagory_id` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `customer_image`
--

INSERT INTO `customer_image` (`id`, `image_name`, `image_path`, `catagory_name`, `catagory_id`) VALUES
(4, 'thumb4.jpg', '../Designbnk_bp/assets/image/thumb4.jpg', 'jj', 'jj'),
(5, 'thumb5.jpg', '../Designbnk_bp/assets/image/thumb5.jpg', 'jj', 'jj'),
(7, 'thumb7.jpg', '../Designbnk_bp/assets/image/thumb7.jpg', 'jj', 'jj'),
(11, 'thumb11.jpg', '../Designbnk_bp/assets/image/thumb11.jpg', 'jj', 'jj'),
(12, 'thumb12.jpg', '../Designbnk_bp/assets/image/thumb12.jpg', 'jj', 'jj'),
(13, 'thumb13.jpg', '../Designbnk_bp/assets/image/thumb13.jpg', 'jj', 'jj'),
(14, 'thumb14.jpg', '../Designbnk_bp/assets/image/thumb14.jpg', 'jj', 'jj'),
(18, 'thumb1.jpg', '../Designbnk_bp/assets/image/thumb1.jpg', 'kk', 'kk'),
(19, 'thumb2.jpg', '../Designbnk_bp/assets/image/thumb2.jpg', 'kk', 'kk'),
(20, 'thumb8.jpg', '../Designbnk_bp/assets/image/thumb8.jpg', 'kk', 'kk'),
(21, 'thumb10.jpg', '../Designbnk_bp/assets/image/thumb10.jpg', 'kk', 'kk'),
(22, 'thumb15.jpg', '../Designbnk_bp/assets/image/thumb15.jpg', 'kk', 'kk'),
(23, 'thumb16.jpg', '../Designbnk_bp/assets/image/thumb16.jpg', 'kk', 'kk');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE IF NOT EXISTS `customer_order` (
`customer_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `order_details` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`customer_id`, `invoice_no`, `customer_address`, `order_details`, `email`, `date`) VALUES
(1, 123, '4,rajaji st,chennai.600 005', 'mobile case images', 'xx@gmail.com', '2016-05-23'),
(2, 2352, '6,xxx,xxxxx.', 'mobile case images', 'yy@gmail.com', '2016-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE IF NOT EXISTS `models` (
`model_id` int(255) NOT NULL,
  `brand_id` int(255) NOT NULL,
  `model_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_id`, `brand_id`, `model_name`) VALUES
(1, 1, 'ki'),
(2, 2, 'j7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `customer_image`
--
ALTER TABLE `customer_image`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
 ADD PRIMARY KEY (`model_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `customer_image`
--
ALTER TABLE `customer_image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
MODIFY `model_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
