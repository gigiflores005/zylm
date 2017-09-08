<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsip7`;");
E_C("CREATE TABLE `zyads_adsip7` (
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
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','1921316205','1370542239','1');");
E_D("replace into `zyads_adsip7` values('1002','1004','1','11','3','2','7','1921316205','1370542256','2');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','1996822889','1370568092','3');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','827722366','1370569227','4');");
E_D("replace into `zyads_adsip7` values('1002','1004','1','11','3','2','7','827722366','1370569269','5');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','3746197334','1370572157','6');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','3730042785','1370575509','7');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','2874780363','1370575522','8');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','3661657426','1370579604','9');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','3664418503','1370585171','10');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','976816932','1370592224','11');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','1962793655','1370593521','12');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','2008658874','1370594848','13');");
E_D("replace into `zyads_adsip7` values('1002','1004','1','11','3','2','7','2008658874','1370594903','14');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','456030946','1370605939','15');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','3745615698','1370609523','16');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','3746954552','1370611589','17');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','993961578','1370613517','18');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','466231268','1370616411','19');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','3701767620','1370618174','20');");
E_D("replace into `zyads_adsip7` values('1002','1004','1','11','3','2','7','3701767620','1370618428','21');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','2095465288','1370619189','22');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','244942319','1370619935','23');");
E_D("replace into `zyads_adsip7` values('1002','1004','6','14','12','3','15','2007074153','1370620297','24');");

require("../../inc/footer.php");
?>