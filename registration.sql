-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 12:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `Branch` varchar(25) NOT NULL,
  `year` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `count` int(5) NOT NULL,
  `q1` longtext NOT NULL,
  `q2` longtext NOT NULL,
  `q3` longtext NOT NULL,
  `q4` longtext NOT NULL,
  `q5` longtext NOT NULL,
  `q6` longtext NOT NULL,
  `q7` longtext NOT NULL,
  `q8` longtext NOT NULL,
  `q9` longtext NOT NULL,
  `q10` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`Name`, `Email`, `Phone`, `Branch`, `year`, `password`, `count`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
('abc', 'abc@gmail.com', '852', 'ccvt', '2', '123', 6, '', '2', '3\r\n', '4', '', '', '7\r\n', '', '9', '10'),
('Bahl', 'bahl@loop.com', '1234567890', 'Ele', '2', 'bahl', 5, 'HELLO', 'YOYOY', 'qsw', 'asjsajsh', 'asdnaksndka', '', '', '', '', ''),
('cloud', 'cloud@gmail.com', '9876543211', 'ONG', '2', '1', 1, 'hello1\r\n', 'hello', 'hello', 'he..ll', 'hello', '', '', '', '', ''),
('helo', 'hello', 'hello', 'hello', 'hello', 'hello', 5, 'mnasbdjandjkanjdkandjksjankdna', 'adjnajdn', 'masndkandkansdk', '', 'amsd namndkansdknakdn', '', '', '', 'ajsndjkansdjkandajnsdjnadj', ''),
('Nitin', 'nitin@gmail.com', '1234567890', 'BFSI', '2', 'nitn123', 6, 'asasasasaas', 'sandkasdubausbduasbdjabsj', 'asdasdasdasdasd', 'sdaasdasdasdasdas', 'nsdbsabdjasbdjasbdjas', '', '', '', '', ''),
('Pranjal ', 'pranjal@gmail.com', '8526', 'ccvt', '2', '123456', 7, '1', '2', '3', '4', '10', '', '', '', '', ''),
('rohit', 'rohit', '1234567890', 'rohit', 'rohit', 'rohit', 11, 'ajsbdjasbfjabsfhbajdbajs', 'asdbjasbdjabsdjbasjdbjabds', 'asdnajsdbnjasbdbasudbausdbuasbdja', 'asdbajsbduabdjasbdsabduasbdaudsb', 'asdsadjabdhjasbdhasbfhabdjhsabdjkabdjabd', 'qwhduahsdubasdbasjd', 'ajsbndjabnsdjbajdbnajbdj', 'ajsbdjasbdjabdjbajdsbjas', 'amsdnjasbdjabdjabjdbajsd', 'asbdjabdjbajdbasjdb'),
('Sujay', 'sujay@loop.com', '123456788', 'BFSI', '12', '12345677', 0, '', '', '', '', '', '', '', '', '', ''),
('twst2', 'test2@gmail.com', 'mslmc', 'sjk', 'mclks', '123456', 6, 'n skl ns.', 'svnvkjndl ', ' nbxkjb.', 'bjsdbv ks', 'nkvnsdaklj', '', '', '', '', ''),
('test1', 'test@gmail.com', '1234567890', 'test', 'test', '12345', 6, 'hello', 'xwxd', 'mdlkm l', 'ndkjs nkj', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

CREATE TABLE `flag` (
  `Email` varchar(50) NOT NULL,
  `q1` tinyint(1) DEFAULT '0',
  `q2` tinyint(1) DEFAULT '0',
  `q3` tinyint(1) DEFAULT '0',
  `q4` tinyint(1) DEFAULT '0',
  `q5` tinyint(1) DEFAULT '0',
  `q6` tinyint(1) DEFAULT '0',
  `q7` tinyint(1) DEFAULT '0',
  `q8` tinyint(1) DEFAULT '0',
  `q9` tinyint(1) DEFAULT '0',
  `q10` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flag`
--

INSERT INTO `flag` (`Email`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
('abc@gmail.com', 0, 1, 1, 1, 1, 0, 1, 0, 1, 0),
('bahl@loop.com', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
('bappa', 1, 1, 1, 1, 0, 1, 1, 1, 1, 0),
('cloud@gmail.com', 1, 1, 1, 1, 1, 1, 0, 1, 0, 0),
('hello', 1, 1, 1, 0, 1, 0, 0, 0, 1, 0),
('nitin@gmail.com', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
('papa', 1, 1, 1, 1, 1, 1, 1, 0, 1, 0),
('pranjal@gmail.com', 1, 1, 1, 1, 1, 0, 1, 0, 0, 1),
('ssdsd@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('test2@gmail.com', 1, 1, 1, 1, 1, 0, 0, 0, 1, 0),
('test@gmail.com', 1, 1, 1, 1, 0, 0, 0, 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `flag`
--
ALTER TABLE `flag`
  ADD PRIMARY KEY (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
