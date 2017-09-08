<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_onlinepay`;");
E_C("CREATE TABLE `zyads_onlinepay` (
  `onlineid` mediumint(8) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `imoney` double(10,2) NOT NULL default '0.00',
  `paytype` char(10) NOT NULL,
  `addtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `orderid` varchar(50) NOT NULL,
  `adminuser` varchar(50) NOT NULL,
  `payinfo` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`onlineid`),
  KEY `orderid` (`orderid`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_onlinepay` values('1','guanggaozhu','2000.00','','2013-06-02 12:21:44','','admin','ฒโสินใธๆึ๗','3');");
E_D("replace into `zyads_onlinepay` values('2','lmycgs','10.00','day','2014-03-15 18:54:54','','admin','0','3');");
E_D("replace into `zyads_onlinepay` values('3','lmycgs','1.00','bc','2014-03-15 19:49:48','2014-3-15 / 2014-3-15','admin','1','3');");

require("../../inc/footer.php");
?>