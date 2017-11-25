-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `sn` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `username` varchar(65) NOT NULL COMMENT '作者',
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `article` (`sn`, `title`, `content`, `username`, `create_time`, `update_time`) VALUES
(1,	'iPhone、Mac、iPad 上季的銷量都提升了',	'今天是 iPhone X 正式出貨的日子，不過一起公開的，還有 Apple 上季的業績。在其早些時候公佈的第四財季財報中，iPhone 的銷售量達到了 4,670 萬台，相較一年之前小幅上漲了 2.6%。但需要指出的是，在這個時間段內新出的 iPhone 8 和 8 Plus 並沒有賣足完整的一季（更別提要算進本季的大熱門 iPhone X 了），所以很難說新品對銷量起到了多大的影響。\r\n',	'',	'2017-11-04 09:05:37',	'2017-11-04 09:05:37'),
(2,	'iPhone X 必學新操作快速教學，一起跟上蘋果下個十年',	'iPhone X 因為底部已經被螢幕佔滿的關係，在主頁基本上是完全沒有顯示系統按鈕，不過點入 app 之後底部是會有一個灰色的系統條。在此就可以做出許多之前 Home 鍵可以實現的動作（但不包括 Siri 跟 Apple Pay）。\r\n',	'',	'2017-11-04 09:06:45',	'2017-11-04 09:06:45'),
(3,	'一例一休修法 立委不滿林美珠缺席神隱',	'一例一休調整定案，勞動部要到立法院報告，卻因為部長林美珠缺席，引發立委群起砲轟，甚至這次修正案，總統強調是給企業彈性，但不影響勞工權益，不過這番話也引來「時代力量」立委洪慈庸反諷說，「裙子太長，稍微修改就好，但勞動部卻將裙子改成比基尼」！',	'',	'2017-11-04 09:07:59',	'2017-11-04 09:07:59'),
(4,	'asdgaSGHAsdfh',	'<p>ashgadfhsj</p>\r\n',	'',	'2017-11-11 15:51:28',	'2017-11-11 15:51:28');

DROP TABLE IF EXISTS `loginattempts`;
CREATE TABLE `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2017-11-18 01:26:32
