-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-08-08 16:16:12
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dating`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_appearance`
--

CREATE TABLE IF NOT EXISTS `think_appearance` (
  `id` int(10) NOT NULL,
  `members_id` char(11) NOT NULL,
  `weight` int(3) NOT NULL,
  `size` char(100) NOT NULL,
  `health` char(100) NOT NULL,
  `evaluation` char(100) NOT NULL,
  `clothes` char(100) NOT NULL,
  `disposition` char(100) NOT NULL,
  `temper` char(100) NOT NULL,
  `modify` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_appearance`
--

INSERT INTO `think_appearance` (`id`, `members_id`, `weight`, `size`, `health`, `evaluation`, `clothes`, `disposition`, `temper`, `modify`) VALUES
(1, '1508000136', 60, '健壮性', '良好', '阳光帅气', '休闲风格', '内外向均衡', '脾气很好', '2015-08-06 10:08:24'),
(2, '1508000246', 0, '', '', '', '', '', '', '2015-08-08 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `think_choose`
--

CREATE TABLE IF NOT EXISTS `think_choose` (
  `id` int(10) NOT NULL,
  `members_id` char(12) NOT NULL,
  `agea` int(3) NOT NULL,
  `ageb` int(3) NOT NULL,
  `heighta` int(3) NOT NULL,
  `heightb` int(3) NOT NULL,
  `school` char(50) NOT NULL,
  `hunyin` char(50) NOT NULL,
  `work` char(100) NOT NULL,
  `photo` char(50) NOT NULL,
  `modify` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_choose`
--

INSERT INTO `think_choose` (`id`, `members_id`, `agea`, `ageb`, `heighta`, `heightb`, `school`, `hunyin`, `work`, `photo`, `modify`) VALUES
(1, '1508000136', 19, 28, 160, 170, '大学本科', '未婚', '成都', '有', '2015-08-06 09:53:45'),
(2, '1508000246', 0, 0, 0, 0, '', '', '', '', '2015-08-08 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `think_contact`
--

CREATE TABLE IF NOT EXISTS `think_contact` (
  `id` int(10) NOT NULL,
  `members_id` char(11) NOT NULL,
  `name` char(50) NOT NULL,
  `unit` char(100) NOT NULL,
  `tel` char(15) NOT NULL,
  `blog` char(50) NOT NULL,
  `qq` char(12) NOT NULL,
  `weibo` char(40) NOT NULL,
  `msn` char(40) NOT NULL,
  `home` char(100) NOT NULL,
  `modify` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_contact`
--

INSERT INTO `think_contact` (`id`, `members_id`, `name`, `unit`, `tel`, `blog`, `qq`, `weibo`, `msn`, `home`, `modify`) VALUES
(1, '1508000136', '李正祥', '西南民族大学', '15308003217', '没有', '1065482100', '没有', '没有', '成都', '2015-08-06 10:11:04'),
(2, '1508000246', '', '', '', '', '', '', '', '', '2015-08-08 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `think_data`
--

CREATE TABLE IF NOT EXISTS `think_data` (
  `id` int(11) NOT NULL,
  `members_id` char(12) NOT NULL,
  `nickname` char(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `birth` date NOT NULL,
  `height` int(3) NOT NULL,
  `schooling` char(50) NOT NULL,
  `marriage` char(30) NOT NULL,
  `children` char(20) NOT NULL,
  `work` char(100) NOT NULL,
  `home` char(100) NOT NULL,
  `place` char(100) NOT NULL,
  `type` char(10) NOT NULL,
  `constellation` char(10) NOT NULL,
  `income` char(30) NOT NULL,
  `live` char(50) NOT NULL,
  `car` char(50) NOT NULL,
  `modeify` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_data`
--

INSERT INTO `think_data` (`id`, `members_id`, `nickname`, `gender`, `birth`, `height`, `schooling`, `marriage`, `children`, `work`, `home`, `place`, `type`, `constellation`, `income`, `live`, `car`, `modeify`) VALUES
(1, '1508000136', '李正祥', '男', '1992-05-10', 170, '大学本科', '未婚', '无', '青海', '成都', '青海', 'o', '白羊座', '12000-30000', '学校', '没有', '2015-08-06'),
(2, '1508000246', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- 表的结构 `think_life`
--

CREATE TABLE IF NOT EXISTS `think_life` (
  `id` int(10) NOT NULL,
  `members_id` char(12) NOT NULL,
  `smoking` char(50) NOT NULL,
  `drinking` char(50) NOT NULL,
  `exercise` char(50) NOT NULL,
  `diet` char(50) NOT NULL,
  `shopping` char(50) NOT NULL,
  `religious` char(50) NOT NULL,
  `worktime` char(50) NOT NULL,
  `social` char(50) NOT NULL,
  `consumption` char(50) NOT NULL,
  `home` char(50) NOT NULL,
  `distribution` char(50) NOT NULL,
  `ranking` char(50) NOT NULL,
  `parents` char(50) NOT NULL,
  `child` char(50) NOT NULL,
  `married` char(50) NOT NULL,
  `pet` char(50) NOT NULL,
  `petabout` char(50) NOT NULL,
  `modify` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_life`
--

INSERT INTO `think_life` (`id`, `members_id`, `smoking`, `drinking`, `exercise`, `diet`, `shopping`, `religious`, `worktime`, `social`, `consumption`, `home`, `distribution`, `ranking`, `parents`, `child`, `married`, `pet`, `petabout`, `modify`) VALUES
(1, '1508000136', '不吸烟', '少许', '每天锻炼', '无特殊口味', '偶尔逛街', '无', '正常', 'qq', '买书', '良好', '家务我做', '第二', '健康', '要', '不知道', '不喜欢', '不喜欢', '2015-08-06 10:18:16'),
(2, '1508000246', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015-08-08 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `think_lnner`
--

CREATE TABLE IF NOT EXISTS `think_lnner` (
  `id` int(10) NOT NULL,
  `members_id` char(15) NOT NULL,
  `lnner` text NOT NULL,
  `state` int(2) NOT NULL,
  `modify` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_lnner`
--

INSERT INTO `think_lnner` (`id`, `members_id`, `lnner`, `state`, `modify`) VALUES
(1, '1508000136', '我是一個樂觀的男孩 ... ... ... ...', 0, '2015-08-06 10:04:57'),
(2, '1508000246', '', 0, '2015-08-08 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `think_love`
--

CREATE TABLE IF NOT EXISTS `think_love` (
  `id` int(10) NOT NULL,
  `members_id` char(12) NOT NULL,
  `sports` char(100) NOT NULL,
  `food` char(100) NOT NULL,
  `book` char(100) NOT NULL,
  `movie` char(100) NOT NULL,
  `tv` char(100) NOT NULL,
  `play` char(100) NOT NULL,
  `hobby` char(100) NOT NULL,
  `tourism` char(100) NOT NULL,
  `modify` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_love`
--

INSERT INTO `think_love` (`id`, `members_id`, `sports`, `food`, `book`, `movie`, `tv`, `play`, `hobby`, `tourism`, `modify`) VALUES
(1, '1508000136', '篮球', '中国菜', '校园青春', '爱情', '体育赛事', '电影院', '汽车', '秀美山水', '2015-08-06 10:21:46'),
(2, '1508000246', '', '', '', '', '', '', '', '', '2015-08-08 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `think_photo`
--

CREATE TABLE IF NOT EXISTS `think_photo` (
  `id` int(15) NOT NULL,
  `members_id` char(10) CHARACTER SET latin1 NOT NULL,
  `head_ptoto` char(100) CHARACTER SET latin1 NOT NULL,
  `head_state` int(2) NOT NULL,
  `life_photo_1` char(100) CHARACTER SET latin1 NOT NULL,
  `life_state_1` int(2) NOT NULL,
  `life_photo_2` char(100) CHARACTER SET latin1 NOT NULL,
  `life_state_2` int(2) NOT NULL,
  `life_photo_3` char(100) CHARACTER SET latin1 NOT NULL,
  `life_state_3` int(2) NOT NULL,
  `life_photo_4` char(100) CHARACTER SET latin1 NOT NULL,
  `life_state_4` int(2) NOT NULL,
  `life_photo_5` char(100) CHARACTER SET latin1 NOT NULL,
  `life_state_5` int(2) NOT NULL,
  `life_photo_6` char(100) CHARACTER SET latin1 NOT NULL,
  `life_state_6` int(2) NOT NULL,
  `public` int(5) NOT NULL,
  `modify` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_photo`
--

INSERT INTO `think_photo` (`id`, `members_id`, `head_ptoto`, `head_state`, `life_photo_1`, `life_state_1`, `life_photo_2`, `life_state_2`, `life_photo_3`, `life_state_3`, `life_photo_4`, `life_state_4`, `life_photo_5`, `life_state_5`, `life_photo_6`, `life_state_6`, `public`, `modify`) VALUES
(1, '1508000136', 'https://localhost/single_love/Uploads/2015-08-07/55c42cc67dc4f.jpg', 0, 'https://localhost/single_love/Uploads/2015-08-07/55c42cc6bc933.jpg', 0, 'https://localhost/single_love/Uploads/2015-08-07/55c42cc6bdd1c.jpg', 0, 'https://localhost/single_love/Uploads/2015-08-07/55c42cc6df0e1.jpg', 0, 'https://localhost/single_love/Uploads/2015-08-07/55c42cc6e0069.jpg', 0, 'https://localhost/single_love/Uploads/2015-08-07/55c42cc6e0f9e.jpg', 0, 'https://localhost/single_love/Uploads/2015-08-07/55c42cc6e21da.jpg', 0, 0, '2015-08-07'),
(2, '1508000246', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 0, '2015-08-08');

-- --------------------------------------------------------

--
-- 表的结构 `think_registered`
--

CREATE TABLE IF NOT EXISTS `think_registered` (
  `id` int(11) NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `members_id` varchar(15) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `weChat` varchar(30) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `type` varchar(30) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `password` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `join_time` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_registered`
--

INSERT INTO `think_registered` (`id`, `email`, `members_id`, `weChat`, `type`, `password`, `join_time`) VALUES
(1, '15308003218@163.com', '1508000136', 'lizhengxiang', 'A', '941e8d9ff81b3425ad0294807e6d73a1', '2015-08-06'),
(2, '15308003217@163.com', '1508000246', 'lizhengxiang1', 'A', '9d0acb117c5c012e8dc231e2ad764b3c', '2015-08-08');

-- --------------------------------------------------------

--
-- 表的结构 `think_unit`
--

CREATE TABLE IF NOT EXISTS `think_unit` (
  `id` int(10) NOT NULL,
  `members_id` char(12) NOT NULL,
  `unit_type` char(50) NOT NULL,
  `professional` char(50) NOT NULL,
  `work` char(50) NOT NULL,
  `move` char(50) NOT NULL,
  `family` char(50) NOT NULL,
  `school` char(50) NOT NULL,
  `major` char(50) NOT NULL,
  `language` char(50) NOT NULL,
  `modify` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_unit`
--

INSERT INTO `think_unit` (`id`, `members_id`, `unit_type`, `professional`, `work`, `move`, `family`, `school`, `major`, `language`, `modify`) VALUES
(1, '1508000136', '外企', '程序员', '加班加点', '没有调动', '事业家庭均衡', '西南民族大学', '计算机', '英语', '2015-08-06 10:14:22'),
(2, '1508000246', '', '', '', '', '', '', '', '', '2015-08-08 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `think_appearance`
--
ALTER TABLE `think_appearance`
  ADD PRIMARY KEY (`id`,`members_id`);

--
-- Indexes for table `think_choose`
--
ALTER TABLE `think_choose`
  ADD PRIMARY KEY (`id`,`members_id`);

--
-- Indexes for table `think_contact`
--
ALTER TABLE `think_contact`
  ADD PRIMARY KEY (`id`,`members_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `think_data`
--
ALTER TABLE `think_data`
  ADD PRIMARY KEY (`id`,`members_id`);

--
-- Indexes for table `think_life`
--
ALTER TABLE `think_life`
  ADD PRIMARY KEY (`id`,`members_id`);

--
-- Indexes for table `think_lnner`
--
ALTER TABLE `think_lnner`
  ADD PRIMARY KEY (`id`,`members_id`);

--
-- Indexes for table `think_love`
--
ALTER TABLE `think_love`
  ADD PRIMARY KEY (`id`,`members_id`);

--
-- Indexes for table `think_photo`
--
ALTER TABLE `think_photo`
  ADD PRIMARY KEY (`id`,`members_id`),
  ADD UNIQUE KEY `members_id` (`members_id`);

--
-- Indexes for table `think_registered`
--
ALTER TABLE `think_registered`
  ADD PRIMARY KEY (`id`,`members_id`,`email`,`weChat`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `members_id` (`members_id`,`email`,`weChat`);

--
-- Indexes for table `think_unit`
--
ALTER TABLE `think_unit`
  ADD PRIMARY KEY (`id`,`members_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `think_appearance`
--
ALTER TABLE `think_appearance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `think_choose`
--
ALTER TABLE `think_choose`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `think_contact`
--
ALTER TABLE `think_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `think_data`
--
ALTER TABLE `think_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `think_life`
--
ALTER TABLE `think_life`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `think_lnner`
--
ALTER TABLE `think_lnner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `think_love`
--
ALTER TABLE `think_love`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `think_photo`
--
ALTER TABLE `think_photo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `think_registered`
--
ALTER TABLE `think_registered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `think_unit`
--
ALTER TABLE `think_unit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
