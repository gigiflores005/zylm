<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipsiteurl4`;");
E_C("CREATE TABLE `zyads_adsipsiteurl4` (
  `siteurl` varchar(1000) default NULL,
  `siteurlid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`siteurlid`),
  KEY `siteurl` (`siteurl`(500))
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipsiteurl4` values('','1');");
E_D("replace into `zyads_adsipsiteurl4` values('http://www.liyuanzhao.com/','2');");
E_D("replace into `zyads_adsipsiteurl4` values('http://www.liyuanzhao.com/video/show-4257.html','3');");
E_D("replace into `zyads_adsipsiteurl4` values('http://127.0.0.1/','4');");

require("../../inc/footer.php");
?>