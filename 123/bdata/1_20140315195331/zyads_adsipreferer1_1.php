<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipreferer1`;");
E_C("CREATE TABLE `zyads_adsipreferer1` (
  `referer` varchar(1000) default NULL,
  `refererid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`refererid`),
  KEY `referer` (`referer`(500))
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipreferer1` values('','1');");
E_D("replace into `zyads_adsipreferer1` values('http://bbs.admin5.com/forum.php?mod=viewthread&tid=12188752&extra=page%3D3%26filter%3Dsortid%26sortid%3D310%26sortid%3D310','2');");

require("../../inc/footer.php");
?>