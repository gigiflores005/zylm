<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_tempcip`;");
E_C("CREATE TABLE `zyads_tempcip` (
  `ip` char(15) NOT NULL,
  `planid` mediumint(8) NOT NULL,
  `adsid` mediumint(8) NOT NULL default '0',
  `zoneid` mediumint(8) NOT NULL default '0',
  `day` date NOT NULL,
  `type` tinyint(4) NOT NULL default '0',
  KEY `ip` (`ip`),
  KEY `planid` (`planid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `zyads_tempcip` values('27.213.3.79','12','2','5','2013-06-02','0');");
E_D("replace into `zyads_tempcip` values('27.213.3.79','15','5','8','2013-06-02','0');");
E_D("replace into `zyads_tempcip` values('27.213.3.79','14','4','10','2013-06-02','0');");
E_D("replace into `zyads_tempcip` values('58.57.11.36','14','6','12','2013-06-03','0');");
E_D("replace into `zyads_tempcip` values('112.15.47.170','14','6','12','2013-06-03','0');");
E_D("replace into `zyads_tempcip` values('123.138.52.1','14','6','12','2013-06-03','0');");
E_D("replace into `zyads_tempcip` values('106.3.103.136','14','6','12','2013-06-03','0');");
E_D("replace into `zyads_tempcip` values('123.182.150.16','14','6','12','2013-06-03','0');");
E_D("replace into `zyads_tempcip` values('120.82.108.98','14','6','12','2013-06-05','0');");
E_D("replace into `zyads_tempcip` values('58.211.170.14','14','6','12','2013-06-05','0');");
E_D("replace into `zyads_tempcip` values('60.222.34.43','14','6','12','2013-06-06','0');");
E_D("replace into `zyads_tempcip` values('180.153.206.16','14','6','12','2013-06-06','0');");
E_D("replace into `zyads_tempcip` values('27.106.163.12','14','6','12','2013-06-08','0');");
E_D("replace into `zyads_tempcip` values('112.237.13.117','14','6','12','2013-06-08','0');");
E_D("replace into `zyads_tempcip` values('113.129.87.14','14','6','12','2013-06-09','0');");
E_D("replace into `zyads_tempcip` values('127.0.0.1','15','5','18','2014-03-15','0');");
E_D("replace into `zyads_tempcip` values('127.0.0.1','15','5','18','2014-03-17','0');");

require("../../inc/footer.php");
?>