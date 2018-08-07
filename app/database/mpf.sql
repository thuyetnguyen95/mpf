-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 09:23 PM
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
  `admin_id` int(11) NOT NULL,
  `count_money_add` int(11) NOT NULL
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
