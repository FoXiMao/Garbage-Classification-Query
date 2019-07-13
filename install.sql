-- Category-list
-- version 1.0
-- http://www.citrons.cn/

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- 表的结构 `sort_admin`
--

CREATE TABLE IF NOT EXISTS `sort_admin` (
  `uid` INT(11) NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(150) NOT NULL,
  `pass` VARCHAR(150) NOT NULL,
  `last` DATETIME NOT NULL,
  `dlip` VARCHAR(15) DEFAULT NULL,
  `active` INT(1) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MYISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `sort_admin`
--

INSERT INTO `sort_admin` (`uid`, `user`, `pass`, `last`, `dlip`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-02-05 00:00:00', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- 表的结构 `sort_config`
--

CREATE TABLE IF NOT EXISTS `sort_config` (
  `k` VARCHAR(255) NOT NULL DEFAULT '',
  `v` TEXT,
  PRIMARY KEY (`k`(10))
) ENGINE=MYISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sort_config`
--

INSERT INTO `sort_config` (`k`, `v`) VALUES
('sitename', '垃圾分类查询'),
('keywords', '垃圾分类，垃圾分类查询，垃圾分类指导手册，垃圾分类指南，上海垃圾分类，长沙垃圾分类'),
('description', '垃圾分类查询，支持上海、长沙等地的垃圾分类查询');

-- --------------------------------------------------------

--
-- 表的结构 `sort_list`
--

CREATE TABLE IF NOT EXISTS `sort_list` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT,
  `category`  TEXT,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;