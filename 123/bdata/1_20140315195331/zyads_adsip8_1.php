<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsip8`;");
E_C("CREATE TABLE `zyads_adsip8` (
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
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','2013704921','1370624081','1');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','459973388','1370625697','2');");
E_D("replace into `zyads_adsip8` values('1002','1004','1','11','3','2','7','459973388','1370625699','3');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','1033917363','1370656717','4');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','2095103727','1370666453','5');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','2057305325','1370666856','6');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','3664418503','1370670174','7');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','976816932','1370670194','8');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','3550181618','1370677855','9');");
E_D("replace into `zyads_adsip8` values('1002','1004','1','11','3','2','7','3550181618','1370679579','10');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','2008659255','1370681737','11');");
E_D("replace into `zyads_adsip8` values('1002','1004','1','11','3','2','7','976816932','1370682312','12');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','3027567993','1370694707','13');");
E_D("replace into `zyads_adsip8` values('1002','1004','1','11','3','2','7','3027567993','1370694722','14');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','1894583669','1370697353','15');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','993655634','1370698119','16');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','3062345225','1370698350','17');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','2085573750','1370699042','18');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','1921756837','1370701786','19');");
E_D("replace into `zyads_adsip8` values('1002','1004','1','11','3','2','7','1921756837','1370701801','20');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','3722198744','1370704228','21');");
E_D("replace into `zyads_adsip8` values('1002','1004','6','14','12','3','15','1870353866','1370706684','22');");

require("../../inc/footer.php");
?>