<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_orders`;");
E_C("CREATE TABLE `zyads_orders` (
  `orderid` mediumint(8) NOT NULL auto_increment,
  `uid` mediumint(8) default '0',
  `siteid` mediumint(8) NOT NULL default '0',
  `zoneid` mediumint(8) default '0',
  `planid` mediumint(8) default '0',
  `adsid` mediumint(9) default '0',
  `price` decimal(12,4) default '0.0000',
  `priceadv` decimal(12,4) default '0.0000',
  `ip` varchar(255) default NULL,
  `referer` varchar(255) default NULL,
  `orders` varchar(100) default '0',
  `deduction` tinyint(1) default '0',
  `like` varchar(255) default NULL,
  `status` tinyint(3) default '0',
  `day` date default '0000-00-00',
  `linkuid` mediumint(8) NOT NULL default '0',
  `addtime` datetime default '0000-00-00 00:00:00',
  `confirmtime` date default '0000-00-00',
  PRIMARY KEY  (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_orders` values('1','1010','4','18','15','5','1.0000','2.0000','127.0.0.1','','','0','','1','2014-03-15','0','2014-03-15 17:59:25','2014-03-15');");

require("../../inc/footer.php");
?>