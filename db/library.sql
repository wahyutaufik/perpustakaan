-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2014 at 08:34 AM
-- Server version: 5.5.37-MariaDB-log
-- PHP Version: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE IF NOT EXISTS `akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `page` int(11) NOT NULL,
  `publish_year` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `category`, `publisher`, `description`, `page`, `publish_year`, `author`, `cover`, `stock`) VALUES
(1, 'Vernon Hopkins', 'Novel', 'Sage Fletcher', 'Asperiores praesentium reprehenderit, non cum provident, cupiditate non quia quidem eius reprehenderit, veniam, quam vero ut quasi.', 19, 1978, 'Nesciunt accusantium ea aut perspiciatis praesentium minima eu est consectetur qui fugit maxime culpa sequi est fugiat magna aut aute', 'IMG_20140401_145422.jpg', 1),
(3, 'Emi Sargent', 'Novel', 'Sage Fletcher', 'Velit sunt, velit est sapiente ullam omnis voluptatum pariatur. Sed.', 70, 1970, 'Eiusmod omnis et aperiam illo qui incididunt incididunt officiis veniam non aspernatur saepe cillum ut ad a', 'Bintang Keleus   FunLearn.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `user_code` varchar(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `batas_pengembalian` date NOT NULL,
  `pengembalian_date` date NOT NULL,
  `denda` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `book_id`, `user_code`, `borrow_date`, `batas_pengembalian`, `pengembalian_date`, `denda`, `status`) VALUES
(1, 3, '2431FDGH', '2014-03-25', '2014-04-02', '2014-06-25', '5000', 'Returned'),
(2, 1, '1234ASDF', '2014-06-25', '2014-07-02', '2014-06-25', '0', 'Returned'),
(3, 1, '1234ASDF', '2014-06-25', '2014-07-02', '2014-06-25', '0', 'Returned');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(2, 'Novel', 'Ini Novel'),
(3, 'Horor', ''),
(4, 'Komik', '');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `publisher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publisher_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `publisher_name`, `address`, `phone`) VALUES
(1, 'Sage Fletcher', 'Quia voluptatibus eaque veniam, et aut aut est quas id id explicabo. Esse, perferendis eu in eiusmod exercitation.', '+475-33-3482346'),
(2, 'Marvin Espinoza', 'Mollitia fugiat, sapiente quo nisi cupidatat mollit iure sint, incidunt, vel fugit, eos, tempor sit.', '+995-37-1252790'),
(3, 'Wahyu', 'Kalimalang', '085777160010'),
(4, 'Ferris Beasley', 'Est ex eos, voluptas ea libero aut Nam ea eos, fuga. Aute odio cum occaecat est quis.', '+148-22-6354666');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `akses` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `full_name`, `address`, `phone`, `photo`, `akses`, `code`) VALUES
(1, 'admin', 'cGFzc3dvcmQ=', 'admin@m.io', 'Admin Kece', 'Jalan Kedamaian', '085777160010', 'arch.jpg', 'admin', ''),
(4, 'decete', 'UGEkJHdvcmQh', 'hokizujap@gmail.com', 'Driscoll Potter', 'Incididunt est dolorum irure praesentium est, distinctio. Eveniet, dolores eligendi nisi amet, fugiat, in quisquam.', '94', 'mine.jpg', 'user', '2431FDGH'),
(5, 'wahyu', 'cGFzc3dvcmQ=', 'wahyutaufik37@gmail.com', 'Wahyu Taufik', 'Kalimalang', '085777160010', 'ifrank.jpg', 'user', '1234ASDF'),
(6, 'cevup', 'UGEkJHdvcmQh', 'lybemihic@hotmail.com', 'Zachary Moses', 'Enim quidem officia velit, aspernatur beatae adipisci amet, amet, aut itaque.', '47', 'Bintang Keleus   FunLearn.png', 'user', '3C7DD5CE'),
(7, 'vubupawe', 'UGEkJHdvcmQh', 'zewypenu@gmail.com', 'Knox Tate', 'Reprehenderit accusantium dolore id consectetur, ex ut ut earum fugiat animi, quia vel quo.', '59', 'IMG_20140401_145408.jpg', 'user', 'CB6E3E5E');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`) VALUES
(1, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
