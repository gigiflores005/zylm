<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipinfo15`;");
E_C("CREATE TABLE `zyads_adsipinfo15` (
  `ipinfoid` int(10) unsigned NOT NULL auto_increment,
  `refererid` int(10) unsigned NOT NULL,
  `siteurlid` int(10) unsigned NOT NULL,
  `useragentid` mediumint(8) unsigned NOT NULL,
  `viewtime` int(11) unsigned NOT NULL default '0',
  `deduction` tinyint(1) unsigned NOT NULL default '0',
  `clicks` int(11) unsigned NOT NULL default '0',
  `scrollh` mediumint(8) unsigned NOT NULL default '0',
  `plugins` varchar(50) default NULL,
  `screen` varchar(15) default NULL,
  `price` varchar(9) default NULL,
  `priceadv` varchar(9) default NULL,
  `xx` varchar(50) default NULL,
  `yy` varchar(50) default NULL,
  `x` mediumint(8) unsigned NOT NULL default '0',
  `y` mediumint(8) unsigned NOT NULL default '0',
  `n` mediumint(9) unsigned NOT NULL default '0',
  `g` mediumint(9) unsigned NOT NULL default '0',
  `t` varchar(15) default NULL,
  PRIMARY KEY  (`ipinfoid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipinfo15` values('1','1','4','11','1394875909','1','0','918','12.0.0.77','1280x1024','0.005','0.006','','','0','0','0','0','0');");

require("../../inc/footer.php");
?>