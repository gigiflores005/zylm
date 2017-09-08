<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipreferer4`;");
E_C("CREATE TABLE `zyads_adsipreferer4` (
  `referer` varchar(1000) default NULL,
  `refererid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`refererid`),
  KEY `referer` (`referer`(500))
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipreferer4` values('','1');");
E_D("replace into `zyads_adsipreferer4` values('http://bbs.admin5.com/thread-12188752-1-1.html','2');");
E_D("replace into `zyads_adsipreferer4` values('http://www.liyuanzhao.com/','3');");

require("../../inc/footer.php");
?>