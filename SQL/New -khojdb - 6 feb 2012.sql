-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2012 at 05:59 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `khojdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answerId` int(10) NOT NULL AUTO_INCREMENT COMMENT 'answer id',
  `qid` bigint(20) NOT NULL,
  `answer` longtext CHARACTER SET utf8 NOT NULL,
  `a_status` int(2) NOT NULL,
  `Rating` int(2) DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `submittedBy` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`answerId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answerId`, `qid`, `answer`, `a_status`, `Rating`, `timestamp`, `submittedBy`) VALUES
(12, 0, '<p>\n	dfsasdfds</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(13, 1, '<p>\n	,ksjdlksjdkl jsakldjkl sjdklsjadk;lsadf</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(14, 1, '<p>\n	RIHIT AGRAWAL</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(15, 1, '<p>\n	in my pocket</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(58, 1, '<p>\n	abdasdjsbjdjbsjbddjsbd</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(34, 1, '<p>\n	Sam smart</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(35, 1, '<p>\n	ROHIT</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(47, 1, 'China is a fantastic choice for a vacation at anytime of the year. The country has everything you can ever imagine. Natural wonders which are totally out of this world, Historical sites to take you back in the ancient era, Long and endless treks, Art galleries which are a sure treat for people who love art and even for those who do not, World Heritages, River Cruises and much much more.<br><br><a target="_blank" href="http://www.flickr.com/photos/richardgiles/"><img  alt="" src="http://farm1.static.flickr.com/1/2483765_a3dce2a787_m_d.jpg"></a>&nbsp;&nbsp; <a target="_blank" href="http://www.flickr.com/photos/betta_design/"><img  alt="" src="http://farm3.static.flickr.com/2169/2761715121_6c94060f68_m_d.jpg"></a><br><br><a target="_blank" href="http://www.flickr.com/photos/davelau/"><img  alt="" style="height: 180px; width: 240px;" src="http://farm2.static.flickr.com/1144/1017417967_9c526425f1_m_d.jpg"></a>&nbsp;&nbsp; <a target="_blank" href="http://www.flickr.com/photos/tomhaymes/"><img  alt="" style="height: 180px; width: 240px;" src="http://farm3.static.flickr.com/2099/2466558970_fde8489e73_m_d.jpg"></a><br><br><strong>Historical Sites</strong> : There are numerous sites that talk about Chinese History. Some of the names you might be familiar with but there is lots more. The ones that you should not miss are : The Great Wall, Forbidden City, Summer Palace, Terracotta Warriors, Beijing Hutong and Rickshaw tours, Jade Buddha Temple, Temple of Heaven, Shanghai Museum. These are just some of the many names which talk about Chinese History. <br><br><strong>River Cruises</strong> : The river cruises in China take you through the most scenic places. The two best cruises are The Yangtze River Cruise and the Li River cruise. Read more about the Yangtze River Cruise <a target="_blank" href="http://www.chinahighlights.com/yangtzeriver/">here</a>.<br><br><strong>World Heritage Sites</strong> : " I so wish to see some of the UNESCO world heritage sites " Has this been on your travel list for long? Check mark that now because when you travel to China, you can see some of the world heritage sites also. The sites are : The Badaling Great Wall, Ming Tombs, Bird Island, Yumen Pass and some more.<br><br><strong>Natural Wonders</strong> : China is blessed with natural wonders which are totally out of this world. Elephant Trunk Hill, Yellow Mountain, Longji Terraced fields, White Pagoda Mountain etc are some of the famous ones.<br><br><strong>Sports and Recreation</strong> : Beijing Zoo, Shanghai Old Street, Zhujiajiao Water Town , Nanjing Road, Pudong, Shangri-la<br><br>You can read more about the places to see in China <a target="_blank" href="http://www.chinahighlights.com/travelguide/china-attraction-guide.htm">here</a>. Do write back and I will help you with your complete planning for your trip. <br><br>Sneha<br><br>', 0, 1, '0000-00-00 00:00:00', NULL),
(48, 1, '<p>\n	<a href="http://www.icircles.in">ROHIT</a></p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(49, 1, '<p>\n	kljhskljd klsjdkldf</p>\n<p>\n	dklfjd</p>\n<p>\n	&nbsp;</p>\n<p>\n	dfdskljfldk</p>\n<p>\n	&nbsp;</p>\n<p>\n	<a href="http://facebook.com">lakjhdklsjd</a></p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(2, 5, '<p>\n	DEEPAK</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(44, 5, '<h3 style="color:red;">\n	<span style="font-size:36px;"><span style="font-family:verdana,geneva,sans-serif;">BHAVAN KLJDKL JKLJSKL JSK:LJ KLDSJKLJDKLJDKLJ JSKLDJDKL</span></span></h3>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(57, 1, '<p>\n	samyak has made it work</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(59, 58, '<p>\n	yar chal to raha &nbsp; h bad me pls pls problem mat aana</p>\n', 1, 1, '0000-00-00 00:00:00', NULL),
(60, 58, '<p>\n	adskdjhs ahKJFDSFS</p>\n', 0, 12, '0000-00-00 00:00:00', NULL),
(61, 55, '<p>\n	and sam is answering</p>\n', 1, 3, '0000-00-00 00:00:00', NULL),
(62, 55, '<p>\n	and sam is answering</p>\n', 1, 3, '0000-00-00 00:00:00', NULL),
(63, 55, '<p>\n	and sam is answering</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(64, 55, '<p>\n	dsjfhkldhf kadshf;ldsf</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(65, 55, '<p>\n	cool....</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(66, 55, '<p>\n	and sam is answering</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(67, 55, '<p>\n	kya h yeh</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(68, 55, '<p>\n	adsad</p>\n', 1, 3, '0000-00-00 00:00:00', NULL),
(69, 54, '<p>\n	Thik h mere kya h .. yeh le</p>\n', 2, -1, '0000-00-00 00:00:00', NULL),
(70, 54, '<p>\n	or batao</p>\n', 2, -1, '0000-00-00 00:00:00', NULL),
(71, 58, '<p>\n	safkjhsdkjfahadskjfhkjsdfdsafads</p>\n', 0, 1, '0000-00-00 00:00:00', NULL),
(72, 58, '<p>\n	sdsfdsfd</p>\n', 1, -1, '0000-00-00 00:00:00', NULL),
(73, 58, '<p>\n	dsfsadfdsf</p>\n', 0, 13, '0000-00-00 00:00:00', NULL),
(74, 58, '<p>\n	sdsdafadf</p>\n', 0, 15, '0000-00-00 00:00:00', NULL),
(75, 58, '<p>\n	sdsdfsdf</p>\n', 1, 0, '0000-00-00 00:00:00', NULL),
(76, 54, '<p>\n	sdaklfjskld ljfkldjfkladjfkl ;ldkfjklds</p>\n', 2, -1, '2012-01-21 03:34:43', NULL),
(77, 5, '<p>\n	sjdh shdkjsh fkjadhjdhfkj dhfjdshjfkad kj</p>\n', 0, 0, '2012-01-21 04:03:15', 'samyak@wiki.com'),
(78, 5, '<p>\n	<span style="color:#ffa500;"><span style="font-size:14px;">slksajdkls dklsjdfksadas</span></span></p>\n', 0, 0, '2012-01-21 04:03:46', 'samyak@wiki.com'),
(79, 30, '<p>\n	jskljfkdsjf kdjfkldsafds</p>\n', 0, 0, '2012-01-21 04:06:56', 'samyak@wiki.com'),
(80, 30, '<p>\n	jsdkljl skjdlaksdfjkldsflk;djflk</p>\n', 0, 0, '2012-01-21 04:07:09', 'samyak@wiki.com'),
(81, 58, '<p>\n	SAMYAK WOW!!</p>\n', 1, 19, '2012-01-21 06:10:36', 'samyak@wiki.com'),
(82, 62, '<p>\n	kya bolu me ab... bahut sahi .. mst lag raha h&nbsp;</p>\n', 1, 1, '2012-01-21 07:26:08', 'samyak@wiki.com'),
(83, 62, '<p>\n	no no no... ha haha&nbsp;</p>\n', 2, -1, '2012-01-21 07:26:16', 'samyak@wiki.com'),
(84, 62, '<p>\n	oh my god!!!!</p>\n', 2, -1, '2012-01-21 07:26:33', 'samyak@wiki.com'),
(85, 62, '<p>\n	dsdsds</p>\n', 1, 15, '2012-01-21 08:32:32', 'samyak@wiki.com'),
(86, 58, '<pre>\n<u><strong>Samyak Jain</strong></u>\n</pre>\n', 0, 0, '2012-01-22 05:08:59', 'samyak@wiki.com'),
(87, 58, '<p>\n	sfkndklsfjkldsjf&#39;kjshfkjsdf</p>\n', 0, 0, '2012-01-22 05:12:08', 'samyak@wiki.com'),
(88, 58, '<p>\n	dasdf sa sd sas&nbsp;</p>\n', 0, 0, '2012-01-22 05:21:23', 'samyak@wiki.com'),
(89, 62, '<p>\n	ksljlskd &#39; lsjdflskdfj ksljdkls</p>\n', 0, 0, '2012-01-22 05:40:02', 'samyak@wiki.com'),
(90, 62, '<ul>\n	<li>\n		The javascript is placed after the close form tag</li>\n	<li>\n		The javascript is placed before the close body tag</li>\n	<li>\n		The @Page Directive SmartNavigation is <i>not</i> set to true</li>\n	<li>\n		The YourControlName highlighted above is replaced with your control&#39;s ID value</li>\n</ul>\n', 0, 20, '2012-01-22 05:42:54', 'samyak@wiki.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(7) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `designation` int(2) NOT NULL,
  `signUpTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `email`, `password`, `designation`, `signUpTime`) VALUES
(38, 'bhavan@wiki.com', '7022c838b13c088ae3949bcc9319d9f6161e9289', 1, '2012-01-15 07:28:30'),
(37, 'rahul@wiki.com', 'e856d3a123430ef978c5086c22018223c8b2fab8', 1, '2012-01-15 07:28:50'),
(36, 'samyak@wiki.com', 'b1a1ad60443f8d4ea5dffd19577c77d5d688b1bb', 1, '2012-01-15 07:28:50'),
(35, 'rohit@wiki.com', '837ecd31867b5bbe1a10a3ab2416ffc060efe237', 1, '2012-01-15 07:28:50'),
(34, 'abc@wiki.com', '4e2005838f0eb2aee7c62da1922d6484713fe722', 0, '2012-01-15 07:26:11'),
(42, 'samyak.jain@hotmail.com', '70295d04325e722b818aee3a16b6ab1a418f7b6e', 0, '2012-02-05 19:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `qid` int(7) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sendEmail` int(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  UNIQUE KEY `qid` (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `email`, `sendEmail`, `time`, `status`) VALUES
(1, 'I want to download songs from internet? How can i do that?', '', 0, '2011-12-15 21:42:38', 1),
(5, 'Where can i buy expensive googles, shoes and earphones? Is there any website for it ?', 'samyak.jain@hotmail.com', 0, '2011-12-15 21:44:25', 1),
(6, 'Kya bat h launde ...... sahi lag raha h .. but kya yeh sahi me sahi lag raha h ?', '', 0, '2011-12-15 21:40:54', 1),
(8, 'This is a test question', 'samyak.jain@hotmail.com', 0, '2011-12-15 21:40:55', 1),
(10, 'This question is needed to increase the no. of question', '', 0, '2011-12-15 21:40:56', 1),
(11, 'Now lets see if there is such a big question that its destroys each and everything then what will you do', '', 0, '2011-12-15 21:40:37', 1),
(12, 'There is a really need of increasing the question no. so that we can test it better.', 'samyak.jain@hotmail.com', 0, '2011-12-15 21:40:39', 1),
(13, 'This one is for all #rohit #samyak #bhavan', 'whats up', 0, '2011-12-15 21:40:41', 0),
(16, 'asbasjba', 'anbasj', 0, '2011-12-16 01:43:28', 2),
(23, 'asjnaskn', 'sjasa', 0, '2011-12-16 02:07:27', 2),
(24, 'anba', 'asbas', 0, '2011-12-16 17:16:02', 2),
(27, 'How do i fix my yahoo problem ??', 'rohit@bad.com', 0, '2011-12-18 10:15:12', 1),
(28, 'asjjsankak', 'abasba', 0, '2011-12-18 10:17:46', 2),
(29, 'asnsbjsna', 'sasajjsjsa', 0, '2011-12-18 10:19:43', 2),
(30, 'what is temperature of jhansi?', 'ankittripathi16@gmail.com', 0, '2012-01-04 11:11:32', 1),
(32, 'hey abc here', 'abc@abc.com', 0, '2012-01-09 07:13:11', 2),
(33, 'avhas', 'rohit@rohit.com', 0, '2012-01-09 08:05:04', 2),
(34, 'hey ... now i think the server is working properly ... everything just seems perfect ... so i m typing this question to check if there can be any problem with the perfectly working system ??', 'abc@abc.com', 0, '2012-01-10 11:20:14', 0),
(46, '', '', 0, '2012-01-12 18:02:27', 2),
(45, '', '', 0, '2012-01-12 18:01:54', 2),
(44, '', '', 0, '2012-01-12 17:52:16', 2),
(43, '', '', 0, '2012-01-12 17:51:29', 2),
(42, '', '', 0, '2012-01-12 17:50:45', 2),
(41, '', '', 0, '2012-01-12 17:50:38', 2),
(47, '', 'asaa', 0, '2012-01-12 18:03:43', 2),
(48, '', 'asaa', 0, '2012-01-12 18:20:17', 2),
(49, '', '', 0, '2012-01-12 18:53:18', 2),
(50, '', 'assasaa', 0, '2012-01-12 18:53:51', 2),
(51, 'adashbjdjsa', '', 0, '2012-01-13 10:58:47', 2),
(52, 'sdbasjda', 'ashbsds', 0, '2012-01-13 11:00:10', 2),
(53, 'i m abc', 'abc@wiki.com', 0, '2012-01-15 07:26:11', 2),
(54, 'i m rohit', 'rohit@wiki.com', 0, '2012-01-15 07:26:52', 1),
(55, 'i m sam', 'samyak@wiki.com', 0, '2012-01-15 07:27:18', 1),
(56, 'i m rahul', 'rahul@wiki.com', 0, '2012-01-15 07:27:45', 2),
(57, 'i m bhavan', 'bhavan@wiki.com', 0, '2012-01-15 07:28:15', 0),
(58, 'DHOBHI GHAT', 'abc@wiki.com', 0, '2012-01-16 15:09:50', 1),
(60, 'Yar iska kya karna h jaldi batao', 'abc@wiki.com', 0, '2012-01-21 05:25:30', 0),
(59, 'One more question', 'samyak@wiki.com', 0, '2012-01-17 07:30:51', 0),
(61, 'sfdsfkjlkdjfklads', 'abc@wiki.com', 0, '2012-01-21 05:30:05', 0),
(62, 'Hey whats Up . Is this the correct question?', 'abc@wiki.com', 0, '2012-01-21 07:25:16', 1),
(63, 'dlgjflkgjlfkjgslkdjfklsldkfdflkfjgklsfjdlgdfkg', 'abc@wiki.com', 0, '2012-01-25 20:45:33', 0),
(66, 'where can i buy the chepest phone?', 'samyak.jain@hotmail.com', 1, '2012-02-05 19:16:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questiontag`
--

CREATE TABLE IF NOT EXISTS `questiontag` (
  `qid` int(7) NOT NULL,
  `Tag1` varchar(15) NOT NULL,
  `Tag2` varchar(15) NOT NULL,
  `Tag3` varchar(15) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `setBy` varchar(25) NOT NULL,
  `qstatus` varchar(20) NOT NULL COMMENT 'Unanswered Answered Closed',
  KEY `fk_qid` (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questiontag`
--

INSERT INTO `questiontag` (`qid`, `Tag1`, `Tag2`, `Tag3`, `Time`, `setBy`, `qstatus`) VALUES
(5, '', 'mercedes', '', '2012-01-04 11:54:50', 'samyak', 'answered'),
(6, 'mercedes', 'audi', 'mercedes', '2011-12-15 23:50:42', 'samyak', 'unanswered'),
(7, 'saab', 'volvo', 'mercedes', '2011-12-15 21:42:38', 'samyak', 'Unanswered'),
(10, 'saab', 'volvo', 'mercedes', '2011-12-18 09:48:54', 'samyak', 'unanswered'),
(11, '', 'volvo', '', '2012-01-09 19:38:59', 'samyak', 'unanswered'),
(12, 'saab', '', '', '2012-01-10 10:53:01', 'samyak', 'unanswered'),
(27, '', 'mercedes', '', '2012-01-10 10:53:13', 'samyak', 'unanswered'),
(30, '', 'audi', '', '2012-01-10 10:56:27', 'samyak', 'answered'),
(55, 'mercedes', 'saab', 'saab', '2012-01-15 14:05:33', 'samyak', 'answered'),
(58, 'saab', 'saab', 'saab', '2012-01-16 15:10:22', 'samyak@wiki.com', 'answered'),
(54, 'saab', 'volvo', 'mercedes', '2012-01-16 17:15:23', 'samyak@wiki.com', 'answered'),
(62, 'saab', 'mercedes', 'audi', '2012-01-21 07:25:48', 'samyak@wiki.com', 'answered'),
(8, 'saab', 'saab', 'audi', '2012-01-16 17:16:32', 'samyak@wiki.com', 'unanswered');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `fbid` int(20) NOT NULL,
  `fbname` varchar(40) NOT NULL,
  `fbpic` varchar(200) NOT NULL,
  `nooflogin` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `fbid`, `fbname`, `fbpic`, `nooflogin`) VALUES
(4, 'samyak.jain@hotmail.com', 1153999490, 'Samyak Jain', 'http://graph.facebook.com/1153999490/picture?type=small', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
