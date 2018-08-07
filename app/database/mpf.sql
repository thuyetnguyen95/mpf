-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Aug 07, 2018 at 09:23 PM
=======
-- Generation Time: Aug 01, 2018 at 07:06 PM
>>>>>>> master
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpf`
--

-- --------------------------------------------------------

--
-- Table structure for table `mpf_admin`
--

CREATE TABLE `mpf_admin` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mpf_bought`
--

CREATE TABLE `mpf_bought` (
  `id` int(5) NOT NULL,
  `type_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `comment` varchar(1500) NOT NULL,
  `buydate` date NOT NULL,
  `admin_id` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mpf_bought`
--

INSERT INTO `mpf_bought` (`id`, `type_id`, `name`, `cost`, `comment`, `buydate`, `admin_id`, `flag`) VALUES
(1, 1, 'Bữa tối', 25000, 'nothing to comment', '2018-01-21', 1, 1),
(2, 1, 'thức ăn bữa tối', 25000, 'qưerwerwwerq', '2018-01-21', 1, 1),
(3, 2, 'Number one', 9000, 'thích thì mua thôi', '2018-01-21', 1, 1),
(4, 4, 'Ấm điện', 90000, 'lạnh thì mua', '2018-01-21', 1, 1),
(5, 3, 'Kẹo Singum', 1000, 'ngứa mốm nên mua', '2018-01-21', 1, 1),
(6, 5, 'Áo sơ mi', 500000, 'Hết áo mặc nên đi mua', '2018-01-21', 1, 1),
(7, 1, 'Iphone X', 2147483647, '312313123', '2018-01-21', 1, 1),
(8, 3, 'test snackes', 100000, 'dfasfsd ádf', '2018-01-21', 1, 1),
(9, 2, 'test ', 2147483647, '243234faasfdasdf', '2018-01-21', 1, 1),
(10, 2, 'aaaaa mamamam', 124312342, 'bggdfgdghdhg', '2017-01-21', 1, 1),
(11, 6, 'Máy bay', 99999999, 'mình thích thì mình mua thôi !', '0000-00-00', 1, 1),
(12, 4, 'Màn hình máy tính', 1250000, 'Màn hình Dell 21.5 inch, mua thay màn hình cũ vì quá nhỏ!', '0000-00-00', 1, 1),
(13, 4, 'Màn hình máy tính', 1250000, 'Màn hình Dell 21.5 inch, mua thay màn hình cũ vì quá nhỏ!', '0000-00-00', 1, 1),
(14, 1, 'test', 123123123, '123123', '2018-05-08', 1, 1),
(15, 1, 'Bánh mì', 10000, 'Bữa tối', '2018-08-01', 1, 1),
(16, 2, 'Nước mía', 6000, 'khát', '2018-08-01', 1, 1),
(17, 1, 'test', 11111, '', '2018-08-01', 1, 1),
(18, 1, 'Bánh mì thịt', 10000, '', '2018-08-01', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mpf_intend_buy`
--

CREATE TABLE `mpf_intend_buy` (
  `id` int(5) NOT NULL,
  `type_id` int(5) NOT NULL,
  `name` varchar(500) NOT NULL,
  `cost` int(10) NOT NULL,
  `comment` varchar(1500) NOT NULL,
  `buydate` date NOT NULL,
  `link` varchar(500) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mpf_intend_buy`
--

INSERT INTO `mpf_intend_buy` (`id`, `type_id`, `name`, `cost`, `comment`, `buydate`, `link`, `admin_id`, `flag`) VALUES
(1, 6, 'Bàn phím cơ', 1100000, 'mình thích thì mình mua thôi', '2018-02-23', 'http://www.ankhang.vn/ban-phim-co-dare-u-ek810-108key_id11200.html', 0, 1),
(2, 1, 'test active tab', 654656654, 'ádfohjsdifjhojh', '2018-01-21', '', 0, 1),
(3, 1, 'test active tab', 654656654, 'ádfohjsdifjhojh', '2018-01-21', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mpf_money`
--

CREATE TABLE `mpf_money` (
  `id` int(11) NOT NULL,
  `money_first` int(11) NOT NULL,
  `money_rest` int(11) NOT NULL,
  `money_add` int(11) NOT NULL,
  `money_max` int(11) NOT NULL,
  `over_max` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mpf_admin`
--
ALTER TABLE `mpf_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpf_bought`
--
ALTER TABLE `mpf_bought`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpf_intend_buy`
--
ALTER TABLE `mpf_intend_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpf_money`
--
ALTER TABLE `mpf_money`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mpf_admin`
--
ALTER TABLE `mpf_admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mpf_bought`
--
ALTER TABLE `mpf_bought`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mpf_intend_buy`
--
ALTER TABLE `mpf_intend_buy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mpf_money`
--
ALTER TABLE `mpf_money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
