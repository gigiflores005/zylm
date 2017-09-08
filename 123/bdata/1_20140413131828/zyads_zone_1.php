<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_zone`;");
E_C("CREATE TABLE `zyads_zone` (
  `zoneid` mediumint(8) unsigned NOT NULL auto_increment,
  `uid` mediumint(8) NOT NULL,
  `siteid` mediumint(8) NOT NULL default '0',
  `zonename` varchar(255) NOT NULL,
  `zonetype` varchar(10) NOT NULL,
  `zoneinfo` varchar(255) NOT NULL,
  `plantype` char(3) NOT NULL,
  `adstypeid` mediumint(8) NOT NULL,
  `viewtype` tinyint(1) NOT NULL default '0',
  `viewadsid` varchar(255) default NULL,
  `width` smallint(6) NOT NULL default '0',
  `height` smallint(6) NOT NULL default '0',
  `cpmtime` mediumint(8) NOT NULL default '0',
  `cpmtimenum` tinyint(1) NOT NULL default '0',
  `codestyle` varchar(255) NOT NULL,
  `alternatetype` tinyint(1) default '0',
  `alternateurl` varchar(255) default NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY  (`zoneid`),
  KEY `uid` (`uid`),
  KEY `siteid` (`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_zone` values('4','1002','2','智能,普通图片/Flash,468*60','','','cpa','16','1','5','468','60','0','0','','0','','2013-06-02 12:55:36');");
E_D("replace into `zyads_zone` values('3','1002','2','智能,普通图片/Flash,950*90','','','cpc','7','1','1','950','90','0','0','','0','','2013-06-02 12:35:28');");
E_D("replace into `zyads_zone` values('5','1002','3','智能,普通图片/Flash,300*300','','','cps','20','1','2','300','300','0','0','','0','','2013-06-02 13:02:26');");
E_D("replace into `zyads_zone` values('6','1002','3','智能,普通图片/Flash,950*90','','','cpc','7','1','1','950','90','0','0','','0','','2013-06-02 13:11:56');");
E_D("replace into `zyads_zone` values('7','1002','3','智能,普通图片/Flash,300*300','','','cps','20','1','2','300','300','0','0','','0','','2013-06-02 13:18:36');");
E_D("replace into `zyads_zone` values('8','1002','3','智能,普通图片/Flash,468*60','','','cpa','16','1','5','468','60','0','0','','0','','2013-06-02 13:19:01');");
E_D("replace into `zyads_zone` values('9','1002','3','智能,普通弹窗,0*0','','','cpm','9','1','3','0','0','0','0','','0','','2013-06-02 13:19:16');");
E_D("replace into `zyads_zone` values('10','1002','3','智能,右下角漂浮,200*200','','','cpv','15','1','4','200','200','0','0','','0','','2013-06-02 13:22:15');");
E_D("replace into `zyads_zone` values('11','1002','3','智能,普通图片/Flash,468*60','','','cpa','16','1','5','468','60','0','0','','0','','2013-06-02 13:46:03');");
E_D("replace into `zyads_zone` values('12','1002','3','智能,右下角漂浮,200*200','','','cpv','15','1','6','200','200','0','0','','0','','2013-06-03 13:11:34');");
E_D("replace into `zyads_zone` values('13','1002','2','智能,普通图片/Flash,250*250','','','cpc','7','1','7','250','250','0','0','','0','','2013-06-03 13:28:23');");
E_D("replace into `zyads_zone` values('14','1010','4','智能,普通弹窗,0*0','','','cpm','9','1','3','0','0','0','0','','0','','2014-03-15 17:03:54');");
E_D("replace into `zyads_zone` values('15','1010','4','智能,普通弹窗,0*0','','','cpm','9','1','3','0','0','0','0','','0','','2014-03-15 17:31:04');");
E_D("replace into `zyads_zone` values('16','1010','4','uuse2012','','','cpa','16','1','5','468','60','0','0','','0','','2014-03-15 17:43:13');");
E_D("replace into `zyads_zone` values('17','1010','4','智能,普通弹窗,0*003月15日','','','cpm','9','1','3','0','0','300','0','','0','','2014-03-15 17:52:42');");
E_D("replace into `zyads_zone` values('18','1010','4','Cpa,自定义链接','','','cpa','24','1','5','468','60','0','0','','0','','2014-03-15 17:55:13');");
E_D("replace into `zyads_zone` values('19','1010','4','智能,普通弹窗,0*0','','','cpm','9','1','3','0','0','300','0','','0','','2014-03-17 23:27:38');");
E_D("replace into `zyads_zone` values('20','1010','4','智能,退出弹窗,0*0','','','cpm','14','1','8','0','0','0','0','','0','','2014-03-25 00:21:41');");
E_D("replace into `zyads_zone` values('21','1010','4','智能,普通弹窗,0*0','','','cpm','9','1','3','0','0','300','0','','0','','2014-03-25 00:24:13');");
E_D("replace into `zyads_zone` values('22','1010','4','智能,退出弹窗,0*0','','','cpm','14','1','8','0','0','0','0','','0','','2014-03-25 00:25:17');");
E_D("replace into `zyads_zone` values('23','1010','4','智能,普通图片/Flash,468*60','','','cpa','16','1','5','468','60','0','0','','0','','2014-04-12 16:51:31');");

require("../../inc/footer.php");
?>