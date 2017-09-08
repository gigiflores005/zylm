<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_hour`;");
E_C("CREATE TABLE `zyads_hour` (
  `day` date NOT NULL,
  `plantype` varchar(6) NOT NULL,
  `uid` mediumint(9) unsigned NOT NULL,
  `hour0` mediumint(9) unsigned NOT NULL,
  `hour1` mediumint(9) unsigned NOT NULL,
  `hour2` mediumint(9) unsigned NOT NULL,
  `hour3` mediumint(9) unsigned NOT NULL,
  `hour4` mediumint(9) unsigned NOT NULL,
  `hour5` mediumint(9) unsigned NOT NULL,
  `hour6` mediumint(9) unsigned NOT NULL,
  `hour7` mediumint(9) unsigned NOT NULL,
  `hour8` mediumint(9) unsigned NOT NULL,
  `hour9` mediumint(9) unsigned NOT NULL,
  `hour10` mediumint(9) unsigned NOT NULL,
  `hour11` mediumint(9) unsigned NOT NULL,
  `hour12` mediumint(9) unsigned NOT NULL,
  `hour13` mediumint(9) unsigned NOT NULL,
  `hour14` mediumint(9) unsigned NOT NULL,
  `hour15` mediumint(9) unsigned NOT NULL,
  `hour16` mediumint(9) unsigned NOT NULL,
  `hour17` mediumint(9) unsigned NOT NULL,
  `hour18` mediumint(9) unsigned NOT NULL,
  `hour19` mediumint(9) unsigned NOT NULL,
  `hour20` mediumint(9) unsigned NOT NULL,
  `hour21` mediumint(9) unsigned NOT NULL,
  `hour22` mediumint(9) unsigned NOT NULL,
  `hour23` mediumint(9) unsigned NOT NULL,
  KEY `day` (`day`,`plantype`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `zyads_hour` values('2013-06-02','cpc','1002','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_hour` values('2013-06-02','cpm','1002','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_hour` values('2013-06-02','cpv','1002','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_hour` values('2013-06-03','cpc','1002','0','0','0','0','0','0','0','0','0','0','0','1','0','0','1','1','1','0','0','0','1','0','0','2');");
E_D("replace into `zyads_hour` values('2013-06-03','cpv','1002','0','0','0','0','0','0','0','0','0','0','0','0','0','1','3','1','6','0','0','2','1','5','9','4');");
E_D("replace into `zyads_hour` values('2013-06-04','cpv','1002','3','0','0','0','0','0','0','0','4','2','5','1','2','2','2','3','1','1','1','0','3','5','4','6');");
E_D("replace into `zyads_hour` values('2013-06-04','cpc','1002','0','0','0','0','0','0','0','0','0','0','0','0','0','0','2','0','0','0','0','0','1','0','1','1');");
E_D("replace into `zyads_hour` values('2013-06-04','cpm','1002','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','0','0','0');");
E_D("replace into `zyads_hour` values('2013-06-05','cpv','1002','2','3','0','0','0','1','1','0','1','0','1','2','2','1','2','0','2','3','1','2','2','1','2','0');");
E_D("replace into `zyads_hour` values('2013-06-05','cpc','1002','0','2','0','0','0','1','0','0','0','0','0','0','0','0','1','0','0','1','0','0','1','0','0','0');");
E_D("replace into `zyads_hour` values('2013-06-06','cpv','1002','0','0','0','0','1','0','0','1','0','1','0','0','2','2','0','2','0','2','1','1','2','2','0','0');");
E_D("replace into `zyads_hour` values('2013-06-06','cpc','1002','0','0','0','0','0','0','0','1','0','0','0','0','1','0','0','0','0','0','0','0','0','1','1','0');");
E_D("replace into `zyads_hour` values('2013-06-07','cpv','1002','0','0','1','0','0','0','0','0','0','2','1','2','1','0','1','0','3','0','0','1','1','2','1','4');");
E_D("replace into `zyads_hour` values('2013-06-07','cpc','1002','0','0','1','0','0','0','0','0','0','1','0','0','0','0','0','0','1','0','0','0','0','0','0','1');");
E_D("replace into `zyads_hour` values('2013-06-08','cpv','1002','1','1','0','0','0','0','0','0','0','1','0','0','2','2','0','1','1','0','0','0','1','4','1','2');");
E_D("replace into `zyads_hour` values('2013-06-08','cpc','1002','0','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','1','0','0','1','0','1','0');");
E_D("replace into `zyads_hour` values('2013-06-09','cpv','1002','0','0','0','0','0','0','0','0','3','1','1','2','2','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_hour` values('2013-06-09','cpc','1002','0','0','0','0','0','0','0','0','0','0','0','1','1','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_hour` values('2014-03-15','cpm','1010','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','0','0','0','0','0');");
E_D("replace into `zyads_hour` values('2014-03-25','cpm','1010','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");

require("../../inc/footer.php");
?>