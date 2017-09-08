<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsip4`;");
E_C("CREATE TABLE `zyads_adsip4` (
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
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','3745817242','1370277194','1');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','2008326450','1370278303','2');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','2071252072','1370278562','3');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1017620936','1370304127','4');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','3546353612','1370304476','5');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','993814462','1370305037','6');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','3659362419','1370305303','7');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1862032106','1370308410','8');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','3739085296','1370309572','9');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','2064050312','1370312146','10');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1919954434','1370312362','11');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1652441596','1370312572','12');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1969166171','1370313551','13');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1901748484','1370313738','14');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1919177690','1370318148','15');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1858723912','1370319230','16');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1961339377','1370319303','17');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','3661657426','1370323729','18');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1921721946','1370323941','19');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','976816932','1370327975','20');");
E_D("replace into `zyads_adsip4` values('1002','1004','1','11','3','2','7','976816932','1370327985','21');");
E_D("replace into `zyads_adsip4` values('1002','1004','1','11','3','2','7','1969166171','1370328507','22');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','242764410','1370328709','23');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1926774967','1370329587','24');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','3659365181','1370330930','25');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1786728026','1370332100','26');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1927914386','1370335021','27');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','3661777775','1370339882','28');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1928747766','1370340662','29');");
E_D("replace into `zyads_adsip4` values('1002','1004','3','13','9','3','9','2008241412','1370347028','30');");
E_D("replace into `zyads_adsip4` values('1002','1004','1','11','3','2','7','2008241412','1370347841','31');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','3060572496','1370348975','32');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','3658456527','1370349675','33');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','2008654002','1370350087','34');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','2006180188','1370350811','35');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','2104746697','1370351162','36');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1927645872','1370351866','37');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1991937103','1370351882','38');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1883404162','1370351971','39');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1916601433','1370354585','40');");
E_D("replace into `zyads_adsip4` values('1002','1004','1','11','3','2','7','1916601433','1370354631','41');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1883362149','1370354813','42');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1984952609','1370355448','43');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1905135971','1370357365','44');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1991951440','1370358883','45');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1919315522','1370359178','46');");
E_D("replace into `zyads_adsip4` values('1002','1004','1','11','3','2','7','1859030184','1370360164','47');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1859030184','1370360173','48');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1871752124','1370360416','49');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1996765468','1370361478','50');");
E_D("replace into `zyads_adsip4` values('1002','1004','6','14','12','3','15','1927737697','1370361552','51');");

require("../../inc/footer.php");
?>