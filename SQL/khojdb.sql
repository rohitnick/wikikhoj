-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2011 at 02:47 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `khojdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admint`
--

CREATE TABLE IF NOT EXISTS `admint` (
  `adminid` int(5) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(30) NOT NULL,
  `adminuname` varchar(30) NOT NULL,
  `adminpwd` varchar(30) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admint`
--

INSERT INTO `admint` (`adminid`, `adminname`, `adminuname`, `adminpwd`, `lastlogin`) VALUES
(1, 'Rohit', 'nick', 'nickygarg', '2011-10-19 01:00:16'),
(2, 'Samyak', 'sammy', 'badshah', '2011-12-02 20:21:58'),
(3, 'Bhavan', 'trickster', 'bhavan', '2011-10-19 01:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answerId` int(10) NOT NULL AUTO_INCREMENT COMMENT 'answer id',
  `qid` bigint(20) NOT NULL,
  `answer` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a_status` int(2) NOT NULL,
  PRIMARY KEY (`answerId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answerId`, `qid`, `answer`, `time`, `a_status`) VALUES
(1, 5, 'lskdjkl sjlfksjkljsdf', '2011-10-16 01:28:42', 0),
(2, 5, '<p>\n	DEEPAK</p>\n', '2011-10-16 01:29:50', 0),
(28, 1, '<p>\n	skdjsklfjdklsjfkldsfds</p>\n', '2011-10-16 05:43:18', 0),
(27, 1, '<p>\n	klsjkljfdskljfklds</p>\n', '2011-10-16 05:43:12', 0),
(12, 0, '<p>\n	dfsasdfds</p>\n', '2011-10-16 04:49:20', 0),
(13, 1, '<p>\n	,ksjdlksjdkl jsakldjkl sjdklsjadk;lsadf</p>\n', '2011-10-16 04:49:39', 0),
(14, 1, '<p>\n	RIHIT AGRAWAL</p>\n', '2011-10-16 04:51:00', 0),
(15, 1, '<p>\n	in my pocket</p>\n', '2011-10-16 04:53:53', 0),
(16, 1, '<p>\n	skdlj slkdjsklajd kljfkladkslfjkldjfkl dsjf;adf</p>\n', '2011-10-16 04:57:09', 0),
(17, 1, '<p>\n	s,mfjdlkf jkldjfsklj akldfgjklfjgdf</p>\n', '2011-10-16 04:58:17', 0),
(18, 1, '<p>\n	klsjdlksj dklsjdkl skldjlkdsjklsd kjsdhkjsfhd</p>\n', '2011-10-16 05:00:31', 0),
(19, 1, '<p>\n	skjksjdklsj dklsjaklfj kldshfldj ashkjdhs gkjhdsgkjf</p>\n', '2011-10-16 05:05:04', 0),
(20, 1, '<p>\n	asdksj klfjdklfjkldsfas</p>\n', '2011-10-16 05:10:17', 0),
(21, 1, '<p>\n	dk;lsj dflkajsklfj akljdfas</p>\n', '2011-10-16 05:10:32', 0),
(22, 1, '<p>\n	adjskflj dklfjskldfj kldjfklajs jdasklfjkldfjkldsjf dsjfklads</p>\n', '2011-10-16 05:11:10', 0),
(23, 1, '<p>\n	ksjdkl sfjldskjfklsdjfkljdfkljadklsjf kljdklfjakld</p>\n', '2011-10-16 05:13:55', 0),
(24, 1, '<p>\n	nklasjdfklsjf lkj dfkldkaslj kldsjfds</p>\n', '2011-10-16 05:14:28', 0),
(25, 1, '<p>\n	adjsklfj dslkfjsdlfas</p>\n', '2011-10-16 05:19:35', 0),
(26, 1, '<p>\n	ksjdklsjflksjfklsajgladslkfjad</p>\n', '2011-10-16 05:20:09', 0),
(29, 1, '<p>\n	dklfjdkljfkldsf</p>\n', '2011-10-16 05:43:38', 0),
(30, 1, '<p>\n	skdjskl dfj dklfj kldsfj kldsfdsf</p>\n', '2011-10-16 05:44:21', 0),
(31, 1, '<p>\n	cklfhdkjhfskjdfdaasfds</p>\n', '2011-10-16 05:46:18', 0),
(32, 1, '<p>\n	,askdjklsjflkadsfd</p>\n', '2011-10-16 05:47:34', 0),
(33, 1, '<p>\n	slfkjdsljfklsfs</p>\n', '2011-10-16 05:54:23', 0),
(34, 1, '<p>\n	Sam smart</p>\n', '2011-10-16 05:54:42', 0),
(35, 1, '<p>\n	ROHIT</p>\n', '2011-10-16 05:55:06', 0),
(36, 1, '<p>\n	klsjdlsk fjklasjfkldjsklfaj dsklfjldkasjfkldsj fkladsjfkljdsfkljdlkjldksfjkldjf kldsjlfkjdklfjladskfj</p>\n', '2011-10-16 05:55:17', 0),
(37, 1, '<p>\n	snfkjfklds fjkldsjfk dsklfjklds fjkldsjfdsjklf dklfjadklfjad</p>\n', '2011-10-16 06:00:15', 0),
(38, 1, '<p>\n	dkjhskjldhskjlad klasjdkajsldkjlkfjaldsk;fds</p>\n', '2011-10-16 06:01:37', 0),
(39, 1, '<p>\n	s.kjdslkjdkl sjdklsj dkljskljdskljdksljdksljd</p>\n', '2011-10-16 06:02:02', 0),
(40, 1, '<p>\n	sakjdskljdklsjalkdjasdas</p>\n', '2011-10-16 06:02:25', 0),
(41, 1, '<p>\n	sdhskjdh skjdhskjhdskjhdskjd skjdhskjdhskjhdskj</p>\n', '2011-10-16 06:04:47', 0),
(42, 1, '<p>\n	sklfjskl afjkldsjf kladsjfklad kladjfkljdkl jklgjkflg kflajgkl jgkdjkladsjklgdjs</p>\n', '2011-10-16 06:14:16', 0),
(43, 1, '<p>\n	lkjsfkljdsklfj dklsgj askldjgklsadfjgk;ljadsklds;lkgjkaldfsgjklfa gjklafsjgkl afs</p>\n', '2011-10-16 06:14:35', 0),
(44, 5, '<h3 style="color:red;">\n	<span style="font-size:36px;"><span style="font-family:verdana,geneva,sans-serif;">BHAVAN KLJDKL JKLJSKL JSK:LJ KLDSJKLJDKLJDKLJ JSKLDJDKL</span></span></h3>\n', '2011-10-16 06:15:25', 0),
(45, 1, '<p>\n	a,klsj fklsjfkjds klfjskldf kdjfkld kfdlkjfkldjflk ajfjdf j;fk;kf;lkdfdk ;kk;dlkf;ldk ;kd;lfkd;lk&nbsp; ;k;ldkf;lkfdkflkjo; ;lj;lfk;um ;lksf;lkl;fl;k ;lkdf;lkl;f l;k;lfk;lkf;lj;lajfi&#39;a&#39;lkj&#39;;lkk ;lkasl;fkl; lkljdfkj &#39;j;ljdfkdksjfkldji</p>\n', '2011-10-17 01:02:52', 0),
(46, 1, '<div class="sectionTitle">\n	&nbsp;</div>\n<p>\n	Hello..! So you are all set for a whirlwind tour of India! That is such a great idea. Not to beat my own drums, but if you are a connoisseur of arts, culture, history, diversity, colors, street food...you have chosen the perfect destination for quenching your thirst. A country that will dazzle your eyes, fill your senses and overwhelm you with its huge range of diverse cultures and systems. India welcomes you warmly :)</p>\n<div class="sectionTitle">\n	Overview</div>\n<p>\n	With a 5,000 year old culture, a multitude of languages, a confluence of religions and diverse communities of over a billion people living together in unity, India is more than just a land mass. It is a value system; a rich cultural tapestry, whose edifice is built upon pluralism and diversity.</p>\n<p>\n	Whether you travel to India on business, leisure or pleasure, you&#39;ll find there&#39;s a lot to see and do in India. As a tourist destination, India offers a bewilderingly vast array of tourist options to see and explore that can cater to a diverse tourist profile. From heritage sites to adventure tours, from mountaineering to water sports, and from cultural attractions to wildlife encounters, you&#39;re sure to find a slice of India within you.</p>\n<p style="text-align:center">\n	&nbsp;</p>\n<blockquote>\n	<img class="researchedImage" src="http://www.mygola.com/yango/graphics/guides/guide_uploads/564340bfbd92c4bfbe46673b7dd702ff.jpg" /></blockquote>\n<p>\n	&nbsp;</p>\n<p style="text-align:right">\n	<span class="source" style="font-size:80%;">mygola - Guide Site (Source: <a href="http://guide.mygola.com/admin/console/2358">mygola - Guide Site</a>)</span><span>&nbsp;</span></p>\n<div class="sectionTitle">\n	Weather</div>\n<div class="sectionTitle">\n	Events</div>\n<p>\n	<span class="unitTitle" poiid="0" unittype="event">1. Write the name of the event you&#39;re recommending</span></p>\n<div class="sectionTitle">\n	Things to See</div>\n<p>\n	<span class="unitTitle" poiid="0" unittype="thingsToSee">1. Write the name of the attraction (sight, neighborhood) you&#39;re recommending</span></p>\n<div class="sectionTitle">\n	&nbsp;</div>\n', '2011-10-17 01:13:47', 0),
(47, 1, 'China is a fantastic choice for a vacation at anytime of the year. The country has everything you can ever imagine. Natural wonders which are totally out of this world, Historical sites to take you back in the ancient era, Long and endless treks, Art galleries which are a sure treat for people who love art and even for those who do not, World Heritages, River Cruises and much much more.<br><br><a target="_blank" href="http://www.flickr.com/photos/richardgiles/"><img  alt="" src="http://farm1.static.flickr.com/1/2483765_a3dce2a787_m_d.jpg"></a>&nbsp;&nbsp; <a target="_blank" href="http://www.flickr.com/photos/betta_design/"><img  alt="" src="http://farm3.static.flickr.com/2169/2761715121_6c94060f68_m_d.jpg"></a><br><br><a target="_blank" href="http://www.flickr.com/photos/davelau/"><img  alt="" style="height: 180px; width: 240px;" src="http://farm2.static.flickr.com/1144/1017417967_9c526425f1_m_d.jpg"></a>&nbsp;&nbsp; <a target="_blank" href="http://www.flickr.com/photos/tomhaymes/"><img  alt="" style="height: 180px; width: 240px;" src="http://farm3.static.flickr.com/2099/2466558970_fde8489e73_m_d.jpg"></a><br><br><strong>Historical Sites</strong> : There are numerous sites that talk about Chinese History. Some of the names you might be familiar with but there is lots more. The ones that you should not miss are : The Great Wall, Forbidden City, Summer Palace, Terracotta Warriors, Beijing Hutong and Rickshaw tours, Jade Buddha Temple, Temple of Heaven, Shanghai Museum. These are just some of the many names which talk about Chinese History. <br><br><strong>River Cruises</strong> : The river cruises in China take you through the most scenic places. The two best cruises are The Yangtze River Cruise and the Li River cruise. Read more about the Yangtze River Cruise <a target="_blank" href="http://www.chinahighlights.com/yangtzeriver/">here</a>.<br><br><strong>World Heritage Sites</strong> : " I so wish to see some of the UNESCO world heritage sites " Has this been on your travel list for long? Check mark that now because when you travel to China, you can see some of the world heritage sites also. The sites are : The Badaling Great Wall, Ming Tombs, Bird Island, Yumen Pass and some more.<br><br><strong>Natural Wonders</strong> : China is blessed with natural wonders which are totally out of this world. Elephant Trunk Hill, Yellow Mountain, Longji Terraced fields, White Pagoda Mountain etc are some of the famous ones.<br><br><strong>Sports and Recreation</strong> : Beijing Zoo, Shanghai Old Street, Zhujiajiao Water Town , Nanjing Road, Pudong, Shangri-la<br><br>You can read more about the places to see in China <a target="_blank" href="http://www.chinahighlights.com/travelguide/china-attraction-guide.htm">here</a>. Do write back and I will help you with your complete planning for your trip. <br><br>Sneha<br><br>', '2011-10-17 01:15:29', 0),
(48, 1, '<p>\n	<a href="http://www.icircles.in">ROHIT</a></p>\n', '2011-10-18 00:47:39', 0),
(49, 1, '<p>\n	kljhskljd klsjdkldf</p>\n<p>\n	dklfjd</p>\n<p>\n	&nbsp;</p>\n<p>\n	dfdskljfldk</p>\n<p>\n	&nbsp;</p>\n<p>\n	<a href="http://facebook.com">lakjhdklsjd</a></p>\n', '2011-10-18 00:48:12', 0),
(50, 1, '<p>\n	sdkljh sodkjs fhdkjfhkjdshfkjds</p>\n', '2011-10-18 00:49:02', 0),
(51, 1, '', '2011-10-18 00:53:51', 0),
(52, 1, '', '2011-10-18 00:54:50', 0),
(53, 1, '<p>\n	sdnklsjfkl jasflkjadsklfj kldsjflajdfkljdsklfj kladsf</p>\n', '2011-10-18 00:56:10', 0),
(54, 1, '<p>\n	skjdklsj kljdsfkl ajdklfjkl fjdafads</p>\n', '2011-10-18 00:57:53', 0),
(55, 1, '<p>\n	<span style="font-family:comic sans ms,cursive;">&nbsp;ajkshfkjhf kjadsfh kjadfhdkjsfh kjadsfhkjadsfh jkadsfhkjadshfj adfjadhfkjdhfjdshf jkahfkjhdfj fkjhdkjfh djkfh kjdfh</span></p>\n', '2011-10-19 00:16:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `filteredt`
--

CREATE TABLE IF NOT EXISTS `filteredt` (
  `qid` bigint(20) NOT NULL,
  `ques` varchar(250) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `checki` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `astatus` tinyint(1) NOT NULL,
  `tag1` varchar(20) NOT NULL,
  `tag2` varchar(20) NOT NULL,
  `tag3` varchar(20) NOT NULL,
  `acount` int(3) NOT NULL,
  UNIQUE KEY `qid` (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filteredt`
--

INSERT INTO `filteredt` (`qid`, `ques`, `eid`, `checki`, `time`, `astatus`, `tag1`, `tag2`, `tag3`, `acount`) VALUES
(1, 'where is my mobile ???', 'wiki@khoj.com', 0, '2011-10-11 16:51:57', 1, 'acad', 'phil', 'Set Tag', 0),
(5, 'my mobile is good ?? it is samsung ??', 'sam@good.com', 0, '2011-10-11 16:52:18', 2, 'sex', 'Set Tag', 'Set Tag', 0),
(7, 'How can i use this site to the best ??', 'myway@wikikhoj.com', 0, '2011-10-11 16:52:36', 2, 'acad', 'Set Tag', 'Set Tag', 0),
(6, 'is dance good for health ??', 'dance@good.com', 0, '2011-10-11 03:06:07', 0, 'acad', 'Set Tag', 'Set Tag', 0),
(21, 'how to use wikikhoj to maximum ???', 'khoj@wiki.com', 0, '2011-10-11 16:34:47', 0, 'acad', 'Set Tag', 'Set Tag', 0),
(20, 'do u have all the answers ???', 'ans@wiki.com', 0, '2011-10-11 16:34:54', 0, 'tech', 'Set Tag', 'Set Tag', 0),
(19, 'hows Computer science as a subject ??', 'comp@u.com', 0, '2011-10-11 16:34:58', 0, 'acad', 'Set Tag', 'Set Tag', 0),
(22, 'how to set up virtual host ???', 'virual', 0, '2011-10-11 16:35:02', 0, 'tech', 'Set Tag', 'Set Tag', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rawt`
--

CREATE TABLE IF NOT EXISTS `rawt` (
  `qid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ques` varchar(250) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `checki` tinyint(1) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `rawt`
--

INSERT INTO `rawt` (`qid`, `ques`, `eid`, `checki`, `time`) VALUES
(3, 'whats my college name ??', 'kk@vit.com', 0, '2011-10-02 11:52:01'),
(8, 'oh wow .... this is working ... but i just wanted to make this question big so that i can see the compatibility of the display menu in admin page ', 'check@gmail.com', 0, '2011-10-02 19:47:38'),
(18, 'hello', 'bhsabja', 0, '2011-10-07 00:58:55'),
(10, 'sffhf', 'sdsdgds', 0, '2011-10-02 19:49:22'),
(23, 'bada vs Android ???', 'sam@goog.com', 0, '2011-10-11 16:39:21'),
(24, '10 features of android , i mean best ones ??', 'and@goog.com', 0, '2011-10-11 16:39:50'),
(25, 'Will this be succesfulll ??? we have put up a lott of effort !!', 'Ans@me.com', 0, '2011-10-11 16:40:50'),
(16, 'whats the price of a ticket from vellore to jhansi ???', 'jhs@khoj.com', 0, '2011-10-05 17:03:56'),
(26, 'sfkljdflj flkdsajf kldjfdksl', 'kljdklfjdkljf', 0, '2011-10-16 06:18:45'),
(27, 'ROhit gandu h', 'sakjdksjf', 0, '2011-10-19 01:03:14'),
(28, 'samyakkkkkk', 'abcdefghi@gmail.com', 0, '2011-10-19 01:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `spamt`
--

CREATE TABLE IF NOT EXISTS `spamt` (
  `qid` bigint(20) NOT NULL,
  `ques` varchar(250) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `scount` int(11) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spamt`
--

INSERT INTO `spamt` (`qid`, `ques`, `eid`, `scount`, `time`) VALUES
(2, 'my pen is red ??? ', 'khoj@wiki.com', 0, '2011-10-02 03:07:16'),
(4, 'which laptop is better ??', 'lap@top.com', 0, '2011-10-02 11:52:01'),
(13, 'hellooo ... i made it', 'bahsbjas', 0, '2011-10-05 03:51:51'),
(14, 'i mm the bond', 'sjsb', 0, '2011-10-05 04:05:24'),
(15, '    avah    msjas     ', '      hshs    ', 0, '2011-10-05 04:06:13'),
(17, 'm looking for a million dollar smile ... where can i get it ???', 'fuck@u.com', 0, '2011-10-06 00:40:18');
