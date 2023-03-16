-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.epizy.com
-- Generation Time: Mar 16, 2023 at 03:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33200472_souledj`
--

-- --------------------------------------------------------

--
-- Table structure for table `cororders`
--

CREATE TABLE `cororders` (
  `ID` int(250) NOT NULL,
  `userid` varchar(250) NOT NULL,
  `order` varchar(250) NOT NULL,
  `cor` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `ID` int(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `trim` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `file` longtext NOT NULL,
  `images` longtext NOT NULL,
  `year` varchar(250) NOT NULL,
  `div` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`ID`, `subject`, `trim`, `name`, `description`, `file`, `images`, `year`, `div`, `user`, `date`, `time`) VALUES
(66, 'Ø§Ù„ØªØ§Ø±ÙŠØ® ÙˆØ§Ù„Ø¬ØºØ±Ø§ÙÙŠØ§', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù…Ù„Ø®Øµ Ø¯Ø±Ø³ Ø§Ù„Ø¥Ø³ØªØ¹Ù…Ø§Ø± Ø§Ù„ÙØ±Ù†Ø³ÙŠ ÙÙŠ Ø§Ù„Ø¬Ø²Ø§Ø¦Ø± ÙˆØ§Ù„Ù…Ù‚Ø§ÙˆÙ…Ø© Ø§Ù„ÙˆØ·Ù†ÙŠØ© (1830-1954)', '', '<a download=\"\" href=\"uploads/25309.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/23473.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/23473.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/71741.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/71741.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/24304.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/24304.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/13862.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/13862.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-01-28', '07:01PM'),
(91, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„Ø·Ø¨ÙŠØ¹ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø§Ù„Ù†ØµÙˆØµ Ø§Ù„Ø¹Ù„Ù…ÙŠØ© Ø§Ù„Ø®Ø§ØµØ© Ø¨Ø§Ù„Ù…Ø¬Ø§Ù„ÙŠÙ† Ø§Ù„ØªØ¹Ù„Ù…ÙŠÙŠÙ† Ø§Ù„Ø«Ø§Ù†ÙŠ ÙˆØ§Ù„Ø«Ø§Ù„Ø«', '', '', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/48475.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/48475.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/37707.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/37707.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/55868.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/55868.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/72300.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/72300.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/30169.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/30169.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/27052.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/27052.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/8106.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/8106.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/90418.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/90418.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/92070.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/92070.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/62447.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/62447.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-03', '09:17PM'),
(67, 'Ø§Ù„ØªØ§Ø±ÙŠØ® ÙˆØ§Ù„Ø¬ØºØ±Ø§ÙÙŠØ§', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù…ØµØ·Ù„Ø­Ø§Øª Ø§Ù„ØªØ§Ø±ÙŠØ® (Ø§Ù„ÙˆØ­Ø¯Ø© Ø§Ù„ØªØ¹Ù„Ù…ÙŠØ© 2)', '', '<a download=\"\" href=\"uploads/36486.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/97834.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/97834.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/24971.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/24971.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-01-28', '07:13PM'),
(68, 'Ø§Ù„ØªØ§Ø±ÙŠØ® ÙˆØ§Ù„Ø¬ØºØ±Ø§ÙÙŠØ§', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø´Ø®ØµÙŠØ§Øª Ø§Ù„ØªØ§Ø±ÙŠØ® (Ø§Ù„ÙˆØ­Ø¯Ø© Ø§Ù„ØªØ¹Ù„Ù…ÙŠØ© 2)', '', '<a download=\"\" href=\"uploads/79930.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/10522.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/10522.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/61229.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/61229.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-01-28', '07:15PM'),
(69, 'Ø§Ù„ØªØ§Ø±ÙŠØ® ÙˆØ§Ù„Ø¬ØºØ±Ø§ÙÙŠØ§', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø´Ø®ØµÙŠØ§Øª ÙˆÙ…ØµØ·Ù„Ø­Ø§Øª Ø§Ù„ØªØ§Ø±ÙŠØ® ÙˆØ§Ù„Ø¬ØºØ±Ø§ÙÙŠØ§ (Ø§Ù„ÙˆØ­Ø¯Ø© Ø§Ù„ØªØ¹Ù„Ù…ÙŠØ© 2)', '', '<a download=\"\" href=\"uploads/65692.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/75670.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/75670.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/1342.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/1342.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/83581.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/83581.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/87209.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/87209.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-01-28', '07:19PM'),
(70, 'Ø§Ù„ØªØ§Ø±ÙŠØ® ÙˆØ§Ù„Ø¬ØºØ±Ø§ÙÙŠØ§', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø´Ø®ØµÙŠØ§Øª ÙˆÙ…ØµØ·Ù„Ø­Ø§Øª Ø§Ù„ØªØ§Ø±ÙŠØ® ÙˆØ§Ù„Ø¬ØºØ±Ø§ÙÙŠØ§ (Ø¬Ù…ÙŠØ¹ Ø§Ù„ÙˆØ­Ø¯Ø§Øª Ø§Ù„ØªØ¹Ù„Ù…ÙŠØ©)', '', '<a download=\"\" href=\"uploads/49492.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/24675.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/24675.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/34610.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/34610.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/15917.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/15917.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/40800.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/40800.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/93344.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/93344.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/77848.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/77848.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/31808.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/31808.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/19379.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/19379.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/13219.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/13219.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/55685.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/55685.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/45073.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/45073.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/40874.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/40874.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/26621.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/26621.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/84184.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/84184.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/75918.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/75918.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/52785.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/52785.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/71866.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/71866.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/71334.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/71334.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/92799.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/92799.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/41365.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/41365.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/32095.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/32095.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/46828.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/46828.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-01-28', '07:26PM'),
(72, 'Ø§Ù„Ø±ÙŠØ§Ø¶ÙŠØ§Øª', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø³Ù„Ø³Ù„Ø© ØªÙ…Ø§Ø±ÙŠÙ† ÙÙŠ Ø§Ù„Ø¥Ø­ØªÙ…Ø§Ù„Ø§Øª', '', '<a download=\"\" href=\"uploads/21515.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/53853.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/53853.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/87633.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/87633.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/75201.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/75201.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/29902.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/29902.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/54358.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/54358.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/47058.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/47058.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/90983.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/90983.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/32214.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/32214.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/38995.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/38995.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/18652.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/18652.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/82306.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/82306.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/69333.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/69333.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/12593.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/12593.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/67285.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/67285.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/14329.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/14329.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/60302.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/60302.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/28275.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/28275.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/72937.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/72937.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/13308.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/13308.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/69954.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/69954.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/91803.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/91803.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-06', '05:00PM'),
(73, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„Ø·Ø¨ÙŠØ¹ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù†Ù…ÙˆØ°Ø¬ Ù…Ù‚ØªØ±Ø­ Ù„Ù„Ø¥Ø®ØªØ¨Ø§Ø± Ø­ÙˆÙ„ Ø§Ù„Ø®Ù„ÙŠØ© ÙˆØ§Ù„ DNA Ø±Ù‚Ù… (1)', '', '<a download=\"\" href=\"uploads/18472.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/3077.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/3077.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/90911.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/90911.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/67692.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/67692.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/38657.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/38657.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-06', '05:04PM'),
(74, 'Ø§Ù„Ø±ÙŠØ§Ø¶ÙŠØ§Øª', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø§Ù„Ø¥Ø´ØªÙ‚Ø§Ù‚ÙŠØ© ÙˆØ§Ù„ØªÙ‚Ø±ÙŠØ¨ Ø§Ù„ØªØ¢Ù„ÙÙŠ', '', '<a download=\"\" href=\"uploads/75491.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/25064.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/25064.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-07', '01:37PM'),
(75, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø³Ù„Ø³Ù„Ø© ØªÙ…Ø§Ø±ÙŠÙ† ÙÙŠ Ø§Ù„Ù†Ø§Ù‚Ù„ÙŠØ©', '', '', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/88614.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/88614.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/41820.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/41820.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/41943.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/41943.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/89843.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/89843.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-07', '05:30PM'),
(76, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù…Ù„Ø®Øµ ÙˆØ­Ø¯Ø© Ø§Ù„Ù†Ø§Ù‚Ù„ÙŠØ©', '', '<a download=\"\" href=\"uploads/56757.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/45993.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/45993.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-08', '05:10PM'),
(77, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù…Ù„Ø®Øµ ÙˆØ­Ø¯Ø© Ø§Ù„Ø·Ø§Ù‚Ø© Ø§Ù„Ø¯Ø§Ø®Ù„ÙŠØ©', '', '<a download=\"\" href=\"uploads/35783.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/4876.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/4876.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/46142.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/46142.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/9784.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/9784.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-08', '05:12PM'),
(78, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù…Ù„Ø®Øµ Ù‚ÙˆØ§Ù†ÙŠÙ† Ø§Ù„Ù†Ø§Ù‚Ù„ÙŠØ©', '', '<a download=\"\" href=\"uploads/96921.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/1517.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/1517.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-08', '05:24PM'),
(79, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„Ø·Ø¨ÙŠØ¹ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù†Ù…ÙˆØ°Ø¬ Ù…Ù‚ØªØ±Ø­ Ù„Ù„Ø¥Ø®ØªØ¨Ø§Ø± Ø­ÙˆÙ„ Ø§Ù„ DNA Ø±Ù‚Ù… (2)', '', '<a download=\"\" href=\"uploads/81197.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/77191.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/77191.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/49443.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/49443.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/10147.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/10147.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/48102.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/48102.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-28', '05:36PM'),
(80, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„Ø·Ø¨ÙŠØ¹ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù†Ù…ÙˆØ°Ø¬ Ù…Ù‚ØªØ±Ø­ Ù„Ù„Ø¥Ø®ØªØ¨Ø§Ø± Ø­ÙˆÙ„ Ø§Ù„Ø®Ù„ÙŠØ© ÙˆØ§Ù„Ø¥Ù„Ù‚Ø§Ø­ Ø±Ù‚Ù… (3)', '', '<a download=\"\" href=\"uploads/74659.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/32098.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/32098.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/90636.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/90636.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/75421.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/75421.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/66916.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/66916.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/40446.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/40446.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-28', '05:40PM'),
(81, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„Ø·Ø¨ÙŠØ¹ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù†Ù…ÙˆØ°Ø¬ Ù…Ù‚ØªØ±Ø­ Ù„Ù„ÙØ±Ø¶ Ø­ÙˆÙ„ Ø§Ù„ØªÙ†Ø³ÙŠÙ‚ Ø§Ù„Ø¹ØµØ¨ÙŠ-Ø§Ù„Ù‡Ø±Ù…ÙˆÙ†ÙŠ', '', '<a download=\"\" href=\"uploads/60067.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/10553.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/10553.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/85656.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/85656.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/1976.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/1976.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/87118.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/87118.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-02-28', '05:49PM'),
(82, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù…Ù„Ø®Øµ ÙˆØ­Ø¯Ø© Ø§Ù„Ù…Ø¹Ø§ÙŠØ±Ø©', '', '<a download=\"\" href=\"uploads/36782.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-01', '02:31PM'),
(83, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø³Ù„Ø³Ù„Ø© ØªÙ…Ø§Ø±ÙŠÙ† ÙÙŠ Ø§Ù„Ø·Ø§Ù‚Ø© Ø§Ù„Ø¯Ø§Ø®Ù„ÙŠØ©', '', '<a download=\"\" href=\"uploads/66955.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-01', '02:37PM'),
(84, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'ØªØµØ­ÙŠØ­ Ø³Ù„Ø³Ù„Ø© ØªÙ…Ø§Ø±ÙŠÙ† Ø§Ù„Ø·Ø§Ù‚Ø© Ø§Ù„Ø¯Ø§Ø®Ù„ÙŠØ©', '', '<a download=\"\" href=\"uploads/43168.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-01', '02:44PM'),
(85, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù…Ù„Ø®Øµ ÙˆØ­Ø¯Ø© Ø§Ù„Ø·Ø§Ù‚Ø© Ø§Ù„Ø¯Ø§Ø®Ù„ÙŠØ©', '', '<a download=\"\" href=\"uploads/789.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-01', '02:45PM'),
(86, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø³Ù„Ø³Ù„Ø© ØªÙ…Ø§Ø±ÙŠÙ† ÙÙŠ Ø§Ù„Ù…Ø¹Ø§ÙŠØ±Ø© (Ø§Ù„Ø£Ø­Ù…Ø§Ø¶ ÙˆØ§Ù„Ø£Ø³Ø³)', '', '<a download=\"\" href=\"uploads/65812.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-01', '02:50PM'),
(87, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'ØªØµØ­ÙŠØ­ Ø³Ù„Ø³Ù„Ø© ØªÙ…Ø§Ø±ÙŠÙ† Ø§Ù„Ù…Ø¹Ø§ÙŠØ±Ø© (Ø§Ù„Ø£Ø­Ù…Ø§Ø¶ ÙˆØ§Ù„Ø£Ø³Ø³)', '', '<a download=\"\" href=\"uploads/23879.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-01', '02:51PM'),
(88, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø³Ù„Ø³Ù„Ø© ØªÙ…Ø§Ø±ÙŠÙ† ÙÙŠ Ø§Ù„Ù…Ø¹Ø§ÙŠØ±Ø© (Ø¬Ø¯ÙˆÙ„ Ø§Ù„ØªÙ‚Ø¯Ù…) Ø±Ù‚Ù… (1)', '', '<a download=\"\" href=\"uploads/432.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-01', '02:52PM'),
(89, 'Ø§Ù„ØªØ§Ø±ÙŠØ® ÙˆØ§Ù„Ø¬ØºØ±Ø§ÙÙŠØ§', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù…ØµØ·Ù„Ø­Ø§Øª Ø§Ù„ØªØ§Ø±ÙŠØ® ÙˆØ§Ù„Ø¬ØºØ±Ø§ÙÙŠØ§ (Ø§Ù„ÙˆØ­Ø¯Ø© Ø§Ù„ØªØ¹Ù„Ù…ÙŠØ© 2)', '', '<a download=\"\" href=\"uploads/97505.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/65208.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/65208.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/85972.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/85972.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/74612.png\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/74612.png\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-01', '04:14PM'),
(90, 'Ø§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„ÙÙŠØ²ÙŠØ§Ø¦ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ø³Ù„Ø³Ù„Ø© ØªÙ…Ø§Ø±ÙŠÙ† ÙÙŠ Ø§Ù„Ù…Ø¹Ø§ÙŠØ±Ø© (Ø¬Ø¯ÙˆÙ„ Ø§Ù„ØªÙ‚Ø¯Ù…) Ø±Ù‚Ù… (2)', '', '<a download=\"\" href=\"uploads/92819.pdf\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a>', '', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-02', '01:21PM'),
(92, 'Ø§Ù„Ù„ØºØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©', 'Ø§Ù„ÙØµÙ„ Ø§Ù„Ø«Ø§Ù†ÙŠ', 'Ù…Ù„Ø®Øµ Ø´Ø¹Ø± Ø§Ù„Ø­ÙƒÙ…Ø© ÙˆØ§Ù„Ø´Ø¹Ø± Ø§Ù„Ø¥Ø¬ØªÙ…Ø§Ø¹ÙŠ', '', '', '<div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/39012.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/39012.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div><div class=\"col-sm-6\"><div class=\"card\" style=\"width: 10rem;\"><img style=\"-webkit-user-drag: none;\" src=\"uploads/23943.jpg\" class=\"card-img-top\"><div class=\"card-body\"><a download=\"\" href=\"uploads/23943.jpg\" class=\"btn btn-primary\">ØªØ­Ù…ÙŠÙ„</a></div></div></div>', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'Djihad', '2023-03-04', '07:02PM');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `ID` int(250) NOT NULL,
  `userid` varchar(250) NOT NULL,
  `arabecoe` varchar(250) NOT NULL,
  `arabeeva` varchar(250) NOT NULL,
  `arabetp` varchar(250) NOT NULL,
  `arabetes` varchar(250) NOT NULL,
  `arabeexa` varchar(250) NOT NULL,
  `mathcoe` varchar(250) NOT NULL,
  `matheva` varchar(250) NOT NULL,
  `mathtp` varchar(250) NOT NULL,
  `mathtes` varchar(250) NOT NULL,
  `mathexa` varchar(250) NOT NULL,
  `physicscoe` varchar(250) NOT NULL,
  `physicseva` varchar(250) NOT NULL,
  `physicstp` varchar(250) NOT NULL,
  `physicstes` varchar(250) NOT NULL,
  `physicsexa` varchar(250) NOT NULL,
  `sciencecoe` varchar(250) NOT NULL,
  `scienceeva` varchar(250) NOT NULL,
  `sciencetp` varchar(250) NOT NULL,
  `sciencetes` varchar(250) NOT NULL,
  `scienceexa` varchar(250) NOT NULL,
  `islamiccoe` varchar(250) NOT NULL,
  `islamiceva` varchar(250) NOT NULL,
  `islamictp` varchar(250) NOT NULL,
  `islamictes` varchar(250) NOT NULL,
  `islamicexa` varchar(250) NOT NULL,
  `hisgeocoe` varchar(250) NOT NULL,
  `hisgeoeva` varchar(250) NOT NULL,
  `hisgeotp` varchar(250) NOT NULL,
  `hisgeotes` varchar(250) NOT NULL,
  `hisgeoexa` varchar(250) NOT NULL,
  `frenchcoe` varchar(250) NOT NULL,
  `frencheva` varchar(250) NOT NULL,
  `frenchtp` varchar(250) NOT NULL,
  `frenchtes` varchar(250) NOT NULL,
  `frenchexa` varchar(250) NOT NULL,
  `englishcoe` varchar(250) NOT NULL,
  `englisheva` varchar(250) NOT NULL,
  `englishtp` varchar(250) NOT NULL,
  `englishtes` varchar(250) NOT NULL,
  `englishexa` varchar(250) NOT NULL,
  `sportcoe` varchar(250) NOT NULL,
  `sporteva` varchar(250) NOT NULL,
  `sporttp` varchar(250) NOT NULL,
  `sporttes` varchar(250) NOT NULL,
  `sportexa` varchar(250) NOT NULL,
  `motala3a` varchar(250) NOT NULL,
  `machari3` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ID`, `userid`, `arabecoe`, `arabeeva`, `arabetp`, `arabetes`, `arabeexa`, `mathcoe`, `matheva`, `mathtp`, `mathtes`, `mathexa`, `physicscoe`, `physicseva`, `physicstp`, `physicstes`, `physicsexa`, `sciencecoe`, `scienceeva`, `sciencetp`, `sciencetes`, `scienceexa`, `islamiccoe`, `islamiceva`, `islamictp`, `islamictes`, `islamicexa`, `hisgeocoe`, `hisgeoeva`, `hisgeotp`, `hisgeotes`, `hisgeoexa`, `frenchcoe`, `frencheva`, `frenchtp`, `frenchtes`, `frenchexa`, `englishcoe`, `englisheva`, `englishtp`, `englishtes`, `englishexa`, `sportcoe`, `sporteva`, `sporttp`, `sporttes`, `sportexa`, `motala3a`, `machari3`) VALUES
