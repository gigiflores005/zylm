<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsip3`;");
E_C("CREATE TABLE `zyads_adsip3` (
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
E_D("replace into `zyads_adsip3` values('1002','1004','1','11','3','2','7','976816932','1370230695','1');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','976816932','1370236669','2');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1928244684','1370239916','3');");
E_D("replace into `zyads_adsip3` values('1002','1004','1','11','3','2','7','465405151','1370240891','4');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','465405151','1370240893','5');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','606873189','1370240946','6');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1695588407','1370246370','7');");
E_D("replace into `zyads_adsip3` values('1002','1004','1','11','3','2','7','1695588407','1370246377','8');");
E_D("replace into `zyads_adsip3` values('1002','1004','1','11','3','2','7','1919528519','1370246458','9');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1919528519','1370246460','10');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2100097600','1370246627','11');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1991951660','1370246753','12');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','3701917646','1370247593','13');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','3733222822','1370247623','14');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1020299847','1370249534','15');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1007031573','1370260474','16');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2027073711','1370260483','17');");
E_D("replace into `zyads_adsip3` values('1002','1004','7','11','13','2','7','1880043434','1370263100','18');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1880043434','1370263102','19');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1895388021','1370266287','20');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2006106427','1370266533','21');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1884381220','1370267094','22');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','3659084231','1370267102','23');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1018879005','1370267197','24');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1007666766','1370268216','25');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2072654849','1370268289','26');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2102937932','1370268928','27');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','3701509836','1370269694','28');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1700172353','1370269721','29');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1902359727','1370270046','30');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2101559335','1370270328','31');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2006180187','1370271127','32');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','3683332975','1370271518','33');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','1778608008','1370272285','34');");
E_D("replace into `zyads_adsip3` values('1002','1004','1','11','3','2','7','1778608008','1370272317','35');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2095316584','1370272527','36');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2075727438','1370273819','37');");
E_D("replace into `zyads_adsip3` values('1002','1004','6','14','12','3','15','2075563536','1370274170','38');");
E_D("replace into `zyads_adsip3` values('1002','1004','1','11','3','2','7','2075563536','1370274188','39');");

require("../../inc/footer.php");
?>