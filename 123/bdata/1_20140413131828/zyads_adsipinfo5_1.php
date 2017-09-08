<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipinfo5`;");
E_C("CREATE TABLE `zyads_adsipinfo5` (
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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipinfo5` values('1','2','2','14','1370362707','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('2','1','3','7','1370363842','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('3','1','1','6','1370366178','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('4','2','2','6','1370366179','0','1','909','11.5.31','1920x1080','0.07','0.08','547,402','25,83','492','49','2','119','5345');");
E_D("replace into `zyads_adsipinfo5` values('5','1','1','7','1370366807','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('6','3','3','7','1370366813','0','1','785','11.7.700','1440x900','0.07','0.08','656,949,844','85,60,75','568','50','3','72','11209');");
E_D("replace into `zyads_adsipinfo5` values('7','1','1','7','1370367582','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('8','1','1','7','1370380422','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('9','1','2','7','1370380422','0','1','901','11.3.300','1920x1080','0.07','0.08','341','89','506','47','1','136','4161');");
E_D("replace into `zyads_adsipinfo5` values('10','1','1','6','1370383922','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('11','1','3','8','1370390966','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('12','2','2','15','1370399861','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('13','2','2','9','1370403869','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('14','1','3','9','1370404381','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('15','1','1','11','1370406344','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('16','2','2','16','1370407423','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('17','1','3','10','1370409389','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('18','1','3','6','1370412447','0','1','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('19','2','4','6','1370412476','0','2','578','11.5.502','1366x768','0.07','0.08','604,802,625,421,565','0,4,2,86,0','516','54','5','119','149090');");
E_D("replace into `zyads_adsipinfo5` values('20','2','2','17','1370414016','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('21','1','1','8','1370420203','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('22','1','1','8','1370422657','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('23','1','1','9','1370424106','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('24','2','2','10','1370424287','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('25','3','1','10','1370424287','0','1','739','11.7.700','1440x900','0.07','0.08','523,427,829','9,88,87','788','45','3','99','11079');");
E_D("replace into `zyads_adsipinfo5` values('26','1','1','8','1370425152','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('27','1','1','9','1370428944','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('28','1','1','7','1370430677','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('29','1','3','11','1370433539','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('30','2','5','11','1370433561','0','1','139','11.5.502.146','1366x768','0.07','0.08','637,922,281','14,71,89','673','41','3','120','39386');");
E_D("replace into `zyads_adsipinfo5` values('31','1','1','12','1370434750','0','6','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('32','1','1','13','1370436719','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('33','1','1','8','1370438360','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('34','1','1','9','1370443594','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo5` values('35','1','1','8','1370443632','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");

require("../../inc/footer.php");
?>