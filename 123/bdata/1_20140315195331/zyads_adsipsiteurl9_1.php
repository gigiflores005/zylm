<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipsiteurl9`;");
E_C("CREATE TABLE `zyads_adsipsiteurl9` (
  `siteurl` varchar(1000) default NULL,
  `siteurlid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`siteurlid`),
  KEY `siteurl` (`siteurl`(500))
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipsiteurl9` values('','1');");
E_D("replace into `zyads_adsipsiteurl9` values('http://www.liyuanzhao.com/','2');");

require("../../inc/footer.php");
?>