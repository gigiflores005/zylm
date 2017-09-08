<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipinfo3`;");
E_C("CREATE TABLE `zyads_adsipinfo3` (
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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipinfo3` values('1','1','1','1','1370230683','1','0','707','11.6.602','1366x768','0.07','0.08','486','0','449','59','1','113','640');");
E_D("replace into `zyads_adsipinfo3` values('2','2','2','1','1370236662','0','1','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('3','1','1','1','1370239910','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('4','2','2','2','1370240887','0','0','608','11.7.700','1366x768','0.07','0.08','445','9','484','62','1','95','616');");
E_D("replace into `zyads_adsipinfo3` values('5','1','1','2','1370240886','0','1','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('6','1','1','3','1370240940','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('7','1','1','1','1370246364','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('8','2','2','1','1370246371','0','1','156','11.7.700.202','1440x900','0.07','0.08','12,673,859','61,84,86','278','51','3','744','2775');");
E_D("replace into `zyads_adsipinfo3` values('9','3','2','2','1370246455','0','0','156','11.7.700.202','1400x1050','0.07','0.08','370','27','370','27','1','140','1234');");
E_D("replace into `zyads_adsipinfo3` values('10','1','1','2','1370246455','0','1','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('11','1','1','1','1370246620','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('12','2','2','2','1370246747','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('13','1','1','1','1370247587','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('14','1','1','2','1370247616','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('15','1','1','2','1370249529','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('16','1','1','1','1370260468','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('17','1','1','3','1370260476','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('18','1','1','1','1370263095','0','0','1603','11.3.300','1366x768','0.07','0.08','218','1','135','111','1','100','748');");
E_D("replace into `zyads_adsipinfo3` values('19','2','2','1','1370263094','0','1','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('20','1','1','3','1370266281','0','3','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('21','1','3','2','1370266527','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('22','1','1','1','1370267085','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('23','1','1','1','1370267092','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('24','2','2','2','1370267191','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('25','2','2','3','1370268210','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('26','2','2','4','1370268281','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('27','1','1','3','1370268919','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('28','1','1','2','1370269688','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('29','2','2','3','1370269715','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('30','1','1','4','1370270040','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('31','1','1','2','1370270321','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('32','1','1','3','1370271126','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('33','1','1','2','1370271513','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('34','1','1','4','1370272278','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('35','2','2','4','1370272279','0','1','685','11.7.700','1280x800','0.07','0.08','534,559,561','4,73,74','751','57','3','54','34692');");
E_D("replace into `zyads_adsipinfo3` values('36','1','3','3','1370272520','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('37','2','2','4','1370273813','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('38','1','3','4','1370274164','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo3` values('39','1','1','4','1370274164','0','1','139','11.5.502.146','1440x900','0.07','0.08','523','87','460','39','1','110','5360');");

require("../../inc/footer.php");
?>