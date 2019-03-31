-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 09:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`pageid` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pageid`, `name`, `content`) VALUES
(3, 'Page1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est neque, eleifend id erat vel, fermentum vehicula odio. Sed ac magna eget neque imperdiet porttitor nec quis quam. Donec non dolor risus. Nulla tristique lobortis tincidunt. Vestibulum imperdiet egestas nulla, sed luctus justo fringilla sed. Morbi eleifend, lorem dictum interdum tincidunt, ligula nulla tempor odio, vel scelerisque purus ante vitae diam. Ut vel sodales ante.\r\n\r\nSed porta nibh vel augue aliquam, ac fermentum metus tincidunt. Morbi tincidunt ornare velit, posuere sagittis massa dictum ut. Nunc rhoncus ac velit non dapibus. Nullam accumsan hendrerit leo, et condimentum neque porta et. Quisque non egestas sapien. Fusce fringilla tristique massa, finibus rhoncus quam faucibus nec. Nullam sit amet elit eu leo sodales volutpat at at lacus. Mauris lobortis pharetra justo, et tristique lorem fermentum in. Nunc euismod finibus orci, at vehicula lectus rutrum sed. Donec scelerisque ultricies risus. Morbi sed finibus massa. Vestibulum rutrum dolor dolor, vel gravida neque rhoncus sit amet.'),
(4, 'pag2', 'This is page2'),
(5, 'empty', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`) VALUES
(1, 'parbh', 'parbh'),
(2, 'kaur', 'kaur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`pageid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `pageid` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
