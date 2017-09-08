<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipinfo4`;");
E_C("CREATE TABLE `zyads_adsipinfo4` (
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
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipinfo4` values('1','1','1','4','1370277185','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('2','2','2','5','1370278297','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('3','2','2','6','1370278556','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('4','1','1','5','1370304120','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('5','2','2','5','1370304470','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('6','1','1','3','1370305031','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('7','1','1','4','1370305295','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('8','1','1','5','1370308402','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('9','2','2','7','1370309565','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('10','2','2','8','1370312140','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('11','1','1','4','1370312355','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('12','2','2','6','1370312561','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('13','1','1','4','1370313544','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('14','1','1','6','1370313731','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('15','2','2','7','1370318142','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('16','2','2','9','1370319202','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('17','1','3','5','1370319294','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('18','1','3','6','1370323722','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('19','1','1','5','1370323932','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('20','2','2','1','1370327968','0','2','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('21','2','1','1','1370327981','0','3','707','11.6.602','1366x768','0.07','0.08','657,942','89,49','456','63','2','95','3611');");
E_D("replace into `zyads_adsipinfo4` values('22','2','2','4','1370328462','0','1','587','11.3.300','1280x768','0.07','0.08','294','89','311','71','1','128','616');");
E_D("replace into `zyads_adsipinfo4` values('23','1','1','7','1370328703','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('24','2','2','10','1370329574','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('25','1','1','8','1370330923','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('26','1','1','2','1370332088','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('27','2','2','11','1370335015','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('28','1','1','6','1370339876','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('29','1','1','4','1370340656','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('30','2','3','8','1370347028','0','4','707','11.7.700','1366x768','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('31','2','1','8','1370347840','0','5','707','11.7.700','1366x768','0.07','0.08','312','50','459','40','1','94','1249');");
E_D("replace into `zyads_adsipinfo4` values('32','1','1','5','1370348969','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('33','1','1','3','1370349662','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('34','1','1','5','1370350080','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('35','1','1','4','1370350807','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('36','2','2','12','1370351151','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('37','1','1','5','1370351860','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('38','1','1','4','1370351873','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('39','1','1','6','1370351965','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('40','1','1','7','1370354574','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('41','3','3','7','1370354620','0','1','156','11.7.700.202','1680x1050','0.07','0.08','574,778','31,11','806','52','2','158','9200');");
E_D("replace into `zyads_adsipinfo4` values('42','1','1','6','1370354786','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('43','1','1','7','1370355441','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('44','2','2','13','1370357348','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('45','2','2','7','1370358875','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('46','1','1','9','1370359167','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('47','2','1','7','1370360146','0','0','719','11.3.300','1440x900','0.07','0.08','412,558','15,88','601','52','2','98','5346');");
E_D("replace into `zyads_adsipinfo4` values('48','2','2','7','1370360146','0','1','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('49','1','1','5','1370360386','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('50','1','1','6','1370361472','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo4` values('51','1','1','10','1370361546','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");

require("../../inc/footer.php");
?>