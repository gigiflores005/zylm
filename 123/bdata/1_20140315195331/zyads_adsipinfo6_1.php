<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipinfo6`;");
E_C("CREATE TABLE `zyads_adsipinfo6` (
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipinfo6` values('1','1','1','10','1370464135','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('2','1','1','8','1370476242','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('3','4','4','8','1370476239','0','1','139','11.5.502.146','1024x768','0.07','0.08','467,334,301,628,229,541,419','48,79,82,86,12,85,63','396','56','11','110','190407');");
E_D("replace into `zyads_adsipinfo6` values('4','1','1','9','1370482332','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('5','1','1','6','1370491283','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('6','1','2','6','1370491333','0','1','719','','','0.07','0.08','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('7','1','1','10','1370493762','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('8','2','2','1','1370495586','0','4','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('9','1','1','14','1370497907','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('10','2','2','6','1370503034','0','1','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('11','1','1','9','1370504201','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('12','2','2','11','1370510996','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('13','1','1','11','1370511906','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('14','1','1','15','1370512922','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('15','1','1','12','1370517445','0','1','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('16','1','3','11','1370520313','0','2','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('17','1','1','10','1370523572','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('18','2','2','18','1370526190','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('19','3','3','18','1370526204','0','1','705','11.3.300','1440x900','0.07','0.08','459','88','436','37','1','104','11256');");
E_D("replace into `zyads_adsipinfo6` values('20','1','1','7','1370527060','0','0','0','','','0.005','0.006','','','0','0','0','0','0');");
E_D("replace into `zyads_adsipinfo6` values('21','3','6','12','1370529179','0','0','139','11.5.502.146','1366x768','0.07','0.08','716,837,814,881','62,36,52,67','829','38','4','163','322650');");

require("../../inc/footer.php");
?>