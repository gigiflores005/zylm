<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_users`;");
E_C("CREATE TABLE `zyads_users` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `question` varchar(20) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `qq` varchar(11) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `accountname` varchar(120) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `bankacc` varchar(120) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `company` varchar(100) default NULL,
  `companyinfo` varchar(100) default NULL,
  `recommend` varchar(8) default NULL COMMENT '?????',
  `regtime` datetime NOT NULL,
  `regip` char(15) NOT NULL,
  `logintime` datetime NOT NULL default '0000-00-00 00:00:00',
  `loginnum` mediumint(8) NOT NULL default '0',
  `loginip` char(15) NOT NULL default '0.0.0.0',
  `cpmdeduction` tinyint(3) NOT NULL default '0',
  `cpcdeduction` tinyint(3) NOT NULL default '0',
  `cpadeduction` tinyint(3) NOT NULL default '0',
  `cpsdeduction` tinyint(3) NOT NULL default '0',
  `cpvdeduction` tinyint(3) NOT NULL default '0',
  `money` double(12,4) default '0.0000',
  `daymoney` double(12,4) NOT NULL default '0.0000',
  `weekmoney` double(12,4) default '0.0000',
  `monthmoney` double(12,4) default '0.0000',
  `xmoney` double(12,4) NOT NULL default '0.0000',
  `integral` int(10) unsigned NOT NULL default '0',
  `activateid` varchar(11) NOT NULL,
  `clusterid` tinyint(3) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '1',
  `status` tinyint(1) NOT NULL default '0',
  `userinfo` varchar(200) default NULL,
  `view` mediumint(8) NOT NULL default '0',
  `pvstep` smallint(4) NOT NULL default '0',
  `serviceid` mediumint(8) NOT NULL default '0',
  `nums` mediumint(8) NOT NULL default '0',
  `cpczlink` tinyint(1) NOT NULL default '1',
  `cpazlink` tinyint(1) NOT NULL default '1',
  `cpszlink` tinyint(1) NOT NULL default '1',
  `cpmzlink` tinyint(1) NOT NULL default '1',
  `insite` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`uid`),
  KEY `username` (`username`),
  KEY `type` (`type`),
  KEY `daymoney` (`daymoney`),
  KEY `weekmoney` (`weekmoney`),
  KEY `monthmoney` (`monthmoney`),
  KEY `serviceid` (`serviceid`)
) ENGINE=MyISAM AUTO_INCREMENT=1014 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_users` values('1003','xiaoli','e10adc3949ba59abbe56e057f20f883e','','','','350826748','','','','','','','小李','','','0','2013-06-02 11:43:13','27.213.3.79','0000-00-00 00:00:00','0','0.0.0.0','0','0','0','0','0','0.0000','0.0000','0.0000','0.0000','0.0000','0','','0','3','2','','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_users` values('1004','guanggaozhu','e10adc3949ba59abbe56e057f20f883e','abc','123','123456@qq.com','','','','','','','','李子','','','0','2013-06-02 11:44:01','27.213.3.79','2013-06-09 13:00:11','2','222.215.160.187','0','0','0','0','0','1994.2420','0.0000','0.0000','0.0000','0.0000','0','1370144641','0','2','2','','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_users` values('1002','wangzhanzhu','e10adc3949ba59abbe56e057f20f883e','abc','123','123456@qq.com','','','','王子','alipay','','123456@qq.com','王子',NULL,NULL,'','2013-06-02 11:42:32','27.213.3.79','2014-03-15 19:14:08','9','127.0.0.1','0','0','0','0','0','0.0000','0.0000','3.1000','0.0000','0.0000','0','1370144552','0','1','2',NULL,'0','0','0','204','1','1','1','1','1');");
E_D("replace into `zyads_users` values('1005','xiaoliu','e10adc3949ba59abbe56e057f20f883e','','','','350826748','','','','','','','小刘','','','0','2013-06-02 11:44:23','27.213.3.79','0000-00-00 00:00:00','0','0.0.0.0','0','0','0','0','0','0.0000','0.0000','0.0000','0.0000','0.0000','0','','0','4','2','','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_users` values('1006','AlexledovichA','664ff28c0d5b3df0436af2b0c554c96a','','on','alexledovicha@yandex.ru','','123456','','AlexledovichA','icbc','AlexledovichA','','alexledovi',NULL,NULL,'','2013-06-02 18:25:57','212.3.128.193','0000-00-00 00:00:00','0','0.0.0.0','0','0','0','0','0','0.0000','0.0000','0.0000','0.0000','0.0000','0','1370168757','0','0','2',NULL,'0','0','0','0','1','1','1','1','1');");
E_D("replace into `zyads_users` values('1007','ajjfsfd','1e3bdd61cb10d61bdfcf955a1543772d','','on','lidka_arutyunova@mail.ru','','123456','','ajjfsfd','icbc','ajjfsfd','','lidka_arut',NULL,NULL,'','2013-06-03 00:57:05','46.118.153.7','0000-00-00 00:00:00','0','0.0.0.0','0','0','0','0','0','0.0000','0.0000','0.0000','0.0000','0.0000','0','1370192225','0','0','2',NULL,'0','0','0','0','1','1','1','1','1');");
E_D("replace into `zyads_users` values('1008','PiomePhew','4012933a877438b5f752d381ccb92d3b','','on','clieplaps@hotmail.com','','123456','','PiomePhew','icbc','PiomePhew','','clieplaps@',NULL,NULL,'','2013-06-06 20:52:10','95.158.246.206','0000-00-00 00:00:00','0','0.0.0.0','0','0','0','0','0','0.0000','0.0000','0.0000','0.0000','0.0000','0','1370523130','0','0','2',NULL,'0','0','0','0','1','1','1','1','1');");
E_D("replace into `zyads_users` values('1009','Marieralinvex','f23b1deef90a027537f3b8cab721ca3e','','on','weestotly@hotmail.com','','123456','','Marieralinvex','icbc','Marieralinvex','','weestotly@',NULL,NULL,'','2013-06-09 02:42:05','95.158.224.242','0000-00-00 00:00:00','0','0.0.0.0','0','0','0','0','0','0.0000','0.0000','0.0000','0.0000','0.0000','0','1370716925','0','0','2',NULL,'0','0','0','0','1','1','1','1','1');");
E_D("replace into `zyads_users` values('1010','lmycgs','e7de33bd2f5ccb2a18e3f825f5cdd9dd','771234','3241321231','123123123@qq.com','132123','','','1231','icbc','1231231231','132123123','1231',NULL,NULL,'','2014-03-15 16:59:33','127.0.0.1','2014-03-15 19:29:08','8','127.0.0.1','0','0','0','0','0','0.0000','12.0000','0.0000','0.0000','0.0000','0','1394873973','0','1','2',NULL,'0','0','0','1','1','1','1','1','1');");
E_D("replace into `zyads_users` values('1011','lmycgs123','e7de33bd2f5ccb2a18e3f825f5cdd9dd','434324','123132123','132132132@qq.com','132132123','','','1131','icbc','123123132132151435','1231321321321','1231',NULL,NULL,'','2014-03-15 17:00:22','127.0.0.1','0000-00-00 00:00:00','0','0.0.0.0','0','0','0','0','0','0.0000','0.0000','0.0000','0.0000','0.0000','0','1394874022','0','1','2',NULL,'0','0','0','0','1','1','1','1','1');");
E_D("replace into `zyads_users` values('1012','lmycgs2','e7de33bd2f5ccb2a18e3f825f5cdd9dd','4341321','132132123','123132123@qq.com','123123','','','1321','icbc','1321321','132132132','1321',NULL,NULL,'','2014-03-15 17:55:55','127.0.0.1','0000-00-00 00:00:00','0','0.0.0.0','0','0','0','0','0','0.0000','0.0000','0.0000','0.0000','0.0000','0','1394877355','0','1','2',NULL,'0','0','0','0','1','1','1','1','1');");
E_D("replace into `zyads_users` values('1013','lmycgs3','e7de33bd2f5ccb2a18e3f825f5cdd9dd','321321231','454321','132132132@qq.com','1231321','','','4321','icbc','132132','132132132','2313',NULL,NULL,'','2014-03-15 17:59:03','127.0.0.1','2014-03-15 17:59:22','1','127.0.0.1','0','0','0','0','0','0.0000','0.0000','0.0000','0.0000','0.0000','0','1394877543','0','1','2',NULL,'0','0','0','0','1','1','1','1','1');");

require("../../inc/footer.php");
?>