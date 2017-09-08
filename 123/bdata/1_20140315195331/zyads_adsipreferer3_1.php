<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipreferer3`;");
E_C("CREATE TABLE `zyads_adsipreferer3` (
  `referer` varchar(1000) default NULL,
  `refererid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`refererid`),
  KEY `referer` (`referer`(500))
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipreferer3` values('http://bbs.admin5.com/thread-11314408-1-4.html','1');");
E_D("replace into `zyads_adsipreferer3` values('','2');");
E_D("replace into `zyads_adsipreferer3` values('http://bbs.admin5.com/forum.php?mod=viewthread&tid=12188752&extra=page%3D5%26filter%3Dsortid%26sortid%3D310%26sortid%3D310','3');");
E_D("replace into `zyads_adsipreferer3` values('http://www.liyuanzhao.com/video/show-3723.html','4');");
E_D("replace into `zyads_adsipreferer3` values('http://www.liyuanzhao.com/','5');");
E_D("replace into `zyads_adsipreferer3` values('http://bbs.admin5.com/thread-8445006-1-1.html','6');");

require("../../inc/footer.php");
?>