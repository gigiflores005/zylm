<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipsiteurl3`;");
E_C("CREATE TABLE `zyads_adsipsiteurl3` (
  `siteurl` varchar(1000) default NULL,
  `siteurlid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`siteurlid`),
  KEY `siteurl` (`siteurl`(500))
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipsiteurl3` values('http://www.liyuanzhao.com/','1');");
E_D("replace into `zyads_adsipsiteurl3` values('','2');");
E_D("replace into `zyads_adsipsiteurl3` values('http://destoon.test.com/','3');");
E_D("replace into `zyads_adsipsiteurl3` values('http://www.liyuanzhao.com/video/down.php?itemid=3723','4');");
E_D("replace into `zyads_adsipsiteurl3` values('http://www.liyuanzhao.com/video/list-4.html','5');");

require("../../inc/footer.php");
?>