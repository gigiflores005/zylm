<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsip9`;");
E_C("CREATE TABLE `zyads_adsip9` (
  `uid` mediumint(8) unsigned NOT NULL default '0',
  `advuid` mediumint(8) unsigned NOT NULL default '0',
  `adsid` mediumint(8) unsigned NOT NULL default '0',
  `planid` mediumint(8) unsigned default '0',
  `zoneid` mediumint(8) unsigned NOT NULL default '0',
  `siteid` mediumint(8) unsigned NOT NULL default '0',
  `adstypeid` mediumint(8) unsigned NOT NULL,
  `ip` int(10) unsigned NOT NULL,
  `clicktime` int(11) unsigned NOT NULL,
  `ipinfoid` int(11) unsigned NOT NULL,
  UNIQUE KEY `pi_id` (`ip`,`planid`),
  KEY `ip` (`ip`),
  KEY `uid` (`uid`),
  KEY `adsid` (`adsid`),
  KEY `clicktime` (`clicktime`),
  KEY `adstypeid` (`adstypeid`),
  KEY `planid` (`planid`),
  KEY `siteid` (`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsip9` values('1002','1004','6','14','12','3','15','976816932','1370738476','1');");
E_D("replace into `zyads_adsip9` values('1002','1004','6','14','12','3','15','3031367702','1370738488','2');");
E_D("replace into `zyads_adsip9` values('1002','1004','6','14','12','3','15','976816934','1370739173','3');");
E_D("replace into `zyads_adsip9` values('1002','1004','6','14','12','3','15','1965587423','1370742164','4');");
E_D("replace into `zyads_adsip9` values('1002','1004','6','14','12','3','15','1901318867','1370746778','5');");
E_D("replace into `zyads_adsip9` values('1002','1004','1','11','3','2','7','1901318867','1370746828','6');");
E_D("replace into `zyads_adsip9` values('1002','1004','6','14','12','3','15','1018594171','1370747624','7');");
E_D("replace into `zyads_adsip9` values('1002','1004','6','14','12','3','15','2008711263','1370749636','8');");
E_D("replace into `zyads_adsip9` values('1002','1004','7','11','13','2','7','2059224490','1370750524','9');");
E_D("replace into `zyads_adsip9` values('1002','1004','6','14','12','3','15','2059224490','1370750524','10');");
E_D("replace into `zyads_adsip9` values('1002','1004','6','14','12','3','15','1961758385','1370752150','11');");

require("../../inc/footer.php");
?>