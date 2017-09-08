<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipsiteurl7`;");
E_C("CREATE TABLE `zyads_adsipsiteurl7` (
  `siteurl` varchar(1000) default NULL,
  `siteurlid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`siteurlid`),
  KEY `siteurl` (`siteurl`(500))
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipsiteurl7` values('http://www.liyuanzhao.com/','1');");
E_D("replace into `zyads_adsipsiteurl7` values('http://destoon.test.com/','2');");
E_D("replace into `zyads_adsipsiteurl7` values('','3');");
E_D("replace into `zyads_adsipsiteurl7` values('http://www.liyuanzhao.com/video/list-14.html','4');");
E_D("replace into `zyads_adsipsiteurl7` values('http://www.liyuanzhao.com/video/show-4359.html','5');");
E_D("replace into `zyads_adsipsiteurl7` values('http://www.liyuanzhao.com/video/show-1601.html','6');");
E_D("replace into `zyads_adsipsiteurl7` values('http://www.liyuanzhao.com/video/list-15.html','7');");

require("../../inc/footer.php");
?>