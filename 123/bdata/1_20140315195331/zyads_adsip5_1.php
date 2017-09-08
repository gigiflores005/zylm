<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsip5`;");
E_C("CREATE TABLE `zyads_adsip5` (
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
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','2018667618','1370362714','1');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','1918899606','1370363848','2');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','236217371','1370366185','3');");
E_D("replace into `zyads_adsip5` values('1002','1004','1','11','3','2','7','236217371','1370366204','4');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','3056022533','1370366813','5');");
E_D("replace into `zyads_adsip5` values('1002','1004','1','11','3','2','7','3056022533','1370366832','6');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','986950158','1370367587','7');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','2067260474','1370380428','8');");
E_D("replace into `zyads_adsip5` values('1002','1004','1','11','3','2','7','2067260474','1370380454','9');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','3062393913','1370383931','10');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','1897865374','1370390978','11');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','1917990768','1370399867','12');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','2008654349','1370403876','13');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','2083190384','1370404387','14');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','1933360590','1370406353','15');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','2073984855','1370407428','16');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','1962417299','1370409395','17');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','3661657426','1370412454','18');");
E_D("replace into `zyads_adsip5` values('1002','1004','1','11','3','2','7','3661657426','1370412626','19');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','3031389401','1370414023','20');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','2101944900','1370420209','21');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','3730042785','1370422663','22');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','1904884794','1370424119','23');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','2096070286','1370424294','24');");
E_D("replace into `zyads_adsip5` values('1002','1004','1','11','3','2','7','2096070286','1370424303','25');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','241905093','1370425159','26');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','2030998690','1370428950','27');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','2043522739','1370430687','28');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','3664418503','1370433551','29');");
E_D("replace into `zyads_adsip5` values('1002','1004','1','11','3','2','7','3664418503','1370433606','30');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','1894649695','1370434760','31');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','245025544','1370436725','32');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','1928214210','1370438366','33');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','1939297386','1370443601','34');");
E_D("replace into `zyads_adsip5` values('1002','1004','6','14','12','3','15','3395635285','1370443639','35');");

require("../../inc/footer.php");
?>