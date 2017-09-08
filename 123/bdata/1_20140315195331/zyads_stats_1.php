<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_stats`;");
E_C("CREATE TABLE `zyads_stats` (
  `views` mediumint(8) NOT NULL default '0',
  `num` mediumint(8) NOT NULL default '0',
  `clicks` mediumint(8) NOT NULL default '0',
  `do2click` mediumint(8) NOT NULL default '0',
  `day` date NOT NULL default '0000-00-00',
  `planid` mediumint(8) NOT NULL default '0',
  `adsid` mediumint(8) NOT NULL default '0',
  `uid` mediumint(8) NOT NULL default '0',
  `siteid` mediumint(8) NOT NULL default '0',
  `zoneid` mediumint(8) NOT NULL default '0',
  `plantype` char(3) NOT NULL,
  `adstypeid` mediumint(8) NOT NULL,
  `deduction` mediumint(8) NOT NULL default '0',
  `zonetype` varchar(5) default NULL,
  `sumprofit` decimal(10,4) NOT NULL default '0.0000',
  `sumpay` decimal(10,4) NOT NULL default '0.0000',
  `sumadvpay` decimal(10,4) NOT NULL default '0.0000',
  `orders` mediumint(8) NOT NULL default '0',
  `linkuid` mediumint(8) NOT NULL default '0',
  UNIQUE KEY `unique` (`day`,`zoneid`,`adsid`,`uid`,`planid`),
  KEY `day` (`day`),
  KEY `planid` (`planid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `zyads_stats` values('21','0','0','0','2013-06-02','11','1','1002','2','3','cpc','7','1',NULL,'0.0800','0.0000','0.0800','0','0');");
E_D("replace into `zyads_stats` values('1','0','1','0','2013-06-02','12','2','1002','3','5','','0','0',NULL,'0.0000','0.0000','0.0000','0','0');");
E_D("replace into `zyads_stats` values('1','1','0','0','2013-06-02','13','3','1002','3','9','cpm','9','0',NULL,'0.0010','0.0050','0.0060','0','0');");
E_D("replace into `zyads_stats` values('11','0','0','0','2013-06-02','12','2','1002','3','7','cps','20','0',NULL,'0.0000','0.0000','0.0000','0','0');");
E_D("replace into `zyads_stats` values('0','1','1','0','2013-06-02','14','4','1002','3','10','cpv','15','0',NULL,'0.0010','0.0050','0.0060','0','0');");
E_D("replace into `zyads_stats` values('0','0','1','0','2013-06-02','15','5','1002','3','8','','0','0',NULL,'0.0000','0.0000','0.0000','0','0');");
E_D("replace into `zyads_stats` values('81','5','0','0','2013-06-03','11','1','1002','2','3','cpc','7','1',NULL,'0.1300','0.3500','0.4800','0','0');");
E_D("replace into `zyads_stats` values('90','32','5','0','2013-06-03','14','6','1002','3','12','cpv','15','0',NULL,'0.0320','0.1600','0.1920','0','0');");
E_D("replace into `zyads_stats` values('51','1','0','0','2013-06-03','11','7','1002','2','13','cpc','7','0',NULL,'0.0100','0.0700','0.0800','0','0');");
E_D("replace into `zyads_stats` values('41','0','0','0','2013-06-04','11','7','1002','2','13','cpc','7','0',NULL,'0.0000','0.0000','0.0000','0','0');");
E_D("replace into `zyads_stats` values('150','45','0','0','2013-06-04','14','6','1002','3','12','cpv','15','0',NULL,'0.0450','0.2250','0.2700','0','0');");
E_D("replace into `zyads_stats` values('211','5','0','0','2013-06-04','11','1','1002','2','3','cpc','7','0',NULL,'0.0500','0.3500','0.4000','0','0');");
E_D("replace into `zyads_stats` values('0','1','0','0','2013-06-04','13','3','1002','3','9','cpm','9','0',NULL,'0.0010','0.0050','0.0060','0','0');");
E_D("replace into `zyads_stats` values('140','29','1','0','2013-06-05','14','6','1002','3','12','cpv','15','0',NULL,'0.0290','0.1450','0.1740','0','0');");
E_D("replace into `zyads_stats` values('130','6','0','0','2013-06-05','11','1','1002','2','3','cpc','7','0',NULL,'0.0600','0.4200','0.4800','0','0');");
E_D("replace into `zyads_stats` values('41','0','0','0','2013-06-05','11','7','1002','2','13','cpc','7','0',NULL,'0.0000','0.0000','0.0000','0','0');");
E_D("replace into `zyads_stats` values('191','4','0','0','2013-06-06','11','1','1002','2','3','cpc','7','0',NULL,'0.0400','0.2800','0.3200','0','0');");
E_D("replace into `zyads_stats` values('20','17','2','0','2013-06-06','14','6','1002','3','12','cpv','15','0',NULL,'0.0170','0.0850','0.1020','0','0');");
E_D("replace into `zyads_stats` values('21','0','0','0','2013-06-06','11','7','1002','2','13','cpc','7','0',NULL,'0.0000','0.0000','0.0000','0','0');");
E_D("replace into `zyads_stats` values('91','4','0','0','2013-06-07','11','1','1002','2','3','cpc','7','0',NULL,'0.0400','0.2800','0.3200','0','0');");
E_D("replace into `zyads_stats` values('80','20','0','0','2013-06-07','14','6','1002','3','12','cpv','15','0',NULL,'0.0200','0.1000','0.1200','0','0');");
E_D("replace into `zyads_stats` values('41','0','0','0','2013-06-07','11','7','1002','2','13','cpc','7','0',NULL,'0.0000','0.0000','0.0000','0','0');");
E_D("replace into `zyads_stats` values('280','17','2','0','2013-06-08','14','6','1002','3','12','cpv','15','0',NULL,'0.0170','0.0850','0.1020','0','0');");
E_D("replace into `zyads_stats` values('501','5','0','0','2013-06-08','11','1','1002','2','3','cpc','7','0',NULL,'0.0500','0.3500','0.4000','0','0');");
E_D("replace into `zyads_stats` values('131','0','0','0','2013-06-08','11','7','1002','2','13','cpc','7','0',NULL,'0.0000','0.0000','0.0000','0','0');");
E_D("replace into `zyads_stats` values('91','9','1','0','2013-06-09','14','6','1002','3','12','cpv','15','0',NULL,'0.0090','0.0450','0.0540','0','0');");
E_D("replace into `zyads_stats` values('111','1','0','0','2013-06-09','11','1','1002','2','3','cpc','7','0',NULL,'0.0100','0.0700','0.0800','0','0');");
E_D("replace into `zyads_stats` values('11','1','0','0','2013-06-09','11','7','1002','2','13','cpc','7','0',NULL,'0.0100','0.0700','0.0800','0','0');");
E_D("replace into `zyads_stats` values('30','0','0','0','2014-03-15','13','3','1010','4','15','cpm','9','1',NULL,'0.0060','0.0000','0.0060','0','0');");
E_D("replace into `zyads_stats` values('0','1','1','0','2014-03-15','15','5','1010','4','18','','0','0',NULL,'1.0000','1.0000','2.0000','0','0');");

require("../../inc/footer.php");
?>