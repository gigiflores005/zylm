<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipinfo7`;");
E_C("CREATE TABLE `zyads_adsipinfo7` (
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipinfo7` values('1','2','2','12','1370542233','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('2','4','4','12','1370542245','0','1','139','11.6.602.171','1440x900','0.07','0.08','444','29','438','22','1','94','281');");
E_D("replace into `zyads_adsipinfo7` values('3','1','1','9','1370568086','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('4','1','1','13','1370569220','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('5','2','2','13','1370569220','0','1','156','11.7.700.202','1366x768','0.07','0.08','695,636,497','3,89,47','476','54','3','87','14076');");
E_D("replace into `zyads_adsipinfo7` values('6','1','1','5','1370572130','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('7','1','1','8','1370575501','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('8','2','2','7','1370575512','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('9','1','3','6','1370579597','0','3','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('10','1','3','13','1370585164','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('11','2','2','1','1370592216','0','5','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('12','1','1','10','1370593515','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('13','1','1','14','1370594842','0','2','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('14','3','3','14','1370594897','0','3','456','11.5.31','1024x600','0.07','0.08','674','86','620','21','1','95','1016');");
E_D("replace into `zyads_adsipinfo7` values('15','1','1','10','1370605915','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('16','1','3','14','1370609517','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('17','1','1','11','1370611583','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('18','1','1','15','1370613511','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('19','2','2','19','1370616406','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('20','1','3','15','1370618168','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('21','1','7','15','1370618399','0','1','902','11.3.300','1920x1080','0.07','0.08','878,459,366,343','62,6,89,89','734','50','4','185','10735');");
E_D("replace into `zyads_adsipinfo7` values('22','1','1','14','1370619159','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('23','1','1','4','1370619926','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo7` values('24','1','1','10','1370620290','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");

require("../../inc/footer.php");
?>