<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipreferer6`;");
E_C("CREATE TABLE `zyads_adsipreferer6` (
  `referer` varchar(1000) default NULL,
  `refererid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`refererid`),
  KEY `referer` (`referer`(500))
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipreferer6` values('','1');");
E_D("replace into `zyads_adsipreferer6` values('http://www.liyuanzhao.com/video/list-4.html','2');");
E_D("replace into `zyads_adsipreferer6` values('http://www.liyuanzhao.com/','3');");
E_D("replace into `zyads_adsipreferer6` values('http://bbs.admin5.com/forum.php?mod=viewthread&tid=12204554&extra=page%3D3%26filter%3Dsortid%26sortid%3D309%26sortid%3D309','4');");
E_D("replace into `zyads_adsipreferer6` values('http://bbs.admin5.com/thread-8445006-1-1.html','5');");

require("../../inc/footer.php");
?>