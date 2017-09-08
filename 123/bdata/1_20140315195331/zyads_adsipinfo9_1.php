<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipinfo9`;");
E_C("CREATE TABLE `zyads_adsipinfo9` (
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipinfo9` values('1','2','2','1','1370738471','0','7','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo9` values('2','1','1','19','1370738481','0','1','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo9` values('3','1','1','13','1370739165','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo9` values('4','1','1','14','1370742158','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo9` values('5','2','2','9','1370746773','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo9` values('6','5','5','9','1370746804','0','1','156','11.7.700.202','1024x768','0.07','0.08','229,895,868','82,70,74','493','40','3','141','21922');");
E_D("replace into `zyads_adsipinfo9` values('7','1','1','20','1370747618','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo9` values('8','2','2','20','1370749630','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo9` values('9','6','1','4','1370750519','0','0','1603','11.3.300','1366x768','0.07','0.08','31,12','11,181','118','88','2','79','2118');");
E_D("replace into `zyads_adsipinfo9` values('10','2','2','4','1370750518','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo9` values('11','1','3','16','1370752145','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");

require("../../inc/footer.php");
?>