<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsip6`;");
E_C("CREATE TABLE `zyads_adsip6` (
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
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','2095458947','1370464146','1');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','1020521210','1370476248','2');");
E_D("replace into `zyads_adsip6` values('1002','1004','1','11','3','2','7','1020521210','1370476432','3');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','2013707129','1370482337','4');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','1021190699','1370491334','5');");
E_D("replace into `zyads_adsip6` values('1002','1004','1','11','3','2','7','1021190699','1370491380','6');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','2074132682','1370493772','7');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','976816932','1370495592','8');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','3733365658','1370497913','9');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','466252475','1370503041','10');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','2089206622','1370504208','11');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','463085350','1370511007','12');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','3029894924','1370511912','13');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','3084709657','1370512929','14');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','1884969494','1370517451','15');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','3664418503','1370520320','16');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','2099273048','1370523578','17');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','1861895584','1370526199','18');");
E_D("replace into `zyads_adsip6` values('1002','1004','1','11','3','2','7','1861895584','1370526504','19');");
E_D("replace into `zyads_adsip6` values('1002','1004','6','14','12','3','15','2067260474','1370527068','20');");
E_D("replace into `zyads_adsip6` values('1002','1004','1','11','3','2','7','3664418503','1370529503','21');");

require("../../inc/footer.php");
?>