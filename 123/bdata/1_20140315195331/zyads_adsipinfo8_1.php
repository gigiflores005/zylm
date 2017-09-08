<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipinfo8`;");
E_C("CREATE TABLE `zyads_adsipinfo8` (
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipinfo8` values('1','1','1','16','1370624075','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('2','1','1','17','1370625691','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('3','4','2','17','1370625691','0','1','784','11.7.700','1440x900','0.07','0.08','469,583','83,85','561','49','2','343','7223');");
E_D("replace into `zyads_adsipinfo8` values('4','1','1','11','1370656708','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('5','1','1','12','1370666443','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('6','1','1','12','1370666841','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('7','1','3','11','1370670167','0','3','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('8','2','2','3','1370670188','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('9','1','1','11','1370677838','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('10','2','2','11','1370679555','0','1','139','11.6.602.180','1400x1050','0.07','0.08','537,523','70,6','431','41','2','125','1563');");
E_D("replace into `zyads_adsipinfo8` values('11','1','1','6','1370681731','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('12','2','4','1','1370682284','0','6','707','11.6.602','1366x768','0.07','0.08','252,118,195,12','60,50,89,47','311','39','4','143','27825');");
E_D("replace into `zyads_adsipinfo8` values('13','1','1','12','1370694702','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('14','2','3','12','1370694714','0','1','139','11.4.402.265','1440x900','0.07','0.08','798,584','26,76','495','33','2','125','6391');");
E_D("replace into `zyads_adsipinfo8` values('15','1','1','3','1370697312','0','7','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('16','1','1','11','1370698112','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('17','1','1','1','1370698343','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('18','1','1','12','1370699036','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('19','1','1','13','1370701779','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('20','5','4','13','1370701780','0','1','577','11.5.502','1366x768','0.07','0.08','464,539','1,89','520','34','2','147','18914');");
E_D("replace into `zyads_adsipinfo8` values('21','1','1','13','1370704215','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo8` values('22','1','1','18','1370706678','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");

require("../../inc/footer.php");
?>