(1, '1', '2', '18', '18', '16.5', '14.5', '5', '17', '', '10', '11', '5', '19', '15.5', '18.25', '20', '6', '18', '14.75', '19', '14.5', '2', '19', '', '17', '16.5', '2', '18', '', '17', '18', '2', '19', '18', '19', '19.5', '2', '19', '19', '20', '17.5', '1', '18.5', '', '18.5', '18.5', '18', '17'),
(2, '11', '2', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '6', '', '', '', '', '2', '', '', '', '', '2', '', '', '', '', '2', '', '', '', '', '2', '', '', '', '', '1', '', '', '', '', '0', '0'),
(3, '8', '2', '18', '18', '17', '17', '5', '17', '', '14', '13', '5', '19', '19', '19.25', '20', '6', '18', '18', '20.00', '16.25', '2', '17', '', '19.5', '16.00', '2', '17', '', '17.5', '16', '2', '18', '17', '19', '16', '2', '18', '18', '19', '18', '1', '18', '', '18', '18', '15.00', '16.00'),
(4, '12', '2', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '6', '', '', '', '', '2', '', '', '', '', '2', '', '', '', '', '2', '', '', '', '', '2', '', '', '', '', '1', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `fn` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `div` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `ip` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `ver` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `ldate` varchar(250) NOT NULL,
  `ltime` varchar(250) NOT NULL,
  `auth` varchar(250) NOT NULL,
  `secret` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `user`, `name`, `fn`, `gender`, `dob`, `year`, `div`, `email`, `password`, `status`, `ip`, `date`, `time`, `ver`, `type`, `ldate`, `ltime`, `auth`, `secret`) VALUES
