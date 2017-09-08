<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_planstats`;");
E_C("CREATE TABLE `zyads_planstats` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `views` int(10) NOT NULL default '0',
  `clicks` int(10) NOT NULL default '0',
  `num` int(10) NOT NULL default '0',
  `orders` int(10) NOT NULL default '0',
  `do2click` int(10) NOT NULL default '0',
  `deduction` int(10) NOT NULL default '0',
  `sumprofit` decimal(10,4) NOT NULL default '0.0000',
  `sumpay` decimal(10,4) NOT NULL default '0.0000',
  `sumadvpay` decimal(10,4) NOT NULL default '0.0000',
  `planid` int(10) NOT NULL default '0',
  `plantype` char(3) NOT NULL,
  `uid` mediumint(8) NOT NULL default '0',
  `day` date NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `unique` (`day`,`planid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_planstats` values('1','21','0','0','0','0','1','0.0800','0.0000','0.0800','11','cpc','1004','2013-06-02');");
E_D("replace into `zyads_planstats` values('2','21','1','0','0','0','0','0.0000','0.0000','0.0000','12','cps','1004','2013-06-02');");
E_D("replace into `zyads_planstats` values('3','1','0','1','0','0','0','0.0010','0.0050','0.0060','13','cpm','1004','2013-06-02');");
E_D("replace into `zyads_planstats` values('4','0','1','1','0','0','0','0.0010','0.0050','0.0060','14','cpv','1004','2013-06-02');");
E_D("replace into `zyads_planstats` values('5','0','1','0','0','0','0','0.0000','0.0000','0.0000','15','cpa','1004','2013-06-02');");
E_D("replace into `zyads_planstats` values('6','141','0','6','0','0','1','0.1400','0.4200','0.5600','11','cpc','1004','2013-06-03');");
E_D("replace into `zyads_planstats` values('7','90','5','32','0','0','0','0.0320','0.1600','0.1920','14','cpv','1004','2013-06-03');");
E_D("replace into `zyads_planstats` values('8','261','0','5','0','0','0','0.0500','0.3500','0.4000','11','cpc','1004','2013-06-04');");
E_D("replace into `zyads_planstats` values('9','150','0','45','0','0','0','0.0450','0.2250','0.2700','14','cpv','1004','2013-06-04');");
E_D("replace into `zyads_planstats` values('10','0','0','1','0','0','0','0.0010','0.0050','0.0060','13','cpm','1004','2013-06-04');");
E_D("replace into `zyads_planstats` values('11','140','1','29','0','0','0','0.0290','0.1450','0.1740','14','cpv','1004','2013-06-05');");
E_D("replace into `zyads_planstats` values('12','180','0','6','0','0','0','0.0600','0.4200','0.4800','11','cpc','1004','2013-06-05');");
E_D("replace into `zyads_planstats` values('13','221','0','4','0','0','0','0.0400','0.2800','0.3200','11','cpc','1004','2013-06-06');");
E_D("replace into `zyads_planstats` values('14','20','2','17','0','0','0','0.0170','0.0850','0.1020','14','cpv','1004','2013-06-06');");
E_D("replace into `zyads_planstats` values('15','141','0','4','0','0','0','0.0400','0.2800','0.3200','11','cpc','1004','2013-06-07');");
E_D("replace into `zyads_planstats` values('16','80','0','20','0','0','0','0.0200','0.1000','0.1200','14','cpv','1004','2013-06-07');");
E_D("replace into `zyads_planstats` values('17','280','2','17','0','0','0','0.0170','0.0850','0.1020','14','cpv','1004','2013-06-08');");
E_D("replace into `zyads_planstats` values('18','641','0','5','0','0','0','0.0500','0.3500','0.4000','11','cpc','1004','2013-06-08');");
E_D("replace into `zyads_planstats` values('19','91','1','9','0','0','0','0.0090','0.0450','0.0540','14','cpv','1004','2013-06-09');");
E_D("replace into `zyads_planstats` values('20','131','0','2','0','0','0','0.0200','0.1400','0.1600','11','cpc','1004','2013-06-09');");
E_D("replace into `zyads_planstats` values('21','30','0','0','0','0','1','0.0060','0.0000','0.0060','13','cpm','1004','2014-03-15');");
E_D("replace into `zyads_planstats` values('22','0','1','1','0','0','0','1.0000','1.0000','2.0000','15','cpa','1004','2014-03-15');");

require("../../inc/footer.php");
?>