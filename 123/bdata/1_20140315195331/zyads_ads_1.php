<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_ads`;");
E_C("CREATE TABLE `zyads_ads` (
  `adsid` mediumint(9) NOT NULL auto_increment,
  `planid` mediumint(8) NOT NULL default '0',
  `uid` mediumint(9) NOT NULL default '0',
  `adinfo` varchar(100) default NULL,
  `adstype` varchar(10) NOT NULL,
  `adstypeid` mediumint(8) NOT NULL,
  `imageurl` varchar(255) default NULL,
  `imageurl1` varchar(255) default NULL,
  `alt` varchar(255) default NULL,
  `url` text NOT NULL,
  `width` smallint(6) NOT NULL default '0',
  `height` smallint(6) NOT NULL default '0',
  `headline` varchar(40) default NULL,
  `description` varchar(120) default NULL,
  `dispurl` varchar(255) default NULL,
  `htmlcode` mediumtext,
  `htmltype` char(2) default NULL,
  `addtime` datetime NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  `denyinfo` varchar(255) default NULL,
  `priority` tinyint(3) NOT NULL default '1',
  `mark` tinyint(1) NOT NULL default '0',
  `zlink` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`adsid`),
  KEY `planid` (`planid`),
  KEY `status` (`status`),
  KEY `width` (`width`),
  KEY `height` (`height`),
  KEY `adstypeid` (`adstypeid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_ads` values('1','11','1004','','','7','',NULL,'','http://www.2345.com/?k2208867','950','90','','','','',NULL,'2013-06-02 11:57:18','3',NULL,'1','0','0');");
E_D("replace into `zyads_ads` values('2','12','1004','','','20','',NULL,'','http://www.2345.com/?k2208867','300','300','','','','',NULL,'2013-06-02 12:06:36','3',NULL,'1','0','0');");
E_D("replace into `zyads_ads` values('3','13','1004','','','9','',NULL,'','http://www.2345.com/?k2208867','0','0','','','','',NULL,'2013-06-02 12:11:48','3',NULL,'1','0','0');");
E_D("replace into `zyads_ads` values('4','14','1004','','','15','',NULL,'','http://www.2345.com/?k2208867','200','200','','','','',NULL,'2013-06-02 12:15:39','3',NULL,'1','0','0');");
E_D("replace into `zyads_ads` values('5','15','1004','','','16','',NULL,'','http://www.2345.com/?k2208867','468','60','','','','',NULL,'2013-06-02 12:18:51','3',NULL,'1','0','1');");
E_D("replace into `zyads_ads` values('6','14','1004','','','15','',NULL,'','http://www.2345.com/?k2208867','200','200','','','','',NULL,'2013-06-03 13:11:10','3',NULL,'1','0','0');");
E_D("replace into `zyads_ads` values('7','11','1004','','','7','',NULL,'','http://www.2345.com/?k2208867','250','250','','','','',NULL,'2013-06-03 13:19:19','3',NULL,'1','0','0');");

require("../../inc/footer.php");
?>