(1, 'DjihadDris', 'Djihad', 'Dris', 'Ø°ÙƒØ±', '6 Ø£ÙˆØª 2006', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'djihad139@gmail.com', '0000', 'yes', '105.110.210.145', '2023-03-15', '11:31PM', 'yes', 'admin', '2023-03-16', '05:41PM', 'no', ''),
(8, 'Louaiben1400', 'Louai', 'Benahmed', 'Ø°ÙƒØ±', '26 Ù†ÙˆÙÙ…Ø¨Ø± 2006', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'louaihmed123@outlook.fr', 'louaihmed1', 'yes', '154.241.106.12', '2023-03-15', '10:54PM', 'yes', 'student', '2023-03-15', '10:54PM', '', ''),
(7, 'Adib', 'Taha', 'Boukezioua ', 'Ø°ÙƒØ±', '29 Ù†ÙˆÙÙ…Ø¨Ø± 2006', 'Ø§Ù„Ø³Ù†Ø© Ø«Ø§Ù†ÙŠØ© Ø«Ø§Ù†ÙˆÙŠ', 'Ø¹Ù„ÙˆÙ… ØªØ¬Ø±ÙŠØ¨ÙŠØ©', 'adib1boukezioua@gmail.com', '12341234@@', 'yes', '105.110.8.63', '2023-03-07', '05:45PM', 'yes', 'student', '2023-03-07', '05:45PM', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cororders`
--
ALTER TABLE `cororders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cororders`
--
ALTER TABLE `cororders`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
