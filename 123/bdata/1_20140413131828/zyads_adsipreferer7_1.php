<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipreferer7`;");
E_C("CREATE TABLE `zyads_adsipreferer7` (
  `referer` varchar(1000) default NULL,
  `refererid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`refererid`),
  KEY `referer` (`referer`(500))
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipreferer7` values('','1');");
E_D("replace into `zyads_adsipreferer7` values('http://www.liyuanzhao.com/','2');");
E_D("replace into `zyads_adsipreferer7` values('http://www.liyuanzhao.com/video/search.php?kw=%E4%B8%AD%E5%9B%BD%E5%A5%BD%E5%A3%B0%E9%9F%B3','3');");

require("../../inc/footer.php");
?>